<?php
/**
 * Slider principal Home – Gepetrol Seguros
 *
 * Usa opciones de Redux:
 * - features-slider-target   → activar/desactivar sección
 * - features_slider          → slides (titulo, descripción, imagen)
 * - christmas_mode           → off / auto / on
 * - christmas_ribbon_text    → texto franja superior
 * - christmas_badge_text     → texto badge dentro del slider
 * - christmas_primary_color  → color principal navideño
 * - christmas_snow_enable    → ON/OFF (mismo flag que usamos para la nieve global)
 */

global $gepetrol_theme_option;

// Aseguramos array
$gepetrol_options = is_array( $gepetrol_theme_option ) ? $gepetrol_theme_option : array();

/**
 * 1) ¿Está activado el slider en Redux?
 */
$features_slider_enabled = ! empty( $gepetrol_options['features-slider-target'] )
    && $gepetrol_options['features-slider-target'] === '1';

if ( ! $features_slider_enabled ) {
    // Si no está activado, no pintamos nada.
    return;
}

/**
 * 2) Opciones de Navidad para el slider
 */

// Modo Navidad: off / auto / on
$christmas_mode = isset( $gepetrol_options['christmas_mode'] )
    ? $gepetrol_options['christmas_mode']
    : 'auto';

$is_december      = (int) date_i18n( 'n' ) === 12;
$enable_christmas = false;

if ( $christmas_mode === 'on' ) {
    $enable_christmas = true;
} elseif ( $christmas_mode === 'auto' && $is_december ) {
    $enable_christmas = true;
}

// Textos de franja y badge con fallback
$christmas_ribbon_text = ! empty( $gepetrol_options['christmas_ribbon_text'] )
    ? $gepetrol_options['christmas_ribbon_text']
    : '🎄 Especial Navidad Gepetrol Seguros: protege tu vehículo y disfruta las fiestas. 🎁';

$christmas_badge_text = ! empty( $gepetrol_options['christmas_badge_text'] )
    ? $gepetrol_options['christmas_badge_text']
    : '🎅 Protege tu coche estas fiestas';

// Color principal navideño
$christmas_primary_color = ! empty( $gepetrol_options['christmas_primary_color'] )
    ? $gepetrol_options['christmas_primary_color']
    : '#b30000';

// Nieve local en el slider – usamos la misma opción global de nieve
$christmas_enable_snow = ! empty( $gepetrol_options['christmas_snow_enable'] );

/**
 * 3) Clases extra de la sección
 */
$banner_classes = 'banner-section style-two';
if ( $enable_christmas ) {
    $banner_classes .= ' banner-section--christmas';
}
?>

<section class="<?php echo esc_attr( $banner_classes ); ?>" aria-label="<?php esc_attr_e( 'Promociones principales de Gepetrol Seguros', 'gepetrolseguros' ); ?>">

    <!-- Patrón de fondo decorativo -->
    <div class="pattern-layer"
         style="background-image:url(<?php echo esc_url( get_template_directory_uri() . '/assets/images/shape/pattern-20.png' ); ?>);">
    </div>

    <?php if ( $enable_christmas ) : ?>
        <!-- Franja navideña superior -->
        <div class="gepetrol-xmas-ribbon" style="background-color: <?php echo esc_attr( $christmas_primary_color ); ?>;">
            <span class="gepetrol-xmas-ribbon__text">
                <?php echo esc_html( $christmas_ribbon_text ); ?>
            </span>
        </div>

        <?php if ( $christmas_enable_snow ) : ?>
            <!-- Pequeños copos/emojis sobre el slider (decorativo) -->
            <div class="gepetrol-xmas-snowflakes" aria-hidden="true">
                <span>❄️</span><span>✨</span><span>❄️</span><span>✨</span><span>❄️</span>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <!-- Carrusel principal -->
    <div class="banner-carousel owl-theme owl-carousel owl-dots-none nav-style-one" role="region"
         aria-label="<?php esc_attr_e( 'Slider de campañas y mensajes destacados', 'gepetrolseguros' ); ?>">

        <?php if ( ! empty( $gepetrol_options['features_slider'] ) && is_array( $gepetrol_options['features_slider'] ) ) : ?>

            <?php foreach ( $gepetrol_options['features_slider'] as $features_slide ) : ?>

                <?php
                // Redux para slides suele guardar:
                //  - title
                //  - description
                //  - image  (URL de la imagen)
                $slide_title       = ! empty( $features_slide['title'] ) ? $features_slide['title'] : '';
                $slide_description = ! empty( $features_slide['description'] ) ? $features_slide['description'] : '';
                $slide_image       = ! empty( $features_slide['image'] ) ? $features_slide['image'] : '';
                ?>

                <div class="slide-item">

                    <?php if ( $slide_image ) : ?>
                        <!-- Fondo con imagen del slide -->
                        <div class="image-layer"
                             style="background-image:url(<?php echo esc_url( $slide_image ); ?>)">
                        </div>

                        <!-- Imagen oculta solo para lazyload del navegador (mejor rendimiento) -->
                        <!-- <img
                            src="<?php echo esc_url( $slide_image ); ?>"
                            alt=""
                            loading="lazy"
                            class="gepetrol-slide-preload"
                            aria-hidden="true" /> -->
                    <?php endif; ?>

                    <div class="auto-container">
                        <div class="content-box">

                            <?php if ( $slide_title ) : ?>
                                <h1 class="banner-title">
                                    <?php echo wp_kses_post( $slide_title ); ?>
                                </h1>
                            <?php endif; ?>

                            <?php if ( $slide_description ) : ?>
                                <p class="banner-text">
                                    <?php echo wp_kses_post( $slide_description ); ?>
                                </p>
                            <?php endif; ?>

                            <?php if ( $enable_christmas && $christmas_badge_text ) : ?>
                                <div class="gepetrol-xmas-badge">
                                    <span><?php echo esc_html( $christmas_badge_text ); ?></span>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        <?php endif; ?>

    </div>
</section>