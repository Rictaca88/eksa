<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Restablecer Contraseña - EKSA</title>
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
    .btn-action {
      display: inline-block;
      background: linear-gradient(135deg, #002d62, #0284c7);
      color: #ffffff !important;
      font-weight: 700;
      font-size: 14px;
      padding: 14px 32px;
      border-radius: 30px;
      text-decoration: none;
      box-shadow: 0 4px 12px rgba(0, 45, 98, 0.25);
      margin: 15px 0;
    }
    .btn-wrap {
      text-align: center;
      margin: 25px 0;
    }
    .security-notice {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      padding: 14px 16px;
      border-radius: 8px;
      font-size: 12px;
      color: #64748b;
      margin-top: 25px;
      line-height: 1.5;
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
      <p>Recuperación de Acceso &bull; Panel Administrativo</p>
    </div>

    <div class="email-body">
      <h2>Solicitud de Restablecimiento de Contraseña</h2>
      <p>Hola <strong>{{ $user->name ?? 'Usuario' }}</strong>,</p>
      <p>Hemos recibido una solicitud para restablecer la contraseña de acceso a tu cuenta administrativa en <strong>EKSA</strong>.</p>
      <p>Para crear una nueva contraseña, haz clic en el siguiente botón:</p>

      <div class="btn-wrap">
        <a href="{{ $resetUrl }}" class="btn-action" target="_blank">Restablecer Mi Contraseña</a>
      </div>

      <p style="font-size: 13px; color: #64748b;">Este enlace de recuperación es válido por 60 minutos.</p>

      <div class="security-notice">
        <strong>¿No solicitaste este cambio?</strong> Si no realizaste esta solicitud, puedes ignorar este mensaje; tu contraseña actual continuará siendo segura.
      </div>
    </div>

    <div class="email-footer">
      &copy; {{ date('Y') }} EKSA Chile. Todos los derechos reservados.<br>
      Este es un correo automático de seguridad del sistema.
    </div>
  </div>

</body>
</html>

