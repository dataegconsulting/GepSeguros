

<?php
// ============================================================================
// PAGE: SINGLE (Noticia / Comunicado)
// - PHP puro (sin WP)
// - Listo para migrar a WP (sólo cambiar data source)
// - Requiere: /partials/head.php, topbar.php, header.php, footer.php, scripts.php
// - CSS global: /PUBLIC/assets/css/styles.css (ya lo carga head.php)
// - CSS page-only: /PUBLIC/assets/css/pages/single.css (se carga aquí)
// ============================================================================

require_once __DIR__ . '/../config.php';

// Links base
$homeUrl = url('index.php');
$newsUrl = url('pages/noticias.php');

// Carga CSS/JS específicos de esta página (los usaremos en head/scripts)
$pageCss = [];
$pageJs  = [];

// Se puede pasar por URL: /pages/single.php?slug=nueva-plataforma
$slug = isset($_GET["slug"]) ? trim($_GET["slug"]) : "";

// Demo dataset (luego lo reemplazas por BD/JSON)
$posts = [
  "nueva-plataforma" => [
    "title" => "Nueva plataforma digital de cotización",
    "desc"  => "GEPETROL SEGUROS presenta su nueva aplicación de cotización de pólizas con desglose transparente e IVA incluido.",
    "date"  => "12 de marzo de 2025",
    "tag"   => "Comunicado",
    "img"   => asset('img/hero/seguro-auto.jpg'),
    "read"  => "4 min",
  ],
  "concienciacion" => [
    "title" => "Campaña de concienciación aseguradora",
    "desc"  => "Iniciativa institucional para promover la cultura del seguro en familias y pequeñas empresas.",
    "date"  => "3 de febrero de 2025",
    "tag"   => "Institucional",
    "img"   => asset('img/hero/seguro-auto.png'),
    "read"  => "5 min",
  ],
  "alianzas" => [
    "title" => "Nuevas alianzas estratégicas",
    "desc"  => "GEPETROL SEGUROS refuerza su red de colaboradores para mejorar la atención al cliente.",
    "date"  => "20 de enero de 2025",
    "tag"   => "Alianzas",
    "img"   => asset('img/hero/seguro-escolar.png'),
    "read"  => "3 min",
  ],
];

// Fallback si no viene slug o no existe
$post = $posts[$slug] ?? null;

