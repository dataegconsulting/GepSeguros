<?php
/**
 * Carga ordenada de estilos y scripts del tema Gepetrol Seguros
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Seguridad
}

function gepetrolseguros_enqueue_assets() {

    // Versión del tema para cache busting
    $theme   = wp_get_theme();
    $version = $theme->get( 'Version' ) ?: '1.0.0';

    // Ruta base del tema
    $theme_uri = get_template_directory_uri();

    /**
     * =========================
     *  ESTILOS (CSS)
     * =========================
     */

    // Bootstrap primero
    wp_enqueue_style(
        'gepetrol-bootstrap',
        $theme_uri . '/assets/css/bootstrap.min.css',
        [],
        $version
    );

    // Iconos y librerías
    wp_enqueue_style(
        'gepetrol-fontawesome',
        $theme_uri . '/assets/css/font-awesome-all.css',
        [ 'gepetrol-bootstrap' ],
        $version
    );

    wp_enqueue_style(
        'gepetrol-flaticon',
        $theme_uri . '/assets/css/flaticon.css',
        [ 'gepetrol-bootstrap' ],
        $version
    );

    // Sliders, fancybox, animaciones, selects
    wp_enqueue_style(
        'gepetrol-owl-carousel',
        $theme_uri . '/assets/css/owl.css',
        [ 'gepetrol-bootstrap' ],
        $version
    );

    wp_enqueue_style(
        'gepetrol-fancybox',
        $theme_uri . '/assets/css/jquery.fancybox.min.css',
        [ 'gepetrol-bootstrap' ],
        $version
    );

    wp_enqueue_style(
        'gepetrol-animate',
        $theme_uri . '/assets/css/animate.css',
        [ 'gepetrol-bootstrap' ],
        $version
    );

    wp_enqueue_style(
        'gepetrol-nice-select',
        $theme_uri . '/assets/css/nice-select.css',
        [ 'gepetrol-bootstrap' ],
        $version
    );

    // Colores y global
    wp_enqueue_style(
        'gepetrol-theme-color',
        $theme_uri . '/assets/css/color/theme-color.css',
        [ 'gepetrol-bootstrap' ],
        $version
    );

    wp_enqueue_style(
        'gepetrol-global',
        $theme_uri . '/assets/css/global.css',
        [ 'gepetrol-theme-color' ],
        $version
    );

    // Fuentes propias
    wp_enqueue_style(
        'gepetrol-fonts-web',
        $theme_uri . '/assets/css/fonts.css',
        [ 'gepetrol-global' ],
        $version
    );

    // CSS principal del tema (antes de style.css de WP)
    wp_enqueue_style(
        'gepetrol-main',
        $theme_uri . '/assets/css/gepetrolseguros.css',
        [ 'gepetrol-global', 'gepetrol-fonts-web' ],
        $version
    );

    // style.css de WordPress (por si usas el editor o overrides)
    wp_enqueue_style(
        'gepetrol-style',
        get_stylesheet_uri(),
        [ 'gepetrol-main' ],
        $version
    );

    // Responsive al final
    wp_enqueue_style(
        'gepetrol-responsive',
        $theme_uri . '/assets/css/responsive.css',
        [ 'gepetrol-style' ],
        $version
    );

    /**
     * =========================
     *  SCRIPTS (JS)
     * =========================
     */

    // jQuery nativo de WordPress (no cargamos jquery-3.6.4 manualmente)
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script(
        'gepetrol-popper',
        $theme_uri . '/assets/js/popper.min.js',
        [ 'jquery' ],
        $version,
        true
    );

    wp_enqueue_script(
        'gepetrol-bootstrap',
        $theme_uri . '/assets/js/bootstrap.min.js',
        [ 'jquery', 'gepetrol-popper' ],
        $version,
        true
    );

    wp_enqueue_script(
        'gepetrol-owl-carousel',
        $theme_uri . '/assets/js/owl.min.js',
        [ 'jquery', 'gepetrol-bootstrap' ],
        $version,
        true
    );

    wp_enqueue_script(
        'gepetrol-wow',
        $theme_uri . '/assets/js/wow.min.js',
        [ 'jquery' ],
        $version,
        true
    );

    wp_enqueue_script(
        'gepetrol-fancybox',
        $theme_uri . '/assets/js/jquery.fancybox.js',
        [ 'jquery' ],
        $version,
        true
    );

    wp_enqueue_script(
        'gepetrol-appear',
        $theme_uri . '/assets/js/appear.js',
        [ 'jquery' ],
        $version,
        true
    );

    wp_enqueue_script(
        'gepetrol-mousewheel',
        $theme_uri . '/assets/js/jquery.mousewheel.min.js',
        [ 'jquery' ],
        $version,
        true
    );

    wp_enqueue_script(
        'gepetrol-mcustomscrollbar',
        $theme_uri . '/assets/js/jquery.mCustomScrollbar.min.js',
        [ 'jquery' ],
        $version,
        true
    );

    wp_enqueue_script(
        'gepetrol-nav-tool',
        $theme_uri . '/assets/js/nav-tool.js',
        [ 'jquery' ],
        $version,
        true
    );

    wp_enqueue_script(
        'gepetrol-paroller',
        $theme_uri . '/assets/js/jquery.paroller.min.js',
        [ 'jquery' ],
        $version,
        true
    );

    wp_enqueue_script(
        'gepetrol-nice-select-js',
        $theme_uri . '/assets/js/jquery.nice-select.min.js',
        [ 'jquery' ],
        $version,
        true
    );

    // Script principal del tema
    wp_enqueue_script(
        'gepetrol-main-js',
        $theme_uri . '/assets/js/gepetrolseguros.js',
        [ 'jquery', 'gepetrol-bootstrap' ],
        $version,
        true
    );
}

add_action( 'wp_enqueue_scripts', 'gepetrolseguros_enqueue_assets' );
