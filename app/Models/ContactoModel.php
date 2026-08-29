<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

class ContactoModel extends Model
{
    use HasFactory;

    protected $table = 'contactos';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'empresa',
        'fono',
        'email',
        'sucursal',
        'asunto',
        'message',
        'estado',
    ];

    /**
     * Guarda un nuevo contacto de manera segura y verifica que ningún campo esté vacío o null.
     *
     * @param object|array $contacto
     * @param int $op
     * @return ContactoModel
     * @throws InvalidArgumentException
     */
    public static function ContactoGuardar($contacto, $op = 0)
    {
        $data = (array) $contacto;

        $nombre   = trim($data['nombre'] ?? '');
        $empresa  = trim($data['empresa'] ?? '');
        $fono     = trim($data['fono'] ?? '');
        $email    = trim($data['email'] ?? '');
        $sucursal = trim($data['sucursal'] ?? '');
        $asunto   = trim($data['asunto'] ?? '');
        $message  = trim($data['mensaje'] ?? $data['message'] ?? '');

        // Validación de integridad: ningún campo puede estar vacío ni ser nulo
        if (
            empty($nombre) ||
            empty($empresa) ||
            empty($fono) ||
            empty($email) ||
            empty($sucursal) ||
            empty($asunto) ||
            empty($message)
        ) {
            throw new InvalidArgumentException('Todos los campos del formulario son obligatorios y no pueden estar vacíos.');
        }

        return self::create([
            'nombre'   => mb_substr($nombre, 0, 60),
            'empresa'  => mb_substr($empresa, 0, 100),
            'fono'     => mb_substr($fono, 0, 15),
            'email'    => mb_substr($email, 0, 50),
            'sucursal' => mb_substr($sucursal, 0, 100),
            'asunto'   => mb_substr($asunto, 0, 100),
            'message'  => $message,
            'estado'   => 0,
        ]);
    }
}
