<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Gases Industriales, Soldadura y Oxicorte - EKSA Chile</title>
  <link rel="icon" type="image/png" sizes="16x16" href="{{ url('img/logo_eksa.jpeg') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Suministro de gases industriales para maestranzas, minería, soldadura MIG/TIG, oxicorte, vitivinicultura y acuicultura en Chile. Argón, Acetileno, Oxígeno, Nitrógeno y CO2.">

  <!-- Google Fonts: Plus Jakarta Sans & Raleway -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Raleway:wght@600;700;800;900&display=swap" rel="stylesheet">

  <!-- Font Awesome 6 & Bootstrap 4.6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('css/animate.css') }}">
  <link rel="stylesheet" href="{{ url('css/style.css') }}">

  <style>
    :root {
      --eksa-navy: #002d62;
      --eksa-navy-dark: #001f44;
      --eksa-cyan: #0ea5e9;
      --eksa-cyan-hover: #0284c7;
      --eksa-cyan-light: #e0f2fe;
      --eksa-amber: #f59e0b;
      --eksa-ice: #f8fafc;
      --eksa-card-bg: #ffffff;
      --eksa-text-main: #1e293b;
      --eksa-text-muted: #64748b;
    }

    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      color: var(--eksa-text-main);
      background-color: var(--eksa-ice);
      overflow-x: hidden;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: 'Raleway', sans-serif;
      font-weight: 700;
    }

    /* Top Bar */
    .top-contact-bar {
      background-color: var(--eksa-navy-dark);
      color: #94a3b8;
      font-size: 13px;
      padding: 8px 0;
      border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }
    .top-contact-bar a {
      color: #cbd5e1;
      text-decoration: none;
      transition: color 0.2s ease;
    }
    .top-contact-bar a:hover {
      color: var(--eksa-cyan);
    }

    /* Navbar */
    .ftco-navbar-modern {
      background: rgba(255, 255, 255, 0.96) !important;
      backdrop-filter: blur(10px);
      box-shadow: 0 4px 20px rgba(0, 45, 98, 0.08);
      position: sticky;
      top: 0;
      z-index: 1030;
      padding: 12px 0;
    }
    .ftco-navbar-modern .navbar-brand {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 0;
      text-decoration: none;
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
      color: #334155 !important;
      padding: 8px 16px !important;
      border-radius: 6px;
      transition: all 0.2s ease;
    }
    .ftco-navbar-modern .nav-link:hover,
    .ftco-navbar-modern .nav-link.active {
      color: var(--eksa-cyan) !important;
      background: rgba(14, 165, 233, 0.08);
    }
    .btn-quote-nav {
      background: linear-gradient(135deg, var(--eksa-navy), #034b94);
      color: #ffffff !important;
      font-weight: 700;
      font-size: 13px;
      padding: 9px 20px !important;
      border-radius: 30px;
      border: none;
      box-shadow: 0 4px 14px rgba(0, 45, 98, 0.3);
      transition: transform 0.2s ease, box-shadow 0.2s ease;
      text-decoration: none;
    }
    .btn-quote-nav:hover {
      background: linear-gradient(135deg, #034b94, var(--eksa-cyan));
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(14, 165, 233, 0.4);
    }

    /* Hero Section */
    .hero-industrial {
      background: linear-gradient(135deg, #001f44 0%, #002d62 60%, #04386b 100%);
      color: #ffffff;
      padding: 80px 0 90px;
      position: relative;
      overflow: hidden;
    }
    .hero-industrial::after {
      content: '';
      position: absolute;
      top: 0;
      right: 0;
      width: 55%;
      height: 100%;
      background: radial-gradient(circle at 80% 30%, rgba(245, 158, 11, 0.15) 0%, transparent 65%);
      pointer-events: none;
    }
    .hero-badge-ind {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(245, 158, 11, 0.18);
      border: 1px solid rgba(245, 158, 11, 0.4);
      padding: 6px 16px;
      border-radius: 30px;
      font-size: 13px;
      font-weight: 600;
      color: #fcd34d;
      margin-bottom: 20px;
    }
    .hero-title-ind {
      font-size: 42px;
      line-height: 1.15;
      font-weight: 800;
      margin-bottom: 20px;
    }
    .hero-title-ind span {
      background: linear-gradient(90deg, #38bdf8, #fcd34d);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .hero-desc-ind {
      font-size: 17px;
      line-height: 1.6;
      color: #cbd5e1;
      margin-bottom: 30px;
      max-width: 630px;
    }
    .hero-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      margin-bottom: 40px;
    }
    .btn-hero-primary {
      background: linear-gradient(135deg, #0284c7 0%, #38bdf8 100%);
      color: #ffffff !important;
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
      text-decoration: none !important;
    }
    .btn-hero-primary:hover {
      color: #ffffff !important;
      transform: translateY(-2px);
      box-shadow: 0 15px 30px rgba(14, 165, 233, 0.5);
    }
    .btn-hero-outline {
      background: rgba(255, 255, 255, 0.08);
      color: #ffffff !important;
      font-weight: 600;
      padding: 14px 28px;
      border-radius: 50px;
      font-size: 15px;
      border: 1px solid rgba(255, 255, 255, 0.25);
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      text-decoration: none !important;
    }
    .btn-hero-outline:hover {
      background: rgba(255, 255, 255, 0.2);
      color: #ffffff !important;
      border-color: #ffffff;
      transform: translateY(-2px);
    }

    /* Stats Strip */
    .stats-strip {
      background: #ffffff;
      border-radius: 16px;
      padding: 24px;
      box-shadow: 0 10px 30px rgba(0, 45, 98, 0.08);
      margin-top: -45px;
      position: relative;
      z-index: 10;
      border: 1px solid rgba(0, 45, 98, 0.15);
    }
    .stat-item {
      text-align: center;
      border-right: 1px solid #e2e8f0;
      padding: 10px 15px;
    }
    .stat-item:last-child {
      border-right: none;
    }
    .stat-item i {
      font-size: 28px;
      color: var(--eksa-navy);
      margin-bottom: 8px;
    }
    .stat-item h4 {
      font-size: 18px;
      font-weight: 800;
      color: var(--eksa-navy);
      margin-bottom: 2px;
    }
    .stat-item p {
      font-size: 13px;
      color: var(--eksa-text-muted);
      margin-bottom: 0;
    }

    /* Section Styling */
    .section-padding {
      padding: 85px 0;
    }
    .section-header {
      text-align: center;
      max-width: 760px;
      margin: 0 auto 50px;
    }
    .section-badge {
      display: inline-block;
      background: rgba(0, 45, 98, 0.1);
      color: var(--eksa-navy);
      padding: 5px 14px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      margin-bottom: 12px;
    }
    .section-title {
      font-size: 34px;
      font-weight: 800;
      color: var(--eksa-navy);
      margin-bottom: 12px;
    }
    .section-desc {
      font-size: 16px;
      color: var(--eksa-text-muted);
      line-height: 1.6;
    }

    /* Product Cards */
    .ind-card {
      background: #ffffff;
      border-radius: 16px;
      padding: 28px;
      box-shadow: 0 8px 24px rgba(0, 45, 98, 0.05);
      border: 1px solid #e2e8f0;
      transition: all 0.3s ease;
      height: 100%;
      display: flex;
      flex-direction: column;
    }
    .ind-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 16px 36px rgba(0, 45, 98, 0.12);
      border-color: var(--eksa-navy);
    }
    .ind-card-header {
      display: flex;
      align-items: center;
      gap: 16px;
      margin-bottom: 18px;
    }
    .ind-card-icon {
      width: 52px;
      height: 52px;
      border-radius: 12px;
      background: linear-gradient(135deg, rgba(0, 45, 98, 0.12), rgba(14, 165, 233, 0.1));
      color: var(--eksa-navy);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
      flex-shrink: 0;
    }
    .ind-card-formula {
      display: inline-block;
      font-size: 11px;
      font-weight: 800;
      background: #f1f5f9;
      color: var(--eksa-navy);
      padding: 2px 8px;
      border-radius: 6px;
      letter-spacing: 0.5px;
    }
    .ind-card h3 {
      font-size: 20px;
      color: var(--eksa-navy);
      margin: 4px 0 0 0;
    }
    .ind-card p {
      font-size: 14px;
      color: var(--eksa-text-muted);
      line-height: 1.6;
      margin-bottom: 14px;
    }
    .ind-specs-list {
      list-style: none;
      padding: 0;
      margin: 0 0 20px 0;
      font-size: 13px;
    }
    .ind-specs-list li {
      padding: 5px 0;
      color: #334155;
      display: flex;
      align-items: flex-start;
      gap: 8px;
    }
    .ind-specs-list li i {
      color: var(--eksa-cyan);
      margin-top: 3px;
    }
    .ind-card-footer {
      margin-top: auto;
      padding-top: 16px;
      border-top: 1px solid #f1f5f9;
    }

    /* Sector Boxes */
    .sector-ind-box {
      background: #ffffff;
      border-radius: 14px;
      padding: 24px;
      border: 1px solid #e2e8f0;
      transition: all 0.25s ease;
      height: 100%;
    }
    .sector-ind-box:hover {
      border-color: var(--eksa-navy);
      box-shadow: 0 8px 24px rgba(0, 45, 98, 0.1);
    }
    .sector-ind-box i {
      font-size: 28px;
      color: var(--eksa-navy);
      margin-bottom: 14px;
    }
    .sector-ind-box h4 {
      font-size: 18px;
      color: var(--eksa-navy);
      margin-bottom: 8px;
    }
    .sector-ind-box p {
      font-size: 14px;
      color: var(--eksa-text-muted);
      margin-bottom: 0;
      line-height: 1.5;
    }

    /* Quality / Supply Banner */
    .supply-banner {
      background: linear-gradient(135deg, var(--eksa-navy-dark), var(--eksa-navy));
      border-radius: 18px;
      padding: 45px;
      color: #ffffff;
      box-shadow: 0 12px 35px rgba(0, 45, 98, 0.2);
    }

    /* Contact Form & Branches (Identical to index2) */
    .contact-form-card {
      background: #ffffff;
      border-radius: 20px;
      padding: 40px;
      box-shadow: 0 10px 30px rgba(0, 45, 98, 0.08);
      border: 1px solid #e2e8f0;
    }
    .contact-form-card .form-control {
      height: 50px;
      border-radius: 10px;
      border: 1px solid #e2e8f0;
      padding: 10px 18px;
      font-size: 14px;
      transition: all 0.25s ease;
      background-color: #ffffff;
      color: #1e293b;
    }
    .contact-form-card textarea.form-control {
      height: auto;
    }
    .contact-form-card .form-control:focus {
      border-color: var(--eksa-cyan);
      box-shadow: 0 0 0 4px rgba(14, 165, 233, 0.15);
    }
    .btn-submit-contact {
      background: linear-gradient(135deg, var(--eksa-navy), var(--eksa-cyan));
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
      background: linear-gradient(135deg, var(--eksa-cyan), var(--eksa-cyan-hover));
      color: #ffffff;
      box-shadow: 0 10px 25px rgba(14, 165, 233, 0.45);
      transform: translateY(-2px);
    }

    /* Map Box */
    .map-container-box {
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 45, 98, 0.08);
      border: 1px solid #e2e8f0;
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

    /* Footer */
    .footer-modern {
      background-color: var(--eksa-navy-dark);
      color: #94a3b8;
      padding: 70px 0 25px;
      font-size: 14px;
    }
    .footer-modern h5 {
      color: #ffffff;
      font-size: 16px;
      margin-bottom: 20px;
      font-weight: 700;
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
      transition: color 0.2s ease;
    }
    .footer-links a:hover {
      color: var(--eksa-cyan);
    }
    .footer-bottom {
      margin-top: 50px;
      padding-top: 25px;
      border-top: 1px solid rgba(255, 255, 255, 0.08);
      text-align: center;
      font-size: 13px;
    }
  </style>
</head>
<body>

  <!-- Top Bar -->
  <div class="top-contact-bar d-none d-md-block">
    <div class="container d-flex justify-content-between align-items-center">
      <div>
        <i class="fa-solid fa-industry text-info mr-1"></i>
        <span>División Gases Industriales, Soldadura & Oxicorte Chile</span>
        <span class="mx-2">|</span>
        <i class="fa-solid fa-truck text-info mr-1"></i>
        <span>Despacho a Faenas, Talleres e Industrias</span>
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
      <a class="navbar-brand" href="{{ route('home') }}">
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
          <li class="nav-item"><a href="{{ route('home') }}" class="nav-link"><i class="fa-solid fa-arrow-left mr-1"></i> Inicio</a></li>
          <li class="nav-item"><a href="#catalogo-section" class="nav-link active">Gases Industriales</a></li>
          <li class="nav-item"><a href="{{ route('medicinal') }}" class="nav-link font-weight-bold text-info"><i class="fa-solid fa-heart-pulse mr-1"></i> Medicinal</a></li>
          <li class="nav-item"><a href="#sectores-section" class="nav-link">Sectores</a></li>
          <li class="nav-item"><a href="#equipamiento-section" class="nav-link">Equipos & Oxicorte</a></li>
          <li class="nav-item"><a href="#suministro-section" class="nav-link">Suministro & Racks</a></li>
          <li class="nav-item ml-lg-2 mt-2 mt-lg-0">
            <a href="#contact-section" class="btn btn-quote-nav">
              <i class="fa-solid fa-paper-plane"></i> Cotizar Gases Industriales
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="hero-industrial">
    <div class="container position-relative" style="z-index: 2;">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="hero-badge-ind">
            <i class="fa-solid fa-fire-burner"></i> División Productiva & Soldadura EKSA
          </div>
          <h1 class="hero-title-ind">
            Gases Industriales para <span>Metalmecánica, Minería y Faenas</span>
          </h1>
          <p class="hero-desc-ind">
            Suministro continuo de gases técnicos y mezclas para procesos de soldadura MIG/TIG, oxicorte, inertización y tratamiento térmico en todo Chile. Cilindros certificados, baterías de alto volumen y despacho a terreno.
          </p>
          <div class="hero-actions">
            <a href="#contact-section" class="btn-hero-primary">
              <i class="fa-solid fa-file-signature"></i> Solicitar Cotización
            </a>
            <a href="#catalogo-section" class="btn-hero-outline">
              <i class="fa-solid fa-cubes"></i> Ver Industrias & Usos
            </a>
          </div>
        </div>

        <div class="col-lg-5 mt-5 mt-lg-0 text-center">
          <div style="background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(12px); border-radius: 20px; padding: 25px; border: 1px solid rgba(255, 255, 255, 0.15); box-shadow: 0 20px 40px rgba(0,0,0,0.25);">
            <img src="{{ url('images/servicios/metalmecanica_001.jpg') }}" alt="Gases Industriales y Soldadura EKSA" class="img-fluid" style="border-radius: 12px; max-height: 280px; width: 100%; object-fit: cover; box-shadow: 0 8px 20px rgba(0,0,0,0.2);">
            <div class="mt-3 text-left">
              <span class="badge badge-warning text-dark font-weight-bold" style="font-size: 11px;">Rendimiento y Calidad</span>
              <h5 class="text-white mt-1 mb-1 font-weight-bold" style="font-size: 16px;">Suministro Confiable para la Industria</h5>
              <p class="text-light small mb-0" style="opacity: 0.85;">Cilindros de alta presión (1 a 10 m³), manojos/baterías de tubos y termos criogénicos con recarga programada.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Stats Strip -->
  <div class="container">
    <div class="stats-strip">
      <div class="row">
        <div class="col-md-3 col-6 stat-item">
          <i class="fa-solid fa-certificate"></i>
          <h4>Alta Pureza Técnica</h4>
          <p>Conforme a normas NCh y AWS</p>
        </div>
        <div class="col-md-3 col-6 stat-item">
          <i class="fa-solid fa-truck-fast"></i>
          <h4>Despacho a Faenas</h4>
          <p>Santiago, V Región y cobertura minera</p>
        </div>
        <div class="col-md-3 col-6 stat-item">
          <i class="fa-solid fa-cubes-stacked"></i>
          <h4>Formatos 1 a 10 m³</h4>
          <p>Tubos individuales y manojos/racks</p>
        </div>
        <div class="col-md-3 col-6 stat-item">
          <i class="fa-solid fa-wrench"></i>
          <h4>Soporte en Procesos</h4>
          <p>Asesoría en soldadura y oxicorte</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Catálogo de Gases Industriales -->
  <section class="section-padding" id="catalogo-section">
    <div class="container">
      <div class="section-header">
        <span class="section-badge">Portafolio Técnico</span>
        <h2 class="section-title">Gases Industriales y Mezclas de Alto Rendimiento</h2>
        <p class="section-desc">Gases formulados para maximizar la productividad, velocidad de avance y resistencia estructural en faenas metalúrgicas y procesos continuos.</p>
      </div>

      <div class="row">

        <!-- Gas 1: Argón y Mezclas MIG/TIG -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="ind-card">
            <div class="ind-card-header">
              <div class="ind-card-icon" style="background: rgba(14, 165, 233, 0.15); color: #0284c7;">
                <i class="fa-solid fa-bolt-lightning"></i>
              </div>
              <div>
                <span class="ind-card-formula">Ar / Ar+CO₂</span>
                <h3>Argón y Mezclas MIG/TIG</h3>
              </div>
            </div>
            <p>Gas inerte fundamental para la protección de arco eléctrico en soldadura de alta exigencia, evitando la oxidación del cordón.</p>
            <ul class="ind-specs-list">
              <li><i class="fa-solid fa-circle-check"></i> <strong>Argón Puro (99.99%):</strong> Soldadura TIG en aceros inoxidables, aluminio, cobre y titanio.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Mezcla Atal / Indurmig (Ar 80% / CO₂ 20%):</strong> Soldadura MIG/MAG en acero al carbono con mínimo salpique.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Formatos:</strong> Cilindros de 6m³, 8m³, 10m³ y baterías interconectadas.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Ventaja:</strong> Excelente acabado visual y penetración uniforme.</li>
            </ul>
            <div class="ind-card-footer">
              <a href="#contact-section" class="btn btn-sm btn-outline-primary btn-block font-weight-bold" style="border-radius: 8px;">
                Cotizar Argón y Mezclas <i class="fa-solid fa-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Gas 2: Acetileno -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="ind-card">
            <div class="ind-card-header">
              <div class="ind-card-icon" style="background: rgba(245, 158, 11, 0.15); color: #d97706;">
                <i class="fa-solid fa-fire"></i>
              </div>
              <div>
                <span class="ind-card-formula" style="background: #fef3c7; color: #b45309;">C₂H₂ Combustible</span>
                <h3>Acetileno</h3>
              </div>
            </div>
            <p>El gas combustible con la mayor temperatura de llama (3.100 °C con oxígeno), indispensable para oxicorte rápido y calentamiento.</p>
            <ul class="ind-specs-list">
              <li><i class="fa-solid fa-circle-check"></i> <strong>Poder calorífico:</strong> Llama primaria concentrada para perforación y corte veloz.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Usos:</strong> Oxicorte manual y mecanizado, soldadura autógena y desbaste.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Seguridad:</strong> Cilindros con masa porosa y acetona disolvente de alta seguridad.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Formatos:</strong> Tubos de 5 a 9 kg / m³.</li>
            </ul>
            <div class="ind-card-footer">
              <a href="#contact-section" class="btn btn-sm btn-outline-primary btn-block font-weight-bold" style="border-radius: 8px;">
                Cotizar Acetileno <i class="fa-solid fa-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Gas 3: Oxígeno Industrial -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="ind-card">
            <div class="ind-card-header">
              <div class="ind-card-icon" style="background: rgba(16, 185, 129, 0.15); color: #059669;">
                <i class="fa-solid fa-circle-radiation"></i>
              </div>
              <div>
                <span class="ind-card-formula" style="background: #d1fae5; color: #047857;">O₂ Industrial</span>
                <h3>Oxígeno Industrial</h3>
              </div>
            </div>
            <p>Gas comburente esencial para oxicorte de planchas de acero, enriquecimiento de combustión en hornos y acuicultura.</p>
            <ul class="ind-specs-list">
              <li><i class="fa-solid fa-circle-check"></i> <strong>Pureza:</strong> ≥ 99.5% para corte limpio sin escoria adherida.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Aplicaciones:</strong> Oxicorte pesado, fundición, tratamiento de aguas y salmonicultura.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Suministro:</strong> Cilindros de 6m³ a 10m³, manojos de tubos y termos criogénicos.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Presión de llenado:</strong> 150 a 200 bar normado.</li>
            </ul>
            <div class="ind-card-footer">
              <a href="#contact-section" class="btn btn-sm btn-outline-primary btn-block font-weight-bold" style="border-radius: 8px;">
                Cotizar Oxígeno Industrial <i class="fa-solid fa-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Gas 4: Nitrógeno Industrial -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="ind-card">
            <div class="ind-card-header">
              <div class="ind-card-icon" style="background: rgba(0, 45, 98, 0.12); color: var(--eksa-navy);">
                <i class="fa-solid fa-shield-halved"></i>
              </div>
              <div>
                <span class="ind-card-formula">N₂ Inerte</span>
                <h3>Nitrógeno Industrial</h3>
              </div>
            </div>
            <p>Gas seco e inerte utilizado para prevención de explosiones, inertización en minería, vitivinicultura y corte por fibra láser.</p>
            <ul class="ind-specs-list">
              <li><i class="fa-solid fa-circle-check"></i> <strong>Corte Láser:</strong> Asistencia de alta presión para bordes libres de óxido en aceros inoxidables.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Inertización:</strong> Desplazamiento de oxígeno en cubas de vino, estanques de combustible y tuberías.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Envasado de alimentos:</strong> Atmósfera modificada (EAM) para extender vida útil.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Formatos:</strong> Cilindros de 6m³, 8m³, 10m³ y baterías de alta presión.</li>
            </ul>
            <div class="ind-card-footer">
              <a href="#contact-section" class="btn btn-sm btn-outline-primary btn-block font-weight-bold" style="border-radius: 8px;">
                Cotizar Nitrógeno <i class="fa-solid fa-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Gas 5: Dióxido de Carbono Industrial -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="ind-card">
            <div class="ind-card-header">
              <div class="ind-card-icon" style="background: rgba(99, 102, 241, 0.15); color: #4f46e5;">
                <i class="fa-solid fa-atom"></i>
              </div>
              <div>
                <span class="ind-card-formula" style="background: #e0e7ff; color: #4338ca;">CO₂ Industrial</span>
                <h3>Dióxido de Carbono</h3>
              </div>
            </div>
            <p>Gas activo protector para soldadura MAG semiautomática, procesos agroindustriales, carbonatación y control de pH de riles.</p>
            <ul class="ind-specs-list">
              <li><i class="fa-solid fa-circle-check"></i> <strong>Soldadura MAG:</strong> Gran penetración y bajo costo en uniones estructurales pesadas.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Tratamiento de efluentes:</strong> Neutralización segura de aguas alcalinas industriales.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Invernaderos & Agro:</strong> Enriquecimiento de CO₂ ambiental para aceleración de cultivos.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Formatos:</strong> Cilindros de 25 kg y 35 kg con o sin tubo sifón.</li>
            </ul>
            <div class="ind-card-footer">
              <a href="#contact-section" class="btn btn-sm btn-outline-primary btn-block font-weight-bold" style="border-radius: 8px;">
                Cotizar Dióxido de Carbono <i class="fa-solid fa-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Gas 6: Gases Especiales y Calibración -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="ind-card">
            <div class="ind-card-header">
              <div class="ind-card-icon" style="background: rgba(236, 72, 153, 0.15); color: #db2777;">
                <i class="fa-solid fa-flask-vial"></i>
              </div>
              <div>
                <span class="ind-card-formula" style="background: #fce7f3; color: #be185d;">He / H₂ / Especiales</span>
                <h3>Helio, Hidrógeno & Mezclas</h3>
              </div>
            </div>
            <p>Gases de alta pureza para cromatografía, pruebas hidrostáticas y de estanqueidad, soldadura automatizada y laboratorios.</p>
            <ul class="ind-specs-list">
              <li><i class="fa-solid fa-circle-check"></i> <strong>Helio Industrial:</strong> Detección ultrasensible de fugas y soldadura TIG de aluminio grueso.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Hidrógeno / Mezclas Ar-H₂:</strong> Atmósferas reductoras para tratamiento térmico brillante.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Calibración de instrumentos:</strong> Mezclas con certificación analítica por lote.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Formatos:</strong> Cilindros especiales de alta pureza.</li>
            </ul>
            <div class="ind-card-footer">
              <a href="#contact-section" class="btn btn-sm btn-outline-primary btn-block font-weight-bold" style="border-radius: 8px;">
                Cotizar Gases Especiales <i class="fa-solid fa-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Sectores Productivos Atendidos -->
  <section class="section-padding bg-white" id="sectores-section">
    <div class="container">
      <div class="section-header">
        <span class="section-badge">Cobertura Nacional</span>
        <h2 class="section-title">Soluciones para los Sectores Clave de Chile</h2>
        <p class="section-desc">Proveemos gases técnicos con respaldo operativo para faenas mineras, maestranzas y plantas de producción continua.</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="sector-ind-box">
            <i class="fa-solid fa-hammer"></i>
            <h4>Maestranzas y Estructuras</h4>
            <p>Argón, acetileno y mezclas para fabricación de tolvas, galpones, calderería y montaje de estructuras en acero al carbono e inoxidable.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="sector-ind-box">
            <i class="fa-solid fa-mountain-sun"></i>
            <h4>Gran Minería y Faenas</h4>
            <p>Suministro de gases de corte y mantención de maquinaria pesada, inertización de polvorines, laboratorios de mina y plantas de chancado.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="sector-ind-box">
            <i class="fa-solid fa-fish"></i>
            <h4>Acuicultura y Salmonicultura</h4>
            <p>Oxígeno industrial en cilindros y termos criogénicos para pisciculturas, transporte de smolts en wellboats y centros de engorda en el sur.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="sector-ind-box">
            <i class="fa-solid fa-wine-glass"></i>
            <h4>Industria Vitivinícola</h4>
            <p>Nitrógeno y CO₂ para inertización de cubas de acero, remontajes sin oxidación, desoxigenación y envasado de vinos finos.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="sector-ind-box">
            <i class="fa-solid fa-utensils"></i>
            <h4>Alimentos y Agroindustria</h4>
            <p>Envasado en atmósfera protegida (MAP), congelación criogénica y gases para control de maduración y almacenamiento refrigerado.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="sector-ind-box">
            <i class="fa-solid fa-truck-pickup"></i>
            <h4>Talleres y Mantenimiento</h4>
            <p>Gases y consumibles para talleres mecánicos, matricerías, rectificadoras y empresas de servicio técnico en terreno.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Equipamiento para Oxicorte y Soldadura -->
  <section class="section-padding" id="equipamiento-section">
    <div class="container">
      <div class="section-header">
        <span class="section-badge">Herramientas e Insumos</span>
        <h2 class="section-title">Equipamiento y Accesorios de Oxicorte</h2>
        <p class="section-desc">Dispositivos y componentes de seguridad para un trabajo eficiente y protegido en faena.</p>
      </div>

      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="card p-4 border-0 shadow-sm" style="border-radius: 16px;">
            <h4 style="color: var(--eksa-navy); font-weight: 800;" class="mb-3">Insumos y Equipos Disponibles:</h4>

            <div class="d-flex align-items-start mb-3">
              <div class="mr-3 text-primary" style="font-size: 22px;"><i class="fa-solid fa-gauge-high"></i></div>
              <div>
                <strong class="d-block" style="color: var(--eksa-navy);">Reguladores de Presión Industriales</strong>
                <span class="text-muted small">Modelos de simple y doble etapa para Oxígeno, Acetileno, Argón/CO₂ y Nitrógeno de alta resistencia mecánica.</span>
              </div>
            </div>

            <div class="d-flex align-items-start mb-3">
              <div class="mr-3 text-primary" style="font-size: 22px;"><i class="fa-solid fa-fire-flame-curved"></i></div>
              <div>
                <strong class="d-block" style="color: var(--eksa-navy);">Sopletes y Boquillas de Oxicorte</strong>
                <span class="text-muted small">Mangos de soldar oxiacetilénicos, aditamentos de corte, boquillas tipo Harris/Victor para cortes de 1/8" hasta 12" de espesor.</span>
              </div>
            </div>

            <div class="d-flex align-items-start mb-3">
              <div class="mr-3 text-primary" style="font-size: 22px;"><i class="fa-solid fa-shield-cat"></i></div>
              <div>
                <strong class="d-block" style="color: var(--eksa-navy);">Válvulas Antiretroceso (Arrestallamas)</strong>
                <span class="text-muted small">Válvulas de seguridad normadas para conexión en soplete y salida de regulador para evitar retrocesos de llama.</span>
              </div>
            </div>

            <div class="d-flex align-items-start">
              <div class="mr-3 text-primary" style="font-size: 22px;"><i class="fa-solid fa-cart-flatbed"></i></div>
              <div>
                <strong class="d-block" style="color: var(--eksa-navy);">Mangueras Gemelas y Carros Portacilindros</strong>
                <span class="text-muted small">Mangueras de grado R y T con terminales prensados y carros reforzados para transporte en taller y faena.</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="supply-banner" id="suministro-section">
            <span class="badge badge-warning text-dark font-weight-bold mb-2" style="font-size: 11px;">Capacidad Continua</span>
            <h3 class="text-white font-weight-bold mb-3" style="font-size: 26px;">Baterías y Canastillos de Cilindros</h3>
            <p class="text-light" style="font-size: 15px; line-height: 1.6; opacity: 0.9;">
              Para faenas de alto consumo continuo (oxicorte masivo, corte láser, inertización minera), suministramos <strong>manojos interconectados de 6 y 12 cilindros</strong> montados en racks certificados para izaje con grúa.
            </p>
            <ul class="text-light small pl-3 mb-4" style="line-height: 1.8;">
              <li>Manifold centralizado con una sola toma de salida de alta presión.</li>
              <li>Menor frecuencia de recambios e interrupciones en la línea de producción.</li>
              <li>Pruebas hidrostáticas vigentes y despacho programado a faenas.</li>
            </ul>
            <a href="#contact-section" class="btn btn-quote-nav" style="background: linear-gradient(135deg, var(--eksa-cyan), var(--eksa-cyan-hover)); color: #fff;">
              <i class="fa-solid fa-envelope-circle-check"></i> Cotizar Baterías y Cilindros
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section (Identical to index2) -->
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
              <small class="text-info">División Gases Industriales</small>
            </div>
          </div>
          <p style="font-size: 13px; line-height: 1.6;">
            Suministro certificado de gases industriales, soldaduras, oxicorte y criogénicos con despacho continuo para industrias y faenas en Chile.
          </p>
        </div>

        <!-- Col 2: Enlaces Rápidos -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h5>Navegación</h5>
          <ul class="footer-links">
            <li><a href="{{ route('home') }}"><i class="fa-solid fa-angle-right text-info mr-1"></i> Inicio Principal</a></li>
            <li><a href="#catalogo-section"><i class="fa-solid fa-angle-right text-info mr-1"></i> Gases Industriales</a></li>
            <li><a href="{{ route('medicinal') }}"><i class="fa-solid fa-angle-right text-info mr-1"></i> Línea Medicinal</a></li>
            <li><a href="#sectores-section"><i class="fa-solid fa-angle-right text-info mr-1"></i> Sectores Productivos</a></li>
            <li><a href="#equipamiento-section"><i class="fa-solid fa-angle-right text-info mr-1"></i> Equipamiento & Oxicorte</a></li>
            <li><a href="#contact-section"><i class="fa-solid fa-angle-right text-info mr-1"></i> Contacto Directo</a></li>
          </ul>
        </div>

        <!-- Col 3: Sucursales -->
        <div class="col-lg-5 col-md-12">
          <h5>Atención & Sucursales</h5>
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
  <script src="{{ url('js/popper.min.js') }}"></script>
  <script src="{{ url('js/bootstrap.min.js') }}"></script>

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

