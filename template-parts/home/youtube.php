<!-- video-section -->
<section class="video-section centred"
         role="region"
         aria-label="<?php esc_attr_e( 'Video institucional de Gepetrol Seguros', 'gepetrolseguros' ); ?>"
         style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/background/video-1.jpg' ); ?>');">

    <!-- Capa de opacidad para mejorar lectura del texto -->
    <div class="video-overlay" aria-hidden="true"></div>

    <div class="auto-container">
        <div class="inner-box">

            <!-- Botón de reproducción accesible -->
            <a href="https://www.youtube.com/watch?v=NypPuwbqy3s"
               class="lightbox-image video-btn"
               data-caption="<?php esc_attr_e( 'Spot publicitario Gepetrol Seguros', 'gepetrolseguros' ); ?>"
               aria-label="<?php esc_attr_e( 'Reproducir video institucional de Gepetrol Seguros', 'gepetrolseguros' ); ?>"
               rel="noopener noreferrer">

                <i class="far fa-play" aria-hidden="true"></i>
                <span class="screen-reader-text">
                    <?php esc_html_e( 'Reproducir video', 'gepetrolseguros' ); ?>
                </span>
            </a>

            <!-- Título principal -->
            <h2 class="video-title">
                <?php esc_html_e( 'Gepetrol Seguros,', 'gepetrolseguros' ); ?>
                <br><?php esc_html_e( 'tu seguro de Confianza,', 'gepetrolseguros' ); ?>
                <br><?php esc_html_e( 'hoy, mañana y siempre', 'gepetrolseguros' ); ?>
            </h2>

        </div>
    </div>
</section>
<!-- video-section end -->