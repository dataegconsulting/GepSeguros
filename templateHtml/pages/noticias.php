
<?php
// ===============================
// Page meta
// ===============================
$pageTitle = "Noticias | GEPETROL SEGUROS";
$pageDesc  = "Actualidad, comunicados y noticias relevantes de GEPETROL SEGUROS.";
$pageImg   = "img/og-noticias.png";

// Carga CSS/JS específicos de esta página (los usaremos en head/scripts)
$pageCss = [];
$pageJs  = [];
?>
<!doctype html>
<html lang="es">

<head>
  <?php include __DIR__ . "/../partials/head.php"; ?>

  <!-- Page-only CSS -->
  <?php if (!empty($pageCss)): ?>
    <link rel="stylesheet" href="<?= htmlspecialchars($pageCss) ?>">
  <?php endif; ?>
</head>

<body>

  <?php include __DIR__ . "/../partials/topbar.php"; ?>
  <?php include __DIR__ . "/../partials/header.php"; ?>

  <main id="main-content">

    <!-- ==========================================================
         HERO / BREADCRUMB (COMPARTIDO)
    =========================================================== -->
    <section class="section section-soft section-page-hero" id="noticias">
      <div class="container">

        <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 reveal">
          <div>
            <div class="page-hero-badge mb-2">
              <i class="bi bi-newspaper"></i>
              Actualidad
            </div>

            <h1 class="page-title fw-black mb-2">Noticias y Comunicados</h1>

            <p class="page-lead text-muted mb-0">
              Información institucional, novedades y comunicados oficiales de GEPETROL SEGUROS.
            </p>
          </div>

          <nav aria-label="breadcrumb" class="reveal">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a class="link-brand" href="<?= url('index.php') ?>">Inicio</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Noticias
              </li>
            </ol>
          </nav>
        </div>

      </div>
    </section>

    <!-- ==========================================================
         LISTADO DE NOTICIAS
    =========================================================== -->
    <section class="section">
      <div class="container">

        <div class="row g-4">

          <!-- NOTICIA -->
          <div class="col-lg-4 reveal">
            <article class="card card-3d h-100 tilt">
              <div class="position-relative overflow-hidden rounded-top">
                <img
                  class="img-fluid w-100 object-fit-cover"
                  style="height: 200px;"
                  src="<?= asset('img/hero/seguro-auto.jpg') ?>"
                  alt="GEPETROL SEGUROS lanza nueva plataforma de cotización"
                  loading="lazy"
                />
                <span class="position-absolute top-0 end-0 m-3 badge bg-brand shadow-sm">Comunicado</span>
              </div>

              <div class="card-body p-4 d-flex flex-column">
                <div class="text-muted small mb-2 d-flex align-items-center gap-2">
                  <i class="bi bi-calendar3 text-brand"></i>
                  12 de marzo de 2025
                </div>

                <h3 class="h5 fw-bold mb-3">
                  Nueva plataforma digital de cotización
                </h3>

                <p class="text-muted mb-4 flex-grow-1">
                  GEPETROL SEGUROS presenta su nueva aplicación de cotización
                  de pólizas con desglose transparente e IVA incluido.
                </p>

                <a href="<?= url('pages/single.php?slug=nueva-plataforma') ?>" class="btn btn-outline-brand btn-sm w-100 stretched-link">
                  Leer más <i class="bi bi-arrow-right ms-1"></i>
                </a>
              </div>
            </article>
          </div>

          <!-- NOTICIA -->
          <div class="col-lg-4 reveal">
            <article class="card card-3d h-100 tilt">
               <div class="position-relative overflow-hidden rounded-top">
                <img
                  class="img-fluid w-100 object-fit-cover"
                  style="height: 200px;"
                  src="<?= asset('img/hero/seguro-auto.png') ?>"
                  alt="Campaña de concienciación de seguros"
                  loading="lazy"
                />
                <span class="position-absolute top-0 end-0 m-3 badge bg-dark shadow-sm">Institucional</span>
              </div>

              <div class="card-body p-4 d-flex flex-column">
                <div class="text-muted small mb-2 d-flex align-items-center gap-2">
                  <i class="bi bi-calendar3 text-brand"></i>
                  3 de febrero de 2025
                </div>

                <h3 class="h5 fw-bold mb-3">
                  Campaña de concienciación aseguradora
                </h3>

                <p class="text-muted mb-4 flex-grow-1">
                  Iniciativa institucional para promover la cultura del seguro
                  en familias y pequeñas empresas.
                </p>

                <a href="<?= url('pages/single.php?slug=concienciacion') ?>" class="btn btn-outline-brand btn-sm w-100 stretched-link">
                  Leer más <i class="bi bi-arrow-right ms-1"></i>
                </a>
              </div>
            </article>
          </div>

          <!-- NOTICIA -->
          <div class="col-lg-4 reveal">
            <article class="card card-3d h-100 tilt">
               <div class="position-relative overflow-hidden rounded-top">
                <img
                   class="img-fluid w-100 object-fit-cover"
                   style="height: 200px;"
                  src="<?= asset('img/hero/seguro-escolar.png') ?>"
                  alt="Alianzas estratégicas GEPETROL SEGUROS"
                  loading="lazy"
                />
                <span class="position-absolute top-0 end-0 m-3 badge bg-info text-dark shadow-sm">Alianzas</span>
              </div>

               <div class="card-body p-4 d-flex flex-column">
                <div class="text-muted small mb-2 d-flex align-items-center gap-2">
                  <i class="bi bi-calendar3 text-brand"></i>
                  20 de enero de 2025
                </div>

                <h3 class="h5 fw-bold mb-3">
                  Nuevas alianzas estratégicas
                </h3>

                <p class="text-muted mb-4 flex-grow-1">
                  GEPETROL SEGUROS refuerza su red de colaboradores
                  para mejorar la atención al cliente.
                </p>

                <a href="<?= url('pages/single.php?slug=alianzas') ?>" class="btn btn-outline-brand btn-sm w-100 stretched-link">
                  Leer más <i class="bi bi-arrow-right ms-1"></i>
                </a>
              </div>
            </article>
          </div>

        </div>

      </div>
    </section>

    <!-- ==========================================================
         CTA FINAL
    =========================================================== -->
    <section class="section section-soft">
      <div class="container">
        <div class="card card-3d p-4 p-lg-5 reveal tilt text-center">
          <h2 class="fw-black mb-2">¿Quieres estar informado?</h2>
          <p class="text-muted mb-3">
            Sigue nuestras novedades y conoce nuestras soluciones aseguradoras.
          </p>

          <a class="btn btn-brand btn-lg px-4" href="<?= url('index.php') ?>">
            <i class="bi bi-arrow-left"></i> Volver al inicio
          </a>
        </div>
      </div>
    </section>

  </main>

  <?php include __DIR__ . "/../partials/footer.php"; ?>
  <?php include __DIR__ . "/../partials/scripts.php"; ?>

</body>
</html>