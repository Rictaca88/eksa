<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Nuevo Contacto Web EKSA</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f1f5f9; padding: 20px; color: #1e293b;">
  <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.05); border: 1px solid #e2e8f0;">

    <div style="background-color: #002d62; padding: 24px; text-align: center; color: #ffffff;">
      <h1 style="margin: 0; font-size: 24px; font-weight: 700; letter-spacing: 0.5px;">EKSA</h1>
      <p style="margin: 5px 0 0 0; font-size: 14px; color: #38bdf8;">Nueva Solicitud de Cotización / Contacto Web</p>
    </div>

    <div style="padding: 24px;">
      <p style="font-size: 15px; margin-top: 0;">Se ha recibido una nueva solicitud a través del sitio web con el siguiente detalle:</p>

      <table style="width: 100%; border-collapse: collapse; margin-top: 15px; font-size: 14px;">
        <tr style="background-color: #f8fafc;">
          <td style="padding: 10px 14px; font-weight: bold; border-bottom: 1px solid #e2e8f0; width: 35%; color: #475569;">Nombre y Apellido:</td>
          <td style="padding: 10px 14px; border-bottom: 1px solid #e2e8f0; color: #0f172a;">{{ $nombre }}</td>
        </tr>
        <tr>
          <td style="padding: 10px 14px; font-weight: bold; border-bottom: 1px solid #e2e8f0; color: #475569;">Empresa:</td>
          <td style="padding: 10px 14px; border-bottom: 1px solid #e2e8f0; color: #0f172a;">{{ $empresa }}</td>
        </tr>
        <tr style="background-color: #f8fafc;">
          <td style="padding: 10px 14px; font-weight: bold; border-bottom: 1px solid #e2e8f0; color: #475569;">Teléfono:</td>
          <td style="padding: 10px 14px; border-bottom: 1px solid #e2e8f0; color: #0f172a;"><a href="tel:{{ $fono }}" style="color: #0284c7; text-decoration: none;">{{ $fono }}</a></td>
        </tr>
        <tr>
          <td style="padding: 10px 14px; font-weight: bold; border-bottom: 1px solid #e2e8f0; color: #475569;">Correo Electrónico:</td>
          <td style="padding: 10px 14px; border-bottom: 1px solid #e2e8f0; color: #0f172a;"><a href="mailto:{{ $email }}" style="color: #0284c7; text-decoration: none;">{{ $email }}</a></td>
        </tr>
        <tr style="background-color: #f8fafc;">
          <td style="padding: 10px 14px; font-weight: bold; border-bottom: 1px solid #e2e8f0; color: #475569;">Sucursal:</td>
          <td style="padding: 10px 14px; border-bottom: 1px solid #e2e8f0; color: #0f172a; text-transform: capitalize;">{{ $sucursal }}</td>
        </tr>
        <tr>
          <td style="padding: 10px 14px; font-weight: bold; border-bottom: 1px solid #e2e8f0; color: #475569;">Asunto / Tipo:</td>
          <td style="padding: 10px 14px; border-bottom: 1px solid #e2e8f0; color: #0f172a; text-transform: capitalize;">{{ $asunto }}</td>
        </tr>
      </table>

      <div style="margin-top: 20px; padding: 16px; background-color: #f8fafc; border-left: 4px solid #0284c7; border-radius: 4px;">
        <strong style="display: block; margin-bottom: 8px; color: #002d62; font-size: 14px;">Detalle del Mensaje:</strong>
        <p style="margin: 0; white-space: pre-line; line-height: 1.6; color: #334155; font-size: 14px;">{{ $mensaje }}</p>
      </div>
    </div>

    <div style="background-color: #f8fafc; padding: 16px; text-align: center; border-top: 1px solid #e2e8f0; font-size: 12px; color: #64748b;">
      Este es un correo automático generado desde el sitio web de <a href="https://www.eksacomercial.cl" style="color: #0284c7; text-decoration: none;">EKSA</a>.
    </div>

  </div>
</body>
</html>
