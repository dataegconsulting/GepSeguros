
<?php
$pageTitle = "Seguro Automóvil | GEPETROL SEGUROS";
$pageDesc  = "Seguro Automóvil de GEPETROL SEGUROS: coberturas, beneficios y solicitud de presupuesto.";
$pageImg   = "img/og-cover.png"; 

// CSS/JS específicos de esta página
$pageCss = [];
$pageJs  = [];
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
       HERO
  =========================================================== -->
        <section class="section section-soft section-page-hero" id="seguro-automovil">
            <div class="container">
                <div class="row g-4 align-items-center">

                    <div class="col-lg-7 reveal">
                        <div class="page-hero-badge mb-2">
                            <i class="bi bi-car-front"></i>
                            Productos • Particulares
                        </div>

                        <h1 class="page-title fw-black mb-2">Seguro Automóvil</h1>

                        <p class="page-lead text-muted mb-4">
                            Coberturas claras, desglose transparente y atención rápida. Protege tu vehículo con un seguro
                            diseñado para la realidad de Guinea Ecuatorial.
                        </p>

                        <div class="d-flex flex-wrap gap-2">
                            <a class="btn btn-brand btn-lg px-4" href="#solicitar">
                                <i class="bi bi-send"></i> Solicitar presupuesto
                            </a>
                            <a class="btn btn-outline-secondary btn-lg px-4" href="#coberturas">
                                <i class="bi bi-shield-check"></i> Ver coberturas
                            </a>
                        </div>

                        <div class="hero-mini-stats mt-4 d-flex gap-3 flex-wrap">
                            <div class="mini-stat d-flex align-items-center gap-2 p-2 rounded bg-white shadow-sm border">
                                <i class="bi bi-lightning-charge text-brand fs-4"></i>
                                <div>
                                    <div class="fw-bold text-dark">Respuesta rápida</div>
                                    <div class="text-muted small">Atención eficiente</div>
                                </div>
                            </div>
                            <div class="mini-stat d-flex align-items-center gap-2 p-2 rounded bg-white shadow-sm border">
                                <i class="bi bi-receipt text-brand fs-4"></i>
                                <div>
                                    <div class="fw-bold text-dark">Desglose claro</div>
                                    <div class="text-muted small">Impuestos y total</div>
                                </div>
                            </div>
                            <div class="mini-stat d-flex align-items-center gap-2 p-2 rounded bg-white shadow-sm border">
                                <i class="bi bi-headset text-brand fs-4"></i>
                                <div>
                                    <div class="fw-bold text-dark">Soporte</div>
                                    <div class="text-muted small">Acompañamiento</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 reveal">
                        <div class="card card-3d p-4 p-lg-5 tilt">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="icon-3d">
                                    <i class="bi bi-car-front-fill"></i>
                                </div>
                                <div>
                                    <div class="fw-bold">Protección inteligente</div>
                                    <div class="text-muted small">Para tu vehículo y tu tranquilidad</div>
                                </div>
                            </div>

                            <div class="position-relative mb-3 rounded overflow-hidden shadow-sm">
                                <img
                                class="img-fluid w-100"
                                src="<?= asset('img/hero/seguro-auto.png') ?>"
                                alt="Cotizar seguro automóvil"
                                loading="lazy" />
                                
                                <div class="position-absolute bottom-0 start-0 m-3 badge bg-brand shadow-sm">
                                    <i class="bi bi-shield-lock"></i> Seguro Automóvil
                                </div>
                            </div>

                            <div class="alert alert-light border-0 d-flex gap-2 text-muted small mt-3 mb-0">
                                <i class="bi bi-info-circle flex-shrink-0 mt-1"></i>
                                <div>
                                    Puedes pedir un presupuesto indicando marca, modelo, potencia y coberturas deseadas.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==========================================================
       BENEFICIOS
  =========================================================== -->
        <section class="section" id="beneficios">
            <div class="container">
                <div class="section-title reveal">
                    <h2 class="fw-black mb-2">Beneficios principales</h2>
                    <p class="text-muted mb-0">
                        Un seguro moderno debe ser claro, accesible y útil cuando más lo necesitas.
                    </p>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 reveal">
                        <div class="card card-3d p-4 h-100 tilt">
                            <div class="feature-icon2 mb-3"><i class="bi bi-shield-check fs-1 text-brand"></i></div>
                            <h5 class="fw-bold mb-2">Coberturas claras</h5>
                            <p class="text-muted mb-0">
                                Explicación simple de coberturas, límites y condiciones.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 reveal">
                        <div class="card card-3d p-4 h-100 tilt">
                            <div class="feature-icon2 mb-3"><i class="bi bi-receipt fs-1 text-brand"></i></div>
                            <h5 class="fw-bold mb-2">Desglose transparente</h5>
                            <p class="text-muted mb-0">
                                Visualiza subtotal, impuestos y total final sin sorpresas.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 reveal">
                        <div class="card card-3d p-4 h-100 tilt">
                            <div class="feature-icon2 mb-3"><i class="bi bi-headset fs-1 text-brand"></i></div>
                            <h5 class="fw-bold mb-2">Acompañamiento</h5>
                            <p class="text-muted mb-0">
                                Soporte y orientación en todo el proceso.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 reveal">
                        <div class="card card-3d p-4 h-100 tilt">
                            <div class="feature-icon2 mb-3"><i class="bi bi-tools fs-1 text-brand"></i></div>
                            <h5 class="fw-bold mb-2">Gestión eficiente</h5>
                            <p class="text-muted mb-0">
                                Procesos optimizados para reducir tiempos.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 reveal">
                        <div class="card card-3d p-4 h-100 tilt">
                            <div class="feature-icon2 mb-3"><i class="bi bi-geo-alt fs-1 text-brand"></i></div>
                            <h5 class="fw-bold mb-2">Adaptado al país</h5>
                            <p class="text-muted mb-0">
                                Diseñado para la realidad y necesidades locales.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 reveal">
                        <div class="card card-3d p-4 h-100 tilt">
                            <div class="feature-icon2 mb-3"><i class="bi bi-stars fs-1 text-brand"></i></div>
                            <h5 class="fw-bold mb-2">Servicio profesional</h5>
                            <p class="text-muted mb-0">
                                Buenas prácticas y enfoque en calidad.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================================
       COBERTURAS (cards)
  =========================================================== -->
        <section class="section section-soft" id="coberturas">
            <div class="container">
                <div class="section-title reveal">
                    <h2 class="fw-black mb-2">Coberturas</h2>
                    <p class="text-muted mb-0">
                        Selecciona coberturas según tus necesidades.
                    </p>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 reveal">
                        <div class="card card-3d p-4 h-100 tilt">
                            <div class="d-flex align-items-start gap-3">
                                <div class="icon-3d-sm"><i class="bi bi-shield-check"></i></div>
                                <div>
                                    <h5 class="fw-bold mb-1">Responsabilidad Civil</h5>
                                    <p class="text-muted mb-0">Cobertura base ante daños a terceros.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 reveal">
                        <div class="card card-3d p-4 h-100 tilt">
                            <div class="d-flex align-items-start gap-3">
                                <div class="icon-3d-sm"><i class="bi bi-cone-striped"></i></div>
                                <div>
                                    <h5 class="fw-bold mb-1">Asistencia / Incidencias</h5>
                                    <p class="text-muted mb-0">Acompañamiento ante incidentes y gestión.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 reveal">
                        <div class="card card-3d p-4 h-100 tilt">
                            <div class="d-flex align-items-start gap-3">
                                <div class="icon-3d-sm"><i class="bi bi-wrench-adjustable"></i></div>
                                <div>
                                    <h5 class="fw-bold mb-1">Daños propios</h5>
                                    <p class="text-muted mb-0">Protección del vehículo según condiciones.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 reveal">
                        <div class="card card-3d p-4 h-100 tilt">
                            <div class="d-flex align-items-start gap-3">
                                <div class="icon-3d-sm"><i class="bi bi-fire"></i></div>
                                <div>
                                    <h5 class="fw-bold mb-1">Incendio / Riesgos</h5>
                                    <p class="text-muted mb-0">Cobertura ante incendio y eventos definidos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 reveal text-center">
                    <div class="d-inline-flex align-items-center gap-2 text-muted small bg-light px-3 py-2 rounded-pill border">
                        <i class="bi bi-info-circle"></i>
                        Ajustaremos estas coberturas cuando conectemos el catálogo real del sistema.
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================================
      SOLICITAR (CTA a la app de cotización)
 =========================================================== -->
        <section class="section" id="solicitar">
            <div class="container">
                <div class="row g-4 align-items-stretch">

                    <div class="col-lg-7 reveal">
                        <div class="card card-3d p-4 p-lg-5 h-100 bg-white shadow-sm border tilt">

                            <div class="page-hero-badge mb-2">
                                <i class="bi bi-calculator"></i>
                                Cotización • Seguro Automóvil
                            </div>

                            <h2 class="fw-black mb-2">Solicitar presupuesto</h2>

                            <p class="text-muted mb-4">
                                Para cotizar con precisión (coberturas, desglose, IVA y total), usa nuestra aplicación
                                de cotización. Ahí ya tienes todo el flujo completo.
                            </p>

                            <?php
                            // App de cotización (React / Vite) - En producción esto debería ser una variable de entorno o config
                            $quoteAppUrl = "#";
                            ?>

                            <a
                                class="card bg-light border-0 text-decoration-none shadow-sm p-0 overflow-hidden"
                                href="<?= htmlspecialchars($quoteAppUrl) ?>"
                                target="_blank"
                                rel="noopener"
                                aria-label="Cotizar seguro automóvil">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img
                                        class="h-100 w-100 object-fit-cover"
                                        src="<?= asset('img/hero/seguro-auto.png') ?>"
                                        alt="Cotizar seguro automóvil"
                                        loading="lazy" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body d-flex flex-column justify-content-center h-100 p-4">
                                            <h5 class="card-title fw-bold text-dark mb-1">
                                                <i class="bi bi-lightning-charge text-brand me-1"></i> Cotizar ahora
                                            </h5>
                                            <p class="card-text text-muted small mb-3">
                                                 Accede a la aplicación completa de cotización.
                                            </p>
                                            <span class="btn btn-brand btn-sm align-self-start">
                                                <i class="bi bi-box-arrow-up-right"></i> Ir a la app
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="alert alert-light border-0 d-flex gap-2 text-muted small mt-4 mb-0">
                                <i class="bi bi-info-circle flex-shrink-0 mt-1"></i>
                                <div>
                                   Esto es un acceso directo a la aplicación de cotización.
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 reveal">
                        <div class="card card-3d p-4 p-lg-5 h-100 tilt">
                            <h3 class="h5 fw-black mb-4">¿Qué encontrarás en la app?</h3>

                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex gap-3 align-items-start">
                                    <div class="icon-3d-sm flex-shrink-0"><i class="bi bi-ui-checks"></i></div>
                                    <div>
                                        <div class="fw-bold text-dark">Flujo completo</div>
                                        <div class="text-muted small">Vehículo, conductor, extras y confirmación.</div>
                                    </div>
                                </div>

                                <div class="d-flex gap-3 align-items-start">
                                    <div class="icon-3d-sm flex-shrink-0"><i class="bi bi-receipt"></i></div>
                                    <div>
                                        <div class="fw-bold text-dark">Desglose & IVA</div>
                                        <div class="text-muted small">Subtotal, IVA y total final.</div>
                                    </div>
                                </div>

                                <div class="d-flex gap-3 align-items-start">
                                    <div class="icon-3d-sm flex-shrink-0"><i class="bi bi-file-earmark-pdf"></i></div>
                                    <div>
                                        <div class="fw-bold text-dark">Resumen</div>
                                        <div class="text-muted small">Resumen listo para imprimir/guardar.</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==========================================================
       CTA FINAL
  =========================================================== -->
        <section class="section section-soft">
            <div class="container">
                <div class="card card-3d p-4 p-lg-5 reveal tilt">
                    <div class="row align-items-center g-3">
                        <div class="col-lg-8">
                            <h2 class="fw-black mb-2">¿Quieres cotizar ahora?</h2>
                            <p class="text-muted mb-0">
                                Te damos una propuesta clara según tu vehículo y la cobertura elegida.
                            </p>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <a class="btn btn-brand btn-lg px-4" href="#solicitar">
                                <i class="bi bi-calculator"></i> Cotizar
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