<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>R&soto contratistas generales s.r.l
    </title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Main CSS File -->
    <link href="assets/css/rsoto.css" rel="stylesheet">
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="{{ route('rsoto') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/logos/image.png') }}" alt="Logo rsoto" class="me-2">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Inicio</a></li>
                    <li><a href="#ejecucion">Ejecución</a></li>
                    <li><a href="#supervision">supervision</a></li>
                    <li><a href="#supervicion">supervición</a></li>

                    <li><a href="#consultoria">Consultoria</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="/">Grupo Soto</a></li>


                    <!-- pondremos el boton del logion si es que el cliente lo solicita -->
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="assets/img/hero-bg-2.jpg" alt="" class="hero-bg">

            <div class="container">
                <div class="row gy-4 justify-content-between align-items-center">

                    <div class="col-lg-4 order-lg-last hero-img position-relative" data-aos="zoom-out"
                        data-aos-delay="100">
                        <!-- Imagen desvanecida atrás -->
                        <img src="{{ asset('assets/img/logos/rsoto/rsoto.png') }}"
                            class="position-absolute top-0 start-0 w-100 h-100 img-blur" alt="Imagen rsoto fondo">

                        <!-- Imagen principal flotada con sombra -->
                        <img src="{{ asset('assets/img/logos/rsoto/rsoto.png') }}"
                            class="d-block w-100 img-fluid position-relative img-lift" alt="Imagen rsoto"
                            style="object-fit: contain; max-height: 500px;">
                    </div>




                    <div class="col-lg-6 d-flex flex-column justify-content-center text-white text-center text-lg-start"
                        data-aos="fade-in">
                        <!-- Marca y título -->
                        <h1 class="display-3 fw-bold mb-8 lh-sm">
                            R&Soto<br>
                            <span class="text-white d-inline-block">Contratistas Generales S.R.L.</span>
                        </h1>


                        <!-- Mensaje institucional -->
                        <p class="fs-5 fw-light mb-4 text-white-50">
                            Empresa líder en ingeniería que desafía el presente para construir el futuro con innovación,
                            calidad y compromiso.
                        </p>
                        <div
                            class="bg-white bg-opacity-10 backdrop-blur-md border border-white border-opacity-25 rounded-4 p-4 p-md-5 mt-4 shadow-lg">
                            <div class="row justify-content-center gy-4 text-white text-center">

                                <!-- Bloque 1 -->
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="d-flex flex-column align-items-center">
                                        <i class="bi bi-award-fill fs-2 text-warning mb-2"></i>
                                        <h6 class="fw-bold mb-1">Comprometidos con la excelencia</h6>
                                        <p class="text-white-50 small mb-0">Crecemos con cada obra y cada alianza
                                            estratégica.</p>
                                    </div>
                                </div>

                                <!-- Bloque 2 -->
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="d-flex flex-column align-items-center">
                                        <i class="bi bi-briefcase-fill fs-2 text-primary mb-2"></i>
                                        <h6 class="fw-bold mb-1">+ Experiencia</h6>
                                        <p class="text-white-50 small mb-0">Desde obras civiles hasta soluciones
                                            industriales.</p>
                                    </div>
                                </div>

                                <!-- Bloque 3 -->
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="d-flex flex-column align-items-center">
                                        <i class="bi bi-building-check fs-2 text-success mb-2"></i>
                                        <h6 class="fw-bold mb-1">+ supervision ejecutados</h6>
                                        <p class="text-white-50 small mb-0">Con impacto en infraestructura regional.</p>
                                    </div>
                                </div>

                                <!-- Bloque 4 -->
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="d-flex flex-column align-items-center">
                                        <i class="bi bi-geo-alt-fill fs-2 text-info mb-2"></i>
                                        <h6 class="fw-bold mb-1">+ Alcance territorial</h6>
                                        <p class="text-white-50 small mb-0">Operamos en Arequipa, Cusco y Puno.</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <!-- Botones principales
  <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-start">
    <a href="#about" class="btn btn-light btn-lg rounded-pill px-4 py-2 shadow-sm fw-semibold">
      <i class="bi bi-info-circle me-2"></i>Conócenos
    </a>
    <a href="https://www.youtube.com/watch?v=TULrF1zWzcs"
       class="glightbox btn btn-outline-light btn-lg rounded-pill d-flex align-items-center gap-2 px-4 py-2 shadow-sm fw-semibold">
      <i class="bi bi-play-circle-fill fs-4"></i><span>Ver Video</span>
    </a>
  </div> -->
                    </div>

                </div>
            </div>
            <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28 " preserveAspectRatio="none">
                <defs>
                    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                    </path>
                </defs>
                <g class="wave1">
                    <use xlink:href="#wave-path" x="50" y="3"></use>
                </g>
                <g class="wave2">
                    <use xlink:href="#wave-path" x="50" y="0"></use>
                </g>
                <g class="wave3">
                    <use xlink:href="#wave-path" x="50" y="9"></use>
                </g>
            </svg>

        </section>
        <section class="stats-section py-5 bg-light">
            <div class="container">
                <div class="row text-center justify-content-center g-4">

                    <!-- Card 1 -->
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="stats-card bg-white shadow-sm rounded-4 p-4 h-100">
                            <div class="icon-circle mb-3 mx-auto bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 64px; height: 64px; background-color: #10058c;">
                                <i class="bi bi-building-check fs-3 text-white"></i>
                            </div>
                            <h3 class="fw-bold mb-1" style="color: #10058c;">+50</h3>
                            <p class="fs-5 text-muted mb-0">Obras supervision<br>con calidad</p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="stats-card bg-white shadow-sm rounded-4 p-4 h-100">
                            <div class="icon-circle mb-3 mx-auto bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 64px; height: 64px; background-color: #10058c;">
                                <i class="bi bi-person-workspace fs-3 text-white"></i>
                            </div>
                            <h3 class="fw-bold mb-1" style="color: #10058c;">+30</h3>
                            <p class="fs-5 text-muted mb-0">Consultorías<br>realizadas</p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="stats-card bg-white shadow-sm rounded-4 p-4 h-100">
                            <div class="icon-circle mb-3 mx-auto bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 64px; height: 64px; background-color: #10058c;">
                                <i class="bi bi-file-earmark-check fs-3 text-white"></i>
                            </div>
                            <h3 class="fw-bold mb-1" style="color: #10058c;">Certificados</h3>
                            <p class="fs-5 text-muted mb-0">Verificados online</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- OBRAS EN EJECUCIÓN -->
        <section id="ejecucion" class="py-5 bg-light">
            <div class="container">
                <h2 class="fw-bold text-center mb-5 text-uppercase" style="color: #10058c;">OBRAS EN EJECUCIÓN
                </h2>

                <div id="carouselEjecucion" class="carousel slide" data-bs-ride="carousel"
                    data-carousel="auto-indicators">
                    <div class="carousel-inner rounded shadow-lg">

                        <!-- Proyecto 1 -->
                        <div class="carousel-item active">
                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen del proyecto -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/ejecucion/losas.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Losa Multiusos Orurillo">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Creación de Losa de Recreación Multiusos – Barrio Santa Bárbara
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Orurillo, Melgar, Puno – Perú</li>
                                            <li>📅 <strong>Plazo:</strong> 04/04/2024 al 18/06/2024 (75 días calendario)
                                            </li>
                                            <li>💰 <strong>Monto:</strong> S/ 663,945.73</li>
                                            <li>🛠️ <strong>Servicio:</strong> Ejecución de infraestructura recreativa
                                            </li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Distrital de Orurillo</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Proyecto 2 -->
                        <div class="carousel-item">
                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen del proyecto -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/ejecucion/aguaalcantarillado.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Servicio Agua y Alcantarillado Arequipa">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Renovación de Colector Secundario – Urb. León XIII, Cayma
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Cayma, Arequipa – Perú</li>
                                            <li>📅 <strong>Plazo:</strong> 01/02/2024 al 15/05/2024 (120 días
                                                calendario)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 508,173.89</li>
                                            <li>🛠️ <strong>Servicio:</strong> Renovación de red de alcantarillado</li>
                                            <li>🏛️ <strong>Cliente:</strong> Servicio de Agua Potable y Alcantarillado
                                                de Arequipa</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Controles -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselEjecucion"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-opacity-75 rounded-circle p-2 shadow"
                            style="background-color: #10058c;" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselEjecucion"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-opacity-75 rounded-circle p-2 shadow"
                            style="background-color: #10058c;" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>

                    <div class="carousel-indicators"></div>

                </div>
            </div>
        </section>

        <!-- OBRAS supervision -->
        <section id="ejecutadas" class="py-5 bg-light">
            <div class="container">
                <h2 class="fw-bold text-center mb-5 text-uppercase" style="color: #10058c;">OBRAS EJECUTADAS

                </h2>

                <div id="carouselEjecutadas" class="carousel slide" data-bs-ride="carousel"
                    data-carousel="auto-indicators">
                    <div class="carousel-inner rounded shadow-lg">

                        <!-- Proyecto 1 -->
                        <div class="carousel-item active">
                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/ejecutadas/chumbivilcas_usb.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="USB Chumbivilcas">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Ampliación de Agua y Construcción de USB – Santo Tomás
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Huintoccoyo, Santo Tomás – Chumbivilcas,
                                                Cusco</li>
                                            <li>📅 <strong>Periodo:</strong> 23/09/2022 al 10/02/2023 (180 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 2,443,110.30</li>
                                            <li>🛠️ <strong>Servicio:</strong> Mejora del servicio de agua potable y
                                                saneamiento (USB)</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Provincial de Chumbivilcas
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/ejecutadas/alto_pichigua.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Servicios Deportivos Alto Pichigua">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Servicios Deportivos y Recreativos – Comunidad de Ccahuaya
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Ccahuaya, Alto Pichigua – Espinar, Cusco
                                            </li>
                                            <li>📅 <strong>Periodo:</strong> 02/09/2022 al 31/12/2022 (120 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 1,466,411.07</li>
                                            <li>🛠️ <strong>Servicio:</strong> Creación de espacios deportivos y
                                                recreativos</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Distrital de Alto Pichigua
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/ejecutadas/plaza_ilave.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Plaza Ilave">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Mejoramiento de la Plaza Central – Jaquencachi
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Jaquencachi, Ilave – El Collao, Puno</li>
                                            <li>📅 <strong>Periodo:</strong> 17/11/2021 al 31/05/2022 (210 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 618,481.08</li>
                                            <li>🛠️ <strong>Servicio:</strong> Ejecución de obra urbana – plaza central
                                            </li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Provincial de El Collao –
                                                Ilave</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/ejecutadas/plaza_ituata.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Plaza Pública Ituata">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Creación del Servicio de Espacios Públicos – Comunidad de Pago
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Ituata, Carabaya – Puno</li>
                                            <li>📅 <strong>Periodo:</strong> 14/09/2021 al 31/12/2021 (120 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 411,403.34</li>
                                            <li>🛠️ <strong>Servicio:</strong> Ejecución de espacios públicos urbanos
                                            </li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Distrital de Ituata</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/ejecutadas/plazuela_puno.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Plazueleta Ciudad Nueva, Alto Puno">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Servicios en Plazueleta Ciudad Nueva – Alto Puno
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Alto Puno, Provincia de Puno – Perú</li>
                                            <li>📅 <strong>Periodo:</strong> 14/12/2020 al 30/04/2021 (150 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 140,970.69</li>
                                            <li>🛠️ <strong>Servicio:</strong> Ejecución de obra pública en plazueleta
                                            </li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Provincial de Puno</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/ejecutadas/saneamiento_chupa.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Saneamiento en Chupa">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Saneamiento Básico en Central Trapiche y Chijuraya – Chupa
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Chupa, Azángaro, Puno – Perú</li>
                                            <li>📅 <strong>Periodo:</strong> 12/12/2019 al 03/07/2020 (240 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 3,931,573.84</li>
                                            <li>🛠️ <strong>Servicio:</strong> Mejora e instalación de unidades de
                                                saneamiento</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Distrital de Chupa</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/ejecutadas/santa_rosa_llusta_casana.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Sistema de Agua Santa Rosa">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Sistema de Agua y Disposición Sanitaria – Llusta y Casana
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Santa Rosa, Mazocruz, El Collao, Puno –
                                                Perú</li>
                                            <li>📅 <strong>Periodo:</strong> 23/10/2018 al 28/06/2019 (240 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 4,745,915.58</li>
                                            <li>🛠️ <strong>Servicio:</strong> Ejecución de sistema de agua potable y
                                                disposición sanitaria de excretas</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Distrital de Santa Rosa</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/ejecutadas/moho_quellahuyo.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Sistema de Agua Moho">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Sistema de Agua Potable y Saneamiento – Quellahuyo Pomaoca
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Moho, Puno – Perú</li>
                                            <li>📅 <strong>Periodo:</strong> 09/11/2017 al 30/08/2018 (300 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 4,788,714.00</li>
                                            <li>🛠️ <strong>Servicio:</strong> Mejoramiento y ampliación del sistema de
                                                agua potable y saneamiento</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Provincial de Moho</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/ejecutadas/putina_complejo.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Complejo Deportivo Putina">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Complejo Deportivo – Barrio Santiago Luján, Putina
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Putina, Puno – Perú</li>
                                            <li>📅 <strong>Periodo:</strong> 09/09/2016 al 28/02/2017 (180 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 767,135.50</li>
                                            <li>🛠️ <strong>Servicio:</strong> Creación del complejo deportivo</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Provincial de San Antonio de
                                                Putina</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                    <!-- Controles -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselEjecutadas"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-opacity-75 rounded-circle p-2 shadow"
                            style="background-color: #10058c;" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselEjecutadas"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-opacity-75 rounded-circle p-2 shadow"
                            style="background-color: #10058c;" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>


                    <div class="carousel-indicators"></div>

                </div>
            </div>
        </section>

        <!-- SUPERVISIÓN DE OBRA -->
        <section id="supervicion" class="py-5 bg-light">
            <div class="container">
                <h2 class="fw-bold text-center mb-5 text-uppercase" style="color: #10058c;">SUPERVISIÓN DE OBRA
                </h2>

                <div id="carouselSupervision" class="carousel slide" data-bs-ride="carousel"
                    data-carousel="auto-indicators">
                    <div class="carousel-inner rounded shadow-lg">

                        <div class="carousel-item active">
                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_ilo.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Ilo">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Renovación de redes de agua y alcantarillado, Ilo
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Ilo, Moquegua – Perú</li>
                                            <li>📅 <strong>Periodo:</strong> 09/02/2024 al 15/07/2024 (120 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 108,000.00</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de renovación de redes de
                                                distribución y alcantarillado</li>
                                            <li>🏛️ <strong>Cliente:</strong> Entidad Prestadora de Servicios de
                                                Saneamiento Ilo S.A.</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">


                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_santo_tomas.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Santo Tomás">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Ampliación de servicios de agua y saneamiento, Santo Tomás
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Santo Tomás, Chumbivilcas – Cusco</li>
                                            <li>📅 <strong>Periodo:</strong> 28/12/2023 al 26/04/2024 (150 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 123,749.10</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de ampliación de servicios de
                                                agua potable y disposición sanitaria</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Provincial de Chumbivilcas –
                                                Santo Tomás</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>




                        <div class="carousel-item">

                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_colquemarca.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Colquemarca">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Agua potable y disposición sanitaria, Colquemarca
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Colquemarca, Chumbivilcas – Cusco</li>
                                            <li>📅 <strong>Periodo:</strong> 22/12/2023 al 04/06/2024 (210 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 176,733.35</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de ampliación y mejora de
                                                servicios de saneamiento</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Distrital de Colquemarca
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="carousel-item">

                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_cotabambas.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Cotabambas">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Saneamiento integral en anexos, Cotabambas
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Cotabambas – Apurímac</li>
                                            <li>📅 <strong>Periodo:</strong> 18/12/2023 al 24/05/2024 (180 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 102,274.20</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de saneamiento básico
                                                integral en
                                                anexos rurales</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Distrital de Cotabambas</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_choncoyoc.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Choncoyoc">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Saneamiento básico en Choncoyoc, Cotabambas
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Choncoyoc, Cotabambas – Apurímac</li>
                                            <li>📅 <strong>Periodo:</strong> 18/12/2023 al 24/04/2024 (150 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 61,085.70</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de mejora y ampliación de
                                                servicios de saneamiento básico integral</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Distrital de Cotabambas</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_huamaniray.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Huamaniray">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Saneamiento básico en Huamaniray, Cotabambas
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Huamaniray, Cotabambas – Apurímac</li>
                                            <li>📅 <strong>Periodo:</strong> 07/12/2023 al 08/05/2024 (180 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 83,911.50</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de mejora y ampliación de
                                                servicios de saneamiento básico integral</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Distrital de Cotabambas</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_mara.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Mara">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Saneamiento básico en Collpapampa, Mara
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Collpapampa, Mara – Apurímac</li>
                                            <li>📅 <strong>Periodo:</strong> 15/11/2023 al 31/03/2024 (150 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 94,328.61</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de ampliación y mejoramiento
                                                de
                                                servicios de saneamiento básico</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Distrital de Mara</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">

                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_machaguay.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Machaguay">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Agua potable y saneamiento en Machaguay, Castilla
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Machaguay, Castilla – Arequipa</li>
                                            <li>📅 <strong>Periodo:</strong> 19/10/2023 al 20/06/2023 (270 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 348,000.00</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de agua potable,
                                                alcantarillado
                                                sanitario y PTAR</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Distrital de Machahuay</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">

                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_ananea.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Ananea">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Ampliación de servicios de agua y alcantarillado, Chuquine
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Chuquine, Ananea – Puno</li>
                                            <li>📅 <strong>Periodo:</strong> 10/10/2023 al 10/03/2024 (180 días)
                                            </li>
                                            <li>💰 <strong>Monto:</strong> S/ 64,935.00</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de ampliación de agua
                                                potable
                                                y
                                                alcantarillado</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Distrital de Ananea</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">

                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_crucero.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Crucero">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Ampliación de servicios de agua potable, Anansaya
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Anansaya, Crucero – Carabaya, Puno</li>
                                            <li>📅 <strong>Periodo:</strong> 27/12/2022 al 28/02/2023 (180 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 185,801.40</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de mejora y ampliación de
                                                servicios de agua potable y disposición sanitaria</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Distrital de Crucero</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="carousel-item">

                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_sibayo.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Sibayo">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Sistema de agua potable y alcantarillado, Sibayo
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Sibayo, Caylloma – Arequipa</li>
                                            <li>📅 <strong>Periodo:</strong> 28/09/2022 al 28/02/2023 (180 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 256,309.37</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de mejoramiento y ampliación
                                                del
                                                sistema de agua potable y alcantarillado</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Distrital de Sibayo</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_inapata.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Ñañapata, Santo Tomás">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Agua potable y alcantarillado en Ñañapata, Santo Tomás
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Nuevo Iñapata, Santo Tomás –
                                                Chumbivilcas, Cusco</li>
                                            <li>📅 <strong>Periodo:</strong> 08/08/2022 al 05/01/2023 (180 días)
                                            </li>
                                            <li>💰 <strong>Monto:</strong> S/ 54,672.30</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de obra – creación del
                                                servicio de agua potable y alcantarillado sanitario</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Provincial de
                                                Chumbivilcas – Santo Tomás</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="carousel-item">

                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_challhuahuacho.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Challhuahuacho">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Mejoramiento y ampliación de servicios de agua potable y
                                            saneamiento, Challhuahuacho
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Comunidades de Sudjuña, Challhuahuacho –
                                                Cotabambas, Apurímac</li>
                                            <li>📅 <strong>Periodo:</strong> 27/07/2022 al 28/02/2023 (180 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 73,897.00</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión del mejoramiento y ampliación
                                                del
                                                servicio de agua potable y saneamiento rural</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Distrital de Challhuahuacho
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_colquemarcaa.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Colquemarca">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Ampliación del sistema de agua potable y unidades básicas
                                            sanitarias, Colquemarca
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Anexo Armiri de la C.C. Charamuray,
                                                Colquemarca – Chumbivilcas, Cusco</li>
                                            <li>📅 <strong>Periodo:</strong> 20/07/2022 al 20/04/2023 (300 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 190,809.90</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de mejoramiento y ampliación
                                                del
                                                sistema de agua potable e instalación de unidades básicas sanitarias
                                            </li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Provincial de Chumbivilcas –
                                                Santo Tomás</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">

                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_challhuahuachoo.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Challhuahuacho">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Ampliación del servicio de agua potable y saneamiento rural,
                                            Challhuahuacho
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Comunidades de Suytuyo, Challhuahuacho –
                                                Cotabambas, Apurímac</li>
                                            <li>📅 <strong>Periodo:</strong> 04/10/2021 al 18/01/2022 (120 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 61,335.00</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de mejoramiento y ampliación
                                                del
                                                servicio de agua potable y saneamiento rural</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Distrital de Challhuahuacho
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">

                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_putina_punco.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Putina Punco">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Creación del servicio de agua potable y saneamiento, San Pedro
                                            de
                                            Putina Punco
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Sector San Benigno, San Pedro de Putina
                                                Punco
                                                – Puno</li>
                                            <li>📅 <strong>Periodo:</strong> 26/11/2020 al 26/04/2021 (180 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 125,132.24</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de la creación del servicio
                                                de
                                                agua potable y saneamiento básico</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Distrital de San Pedro de
                                                Putina
                                                Punco</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_curva_alegre.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Curva Alegre">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Creación del servicio de agua potable y saneamiento, Curva
                                            Alegre
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Centro poblado de Curva Alegre, San Pedro
                                                de
                                                Putina Punco – Puno</li>
                                            <li>📅 <strong>Periodo:</strong> 26/11/2020 al 26/04/2021 (180 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 110,539.92</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de la creación del servicio
                                                de
                                                agua potable y saneamiento básico</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Distrital de San Pedro de
                                                Putina
                                                Punco</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">

                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_ocoruro.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Huisapata, Ocoruro">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Mejoramiento del sistema de agua potable y disposición de
                                            excretas, Huisapata
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Comunidad de Huisapata, distrito de
                                                Ocoruro –
                                                Espinar, Cusco</li>
                                            <li>📅 <strong>Periodo:</strong> 30/09/2020 al 28/05/2021 (270 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 131,682.15</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de obra – sistema de agua
                                                potable
                                                y disposición de excretas</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Distrital de Ocoruro</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">

                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_capaso.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Capaso Rosario de Acomarca">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Mejoramiento y ampliación del sistema de agua potable, Rosario
                                            de
                                            Acomarca
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Comunidad de Rosario de Acomarca,
                                                distrito de
                                                Capaso – Puno</li>
                                            <li>📅 <strong>Periodo:</strong> 23/09/2019 al 28/01/2020 (150 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 83,931.30</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de obra – sistema de agua
                                                potable
                                            </li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Distrital de Capaso</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="carousel-item">

                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_putina_sanisidro.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Putina San Isidro">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Mejoramiento y ampliación de servicios de agua potable en San
                                            Isidro
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Centro poblado de San Isidro, distrito de
                                                Putina, provincia de San Antonio de Putina – Puno</li>
                                            <li>📅 <strong>Periodo:</strong> 18/09/2018 al 31/12/2018 (120 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 121,150.00</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de obra – sistema de agua
                                                potable
                                            </li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Provincial de San Antonio de
                                                Putina</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">

                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_ayaviri_pacobamba.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Ayaviri – Pacobamba Alto">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Instalación de sistema de agua potable y saneamiento en
                                            Pacobamba
                                            Alto
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Pacobamba Alto, distrito de Ayaviri,
                                                provincia de Melgar – Puno</li>
                                            <li>📅 <strong>Periodo:</strong> 07/06/2017 al 20/10/2017 (150 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 132,795.00</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de obra – sistema de agua
                                                potable
                                                y saneamiento</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Provincial de Melgar –
                                                Ayaviri
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">

                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_putina_zonacentro.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Putina – Zona Centro A">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Instalación de servicio de agua potable y disposición
                                            sanitaria en
                                            Putina
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Comunidades de la Zona Centro A, distrito
                                                de
                                                Putina, provincia de San Antonio de Putina – Puno</li>
                                            <li>📅 <strong>Periodo:</strong> 14/02/2017 al 27/04/2018 (120 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 398,000.00</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de obra – agua potable y
                                                disposición sanitaria</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Provincial de San Antonio de
                                                Putina</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">

                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_moho_sullca.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Moho – Sullca y sectores">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Mejoramiento del sistema de agua potable y letrinas en Sullca
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Centro poblado de Sullca y sus ocho
                                                sectores,
                                                distrito de Moho, provincia de Moho – Puno</li>
                                            <li>📅 <strong>Periodo:</strong> 07/12/2016 al 22/08/2017 (240 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 232,400.00</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de obra – agua potable,
                                                desagüe y
                                                letrinas sanitarias</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Provincial de Moho</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_yanahuaya.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Yanahuaya – Sandia – Puno">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Mejoramiento del sistema de agua potable y alcantarillado en
                                            Yanahuaya
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Localidad de Yanahuaya, distrito de
                                                Yanahuaya, provincia de Sandia – Puno</li>
                                            <li>📅 <strong>Periodo:</strong> 05/12/2016 al 01/12/2017 (360 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 251,075.00</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de obra – agua potable y
                                                alcantarillado</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Distrital de Yanahuaya</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">

                            <div class="row g-4 align-items-center" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Imagen -->
                                <div class="col-md-6">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('assets/img/supervision/supervision_putina_zonacentroo.png') }}"
                                            class="img-fluid w-100 shadow-sm"
                                            style="height: 360px; object-fit: cover; border-radius: 12px;"
                                            alt="Supervisión Putina Zona Centro – San Antonio de Putina – Puno">
                                    </div>
                                </div>

                                <!-- Información del proyecto -->
                                <div class="col-md-6">
                                    <div class="bg-white p-4 rounded shadow-sm border-start border-4"
                                        style="border-color: #10058c;">
                                        <h4 class="fw-bold mb-3" style="color: #10058c;">
                                            Supervisión – Instalación de servicios de agua potable y disposición de
                                            excretas
                                            en Putina
                                        </h4>
                                        <ul class="list-unstyled fs-5 mt-3">
                                            <li>📍 <strong>Ubicación:</strong> Comunidades de la zona centro B, distrito
                                                de
                                                Putina, provincia de San Antonio de Putina – Puno</li>
                                            <li>📅 <strong>Periodo:</strong> 29/10/2015 al 01/07/2016 (300 días)</li>
                                            <li>💰 <strong>Monto:</strong> S/ 240,885.43</li>
                                            <li>🛠️ <strong>Servicio:</strong> Supervisión de obra – agua potable y
                                                disposición de excretas</li>
                                            <li>🏛️ <strong>Cliente:</strong> Municipalidad Provincial de San Antonio de
                                                Putina</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>

                    <!-- Controles -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselSupervision"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-opacity-75 rounded-circle p-2 shadow"
                            style="background-color: #10058c;" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselSupervision"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-opacity-75 rounded-circle p-2 shadow"
                            style="background-color: #10058c;" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>


                    <div class="carousel-indicators"></div>



                </div>
            </div>
        </section>

        <!-- Sección de consultoría -->
        <section id="consultoria" class="section py-5 bg-light">
            <div class="container" data-aos="fade-up">

                <!-- Título principal -->
                <div class="text-center mb-5">

                    <h2 class="fw-bold text-center mb-5 text-uppercase" style="color: #10058c;">Consultoría
                        Especializada</h2>
                    <p class="mt-3 fs-5 text-muted">
                        En <strong>rsoto Ingeniería y Minería</strong>, ofrecemos servicios integrales de consultoría
                        para <strong>supervisión de obras</strong> y elaboración de <strong>expedientes
                            técnicos</strong>.
                        Garantizamos calidad, cumplimiento normativo y eficiencia en cada etapa del proyecto.
                    </p>
                </div>

                <!-- Botones de Tabs con color #10058c -->
                <div class="d-flex justify-content-center mb-4 gap-3">
                    <button class="btn rounded-pill px-4 py-2 fw-semibold shadow-sm active" id="btn-supervision"
                        onclick="mostrarSeccion('supervision'); activarBoton(this);"
                        style="background-color: #10058c; color: white; border: 2px solid #10058c;">
                        Supervisión
                    </button>

                    <button class="btn rounded-pill px-4 py-2 fw-semibold shadow-sm" id="btn-expedientes"
                        onclick="mostrarSeccion('expedientes'); activarBoton(this);"
                        style="color: #10058c; border: 2px solid #10058c; background-color: transparent;"
                        onmouseover="this.style.backgroundColor='#10058c'; this.style.color='white';"
                        onmouseout="if (!this.classList.contains('active')) { this.style.backgroundColor='transparent'; this.style.color='#10058c'; }">
                        Expedientes
                    </button>
                </div>
                <!-- Contenido Supervisión -->
                <div id="seccion-supervision">
                    <div class="row gy-4 align-items-center">
                        <div class="col-lg-6">
                            <img src="{{ asset('assets/img/consultoria/consultoria01.png') }}"
                                class="img-fluid rounded shadow" alt="Supervisión de obras">
                        </div>
                        <div class="col-lg-6">
                            <h3 class="text-dark fw-bold mb-3">Supervisión de Obras</h3>
                            <p class="text-muted">Supervisamos con rigurosidad técnica para asegurar el éxito del
                                proyecto.</p>
                            <ul class="list-unstyled fs-5">
                                <li>✅ Verificación del expediente técnico</li>
                                <li>✅ Control de calidad de materiales</li>
                                <li>✅ Monitoreo de avances y cronograma</li>
                                <li>✅ Seguridad y normativa en obra</li>
                                <li>✅ Informes técnicos y seguimiento</li>
                                <li>✅ Coordinación con entidades y contratistas</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Contenido Expedientes -->
                <div id="seccion-expedientes" style="display: none;">
                    <div class="row gy-4 align-items-center">
                        <div class="col-lg-6">
                            <img src="{{ asset('assets/img/consultoria/consultoria01.png') }}"
                                class="img-fluid rounded shadow" alt="Expedientes técnicos">
                        </div>
                        <div class="col-lg-6">
                            <h3 class="text-dark fw-bold mb-3">Expedientes Técnicos Precisos</h3>
                            <p class="text-muted">Desarrollamos documentación técnica normada, precisa y lista para
                                ejecución.</p>
                            <ul class="list-unstyled fs-5">
                                <li>📌 Análisis y diagnóstico del entorno</li>
                                <li>📌 Diseño arquitectónico y de ingeniería</li>
                                <li>📌 Cálculos estructurales detallados</li>
                                <li>📌 Presupuesto y metrados técnicos</li>
                                <li>📌 Cronograma valorizado</li>
                                <li>📌 Cumplimiento normativo vigente</li>
                                <li>📌 Expediente listo para aprobación</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section>





        <section id="servicios" class="section py-5 bg-light">
            <div class="container">
                <!-- Título -->
                <div class="text-center mb-4">
                    <h2 class="fw-bold text-center mb-5 text-uppercase" style="color: #10058c;">
                        Prestación de Servicios
                    </h2>
                    <p class="fs-5 text-dark mt-2 mb-0">
                        Brindamos equipos confiables y operativos para cada fase del proyecto, con soporte técnico y
                        puntualidad garantizada.
                    </p>
                </div>

                <!-- Grid de servicios -->
                <div class="row g-4">
                    <!-- CAMIONETAS -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 shadow h-100">
                            <img src="{{ asset('assets/img/servicios/pickup2022.png') }}" class="card-img-top"
                                alt="Camioneta Pickup 2021">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><i class="bi bi-truck"></i> Camioneta Pickup</h5>
                                <ul class="list-unstyled small">
                                    <li><strong>Marca:</strong> Toyota</li>
                                    <li><strong>Modelo:</strong> Hilux</li>
                                    <li><strong>Año:</strong> 2021</li>
                                    <li><strong>Unidades:</strong> 4</li>
                                </ul>
                                <a href="https://api.whatsapp.com/send?phone=51943560171&text=Hola%2C%20estoy%20interesado%20en%20adquirir%3A%0ACamioneta%20Pickup%0AMarca%3A%20Toyota%0AModelo%3A%20Hilux%0AA%C3%B1o%3A%202021%0AUnidades%3A%204"
                                    target="_blank" class="btn btn-outline-primary rounded-pill btn-sm px-4 mt-2">
                                    <i class="bi bi-whatsapp"></i> Adquirir
                                </a>


                            </div>
                        </div>
                    </div>

                    <!-- REPETICIÓN CON DIFERENTES AÑOS Y UNIDADES -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 shadow h-100">
                            <img src="{{ asset('assets/img/servicios/pickup2016.png') }}" class="card-img-top"
                                alt="Camioneta Pickup 2016">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><i class="bi bi-truck"></i> Camioneta Pickup</h5>
                                <ul class="list-unstyled small">
                                    <li><strong>Marca:</strong> Toyota</li>
                                    <li><strong>Modelo:</strong> Hilux</li>
                                    <li><strong>Año:</strong> 2016</li>
                                    <li><strong>Unidades:</strong> 5</li>
                                </ul>
                                <a href="https://api.whatsapp.com/send?phone=51943560171&text=Hola%2C%20estoy%20interesado%20en%20adquirir%3A%0ACamioneta%20Pickup%0AMarca%3A%20Toyota%0AModelo%3A%20Hilux%0AA%C3%B1o%3A%202016%0AUnidades%3A%205"
                                    target="_blank" rel="noopener noreferrer"
                                    class="btn btn-outline-primary rounded-pill btn-sm px-4 mt-2">
                                    <i class="bi bi-whatsapp"></i> Adquirir
                                </a>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 shadow h-100">
                            <img src="{{ asset('assets/img/servicios/pickup2014.png') }}" class="card-img-top"
                                alt="Camioneta Pickup 2014">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><i class="bi bi-truck"></i> Camioneta Pickup</h5>
                                <ul class="list-unstyled small">
                                    <li><strong>Marca:</strong> Toyota</li>
                                    <li><strong>Modelo:</strong> Hilux</li>
                                    <li><strong>Año:</strong> 2014</li>
                                    <li><strong>Unidades:</strong> 3</li>
                                </ul>
                                <a href="https://api.whatsapp.com/send?phone=51943560171&text=Hola%2C%20estoy%20interesado%20en%20adquirir%3A%0ACamioneta%20Pickup%0AMarca%3A%20Toyota%0AModelo%3A%20Hilux%0AA%C3%B1o%3A%202014%0AUnidades%3A%203"
                                    target="_blank" rel="noopener noreferrer"
                                    class="btn btn-outline-primary rounded-pill btn-sm px-4 mt-2">
                                    <i class="bi bi-whatsapp"></i> Adquirir
                                </a>


                            </div>
                        </div>
                    </div>

                    <!-- OMNIBUS -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 shadow h-100">
                            <img src="{{ asset('assets/img/servicios/omnibus.png') }}" class="card-img-top"
                                alt="Ómnibus Mercedes">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><i class="bi bi-bus-front"></i> Ómnibus</h5>
                                <ul class="list-unstyled small">
                                    <li><strong>Marca:</strong> Mercedes-Benz</li>
                                    <li><strong>Modelo:</strong> 1318</li>
                                    <li><strong>Año:</strong> 2016</li>
                                    <li><strong>Unidades:</strong> 5</li>
                                </ul>
                                <a href="https://api.whatsapp.com/send?phone=51943560171&text=Hola%2C%20estoy%20interesado%20en%20adquirir%3A%0A%C3%93mnibus%0AMarca%3A%20Mercedes-Benz%0AModelo%3A%201318%0AA%C3%B1o%3A%202016%0AUnidades%3A%205"
                                    target="_blank" rel="noopener noreferrer"
                                    class="btn btn-outline-primary rounded-pill btn-sm px-4 mt-2">
                                    <i class="bi bi-whatsapp"></i> Adquirir
                                </a>


                            </div>
                        </div>
                    </div>

                    <!-- CISTERNA -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 shadow h-100">
                            <img src="{{ asset('assets/img/servicios/cisterna.png') }}" class="card-img-top"
                                alt="Cisterna de Agua">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><i class="bi bi-droplet-half"></i> Cisterna de Agua
                                </h5>
                                <ul class="list-unstyled small">
                                    <li><strong>Marca:</strong> Hino - Volvo</li>
                                    <li><strong>Modelo:</strong> FM 500</li>
                                    <li><strong>Año:</strong> 2016</li>
                                    <li><strong>Unidades:</strong> 2</li>
                                </ul>
                                <a href="https://api.whatsapp.com/send?phone=51943560171&text=Hola%2C%20estoy%20interesado%20en%20adquirir%3A%0ACisterna%20de%20Agua%0AMarca%3A%20Hino%20-%20Volvo%0AModelo%3A%20FM%20500%0AA%C3%B1o%3A%202016%0AUnidades%3A%202"
                                    target="_blank" rel="noopener noreferrer"
                                    class="btn btn-outline-primary rounded-pill btn-sm px-4 mt-2">
                                    <i class="bi bi-whatsapp"></i> Adquirir
                                </a>


                            </div>
                        </div>
                    </div>

                    <!-- EXCAVADORAS -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 shadow h-100">
                            <img src="{{ asset('assets/img/servicios/excavadora_cat330.png') }}" class="card-img-top"
                                alt="Excavadora CAT 330">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><i class="bi bi-truck-front-fill"></i> Excavadora
                                    Hidráulica</h5>
                                <ul class="list-unstyled small">
                                    <li><strong>Marca:</strong> Caterpillar</li>
                                    <li><strong>Modelo:</strong> CAT 330 D2 L</li>
                                    <li><strong>Año:</strong> 2017</li>
                                    <li><strong>Unidades:</strong> 2</li>
                                </ul>
                                <a href="https://api.whatsapp.com/send?phone=51943560171&text=Hola%2C%20estoy%20interesado%20en%20adquirir%3A%0AExcavadora%20Hidr%C3%A1ulica%0AMarca%3A%20Caterpillar%0AModelo%3A%20CAT%20330%20D2%20L%0AA%C3%B1o%3A%202017%0AUnidades%3A%202"
                                    target="_blank" rel="noopener noreferrer"
                                    class="btn btn-outline-primary rounded-pill btn-sm px-4 mt-2">
                                    <i class="bi bi-whatsapp"></i> Adquirir
                                </a>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 shadow h-100">
                            <img src="{{ asset('assets/img/servicios/excavadora_cat325.png') }}" class="card-img-top"
                                alt="Excavadora CAT 325">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><i class="bi bi-truck-front-fill"></i> Excavadora
                                    Hidráulica</h5>
                                <ul class="list-unstyled small">
                                    <li><strong>Marca:</strong> Caterpillar</li>
                                    <li><strong>Modelo:</strong> CAT 325 DL</li>
                                    <li><strong>Año:</strong> 2008</li>
                                    <li><strong>Unidades:</strong> 2</li>
                                </ul>
                                <a href="https://api.whatsapp.com/send?phone=51943560171&text=Hola%2C%20estoy%20interesado%20en%20adquirir%3A%0AExcavadora%20Hidr%C3%A1ulica%0AMarca%3A%20Caterpillar%0AModelo%3A%20CAT%20325%20DL%0AA%C3%B1o%3A%202008%0AUnidades%3A%202"
                                    target="_blank" rel="noopener noreferrer"
                                    class="btn btn-outline-primary rounded-pill btn-sm px-4 mt-2">
                                    <i class="bi bi-whatsapp"></i> Adquirir
                                </a>

                            </div>
                        </div>
                    </div>

                    <!-- RETROEXCAVADORAS -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 shadow h-100">
                            <img src="{{ asset('assets/img/servicios/retroexcavadora.png') }}" class="card-img-top"
                                alt="Retroexcavadora">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><i class="bi bi-tools"></i> Retroexcavadora</h5>
                                <ul class="list-unstyled small">
                                    <li><strong>Marca:</strong> Caterpillar</li>
                                    <li><strong>Modelo:</strong> 42 OF 4X4</li>
                                    <li><strong>Año:</strong> 2017</li>
                                    <li><strong>Unidades:</strong> 4</li>
                                </ul>
                                <a href="https://api.whatsapp.com/send?phone=51987654321&text=Hola%2C%20estoy%20interesado%20en%20adquirir%3A%0ARetroexcavadora%0AMarca%3A%20Caterpillar%0AModelo%3A%2042%20OF%204X4%0AA%C3%B1o%3A%202017%0AUnidades%3A%204"
                                    target="_blank" rel="noopener noreferrer"
                                    class="btn btn-outline-primary rounded-pill btn-sm px-4 mt-2">
                                    <i class="bi bi-whatsapp"></i> Adquirir
                                </a>


                            </div>
                        </div>
                    </div>

                    <!-- CAMIÓN VOLQUETE -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 shadow h-100">
                            <img src="{{ asset('assets/img/servicios/volquete.png') }}" class="card-img-top"
                                alt="Camión Volquete">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><i class="bi bi-truck"></i> Camión Volquete</h5>
                                <ul class="list-unstyled small">
                                    <li><strong>Marca:</strong> Volvo</li>
                                    <li><strong>Modelo:</strong> FM 6X4R</li>
                                    <li><strong>Año:</strong> 2015</li>
                                    <li><strong>Unidades:</strong> 5</li>
                                </ul>
                                <a href="https://api.whatsapp.com/send?phone=51987654321&text=Hola%2C%20estoy%20interesado%20en%20adquirir%3A%0ACami%C3%B3n%20Volquete%0AMarca%3A%20Volvo%0AModelo%3A%20FM%206X4R%0AA%C3%B1o%3A%202015%0AUnidades%3A%205"
                                    target="_blank" rel="noopener noreferrer"
                                    class="btn btn-outline-primary rounded-pill btn-sm px-4 mt-2">
                                    <i class="bi bi-whatsapp"></i> Adquirir
                                </a>


                            </div>
                        </div>
                    </div>

                    <!-- MINICARGADOR -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 shadow h-100">
                            <img src="{{ asset('assets/img/servicios/minicargador.png') }}" class="card-img-top"
                                alt="Minicargador">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><i class="bi bi-truck-front-fill"></i> Minicargador
                                </h5>
                                <ul class="list-unstyled small">
                                    <li><strong>Marca:</strong> Caterpillar</li>
                                    <li><strong>Modelo:</strong> 226B</li>
                                    <li><strong>Año:</strong> 2015</li>
                                    <li><strong>Unidades:</strong> 1</li>
                                </ul>
                                <a href="https://api.whatsapp.com/send?phone=51943560171&text=Hola%2C%20estoy%20interesado%20en%20adquirir%3A%0AMinicargador%0AMarca%3A%20Caterpillar%0AModelo%3A%20226B%0AA%C3%B1o%3A%202015%0AUnidades%3A%201"
                                    target="_blank" rel="noopener noreferrer"
                                    class="btn btn-outline-primary rounded-pill btn-sm px-4 mt-2">
                                    <i class="bi bi-whatsapp"></i> Adquirir
                                </a>


                            </div>
                        </div>
                    </div>

                    <!-- COMPACTADORES -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 shadow h-100">
                            <img src="{{ asset('assets/img/servicios/compactador_rodillo.png') }}"
                                class="card-img-top" alt="Compactador Rodillo">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><i class="bi bi-layers-half"></i> Compactador Rodillo
                                </h5>
                                <ul class="list-unstyled small">
                                    <li><strong>Marca:</strong> Wacker</li>
                                    <li><strong>Modelo:</strong> DR7H</li>
                                    <li><strong>Año:</strong> 2016</li>
                                    <li><strong>Unidades:</strong> 2</li>
                                </ul>
                                <a href="https://api.whatsapp.com/send?phone=51943560171&text=Hola%2C%20estoy%20interesado%20en%20adquirir%3A%0ACompactador%20Rodillo%0AMarca%3A%20Wacker%0AModelo%3A%20DR7H%0AA%C3%B1o%3A%202016%0AUnidades%3A%202"
                                    target="_blank" rel="noopener noreferrer"
                                    class="btn btn-outline-primary rounded-pill btn-sm px-4 mt-2">
                                    <i class="bi bi-whatsapp"></i> Adquirir
                                </a>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 shadow h-100">
                            <img src="{{ asset('assets/img/servicios/compactador_plancha.png') }}"
                                class="card-img-top" alt="Compactador Plancha">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><i class="bi bi-layers-half"></i> Compactador Plancha
                                </h5>
                                <ul class="list-unstyled small">
                                    <li><strong>Marca:</strong> Wacker</li>
                                    <li><strong>Modelo:</strong> DPU 3050H</li>
                                    <li><strong>Año:</strong> 2016</li>
                                    <li><strong>Unidades:</strong> 4</li>
                                </ul>
                                <a href="https://api.whatsapp.com/send?phone=51943560171&text=Hola%2C%20estoy%20interesado%20en%20adquirir%3A%0ACompactador%20Plancha%0AMarca%3A%20Wacker%0AModelo%3A%20DPU%203050H%0AA%C3%B1o%3A%202016%0AUnidades%3A%204"
                                    target="_blank" rel="noopener noreferrer"
                                    class="btn btn-outline-primary rounded-pill btn-sm px-4 mt-2">
                                    <i class="bi bi-whatsapp"></i> Adquirir
                                </a>


                            </div>
                        </div>
                    </div>

                    <!-- VIBRO APISONADOR -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 shadow h-100">
                            <img src="{{ asset('assets/img/servicios/vibro_apizonador.png') }}"
                                class="card-img-top" alt="Vibro Apizonador">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><i class="bi bi-layers-fill"></i> Vibro Apizonador
                                </h5>
                                <ul class="list-unstyled small">
                                    <li><strong>Marca:</strong> Wacker</li>
                                    <li><strong>Modelo:</strong> BS 60</li>
                                    <li><strong>Año:</strong> 2016</li>
                                    <li><strong>Unidades:</strong> 3</li>
                                </ul>
                                <a href="https://api.whatsapp.com/send?phone=51943560171&text=Hola%2C%20estoy%20interesado%20en%20adquirir%3A%0AVibro%20Apizonador%0AMarca%3A%20Wacker%0AModelo%3A%20BS%2060%0AA%C3%B1o%3A%202016%0AUnidades%3A%203"
                                    target="_blank" rel="noopener noreferrer"
                                    class="btn btn-outline-primary rounded-pill btn-sm px-4 mt-2">
                                    <i class="bi bi-whatsapp"></i> Adquirir
                                </a>

                            </div>
                        </div>
                    </div>

                    <!-- TORRE DE ILUMINACIÓN -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 shadow h-100">
                            <img src="{{ asset('assets/img/servicios/torre_iluminacion.png') }}"
                                class="card-img-top" alt="Torre de Iluminación">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><i class="bi bi-lightbulb"></i> Torre de Iluminación
                                </h5>
                                <ul class="list-unstyled small">
                                    <li><strong>Marca:</strong> Terex</li>
                                    <li><strong>Modelo:</strong> RL4060</li>
                                    <li><strong>Año:</strong> 2015</li>
                                    <li><strong>Unidades:</strong> 4</li>
                                </ul>
                                <a href="https://api.whatsapp.com/send?phone=51943560171&text=Hola%2C%20estoy%20interesado%20en%20adquirir%3A%0ATorre%20de%20Iluminaci%C3%B3n%0AMarca%3A%20Terex%0AModelo%3A%20RL4060%0AA%C3%B1o%3A%202015%0AUnidades%3A%204"
                                    target="_blank" rel="noopener noreferrer"
                                    class="btn btn-outline-primary rounded-pill btn-sm px-4 mt-2">
                                    <i class="bi bi-whatsapp"></i> Adquirir
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
    <footer id="footer" class="footer dark-background py-4">
        <div class="container text-center text-white">

            <!-- Logo o nombre -->
            <h5 class="fw-bold mb-3 text-uppercase">R&SOTO Contratistas Generales S.R.L</h5>

            <!-- Dirección y contacto -->
            <p class="small text-light mb-1">Juliaca, Puno - Perú</p>
            <p class="small text-light mb-1">Teléfono: +51 900 000 000</p>
            <p class="small text-light mb-3">
                Email: <a href="mailto:contacto@rsoto.pe"
                    class="text-white text-decoration-none">contacto@rsoto.pe</a>
            </p>

            <!-- Redes sociales -->
            <div class="d-flex justify-content-center gap-3 mb-3">
                <a href="#" class="text-white fs-4"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white fs-4"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-white fs-4"><i class="bi bi-linkedin"></i></a>
            </div>

            <!-- Copyright -->
            <p class="small text-white-50 mb-0">© <span id="year"></span> R&SOTO Contratistas Generales S.R.L.
                Todos los
                derechos reservados.</p>

        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();

        function activarBoton(boton) {
            const botones = document.querySelectorAll('#btn-supervision, #btn-expedientes');

            botones.forEach(b => {
                b.classList.remove('active');
                b.style.backgroundColor = 'transparent';
                b.style.color = '#10058c';
            });

            boton.classList.add('active');
            boton.style.backgroundColor = '#10058c';
            boton.style.color = 'white';
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const carousels = document.querySelectorAll('[data-carousel="auto-indicators"]');

            carousels.forEach(carousel => {
                const items = carousel.querySelectorAll('.carousel-item');
                const indicatorsContainer = carousel.querySelector('.carousel-indicators');

                items.forEach((_, index) => {
                    const button = document.createElement('button');
                    button.type = 'button';
                    button.setAttribute('data-bs-target', `#${carousel.id}`);
                    button.setAttribute('data-bs-slide-to', index);
                    button.setAttribute('aria-label', `Slide ${index + 1}`);
                    if (index === 0) button.classList.add('active');
                    indicatorsContainer.appendChild(button);
                });
            });
        });
    </script>



    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
