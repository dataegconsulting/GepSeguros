
<button id="backToTop" aria-label="Volver arriba" type="button">
  <i class="bi bi-arrow-up"></i>
</button>

<!-- JS base (siempre) -->
<script src="<?= asset('js/main.js') ?>"></script>

<!-- JS extra por página (opcional) -->
<?php if (!empty($pageJs)): ?>
  <?php foreach ((array)$pageJs as $js): ?>
    <script src="<?= (strpos($js, 'http') === 0) ? $js : url($js) ?>" defer></script>
  <?php endforeach; ?>
<?php endif; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 