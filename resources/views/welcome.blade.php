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

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">Grupo Soto</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Inicio</a></li>

                    <!--<li><a href="#about">R&SOTO</a></li>
          <li><a href="#features">JASOVI </a></li>
          <li><a href="#gallery">Proyectos</a></li>-->
                    <li><a href="#certificaciones">Certificaciones</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                    <li class="dropdown"><a href="#"><span>Empresas</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ route('rsoto') }}">R&SOTO</a></li>
                            <li><a href="{{ route('jasovi') }}">JASOVI</a></li>
                        </ul>
                    </li>
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

                    <!-- Carrusel de imágenes -->
                    <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
                        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                            data-bs-interval="5000">
                            <div class="carousel-inner">

                                <!-- Imagen 1 -->
                                <div class="carousel-item active">
                                    <img src="assets/img/home/imagen1.png"
                                        class="d-block w-100 img-fluid rounded-lg shadow" alt="Imagen 1"
                                        style="object-fit: cover; height: 500px;">
                                </div>

                                <!-- Imagen 2 -->
                                <div class="carousel-item">
                                    <img src="assets/img/home/imagen2.png"
                                        class="d-block w-100 img-fluid rounded-lg shadow" alt="Imagen 2"
                                        style="object-fit: cover; height: 500px;">
                                </div>

                                <!-- Imagen 3 -->
                                <div class="carousel-item">
                                    <img src="assets/img/home/imagen3.png"
                                        class="d-block w-100 img-fluid rounded-lg shadow" alt="Imagen 3"
                                        style="object-fit: cover; height: 500px;">
                                </div>

                            </div>

                            <!-- Controles del carrusel -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel"
                                data-bs-slide="prev" aria-label="Slide anterior">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel"
                                data-bs-slide="next" aria-label="Slide siguiente">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </button>

                            <!-- Indicadores -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                        </div>

                    </div>

                    <!-- Texto principal -->
                    <div class="col-lg-6 d-flex flex-column justify-content-center text-white" data-aos="fade-in">
                        <h1>Impulsando grandes proyectos con <span>Grupo Soto</span></h1>
                        <p>R.SOTO y JASOVI, unidos en excelencia e innovación para ofrecer soluciones integrales en
                            ingeniería, construcción y minería.</p>
                        <div class="d-flex">
                            <a href="#about" class="btn-get-started">Conócenos</a>
                            <a href="https://www.youtube.com/watch?v=TULrF1zWzcs"
                                class="glightbox btn-watch-video d-flex align-items-center">
                                <i class="bi bi-play-circle"></i><span>Ver Video</span>
                            </a>
                        </div>
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
            <section id="premio-2023" class="py-5">
                <div class="container" data-aos="fade-up">
                    <div class="text-center mb-5">
                        <h2 class="fw-bold display-4 text-dark" style="letter-spacing: -0.5px;">🏆 Premio Empresa
                            Peruana del Año 2023</h2>
                        <p class="lead text-muted">Un reconocimiento nacional a nuestra excelencia y compromiso
                            empresarial.</p>
                    </div>

                    <div class="row align-items-center justify-content-center">
                        <!-- Imagen del premio -->
                        <div class="col-md-5 text-center mb-4 mb-md-0">
                            <div class="p-3 bg-white shadow rounded-4 border" style="border-color: #10058c;">
                                <img src="{{ asset('assets/img/premios/premio2023.png') }}"
                                    alt="Premio Empresa Peruana del Año 2023" class="img-fluid"
                                    style="max-height: 220px;">
                            </div>
                        </div>

                        <!-- Texto destacado -->
                        <div class="col-md-6">
                            <div class="bg-white shadow-sm p-4 rounded-4 border-start border-5"
                                style="border-left-color: #10058c;">
                                <h4 class="fw-bold mb-3" style="color: #10058c;">Orgullosamente reconocidos</h4>
                                <p class="mb-3 text-dark">
                                    Nuestra empresa ha sido galardonada con el <strong>Premio Empresa Peruana del Año
                                        2023</strong>,
                                    como reconocimiento al liderazgo, la calidad y el impacto en el sector.
                                </p>
                                <p class="text-muted">
                                    Este premio nos impulsa a continuar brindando soluciones con profesionalismo, ética
                                    y excelencia operativa.
                                </p>
                                <a href="#contacto" class="btn mt-3"
                                    style="background-color: #10058c; color: white; border-radius: 8px;">Contáctanos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>





        <section id="certificaciones">
            <div class="container" data-aos="fade-up">
                <div class="text-center mb-5">
                    <h2 class="fw-bold display-4 text-dark" style="letter-spacing: -0.5px;">Certificaciones Internacionales
                    </h2>
                    <p class="text-muted lead">Respaldo de excelencia en gestión, seguridad, sostenibilidad y ética
                        empresarial.</p>
                </div>

                <div class="row justify-content-center gy-4 gx-4">
                    <!-- CERTIFICADO ITEM -->
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="cert-card shadow-sm text-center p-3 rounded h-100">
                            <div class="cert-icon mb-3">
                                <img src="assets/img/certificaciones/certificacion1.png" class="img-fluid"
                                    alt="ISO 9001">
                            </div>
                            <h6 class="fw-bold mb-1">ISO 9001</h6>
                            <small class="text-muted">Gestión de calidad</small>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="cert-card shadow-sm text-center p-3 rounded h-100">
                            <div class="cert-icon mb-3">
                                <img src="assets/img/certificaciones/certificacion2.png" class="img-fluid"
                                    alt="ISO 37001">
                            </div>
                            <h6 class="fw-bold mb-1">ISO 37001</h6>
                            <small class="text-muted">Gestión antisoborno</small>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="cert-card shadow-sm text-center p-3 rounded h-100">
                            <div class="cert-icon mb-3">
                                <img src="assets/img/certificaciones/certificacion3.png" class="img-fluid"
                                    alt="ISO 45001">
                            </div>
                            <h6 class="fw-bold mb-1">ISO 45001</h6>
                            <small class="text-muted">Seguridad ocupacional</small>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="cert-card shadow-sm text-center p-3 rounded h-100">
                            <div class="cert-icon mb-3">
                                <img src="assets/img/certificaciones/certificacion4.png" class="img-fluid"
                                    alt="ISO 50001">
                            </div>
                            <h6 class="fw-bold mb-1">ISO 50001</h6>
                            <small class="text-muted">Gestión energética</small>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="cert-card shadow-sm text-center p-3 rounded h-100">
                            <div class="cert-icon mb-3">
                                <img src="assets/img/certificaciones/certificacion5.png" class="img-fluid"
                                    alt="ISO 14001">
                            </div>
                            <h6 class="fw-bold mb-1">ISO 14001</h6>
                            <small class="text-muted">Gestión ambiental</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- Sección de logos de empresas -->
        <section id="logos" class="logos section">
            <div class="container" data-aos="fade-up">
                <div class="text-center mb-4">
                    <h2 class="fw-bold display-4 text-dark" style="letter-spacing: -0.5px;">Nuestras Empresas</h2>
                </div>

                <div class="row justify-content-center g-4">
                    <!-- Empresa R&SOTO -->
                    <div class="col-10 col-sm-6 col-md-4 col-lg-3">
                        <a href="{{ route('rsoto') }}" class="text-decoration-none">
                            <div class="empresa-card">
                                <img src="{{ asset('assets/img/logos/rsoto.png') }}" alt="Logo de R&Soto"
                                    loading="lazy">
                                <h5>R&Soto</h5>
                            </div>
                        </a>
                    </div>

                    <!-- Empresa JASOVI -->
                    <div class="col-10 col-sm-6 col-md-4 col-lg-3">
                        <a href="{{ route('jasovi') }}" class="text-decoration-none">
                            <div class="empresa-card">
                                <img src="{{ asset('assets/img/logos/jasovi.png') }}" alt="Logo de Jasovi"
                                    loading="lazy">
                                <h5>Jasovi</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>






            <!-- Sección de contacto -->
            <section id="contacto" class="contact section  py-5">
                <div class="container" data-aos="fade-up">
                    <div class="text-center mb-5">
                        <h2 class="fw-bold display-4 text-dark" style="letter-spacing: -0.5px;">Contáctanos</h2>
                        <p class="text-muted lead">Estamos disponibles para ayudarte en Arequipa, Puno y Cusco.</p>
                    </div>

                    <div class="row gy-4 mb-5">
                        <!-- Empresa R&SOTO -->
                        <div class="col-md-6">
                            <div class="card shadow-sm h-100">
                                <div class="card-body">
                                    <h4 class="fw-bold mb-3">R&SOTO CONTRATISTAS GENERALES S.R.L.</h4>
                                    <p><strong>Dirección:</strong> Asoc. Viv. Unión Cahuaya Rosaspata ZN 1 MZ K LT 1,
                                        Paucarpata - Arequipa</p>
                                    <p><strong>Teléfono:</strong> <a href="tel:986739750">986 739 750</a></p>
                                    <p><strong>Email:</strong> <a
                                            href="mailto:r.soto.cg@gmail.com">r.soto.cg@gmail.com</a>
                                    </p>
                                </div>
                                <div class="map-responsive">
                                    <iframe
                                        src="https://www.google.com/maps?q=Asoc.+Viv.+Unión+Cahuaya+Rosaspata+Paucarpata+Arequipa&output=embed"
                                        width="100%" height="200" style="border:0;" allowfullscreen
                                        loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>

                        <!-- Empresa JASOVI -->
                        <div class="col-md-6">
                            <div class="card shadow-sm h-100">
                                <div class="card-body">
                                    <h4 class="fw-bold mb-3">JASOVI INGENIERÍA</h4>
                                    <p><strong>Dirección:</strong> Jr. Ingeniería 123, Cusco</p>
                                    <p><strong>Teléfono:</strong> <a href="tel:987654321">987 654 321</a></p>
                                    <p><strong>Email:</strong> <a
                                            href="mailto:jasovi@ingenieria.com">jasovi@ingenieria.com</a></p>
                                </div>
                                <div class="map-responsive">
                                    <iframe src="https://www.google.com/maps?q=Cusco+Peru&output=embed" width="100%"
                                        height="200" style="border:0;" allowfullscreen loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Formulario de WhatsApp -->
                    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-8">
                            <div class="card shadow-sm p-4" data-aos="zoom-in" data-aos-delay="200">
                                <h5 class="fw-bold mb-4 text-center" data-aos="fade-down" data-aos-delay="300">
                                    Escríbenos un mensaje</h5>

                                <form id="formContacto" onsubmit="enviarPorWhatsApp(); return false;">
                                    <div class="row">
                                        <div class="col-md-6 mb-3" data-aos="fade-right" data-aos-delay="400">
                                            <label for="nombre" class="form-label">Nombre completo</label>
                                            <input type="text" id="nombre" class="form-control"
                                                placeholder="Ej. Juan Pérez" required>
                                        </div>
                                        <div class="col-md-6 mb-3" data-aos="fade-left" data-aos-delay="500">
                                            <label for="email" class="form-label">Correo electrónico</label>
                                            <input type="email" id="email" class="form-control"
                                                placeholder="Ej. ejemplo@correo.com" required>
                                        </div>
                                    </div>

                                    <div class="mb-3" data-aos="fade-up" data-aos-delay="600">
                                        <label for="mensaje" class="form-label">Mensaje</label>
                                        <textarea id="mensaje" class="form-control" rows="4" placeholder="Escribe tu mensaje aquí..." required></textarea>
                                    </div>

                                    <div class="text-center" data-aos="zoom-in-up" data-aos-delay="700">
                                        <button type="submit" class="btn btn-success btn-lg px-5">
                                            <i class="bi bi-whatsapp me-2"></i>Enviar por WhatsApp
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!-- Estilo para mapa responsive -->
            <style>
                .map-responsive {
                    overflow: hidden;
                    padding-bottom: 56.25%;
                    position: relative;
                    height: 0;
                }

                .map-responsive iframe {
                    left: 0;
                    top: 0;
                    height: 100%;
                    width: 100%;
                    position: absolute;
                }
            </style>

            <!-- Script WhatsApp -->
            <script>
                function enviarPorWhatsApp() {
                    const nombre = document.getElementById("nombre").value.trim();
                    const email = document.getElementById("email").value.trim();
                    const mensaje = document.getElementById("mensaje").value.trim();

                    if (!nombre || !email || !mensaje) {
                        alert("Por favor completa todos los campos.");
                        return;
                    }

                    const numeroWhatsApp = "51943560171"; // Cambia por el número real
                    const texto = `📬 NUEVO CONTACTO WEB\n\n👤 Nombre: ${nombre}\n📧 Email: ${email}\n💬 Mensaje:\n${mensaje}`;
                    const url = `https://wa.me/${numeroWhatsApp}?text=${encodeURIComponent(texto)}`;
                    window.open(url, '_blank');
                }
            </script>







    </main>
    <footer id="footer" class="footer dark-background py-4" style="background-color: #10058c;">
        <div class="container">
            <div class="row gy-4 justify-content-between align-items-start">

                <!-- Información corporativa -->
                <div class="col-md-8 text-white">
                    <h6 class="fw-bold text-uppercase mb-2">Grupo Soto</h6>
                    <p class="text-white-50 small mb-2">
                        <i class="bi bi-buildings text-warning me-2"></i>
                        <strong>R&Soto Contratistas Generales</strong> y <strong>JASOVI Ingeniería</strong>
                    </p>
                    <p class="text-white-50 small mb-2">
                        <i class="bi bi-geo-alt-fill text-warning me-2"></i>
                        Arequipa, Puno y Cusco – Perú
                    </p>
                    <p class="text-white-50 small mb-0">
                        <i class="bi bi-whatsapp text-success me-2"></i>
                        <a href="https://wa.me/51900000000" target="_blank"
                            class="text-white text-decoration-none">+51 900 000 000</a>
                    </p>
                </div>

                <!-- Redes sociales -->
                <div class="col-md-4 text-md-end text-center text-white">
                    <h6 class="text-uppercase fw-semibold mb-3">Síguenos</h6>
                    <div class="d-flex justify-content-md-end justify-content-center gap-3">
                        <a href="#" class="text-white fs-5 hover-icon"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white fs-5 hover-icon"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white fs-5 hover-icon"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>

            <hr class="text-white-50 my-3">

            <!-- Créditos -->
            <div class="text-center text-white-50 small">
                © <span id="year"></span> <strong>Grupo Soto</strong> — Todos los derechos reservados.
            </div>
        </div>
    </footer>

    <style>
        .hover-icon:hover {
            color: #ffc107 !important;
            /* Amarillo */
            transition: color 0.3s ease;
        }
    </style>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
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
