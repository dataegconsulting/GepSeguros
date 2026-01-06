
<!-- //partials/head  -->
<?php include_once __DIR__ . '/../config.php'; ?>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title><?= htmlspecialchars($pageTitle ?? 'GEPETROL SEGUROS') ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDesc ?? '') ?>" />

<link rel="icon" href="<?= asset('img/favicon.png') ?>" />
<link rel="apple-touch-icon" href="<?= asset('img/apple-touch-icon.png') ?>" />

<!-- Open Graph (para compartir en WhatsApp/Facebook) -->
<meta property="og:title" content="<?= htmlspecialchars($pageTitle ?? '') ?>" />
<meta property="og:description" content="<?= htmlspecialchars($pageDesc ?? '') ?>" />
<?php if (!empty($pageImg)): ?>
<meta property="og:image" content="<?= (strpos($pageImg, 'http') === 0) ? $pageImg : url($pageImg) ?>" />
<?php endif; ?>

<?php if (!empty($pageUrl)): ?>
<meta property="og:url" content="<?= htmlspecialchars($pageUrl) ?>" />
<?php endif; ?>
<meta property="og:type" content="website" />


<!-- CSS -->
<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
 <!-- CSS base (siempre) -->
<link rel="stylesheet" href="<?= asset('css/styles.css') ?>">


<?php if (!empty($pageCss)): ?>
  <?php foreach ((array)$pageCss as $href): ?>
    <link rel="stylesheet" href="<?= (strpos($href, 'http') === 0) ? $href : url($href) ?>">
  <?php endforeach; ?>
<?php endif; ?>