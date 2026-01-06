
<?php
// ==============================
// Page meta
// ==============================
$pageTitle = "Trabaja con nosotros | GEPETROL SEGUROS";
$pageDesc  = "Únete a GEPETROL SEGUROS. Descubre oportunidades profesionales y envíanos tu candidatura.";
$pageImg   = "img/og-cover.png";
$pageUrl   = "";

// CSS/JS específicos de esta página
$pageCss  = [];
// $pageJs   = []; 
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
    <section class="section section-soft section-page-hero" id="trabaja-con-nosotros">
      <div class="container">

        <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 reveal">
          <div>
            <div class="page-hero-badge mb-2">
              <i class="bi bi-briefcase"></i>
              Quiénes somos • Talento
            </div>

            <h1 class="page-title fw-black mb-2">
              Trabaja con nosotros
            </h1>

            <p class="page-lead text-muted mb-0">
              Queremos sumar talento comprometido, profesional y con ganas de construir un servicio moderno y transparente.
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
                Trabaja con nosotros
              </li>
            </ol>
          </nav>
        </div>

      </div>
    </section>

    <!-- ==========================================================
         INTRO + BLOQUES
    =========================================================== -->
    <section class="section">
      <div class="container">

        <div class="row g-4 align-items-stretch">

          <!-- Col izquierda -->
          <div class="col-lg-8 reveal">
            <article class="card card-3d p-4 p-lg-5 h-100 tilt">
              <h2 class="h4 fw-black mb-2">¿Por qué unirte?</h2>
              <p class="text-muted jobs-lead mb-4">
                En GEPETROL SEGUROS impulsamos un entorno de trabajo profesional, con enfoque en calidad,
                transparencia y servicio. Buscamos perfiles con mentalidad de mejora continua.
              </p>

              <div class="row g-3">
                <div class="col-md-6">
                  <div class="mini-card jobs-card p-3 rounded border bg-light d-flex align-items-center gap-3">
                    <i class="bi bi-people fs-3 text-brand"></i>
                    <div>
                      <div class="fw-bold text-dark">Trabajo en equipo</div>
                      <div class="text-muted small">Colaboración y comunicación</div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mini-card jobs-card p-3 rounded border bg-light d-flex align-items-center gap-3">
                    <i class="bi bi-award fs-3 text-brand"></i>
                    <div>
                      <div class="fw-bold text-dark">Cultura profesional</div>
                      <div class="text-muted small">Estándares y buenas prácticas</div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mini-card jobs-card p-3 rounded border bg-light d-flex align-items-center gap-3">
                    <i class="bi bi-shield-check fs-3 text-brand"></i>
                    <div>
                      <div class="fw-bold text-dark">Ética y cumplimiento</div>
                      <div class="text-muted small">Transparencia y responsabilidad</div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mini-card jobs-card p-3 rounded border bg-light d-flex align-items-center gap-3">
                    <i class="bi bi-graph-up-arrow fs-3 text-brand"></i>
                    <div>
                      <div class="fw-bold text-dark">Crecimiento</div>
                      <div class="text-muted small">Aprendizaje y evolución</div>
                    </div>
                  </div>
                </div>
              </div>

              <hr class="my-4">

              <div class="content-pro text-muted">
                <p>
                  En esta fase (plantilla PHP), el objetivo es validar diseño y navegación.
                  Más adelante, podrás convertir este contenido en dinámico (backend propio).
                </p>
                <div class="alert alert-light border-0 d-flex gap-2 text-muted small mt-3">
                    <i class="bi bi-info-circle flex-shrink-0 mt-1"></i>
                    <div>
                       Si quieres, podemos añadir también un bloque de “Vacantes abiertas” (cards) y un formulario más complejo.
                    </div>
                </div>
              </div>
            </article>
          </div>

          <!-- Aside derecha -->
          <aside class="col-lg-4 reveal">
            <div class="card card-3d p-4 h-100 tilt">

              <div class="d-flex align-items-center gap-3 mb-3">
                <div class="icon-3d">
                  <i class="bi bi-send"></i>
                </div>
                <div>
                  <div class="fw-bold">Enviar candidatura</div>
                  <div class="text-muted small">CV + datos básicos</div>
                </div>
              </div>

              <!-- FORM (por ahora sin backend; listo para conectar luego) -->
              <form id="jobsForm" class="needs-validation" novalidate>

                <div class="mb-3">
                  <label class="form-label fw-bold">Nombre completo</label>
                  <input name="fullName" type="text" class="form-control" required minlength="3" placeholder="Ej: Juan Mba" />
                  <div class="invalid-feedback">Introduce tu nombre completo.</div>
                </div>

                <div class="mb-3">
                  <label class="form-label fw-bold">Email</label>
                  <input name="email" type="email" class="form-control" required placeholder="correo@ejemplo.com" />
                  <div class="invalid-feedback">Introduce un email válido.</div>
                </div>

                <div class="mb-3">
                  <label class="form-label fw-bold">Área de interés</label>
                  <select name="area" class="form-select" required>
                    <option value="" selected disabled>Selecciona un área</option>
                    <option>Comercial</option>
                    <option>Técnica / Suscripción</option>
                    <option>Siniestros</option>
                    <option>Administración</option>
                    <option>Atención al cliente</option>
                    <option>IT / Sistemas</option>
                  </select>
                  <div class="invalid-feedback">Selecciona un área.</div>
                </div>

                <div class="mb-3">
                  <label class="form-label fw-bold">Mensaje breve</label>
                  <textarea name="message" class="form-control" rows="3" required minlength="10"
                    placeholder="Cuéntanos en pocas líneas tu perfil..."></textarea>
                  <div class="invalid-feedback">Escribe un mensaje (mínimo 10 caracteres).</div>
                </div>

                <button class="btn btn-brand btn-lg w-100" type="submit">
                  <i class="bi bi-send"></i> Enviar
                </button>

                <div id="jobsStatus" class="form-hint mt-3 small text-muted text-center">
                  <i class="bi bi-info-circle me-1"></i>
                  Este formulario es demo.
                </div>
              </form>

            </div>
          </aside>

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
              <h2 class="fw-black mb-2">¿Prefieres escribirnos directamente?</h2>
              <p class="text-muted mb-0">
                Puedes contactarnos desde la página principal y adjuntar tu solicitud.
              </p>
            </div>
            <div class="col-lg-4 text-lg-end">
              <a class="btn btn-brand btn-lg px-4" href="<?= url('pages/contacto.php') ?>">
                <i class="bi bi-envelope"></i> Contactar
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