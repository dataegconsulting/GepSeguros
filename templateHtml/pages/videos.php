<?php
$pageTitle = "Videos | GEPETROL SEGUROS";
$pageDesc  = "Galería de videos: propagación, spots y contenido institucional de GEPETROL SEGUROS.";
$pageImg   = "img/og-cover.png";

// Carga CSS/JS específicos de esta página (los usaremos en head/scripts)
$pageCss = ["assets/css/videos.css"];
$pageJs  = ["assets/js/videos.js"];
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
       HERO (GLOBAL COMPARTIDO)
  =========================================================== -->
        <section class="section section-soft section-page-hero" id="videos">
            <div class="container">
                <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 reveal">
                    <div>
                        <div class="page-hero-badge mb-2">
                            <i class="bi bi-play-btn"></i>
                            Multimedia
                        </div>

                        <h1 class="page-title fw-black mb-2">Videos</h1>

                        <p class="page-lead text-muted mb-0">
                            Explora nuestros videos de propagación, spots y contenidos institucionales.
                        </p>
                    </div>
                    <nav aria-label="breadcrumb" class="reveal">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a class="link-brand" href="<?= url('index.php') ?>">Inicio</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Multimedia
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <!-- ==========================================================
       FILTROS + GRID
  =========================================================== -->
        <section class="section">
            <div class="container">

                <!-- Filtros -->
                <div class="videos-toolbar reveal">
                    <div class="d-flex flex-wrap gap-2 align-items-center justify-content-between">
                        <div class="videos-filters btn-group" role="group" aria-label="Filtros de video">
                            <button class="btn btn-outline-secondary is-active" type="button" data-filter="all">
                                Todos
                            </button>
                            <button class="btn btn-outline-secondary" type="button" data-filter="propagacion">
                                Propagación
                            </button>
                            <button class="btn btn-outline-secondary" type="button" data-filter="spots">
                                Spots
                            </button>
                            <button class="btn btn-outline-secondary" type="button" data-filter="institucional">
                                Institucional
                            </button>
                        </div>

                        <div class="videos-search">
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-search"></i></span>
                                <input id="videoSearch" type="search" class="form-control" placeholder="Buscar video…">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Grid -->
                <div class="row g-4 mt-2" id="videosGrid">

                    <!-- CARD 1 (ejemplo YouTube) -->
                    <div class="col-md-6 col-lg-4 video-item reveal" data-cat="propagacion" data-title="Campaña Protección Familiar">
                        <article class="card card-3d p-3 h-100 tilt">
                            <div class="video-thumb position-relative rounded overflow-hidden">
                                <img
                                    class="img-fluid w-100"
                                    src="https://img.youtube.com/vi/dQw4w9WgXcQ/hqdefault.jpg"
                                    alt="Campaña Protección Familiar"
                                    loading="lazy" />
                                <button
                                    class="video-play position-absolute top-50 start-50 translate-middle btn btn-brand rounded-circle p-3 shadow"
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#videoModal"
                                    data-video="https://www.youtube.com/embed/NypPuwbqy3s"
                                    aria-label="Reproducir video">
                                    <i class="bi bi-play-fill fs-3"></i>
                                </button>
                            </div>

                            <div class="pt-3">
                                <div class="d-flex gap-2 mb-2">
                                    <span class="badge bg-light text-dark border"><i class="bi bi-bullseye"></i> Propagación</span>
                                    <span class="badge bg-light text-muted border"><i class="bi bi-clock"></i> 1:30</span>
                                </div>
                                <h2 class="h6 fw-bold mb-1">Campaña Protección Familiar</h2>
                                <p class="text-muted small mb-0">Spot principal sobre protección y confianza.</p>
                            </div>
                        </article>
                    </div>

                    <!-- CARD 2 (ejemplo MP4 local) -->
                    <div class="col-md-6 col-lg-4 video-item reveal" data-cat="spots" data-title="Spot Seguro Automóvil">
                        <article class="card card-3d p-3 h-100 tilt">
                            <div class="video-thumb position-relative rounded overflow-hidden">
                                <img
                                    class="img-fluid w-100"
                                    src="<?= asset('img/video-cover-auto.jpg') ?>"
                                    alt="Spot Seguro Automóvil"
                                    loading="lazy"
                                    onerror="this.src='https://images.unsplash.com/photo-1542362567-b07e54358753?auto=format&fit=crop&w=1200&q=80';" />
                                <button
                                    class="video-play position-absolute top-50 start-50 translate-middle btn btn-brand rounded-circle p-3 shadow"
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#videoModal"
                                    data-video="<?= asset('assets/videos/spot-auto.mp4') ?>"
                                    data-type="mp4"
                                    aria-label="Reproducir video">
                                    <i class="bi bi-play-fill fs-3"></i>
                                </button>
                            </div>

                            <div class="pt-3">
                                <div class="d-flex gap-2 mb-2">
                                    <span class="badge bg-light text-dark border"><i class="bi bi-megaphone"></i> Spots</span>
                                    <span class="badge bg-light text-muted border"><i class="bi bi-camera-reels"></i> MP4</span>
                                </div>
                                <h2 class="h6 fw-bold mb-1">Spot Seguro Automóvil</h2>
                                <p class="text-muted small mb-0">Mensajes cortos para campañas comerciales.</p>
                            </div>
                        </article>
                    </div>

                    <!-- CARD 3 (institucional) -->
                    <div class="col-md-6 col-lg-4 video-item reveal" data-cat="institucional" data-title="Presentación Institucional">
                        <article class="card card-3d p-3 h-100 tilt">
                            <div class="video-thumb position-relative rounded overflow-hidden">
                                <img
                                    class="img-fluid w-100"
                                    src="https://images.unsplash.com/photo-1521791055366-0d553872125f?auto=format&fit=crop&w=1200&q=80"
                                    alt="Presentación Institucional"
                                    loading="lazy" />
                                <button
                                    class="video-play position-absolute top-50 start-50 translate-middle btn btn-brand rounded-circle p-3 shadow"
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#videoModal"
                                    data-video="https://www.youtube.com/embed/ScMzIvxBSi4"
                                    aria-label="Reproducir video">
                                    <i class="bi bi-play-fill fs-3"></i>
                                </button>
                            </div>

                            <div class="pt-3">
                                <div class="d-flex gap-2 mb-2">
                                    <span class="badge bg-light text-dark border"><i class="bi bi-building"></i> Institucional</span>
                                    <span class="badge bg-light text-muted border"><i class="bi bi-shield-check"></i> Oficial</span>
                                </div>
                                <h2 class="h6 fw-bold mb-1">Presentación Institucional</h2>
                                <p class="text-muted small mb-0">Conoce nuestra visión, valores y compromiso.</p>
                            </div>
                        </article>
                    </div>

                </div>

            </div>
        </section>

    </main>

    <!-- ==========================================================
     MODAL VIDEO (YouTube / MP4)
=========================================================== -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content video-modal">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold">Reproducción</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>

                <div class="modal-body pt-0">
                    <!-- YouTube iframe -->
                    <div class="ratio ratio-16x9 d-none" id="ytWrap">
                        <iframe id="ytFrame" src="" title="Video" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>

                    <!-- MP4 local -->
                    <div class="ratio ratio-16x9 d-none" id="mp4Wrap">
                        <video id="mp4Video" controls playsinline preload="metadata"></video>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include __DIR__ . "/../partials/footer.php"; ?>
    <?php include __DIR__ . "/../partials/scripts.php"; ?>
    <script src="<?= htmlspecialchars($pageJs) ?>"></script>

</body>

</html>