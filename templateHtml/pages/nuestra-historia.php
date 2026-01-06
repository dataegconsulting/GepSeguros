
<?php
// ==============================
// Page meta
// ==============================
$pageTitle = "Nuestra historia | GEPETROL SEGUROS";
$pageDesc  = "Conoce la historia, evolución y compromiso institucional de GEPETROL SEGUROS en Guinea Ecuatorial.";
$pageImg   = "img/og-cover.png"; // Placeholder path handled by logic below

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
    <section class="section section-soft" id="nuestra-historia">
      <div class="container">

        <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 reveal">
          <div>
            <div class="page-hero-badge mb-2">
              <i class="bi bi-clock-history"></i>
              Quiénes somos • Nuestra historia
            </div>

            <h1 class="page-title fw-black mb-2">
              Nuestra historia
            </h1>

            <p class="page-lead text-muted mb-0">
              Evolución, crecimiento y compromiso con una cultura de servicio basada en confianza y transparencia.
            </p>
          </div>

          <nav aria-label="breadcrumb" class="reveal">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a class="link-brand" href="<?= url('index.php') ?>">Inicio</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Nuestra historia
              </li>
            </ol>
          </nav>
        </div>

      </div>
    </section>

    <!-- ==========================================================
         CONTENIDO (2 columnas)
    =========================================================== -->
    <section class="section">
      <div class="container">
        <div class="row g-4 align-items-stretch">

          <!-- Col Izq: Historia -->
          <div class="col-lg-8 reveal">
            <article class="card-3d p-4 p-lg-5 h-100 tilt">

              <header class="mb-4">
                <div class="quote-box2">
                  <div class="quote-mark">“</div>
                  <div>
                    <div class="fw-bold">
                      Una historia construida con responsabilidad, cercanía y visión de futuro.
                    </div>
                    <div class="text-muted small">
                      Institución • Servicio • Innovación
                    </div>
                  </div>
                </div>
              </header>

              <div class="content-pro text-muted">
                <p><strong>GEPETROL SEGUROS</strong> nace con la misión de fortalecer la cultura aseguradora y
                  ofrecer soluciones sólidas para particulares y empresas en Guinea Ecuatorial.</p>

                <p>A lo largo del tiempo, hemos evolucionado hacia procesos más claros y eficientes,
                  apoyándonos en buenas prácticas, modernización tecnológica y un compromiso permanente con el cliente.</p>

                <p>Hoy, consolidamos una visión enfocada en:</p>

                <ul class="history-list list-unstyled ps-3 mb-4">
                  <li class="mb-2"><i class="bi bi-check2-circle text-brand me-2"></i> Transparencia en coberturas, impuestos y condiciones.</li>
                  <li class="mb-2"><i class="bi bi-check2-circle text-brand me-2"></i> Atención profesional y cercana.</li>
                  <li class="mb-2"><i class="bi bi-check2-circle text-brand me-2"></i> Mejora continua de productos y servicios.</li>
                  <li class="mb-2"><i class="bi bi-check2-circle text-brand me-2"></i> Innovación para una cotización más ágil y comprensible.</li>
                </ul>

                <hr class="my-4">

                <!-- Timeline -->
                <div class="timeline position-relative ps-4 border-start border-2">
                  <div class="t-item mb-4 position-relative">
                    <span class="position-absolute top-0 start-0 translate-middle p-2 bg-brand border border-light rounded-circle" style="left: -2px !important;"></span>
                    <div class="ms-3">
                      <div class="badge bg-light text-dark mb-1">Inicio</div>
                      <h5 class="fw-bold mb-1">Fundación y enfoque en protección</h5>
                      <p class="small text-muted mb-0">Construcción de bases operativas y cultura de servicio.</p>
                    </div>
                  </div>

                  <div class="t-item mb-4 position-relative">
                    <span class="position-absolute top-0 start-0 translate-middle p-2 bg-brand border border-light rounded-circle" style="left: -2px !important;"></span>
                    <div class="ms-3">
                       <div class="badge bg-light text-dark mb-1">Crecimiento</div>
                      <h5 class="fw-bold mb-1">Expansión de productos</h5>
                      <p class="small text-muted mb-0">Más coberturas para particulares, pymes y grandes empresas.</p>
                    </div>
                  </div>

                  <div class="t-item position-relative">
                    <span class="position-absolute top-0 start-0 translate-middle p-2 bg-brand border border-light rounded-circle" style="left: -2px !important;"></span>
                    <div class="ms-3">
                       <div class="badge bg-brand mb-1">Actualidad</div>
                      <h5 class="fw-bold mb-1">Modernización y digitalización</h5>
                      <p class="small text-muted mb-0">Experiencia más clara: desglose, IVA y total final.</p>
                    </div>
                  </div>
                </div>

              </div>

              <div class="d-flex flex-wrap gap-2 mt-5">
                <a class="btn btn-brand btn-lg px-4" href="<?= url('index.php#presupuesto') ?>">
                  <i class="bi bi-send"></i> Solicitar presupuesto
                </a>
                <a class="btn btn-outline-secondary btn-lg px-4" href="<?= url('pages/mensaje-director.php') ?>">
                  <i class="bi bi-person-badge"></i> Mensaje del Director
                </a>
              </div>

            </article>
          </div>

          <!-- Col Der: Bloques -->
          <aside class="col-lg-4 reveal">
            <div class="card card-3d p-4 h-100 tilt">

              <div class="d-flex align-items-center gap-3 mb-3">
                <div class="icon-3d">
                  <i class="bi bi-building-check"></i>
                </div>
                <div>
                  <div class="fw-bold">Evolución institucional</div>
                  <div class="text-muted small">Crecimiento con propósito</div>
                </div>
              </div>

              <div class="history-kpi d-flex flex-column gap-2">
                <div class="pill-stat d-flex align-items-center justify-content-between p-2 rounded bg-light">
                  <span class="fw-bold"><i class="bi bi-eye me-2"></i> Enfoque</span>
                  <span class="text-muted small">Calidad</span>
                </div>

                <div class="pill-stat d-flex align-items-center justify-content-between p-2 rounded bg-light">
                  <span class="fw-bold"><i class="bi bi-diamond me-2"></i> Valor</span>
                  <span class="text-muted small">Confianza</span>
                </div>

                <div class="pill-stat d-flex align-items-center justify-content-between p-2 rounded bg-light">
                  <span class="fw-bold"><i class="bi bi-flag me-2"></i> Meta</span>
                  <span class="text-muted small">Mejora continua</span>
                </div>
              </div>

              <div class="alert alert-light border-0 d-flex gap-2 mt-4 text-muted small">
                <i class="bi bi-info-circle flex-shrink-0 mt-1"></i>
                <div>
                 Estamos comprometidos con el desarrollo del sector asegurador en la región, ofreciendo garantías reales.
                </div>
              </div>

              <hr class="my-4">

              <a class="btn btn-brand w-100" href="<?= url('index.php#productos') ?>">
                <i class="bi bi-grid"></i> Ver productos
              </a>

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
              <h2 class="fw-black mb-2">Construimos confianza cada día</h2>
              <p class="text-muted mb-0">
                Cotiza de forma clara y rápida. Te contactamos con opciones según tu necesidad.
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