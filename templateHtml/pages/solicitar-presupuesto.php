<?php
$pageTitle = "Solicitar presupuesto | GEPETROL SEGUROS";
$pageDesc  = "Solicita un presupuesto de seguro de forma clara y transparente con GEPETROL SEGUROS.";
$pageImg   = "../assets/img/og-default.png";

// Links (modo PHP simple)
$homeUrl  = "index.php"; // temporal fallback
$aboutUrl = "pages/solicitar-presupuesto.php";

// Carga CSS/JS específicos de esta página (los usaremos en head/scripts)
$pageCss = "assets/css/solicitar-presupuesto.css";
$pageJs  = "assets/js/solicitar-presupuesto.js";
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
       HERO (GLOBAL COMPARTIDO)
  =========================================================== -->
    <section class="section section-soft section-page-hero" id="solicitar-presupuesto">
      <div class="container">

        <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 reveal">
          <div>
            <div class="page-hero-badge mb-2">
              <i class="bi bi-calculator"></i>
              Presupuesto
            </div>

            <h1 class="fw-black mb-2">Solicitar presupuesto</h1>

            <p class="text-muted mb-0" style="max-width:68ch">
              Indícanos tus datos y el tipo de seguro que necesitas. Te contactaremos
              con una propuesta clara, detallada y sin compromiso.
            </p>
          </div>
          <nav aria-label="breadcrumb" class="reveal">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a class="link-brand" href="<?= htmlspecialchars($homeUrl) ?>">Inicio</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Solicitar Presupuesto
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </section>
    <!-- ==========================================================
       FORMULARIO DE PRESUPUESTO
  =========================================================== -->
    <section class="section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-8 reveal">

            <form class="card-3d p-4 p-lg-5 quote-form" novalidate>

              <!-- Datos personales -->
              <h2 class="h5 fw-bold mb-3">Datos del solicitante</h2>

              <div class="row g-3 mb-4">
                <div class="col-md-6">
                  <label class="form-label">Nombre completo</label>
                  <input type="text" class="form-control" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label">Teléfono</label>
                  <input type="tel" class="form-control" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label">Correo electrónico</label>
                  <input type="email" class="form-control" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label">Tipo de cliente</label>
                  <select class="form-select" required>
                    <option value="">Seleccionar…</option>
                    <option>Particular</option>
                    <option>Empresa</option>
                  </select>
                </div>
              </div>

              <!-- Tipo de seguro -->
              <h2 class="h5 fw-bold mb-3">Tipo de seguro</h2>

              <div class="row g-3 mb-4">
                <div class="col-md-6">
                  <label class="form-label">Producto</label>
                  <select class="form-select" required>
                    <option value="">Seleccionar…</option>
                    <option>Seguro automóvil</option>
                    <option>Seguro médico</option>
                    <option>Seguro accidentes</option>
                    <option>Multirriesgo</option>
                    <option>Responsabilidad civil</option>
                    <option>Otro</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label class="form-label">Urgencia</label>
                  <select class="form-select">
                    <option>Normal</option>
                    <option>Alta</option>
                  </select>
                </div>
              </div>

              <!-- Mensaje -->
              <div class="mb-4">
                <label class="form-label">Mensaje</label>
                <textarea
                  class="form-control"
                  rows="4"
                  placeholder="Describe brevemente tu necesidad…"></textarea>
              </div>

              <!-- Aviso -->
              <div class="form-hint mb-4">
                <i class="bi bi-info-circle"></i>
                Este formulario no genera ningún compromiso. Un asesor se pondrá en contacto contigo.
              </div>

              <!-- Botón -->
              <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-brand btn-lg px-5">
                  <i class="bi bi-send"></i> Enviar solicitud
                </button>
              </div>

            </form>

          </div>
        </div>

      </div>
    </section>

  </main>

  <?php include __DIR__ . "/../partials/footer.php"; ?>
  <?php include __DIR__ . "/../partials/scripts.php"; ?>
  <script src="<?= $pageJs ?>"></script>

</body>

</html>