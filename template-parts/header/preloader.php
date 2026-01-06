<!-- PRELOADER -->
<div
    id="gepetrol-preloader"
    class="gepetrol-preloader"
    role="status"
    aria-label="<?php esc_attr_e( 'Cargando sitio…', 'gepetrolseguros' ); ?>"
>
    <div class="gepetrol-preloader__inner">
        <div class="gepetrol-preloader__spinner"></div>

        <div class="gepetrol-preloader__text">
            <?php
            // Animación letra a letra sin duplicar HTML
            $brand = 'GepetrolSeguros';
            $letters = preg_split('//u', $brand, -1, PREG_SPLIT_NO_EMPTY);

            foreach ( $letters as $letter ) :
            ?>
                <span class="gepetrol-preloader__letter" aria-hidden="true">
                    <?php echo esc_html( $letter ); ?>
                </span>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- /PRELOADER -->