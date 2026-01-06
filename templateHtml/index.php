<?php
$pageTitle = "GEPETROL SEGUROS | Cotización de pólizas";
$pageDesc  = "Cotiza tu póliza de seguros de forma rápida y segura. Productos para particulares y empresas.";
// $pageUrl = "https://gepetrol-seguros.com/"; // opcional
// $pageImg = "assets/img/og-cover.png";       // opcional
?>
<!doctype html>
<html lang="es">

<head>
    <?php include __DIR__ . "/partials/head.php"; ?>
</head>

<body>

    <?php include __DIR__ . "/partials/topbar.php"; ?>
    <?php include __DIR__ . "/partials/header.php"; ?>
    <?php include __DIR__ . "/partials/slider.php"; ?>

    <main id="main-content">

        <!-- 0) Director General (con fondo) -->
        <section id="director" class="section section-soft">
            <div class="container">
                <div class="section-title reveal">
                    <h2 class="fw-bold mb-1">Mensaje del Director General</h2>
                    <p class="text-muted mb-0">
                        Compromiso, transparencia y atención profesional.
                    </p>
                </div>

                <div class="row align-items-center g-4">
                    <div class="col-lg-5 reveal">
                        <div class="card card-3d border-0 overflow-hidden tilt" data-tilt>
                            <img
                                class="img-fluid"
                                src="https://images.unsplash.com/photo-1556157382-97eda2d62296?auto=format&fit=crop&w=1200&q=80"
                                alt="Director General de GEPETROL SEGUROS"
                                loading="lazy"
                                decoding="async" />
                        </div>
                    </div>
                    <div class="col-lg-7 reveal">
                        <div class="card card-3d border-0 p-4 tilt" data-tilt>
                            <p class="text-muted mb-3">
                                Bienvenidos a GEPETROL SEGUROS. Nuestro objetivo es ofrecer
                                productos claros, accesibles y adaptados a las necesidades de
                                cada cliente, con un servicio ágil y profesional.
                            </p>

                            <div class="quote-box2">
                                <div class="quote-mark">“</div>
                                <div>
                                    <div class="fw-semibold">
                                        Nuestra prioridad es proteger lo que más importa: tu
                                        familia, tu empresa y tu futuro.
                                    </div>
                                    <div class="small text-muted mt-1">— Director General</div>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap gap-2 mt-4">
                                <a href="#presupuesto" class="btn btn-brand btn-lg"><i class="bi bi-send"></i> Pedir presupuesto</a>
                                <a href="#productos" class="btn btn-outline-secondary btn-lg">Ver productos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 1) Seguro Automóvil (más trabajado) -->
        <section id="auto" class="section">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-lg-6 reveal">
                        <div class="auto-media tilt" data-tilt>
                            <img
                                class="img-fluid"
                                src="assets/img/auto/auto1.png"
                                alt="Seguro de automóvil"
                                loading="lazy"
                                decoding="async" />
                            <div class="auto-badge">
                                <i class="bi bi-car-front"></i> Seguro Automóvil
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 reveal">
                        <div class="section-title mb-3">
                            <h2 class="fw-bold mb-1">Seguro de Automóvil</h2>
                            <p class="text-muted mb-0">
                                Cotiza una póliza adaptada a tu vehículo. Te ayudamos a elegir la cobertura adecuada
                                según tus necesidades y presupuesto.
                            </p>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="mini-card tilt" data-tilt>
                                    <i class="bi bi-shield-check"></i>
                                    <div>
                                        <div class="fw-semibold">Coberturas a medida</div>
                                        <div class="small text-muted">Elige lo que necesitas.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mini-card tilt" data-tilt>
                                    <i class="bi bi-receipt"></i>
                                    <div>
                                        <div class="fw-semibold">Transparencia total</div>
                                        <div class="small text-muted">Desglose claro.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mini-card tilt" data-tilt>
                                    <i class="bi bi-headset"></i>
                                    <div>
                                        <div class="fw-semibold">Atención</div>
                                        <div class="small text-muted">Asesoría y seguimiento.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mini-card tilt" data-tilt>
                                    <i class="bi bi-lightning-charge"></i>
                                    <div>
                                        <div class="fw-semibold">Proceso rápido</div>
                                        <div class="small text-muted">Cotiza en minutos.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2 mt-4">
                            <a class="btn btn-brand btn-lg px-4" href="#presupuesto"><i class="bi bi-calculator"></i> Calcula tu presupuesto</a>
                            <a
                                class="btn btn-outline-secondary btn-lg px-4"
                                href="#categorias">Ver otras coberturas</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2) Productos (más bonito) -->
        <section id="productos" class="section section-soft">
            <div class="container">
                <div class="section-title reveal">
                    <h2 class="fw-bold mb-1">Nuestros productos</h2>
                    <p class="text-muted mb-0">
                        Soluciones para particulares y empresas.
                    </p>
                </div>

                <div class="row g-3">
                    <div class="col-sm-6 col-lg-3 reveal">
                        <div class="card feature-card2 h-100 tilt" data-tilt>
                            <div class="card-body">
                                <div class="feature-icon2"><i class="bi bi-car-front"></i></div>
                                <h5 class="mb-2">Automóvil</h5>
                                <p class="text-muted mb-3">
                                    Cotización rápida para vehículos y flotas.
                                </p>
                                <a class="link-brand" href="#presupuesto">Cotizar <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 reveal">
                        <div class="card feature-card2 h-100 tilt" data-tilt>
                            <div class="card-body">
                                <div class="feature-icon2">
                                    <i class="bi bi-heart-pulse"></i>
                                </div>
                                <h5 class="mb-2">Salud</h5>
                                <p class="text-muted mb-3">Planes familiares o de grupo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 reveal">
                        <div class="card feature-card2 h-100 tilt" data-tilt>
                            <div class="card-body">
                                <div class="feature-icon2">
                                    <i class="bi bi-building-check"></i>
                                </div>
                                <h5 class="mb-2">Empresas</h5>
                                <p class="text-muted mb-3">RC, multirriesgo y más.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 reveal">
                        <div class="card feature-card2 h-100 tilt" data-tilt>
                            <div class="card-body">
                                <div class="feature-icon2"><i class="bi bi-box-seam"></i></div>
                                <h5 class="mb-2">Transporte</h5>
                                <p class="text-muted mb-3">Mercancías y logística.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 text-center reveal">
                    <a class="btn btn-outline-secondary btn-lg" href="#categorias">
                        Ver categorías completas <i class="bi bi-grid"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- 3) Categorías (más trabajado) -->
        <section id="categorias" class="section">
            <div class="container">
                <div class="section-title reveal">
                    <h2 class="fw-bold mb-1">Categorías de productos</h2>
                    <p class="text-muted mb-0">
                        Particulares y empresas, cada uno con su catálogo.
                    </p>
                </div>

                <div class="row g-4">
                    <!-- Panel izquierdo “3D” con tabs -->
                    <div class="col-lg-4">
                        <div class="card card-3d p-3 border-0 h-100">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <div class="icon-3d-sm"><i class="bi bi-layers"></i></div>
                                <div>
                                    <div class="fw-bold">Explora por tipo</div>
                                    <div class="small text-muted">Selecciona una categoría</div>
                                </div>
                            </div>

                            <ul
                                class="nav nav-pills nav-pills-modern flex-column gap-2"
                                id="catTabs"
                                role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link active"
                                        id="tab-particulares"
                                        data-bs-toggle="pill"
                                        data-bs-target="#pane-particulares"
                                        type="button"
                                        role="tab">
                                        <i class="bi bi-person"></i> PARTICULARES
                                        <span class="ms-auto badge text-bg-light">7</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link"
                                        id="tab-empresas"
                                        data-bs-toggle="pill"
                                        data-bs-target="#pane-empresas"
                                        type="button"
                                        role="tab">
                                        <i class="bi bi-briefcase"></i> EMPRESAS
                                        <span class="ms-auto badge text-bg-light">8</span>
                                    </button>
                                </li>
                            </ul>

                            <div class="mt-3 small text-muted">
                                Consejo: haz clic en “Cotizar” para ir directo al formulario.
                            </div>
                        </div>
                    </div>

                    <!-- Panel derecho con cards -->
                    <div class="col-lg-8">
                        <div class="tab-content">
                            <!-- PARTICULARES -->
                            <div
                                class="tab-pane fade show active"
                                id="pane-particulares"
                                role="tabpanel"
                                aria-labelledby="tab-particulares">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="product-card2">
                                            <div class="pc2-icon">
                                                <i class="bi bi-car-front"></i>
                                            </div>
                                            <div class="pc2-content">
                                                <h5>Seguro automóvil</h5>
                                                <p>Coberturas flexibles y cotización rápida.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="product-card2">
                                            <div class="pc2-icon"><i class="bi bi-bandaid"></i></div>
                                            <div class="pc2-content">
                                                <h5>Seguro individual accidente</h5>
                                                <p>Protección personal ante imprevistos.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="product-card2">
                                            <div class="pc2-icon">
                                                <i class="bi bi-heart-pulse"></i>
                                            </div>
                                            <div class="pc2-content">
                                                <h5>Seguro médico familiar</h5>
                                                <p>Planes para ti y tu familia, ampliables.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="product-card2">
                                            <div class="pc2-icon"><i class="bi bi-box-seam"></i></div>
                                            <div class="pc2-content">
                                                <h5>Transporte de mercancías</h5>
                                                <p>Seguridad en rutas, carga y logística.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="product-card2">
                                            <div class="pc2-icon">
                                                <i class="bi bi-shield-lock"></i>
                                            </div>
                                            <div class="pc2-content">
                                                <h5>Seguro de cuenta protegida</h5>
                                                <p>Cobertura ante riesgos asociados a cuenta.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="product-card2">
                                            <div class="pc2-icon"><i class="bi bi-shop"></i></div>
                                            <div class="pc2-content">
                                                <h5>Multirriesgo para Pymes y comerciantes</h5>
                                                <p>Coberturas pensadas para pequeños negocios.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="product-card2">
                                            <div class="pc2-icon"><i class="bi bi-fire"></i></div>
                                            <div class="pc2-content">
                                                <h5>Incendio y riesgos anexos</h5>
                                                <p>Protección de hogar, comercio o bienes.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- EMPRESAS -->
                            <div
                                class="tab-pane fade"
                                id="pane-empresas"
                                role="tabpanel"
                                aria-labelledby="tab-empresas">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="product-card2">
                                            <div class="pc2-icon">
                                                <i class="bi bi-briefcase"></i>
                                            </div>
                                            <div class="pc2-content">
                                                <h5>RC jefe de empresa</h5>
                                                <p>Responsabilidad civil para dirección y gestión.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="product-card2">
                                            <div class="pc2-icon"><i class="bi bi-building"></i></div>
                                            <div class="pc2-content">
                                                <h5>Daños globales</h5>
                                                <p>Cobertura integral de activos y operaciones.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="product-card2">
                                            <div class="pc2-icon">
                                                <i class="bi bi-heart-pulse"></i>
                                            </div>
                                            <div class="pc2-content">
                                                <h5>Seguro médico grupo</h5>
                                                <p>Plan colectivo para empleados y equipos.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="product-card2">
                                            <div class="pc2-icon">
                                                <i class="bi bi-mortarboard"></i>
                                            </div>
                                            <div class="pc2-content">
                                                <h5>RC escolar</h5>
                                                <p>Cobertura para centros educativos y alumnos.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="product-card2">
                                            <div class="pc2-icon"><i class="bi bi-shield"></i></div>
                                            <div class="pc2-content">
                                                <h5>Multiriesgo profesional</h5>
                                                <p>Protección de instalaciones y actividad.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="product-card2">
                                            <div class="pc2-icon"><i class="bi bi-gear"></i></div>
                                            <div class="pc2-content">
                                                <h5>Rotura de maquinaria</h5>
                                                <p>Cobertura ante fallos y averías críticas.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="product-card2">
                                            <div class="pc2-icon">
                                                <i class="bi bi-cone-striped"></i>
                                            </div>
                                            <div class="pc2-content">
                                                <h5>Todo riesgo construcción (obras)</h5>
                                                <p>Protección completa durante ejecución.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="product-card2">
                                            <div class="pc2-icon"><i class="bi bi-airplane"></i></div>
                                            <div class="pc2-content">
                                                <h5>Aeronaves / barcos</h5>
                                                <p>Coberturas especializadas para transporte.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab-content -->
                    </div>
                </div>
            </div>
        </section>

        <!-- 5) Noticias (bonito y consistente) -->
        <section id="noticias" class="section section-soft">
            <div class="container">
                <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 mb-3 reveal">
                    <div class="section-title mb-0">
                        <h2 class="fw-bold mb-1">Noticias</h2>
                        <p class="text-muted mb-0">
                            Comunicados, novedades y actualidad de GEPETROL SEGUROS.
                        </p>
                    </div>

                    <a class="btn btn-outline-secondary btn-lg" href="pages/noticias.php">
                        Ver todas <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="row g-3">
                    <!-- Noticia 1 -->
                    <div class="col-md-6 col-lg-4 reveal">
                        <article class="card card-3d news-card h-100 tilt" data-tilt>
                            <div class="news-cover">
                                <img
                                    src="assets/img/noticias/seguro-auto.jpg"
                                    alt="Nueva plataforma digital de cotización"
                                    loading="lazy"
                                    decoding="async" />
                                <span class="news-tag"><i class="bi bi-megaphone"></i> Comunicado</span>
                            </div>

                            <div class="card-body p-4 d-flex flex-column">
                                <div class="news-meta mb-2">
                                    <i class="bi bi-calendar3"></i>
                                    <span>12 de marzo de 2025</span>
                                </div>

                                <h3 class="news-title mb-2">Nueva plataforma digital de cotización</h3>

                                <p class="text-muted mb-3">
                                    Presentamos una experiencia más clara y rápida: coberturas, desglose, IVA y total final en minutos.
                                </p>

                                <div class="mt-auto d-flex gap-2">
                                    <a class="btn btn-outline-secondary w-100" href="pages/single.php?slug=nueva-plataforma">
                                        Leer más <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Noticia 2 -->
                    <div class="col-md-6 col-lg-4 reveal">
                        <article class="card card-3d news-card h-100 tilt" data-tilt>
                            <div class="news-cover">
                                <img
                                    src="assets/img/hero/seguro-auto.png"
                                    alt="Campaña de concienciación aseguradora"
                                    loading="lazy"
                                    decoding="async" />
                                <span class="news-tag news-tag-alt"><i class="bi bi-shield-check"></i> Institucional</span>
                            </div>

                            <div class="card-body p-4 d-flex flex-column">
                                <div class="news-meta mb-2">
                                    <i class="bi bi-calendar3"></i>
                                    <span>3 de febrero de 2025</span>
                                </div>

                                <h3 class="news-title mb-2">Campaña de concienciación aseguradora</h3>

                                <p class="text-muted mb-3">
                                    Iniciativa institucional para fortalecer la cultura del seguro en familias, comercios y pequeñas empresas.
                                </p>

                                <div class="mt-auto">
                                    <a class="btn btn-outline-secondary w-100" href="pages/single.php?slug=concienciacion">
                                        Leer más <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Noticia 3 -->
                    <div class="col-md-6 col-lg-4 reveal">
                        <article class="card card-3d news-card h-100 tilt" data-tilt>
                            <div class="news-cover">
                                <img
                                    src="assets/img/hero/seguro-escolar.png"
                                    alt="Nuevas alianzas estratégicas"
                                    loading="lazy"
                                    decoding="async" />
                                <span class="news-tag news-tag-dark"><i class="bi bi-diagram-3"></i> Alianzas</span>
                            </div>

                            <div class="card-body p-4 d-flex flex-column">
                                <div class="news-meta mb-2">
                                    <i class="bi bi-calendar3"></i>
                                    <span>20 de enero de 2025</span>
                                </div>

                                <h3 class="news-title mb-2">Nuevas alianzas estratégicas</h3>

                                <p class="text-muted mb-3">
                                    Reforzamos nuestra red de colaboradores para mejorar cobertura, tiempos de respuesta y atención al cliente.
                                </p>

                                <div class="mt-auto">
                                    <a class="btn btn-outline-secondary w-100" href="pages/single.php?slug=alianzas">
                                        Leer más <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="mt-4 text-center reveal">
                    <a class="btn btn-brand btn-lg px-4" href="pages/noticias.php">
                        <i class="bi bi-newspaper"></i> Ver todas las noticias
                    </a>
                </div>

            </div>
        </section>

        <!-- 4) Video overlay (imagen + opacidad) -->
        <section id="video" class="section">
            <div class="container reveal">
                <div class="video-hero tilt" data-tilt>
                    <div
                        class="video-hero-bg parallax"
                        data-parallax="0.12"
                        aria-hidden="true"></div>
                    <div class="video-hero-overlay" aria-hidden="true"></div>

                    <div class="row align-items-center g-4 position-relative">
                        <div class="col-lg-8">
                            <h2 class="fw-bold text-white mb-2">
                                Conoce cómo funciona nuestra cotización
                            </h2>
                            <p class="text-white-70 mb-0">
                                Un proceso simple: eliges producto → completas datos → recibes
                                presupuesto.
                            </p>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <button
                                class="btn btn-light btn-lg px-4"
                                data-bs-toggle="modal"
                                data-bs-target="#videoModal">
                                <i class="bi bi-play-circle"></i> Ver video
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content bg-black">
                        <div class="modal-header border-0">
                            <h5 class="modal-title text-white">Video</h5>
                            <button
                                type="button"
                                class="btn-close btn-close-white"
                                data-bs-dismiss="modal"
                                aria-label="Cerrar"></button>
                        </div>
                        <div class="modal-body pt-0">
                            <div class="ratio ratio-16x9">
                                <iframe
                                    id="videoFrame"
                                    src="https://www.youtube.com/embed/NypPuwbqy3s"
                                    title="Video"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal video -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="ratio ratio-16x9">
                            <iframe
                                id="videoFrame"
                                src="https://www.youtube.com/embed/NypPuwbqy3s"
                                title="Video GEPETROL SEGUROS"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5) Presupuesto (mejorado) -->
        <section id="presupuesto" class="section section-soft">
            <div class="container">
                <div class="section-title">
                    <h2 class="fw-bold mb-1">Solicitar presupuesto</h2>
                    <p class="text-muted mb-0">
                        Completa el formulario y te contactamos rápidamente.
                    </p>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="card card-3d border-0 p-4 h-100">
                            <div class="d-flex gap-3 align-items-start">
                                <div class="icon-3d-sm"><i class="bi bi-shield-lock"></i></div>
                                <div>
                                    <div class="fw-bold">Privacidad y seguridad</div>
                                    <div class="text-muted small">
                                        Tus datos se usan únicamente para gestionar tu solicitud de
                                        presupuesto.
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4" />

                            <div class="d-flex gap-3 align-items-start">
                                <div class="icon-3d-sm"><i class="bi bi-headset"></i></div>
                                <div>
                                    <div class="fw-bold">Asesoría</div>
                                    <div class="text-muted small">
                                        Te ayudamos a elegir coberturas según tu necesidad real.
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <a class="btn btn-brand w-100 btn-lg" href="#auto">
                                    <i class="bi bi-car-front"></i> Cotizar automóvil
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="card card-3d border-0">
                            <div class="card-body p-4 p-lg-5">
                                <form id="quoteForm" novalidate>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Nombre y apellidos</label>
                                            <input
                                                class="form-control form-control-lg"
                                                name="fullName"
                                                required
                                                placeholder="Ej: Juan Pérez" />
                                            <div class="invalid-feedback">
                                                Este campo es obligatorio.
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Teléfono</label>
                                            <input
                                                class="form-control form-control-lg"
                                                name="phone"
                                                required
                                                placeholder="+240..." />
                                            <div class="invalid-feedback">
                                                Indica un teléfono válido.
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Email</label>
                                            <input
                                                type="email"
                                                class="form-control form-control-lg"
                                                name="email"
                                                required
                                                placeholder="correo@dominio.com" />
                                            <div class="invalid-feedback">
                                                Indica un email válido.
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Categoría</label>
                                            <select
                                                class="form-select form-select-lg"
                                                name="category"
                                                required>
                                                <option value="" selected disabled>
                                                    Selecciona...
                                                </option>
                                                <option>PARTICULARES</option>
                                                <option>EMPRESAS</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Selecciona una categoría.
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Producto</label>
                                            <select
                                                class="form-select form-select-lg"
                                                name="product"
                                                required>
                                                <option value="" selected disabled>
                                                    Selecciona...
                                                </option>
                                                <optgroup label="PARTICULARES">
                                                    <option>Seguro automóvil</option>
                                                    <option>Seguro individual accidente</option>
                                                    <option>Seguro médico familiar</option>
                                                    <option>
                                                        Multirriesgo para Pymes y comerciantes
                                                    </option>
                                                    <option>Seguro de Transporte de mercancías</option>
                                                    <option>Seguro de cuenta protegida</option>
                                                    <option>Seguro de Incendio y riegos anexos</option>
                                                </optgroup>
                                                <optgroup label="EMPRESAS">
                                                    <option>
                                                        Seguro de responsabilidad civil jefe de empresa
                                                    </option>
                                                    <option>Seguro de daños globales</option>
                                                    <option>Seguro medico grupo</option>
                                                    <option>Seguro de RC escolar</option>
                                                    <option>Seguro de Multiriesgo profesional</option>
                                                    <option>Seguro de rotura de maquinaria</option>
                                                    <option>
                                                        Seguro de todo riesgo construcción (obras)
                                                    </option>
                                                    <option>Seguro de aeronaves/barcos</option>
                                                </optgroup>
                                            </select>
                                            <div class="invalid-feedback">
                                                Selecciona un producto.
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Preferencia de contacto</label>
                                            <select
                                                class="form-select form-select-lg"
                                                name="contactPreference">
                                                <option>Email</option>
                                                <option>Teléfono</option>
                                                <option>WhatsApp</option>
                                            </select>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Mensaje / Detalles</label>
                                            <textarea
                                                class="form-control"
                                                name="message"
                                                rows="4"
                                                placeholder="Cuéntanos lo que necesitas..."></textarea>
                                        </div>

                                        <div
                                            class="col-12 d-flex flex-wrap gap-2 align-items-center mt-2">
                                            <button class="btn btn-brand btn-lg px-4" type="submit">
                                                <i class="bi bi-send"></i> Enviar solicitud
                                            </button>
                                            <div id="formStatus" class="small text-muted"></div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-hint">
                                                Al enviar aceptas el uso de tus datos para gestionar tu
                                                solicitud (ver política de privacidad).
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include __DIR__ . "/partials/footer.php"; ?>
    <?php include __DIR__ . "/partials/scripts.php"; ?>

</body>

</html>