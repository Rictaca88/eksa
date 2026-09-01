<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>EKSA - Gases Industriales, Medicinales e Insumos</title>
  <link rel="icon" type="image/png" sizes="16x16" href="{{ url('img/logo_eksa.jpeg') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Distribución y entrega segura de gases industriales, medicinales y criogénicos. Más de 10 años de experiencia. Sucursales en Santiago, San Antonio y San Felipe.">

  <!-- Google Fonts: Plus Jakarta Sans & Raleway -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Raleway:wght@600;700;800;900&display=swap" rel="stylesheet">

  <!-- Font Awesome 6 & Bootstrap 4.6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="{{ url('css/animate.css') }}">
  <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ url('css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ url('css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ url('css/style.css') }}">

  <!-- Custom Modern Stylesheet -->
  <style>
    :root {
      --eksa-navy: #002d62;
      --eksa-navy-dark: #001e42;
      --eksa-blue: #0284c7;
      --eksa-cyan: #0ea5e9;
      --eksa-cyan-light: #38bdf8;
      --eksa-cyan-soft: #f0f9ff;
      --eksa-slate: #0f172a;
      --eksa-gray-50: #f8fafc;
      --eksa-gray-100: #f1f5f9;
      --eksa-gray-200: #e2e8f0;
      --eksa-gray-600: #475569;
      --eksa-gray-800: #1e293b;
      --eksa-shadow: 0 10px 25px -5px rgba(0, 45, 98, 0.08), 0 8px 10px -6px rgba(0, 45, 98, 0.04);
      --eksa-shadow-lg: 0 20px 35px -5px rgba(0, 45, 98, 0.12), 0 10px 15px -5px rgba(0, 45, 98, 0.06);
      --eksa-gradient-primary: linear-gradient(135deg, #002d62 0%, #0284c7 100%);
      --eksa-gradient-cyan: linear-gradient(135deg, #0284c7 0%, #38bdf8 100%);
      --eksa-gradient-card: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
    }

    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      color: var(--eksa-gray-600);
      background-color: #ffffff;
      overflow-x: hidden;
      scroll-behavior: smooth;
    }

    h1, h2, h3, h4, h5, h6, .heading-font {
      font-family: 'Raleway', 'Plus Jakarta Sans', sans-serif;
      font-weight: 700;
      color: var(--eksa-navy);
      letter-spacing: -0.02em;
    }

    /* Top Info Bar */
    .top-bar {
      background-color: var(--eksa-navy-dark);
      color: #cbd5e1;
      font-size: 13px;
      padding: 8px 0;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    .top-bar a {
      color: #e2e8f0;
      text-decoration: none;
      transition: color 0.2s ease;
    }
    .top-bar a:hover {
      color: var(--eksa-cyan-light);
    }

    /* Modern Navbar */
    .ftco-navbar-modern {
      background: rgba(255, 255, 255, 0.95) !important;
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      box-shadow: 0 4px 20px rgba(0, 45, 98, 0.06);
      transition: all 0.3s ease;
      padding: 12px 0;
      position: sticky;
      top: 0;
      z-index: 1030;
    }
    .ftco-navbar-modern .navbar-brand {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 0;
    }
    .brand-logo-wrap {
      background: #ffffff;
      padding: 4px 8px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 45, 98, 0.08);
      border: 1px solid var(--eksa-gray-200);
      display: inline-flex;
      align-items: center;
    }
    .brand-logo-wrap img {
      height: 48px;
      width: auto;
      object-fit: contain;
    }
    .brand-text {
      display: flex;
      flex-direction: column;
    }
    .brand-text .title {
      font-family: 'Raleway', sans-serif;
      font-size: 20px;
      font-weight: 800;
      color: var(--eksa-navy);
      line-height: 1.1;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    .brand-text .subtitle {
      font-size: 11px;
      font-weight: 600;
      color: var(--eksa-cyan);
      letter-spacing: 1px;
      text-transform: uppercase;
    }

    .ftco-navbar-modern .nav-link {
      font-size: 14px;
      font-weight: 600;
      color: var(--eksa-navy) !important;
      padding: 8px 16px !important;
      border-radius: 8px;
      transition: all 0.25s ease;
    }
    .ftco-navbar-modern .nav-link:hover,
    .ftco-navbar-modern .nav-link.active {
      color: var(--eksa-cyan) !important;
      background: var(--eksa-cyan-soft);
    }
    .btn-quote-nav {
      background: var(--eksa-gradient-primary);
      color: #ffffff !important;
      font-weight: 700;
      font-size: 13px;
      padding: 10px 22px !important;
      border-radius: 50px;
      box-shadow: 0 4px 15px rgba(2, 132, 199, 0.35);
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }
    .btn-quote-nav:hover {
      background: var(--eksa-gradient-cyan);
      box-shadow: 0 6px 20px rgba(14, 165, 233, 0.45);
      transform: translateY(-1px);
    }

    /* Hero Modern Section */
    .hero-modern {
      background: linear-gradient(135deg, #001e42 0%, #002d62 50%, #034b8c 100%);
      position: relative;
      padding: 80px 0 100px 0;
      color: #ffffff;
      overflow: hidden;
    }
    .hero-modern::before {
      content: "";
      position: absolute;
      top: -50%;
      right: -20%;
      width: 800px;
      height: 800px;
      background: radial-gradient(circle, rgba(14, 165, 233, 0.25) 0%, rgba(0, 45, 98, 0) 70%);
      border-radius: 50%;
      pointer-events: none;
    }
    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(14, 165, 233, 0.15);
      border: 1px solid rgba(56, 189, 248, 0.3);
      color: var(--eksa-cyan-light);
      padding: 6px 16px;
      border-radius: 50px;
      font-size: 13px;
      font-weight: 600;
      margin-bottom: 24px;
    }
    .hero-title {
      font-size: 44px;
      font-weight: 800;
      color: #ffffff;
      line-height: 1.18;
      margin-bottom: 20px;
    }
    .hero-title span {
      background: linear-gradient(135deg, #38bdf8 0%, #93c5fd 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .hero-subtitle {
      font-size: 18px;
      color: #cbd5e1;
      line-height: 1.6;
      margin-bottom: 35px;
      font-weight: 400;
    }
    .hero-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      margin-bottom: 40px;
    }
    .btn-hero-primary {
      background: var(--eksa-gradient-cyan);
      color: #ffffff;
      font-weight: 700;
      padding: 14px 32px;
      border-radius: 50px;
      font-size: 15px;
      border: none;
      box-shadow: 0 10px 25px rgba(14, 165, 233, 0.4);
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      text-decoration: none;
    }
    .btn-hero-primary:hover {
      color: #ffffff;
      transform: translateY(-2px);
      box-shadow: 0 15px 30px rgba(14, 165, 233, 0.5);
    }
    .btn-hero-outline {
      background: rgba(255, 255, 255, 0.08);
      color: #ffffff;
      font-weight: 600;
      padding: 14px 28px;
      border-radius: 50px;
      font-size: 15px;
      border: 1px solid rgba(255, 255, 255, 0.25);
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      text-decoration: none;
    }
    .btn-hero-outline:hover {
      background: rgba(255, 255, 255, 0.2);
      color: #ffffff;
      border-color: #ffffff;
    }

    .hero-stats-pill {
      display: flex;
      flex-wrap: wrap;
      gap: 25px;
      border-top: 1px solid rgba(255, 255, 255, 0.12);
      padding-top: 25px;
    }
    .stat-item {
      display: flex;
      flex-direction: column;
    }
    .stat-num {
      font-size: 26px;
      font-weight: 800;
      color: var(--eksa-cyan-light);
      font-family: 'Raleway', sans-serif;
    }
    .stat-label {
      font-size: 12px;
      color: #94a3b8;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      font-weight: 600;
    }

    /* Product Slider Card */
    .hero-card-preview {
      background: rgba(255, 255, 255, 0.07);
      backdrop-filter: blur(16px);
      border: 1px solid rgba(255, 255, 255, 0.15);
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
      position: relative;
    }
    .hero-slider-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 20px;
      padding-bottom: 12px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    .hero-slider-header h5 {
      color: #ffffff;
      font-size: 16px;
      margin: 0;
      font-weight: 700;
    }
    .cylinder-slide-item {
      background: #ffffff;
      border-radius: 16px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }
    .cylinder-slide-item img {
      max-height: 220px;
      object-fit: contain;
      margin: 0 auto 15px auto;
    }
    .cylinder-slide-item .gas-title {
      font-size: 17px;
      font-weight: 700;
      color: var(--eksa-navy);
      margin-bottom: 4px;
    }
    .cylinder-slide-item .gas-tag {
      display: inline-block;
      font-size: 11px;
      font-weight: 700;
      color: var(--eksa-blue);
      background: var(--eksa-cyan-soft);
      padding: 3px 10px;
      border-radius: 20px;
    }

    /* Section Styling */
    .section-padding {
      padding: 90px 0;
    }
    .bg-light-soft {
      background-color: var(--eksa-gray-50);
    }
    .section-header {
      text-align: center;
      max-width: 700px;
      margin: 0 auto 55px auto;
    }
    .section-badge {
      display: inline-block;
      font-size: 12px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      color: var(--eksa-cyan);
      background: var(--eksa-cyan-soft);
      padding: 6px 16px;
      border-radius: 50px;
      margin-bottom: 12px;
      border: 1px solid rgba(14, 165, 233, 0.2);
    }
    .section-title {
      font-size: 34px;
      font-weight: 800;
      color: var(--eksa-navy);
      line-height: 1.25;
      margin-bottom: 15px;
    }
    .section-desc {
      font-size: 16px;
      color: var(--eksa-gray-600);
      line-height: 1.6;
    }

    /* Modern Cards (Utilidades) */
    .utility-card {
      background: #ffffff;
      border-radius: 18px;
      padding: 40px 30px;
      box-shadow: var(--eksa-shadow);
      border: 1px solid var(--eksa-gray-200);
      transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
      position: relative;
      overflow: hidden;
      height: 100%;
      display: flex;
      flex-direction: column;
    }
    .utility-card::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 4px;
      background: var(--eksa-gradient-cyan);
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .utility-card:hover {
      transform: translateY(-8px);
      box-shadow: var(--eksa-shadow-lg);
      border-color: rgba(14, 165, 233, 0.4);
    }
    .utility-card:hover::before {
      opacity: 1;
    }
    .utility-icon-wrap {
      width: 70px;
      height: 70px;
      border-radius: 16px;
      background: var(--eksa-cyan-soft);
      color: var(--eksa-blue);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 30px;
      margin-bottom: 25px;
      transition: all 0.3s ease;
    }
    .utility-card:hover .utility-icon-wrap {
      background: var(--eksa-gradient-primary);
      color: #ffffff;
      transform: scale(1.05);
    }
    .utility-card h3 {
      font-size: 22px;
      font-weight: 700;
      margin-bottom: 15px;
    }
    .utility-card p {
      font-size: 14px;
      line-height: 1.65;
      color: var(--eksa-gray-600);
      margin-bottom: 12px;
    }
    .utility-card p:last-child {
      margin-bottom: 0;
    }

    /* Nosotros Section */
    .about-img-box {
      position: relative;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: var(--eksa-shadow-lg);
    }
    .about-img-box img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.5s ease;
    }
    .about-img-box:hover img {
      transform: scale(1.03);
    }
    .about-floating-badge {
      position: absolute;
      bottom: 25px;
      right: 25px;
      background: rgba(0, 45, 98, 0.92);
      backdrop-filter: blur(8px);
      color: #ffffff;
      padding: 16px 24px;
      border-radius: 14px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }
    .about-feature-box {
      background: #ffffff;
      border: 1px solid var(--eksa-gray-200);
      border-radius: 14px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 4px 12px rgba(0, 45, 98, 0.04);
      display: flex;
      align-items: flex-start;
      gap: 16px;
    }
    .about-feature-icon {
      width: 44px;
      height: 44px;
      border-radius: 10px;
      background: var(--eksa-cyan-soft);
      color: var(--eksa-blue);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      flex-shrink: 0;
    }

    /* Sectors & Industries Tabs */
    .sector-nav-pills {
      background: #ffffff;
      padding: 8px;
      border-radius: 14px;
      box-shadow: var(--eksa-shadow);
      border: 1px solid var(--eksa-gray-200);
      margin-bottom: 30px;
    }
    .sector-nav-pills .nav-link {
      color: var(--eksa-navy);
      font-weight: 700;
      font-size: 14px;
      padding: 12px 18px;
      border-radius: 10px;
      border: none;
      transition: all 0.25s ease;
      display: flex;
      align-items: center;
      gap: 8px;
      margin-bottom: 4px;
    }
    .sector-nav-pills .nav-link:hover {
      background: var(--eksa-gray-100);
      color: var(--eksa-blue);
    }
    .sector-nav-pills .nav-link.active {
      background: var(--eksa-gradient-primary);
      color: #ffffff !important;
      box-shadow: 0 6px 15px rgba(0, 45, 98, 0.25);
    }
    .sector-card-content {
      background: #ffffff;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: var(--eksa-shadow-lg);
      border: 1px solid var(--eksa-gray-200);
    }
    .sector-img-wrap {
      height: 380px;
      position: relative;
      overflow: hidden;
    }
    .sector-img-wrap img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .sector-body {
      padding: 40px 35px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      height: 100%;
    }
    .sector-body h3 {
      font-size: 28px;
      margin-bottom: 16px;
      color: var(--eksa-navy);
    }
    .sector-body p {
      font-size: 15px;
      line-height: 1.7;
      color: var(--eksa-gray-600);
      margin-bottom: 20px;
    }

    /* Contact Form & Branches */
    .contact-form-card {
      background: #ffffff;
      border-radius: 20px;
      padding: 40px;
      box-shadow: var(--eksa-shadow-lg);
      border: 1px solid var(--eksa-gray-200);
    }
    .contact-form-card .form-control {
      height: 50px;
      border-radius: 10px;
      border: 1px solid var(--eksa-gray-200);
      padding: 10px 18px;
      font-size: 14px;
      transition: all 0.25s ease;
      background-color: #ffffff;
      color: var(--eksa-gray-800);
    }
    .contact-form-card textarea.form-control {
      height: auto;
    }
    .contact-form-card .form-control:focus {
      border-color: var(--eksa-cyan);
      box-shadow: 0 0 0 4px rgba(14, 165, 233, 0.15);
    }
    .btn-submit-contact {
      background: var(--eksa-gradient-primary);
      color: #ffffff;
      font-weight: 700;
      font-size: 15px;
      padding: 14px 35px;
      border-radius: 50px;
      border: none;
      box-shadow: 0 8px 20px rgba(0, 45, 98, 0.3);
      transition: all 0.3s ease;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 10px;
    }
    .btn-submit-contact:hover {
      background: var(--eksa-gradient-cyan);
      color: #ffffff;
      box-shadow: 0 10px 25px rgba(14, 165, 233, 0.45);
      transform: translateY(-2px);
    }

    /* Branch Cards */
    .branch-card {
      background: #ffffff;
      border-radius: 16px;
      padding: 28px 22px;
      box-shadow: var(--eksa-shadow);
      border: 1px solid var(--eksa-gray-200);
      text-align: center;
      transition: all 0.3s ease;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .branch-card:hover {
      transform: translateY(-5px);
      box-shadow: var(--eksa-shadow-lg);
      border-color: var(--eksa-cyan);
    }
    .branch-icon {
      width: 55px;
      height: 55px;
      border-radius: 50%;
      background: var(--eksa-cyan-soft);
      color: var(--eksa-blue);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
      margin: 0 auto 16px auto;
    }
    .branch-card h4 {
      font-size: 20px;
      margin-bottom: 8px;
      color: var(--eksa-navy);
    }
    .branch-card .address {
      font-size: 13px;
      color: var(--eksa-gray-600);
      margin-bottom: 15px;
      min-height: 38px;
    }
    .branch-phone-link {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 14px;
      font-weight: 700;
      color: var(--eksa-blue);
      background: var(--eksa-cyan-soft);
      padding: 8px 16px;
      border-radius: 30px;
      text-decoration: none;
      transition: all 0.25s ease;
    }
    .branch-phone-link:hover {
      background: var(--eksa-blue);
      color: #ffffff;
      text-decoration: none;
    }

    /* Map Box */
    .map-container-box {
      border-radius: 20px;
      overflow: hidden;
      box-shadow: var(--eksa-shadow-lg);
      border: 1px solid var(--eksa-gray-200);
      position: relative;
      height: 100%;
      min-height: 400px;
    }
    .map-container-box iframe {
      width: 100%;
      height: 100%;
      min-height: 400px;
      border: 0;
      display: block;
    }

    /* Footer Modern */
    .footer-modern {
      background: var(--eksa-navy-dark);
      color: #94a3b8;
      padding: 60px 0 25px 0;
      border-top: 1px solid rgba(255, 255, 255, 0.08);
    }
    .footer-modern h5 {
      color: #ffffff;
      font-size: 16px;
      font-weight: 700;
      margin-bottom: 20px;
    }
    .footer-links {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .footer-links li {
      margin-bottom: 10px;
    }
    .footer-links a {
      color: #94a3b8;
      text-decoration: none;
      font-size: 14px;
      transition: color 0.2s ease;
    }
    .footer-links a:hover {
      color: var(--eksa-cyan-light);
    }
    .footer-bottom {
      border-top: 1px solid rgba(255, 255, 255, 0.08);
      margin-top: 40px;
      padding-top: 25px;
      text-align: center;
      font-size: 13px;
    }

    /* Responsiveness adjustments */
    @media (max-width: 991px) {
      .hero-title {
        font-size: 34px;
      }
      .hero-subtitle {
        font-size: 16px;
      }
      .hero-card-preview {
        margin-top: 40px;
      }
      .sector-img-wrap {
        height: 260px;
      }
    }
  </style>
</head>
<body data-spy="scroll" data-target="#ftco-nav" data-offset="120">

  <!-- Top Contact Bar -->
  <div class="top-bar d-none d-md-block">
    <div class="container d-flex justify-content-between align-items-center">
      <div>
        <span class="mr-3"><i class="fa-solid fa-location-dot text-info mr-1"></i> Sucursales en Santiago • San Antonio • San Felipe</span>
        <span><i class="fa-solid fa-clock text-info mr-1"></i> Atención Continua & Logística Rápida</span>
      </div>
      <div>
        <a href="tel:+56972757988" class="mr-3"><i class="fa-solid fa-phone text-info mr-1"></i> +56 9 7275 7988</a>
        <a href="#contact-section"><i class="fa-solid fa-envelope text-info mr-1"></i> contacto@eksa.cl</a>
      </div>
    </div>
  </div>

  <!-- Modern Navigation Bar -->
  <nav class="navbar navbar-expand-lg ftco-navbar-modern" id="ftco-nav">
    <div class="container">
      <a class="navbar-brand" href="#home-section">
        <div class="brand-logo-wrap">
          <img src="{{ url('img/logo_eksa.jpeg') }}" alt="Logo EKSA">
        </div>
        <div class="brand-text">
          <span class="title">EKSA</span>
          <span class="subtitle">Gases & Soluciones</span>
        </div>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars text-primary" style="font-size: 22px;"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarMain">
        <ul class="navbar-nav ml-auto align-items-lg-center">
          <li class="nav-item"><a href="#home-section" class="nav-link">Inicio</a></li>
          <li class="nav-item"><a href="#nosotros-section" class="nav-link">Nosotros</a></li>
          <li class="nav-item"><a href="#utilidades-section" class="nav-link">Líneas de Negocio</a></li>
          <li class="nav-item"><a href="#sectores-section" class="nav-link">Sectores</a></li>
          <li class="nav-item"><a href="#sucursales-section" class="nav-link">Sucursales</a></li>
          <li class="nav-item ml-lg-2 mt-2 mt-lg-0">
            <a href="#contact-section" class="btn btn-quote-nav">
              <i class="fa-solid fa-paper-plane"></i> Cotizar Ahora
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-modern" id="home-section">
    <div class="container position-relative" style="z-index: 2;">
      <div class="row align-items-center">

        <!-- Left Column: Copy & Actions -->
        <div class="col-lg-7">
          <div class="hero-badge">
            <i class="fa-solid fa-shield-halved"></i> Distribución Segura y Certificada
          </div>
          <h1 class="hero-title">
            Soluciones Integrales en <span>Gases Industriales</span> y Medicinales
          </h1>
          <p class="hero-subtitle">
            Más de una década abasteciendo con máxima rapidez, seguridad y puntualidad a industrias, centros de salud e instituciones a lo largo del país.
          </p>

          <div class="hero-actions">
            <a href="#contact-section" class="btn-hero-primary">
              <i class="fa-solid fa-file-signature"></i> Solicitar Cotización
            </a>
            <a href="#sectores-section" class="btn-hero-outline">
              <i class="fa-solid fa-cubes"></i> Ver Industrias & Usos
            </a>
          </div>

          <div class="hero-stats-pill">
            <div class="stat-item">
              <span class="stat-num">+10</span>
              <span class="stat-label">Años de Trayectoria</span>
            </div>
            <div class="stat-item">
              <span class="stat-num">3</span>
              <span class="stat-label">Sucursales Clave</span>
            </div>
            <div class="stat-item">
              <span class="stat-num">100%</span>
              <span class="stat-label">Compromiso y Seguridad</span>
            </div>
          </div>
        </div>

        <!-- Right Column: Interactive Cylinders Showcase -->
        <div class="col-lg-5">
          <div class="hero-card-preview">
            <div class="hero-slider-header">
              <h5><i class="fa-solid fa-flask text-info mr-2"></i> Nuestros Gases Principales</h5>
              <span class="badge badge-pill badge-info px-3 py-1">Catálogo Activo</span>
            </div>

            <div id="heroGasCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
              <ol class="carousel-indicators" style="bottom: -25px;">
                <li data-target="#heroGasCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#heroGasCarousel" data-slide-to="1"></li>
                <li data-target="#heroGasCarousel" data-slide-to="2"></li>
                <li data-target="#heroGasCarousel" data-slide-to="3"></li>
                <li data-target="#heroGasCarousel" data-slide-to="4"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="cylinder-slide-item">
                    <img src="{{ url('images/image1.jpg') }}" alt="Oxígeno Industrial y Medicinal">
                    <div class="gas-title">Oxígeno (O₂)</div>
                    <span class="gas-tag">Medicinal & Industrial</span>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="cylinder-slide-item">
                    <img src="{{ url('images/image2.jpg') }}" alt="Acetileno">
                    <div class="gas-title">Acetileno (C₂H₂)</div>
                    <span class="gas-tag">Oxicorte & Soldadura</span>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="cylinder-slide-item">
                    <img src="{{ url('images/image4.jpg') }}" alt="Nitrógeno">
                    <div class="gas-title">Nitrógeno (N₂)</div>
                    <span class="gas-tag">Inertización & Criogenia</span>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="cylinder-slide-item">
                    <img src="{{ url('images/image5.jpg') }}" alt="Argón">
                    <div class="gas-title">Argón (Ar)</div>
                    <span class="gas-tag">Soldadura TIG/MIG & Científico</span>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="cylinder-slide-item">
                    <img src="{{ url('images/image6.jpg') }}" alt="Dióxido de Carbono">
                    <div class="gas-title">Dióxido de Carbono (CO₂)</div>
                    <span class="gas-tag">Alimentos & Procesos</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Nosotros Section -->
  <section class="section-padding bg-white" id="nosotros-section">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="about-img-box">
            <img src="{{ url('images/imagen_nosotros.png') }}" alt="Instalaciones y equipo EKSA">
            <div class="about-floating-badge">
              <div class="d-flex align-items-center">
                <i class="fa-solid fa-award text-info mr-3" style="font-size: 28px;"></i>
                <div>
                  <strong class="d-block" style="font-size: 16px;">10+ Años de Experiencia</strong>
                  <span style="font-size: 13px; color: #94a3b8;">Calidad y Servicio Garantizado</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 pl-lg-5">
          <span class="section-badge">Sobre EKSA</span>
          <h2 class="section-title">Tu Aliado Estratégico en Suministro de Gases</h2>
          <p class="section-desc">
            <strong>EKSA</strong> fue creada principalmente para abastecer y entregar gases industriales y medicinales de forma segura, eficiente y ágil a las empresas de nuestro país. Llevamos más de 10 años en el mercado a disposición de nuestros clientes, quienes nos eligen gracias al profesionalismo y puntualidad de nuestro equipo humano y logístico.
          </p>

          <div class="about-feature-box">
            <div class="about-feature-icon">
              <i class="fa-solid fa-bullseye"></i>
            </div>
            <div>
              <h5 class="mb-1" style="font-size: 17px; font-weight: 700; color: var(--eksa-navy);">Nuestra Misión</h5>
              <p class="mb-0" style="font-size: 14px; color: var(--eksa-gray-600);">
                Ser una de las empresas de gases más segura, diversa y rentable del país, entregando con excelencia operativa cada uno de nuestros servicios a clientes industriales y de la salud.
              </p>
            </div>
          </div>

          <div class="about-feature-box">
            <div class="about-feature-icon">
              <i class="fa-solid fa-truck-fast"></i>
            </div>
            <div>
              <h5 class="mb-1" style="font-size: 17px; font-weight: 700; color: var(--eksa-navy);">Logística & Cobertura</h5>
              <p class="mb-0" style="font-size: 14px; color: var(--eksa-gray-600);">
                Contamos con flota propia e infraestructura orientada a entregas puntuales y de emergencia en Santiago, San Antonio y San Felipe.
              </p>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- Utilidades / Líneas de Negocio -->
  <section class="section-padding bg-light-soft" id="utilidades-section">
    <div class="container">

      <div class="section-header">
        <span class="section-badge">Líneas de Negocio</span>
        <h2 class="section-title">Utilidades y Soluciones Especializadas</h2>
        <p class="section-desc">Conoce nuestra oferta en gases comprimidos, líquidos criogénicos e insumos de producción.</p>
      </div>

      <div class="row">

        <!-- Card 1: Gases Industriales -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="utility-card">
            <div class="utility-icon-wrap">
              <i class="fa-solid fa-industry"></i>
            </div>
            <h3>Gases Industriales</h3>
            <p>Los gases industriales son manufacturados con altos estándares de pureza para usos en múltiples aplicaciones técnicas.</p>
            <p>Empleados fundamentalmente en fabricación de acero, soldaduras, oxicorte, fertilizantes y semiconductores.</p>
            <p>Disponibles en distintas formas: gas comprimido en cilindros, estado líquido o recipientes de alta capacidad.</p>
          </div>
        </div>

        <!-- Card 2: Gases Medicinales -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="utility-card">
            <div class="utility-icon-wrap">
              <i class="fa-solid fa-heart-pulse"></i>
            </div>
            <h3>Gases Medicinales</h3>
            <p>Gases certificados para consumo humano y soporte vital en instituciones de salud, clínicas, hospitales y pacientes particulares.</p>
            <p>Almacenados y suministrados como gases comprimidos y como líquidos criogénicos (como el Oxígeno líquido clínico).</p>
            <p>Cilindros de acero/aluminio y termos criogénicos con riguroso control de calidad y trazabilidad médica.</p>
          </div>
        </div>

        <!-- Card 3: Insumos -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="utility-card">
            <div class="utility-icon-wrap">
              <i class="fa-solid fa-gears"></i>
            </div>
            <h3>Insumos & Repuestos</h3>
            <p>Elementos e insumos de reposición constante para procesos de producción, soldadura y canalización de gases.</p>
            <p>Válvulas de seguridad, reguladores de presión, accesorios de conexión y equipos complementarios para líneas de gas.</p>
            <p>Asesoría técnica para garantizar el óptimo rendimiento y seguridad en sus instalaciones operativas.</p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Sectores e Industrias Section (Tabbed View) -->
  <section class="section-padding bg-white" id="sectores-section">
    <div class="container">

      <div class="section-header">
        <span class="section-badge">Aplicaciones por Sector</span>
        <h2 class="section-title">Servicios para Diversas Industrias</h2>
        <p class="section-desc">Diseñamos soluciones personalizadas que optimizan procesos productivos en los sectores productivos más exigentes.</p>
      </div>

      <div class="row">

        <!-- Sector Navigation Tabs -->
        <div class="col-lg-3 mb-4">
          <div class="nav flex-column sector-nav-pills" id="sector-tabs" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="tab-acuicola-link" data-toggle="pill" href="#tab-acuicola" role="tab" aria-controls="tab-acuicola" aria-selected="true">
              <i class="fa-solid fa-water"></i> Acuícola
            </a>
            <a class="nav-link" id="tab-alimentos-link" data-toggle="pill" href="#tab-alimentos" role="tab" aria-controls="tab-alimentos" aria-selected="false">
              <i class="fa-solid fa-utensils"></i> Alimentos
            </a>
            <a class="nav-link" id="tab-cientifico-link" data-toggle="pill" href="#tab-cientifico" role="tab" aria-controls="tab-cientifico" aria-selected="false">
              <i class="fa-solid fa-microscope"></i> Científico
            </a>
            <a class="nav-link" id="tab-metalmecanica-link" data-toggle="pill" href="#tab-metalmecanica" role="tab" aria-controls="tab-metalmecanica" aria-selected="false">
              <i class="fa-solid fa-screwdriver-wrench"></i> Metalmecánica
            </a>
            <a class="nav-link" id="tab-industriales-link" data-toggle="pill" href="#tab-industriales" role="tab" aria-controls="tab-industriales" aria-selected="false">
              <i class="fa-solid fa-gear"></i> Procesos Industriales
            </a>
            <a class="nav-link" id="tab-salud-link" data-toggle="pill" href="#tab-salud" role="tab" aria-controls="tab-salud" aria-selected="false">
              <i class="fa-solid fa-notes-medical"></i> Salud
            </a>
            <a class="nav-link" id="tab-vitivinicola-link" data-toggle="pill" href="#tab-vitivinicola" role="tab" aria-controls="tab-vitivinicola" aria-selected="false">
              <i class="fa-solid fa-wine-glass"></i> Vitivinícola
            </a>
          </div>
        </div>

        <!-- Sector Tab Contents -->
        <div class="col-lg-9">
          <div class="tab-content" id="sector-tabContent">

            <!-- Acuicola -->
            <div class="tab-pane fade show active" id="tab-acuicola" role="tabpanel" aria-labelledby="tab-acuicola-link">
              <div class="sector-card-content">
                <div class="row no-gutters">
                  <div class="col-md-6 sector-img-wrap">
                    <img src="{{ url('images/servicios/acuicola_001.jpg') }}" alt="Sector Acuícola">
                  </div>
                  <div class="col-md-6">
                    <div class="sector-body">
                      <span class="badge badge-info mb-2 align-self-start">Acuicultura & Pesca</span>
                      <h3>Sector Acuícola</h3>
                      <p>Los gases son fundamentales para la oxigenación en mar permanente o para contingencias, oxigenación en lagos para tratamientos, monitoreo de Oxígeno Disuelto (OD) e ingeniería básica en nuevos proyectos de cultivo.</p>
                      <a href="#contact-section" class="btn btn-quote-nav align-self-start">Consultar Solución Acuícola</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Alimentos -->
            <div class="tab-pane fade" id="tab-alimentos" role="tabpanel" aria-labelledby="tab-alimentos-link">
              <div class="sector-card-content">
                <div class="row no-gutters">
                  <div class="col-md-6 sector-img-wrap">
                    <img src="{{ url('images/servicios/alimentos_001.jpeg') }}" alt="Industria de Alimentos">
                  </div>
                  <div class="col-md-6">
                    <div class="sector-body">
                      <span class="badge badge-info mb-2 align-self-start">Agroindustria & Envasado</span>
                      <h3>Industria de Alimentos</h3>
                      <p>Gases aplicados en atmósferas controladas y modificadas (MAP) para preservar y extender la calidad y vida útil de alimentos envasados y contenedores, cumpliendo las más altas normativas sanitarias.</p>
                      <a href="#contact-section" class="btn btn-quote-nav align-self-start">Consultar Solución Alimentos</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Cientifico -->
            <div class="tab-pane fade" id="tab-cientifico" role="tabpanel" aria-labelledby="tab-cientifico-link">
              <div class="sector-card-content">
                <div class="row no-gutters">
                  <div class="col-md-6 sector-img-wrap">
                    <img src="{{ url('images/servicios/cientifico_001.jpeg') }}" alt="Laboratorios y Científico">
                  </div>
                  <div class="col-md-6">
                    <div class="sector-body">
                      <span class="badge badge-info mb-2 align-self-start">Investigación & Calibración</span>
                      <h3>Sector Científico</h3>
                      <p>Suministro de gases especiales y de ultra alta pureza para laboratorios, análisis cromatográficos, investigación científica, química analítica y aplicaciones aeroespaciales y petroleras.</p>
                      <a href="#contact-section" class="btn btn-quote-nav align-self-start">Consultar Gases Especiales</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Metalmecanica -->
            <div class="tab-pane fade" id="tab-metalmecanica" role="tabpanel" aria-labelledby="tab-metalmecanica-link">
              <div class="sector-card-content">
                <div class="row no-gutters">
                  <div class="col-md-6 sector-img-wrap">
                    <img src="{{ url('images/servicios/metalmecanica_001.jpg') }}" alt="Sector Metalmecánica">
                  </div>
                  <div class="col-md-6">
                    <div class="sector-body">
                      <span class="badge badge-info mb-2 align-self-start">Soldadura & Oxicorte</span>
                      <h3>Metalmecánica</h3>
                      <p>Gases esenciales para corte por plasma, oxicorte con acetileno/oxígeno, mezclas para soldadura MIG/TIG y generación de atmósferas protectoras en talleres y maestranzas industriales.</p>
                      <a href="#contact-section" class="btn btn-quote-nav align-self-start">Cotizar Gases Metalmecánica</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Procesos Industriales -->
            <div class="tab-pane fade" id="tab-industriales" role="tabpanel" aria-labelledby="tab-industriales-link">
              <div class="sector-card-content">
                <div class="row no-gutters">
                  <div class="col-md-6 sector-img-wrap">
                    <img src="{{ url('images/servicios/industriales_001.jpeg') }}" alt="Procesos Industriales">
                  </div>
                  <div class="col-md-6">
                    <div class="sector-body">
                      <span class="badge badge-info mb-2 align-self-start">Petroquímica & Manufactura</span>
                      <h3>Procesos Industriales</h3>
                      <p>Aplicaciones petroquímicas, nitrógeno líquido para criomolienda y purga, soplado de plásticos, inertización de tanques y optimización de plantas productivas a gran escala.</p>
                      <a href="#contact-section" class="btn btn-quote-nav align-self-start">Cotizar Procesos Industriales</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Salud -->
            <div class="tab-pane fade" id="tab-salud" role="tabpanel" aria-labelledby="tab-salud-link">
              <div class="sector-card-content">
                <div class="row no-gutters">
                  <div class="col-md-6 sector-img-wrap">
                    <img src="{{ url('images/servicios/salud_001.jpg') }}" alt="Sector Salud">
                  </div>
                  <div class="col-md-6">
                    <div class="sector-body">
                      <span class="badge badge-info mb-2 align-self-start">Clínicas, Hospitales & Pacientes</span>
                      <h3>Sector Salud</h3>
                      <p>Oxígeno medicinal e insumos indispensables para el soporte respiratorio, terapias intensivas, servicios médicos de urgencia y asistencia técnica de equipos medicinales en todo momento.</p>
                      <a href="#contact-section" class="btn btn-quote-nav align-self-start">Solicitar Oxígeno Medicinal</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Vitivinicola -->
            <div class="tab-pane fade" id="tab-vitivinicola" role="tabpanel" aria-labelledby="tab-vitivinicola-link">
              <div class="sector-card-content">
                <div class="row no-gutters">
                  <div class="col-md-6 sector-img-wrap">
                    <img src="{{ url('images/servicios/vitivinicola_002.jpg') }}" alt="Sector Vitivinícola">
                  </div>
                  <div class="col-md-6">
                    <div class="sector-body">
                      <span class="badge badge-info mb-2 align-self-start">Viñas & Enología</span>
                      <h3>Sector Vitivinícola</h3>
                      <p>Inertización con nitrógeno y gases especiales para proteger el vino y mosto de la oxidación, manteniendo niveles óptimos de oxígeno disuelto y evitando la pérdida de aroma y color.</p>
                      <a href="#contact-section" class="btn btn-quote-nav align-self-start">Consultar Solución Vitivinícola</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Sucursales Section -->
  <section class="section-padding bg-light-soft" id="sucursales-section">
    <div class="container">

      <div class="section-header">
        <span class="section-badge">Presencia Estratégica</span>
        <h2 class="section-title">Nuestras Sucursales</h2>
        <p class="section-desc">Puntos de atención y centros de distribución para garantizar una respuesta rápida en tu zona.</p>
      </div>

      <div class="row">

        <!-- Santiago -->
        <div class="col-md-4 mb-4">
          <div class="branch-card">
            <div>
              <div class="branch-icon">
                <i class="fa-solid fa-building-flag"></i>
              </div>
              <h4>Santiago (Casa Matriz)</h4>
              <div class="address">
                <i class="fa-solid fa-location-dot text-info mr-1"></i> Las Araucarias 9080, Quilicura, Región Metropolitana
              </div>
            </div>
            <div>
              <a href="tel:+56972757988" class="branch-phone-link">
                <i class="fa-solid fa-phone"></i> +56 9 7275 7988
              </a>
            </div>
          </div>
        </div>

        <!-- San Antonio -->
        <div class="col-md-4 mb-4">
          <div class="branch-card">
            <div>
              <div class="branch-icon">
                <i class="fa-solid fa-anchor"></i>
              </div>
              <h4>San Antonio</h4>
              <div class="address">
                <i class="fa-solid fa-location-dot text-info mr-1"></i> Atención y Cobertura Puerto San Antonio y Litoral Central
              </div>
            </div>
            <div>
              <a href="tel:+56972757988" class="branch-phone-link">
                <i class="fa-solid fa-phone"></i> +56 9 7275 7988
              </a>
            </div>
          </div>
        </div>

        <!-- San Felipe -->
        <div class="col-md-4 mb-4">
          <div class="branch-card">
            <div>
              <div class="branch-icon">
                <i class="fa-solid fa-mountain"></i>
              </div>
              <h4>San Felipe</h4>
              <div class="address">
                <i class="fa-solid fa-location-dot text-info mr-1"></i> Cobertura Valle de Aconcagua y Región Interior
              </div>
            </div>
            <div>
              <a href="tel:+56972752830" class="branch-phone-link">
                <i class="fa-solid fa-phone"></i> +56 9 7275 2830
              </a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Contacto & Ubicación Section -->
  <section class="section-padding bg-white" id="contact-section">
    <div class="container">

      <div class="section-header">
        <span class="section-badge">Canal Directo</span>
        <h2 class="section-title">Contáctanos y Cotiza</h2>
        <p class="section-desc">Escríbenos para solicitar cotizaciones, consultas técnicas o programar pedidos de gases e insumos.</p>
      </div>

      <div class="row">

        <!-- Contact Form -->
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="contact-form-card">
            <h3 class="mb-4" style="font-size: 22px; color: var(--eksa-navy);"><i class="fa-solid fa-envelope-circle-check text-info mr-2"></i> Formulario de Cotización</h3>

            @if(session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius: 12px; font-size: 14px; background-color: #ecfdf5; border-color: #a7f3d0; color: #065f46;">
                <i class="fa-solid fa-circle-check mr-2 text-success"></i> {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif

            @if(session('error'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert" style="border-radius: 12px; font-size: 14px; background-color: #fef2f2; border-color: #fecaca; color: #991b1b;">
                <i class="fa-solid fa-triangle-exclamation mr-2 text-danger"></i> {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif

            @if($errors->any())
              <div class="alert alert-warning alert-dismissible fade show" role="alert" style="border-radius: 12px; font-size: 14px; background-color: #fffbeb; border-color: #fde68a; color: #92400e;">
                <strong class="d-block mb-1"><i class="fa-solid fa-circle-exclamation mr-1"></i> Por favor corrige los siguientes campos:</strong>
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

            <form id="contactForm" action="{{ route('contacto') }}" method="POST">
              @csrf

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label class="small font-weight-bold text-muted">Nombre y Apellido *</label>
                  <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" placeholder="Ej: Carlos Silva" required>
                </div>
                <div class="form-group col-md-6">
                  <label class="small font-weight-bold text-muted">Empresa *</label>
                  <input type="text" name="empresa" class="form-control" value="{{ old('empresa') }}" placeholder="Ej: Minera / Metalúrgica" required>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label class="small font-weight-bold text-muted">Teléfono de Contacto *</label>
                  <input type="tel" name="fono" class="form-control" value="{{ old('fono') }}" placeholder="+56 9 1234 5678" required>
                </div>
                <div class="form-group col-md-6">
                  <label class="small font-weight-bold text-muted">Correo Electrónico *</label>
                  <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="correo@empresa.cl" required>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label class="small font-weight-bold text-muted">Sucursal de Preferencia</label>
                  <select name="sucursal" id="sucursal" class="form-control">
                    <option value="santiago" {{ old('sucursal') == 'santiago' ? 'selected' : '' }}>Sucursal Santiago</option>
                    <option value="san antonio" {{ old('sucursal') == 'san antonio' ? 'selected' : '' }}>Sucursal San Antonio</option>
                    <option value="san felipe" {{ old('sucursal') == 'san felipe' ? 'selected' : '' }}>Sucursal San Felipe</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label class="small font-weight-bold text-muted">Tipo de Requerimiento</label>
                  <select name="asunto" id="asunto" class="form-control">
                    <option value="cotización" {{ old('asunto') == 'cotización' ? 'selected' : '' }}>Solicitud de Cotización</option>
                    <option value="consulta" {{ old('asunto') == 'consulta' ? 'selected' : '' }}>Consulta Técnica / Disponibilidad</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="small font-weight-bold text-muted">Detalle del Mensaje o Pedido *</label>
                <textarea name="mensaje" id="mensaje" rows="5" class="form-control" placeholder="Indique tipos de gases, volúmenes o consultas técnicas requeridas..." required>{{ old('mensaje') }}</textarea>
              </div>

              <div class="d-flex justify-content-between align-items-center mt-4">
                <button type="submit" id="btnSubmitContact" class="btn-submit-contact">
                  <i class="fa-solid fa-paper-plane"></i> Enviar Mensaje
                </button>
                <span class="text-muted small">* Todos los campos son obligatorios</span>
              </div>
            </form>

            <!-- Loading Spinner State -->
            <div id="contactLoadingState" style="display: none; text-align: center; padding: 60px 20px;">
              <div class="spinner-border text-info" role="status" style="width: 3.5rem; height: 3.5rem; border-width: 4px;">
                <span class="sr-only">Enviando...</span>
              </div>
              <h4 class="mt-4 font-weight-bold" style="color: var(--eksa-navy); font-size: 20px;">Enviando tu mensaje...</h4>
              <p class="text-muted" style="font-size: 14px; max-width: 400px; margin: 10px auto 0; line-height: 1.5;">
                Estamos registrando tus datos y notificando al equipo comercial de <strong>EKSA</strong>. Por favor espera un momento.
              </p>
            </div>
          </div>
        </div>

        <!-- Google Map Container -->
        <div class="col-lg-6">
          <div class="map-container-box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3332.9379868086144!2d-70.71573104851738!3d-33.34656988070955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c7f0e4be68ad%3A0x8e5afb3cc8550aad!2sLas%20Araucarias%209080%2C%20Quilicura%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses-419!2scl!4v1646488792949!5m2!1ses-419!2scl" loading="lazy" allowfullscreen=""></iframe>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Modern Corporate Footer -->
  <footer class="footer-modern">
    <div class="container">
      <div class="row">

        <!-- Col 1: Brand -->
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="d-flex align-items-center mb-3">
            <div class="brand-logo-wrap mr-3">
              <img src="{{ url('img/logo_eksa.jpeg') }}" alt="Logo EKSA" style="height: 42px;">
            </div>
            <div>
              <h5 class="mb-0 text-white">EKSA</h5>
              <small class="text-info">Gases Industriales & Medicinales</small>
            </div>
          </div>
          <p style="font-size: 13px; line-height: 1.6;">
            Empresa especializada en la distribución, logística y suministro seguro de gases industriales, medicinales y criogénicos a lo largo de Chile.
          </p>
        </div>

        <!-- Col 2: Enlaces Rápidos -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h5>Navegación</h5>
          <ul class="footer-links">
            <li><a href="#home-section"><i class="fa-solid fa-angle-right text-info mr-1"></i> Inicio</a></li>
            <li><a href="#nosotros-section"><i class="fa-solid fa-angle-right text-info mr-1"></i> Sobre Nosotros</a></li>
            <li><a href="#utilidades-section"><i class="fa-solid fa-angle-right text-info mr-1"></i> Líneas de Negocio</a></li>
            <li><a href="#sectores-section"><i class="fa-solid fa-angle-right text-info mr-1"></i> Sectores e Industrias</a></li>
            <li><a href="#sucursales-section"><i class="fa-solid fa-angle-right text-info mr-1"></i> Sucursales</a></li>
          </ul>
        </div>

        <!-- Col 3: Contacto & Sucursales -->
        <div class="col-lg-5 col-md-12">
          <h5>Contacto Directo</h5>
          <div class="row">
            <div class="col-sm-6 mb-3">
              <strong class="d-block text-white mb-1"><i class="fa-solid fa-location-dot text-info mr-1"></i> Santiago:</strong>
              <span style="font-size: 13px;">Las Araucarias 9080, Quilicura</span><br>
              <a href="tel:+56972757988" class="text-info font-weight-bold" style="font-size: 13px;">+56 9 7275 7988</a>
            </div>
            {{--<div class="col-sm-6 mb-3">
              <strong class="d-block text-white mb-1"><i class="fa-solid fa-location-dot text-info mr-1"></i> San Felipe:</strong>
              <span style="font-size: 13px;">Valle de Aconcagua</span><br>
              <a href="tel:+56972752830" class="text-info font-weight-bold" style="font-size: 13px;">+56 9 7275 2830</a>
            </div>--}}
          </div>
          <div class="mt-2">
            <a href="#contact-section" class="text-white" style="font-size: 14px;">
              <i class="fa-solid fa-envelope text-info mr-1"></i> contacto@eksa.cl
            </a>
          </div>
        </div>

      </div>

      <div class="footer-bottom">
        <p class="mb-0">
          Copyright &copy; {{ date('Y') }} EKSA. Todos los derechos reservados.
        </p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="{{ url('js/jquery.min.js') }}"></script>
  <script src="{{ url('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ url('js/popper.min.js') }}"></script>
  <script src="{{ url('js/bootstrap.min.js') }}"></script>
  <script src="{{ url('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ url('js/owl.carousel.min.js') }}"></script>
  <script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ url('js/scrollax.min.js') }}"></script>
  <script src="{{ url('js/main.js') }}"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var contactForm = document.getElementById('contactForm');
      var contactLoadingState = document.getElementById('contactLoadingState');

      if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
          if (this.checkValidity()) {
            // Ocultar formulario y mostrar spinner
            contactForm.style.display = 'none';
            if (contactLoadingState) {
              contactLoadingState.style.display = 'block';
            }
          }
        });
      }

      @if(session('success') || session('error') || $errors->any())
        var contactSec = document.getElementById('contact-section');
        if (contactSec) {
          setTimeout(function () {
            contactSec.scrollIntoView({ behavior: 'smooth', block: 'start' });
          }, 150);
        }
      @endif
    });
  </script>

</body>
</html>
