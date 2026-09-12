<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Código de Verificación MFA - EKSA</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8fafc;
      color: #1e293b;
      margin: 0;
      padding: 30px 15px;
    }
    .email-container {
      max-width: 580px;
      margin: 0 auto;
      background: #ffffff;
      border-radius: 16px;
      overflow: hidden;
      border: 1px solid #e2e8f0;
      box-shadow: 0 4px 15px rgba(0, 45, 98, 0.05);
    }
    .email-header {
      background: linear-gradient(135deg, #001f44 0%, #002d62 100%);
      padding: 30px 25px;
      text-align: center;
      color: #ffffff;
    }
    .email-header h1 {
      margin: 0 0 5px 0;
      font-size: 22px;
      font-weight: 800;
      letter-spacing: 0.5px;
    }
    .email-header p {
      margin: 0;
      font-size: 13px;
      color: #7dd3fc;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
    }
    .email-body {
      padding: 35px 30px;
    }
    .email-body h2 {
      color: #002d62;
      font-size: 18px;
      margin-top: 0;
      margin-bottom: 15px;
    }
    .email-body p {
      font-size: 14px;
      line-height: 1.6;
      color: #475569;
      margin-bottom: 20px;
    }
    .code-box {
      background: #f0f9ff;
      border: 2px dashed #0ea5e9;
      border-radius: 12px;
      padding: 20px;
      text-align: center;
      margin: 25px 0;
    }
    .code-value {
      font-size: 34px;
      font-weight: 800;
      letter-spacing: 8px;
      color: #002d62;
      font-family: 'Courier New', monospace;
      margin: 0;
    }
    .code-hint {
      font-size: 12px;
      color: #0284c7;
      margin-top: 8px;
      font-weight: 600;
    }
    .security-notice {
      background: #fffbeb;
      border-left: 4px solid #f59e0b;
      padding: 12px 15px;
      border-radius: 6px;
      font-size: 12px;
      color: #92400e;
      margin-top: 25px;
    }
    .email-footer {
      background: #f8fafc;
      padding: 20px 30px;
      text-align: center;
      border-top: 1px solid #e2e8f0;
      font-size: 12px;
      color: #94a3b8;
    }
  </style>
</head>
<body>

  <div class="email-container">
    <div class="email-header">
      <h1>EKSA</h1>
      <p>Control de Acceso Seguro &bull; Panel Administrativo</p>
    </div>

    <div class="email-body">
      <h2>Código de Seguridad (Doble Factor)</h2>
      <p>Hola <strong>{{ $user->name ?? 'Administrador' }}</strong>,</p>
      <p>Se ha solicitado un acceso seguro a la plataforma administrativa de <strong>EKSA</strong>. Utiliza el siguiente código de verificación de un solo uso (OTP) para completar la autenticación:</p>

      <div class="code-box">
        <div class="code-value">{{ $code }}</div>
        <div class="code-hint">Válido por los próximos 10 minutos</div>
      </div>

      <p style="font-size: 13px; color: #64748b;">Ingresa este código en la pantalla de verificación para acceder a tu panel.</p>

      <div class="security-notice">
        <strong>Aviso de Seguridad:</strong> Si no has intentado iniciar sesión en el panel de EKSA, te recomendamos cambiar tu contraseña de inmediato.
      </div>
    </div>

    <div class="email-footer">
      &copy; {{ date('Y') }} EKSA Chile. Todos los derechos reservados.<br>
      Este es un correo automático de seguridad del sistema.
    </div>
  </div>

</body>
</html>

