<?php
/**
 * @package    GepetrolSeguros
 * @author     Filiberto Mba Obama
 * @copyright  Copyright (C) 2022 Dataeg
 * @license    GNU/GPL v2 or later
 *
 * Header optimizado:
 * - SEO básico (meta description por defecto)
 * - Resource hints (preconnect/dns-prefetch para fuentes)
 * - Lógica de Navidad (bola, audio, nieve) basada en Redux
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Charset y compatibilidad -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Viewport responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Perfil de enlaces (WP clásico) -->
    <link rel="profile" href="//gmpg.org/xfn/11">

    <!-- Resource Hints / Preconnect para mejorar rendimiento de fuentes -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>

    <!-- Verificación Google Search Console -->
    <meta name="google-site-verification"
          content="wlaqyQ2OmxMeKuOCraMmRVG2AVoSO8h7txAa3yg7qxw" />
    <?php
    /**
     * ==========================
     *  SEO BÁSICO (meta description)
     * ==========================
     * - Si usas Yoast/RankMath, ellos gestionan esto.
     * - Esto es un fallback ligero:
     *   · En la Home: descripción del sitio
     *   · En otras páginas: dejamos que el plugin/SEO lo gestione
     */
    if ( ! function_exists( 'wpseo_init' ) && ! function_exists( 'rank_math' ) ) {
        // Solo añadimos una meta description simple en la portada si no hay plugin SEO.
        if ( is_front_page() || is_home() ) {
            $site_description = get_bloginfo( 'description', 'display' );
            if ( ! empty( $site_description ) ) : ?>
                <meta name="description"
                      content="<?php echo esc_attr( $site_description ); ?>">
            <?php endif;
        }
    }

    /**
     * Importante:
     * - No añadimos <title> manualmente para no romper add_theme_support( 'title-tag' ).
     * - wp_head() debe ir lo más cerca posible del cierre de <head>.
     */
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- start page-wrapper -->
<div class="boxed_wrapper">

    <!-- sidebar about -->
    <?php get_template_part( 'template-parts/header/sidebar', 'about' ); ?>
    <!-- END sidebar about -->

    <?php
    /**
     * ==========================
     *  OPCIONES REDUX GEPETROL
     * ==========================
     */
    $gepetrol_options = get_option( 'gepetrol_theme_option' );
    if ( ! is_array( $gepetrol_options ) ) {
        $gepetrol_options = array();
    }

    /**
     * --------------------
     *  MODO NAVIDAD
     * --------------------
     * christmas_mode:
     *  - off   → nada
     *  - auto  → solo en diciembre
     *  - on    → siempre activo
     */
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

    // Imagen decorativa (bola / Papá Noel) subida desde Redux
    $christmas_header_image = '';
    if (
        ! empty( $gepetrol_options['christmas_header_image'] )
        && ! empty( $gepetrol_options['christmas_header_image']['url'] )
    ) {
        $christmas_header_image = $gepetrol_options['christmas_header_image']['url'];
    }

    // Audio navideño (botón + <audio>)
    $christmas_enable_audio = ! empty( $gepetrol_options['christmas_enable_audio'] );
    $christmas_audio_file   = (
        ! empty( $gepetrol_options['christmas_audio_file'] )
        && ! empty( $gepetrol_options['christmas_audio_file']['url'] )
    )
        ? $gepetrol_options['christmas_audio_file']['url']
        : '';

    /**
     * --------------------
     *  NIEVE / EMOJIS
     * --------------------
     * Controlado por Redux:
     *  - christmas_snow_enable         → ON/OFF
     *  - christmas_snow_intensity      → low / medium / high
     *  - christmas_snow_style          → snow / emoji / both
     *  - christmas_snow_scope          → home / all
     *  - christmas_snow_mobile_enable  → true / false
     */
    $snow_enabled = ! empty( $gepetrol_options['christmas_snow_enable'] );

    $snow_intensity = ! empty( $gepetrol_options['christmas_snow_intensity'] )
        ? $gepetrol_options['christmas_snow_intensity']
        : 'medium';

    $snow_style = ! empty( $gepetrol_options['christmas_snow_style'] )
        ? $gepetrol_options['christmas_snow_style']
        : 'both';

    // Ámbito: 'home' (solo portada/blog) o 'all' (todo el sitio)
    $snow_scope = ! empty( $gepetrol_options['christmas_snow_scope'] )
        ? $gepetrol_options['christmas_snow_scope']
        : 'home';

    // Nieve en móvil: por defecto TRUE
    $snow_mobile_enable = array_key_exists( 'christmas_snow_mobile_enable', $gepetrol_options )
        ? (bool) $gepetrol_options['christmas_snow_mobile_enable']
        : true;

    // ¿Esta página concreta debe mostrar nieve?
    $snow_allowed_here = true;

    // 1) Si el ámbito es solo "Home", limitamos a portada/blog.
    if ( $snow_scope === 'home' && ! ( is_front_page() || is_home() ) ) {
        $snow_allowed_here = false;
    }

    // 2) Si es móvil y la opción de móvil está en OFF, no mostramos nieve.
    if ( wp_is_mobile() && ! $snow_mobile_enable ) {
        $snow_allowed_here = false;
    }
    ?>

    <?php
    /**
     * Capa para la nieve:
     * Se renderiza si:
     *  - Modo Navidad activo ($enable_christmas)
     *  - Nieve activada en Redux ($snow_enabled)
     *  - Esta página está permitida ($snow_allowed_here)
     *
     * El JS (gepetrolStartSnow) leerá los data-*
     * para saber intensidad, estilo, etc.
     */
    ?>
    <?php if ( $enable_christmas && $snow_enabled && $snow_allowed_here ) : ?>
        <div
            id="gepetrol-snow-layer"
            class="gepetrol-snow-layer"
            aria-hidden="true"
            data-snow-intensity="<?php echo esc_attr( $snow_intensity ); ?>"
            data-snow-style="<?php echo esc_attr( $snow_style ); ?>"
            data-snow-mobile="<?php echo wp_is_mobile() ? '1' : '0'; ?>"
        ></div>
    <?php endif; ?>

    <!-- main header -->
    <header class="main-header">

        <?php
        /**
         * Bola / adorno navideño colgado bajo el logo.
         * Se muestra solo si:
         *  - Modo Navidad está activo
         *  - Hay imagen configurada en Redux
         */
        ?>
        <?php if ( $enable_christmas && $christmas_header_image ) : ?>
            <div class="gepetrol-xmas-ornament">
                <span class="gepetrol-xmas-ornament__string"></span>
                <img
                    src="<?php echo esc_url( $christmas_header_image ); ?>"
                    alt="<?php esc_attr_e( 'Decoración navideña', 'gepetrolseguros' ); ?>"
                    loading="lazy"
                >
            </div>
        <?php endif; ?>

        <?php
        /**
         * Botón para reproducir / pausar la música de Navidad.
         * El comportamiento lo controla tu JS:
         *  - #gepetrol-xmas-audio
         *  - .gepetrol-xmas-audio-toggle
         */
        ?>
        <?php if ( $enable_christmas && $christmas_enable_audio && $christmas_audio_file ) : ?>
            <button
                type="button"
                class="gepetrol-xmas-audio-toggle"
                aria-pressed="false"
                aria-label="<?php esc_attr_e( 'Reproducir música de Navidad', 'gepetrolseguros' ); ?>">
                🎵 Navidad
            </button>

            <audio id="gepetrol-xmas-audio" preload="auto" loop>
                <source src="<?php echo esc_url( $christmas_audio_file ); ?>" type="audio/mpeg">
            </audio>
        <?php endif; ?>

        <!-- header-top -->
        <div class="header-top bg-color-2">
            <div class="auto-container">
                <?php get_template_part( 'template-parts/header/site', 'location' ); ?>
            </div>
        </div>

        <!-- header-lower -->
        <div class="header-lower">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <?php get_template_part( 'template-parts/header/site', 'logo' ); ?>

                    <div class="menu-area pull-right">
                        <?php get_template_part( 'template-parts/header/site', 'nav' ); ?>
                        <?php get_template_part( 'template-parts/header/site', 'area-cliente' ); ?>
                    </div>

                </div>
            </div>
        </div>

        <!-- sticky header -->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <?php get_template_part( 'template-parts/header/site', 'logo' ); ?>
                    <div class="menu-area pull-right">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                        <?php get_template_part( 'template-parts/header/site', 'area-cliente' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <?php get_template_part( 'template-parts/header/mobil', 'menu' ); ?>
    <!-- End Mobile Menu -->