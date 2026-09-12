<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Recuperar Contraseña - EKSA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="noindex, nofollow">

  <!-- Google Fonts: Plus Jakarta Sans & Raleway -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Raleway:wght@700;800&display=swap" rel="stylesheet">

  <!-- Font Awesome 6 & Bootstrap 4.6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">

  <style>
    :root {
      --eksa-navy: #002d62;
      --eksa-navy-dark: #001f44;
      --eksa-cyan: #0ea5e9;
      --eksa-cyan-hover: #0284c7;
      --eksa-ice: #f8fafc;
    }

    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
      color: #1e293b;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .auth-card {
      background: #ffffff;
      border-radius: 20px;
      padding: 42px 36px;
      box-shadow: 0 15px 35px rgba(0, 45, 98, 0.08);
      border: 1px solid #e2e8f0;
      width: 100%;
      max-width: 440px;
    }

    .brand-logo-wrap {
      background: #ffffff;
      padding: 6px 12px;
      border-radius: 12px;
      box-shadow: 0 2px 10px rgba(0, 45, 98, 0.08);
      border: 1px solid #e2e8f0;
      display: inline-flex;
      align-items: center;
      margin-bottom: 20px;
    }
    .brand-logo-wrap img {
      height: 48px;
      width: auto;
      object-fit: contain;
    }

    .auth-title {
      font-family: 'Raleway', sans-serif;
      font-size: 22px;
      font-weight: 800;
      color: var(--eksa-navy);
      margin-bottom: 6px;
    }
    .auth-subtitle {
      font-size: 13px;
      color: #64748b;
      margin-bottom: 28px;
      line-height: 1.5;
    }

    .form-control-auth {
      height: 48px;
      border-radius: 10px;
      border: 1px solid #cbd5e1;
      padding: 10px 16px;
      font-size: 14px;
      color: #1e293b;
      transition: all 0.25s ease;
    }
    .form-control-auth:focus {
      border-color: var(--eksa-cyan);
      box-shadow: 0 0 0 4px rgba(14, 165, 233, 0.15);
      outline: none;
    }

    .btn-auth-submit {
      background: linear-gradient(135deg, var(--eksa-navy), #034b94);
      color: #ffffff;
      font-weight: 700;
      font-size: 15px;
      padding: 12px 24px;
      border-radius: 10px;
      border: none;
      width: 100%;
      box-shadow: 0 4px 15px rgba(0, 45, 98, 0.25);
      transition: all 0.25s ease;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }
    .btn-auth-submit:hover {
      background: linear-gradient(135deg, #034b94, var(--eksa-cyan));
      color: #ffffff;
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(14, 165, 233, 0.4);
    }
  </style>
</head>
<body>

  <div class="auth-card">
    <div class="text-center">
      <div class="brand-logo-wrap">
        <img src="{{ url('img/logo_eksa.jpeg') }}" alt="Logo EKSA">
      </div>
      <h1 class="auth-title">Recuperar Contraseña</h1>
      <p class="auth-subtitle">Ingresa tu correo y te enviaremos un enlace seguro para restablecer tu clave de acceso.</p>
    </div>

    @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius: 10px; font-size: 13px;">
        <i class="fa-solid fa-circle-check mr-1"></i> {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert">&times;</button>
      </div>
    @endif

    @if(session('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert" style="border-radius: 10px; font-size: 13px;">
        <i class="fa-solid fa-triangle-exclamation mr-1"></i> {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert">&times;</button>
      </div>
    @endif

    @if($errors->any())
      <div class="alert alert-warning alert-dismissible fade show" role="alert" style="border-radius: 10px; font-size: 13px;">
        @foreach($errors->all() as $error)
          <div><i class="fa-solid fa-circle-exclamation mr-1"></i> {{ $error }}</div>
        @endforeach
        <button type="button" class="close" data-dismiss="alert">&times;</button>
      </div>
    @endif

    <form action="{{ route('admin.password.email') }}" method="POST">
      @csrf

      <div class="form-group mb-4">
        <label class="small font-weight-bold text-muted">Correo Electrónico Registrado</label>
        <input type="email" name="email" class="form-control form-control-auth" placeholder="correo@ejemplo.cl" value="{{ old('email') }}" required autofocus>
      </div>

      <button type="submit" class="btn-auth-submit mb-3">
        <i class="fa-solid fa-paper-plane"></i> Enviar Enlace de Recuperación
      </button>
    </form>

    <div class="text-center mt-4 pt-3 border-top">
      <a href="{{ route('admin.login') }}" class="small text-muted text-decoration-none font-weight-bold">
        <i class="fa-solid fa-arrow-left mr-1"></i> Volver al Inicio de Sesión
      </a>
    </div>
  </div>

  <script src="{{ url('js/jquery.min.js') }}"></script>
  <script src="{{ url('js/bootstrap.min.js') }}"></script>
</body>
</html>

