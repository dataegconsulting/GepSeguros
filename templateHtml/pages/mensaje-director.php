
<?php

// ==============================
// Page meta
// ==============================
$pageTitle = "Mensaje del Director General | GEPETROL SEGUROS";
$pageDesc  = "Mensaje institucional del Director General de GEPETROL SEGUROS.";
$pageImg   = "img/og-cover.png"; 

// Carga CSS/JS específicos de esta página (los usaremos en head/scripts)
$pageCss  = [];
?>
<!doctype html>
<html lang="es">

<head>
    <?php include __DIR__ . "/../partials/head.php"; ?>
</head>

<body>

    <?php include __DIR__ . "/../partials/topbar.php"; ?>
    <?php include __DIR__ . "/../partials/header.php"; ?>

    <main id="main-content">

        <!-- ==========================================================
            HERO / BREADCRUMB
        =========================================================== -->
        <section class="section section-soft" id="mensaje-director">
            <div class="container">

                <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 reveal">
                    <div>
                        <div class="page-hero-badge mb-2">
                            <i class="bi bi-person-badge"></i>
                            Quiénes somos • Dirección
                        </div>

                        <h1 class="page-title fw-black mb-2">
                            Mensaje del Director General
                        </h1>

                        <p class="page-lead text-muted mb-0">
                            Una visión institucional enfocada en la confianza, la transparencia y la protección responsable de personas, familias y empresas.
                        </p>
                    </div>

                    <nav aria-label="breadcrumb" class="reveal">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a class="link-brand" href="<?= url('index.php') ?>">Inicio</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a class="link-brand" href="<?= url('pages/quienes-somos.php') ?>">Quiénes somos</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Mensaje del Director
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </section>


        <!-- ==========================================================
            CONTENIDO PRINCIPAL (2 columnas)
        =========================================================== -->
        <section class="section">
            <div class="container">
                <div class="row g-4 align-items-stretch">

                    <!-- Columna izquierda: Mensaje -->
                    <div class="col-lg-8 reveal">
                        <article class="card-3d p-4 p-lg-5 h-100 tilt" >

                            <header class="mb-4">
                                <div class="quote-box2">
                                    <div class="quote-mark">“</div>
                                    <div>
                                        <div class="fw-bold">
                                            En GEPETROL SEGUROS trabajamos para proteger lo que más importa:
                                            tu vida, tu familia, tu vehículo y tu negocio.
                                        </div>
                                        <div class="text-muted small">
                                            Compromiso institucional • Servicio profesional • Mejora continua
                                        </div>
                                    </div>
                                </div>
                            </header>

                            <!-- Contenido del mensaje -->
                            <div class="content-pro text-muted">
                                <p>
                                    Estimados clientes, colaboradores y socios:
                                </p>

                                <p>
                                    En nombre de <strong>GEPETROL SEGUROS</strong>, deseo expresar nuestro compromiso permanente
                                    con la excelencia en el servicio, la transparencia y la confianza. Nuestra misión es ofrecer
                                    soluciones aseguradoras sólidas, modernas y adaptadas a la realidad de Guinea Ecuatorial,
                                    garantizando protección para <strong>particulares</strong> y <strong>empresas</strong>.
                                </p>

                                <p>
                                    Estamos impulsando una experiencia de cotización más clara y eficiente, con procesos que
                                    permiten entender coberturas, desglose e impuestos de forma sencilla. Creemos que un seguro
                                    debe ser comprensible, accesible y orientado a acompañar a las personas en momentos clave.
                                </p>

                                <p>
                                    Seguiremos fortaleciendo nuestros productos, elevando nuestros estándares de cumplimiento
                                    y profesionalizando cada punto de contacto con el cliente. Gracias por su confianza.
                                </p>

                                <div class="mt-4 p-3 bg-light rounded d-flex align-items-center gap-3">
                                   <!-- Firma Digital o Nombre Estilizado -->
                                   <div class="border-start border-brand border-4 ps-3">
                                       <span class="d-block fw-bold text-dark">Director General</span>
                                       <span class="d-block text-muted small">GEPETROL SEGUROS</span>
                                   </div>
                                </div>
                            </div>

                            <hr class="my-4">

                            <div class="d-flex flex-wrap gap-2">
                                <a class="btn btn-brand btn-lg px-4" href="<?= url('index.php#presupuesto') ?>">
                                    <i class="bi bi-send"></i> Solicitar presupuesto
                                </a>

                                <a class="btn btn-outline-secondary btn-lg px-4" href="<?= url('pages/quienes-somos.php') ?>">
                                    <i class="bi bi-building"></i> Volver a Quiénes somos
                                </a>
                            </div>

                        </article>
                    </div>

                    <!-- Columna derecha: Perfil Director -->
                    <aside class="col-lg-4 reveal">
                        <div class="card card-3d p-4 h-100 tilt" >

                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="icon-3d">
                                    <i class="bi bi-person-circle"></i>
                                </div>
                                <div>
                                    <div class="fw-bold">Director General</div>
                                    <div class="text-muted small">GEPETROL SEGUROS</div>
                                </div>
                            </div>

                            <!-- Foto (placeholder). Sustituye por assets/img/director.jpg -->
                            <div class="auto-media mb-3 rounded overflow-hidden shadow-sm">
                                <img
                                    src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=900&q=80"
                                    class="img-fluid"
                                    alt="Director General de GEPETROL SEGUROS"
                                    loading="lazy"
                                    decoding="async" />
                                <div class="auto-badge" style="bottom: 10px; right: 10px; top: auto; left: auto;">
                                    <i class="bi bi-shield-check"></i> Liderazgo
                                </div>
                            </div>

                            <div class="history-kpi d-flex flex-column gap-2">
                                <div class="pill-stat d-flex align-items-center justify-content-between p-2 rounded bg-light">
                                    <span class="fw-bold"><i class="bi bi-people me-2"></i> Enfoque</span>
                                    <span class="text-muted small">Cliente</span>
                                </div>

                                <div class="pill-stat d-flex align-items-center justify-content-between p-2 rounded bg-light">
                                    <span class="fw-bold"><i class="bi bi-star me-2"></i> Prioridad</span>
                                    <span class="text-muted small">Excelencia</span>
                                </div>

                                <div class="pill-stat d-flex align-items-center justify-content-between p-2 rounded bg-light">
                                    <span class="fw-bold"><i class="bi bi-graph-up-arrow me-2"></i> Estrategia</span>
                                    <span class="text-muted small">Innovación</span>
                                </div>
                            </div>

                        </div>
                    </aside>

                </div>
            </div>
        </section>


        <!-- CTA -->
        <section class="section section-soft">
            <div class="container">
                <div class="card-3d p-4 p-lg-5 reveal tilt" data-tilt>
                    <div class="row align-items-center g-3">
                        <div class="col-lg-8">
                            <h2 class="fw-black mb-2">¿Listo para cotizar?</h2>
                            <p class="text-muted mb-0">
                                Solicita un presupuesto y te contactaremos con opciones claras según tu necesidad.
                            </p>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <a class="btn btn-brand btn-lg px-4" href="<?= url('pages/solicitar-presupuesto.php') ?>">
                                <i class="bi bi-calculator"></i> Cotizar ahora
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include __DIR__ . "/../partials/footer.php"; ?>
    <?php include __DIR__ . "/../partials/scripts.php"; ?>

</body>

</html>