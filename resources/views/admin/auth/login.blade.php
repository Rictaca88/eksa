<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Acceso Administrativo - EKSA</title>
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

    .link-cyan {
      color: var(--eksa-cyan);
      font-weight: 600;
      text-decoration: none;
      font-size: 13px;
      transition: color 0.2s ease;
    }
    .link-cyan:hover {
      color: var(--eksa-cyan-hover);
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="auth-card">
    <div class="text-center">
      <div class="brand-logo-wrap">
        <img src="{{ url('img/logo_eksa.jpeg') }}" alt="Logo EKSA">
      </div>
      <h1 class="auth-title">Acceso Administrativo</h1>
      <p class="auth-subtitle">Ingresa tus credenciales para acceder al panel</p>
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

    <form id="adminLoginForm" action="{{ route('admin.login.post') }}" method="POST">
      @csrf

      <div class="form-group mb-3">
        <label class="small font-weight-bold text-muted">Correo Electrónico</label>
        <div class="input-group">
          <input type="email" name="email" class="form-control form-control-auth" placeholder="correo@ejemplo.cl" value="{{ old('email') }}" required autofocus>
        </div>
      </div>

      <div class="form-group mb-3">
        <div class="d-flex justify-content-between align-items-center mb-1">
          <label class="small font-weight-bold text-muted mb-0">Contraseña</label>
          <a href="{{ route('admin.password.request') }}" class="link-cyan">¿Olvidaste tu contraseña?</a>
        </div>
        <div class="input-group">
          <input type="password" name="password" id="passwordInput" class="form-control form-control-auth" placeholder="••••••••" required>
        </div>
      </div>

      <div class="form-group form-check mb-4">
        <input type="checkbox" class="form-check-input" id="rememberCheck" name="remember" value="1">
        <label class="form-check-label small text-muted" for="rememberCheck">Recordar sesión en este dispositivo</label>
      </div>

      <button type="submit" id="btnLoginSubmit" class="btn-auth-submit">
        <i class="fa-solid fa-right-to-bracket"></i> Iniciar Sesión
      </button>
    </form>

    <div class="text-center mt-4 pt-3 border-top">
      <a href="{{ route('home') }}" class="small text-muted text-decoration-none">
        <i class="fa-solid fa-arrow-left mr-1"></i> Volver a la página principal
      </a>
    </div>
  </div>

  <script src="{{ url('js/jquery.min.js') }}"></script>
  <script src="{{ url('js/bootstrap.min.js') }}"></script>
</body>
</html>

