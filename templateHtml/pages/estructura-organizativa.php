
<?php
// ==============================
// Page meta
// ==============================
$pageTitle = "Estructura Organizativa | GEPETROL SEGUROS";
$pageDesc  = "Conoce la estructura organizativa de GEPETROL SEGUROS: áreas, departamentos y flujo de atención.";
$pageImg   = "img/og-cover.png"; 

// Carga CSS/JS específicos de esta página (los usaremos en head/scripts)
$pageCss  = []; 
$pageJs   = [];
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
    =========================================================== -->
    <section class="section section-soft section-page-hero" id="estructura-organizativa">
      <div class="container">

        <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 reveal">
          <div>
            <div class="page-hero-badge mb-2">
              <i class="bi bi-diagram-3"></i>
              Quiénes somos • Organización
            </div>

            <h1 class="page-title fw-black mb-2">
              Estructura organizativa
            </h1>

            <p class="page-lead text-muted mb-0">
              Una organización clara para ofrecer atención eficiente, control de calidad y soporte ágil
              a particulares y empresas.
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
                Estructura organizativa
              </li>
            </ol>
          </nav>
        </div>

      </div>
    </section>

    <!-- ==========================================================
         INTRO + KPIs
    =========================================================== -->
    <section class="section">
      <div class="container">

        <div class="row g-4 align-items-stretch">
          <div class="col-lg-8 reveal">
            <div class="card card-3d p-4 p-lg-5 h-100 tilt">
              <h2 class="h4 fw-black mb-2">Cómo trabajamos</h2>
              <p class="text-muted mb-4 org-lead">
                Nuestra estructura está diseñada para asegurar una atención cercana al cliente,
                una gestión técnica sólida, y una operación eficiente con enfoque en cumplimiento.
              </p>

              <div class="row g-3">
                <div class="col-md-4">
                  <div class="pill-stat d-flex align-items-center justify-content-between p-2 rounded bg-light border">
                    <span class="fw-bold text-dark">Enfoque</span>
                    <span class="text-muted small">Cliente</span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="pill-stat d-flex align-items-center justify-content-between p-2 rounded bg-light border">
                    <span class="fw-bold text-dark">Modelo</span>
                    <span class="text-muted small">Por áreas</span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="pill-stat d-flex align-items-center justify-content-between p-2 rounded bg-light border">
                    <span class="fw-bold text-dark">Objetivo</span>
                    <span class="text-muted small">Eficiencia</span>
                  </div>
                </div>
              </div>

              <hr class="my-4">

              <div class="content-pro text-muted">
                <p>
                  La organización se divide en unidades funcionales que colaboran en el ciclo completo del seguro:
                  <strong>atención</strong>, <strong>cotización</strong>, <strong>emisión</strong>, <strong>gestión</strong> y <strong>soporte</strong>.
                </p>
                <p class="mb-0">
                  En un futuro, este contenido podrá ser editable por secciones (introducción, áreas, responsables, etc.).
                  Por ahora, dejamos el diseño listo y limpio.
                </p>
              </div>
            </div>
          </div>

          <aside class="col-lg-4 reveal">
            <div class="card card-3d p-4 h-100 tilt">
              <div class="d-flex align-items-center gap-3 mb-3">
                <div class="icon-3d">
                  <i class="bi bi-shield-check"></i>
                </div>
                <div>
                  <div class="fw-bold">Gobernanza</div>
                  <div class="text-muted small">Calidad • Cumplimiento • Control</div>
                </div>
              </div>

              <div class="org-mini-list d-flex flex-column gap-3">
                <div class="mini-card d-flex align-items-center gap-3 p-3 rounded border bg-light">
                  <i class="bi bi-headset fs-4 text-brand"></i>
                  <div>
                    <div class="fw-bold text-dark">Atención al cliente</div>
                    <div class="text-muted small">Canales y seguimiento</div>
                  </div>
                </div>

                <div class="mini-card d-flex align-items-center gap-3 p-3 rounded border bg-light">
                  <i class="bi bi-calculator fs-4 text-brand"></i>
                  <div>
                    <div class="fw-bold text-dark">Suscripción & Tarifas</div>
                    <div class="text-muted small">Criterios y validación técnica</div>
                  </div>
                </div>

                <div class="mini-card d-flex align-items-center gap-3 p-3 rounded border bg-light">
                  <i class="bi bi-file-earmark-text fs-4 text-brand"></i>
                  <div>
                    <div class="fw-bold text-dark">Emisión de pólizas</div>
                    <div class="text-muted small">Documentación y control</div>
                  </div>
                </div>
              </div>

            </div>
          </aside>
        </div>

      </div>
    </section>

    <!-- ==========================================================
         ORGANIGRAMA (cards)
    =========================================================== -->
    <section class="section section-soft">
      <div class="container">

        <div class="section-title reveal">
          <h2 class="fw-black mb-2">Áreas principales</h2>
          <p class="text-muted mb-0" style="max-width: 72ch;">
            Una visión estructurada de las áreas más importantes. Más adelante se puede convertir en organigrama real con foto y responsables.
          </p>
        </div>

        <div class="row g-4">
          <!-- Dirección General -->
          <div class="col-md-6 col-xl-4 reveal">
            <div class="card card-3d p-4 h-100 tilt">
              <div class="d-flex align-items-start justify-content-between gap-3">
                <div class="icon-3d-sm">
                  <i class="bi bi-person-badge"></i>
                </div>
                <span class="badge bg-light text-dark border">Nivel 1</span>
              </div>
              <h3 class="h5 fw-black mt-3 mb-2">Dirección General</h3>
              <p class="text-muted mb-3">
                Liderazgo institucional, estrategia y supervisión general de operaciones.
              </p>
              <ul class="org-list list-unstyled small text-muted">
                <li class="mb-1"><i class="bi bi-check2-circle text-brand me-1"></i> Planificación & visión</li>
                <li class="mb-1"><i class="bi bi-check2-circle text-brand me-1"></i> Supervisión integral</li>
                <li class="mb-1"><i class="bi bi-check2-circle text-brand me-1"></i> Relación institucional</li>
              </ul>
            </div>
          </div>

          <!-- Comercial -->
          <div class="col-md-6 col-xl-4 reveal">
            <div class="card card-3d p-4 h-100 tilt">
              <div class="d-flex align-items-start justify-content-between gap-3">
                <div class="icon-3d-sm">
                  <i class="bi bi-graph-up-arrow"></i>
                </div>
                <span class="badge bg-light text-dark border">Nivel 2</span>
              </div>
              <h3 class="h5 fw-black mt-3 mb-2">Área Comercial</h3>
              <p class="text-muted mb-3">
                Captación, asesoramiento, seguimiento y soporte en solicitudes de clientes.
              </p>
              <ul class="org-list list-unstyled small text-muted">
                <li class="mb-1"><i class="bi bi-check2-circle text-brand me-1"></i> Ventas & asesoría</li>
                <li class="mb-1"><i class="bi bi-check2-circle text-brand me-1"></i> Atención y seguimiento</li>
                <li class="mb-1"><i class="bi bi-check2-circle text-brand me-1"></i> Postventa</li>
              </ul>
            </div>
          </div>

          <!-- Técnica -->
          <div class="col-md-6 col-xl-4 reveal">
            <div class="card card-3d p-4 h-100 tilt">
              <div class="d-flex align-items-start justify-content-between gap-3">
                <div class="icon-3d-sm">
                  <i class="bi bi-sliders"></i>
                </div>
                <span class="badge bg-light text-dark border">Nivel 2</span>
              </div>
              <h3 class="h5 fw-black mt-3 mb-2">Área Técnica</h3>
              <p class="text-muted mb-3">
                Suscripción, validación de riesgos, cálculo y estructura de tarifas.
              </p>
              <ul class="org-list list-unstyled small text-muted">
                <li class="mb-1"><i class="bi bi-check2-circle text-brand me-1"></i> Suscripción & riesgo</li>
                <li class="mb-1"><i class="bi bi-check2-circle text-brand me-1"></i> Tarifas & validaciones</li>
                <li class="mb-1"><i class="bi bi-check2-circle text-brand me-1"></i> Reglas de producto</li>
              </ul>
            </div>
          </div>

          <!-- Siniestros -->
          <div class="col-md-6 col-xl-4 reveal">
            <div class="card card-3d p-4 h-100 tilt">
              <div class="d-flex align-items-start justify-content-between gap-3">
                <div class="icon-3d-sm">
                  <i class="bi bi-exclamation-triangle"></i>
                </div>
                <span class="badge bg-light text-dark border">Nivel 3</span>
              </div>
              <h3 class="h5 fw-black mt-3 mb-2">Siniestros</h3>
              <p class="text-muted mb-3">
                Gestión de reclamaciones, seguimiento de expedientes y comunicación con el cliente.
              </p>
              <ul class="org-list list-unstyled small text-muted">
                <li class="mb-1"><i class="bi bi-check2-circle text-brand me-1"></i> Registro & seguimiento</li>
                <li class="mb-1"><i class="bi bi-check2-circle text-brand me-1"></i> Comunicación & cierre</li>
                <li class="mb-1"><i class="bi bi-check2-circle text-brand me-1"></i> Control documental</li>
              </ul>
            </div>
          </div>

          <!-- Administración -->
          <div class="col-md-6 col-xl-4 reveal">
            <div class="card card-3d p-4 h-100 tilt">
              <div class="d-flex align-items-start justify-content-between gap-3">
                <div class="icon-3d-sm">
                  <i class="bi bi-journal-check"></i>
                </div>
                <span class="badge bg-light text-dark border">Nivel 3</span>
              </div>
              <h3 class="h5 fw-black mt-3 mb-2">Administración</h3>
              <p class="text-muted mb-3">
                Gestión interna, archivo, control de procesos y soporte operativo.
              </p>
              <ul class="org-list list-unstyled small text-muted">
                <li class="mb-1"><i class="bi bi-check2-circle text-brand me-1"></i> Archivo & control</li>
                <li class="mb-1"><i class="bi bi-check2-circle text-brand me-1"></i> Soporte operativo</li>
                <li class="mb-1"><i class="bi bi-check2-circle text-brand me-1"></i> Coordinación interna</li>
              </ul>
            </div>
          </div>

          <!-- Cumplimiento -->
          <div class="col-md-6 col-xl-4 reveal">
            <div class="card card-3d p-4 h-100 tilt">
              <div class="d-flex align-items-start justify-content-between gap-3">
                <div class="icon-3d-sm">
                  <i class="bi bi-shield-lock"></i>
                </div>
                <span class="badge bg-brand text-white">Transversal</span>
              </div>
              <h3 class="h5 fw-black mt-3 mb-2">Cumplimiento</h3>
              <p class="text-muted mb-3">
                Buenas prácticas, revisión de procesos y cultura de seguridad y transparencia.
              </p>
              <ul class="org-list list-unstyled small text-muted">
                <li class="mb-1"><i class="bi bi-check2-circle text-brand me-1"></i> Auditoría interna</li>
                <li class="mb-1"><i class="bi bi-check2-circle text-brand me-1"></i> Controles & políticas</li>
                <li class="mb-1"><i class="bi bi-check2-circle text-brand me-1"></i> Mejora continua</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- ==========================================================
         CTA FINAL
    =========================================================== -->
    <section class="section">
      <div class="container">
        <div class="card card-3d p-4 p-lg-5 reveal tilt">
          <div class="row align-items-center g-3">
            <div class="col-lg-8">
              <h2 class="fw-black mb-2">¿Necesitas ayuda o un presupuesto?</h2>
              <p class="text-muted mb-0">
                Escríbenos y te orientamos con claridad sobre productos, coberturas y documentación.
              </p>
            </div>
            <div class="col-lg-4 text-lg-end">
              <a class="btn btn-brand btn-lg px-4" href="<?= url('pages/solicitar-presupuesto.php') ?>">
                <i class="bi bi-send"></i> Solicitar presupuesto
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