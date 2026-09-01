<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Gases Medicinales y Soluciones Clínicas - EKSA Chile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Suministro de gases medicinales certificados para hospitales, clínicas, ambulancias y oxigenoterapia domiciliaria en Chile. Oxígeno medicinal, aire medicinal, óxido nitroso y equipamiento clínico.">

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
      --eksa-emerald: #10b981;
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
      background: linear-gradient(135deg, var(--eksa-cyan), var(--eksa-cyan-hover));
      color: #ffffff !important;
      font-weight: 700;
      font-size: 13px;
      padding: 9px 20px !important;
      border-radius: 30px;
      border: none;
      box-shadow: 0 4px 14px rgba(14, 165, 233, 0.35);
      transition: transform 0.2s ease, box-shadow 0.2s ease;
      text-decoration: none;
    }
    .btn-quote-nav:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(14, 165, 233, 0.5);
    }

    /* Hero Section */
    .hero-medicinal {
      background: linear-gradient(135deg, #001f44 0%, #002d62 55%, #034b94 100%);
      color: #ffffff;
      padding: 80px 0 90px;
      position: relative;
      overflow: hidden;
    }
    .hero-medicinal::after {
      content: '';
      position: absolute;
      top: 0;
      right: 0;
      width: 60%;
      height: 100%;
      background: radial-gradient(circle at 80% 30%, rgba(14, 165, 233, 0.18) 0%, transparent 60%);
      pointer-events: none;
    }
    .hero-badge-med {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(14, 165, 233, 0.18);
      border: 1px solid rgba(14, 165, 233, 0.4);
      padding: 6px 16px;
      border-radius: 30px;
      font-size: 13px;
      font-weight: 600;
      color: #7dd3fc;
      margin-bottom: 20px;
    }
    .hero-title-med {
      font-size: 42px;
      line-height: 1.15;
      font-weight: 800;
      margin-bottom: 20px;
    }
    .hero-title-med span {
      background: linear-gradient(90deg, #38bdf8, #7dd3fc);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .hero-desc-med {
      font-size: 17px;
      line-height: 1.6;
      color: #cbd5e1;
      margin-bottom: 30px;
      max-width: 620px;
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
      border: 1px solid rgba(14, 165, 233, 0.15);
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
      color: var(--eksa-cyan);
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
      background: rgba(14, 165, 233, 0.12);
      color: var(--eksa-cyan-hover);
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
    .med-card {
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
    .med-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 16px 36px rgba(14, 165, 233, 0.14);
      border-color: rgba(14, 165, 233, 0.4);
    }
    .med-card-header {
      display: flex;
      align-items: center;
      gap: 16px;
      margin-bottom: 18px;
    }
    .med-card-icon {
      width: 52px;
      height: 52px;
      border-radius: 12px;
      background: linear-gradient(135deg, rgba(14, 165, 233, 0.15), rgba(0, 45, 98, 0.1));
      color: var(--eksa-navy);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
      flex-shrink: 0;
    }
    .med-card-formula {
      display: inline-block;
      font-size: 11px;
      font-weight: 800;
      background: var(--eksa-cyan-light);
      color: var(--eksa-cyan-hover);
      padding: 2px 8px;
      border-radius: 6px;
      letter-spacing: 0.5px;
    }
    .med-card h3 {
      font-size: 20px;
      color: var(--eksa-navy);
      margin: 4px 0 0 0;
    }
    .med-card p {
      font-size: 14px;
      color: var(--eksa-text-muted);
      line-height: 1.6;
      margin-bottom: 14px;
    }
    .med-specs-list {
      list-style: none;
      padding: 0;
      margin: 0 0 20px 0;
      font-size: 13px;
    }
    .med-specs-list li {
      padding: 5px 0;
      color: #334155;
      display: flex;
      align-items: flex-start;
      gap: 8px;
    }
    .med-specs-list li i {
      color: var(--eksa-cyan);
      margin-top: 3px;
    }
    .med-card-footer {
      margin-top: auto;
      padding-top: 16px;
      border-top: 1px solid #f1f5f9;
    }

    /* Healthcare Sectors */
    .sector-med-box {
      background: #ffffff;
      border-radius: 14px;
      padding: 24px;
      border: 1px solid #e2e8f0;
      transition: all 0.25s ease;
      height: 100%;
    }
    .sector-med-box:hover {
      border-color: var(--eksa-cyan);
      box-shadow: 0 8px 24px rgba(14, 165, 233, 0.1);
    }
    .sector-med-box i {
      font-size: 28px;
      color: var(--eksa-cyan);
      margin-bottom: 14px;
    }
    .sector-med-box h4 {
      font-size: 18px;
      color: var(--eksa-navy);
      margin-bottom: 8px;
    }
    .sector-med-box p {
      font-size: 14px;
      color: var(--eksa-text-muted);
      margin-bottom: 0;
      line-height: 1.5;
    }

    /* Quality Banner */
    .quality-banner {
      background: linear-gradient(135deg, var(--eksa-navy-dark), var(--eksa-navy));
      border-radius: 18px;
      padding: 45px;
      color: #ffffff;
      box-shadow: 0 12px 35px rgba(0, 45, 98, 0.2);
    }

    /* Contact Form & Branches */
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
        <i class="fa-solid fa-hospital-user text-info mr-1"></i>
        <span>División Salud & Gases Medicinales Chile</span>
        <span class="mx-2">|</span>
        <i class="fa-solid fa-truck-medical text-info mr-1"></i>
        <span>Atención y Abastecimiento Continuo</span>
      </div>
      <div>
        <a href="tel:+56972757988" class="mr-3"><i class="fa-solid fa-phone text-info mr-1"></i> +56 9 7275 7988</a>
        <a href="mailto:contacto@eksacomercial.cl"><i class="fa-solid fa-envelope text-info mr-1"></i> contacto@eksacomercial.cl</a>
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
          <li class="nav-item"><a href="#catalogo-section" class="nav-link active">Gases Medicinales</a></li>
          <li class="nav-item"><a href="#sectores-med-section" class="nav-link">Sectores Clínicos</a></li>
          <li class="nav-item"><a href="#equipamiento-section" class="nav-link">Equipamiento</a></li>
          <li class="nav-item"><a href="#normativa-section" class="nav-link">Calidad & ISP</a></li>
          <li class="nav-item ml-lg-2 mt-2 mt-lg-0">
            <a href="#contacto-medicinal" class="btn btn-quote-nav">
              <i class="fa-solid fa-paper-plane"></i> Cotizar Línea Médica
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="hero-medicinal">
    <div class="container position-relative" style="z-index: 2;">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="hero-badge-med">
            <i class="fa-solid fa-heart-pulse"></i> División Médica y Hospitalaria EKSA
          </div>
          <h1 class="hero-title-med">
            Gases Medicinales y <span>Soporte Vital Certificado</span>
          </h1>
          <p class="hero-desc-med">
            Suministro continuo de gases grado farmacopea para hospitales, clínicas, servicios de urgencia, ambulancias y oxigenoterapia domiciliaria a lo largo de Chile. Máxima pureza, seguridad y trazabilidad médica.
          </p>
          <div class="d-flex flex-wrap gap-3" style="gap: 15px;">
            <a href="#contacto-medicinal" class="btn btn-quote-nav" style="padding: 13px 30px; font-size: 15px;">
              <i class="fa-solid fa-file-signature"></i> Solicitar Cotización Clínica
            </a>
            <a href="#catalogo-section" class="btn btn-outline-light" style="border-radius: 30px; padding: 13px 26px; font-weight: 600; font-size: 14px;">
              <i class="fa-solid fa-flask-vial mr-1"></i> Ver Catálogo de Gases
            </a>
          </div>
        </div>

        <div class="col-lg-5 mt-5 mt-lg-0 text-center">
          <div style="background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(12px); border-radius: 20px; padding: 25px; border: 1px solid rgba(255, 255, 255, 0.15); box-shadow: 0 20px 40px rgba(0,0,0,0.25);">
            <img src="{{ url('images/servicios/salud_001.jpg') }}" alt="Gases Medicinales y Soporte Clínico EKSA" class="img-fluid" style="border-radius: 12px; max-height: 280px; width: 100%; object-fit: cover; box-shadow: 0 8px 20px rgba(0,0,0,0.2);">
            <div class="mt-3 text-left">
              <span class="badge badge-info" style="font-size: 11px;">Trazabilidad Garantizada</span>
              <h5 class="text-white mt-1 mb-1 font-weight-bold" style="font-size: 16px;">Suministro Clínico e Insumos Hospitalarios</h5>
              <p class="text-light small mb-0" style="opacity: 0.85;">Cilindros de aluminio liviano, acero y termos criogénicos con despacho programado.</p>
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
          <h4>Pureza Farmacopea</h4>
          <p>Conforme a estándares sanitarios</p>
        </div>
        <div class="col-md-3 col-6 stat-item">
          <i class="fa-solid fa-truck-fast"></i>
          <h4>Logística Continua</h4>
          <p>Cobertura central y regiones</p>
        </div>
        <div class="col-md-3 col-6 stat-item">
          <i class="fa-solid fa-cubes-stacked"></i>
          <h4>Formatos 0.5 a 10 m³</h4>
          <p>Cilindros livianos y termos</p>
        </div>
        <div class="col-md-3 col-6 stat-item">
          <i class="fa-solid fa-headset"></i>
          <h4>Asesoría Técnica</h4>
          <p>Equipamiento y redes clínicas</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Catálogo de Gases Medicinales -->
  <section class="section-padding" id="catalogo-section">
    <div class="container">
      <div class="section-header">
        <span class="section-badge">Portafolio Clínico</span>
        <h2 class="section-title">Gases Medicinales Certificados</h2>
        <p class="section-desc">Elaborados bajo rigurosos protocolos de Buenas Prácticas de Manufactura para garantizar la seguridad de pacientes y profesionales de la salud.</p>
      </div>

      <div class="row">

        <!-- Gas 1: Oxígeno Medicinal -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="med-card">
            <div class="med-card-header">
              <div class="med-card-icon" style="background: rgba(14, 165, 233, 0.15); color: #0284c7;">
                <i class="fa-solid fa-lungs"></i>
              </div>
              <div>
                <span class="med-card-formula">O₂ Medicinal</span>
                <h3>Oxígeno Medicinal</h3>
              </div>
            </div>
            <p>Esencial para soporte vital, tratamiento de hipoxemia, unidades de cuidados intensivos (UCI), anestesia y oxigenoterapia domiciliaria.</p>
            <ul class="med-specs-list">
              <li><i class="fa-solid fa-circle-check"></i> <strong>Pureza:</strong> ≥ 99.5% Grado Farmacopea.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Cilindros:</strong> Portátiles (0.5m³, 1m³, 2m³) y estacionarios (6m³, 8m³, 10m³).</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Termos:</strong> Oxígeno líquido criogénico hospitalario.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Uso:</strong> Ventilación mecánica, nebulización y urgencias.</li>
            </ul>
            <div class="med-card-footer">
              <a href="#contacto-medicinal" class="btn btn-sm btn-outline-info btn-block font-weight-bold" style="border-radius: 8px;">
                Cotizar Oxígeno O₂ <i class="fa-solid fa-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Gas 2: Aire Medicinal -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="med-card">
            <div class="med-card-header">
              <div class="med-card-icon" style="background: rgba(16, 185, 129, 0.15); color: #059669;">
                <i class="fa-solid fa-wind"></i>
              </div>
              <div>
                <span class="med-card-formula" style="background: #d1fae5; color: #047857;">Aire Clínico</span>
                <h3>Aire Medicinal</h3>
              </div>
            </div>
            <p>Mezcla sintética o aire comprimido de alta pureza, libre de aceites, humedad y partículas sólidas contaminantes.</p>
            <ul class="med-specs-list">
              <li><i class="fa-solid fa-circle-check"></i> <strong>Composición:</strong> 21% O₂ / 79% N₂ controlado.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Uso principal:</strong> Vector para aerosoles y ventiladores pediátricos y adultos.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Formatos:</strong> Cilindros individuales y bancos de baterías.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Aplicación:</strong> Salas de parto, UCI, incubadoras y pabellón.</li>
            </ul>
            <div class="med-card-footer">
              <a href="#contacto-medicinal" class="btn btn-sm btn-outline-info btn-block font-weight-bold" style="border-radius: 8px;">
                Cotizar Aire Medicinal <i class="fa-solid fa-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Gas 3: Óxido Nitroso -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="med-card">
            <div class="med-card-header">
              <div class="med-card-icon" style="background: rgba(99, 102, 241, 0.15); color: #4f46e5;">
                <i class="fa-solid fa-shield-virus"></i>
              </div>
              <div>
                <span class="med-card-formula" style="background: #e0e7ff; color: #4338ca;">N₂O Anestesia</span>
                <h3>Óxido Nitroso</h3>
              </div>
            </div>
            <p>Gas medicinal analgésico y coadyuvante en anestesia general inhalatoria para procedimientos quirúrgicos y odontológicos.</p>
            <ul class="med-specs-list">
              <li><i class="fa-solid fa-circle-check"></i> <strong>Pureza:</strong> ≥ 98.0% Grado Anestesia.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Efecto:</strong> Rápida inducción y recuperación analgésica.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Formatos:</strong> Cilindros de acero con válvula Pin Index.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Aplicación:</strong> Cirugías complejas, partos y sedación dental.</li>
            </ul>
            <div class="med-card-footer">
              <a href="#contacto-medicinal" class="btn btn-sm btn-outline-info btn-block font-weight-bold" style="border-radius: 8px;">
                Cotizar Óxido Nitroso <i class="fa-solid fa-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Gas 4: Dióxido de Carbono Quirúrgico -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="med-card">
            <div class="med-card-header">
              <div class="med-card-icon" style="background: rgba(245, 158, 11, 0.15); color: #d97706;">
                <i class="fa-solid fa-microscope"></i>
              </div>
              <div>
                <span class="med-card-formula" style="background: #fef3c7; color: #b45309;">CO₂ Quirúrgico</span>
                <h3>Dióxido de Carbono</h3>
              </div>
            </div>
            <p>Utilizado como gas de insuflación en laparoscopía, cirugías mínimamente invasivas, endoscopía y pruebas fisiológicas.</p>
            <ul class="med-specs-list">
              <li><i class="fa-solid fa-circle-check"></i> <strong>Pureza:</strong> Grado clínico USP / Farmacopea.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Ventaja:</strong> Alta solubilidad en sangre y rápida eliminación.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Formatos:</strong> Cilindros con tubo sifón y de fase gaseosa.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Uso:</strong> Pabellón laparoscópico y crioterapia.</li>
            </ul>
            <div class="med-card-footer">
              <a href="#contacto-medicinal" class="btn btn-sm btn-outline-info btn-block font-weight-bold" style="border-radius: 8px;">
                Cotizar Dióxido de Carbono <i class="fa-solid fa-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Gas 5: Nitrógeno Medicinal -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="med-card">
            <div class="med-card-header">
              <div class="med-card-icon" style="background: rgba(14, 165, 233, 0.15); color: #002d62;">
                <i class="fa-solid fa-snowflake"></i>
              </div>
              <div>
                <span class="med-card-formula">N₂ Criobiología</span>
                <h3>Nitrógeno Medicinal</h3>
              </div>
            </div>
            <p>Suministrado en fase líquida o gas para criopreservación biológica, dermatología, criocirugía y accionamiento de instrumental neumático.</p>
            <ul class="med-specs-list">
              <li><i class="fa-solid fa-circle-check"></i> <strong>Temperatura líquida:</strong> -196 °C para ultracongelación.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Aplicación:</strong> Bancos de células, sangre, tejidos e injertos.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Formatos:</strong> Termos de transporte criogénico y cilindros.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Uso:</strong> Dermatología, traumatología y neurocirugía.</li>
            </ul>
            <div class="med-card-footer">
              <a href="#contacto-medicinal" class="btn btn-sm btn-outline-info btn-block font-weight-bold" style="border-radius: 8px;">
                Cotizar Nitrógeno N₂ <i class="fa-solid fa-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Gas 6: Mezclas Clínicas y Calibración -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="med-card">
            <div class="med-card-header">
              <div class="med-card-icon" style="background: rgba(236, 72, 153, 0.15); color: #db2777;">
                <i class="fa-solid fa-vial-circle-check"></i>
              </div>
              <div>
                <span class="med-card-formula" style="background: #fce7f3; color: #be185d;">Mezclas Médicas</span>
                <h3>Mezclas de Calibración</h3>
              </div>
            </div>
            <p>Gases especiales certificados para pruebas de función pulmonar (espirometría), análisis de gases arteriales y calibración de analizadores.</p>
            <ul class="med-specs-list">
              <li><i class="fa-solid fa-circle-check"></i> <strong>Precisión:</strong> Certificado analítico de mezcla por lote.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Tipos:</strong> Mezclas O₂/CO₂, mezclas con helio y difusión pulmonar.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Uso:</strong> Laboratorios de fisiología respiratoria y hemodinamia.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Formatos:</strong> Cilindros especiales de alta precisión.</li>
            </ul>
            <div class="med-card-footer">
              <a href="#contacto-medicinal" class="btn btn-sm btn-outline-info btn-block font-weight-bold" style="border-radius: 8px;">
                Cotizar Mezclas Especiales <i class="fa-solid fa-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Sectores de Salud Atendidos -->
  <section class="section-padding bg-white" id="sectores-med-section">
    <div class="container">
      <div class="section-header">
        <span class="section-badge">Cobertura Asistencial</span>
        <h2 class="section-title">Soluciones para el Ecosistema de Salud</h2>
        <p class="section-desc">Adaptamos nuestras soluciones y logística a las necesidades particulares de cada establecimiento de salud en Chile.</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="sector-med-box">
            <i class="fa-solid fa-hospital text-info"></i>
            <h4>Hospitales y Clínicas</h4>
            <p>Suministro a granel y cilindros para centrales hospitalarias, pabellones de cirugía, salas de parto y unidades de paciente crítico (UPC / UCI).</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="sector-med-box">
            <i class="fa-solid fa-house-medical text-info"></i>
            <h4>Oxigenoterapia Domiciliaria</h4>
            <p>Kits de oxígeno para pacientes crónicos en su hogar: cilindros de aluminio liviano, carros de transporte, reguladores pediátricos y adultos.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="sector-med-box">
            <i class="fa-solid fa-truck-medical text-info"></i>
            <h4>Ambulancias y Rescate</h4>
            <p>Cilindros compactos tipo D y E con válvulas de acople rápido y reguladores Pin Index para soporte de vía aérea en traslados de emergencia.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="sector-med-box">
            <i class="fa-solid fa-tooth text-info"></i>
            <h4>Clínicas Odontológicas</h4>
            <p>Cilindros de óxido nitroso y oxígeno para sedación consciente, analgésica y equipos dentales en procedimientos ambulatorios.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="sector-med-box">
            <i class="fa-solid fa-dna text-info"></i>
            <h4>Laboratorios y Bancos de Tejidos</h4>
            <p>Gases ultrapuros para cromatografía, incubadoras CO₂ y nitrógeno líquido para criopreservación de muestras y líneas celulares.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="sector-med-box">
            <i class="fa-solid fa-paw text-info"></i>
            <h4>Clínicas Veterinarias</h4>
            <p>Suministro de oxígeno medicinal y anestésicos inhalatorios adaptados a cirugías y hospitalización de animales de compañía y mayores.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Equipamiento Clínico y Accesorios -->
  <section class="section-padding" id="equipamiento-section">
    <div class="container">
      <div class="section-header">
        <span class="section-badge">Tecnología de Administración</span>
        <h2 class="section-title">Equipamiento y Accesorios Médicos</h2>
        <p class="section-desc">Dispositivos certificados para la regulación, dosificación y transporte seguro de gases medicinales.</p>
      </div>

      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="card p-4 border-0 shadow-sm" style="border-radius: 16px;">
            <h4 style="color: var(--eksa-navy); font-weight: 800;" class="mb-3">Equipos Clínicos Disponibles:</h4>

            <div class="d-flex align-items-start mb-3">
              <div class="mr-3 text-info" style="font-size: 22px;"><i class="fa-solid fa-gauge-high"></i></div>
              <div>
                <strong class="d-block" style="color: var(--eksa-navy);">Reguladores de Presión Medicinal</strong>
                <span class="text-muted small">Modelos con conexión CGA 540 (estándar tuerca) y CGA 870 (yoke / pin index para ambulancias).</span>
              </div>
            </div>

            <div class="d-flex align-items-start mb-3">
              <div class="mr-3 text-info" style="font-size: 22px;"><i class="fa-solid fa-droplet"></i></div>
              <div>
                <strong class="d-block" style="color: var(--eksa-navy);">Flujómetros y Humidificadores</strong>
                <span class="text-muted small">Caudalímetros de 0-15 LPM graduados de alta precisión y vasos humidificadores autoclavables.</span>
              </div>
            </div>

            <div class="d-flex align-items-start mb-3">
              <div class="mr-3 text-info" style="font-size: 22px;"><i class="fa-solid fa-cart-flatbed"></i></div>
              <div>
                <strong class="d-block" style="color: var(--eksa-navy);">Carros Portacilindros</strong>
                <span class="text-muted small">Estructuras de acero esmaltado con ruedas de goma para transporte seguro de tubos de 0.5 a 10 m³.</span>
              </div>
            </div>

            <div class="d-flex align-items-start">
              <div class="mr-3 text-info" style="font-size: 22px;"><i class="fa-solid fa-network-wired"></i></div>
              <div>
                <strong class="d-block" style="color: var(--eksa-navy);">Centrales de Manifolds y Alarmas</strong>
                <span class="text-muted small">Bancos de cambio automático continuo para redes centrales hospitalarias con monitoreo de presión.</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="quality-banner">
            <span class="badge badge-info mb-2" style="font-size: 11px;">Garantía de Seguridad</span>
            <h3 class="text-white font-weight-bold mb-3" style="font-size: 26px;">Cilindros de Aluminio Liviano</h3>
            <p class="text-light" style="font-size: 15px; line-height: 1.6; opacity: 0.9;">
              Ideales para traslados en ambulancias y pacientes de oxigenoterapia domiciliaria. Son hasta un <strong>40% más livianos</strong> que los cilindros convencionales de acero, resistentes a la corrosión y fáciles de maniobrar.
            </p>
            <ul class="text-light small pl-3 mb-4" style="line-height: 1.8;">
              <li>Cilindros tipo M6 (165 Lts), tipo D (425 Lts) y tipo E (680 Lts).</li>
              <li>Bolsas y mochilas de transporte acolchadas ergonómicas.</li>
              <li>Pruebas hidrostáticas vigentes y sello termoencogible de inviolabilidad.</li>
            </ul>
            <a href="#contacto-medicinal" class="btn btn-quote-nav">
              <i class="fa-solid fa-envelope-circle-check"></i> Cotizar Equipos y Cilindros
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Calidad y Normativa Chilena ISP -->
  <section class="section-padding bg-white" id="normativa-section">
    <div class="container">
      <div class="section-header">
        <span class="section-badge">Compromiso Sanitario</span>
        <h2 class="section-title">Normativa y Estándares de Salud en Chile</h2>
        <p class="section-desc">Nuestros procesos de envasado, control analítico y distribución cumplen con las directrices de seguridad clínica.</p>
      </div>

      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-100 p-4 border-0 shadow-sm text-center" style="border-radius: 14px; background: var(--eksa-ice);">
            <div class="mb-3 text-info" style="font-size: 36px;"><i class="fa-solid fa-stamp"></i></div>
            <h5 style="color: var(--eksa-navy); font-weight: 800;">Pureza Farmacopea</h5>
            <p class="text-muted small mb-0">Cumplimiento de monografías farmacéuticas exigidas por el Instituto de Salud Pública (ISP) para medicamentos gaseosos.</p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card h-100 p-4 border-0 shadow-sm text-center" style="border-radius: 14px; background: var(--eksa-ice);">
            <div class="mb-3 text-info" style="font-size: 36px;"><i class="fa-solid fa-barcode"></i></div>
            <h5 style="color: var(--eksa-navy); font-weight: 800;">Trazabilidad por Lote</h5>
            <p class="text-muted small mb-0">Identificación clara de número de lote, fecha de elaboración, pureza garantizada y sellos de seguridad en cada cilindro.</p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card h-100 p-4 border-0 shadow-sm text-center" style="border-radius: 14px; background: var(--eksa-ice);">
            <div class="mb-3 text-info" style="font-size: 36px;"><i class="fa-solid fa-shield-halved"></i></div>
            <h5 style="color: var(--eksa-navy); font-weight: 800;">Mantenimiento y PH</h5>
            <p class="text-muted small mb-0">Inspección periódica, prueba hidrostática quinquenal y pintado según código cromático de seguridad médica.</p>
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
              <small class="text-info">División Gases Medicinales</small>
            </div>
          </div>
          <p style="font-size: 13px; line-height: 1.6;">
            Suministro certificado de gases medicinales, industriales y criogénicos con despacho continuo para recintos de salud e industrias en Chile.
          </p>
        </div>

        <!-- Col 2: Enlaces Rápidos -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h5>Navegación</h5>
          <ul class="footer-links">
            <li><a href="{{ route('home') }}"><i class="fa-solid fa-angle-right text-info mr-1"></i> Inicio Principal</a></li>
            <li><a href="#catalogo-section"><i class="fa-solid fa-angle-right text-info mr-1"></i> Gases Medicinales</a></li>
            <li><a href="#sectores-med-section"><i class="fa-solid fa-angle-right text-info mr-1"></i> Sectores Clínicos</a></li>
            <li><a href="#equipamiento-section"><i class="fa-solid fa-angle-right text-info mr-1"></i> Equipamiento</a></li>
            <li><a href="#normativa-section"><i class="fa-solid fa-angle-right text-info mr-1"></i> Calidad & ISP</a></li>
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
            <a href="mailto:contacto@eksacomercial.cl" class="text-white" style="font-size: 14px;">
              <i class="fa-solid fa-envelope text-info mr-1"></i> contacto@eksacomercial.cl
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

