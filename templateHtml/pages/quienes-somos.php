
<?php
$pageTitle = "Quiénes somos | GEPETROL SEGUROS";
$pageDesc  = "Descubre nuestra misión, visión y valores. Somos una aseguradora comprometida con Guinea Ecuatorial.";
$pageImg   = "img/og-cover.png"; 

// CSS/JS específicos de esta página
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
  <section class="section section-soft" id="quienes-somos">
    <div class="container">

      <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 reveal">
        <div>
          <div class="page-hero-badge mb-2">
            <i class="bi bi-building"></i>
            Quiénes somos • Institucional
          </div>

          <h1 class="page-title fw-black mb-2">
            Conócenos
          </h1>

          <p class="page-lead text-muted mb-0">
            Somos una aseguradora comprometida con soluciones claras, confiables y adaptadas a la realidad
            de Guinea Ecuatorial, para particulares y empresas.
          </p>
        </div>

        <nav aria-label="breadcrumb" class="reveal">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
              <a class="link-brand" href="<?= url('index.php') ?>">Inicio</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Quiénes somos
            </li>
          </ol>
        </nav>
      </div>

    </div>
  </section>


  <!-- ==========================================================
       BLOQUES KPI (mini cards)
  =========================================================== -->
  <section class="section">
    <div class="container">
      <div class="row g-3">

        <div class="col-md-6 col-lg-3 reveal">
          <div class="mini-card h-100 p-3 p-lg-4 border rounded bg-white shadow-sm d-flex flex-column gap-2">
            <div class="icon-2d text-brand fs-3 mb-1">
                 <i class="bi bi-shield-check"></i>
            </div>
            <div>
              <div class="fw-bold fs-5 text-dark">Confianza</div>
              <div class="text-muted small">Procesos claros y servicio profesional.</div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 reveal">
          <div class="mini-card h-100 p-3 p-lg-4 border rounded bg-white shadow-sm d-flex flex-column gap-2">
            <div class="icon-2d text-brand fs-3 mb-1">
                 <i class="bi bi-lightning-charge"></i>
            </div>
            <div>
              <div class="fw-bold fs-5 text-dark">Agilidad</div>
              <div class="text-muted small">Cotización rápida con mejor experiencia.</div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 reveal">
          <div class="mini-card h-100 p-3 p-lg-4 border rounded bg-white shadow-sm d-flex flex-column gap-2">
            <div class="icon-2d text-brand fs-3 mb-1">
                 <i class="bi bi-people"></i>
            </div>
            <div>
              <div class="fw-bold fs-5 text-dark">Cercanía</div>
              <div class="text-muted small">Atención enfocada en el cliente.</div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 reveal">
          <div class="mini-card h-100 p-3 p-lg-4 border rounded bg-white shadow-sm d-flex flex-column gap-2">
            <div class="icon-2d text-brand fs-3 mb-1">
                 <i class="bi bi-graph-up-arrow"></i>
            </div>
            <div>
              <div class="fw-bold fs-5 text-dark">Mejora continua</div>
              <div class="text-muted small">Cumplimiento y calidad en evolución.</div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ==========================================================
       MISIÓN / VISIÓN (2 columnas)
  =========================================================== -->
  <section class="section section-soft">
    <div class="container">
      <div class="row g-4 align-items-stretch">

        <div class="col-lg-6 reveal">
          <div class="card card-3d p-4 p-lg-5 h-100 tilt">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="icon-3d">
                <i class="bi bi-bullseye"></i>
              </div>
              <div>
                <h2 class="h4 fw-black mb-1">Nuestra misión</h2>
                <div class="text-muted small">Protección real, servicio claro.</div>
              </div>
            </div>

            <p class="text-muted mb-0 qs-text">
              Proveer soluciones aseguradoras modernas, transparentes y accesibles, con un enfoque en la
              protección de personas, familias y empresas, fortaleciendo la confianza y la estabilidad.
            </p>
          </div>
        </div>

        <div class="col-lg-6 reveal">
          <div class="card card-3d p-4 p-lg-5 h-100 tilt">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="icon-3d">
                <i class="bi bi-eye"></i>
              </div>
              <div>
                <h2 class="h4 fw-black mb-1">Nuestra visión</h2>
                <div class="text-muted small">Innovación + cumplimiento.</div>
              </div>
            </div>

            <p class="text-muted mb-0 qs-text">
              Ser una referencia en el mercado asegurador, impulsando innovación en la experiencia del cliente,
              cumplimiento sólido y crecimiento sostenible con alto impacto social.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ==========================================================
       VALORES (cards)
  =========================================================== -->
  <section class="section">
    <div class="container">

      <div class="section-title reveal">
        <h2 class="fw-black mb-2">Valores que nos definen</h2>
        <p class="text-muted mb-0">Principios claros para tomar decisiones y servir mejor.</p>
      </div>

      <div class="row g-3">
        <div class="col-md-6 col-lg-4 reveal">
          <div class="card card-3d p-4 h-100 tilt">
            <div class="feature-icon2 mb-3"><i class="bi bi-shield-lock fs-1 text-brand"></i></div>
            <h3 class="h5 fw-bold mb-2">Integridad</h3>
            <p class="text-muted mb-0">Actuamos con responsabilidad, ética y transparencia.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 reveal">
          <div class="card card-3d p-4 h-100 tilt">
            <div class="feature-icon2 mb-3"><i class="bi bi-person-heart fs-1 text-brand"></i></div>
            <h3 class="h5 fw-bold mb-2">Compromiso</h3>
            <p class="text-muted mb-0">Cercanía, escucha activa y enfoque en el cliente.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 reveal">
          <div class="card card-3d p-4 h-100 tilt">
            <div class="feature-icon2 mb-3"><i class="bi bi-gear-wide-connected fs-1 text-brand"></i></div>
            <h3 class="h5 fw-bold mb-2">Innovación</h3>
            <p class="text-muted mb-0">Mejoramos procesos y experiencia con tecnología.</p>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ==========================================================
       EQUIPO / ESTRUCTURA (cards + CTA director)
  =========================================================== -->
  <section class="section section-soft">
    <div class="container">
      <div class="row g-4 align-items-stretch">

        <div class="col-lg-7 reveal">
          <div class="card card-3d p-4 p-lg-5 h-100 tilt">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="icon-3d">
                <i class="bi bi-diagram-3"></i>
              </div>
              <div>
                <h2 class="h4 fw-black mb-1">Estructura organizativa</h2>
                <div class="text-muted small">Áreas y coordinación.</div>
              </div>
            </div>

            <p class="text-muted qs-text">
              Nuestra organización está orientada a la calidad del servicio, el cumplimiento y la mejora continua.
              Esta sección será editable en un futuro panel de administración.
            </p>

            <div class="row g-3 mt-3">
              <div class="col-md-6">
                <div class="pill-stat d-flex align-items-center justify-content-between p-2 rounded bg-light">
                  <span class="fw-bold text-dark">Atención al cliente</span>
                  <span class="text-muted small">Soporte</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="pill-stat d-flex align-items-center justify-content-between p-2 rounded bg-light">
                  <span class="fw-bold text-dark">Siniestros</span>
                  <span class="text-muted small">Gestión</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="pill-stat d-flex align-items-center justify-content-between p-2 rounded bg-light">
                  <span class="fw-bold text-dark">Comercial</span>
                  <span class="text-muted small">Ventas</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="pill-stat d-flex align-items-center justify-content-between p-2 rounded bg-light">
                  <span class="fw-bold text-dark">Cumplimiento</span>
                  <span class="text-muted small">Control</span>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-5 reveal">
          <div class="card card-3d p-4 p-lg-5 h-100 tilt">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="icon-3d">
                <i class="bi bi-person-badge"></i>
              </div>
              <div>
                <h2 class="h4 fw-black mb-1">Mensaje del Director</h2>
                <div class="text-muted small">Visión y compromiso.</div>
              </div>
            </div>

            <p class="text-muted qs-text">
              Conoce el mensaje institucional del Director General y la visión estratégica de la compañía.
            </p>

            <a class="btn btn-brand btn-lg px-4 w-100 mt-auto" href="<?= url('pages/mensaje-director.php') ?>">
              <i class="bi bi-arrow-right-circle"></i> Ver mensaje completo
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