<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>@yield('title', 'Panel Administrativo') - EKSA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="noindex, nofollow">

  <!-- Google Fonts: Plus Jakarta Sans & Raleway -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Raleway:wght@600;700;800&display=swap" rel="stylesheet">

  <!-- Font Awesome 6 & Bootstrap 4.6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">

  <style>
    :root {
      --eksa-navy: #002d62;
      --eksa-navy-dark: #001f44;
      --eksa-cyan: #0ea5e9;
      --eksa-cyan-hover: #0284c7;
      --eksa-cyan-light: #e0f2fe;
      --eksa-emerald: #10b981;
      --eksa-ice: #f8fafc;
      --eksa-card-bg: #ffffff;
      --eksa-text-main: #1e293b;
      --eksa-text-muted: #64748b;
      --sidebar-width: 260px;
    }

    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      color: var(--eksa-text-main);
      background-color: var(--eksa-ice);
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: 'Raleway', sans-serif;
      font-weight: 700;
    }

    /* Sidebar Layout */
    .admin-wrapper {
      display: flex;
      min-height: 100vh;
    }

    .admin-sidebar {
      width: var(--sidebar-width);
      background: #ffffff;
      border-right: 1px solid #e2e8f0;
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      z-index: 1000;
      display: flex;
      flex-direction: column;
      transition: all 0.3s ease;
      box-shadow: 2px 0 12px rgba(0, 45, 98, 0.03);
    }

    .sidebar-header {
      padding: 20px 22px;
      border-bottom: 1px solid #f1f5f9;
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .brand-logo-wrap {
      background: #ffffff;
      padding: 4px 8px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 45, 98, 0.08);
      border: 1px solid #e2e8f0;
      display: inline-flex;
      align-items: center;
    }
    .brand-logo-wrap img {
      height: 38px;
      width: auto;
      object-fit: contain;
    }

    .brand-text .title {
      font-family: 'Raleway', sans-serif;
      font-size: 18px;
      font-weight: 800;
      color: var(--eksa-navy);
      line-height: 1.1;
      display: block;
    }
    .brand-text .subtitle {
      font-size: 10px;
      color: var(--eksa-cyan);
      font-weight: 700;
      letter-spacing: 0.8px;
      text-transform: uppercase;
      display: block;
    }

    .sidebar-menu {
      padding: 20px 14px;
      flex-grow: 1;
      overflow-y: auto;
    }

    .sidebar-heading {
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 1px;
      color: #94a3b8;
      padding: 10px 14px 6px;
    }

    .nav-link-admin {
      display: flex;
      align-items: center;
      padding: 12px 16px;
      color: #475569;
      font-weight: 600;
      font-size: 14px;
      border-radius: 10px;
      text-decoration: none;
      transition: all 0.2s ease;
      margin-bottom: 5px;
      gap: 12px;
    }
    .nav-link-admin i {
      font-size: 16px;
      width: 20px;
      text-align: center;
      color: #64748b;
      transition: color 0.2s ease;
    }
    .nav-link-admin:hover {
      color: var(--eksa-navy);
      background: #f1f5f9;
      text-decoration: none;
    }
    .nav-link-admin:hover i {
      color: var(--eksa-cyan);
    }
    .nav-link-admin.active {
      background: linear-gradient(135deg, var(--eksa-navy), #034b94);
      color: #ffffff !important;
      box-shadow: 0 4px 12px rgba(0, 45, 98, 0.2);
    }
    .nav-link-admin.active i {
      color: #7dd3fc !important;
    }

    .sidebar-footer {
      padding: 18px 20px;
      border-top: 1px solid #f1f5f9;
      background: #ffffff;
    }

    .btn-logout-sidebar {
      width: 100%;
      background: #fff1f2;
      color: #e11d48;
      border: 1px solid #ffe4e6;
      border-radius: 8px;
      font-size: 13px;
      font-weight: 700;
      padding: 9px 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      cursor: pointer;
      transition: all 0.2s ease;
    }
    .btn-logout-sidebar:hover {
      background: #e11d48;
      color: #ffffff;
    }

    /* Main Content Area */
    .admin-main {
      margin-left: var(--sidebar-width);
      flex-grow: 1;
      min-width: 0;
      display: flex;
      flex-direction: column;
    }

    /* Topbar */
    .admin-topbar {
      background: #ffffff;
      border-bottom: 1px solid #e2e8f0;
      padding: 14px 30px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: sticky;
      top: 0;
      z-index: 999;
      box-shadow: 0 2px 10px rgba(0, 45, 98, 0.03);
    }

    .topbar-left h1 {
      font-size: 20px;
      color: var(--eksa-navy);
      margin: 0;
      font-weight: 800;
    }
    .topbar-left p {
      margin: 0;
      font-size: 12px;
      color: var(--eksa-text-muted);
    }

    .user-pill {
      display: flex;
      align-items: center;
      gap: 10px;
      background: #f8fafc;
      padding: 6px 14px;
      border-radius: 30px;
      border: 1px solid #e2e8f0;
    }
    .user-avatar {
      width: 34px;
      height: 34px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--eksa-navy), var(--eksa-cyan));
      color: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 800;
      font-size: 13px;
    }
    .user-info {
      line-height: 1.2;
    }
    .user-name {
      font-size: 13px;
      font-weight: 700;
      color: var(--eksa-navy);
      display: block;
    }
    .user-mfa-badge {
      font-size: 10px;
      font-weight: 700;
      text-transform: uppercase;
      padding: 1px 6px;
      border-radius: 4px;
    }

    /* Content Area */
    .admin-content {
      padding: 30px;
      flex-grow: 1;
    }

    /* White Cards */
    .card-white {
      background: #ffffff;
      border-radius: 16px;
      border: 1px solid #e2e8f0;
      box-shadow: 0 4px 15px rgba(0, 45, 98, 0.04);
      padding: 24px;
      margin-bottom: 25px;
    }

    .card-white-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 20px;
      padding-bottom: 12px;
      border-bottom: 1px solid #f1f5f9;
    }
    .card-white-title {
      font-size: 17px;
      font-weight: 800;
      color: var(--eksa-navy);
      margin: 0;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    /* Form Controls */
    .form-control-admin {
      border-radius: 8px;
      border: 1px solid #cbd5e1;
      padding: 9px 14px;
      font-size: 14px;
      color: #1e293b;
      transition: all 0.2s ease;
    }
    .form-control-admin:focus {
      border-color: var(--eksa-cyan);
      box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.15);
      outline: none;
    }

    .btn-admin-primary {
      background: linear-gradient(135deg, var(--eksa-navy), #034b94);
      color: #ffffff;
      font-weight: 700;
      font-size: 14px;
      padding: 10px 22px;
      border-radius: 8px;
      border: none;
      box-shadow: 0 4px 12px rgba(0, 45, 98, 0.2);
      transition: all 0.2s ease;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }
    .btn-admin-primary:hover {
      background: linear-gradient(135deg, #034b94, var(--eksa-cyan));
      color: #ffffff;
      transform: translateY(-1px);
      box-shadow: 0 6px 16px rgba(14, 165, 233, 0.35);
    }

    /* Paginación */
    .pagination {
      margin-bottom: 0;
      display: flex;
      padding-left: 0;
      list-style: none;
      border-radius: 8px;
      align-items: center;
    }
    .pagination svg {
      width: 14px !important;
      height: 14px !important;
      max-width: 14px !important;
      max-height: 14px !important;
      display: inline-block !important;
      vertical-align: middle;
    }
    .page-item.active .page-link {
      background-color: var(--eksa-navy) !important;
      border-color: var(--eksa-navy) !important;
      color: #ffffff !important;
    }
    .page-link {
      color: var(--eksa-navy);
      border-radius: 6px;
      margin: 0 2px;
      padding: 6px 12px;
      font-size: 13px;
      font-weight: 600;
      border: 1px solid #e2e8f0;
    }
    .page-link:hover {
      background-color: #e0f2fe;
      color: var(--eksa-cyan-hover);
    }

    /* Responsive */
    @media (max-width: 991px) {
      .admin-sidebar {
        transform: translateX(-100%);
      }
      .admin-sidebar.show {
        transform: translateX(0);
      }
      .admin-main {
        margin-left: 0;
      }
    }
  </style>

  @yield('styles')
</head>
<body>

  <div class="admin-wrapper">

    <!-- Sidebar Fijo Izquierdo -->
    <aside class="admin-sidebar" id="adminSidebar">
      <div class="sidebar-header">
        <div class="brand-logo-wrap">
          <img src="{{ url('img/logo_eksa.jpeg') }}" alt="Logo EKSA">
        </div>
        <div class="brand-text">
          <span class="title">EKSA</span>
          <span class="subtitle">Panel de Control</span>
        </div>
      </div>

      <nav class="sidebar-menu">
        <div class="sidebar-heading">Módulos Principales</div>

        <a href="{{ route('admin.dashboard') }}" class="nav-link-admin {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
          <i class="fa-solid fa-chart-pie"></i>
          <span>Dashboard</span>
        </a>

        <a href="{{ route('admin.contactos') }}" class="nav-link-admin {{ request()->routeIs('admin.contactos*') ? 'active' : '' }}">
          <i class="fa-solid fa-envelope-open-text"></i>
          <span>Contactos</span>
          @php
            $hoyBadge = \App\Models\ContactoModel::whereDate('reg_date', today())->count();
          @endphp
          @if($hoyBadge > 0)
            <span class="badge badge-info ml-auto font-weight-bold" style="background-color: var(--eksa-cyan); font-size: 11px;">
              +{{ $hoyBadge }} hoy
            </span>
          @endif
        </a>

        <div class="sidebar-heading mt-3">Seguridad & Cuenta</div>

        <a href="{{ route('admin.perfil') }}" class="nav-link-admin {{ request()->routeIs('admin.perfil*') ? 'active' : '' }}">
          <i class="fa-solid fa-user-shield"></i>
          <span>Mi Perfil</span>
          @if(Auth::user()->nivel == 1)
            <span class="badge badge-success ml-auto font-weight-bold" style="font-size: 10px;">MFA ON</span>
          @endif
        </a>

        <a href="{{ route('home') }}" target="_blank" class="nav-link-admin">
          <i class="fa-solid fa-arrow-up-right-from-square"></i>
          <span>Ver Web Pública</span>
        </a>
      </nav>

      <div class="sidebar-footer">
        <form action="{{ route('admin.logout') }}" method="POST">
          @csrf
          <button type="submit" class="btn-logout-sidebar">
            <i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesión
          </button>
        </form>
      </div>
    </aside>

    <!-- Área Principal de Contenido -->
    <div class="admin-main">

      <!-- Topbar Superior -->
      <header class="admin-topbar">
        <div class="topbar-left">
          <h1>@yield('page_title', 'Administración')</h1>
          <p><i class="fa-regular fa-calendar-days text-info mr-1"></i> {{ ucfirst(\Carbon\Carbon::now()->translatedFormat('l, d \d\e F \d\e Y')) }}</p>
        </div>

        <div class="d-flex align-items-center gap-3">
          <button class="btn btn-outline-secondary btn-sm d-lg-none mr-2" id="sidebarToggleBtn">
            <i class="fa-solid fa-bars"></i>
          </button>

          <div class="user-pill">
            <div class="user-avatar">
              {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}
            </div>
            <div class="user-info d-none d-sm-block text-left">
              <span class="user-name">{{ Auth::user()->name ?? 'Administrador' }}</span>
              @if(Auth::user()->nivel == 1)
                <span class="user-mfa-badge text-success bg-white border border-success"><i class="fa-solid fa-shield-check mr-1"></i> MFA Activo</span>
              @else
                <span class="user-mfa-badge text-muted bg-white border"><i class="fa-solid fa-shield mr-1"></i> MFA Inactivo</span>
              @endif
            </div>
          </div>
        </div>
      </header>

      <!-- Contenido de las Vistas -->
      <main class="admin-content">

        <!-- Alertas de Sesión -->
        @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius: 10px; font-size: 14px; background-color: #ecfdf5; border-color: #a7f3d0; color: #065f46;">
            <i class="fa-solid fa-circle-check mr-2 text-success"></i> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        @if(session('error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert" style="border-radius: 10px; font-size: 14px; background-color: #fef2f2; border-color: #fecaca; color: #991b1b;">
            <i class="fa-solid fa-triangle-exclamation mr-2 text-danger"></i> {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        @if(session('info'))
          <div class="alert alert-info alert-dismissible fade show" role="alert" style="border-radius: 10px; font-size: 14px; background-color: #f0f9ff; border-color: #bae6fd; color: #0369a1;">
            <i class="fa-solid fa-circle-info mr-2 text-info"></i> {{ session('info') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        @if($errors->any())
          <div class="alert alert-warning alert-dismissible fade show" role="alert" style="border-radius: 10px; font-size: 14px; background-color: #fffbeb; border-color: #fde68a; color: #92400e;">
            <strong class="d-block mb-1"><i class="fa-solid fa-circle-exclamation mr-1"></i> Por favor revisa los siguientes campos:</strong>
            <ul class="mb-0 pl-3">
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        @yield('content')

      </main>

    </div>

  </div>

  <!-- Scripts Base -->
  <script src="{{ url('js/jquery.min.js') }}"></script>
  <script src="{{ url('js/popper.min.js') }}"></script>
  <script src="{{ url('js/bootstrap.min.js') }}"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var sidebarToggle = document.getElementById('sidebarToggleBtn');
      var sidebar = document.getElementById('adminSidebar');
      if (sidebarToggle && sidebar) {
        sidebarToggle.addEventListener('click', function () {
          sidebar.classList.toggle('show');
        });
      }
    });
  </script>

  @yield('scripts')
</body>
</html>