$pageTitle = $post ? ($post["title"] . " | GEPETROL SEGUROS") : "Noticia no encontrada | GEPETROL SEGUROS";
$pageDesc  = $post ? $post["desc"] : "La noticia solicitada no existe o ha sido retirada.";
$pageImg   = $post ? $post["img"] : asset('img/noticias/seguro-auto.jpg');
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
         HERO / BREADCRUMB (compartido)
    =========================================================== -->
    <section class="section section-soft section-page-hero">
      <div class="container">

        <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 reveal">
          <div>
            <div class="page-hero-badge mb-2">
              <i class="bi bi-newspaper"></i>
              Noticias • Detalle
            </div>

            <h1 class="page-title fw-black mb-2">
              <?= htmlspecialchars($post["title"] ?? "Noticia no encontrada") ?>
            </h1>

            <p class="page-lead text-muted mb-0" style="max-width: 72ch;">
              <?= htmlspecialchars($post["desc"] ?? "No se ha podido cargar el contenido solicitado.") ?>
            </p>
          </div>

          <nav aria-label="breadcrumb" class="reveal">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a class="link-brand" href="<?= $homeUrl ?>">Inicio</a>
              </li>
              <li class="breadcrumb-item">
                <a class="link-brand" href="<?= $newsUrl ?>">Noticias</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Detalle
              </li>
            </ol>
          </nav>
        </div>

      </div>
    </section>

    <!-- ==========================================================
         CONTENT
    =========================================================== -->
    <section class="section">
      <div class="container">

        <?php if (!$post): ?>
          <!-- 404 SIMPLE -->
          <div class="row justify-content-center">
            <div class="col-lg-8 reveal">
              <div class="card card-3d p-4 p-lg-5 text-center tilt">
                <div class="icon-3d mx-auto mb-3">
                  <i class="bi bi-exclamation-triangle fs-1 text-warning"></i>
                </div>
                <h2 class="fw-black mb-2">No encontramos esta noticia</h2>
                <p class="text-muted mb-4">
                  El enlace puede estar mal o el contenido ya no está disponible.
                </p>
                <a class="btn btn-brand btn-lg px-4" href="<?= $newsUrl ?>">
                  <i class="bi bi-arrow-left"></i> Volver a noticias
                </a>
              </div>
            </div>
          </div>

        <?php else: ?>

          <div class="row g-4 align-items-start">

            <!-- MAIN ARTICLE -->
            <div class="col-lg-8 reveal">
              <article class="card card-3d p-3 p-lg-4 single-article tilt">

                <header class="single-header mb-3">
                  <div class="single-meta d-flex flex-wrap gap-2 align-items-center">
                    <span class="badge bg-brand text-white">
                      <i class="bi bi-bookmark"></i>
                      <?= htmlspecialchars($post["tag"]) ?>
                    </span>

                    <span class="text-muted small">
                      <i class="bi bi-calendar3"></i>
                      <?= htmlspecialchars($post["date"]) ?>
                    </span>

                    <span class="text-muted small border-start ps-2">
                      <i class="bi bi-clock"></i>
                      <?= htmlspecialchars($post["read"]) ?>
                    </span>
                  </div>
                </header>

                <div class="single-cover mb-4 rounded overflow-hidden shadow-sm">
                  <img
                    class="img-fluid w-100 object-fit-cover"
                    src="<?= htmlspecialchars($post["img"]) ?>"
                    alt="<?= htmlspecialchars($post["title"]) ?>"
                    loading="lazy"
                  />
                </div>

                <div class="content-pro text-muted">

                  <p>
                    Estimados clientes y colaboradores:
                  </p>

                  <p>
                    En <strong>GEPETROL SEGUROS</strong> trabajamos para ofrecer soluciones aseguradoras claras,
                    transparentes y adaptadas a la realidad de Guinea Ecuatorial. Esta publicación forma parte
                    de nuestro compromiso de mantener una comunicación institucional constante.
                  </p>

                  <h2 class="h4 fw-bold mt-4 mb-3">Puntos clave</h2>
                  <ul class="list-group list-group-flush mb-4">
                    <li class="list-group-item bg-transparent px-0"><i class="bi bi-check2 text-brand me-2"></i>Información clara y orientada al cliente.</li>
                    <li class="list-group-item bg-transparent px-0"><i class="bi bi-check2 text-brand me-2"></i>Procesos simplificados para mejorar la experiencia.</li>
                    <li class="list-group-item bg-transparent px-0"><i class="bi bi-check2 text-brand me-2"></i>Compromiso con la transparencia, el cumplimiento y la mejora continua.</li>
                  </ul>

                  <h3 class="h5 fw-bold mb-2">Mensaje institucional</h3>
                  <p>
                    Seguiremos fortaleciendo nuestros productos y profesionalizando cada punto de contacto.
                    Gracias por su confianza.
                  </p>

                  <div class="alert alert-light border-start border-brand border-4 shadow-sm mt-4">
                    <figure class="mb-0">
                      <blockquote class="blockquote">
                        <p class="mb-2 fs-6 fst-italic">"La confianza se construye con transparencia, consistencia y servicio profesional."</p>
                      </blockquote>
                      <figcaption class="blockquote-footer mb-0">
                        GEPETROL SEGUROS
                      </figcaption>
                    </figure>
                  </div>

                </div>

                <hr class="my-4">

                <div class="d-flex flex-wrap gap-2">
                  <a class="btn btn-outline-secondary px-4" href="<?= $newsUrl ?>">
                    <i class="bi bi-arrow-left"></i> Volver a noticias
                  </a>
                </div>

              </article>
            </div>

            <!-- SIDEBAR -->
            <aside class="col-lg-4 reveal">
              <div class="card card-3d p-4 single-aside tilt mb-4">

                <div class="d-flex align-items-center gap-3 mb-3">
                  <div class="icon-3d text-brand fs-3">
                    <i class="bi bi-info-circle"></i>
                  </div>
                  <div>
                    <h4 class="h6 fw-bold mb-0">Acceso rápido</h4>
                    <div class="text-muted small">Información relacionada</div>
                  </div>
                </div>

                <div class="p-3 bg-light rounded mb-3 border">
                  <div class="fw-bold mb-1">¿Necesitas cotizar?</div>
                  <div class="text-muted small mb-2">
                    Accede a la aplicación de cotización y calcula tu póliza en minutos.
                  </div>
                   <a class="btn btn-brand btn-sm w-100" href="<?= url('pages/solicitar-presupuesto.php') ?>">
                    <i class="bi bi-lightning-charge"></i> Ir a cotización
                  </a>
                </div>

                <div class="single-aside-box">
                  <div class="fw-bold mb-2 pb-2 border-bottom">Más noticias</div>

                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                         <a class="text-decoration-noneLink text-muted" href="<?= $newsUrl ?>">
                        <i class="bi bi-newspaper me-1"></i> Ver listado completo
                      </a>
                    </li>
                     <li class="mb-2">
                      <a class="text-decoration-none text-brand fw-medium" href="single.php?slug=nueva-plataforma">
                        <i class="bi bi-chevron-right small"></i> Nueva plataforma digital
                      </a>
                    </li>
                    <li class="mb-2">
                      <a class="text-decoration-none text-brand fw-medium" href="single.php?slug=concienciacion">
                        <i class="bi bi-chevron-right small"></i> Campaña de concienciación
                      </a>
                    </li>
                    <li>
                      <a class="text-decoration-none text-brand fw-medium" href="single.php?slug=alianzas">
                        <i class="bi bi-chevron-right small"></i> Alianzas estratégicas
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </aside>

          </div>
        <?php endif; ?>

      </div>
    </section>

    <!-- ==========================================================
         CTA FINAL
    =========================================================== -->
    <section class="section section-soft">
      <div class="container">
        <div class="card card-3d p-4 p-lg-5 reveal tilt text-center">
          <h2 class="fw-black mb-2">¿Listo para cotizar?</h2>
          <p class="text-muted mb-3">
             Nuestro equipo te ayudará a elegir la mejor opción para tus necesidades.
          </p>
           <a class="btn btn-brand btn-lg px-4" href="<?= url('pages/contacto.php') ?>">
            <i class="bi bi-envelope"></i> Contactar ahora
          </a>
        </div>
      </div>
    </section>

  </main>

  <?php include __DIR__ . "/../partials/footer.php"; ?>
  <?php include __DIR__ . "/../partials/scripts.php"; ?>

</body>
</html>