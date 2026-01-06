
<?php
require_once __DIR__ . '/../config.php';

$pageTitle = "Contacto | GEPETROL SEGUROS";
$pageDesc  = "Contacta con GEPETROL SEGUROS: teléfono, WhatsApp, dirección, mapa y formulario de contacto.";
$pageImg   = asset('img/og-default.png');

$homeUrl = url('index.php');
// $aboutUrl variable seems unused or redundant, keeping generic logic if needed or removing.

// Carga CSS/JS específicos de esta página (los usaremos en head/scripts)
$pageCss = [];
$pageJs  = [];
 

// Datos (luego en WP será editable, pero aquí es PHP puro)
$companyName = "GEPETROL SEGUROS";
$phoneDisplay = "+240 222 000 000";
$phoneE164 = "240222000000"; // sin + y sin espacios (para tel:)
$whatsAppE164 = "240222000000"; // WhatsApp igual
$email = "info@gepetrol-seguros.com";
$address = "Malabo, Guinea Ecuatorial (Dirección comercial)";
$hours = "Lunes a Viernes: 08:00 – 17:00";

// Mapa (Google Maps embed). Sustituye por tu enlace real.
$mapEmbed = "https://www.google.com/maps?q=Malabo%20Guinea%20Ecuatorial&output=embed";
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
       HERO (compartido)
  =========================================================== -->
    <section class="section section-soft section-page-hero" id="contacto">
      <div class="container">
        <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 reveal">
          <div>
            <div class="page-hero-badge mb-2">
              <i class="bi bi-geo-alt"></i>
              Atención al cliente
            </div>

            <h1 class="page-title fw-black mb-2">Contacto</h1>

            <p class="page-lead text-muted mb-0">
              Estamos para ayudarte. Escríbenos, llámanos o visítanos. Responderemos lo antes posible.
            </p>
          </div>
          <nav aria-label="breadcrumb" class="reveal">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a class="link-brand" href="<?= $homeUrl ?>">Inicio</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Contacto
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </section>

    <!-- ==========================================================
       GRID: INFO + FORM
  =========================================================== -->
    <section class="section">
      <div class="container">
        <div class="row g-4 align-items-stretch">

          <!-- Columna izquierda: tarjetas info -->
          <div class="col-lg-5 reveal">
            <div class="card card-3d p-4 h-100 contact-panel tilt">

              <div class="d-flex align-items-center gap-3 mb-4">
                <div class="icon-3d text-brand fs-2">
                  <i class="bi bi-headset"></i>
                </div>
                <div>
                  <div class="fw-bold h5 mb-0"><?= htmlspecialchars($companyName) ?></div>
                  <div class="text-muted small">Soporte • Información • Presupuestos</div>
                </div>
              </div>

              <div class="contact-cards vstack gap-3">

                <div class="contact-card p-3 rounded bg-light border">
                  <div class="d-flex gap-3">
                    <div class="contact-ico text-brand fs-4"><i class="bi bi-telephone"></i></div>
                    <div class="contact-body flex-grow-1">
                      <div class="fw-bold">Teléfono</div>
                      <div class="text-muted small mb-2"><?= htmlspecialchars($phoneDisplay) ?></div>
                      <div class="contact-actions d-flex gap-2">
                        <a class="btn btn-outline-secondary btn-sm" href="tel:<?= htmlspecialchars($phoneE164) ?>">
                          <i class="bi bi-telephone-outbound"></i> Llamar
                        </a>
                        <button class="btn btn-brand btn-sm" type="button"
                          data-wa="<?= htmlspecialchars($whatsAppE164) ?>"
                          data-company="<?= htmlspecialchars($companyName) ?>">
                          <i class="bi bi-whatsapp"></i> WhatsApp
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="contact-card p-3 rounded bg-light border">
                  <div class="d-flex gap-3">
                    <div class="contact-ico text-brand fs-4"><i class="bi bi-envelope"></i></div>
                    <div class="contact-body flex-grow-1">
                      <div class="fw-bold">Email</div>
                      <div class="text-muted small mb-2"><?= htmlspecialchars($email) ?></div>
                      <div class="contact-actions">
                        <a class="btn btn-outline-secondary btn-sm" href="mailto:<?= htmlspecialchars($email) ?>">
                          <i class="bi bi-send"></i> Enviar correo
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="contact-card p-3 rounded bg-light border">
                  <div class="d-flex gap-3">
                    <div class="contact-ico text-brand fs-4"><i class="bi bi-geo-alt"></i></div>
                    <div class="contact-body flex-grow-1">
                      <div class="fw-bold">Dirección</div>
                      <div class="text-muted small mb-2"><?= htmlspecialchars($address) ?></div>
                      <div class="contact-actions">
                        <a class="btn btn-outline-secondary btn-sm" target="_blank" rel="noopener"
                          href="https://www.google.com/maps/search/?api=1&query=Malabo%2C%20Guinea%20Ecuatorial">
                          <i class="bi bi-map"></i> Ver en Maps
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="contact-card p-3 rounded bg-light border">
                   <div class="d-flex gap-3">
                    <div class="contact-ico text-brand fs-4"><i class="bi bi-clock"></i></div>
                    <div class="contact-body">
                      <div class="fw-bold">Horario</div>
                      <div class="text-muted small"><?= htmlspecialchars($hours) ?></div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="form-hint mt-4 d-flex gap-2 align-items-center text-muted small">
                <i class="bi bi-info-circle text-brand"></i>
                <div>Si deseas cotización, indica el tipo de seguro y tu teléfono para devolverte la llamada.</div>
              </div>

            </div>
          </div>

          <!-- Columna derecha: formulario -->
          <div class="col-lg-7 reveal">
            <div class="card card-3d p-4 p-lg-5 h-100 tilt">
              <h2 class="h4 fw-black mb-2">Envíanos un mensaje</h2>
              <p class="text-muted mb-4">Completa el formulario y te contactaremos pronto.</p>

              <!-- Demo (sin backend). Más adelante lo conectamos a un endpoint -->
              <form id="contactForm" class="needs-validation" novalidate>

                <div class="row g-3">
                  <div class="col-md-6">
                    <label class="form-label fw-bold small text-uppercase text-muted" for="name">Nombre</label>
                    <input class="form-control" id="name" name="name" required minlength="2" placeholder="Tu nombre">
                    <div class="invalid-feedback">Escribe tu nombre (mínimo 2 caracteres).</div>
                  </div>

                  <div class="col-md-6">
                    <label class="form-label fw-bold small text-uppercase text-muted" for="phone">Teléfono</label>
                    <input class="form-control" id="phone" name="phone" required placeholder="+240 ...">
                    <div class="invalid-feedback">Indica un teléfono válido.</div>
                  </div>

                  <div class="col-md-6">
                    <label class="form-label fw-bold small text-uppercase text-muted" for="email">Email</label>
                    <input class="form-control" id="email" name="email" type="email" required placeholder="tu@email.com">
                    <div class="invalid-feedback">Indica un email válido.</div>
                  </div>

                  <div class="col-md-6">
                    <label class="form-label fw-bold small text-uppercase text-muted" for="topic">Asunto</label>
                    <select class="form-select" id="topic" name="topic" required>
                      <option value="" selected disabled>Selecciona…</option>
                      <option>Solicitud de presupuesto</option>
                      <option>Información general</option>
                      <option>Soporte / Incidencia</option>
                      <option>Reclamación</option>
                    </select>
                    <div class="invalid-feedback">Selecciona un asunto.</div>
                  </div>

                  <div class="col-12">
                    <label class="form-label fw-bold small text-uppercase text-muted" for="message">Mensaje</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required minlength="10"
                      placeholder="Cuéntanos qué necesitas..."></textarea>
                    <div class="invalid-feedback">Escribe un mensaje (mínimo 10 caracteres).</div>
                  </div>

                  <div class="col-12">
                    <div class="d-flex flex-wrap gap-2 align-items-center mt-2">
                      <button class="btn btn-brand btn-lg px-4" type="submit">
                        <i class="bi bi-send"></i> Enviar
                      </button>
                      <span id="contactStatus" class="text-muted small"></span>
                    </div>
                  </div>
                </div>

              </form>

            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ==========================================================
       MAPA
  =========================================================== -->
    <section class="section section-soft">
      <div class="container">
        <div class="card card-3d p-3 p-lg-4 reveal contact-map tilt">
          <div class="row g-3 align-items-center mb-3">
            <div class="col-lg-8">
              <h2 class="h5 fw-black mb-1">Cómo llegar</h2>
              <p class="text-muted mb-0">Ubicación aproximada. Sustituimos el mapa por tu dirección exacta cuando la confirmes.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
              <a class="btn btn-outline-secondary" target="_blank" rel="noopener"
                href="https://www.google.com/maps/search/?api=1&query=Malabo%2C%20Guinea%20Ecuatorial">
                <i class="bi bi-map"></i> Abrir en Google Maps
              </a>
            </div>
          </div>

          <div class="ratio ratio-21x9 contact-map-frame rounded overflow-hidden shadow-sm">
            <iframe
              src="<?= htmlspecialchars($mapEmbed) ?>"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="Mapa – <?= htmlspecialchars($companyName) ?>"
              allowfullscreen></iframe>
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