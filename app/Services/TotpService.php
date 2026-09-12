<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class TotpService
{
    private static string $base32Chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ234567';

    /**
     * Genera una clave secreta aleatoria en formato Base32 (16 caracteres).
     */
    public static function generateSecret(int $length = 16): string
    {
        $secret = '';
        $random = random_bytes($length);
        for ($i = 0; $i < $length; $i++) {
            $secret .= self::$base32Chars[ord($random[$i]) % 32];
        }
        return $secret;
    }

    /**
     * Decodifica una cadena en Base32 a formato binario.
     */
    public static function base32Decode(string $secret): string
    {
        $secret = strtoupper(str_replace([' ', '-'], '', $secret));
        $buffer = 0;
        $bufferSize = 0;
        $binary = '';

        for ($i = 0; $i < strlen($secret); $i++) {
            $pos = strpos(self::$base32Chars, $secret[$i]);
            if ($pos === false) {
                continue;
            }
            $buffer = ($buffer << 5) | $pos;
            $bufferSize += 5;
            if ($bufferSize >= 8) {
                $bufferSize -= 8;
                $binary .= chr(($buffer >> $bufferSize) & 0xFF);
            }
        }

        return $binary;
    }

    /**
     * Calcula el código OTP de 6 dígitos para un intervalo de tiempo dado (RFC 6238).
     */
    public static function getCode(string $secret, ?int $timeSlice = null): string
    {
        if ($timeSlice === null) {
            $timeSlice = (int) floor(time() / 30);
        }

        $secretKey = self::base32Decode($secret);
        $time = chr(0) . chr(0) . chr(0) . chr(0) . pack('N*', $timeSlice);
        $hmac = hash_hmac('sha1', $time, $secretKey, true);
        $offset = ord(substr($hmac, -1)) & 0x0F;
        $hashPart = substr($hmac, $offset, 4);
        $value = unpack('N', $hashPart)[1] & 0x7FFFFFFF;
        $modulo = $value % 1000000;

        return str_pad((string) $modulo, 6, '0', STR_PAD_LEFT);
    }

    /**
     * Verifica si el código de 6 dígitos ingresado coincide con la clave secreta
     * dentro de una ventana de tolerancia horaria (± 1 periodo de 30s).
     */
    public static function verifyCode(string $secret, string $code, int $discrepancy = 1): bool
    {
        $code = trim($code);
        if (strlen($code) !== 6 || !ctype_digit($code)) {
            return false;
        }

        $currentTimeSlice = (int) floor(time() / 30);
        for ($i = -$discrepancy; $i <= $discrepancy; $i++) {
            $calculatedCode = self::getCode($secret, $currentTimeSlice + $i);
            if (hash_equals($calculatedCode, $code)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Construye la URL estándar para aplicaciones como Google Authenticator.
     */
    public static function getOtpAuthUrl(string $accountEmail, string $secret, string $issuer = 'EKSA'): string
    {
        $encodedIssuer = rawurlencode($issuer);
        $encodedAccount = rawurlencode($accountEmail);
        return "otpauth://totp/{$encodedIssuer}:{$encodedAccount}?secret={$secret}&issuer={$encodedIssuer}&algorithm=SHA1&digits=6&period=30";
    }

    /**
     * Obtiene una URL para renderizar el código QR de configuración.
     */
    public static function getQrCodeUrl(string $otpAuthUrl, int $size = 200): string
    {
        return 'https://api.qrserver.com/v1/create-qr-code/?size=' . $size . 'x' . $size . '&data=' . urlencode($otpAuthUrl);
    }

    /**
     * Formatea el secreto en bloques de 4 caracteres para facilitar la lectura manual.
     */
    public static function formatSecret(string $secret): string
    {
        return implode(' ', str_split(strtoupper($secret), 4));
    }

    /**
     * Guarda o actualiza el secreto TOTP de un usuario en la base de datos.
     */
    public static function saveUserSecret(int $userId, string $secret): void
    {
        $existing = DB::table('personal_access_tokens')
            ->where('tokenable_type', 'App\\Models\\User')
            ->where('tokenable_id', $userId)
            ->where('name', 'google2fa_secret')
            ->first();

        $abilities = json_encode([
            'secret' => $secret,
            'active' => true,
            'updated_at' => now()->toDateTimeString(),
        ]);

        if ($existing) {
            DB::table('personal_access_tokens')
                ->where('id', $existing->id)
                ->update([
                    'abilities' => $abilities,
                    'updated_at' => now(),
                ]);
        } else {
            DB::table('personal_access_tokens')->insert([
                'tokenable_type' => 'App\\Models\\User',
                'tokenable_id' => $userId,
                'name' => 'google2fa_secret',
                'token' => hash('sha256', 'user_' . $userId . '_totp_token'),
                'abilities' => $abilities,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    /**
     * Obtiene el secreto TOTP activo de un usuario.
     */
    public static function getUserSecret(int $userId): ?string
    {
        $record = DB::table('personal_access_tokens')
            ->where('tokenable_type', 'App\\Models\\User')
            ->where('tokenable_id', $userId)
            ->where('name', 'google2fa_secret')
            ->first();

        if (!$record || empty($record->abilities)) {
            return null;
        }

        $data = json_decode($record->abilities, true);
        if (is_array($data) && !empty($data['secret']) && ($data['active'] ?? true)) {
            return $data['secret'];
        }

        return null;
    }

    /**
     * Desactiva el secreto TOTP del usuario.
     */
    public static function disableUserSecret(int $userId): void
    {
        DB::table('personal_access_tokens')
            ->where('tokenable_type', 'App\\Models\\User')
            ->where('tokenable_id', $userId)
            ->where('name', 'google2fa_secret')
            ->update([
                'abilities' => json_encode(['active' => false]),
                'updated_at' => now(),
            ]);
    }
}

