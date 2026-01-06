
<?php
$pageTitle = "Seguros para Empresas | GEPETROL SEGUROS";
$pageDesc  = "Soluciones aseguradoras para empresas: RC, daños globales, salud grupo, obras, maquinaria y coberturas especiales.";
$pageImg   = "img/og-cover.png";

// Links (modo PHP simple)
// $homeUrl  = "/PUBLIC/index.php"; // Ya no se usa variable manual
// $aboutUrl = "/PUBLIC/pages/empresas.php";  

// Carga CSS/JS específicos de esta página (los usaremos en head/scripts)
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
       HERO (GLOBAL)
  =========================================================== -->
  <section class="section section-soft section-page-hero" id="empresas">
    <div class="container">
       <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 reveal">
          <div>
            <div class="page-hero-badge mb-2">
              <i class="bi bi-briefcase"></i>
              Productos • Empresas
            </div>

            <h1 class="page-title fw-black mb-2">Seguros para Empresas</h1>

            <p class="page-lead text-muted mb-0">
              Coberturas diseñadas para proteger tu actividad, tu equipo, tus obras y tu responsabilidad,
              con una gestión clara y profesional.
            </p>
       </div>
          <nav aria-label="breadcrumb" class="reveal">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a class="link-brand" href="<?= url('index.php') ?>">Inicio</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Empresas
              </li>
            </ol>
          </nav>
        </div>
    </div>
  </section>

  <!-- ==========================================================
       LISTADO EMPRESAS
  =========================================================== -->
  <section class="section">
    <div class="container">
      <div class="row g-4">

        <div class="col-md-6 col-lg-4 reveal">
          <article class="card card-3d p-4 h-100 tilt">
            <div class="feature-icon2 mb-3"><i class="bi bi-shield-check fs-1 text-brand"></i></div>
            <h3 class="h5 fw-bold mb-2">RC Jefe de Empresa</h3>
            <p class="text-muted mb-4">Responsabilidad civil profesional y cobertura de daños a terceros.</p>
            <div class="mt-auto">
                 <span class="badge bg-light text-muted border">Próximamente</span>
            </div>
          </article>
        </div>

        <div class="col-md-6 col-lg-4 reveal">
          <article class="card card-3d p-4 h-100 tilt">
            <div class="feature-icon2 mb-3"><i class="bi bi-building-check fs-1 text-brand"></i></div>
            <h3 class="h5 fw-bold mb-2">Daños Globales</h3>
            <p class="text-muted mb-4">Protección integral de activos, instalaciones y patrimonio.</p>
            <div class="mt-auto">
                 <span class="badge bg-light text-muted border">Próximamente</span>
            </div>
          </article>
        </div>

        <div class="col-md-6 col-lg-4 reveal">
          <article class="card card-3d p-4 h-100 tilt">
            <div class="feature-icon2 mb-3"><i class="bi bi-hospital fs-1 text-brand"></i></div>
            <h3 class="h5 fw-bold mb-2">Seguro Médico Grupo</h3>
            <p class="text-muted mb-4">Cobertura sanitaria para equipos de trabajo y empleados.</p>
            <div class="mt-auto">
                 <span class="badge bg-light text-muted border">Próximamente</span>
            </div>
          </article>
        </div>

        <div class="col-md-6 col-lg-4 reveal">
          <article class="card card-3d p-4 h-100 tilt">
            <div class="feature-icon2 mb-3"><i class="bi bi-mortarboard fs-1 text-brand"></i></div>
            <h3 class="h5 fw-bold mb-2">RC Escolar</h3>
            <p class="text-muted mb-4">Protección para centros educativos, alumnos y actividades.</p>
            <div class="mt-auto">
                 <span class="badge bg-light text-muted border">Próximamente</span>
            </div>
          </article>
        </div>

        <div class="col-md-6 col-lg-4 reveal">
          <article class="card card-3d p-4 h-100 tilt">
            <div class="feature-icon2 mb-3"><i class="bi bi-briefcase-fill fs-1 text-brand"></i></div>
            <h3 class="h5 fw-bold mb-2">Multirriesgo Profesional</h3>
            <p class="text-muted mb-4">Cobertura de riesgos operativos y comerciales en un solo paquete.</p>
            <div class="mt-auto">
                 <span class="badge bg-light text-muted border">Próximamente</span>
            </div>
          </article>
        </div>

        <div class="col-md-6 col-lg-4 reveal">
          <article class="card card-3d p-4 h-100 tilt">
            <div class="feature-icon2 mb-3"><i class="bi bi-gear fs-1 text-brand"></i></div>
            <h3 class="h5 fw-bold mb-2">Rotura de Maquinaria</h3>
            <p class="text-muted mb-4">Equipos críticos protegidos ante daños, fallos y roturas.</p>
            <div class="mt-auto">
                 <span class="badge bg-light text-muted border">Próximamente</span>
            </div>
          </article>
        </div>

        <div class="col-md-6 col-lg-4 reveal">
          <article class="card card-3d p-4 h-100 tilt">
            <div class="feature-icon2 mb-3"><i class="bi bi-cone-striped fs-1 text-brand"></i></div>
            <h3 class="h5 fw-bold mb-2">Todo Riesgo Construcción</h3>
            <p class="text-muted mb-4">Protección para obras, materiales, equipos y responsabilidad.</p>
            <div class="mt-auto">
                 <span class="badge bg-light text-muted border">Próximamente</span>
            </div>
          </article>
        </div>

        <div class="col-md-6 col-lg-4 reveal">
          <article class="card card-3d p-4 h-100 tilt">
            <div class="feature-icon2 mb-3"><i class="bi bi-airplane fs-1 text-brand"></i></div>
            <h3 class="h5 fw-bold mb-2">Aeronaves / Barcos</h3>
            <p class="text-muted mb-4">Coberturas especiales para transporte aéreo y marítimo.</p>
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
  =========================================================== -->
  <section class="section section-soft">
    <div class="container">
      <div class="card card-3d p-4 p-lg-5 reveal tilt">
        <div class="row align-items-center g-3">
          <div class="col-lg-8">
            <h2 class="fw-black mb-2">¿Necesitas una propuesta empresarial?</h2>
            <p class="text-muted mb-0">
              Te preparamos opciones claras según tu sector, tamaño y actividad.
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