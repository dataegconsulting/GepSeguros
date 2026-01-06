
<?php
$pageTitle = "Seguros para Particulares | GEPETROL SEGUROS";
$pageDesc  = "Soluciones aseguradoras para particulares: automóvil, salud, accidentes y protección personal.";
$pageImg   = "img/og-cover.png";

// Carga CSS/JS específicos de esta página
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
     HERO / BREADCRUMB (GLOBAL)
========================================================== -->
    <section class="section section-soft section-page-hero" id="particulares">
      <div class="container">
        <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 reveal">
          <div>
            <div class="page-hero-badge mb-2">
              <i class="bi bi-person"></i>
              Productos • Particulares
            </div>

            <h1 class="page-title fw-black mb-2">Seguros para Particulares</h1>

            <p class="page-lead text-muted mb-0">
              Protección diseñada para ti y tu familia, con coberturas claras,
              procesos transparentes y atención profesional.
            </p>
          </div>
          <nav aria-label="breadcrumb" class="reveal">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a class="link-brand" href="<?= url('index.php') ?>">Inicio</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Particulares
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </section>

    <!-- ==========================================================
     LISTADO DE PRODUCTOS PARTICULARES
========================================================== -->
    <section class="section">
      <div class="container">

        <div class="row g-4">

          <!-- Seguro Automóvil -->
          <div class="col-md-6 col-lg-4 reveal">
            <article class="card card-3d p-4 h-100 tilt">
              <div class="feature-icon2 mb-3">
                <i class="bi bi-car-front fs-1 text-brand"></i>
              </div>
              <h3 class="h5 fw-bold mb-2">Seguro Automóvil</h3>
              <p class="text-muted mb-4">
                Cobertura completa para tu vehículo. Responsabilidad civil, daños propios y asistencia en carretera.
              </p>
              <a href="<?= url('pages/seguro-automovil.php') ?>" class="btn btn-brand btn-sm w-100 stretched-link">
                Ver detalles <i class="bi bi-arrow-right ms-1"></i>
              </a>
            </article>
          </div>

          <!-- Seguro Accidente -->
          <div class="col-md-6 col-lg-4 reveal">
            <article class="card card-3d p-4 h-100 tilt">
              <div class="feature-icon2 mb-3">
                <i class="bi bi-exclamation-triangle fs-1 text-brand"></i>
              </div>
              <h3 class="h5 fw-bold mb-2">Seguro Accidentes</h3>
              <p class="text-muted mb-4">
                Protección económica ante imprevistos. Coberturas por fallecimiento e invalidez.
              </p>
              <div class="mt-auto">
                 <span class="badge bg-light text-muted border">Próximamente</span>
              </div>
            </article>
          </div>

          <!-- Seguro Médico -->
          <div class="col-md-6 col-lg-4 reveal">
            <article class="card card-3d p-4 h-100 tilt">
              <div class="feature-icon2 mb-3">
                <i class="bi bi-heart-pulse fs-1 text-brand"></i>
              </div>
              <h3 class="h5 fw-bold mb-2">Seguro Salud</h3>
              <p class="text-muted mb-4">
                Acceso a la mejor atención médica. Planes familiares e individuales adaptados.
              </p>
              <div class="mt-auto">
                 <span class="badge bg-light text-muted border">Próximamente</span>
              </div>
            </article>
          </div>

          <!-- Multirriesgo Hogar -->
          <div class="col-md-6 col-lg-4 reveal">
            <article class="card card-3d p-4 h-100 tilt">
              <div class="feature-icon2 mb-3">
                <i class="bi bi-house fs-1 text-brand"></i>
              </div>
              <h3 class="h5 fw-bold mb-2">Multirriesgo Hogar</h3>
              <p class="text-muted mb-4">
                Protege tu vivienda y tus bienes contra incendios, robos y daños por agua.
              </p>
              <div class="mt-auto">
                 <span class="badge bg-light text-muted border">Próximamente</span>
              </div>
            </article>
          </div>

           <!-- Cuenta Protegida -->
          <div class="col-md-6 col-lg-4 reveal">
            <article class="card card-3d p-4 h-100 tilt">
              <div class="feature-icon2 mb-3">
                <i class="bi bi-shield-lock fs-1 text-brand"></i>
              </div>
              <h3 class="h5 fw-bold mb-2">Cuenta Protegida</h3>
              <p class="text-muted mb-4">
                Seguridad adicional para tus finanzas y transacciones bancarias.
              </p>
              <div class="mt-auto">
                 <span class="badge bg-light text-muted border">Próximamente</span>
              </div>
            </article>
          </div>
          
           <!-- Viajes -->
           <div class="col-md-6 col-lg-4 reveal">
            <article class="card card-3d p-4 h-100 tilt">
              <div class="feature-icon2 mb-3">
                <i class="bi bi-airplane fs-1 text-brand"></i>
              </div>
              <h3 class="h5 fw-bold mb-2">Viajes</h3>
              <p class="text-muted mb-4">
                Viaja con tranquilidad. Asistencia médica y protección de equipaje en todo el mundo.
              </p>
               <div class="mt-auto">
                 <span class="badge bg-light text-muted border">Próximamente</span>
              </div>
            </article>
          </div>

        </div>

      </div>
    </section>

    <!-- ==========================================================
     CTA FINAL
========================================================== -->
    <section class="section section-soft">
      <div class="container">
        <div class="card card-3d p-4 p-lg-5 reveal tilt">
          <div class="row align-items-center g-3">
            <div class="col-lg-8">
              <h2 class="fw-black mb-2">¿Necesitas asesoramiento?</h2>
              <p class="text-muted mb-0">
                Nuestro equipo comercial está listo para ayudarte a encontrar la mejor cobertura.
              </p>
            </div>
            <div class="col-lg-4 text-lg-end">
              <a class="btn btn-brand btn-lg px-4" href="<?= url('pages/contacto.php') ?>">
                <i class="bi bi-envelope"></i> Contactar ahora
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