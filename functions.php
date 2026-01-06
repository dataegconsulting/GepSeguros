<?php
/**
 * Funciones principales del tema Gepetrol Seguros
 *
 * - Carga de ficheros base (setup, enqueues, frontend helpers)
 * - Integración con Redux Framework
 * - Estilos y scripts personalizados para el panel Redux
 * - Ajustes de rendimiento (fuentes, jQuery migrate)
 * - Utilidades varias (shortcodes, mime types, Jetpack, modal Home)
 *
 * @package GepetrolSeguros
 */

// =========================================================================
// 1) INCLUDES BÁSICOS DEL TEMA
// =========================================================================

require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/enqueues.php';
require get_template_directory() . '/inc/functions-frontend.php';

// Redux: opciones del tema
require_once get_parent_theme_file_path( '/inc/redux-framework/options-init.php' );


// =========================================================================
// 2) GOOGLE FONTS PARA REDUX (PANEL ADMIN)
// =========================================================================

if ( ! function_exists( 'gepetrolseguros_redux_fonts_url' ) ) {
    /**
     * Devuelve la URL de Google Fonts para el panel Redux.
     *
     * Se separa en una función específica para poder reutilizar
     * y mantener el código limpio.
     *
     * @return string URL de Google Fonts o string vacío si está desactivado.
     */
    function gepetrolseguros_redux_fonts_url() {
        $google_font_url = '';

        /**
         * Traductores:
         * Si vuestro idioma NO está bien soportado por Montserrat o Poppins,
         * podéis devolver 'off' para evitar cargar Google Fonts.
         */
        $montserrat_on = esc_html_x(
            'on',
            'Montserrat font: on or off',
            'gepetrolseguros'
        );

        $poppins_on = esc_html_x(
            'on',
            'Poppins font: on or off',
            'gepetrolseguros'
        );

        if ( 'off' === $montserrat_on && 'off' === $poppins_on ) {
            return '';
        }

        $font_families = array();

        if ( 'off' !== $montserrat_on ) {
            $font_families[] = 'Montserrat:400,500,600';
        }

        if ( 'off' !== $poppins_on ) {
            $font_families[] = 'Poppins:400,600';
        }

        if ( empty( $font_families ) ) {
            return '';
        }

        $query_args = array(
            'family'  => rawurlencode( implode( '|', $font_families ) ),
            'display' => 'swap',
        );

        $google_font_url = add_query_arg(
            $query_args,
            'https://fonts.googleapis.com/css'
        );

        return $google_font_url;
    }
}

if ( ! function_exists( 'gepetrolseguros_custom_redux_css' ) ) {
    /**
     * Encola CSS y JS personalizados para el panel Redux.
     *
     * Solo se carga en la página de opciones de Redux (gepetrol_theme_option),
     * no afecta al frontend.
     */
    function gepetrolseguros_custom_redux_css() {

        // Google Fonts para la interfaz de Redux
        $fonts_url = gepetrolseguros_redux_fonts_url();
        if ( ! empty( $fonts_url ) ) {
            wp_enqueue_style(
                'gepetrolseguros-google-fonts',
                $fonts_url,
                array(),
                '1.0.0'
            );
        }

        // CSS DatePicker
        wp_register_style(
            'simple-dtpicker',
            get_parent_theme_file_uri( '/inc/redux-framework/css/jquery.simple-dtpicker.min.css' ),
            array(),
            '1.0.0',
            'all'
        );
        wp_enqueue_style( 'simple-dtpicker' );

        // CSS custom del panel Redux
        wp_register_style(
            'gepetrolseguros-redux-custom',
            get_parent_theme_file_uri( '/inc/redux-framework/css/gepetrolseguros-redux-custom.css' ),
            array(),
            '1.0.0',
            'all'
        );
        wp_enqueue_style( 'gepetrolseguros-redux-custom' );

        // JS DatePicker
        wp_enqueue_script(
            'simple-dtpicker',
            get_parent_theme_file_uri( '/inc/redux-framework/js/jquery.simple-dtpicker.min.js' ),
            array( 'jquery' ),
            '1.0.0',
            true
        );

        // JS custom del panel Redux
        wp_enqueue_script(
            'gepetrolseguros-redux-custom',
            get_parent_theme_file_uri( '/inc/redux-framework/js/gepetrolseguros-redux-custom.js' ),
            array( 'jquery' ),
            '1.0.0',
            true
        );
    }

    // Este hook se dispara SOLO en la página de Redux (gepetrol_theme_option)
    add_action(
        'redux/page/gepetrol_theme_option/enqueue',
        'gepetrolseguros_custom_redux_css',
        2
    );
}


// =========================================================================
// 3) RENDIMIENTO: ELIMINAR jQuery Migrate EN EL FRONTEND
// =========================================================================

if ( ! function_exists( 'gepetrolseguros_remove_jquery_migrate' ) ) {
    /**
     * Elimina jquery-migrate de las dependencias de jQuery en el frontend.
     *
     * Es más seguro que reemplazar completamente el handle de 'jquery'.
     *
     * @param WP_Scripts $scripts Objeto de registro de scripts de WP.
     */
    function gepetrolseguros_remove_jquery_migrate( $scripts ) {
        if ( is_admin() ) {
            return;
        }

        if (
            isset( $scripts->registered['jquery'] )
            && ! empty( $scripts->registered['jquery']->deps )
        ) {
            $scripts->registered['jquery']->deps = array_diff(
                $scripts->registered['jquery']->deps,
                array( 'jquery-migrate' )
            );
        }
    }
}
add_action( 'wp_default_scripts', 'gepetrolseguros_remove_jquery_migrate' );


// =========================================================================
// 4) SHORTCODES Y UTILIDADES GENERALES
// =========================================================================

if ( ! function_exists( 'gepetrolseg_display_today_date' ) ) {
    /**
     * [datetoday] → muestra la fecha actual con el formato de ajustes de WP.
     */
    function gepetrolseg_display_today_date( $atts = array() ) {
        return esc_html( date_i18n( get_option( 'date_format' ) ) );
    }
}
add_shortcode( 'datetoday', 'gepetrolseg_display_today_date' );


if ( ! function_exists( 'rm34_jetpack_deactivate_modules' ) ) {
    /**
     * Desactiva el módulo "notes" de Jetpack, si está activo.
     * Evita notificaciones molestas en el admin.
     */
    function rm34_jetpack_deactivate_modules() {
        if ( class_exists( 'Jetpack' ) && method_exists( 'Jetpack', 'is_module_active' ) ) {
            if ( Jetpack::is_module_active( 'notes' ) ) {
                Jetpack::deactivate_module( 'notes' );
            }
        }
    }
}
add_action( 'admin_init', 'rm34_jetpack_deactivate_modules' );


if ( ! function_exists( 'gepetrolseg_allow_apk_uploads' ) ) {
    /**
     * Permitir subir archivos .apk (por ejemplo, app de clientes).
     *
     * @param array $mimes Tipos MIME permitidos.
     * @return array
     */
    function gepetrolseg_allow_apk_uploads( $mimes ) {
        if ( ! is_array( $mimes ) ) {
            $mimes = array();
        }

        $mimes['apk'] = 'application/vnd.android.package-archive';

        return $mimes;
    }
}
add_filter( 'upload_mimes', 'gepetrolseg_allow_apk_uploads' );


if ( ! function_exists( 'gepetrolseg_allow_mp3_uploads' ) ) {
    /**
     * Permitir subir archivos MP3 a la librería de medios.
     *
     * Usado para la música navideña desde Redux.
     *
     * @param array $mimes Tipos MIME permitidos.
     * @return array
     */
    function gepetrolseg_allow_mp3_uploads( $mimes ) {
        if ( ! is_array( $mimes ) ) {
            $mimes = array();
        }

        $mimes['mp3']  = 'audio/mpeg';
        $mimes['mpeg'] = 'audio/mpeg';

        return $mimes;
    }
}
add_filter( 'upload_mimes', 'gepetrolseg_allow_mp3_uploads' );


// =========================================================================
// 5) MODAL PROFESIONAL EN LA HOME (CON AUDIO NAVIDEÑO OPCIONAL)
// =========================================================================

if ( ! function_exists( 'gepetrol_home_modal_markup' ) ) {
    /**
     * Modal profesional en la Home de Gepetrol Seguros.
     *
     * Controlado por opciones Redux:
     *  - home_modal_enable            → ON/OFF
     *  - home_modal_only_december     → solo diciembre
     *  - home_modal_title             → título
     *  - home_modal_content           → texto
     *  - home_modal_button_text       → texto botón
     *  - home_modal_button_url        → enlace botón
     *  - home_modal_image             → imagen
     *
     * Audio navideño:
     *  - christmas_mode               → off / auto / on
     *  - christmas_enable_audio       → switch
     *  - christmas_audio_file         → media (mp3)
     *
     * El JS del tema se encarga de:
     *  - Mostrar el modal al cargar la home
     *  - Cerrar el modal
     *  - Reproducir/Pausar audio navideño
     *  - Disparar la nieve (gepetrolStartSnow) al cerrar el modal
     */
    function gepetrol_home_modal_markup() {

        // 1) Leer opciones de Redux. Si no hay, usamos un array vacío.
        $options = get_option( 'gepetrol_theme_option' );
        if ( ! is_array( $options ) ) {
            $options = array();
        }

        // 2) Solo en la portada/blog (Home).
        if ( ! is_front_page() && ! is_home() ) {
            return;
        }

        // 3) ¿Está activado? -> si la opción no existe, asumimos ACTIVADO (true)
        $enabled = array_key_exists( 'home_modal_enable', $options )
            ? (bool) $options['home_modal_enable']
            : true; // Por defecto, ON.

        if ( ! $enabled ) {
            return;
        }

        // 4) ¿Solo en diciembre? -> si no existe, asumimos que NO (se muestra siempre)
        $only_december = ! empty( $options['home_modal_only_december'] );
        if ( $only_december ) {
            $month = (int) date_i18n( 'n' );
            if ( 12 !== $month ) {
                return;
            }
        }

        // 5) Valores del modal (texto / imagen)
        $title = ! empty( $options['home_modal_title'] )
            ? $options['home_modal_title']
            : __( 'Gepetrol Seguros – Protege tu vehículo con total confianza', 'gepetrolseguros' );

        $content = ! empty( $options['home_modal_content'] )
            ? $options['home_modal_content']
            : __(
                'Calcula tu seguro de forma rápida y sencilla, sin complicaciones, con el respaldo de Gepetrol Seguros.',
                'gepetrolseguros'
            );

        $button_text = ! empty( $options['home_modal_button_text'] )
            ? $options['home_modal_button_text']
            : __( 'Calcular mi seguro ahora', 'gepetrolseguros' );

        $button_url = ! empty( $options['home_modal_button_url'] )
            ? $options['home_modal_button_url']
            : home_url( '/seguro-online' );

        // Imagen modal
        $image_url = '';
        if ( ! empty( $options['home_modal_image']['url'] ) ) {
            $image_url = $options['home_modal_image']['url'];
        } else {
            // Imagen de fallback dentro del tema
            $image_url = get_template_directory_uri() . '/assets/images/modal-default.jpg';
        }

        // 6) AUDIO NAVIDEÑO: usamos las opciones ya definidas en la sección Modo Navidad
        $christmas_mode = isset( $options['christmas_mode'] )
            ? $options['christmas_mode']
            : 'auto';

        $christmas_enable_audio = ! empty( $options['christmas_enable_audio'] );

        $christmas_audio_url = (
            ! empty( $options['christmas_audio_file'] )
            && ! empty( $options['christmas_audio_file']['url'] )
        )
            ? $options['christmas_audio_file']['url']
            : '';

        /**
         * Permitimos audio solo si:
         *  - Modo Navidad no está en "off"
         *  - Audio activado en Redux
         *  - Hay archivo de audio
         */
        $allow_audio = (
            'off' !== $christmas_mode
            && $christmas_enable_audio
            && ! empty( $christmas_audio_url )
        );
        ?>
        <!-- GEPETROL HOME MODAL -->
        <div id="gepetrol-home-modal" class="gepetrol-modal" aria-hidden="true">
            <div class="gepetrol-modal__backdrop" data-gp-modal-close></div>

            <div class="gepetrol-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="gepetrol-home-modal-title">
                <button
                    type="button"
                    class="gepetrol-modal__close"
                    aria-label="<?php esc_attr_e( 'Cerrar', 'gepetrolseguros' ); ?>"
                    data-gp-modal-close
                >
                    &times;
                </button>

                <?php if ( $image_url ) : ?>
                    <div class="gepetrol-modal__image">
                        <img
                            src="<?php echo esc_url( $image_url ); ?>"
                            alt="<?php esc_attr_e( 'Imagen destacada', 'gepetrolseguros' ); ?>"
                            loading="lazy"
                        >
                    </div>
                <?php endif; ?>

                <div class="gepetrol-modal__body">
                    <?php if ( $title ) : ?>
                        <h2 id="gepetrol-home-modal-title" class="gepetrol-modal__title">
                            <?php echo esc_html( $title ); ?>
                        </h2>
                    <?php endif; ?>

                    <?php if ( $content ) : ?>
                        <div class="gepetrol-modal__content">
                            <?php echo wp_kses_post( wpautop( $content ) ); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ( $button_text && $button_url ) : ?>
                        <a class="gepetrol-modal__button" href="<?php echo esc_url( $button_url ); ?>">
                            <?php echo esc_html( $button_text ); ?>
                        </a>
                    <?php endif; ?>

                    <?php if ( $allow_audio ) : ?>
                        <div class="gepetrol-modal__audio">
                            <button
                                type="button"
                                class="gepetrol-modal__audio-toggle"
                                data-gp-xmas-audio-toggle
                                aria-pressed="false"
                            >
                                🎵 <?php esc_html_e( 'Música de Navidad', 'gepetrolseguros' ); ?>
                            </button>

                            <audio id="gepetrol-xmas-audio" preload="auto" loop>
                                <source src="<?php echo esc_url( $christmas_audio_url ); ?>" type="audio/mpeg">
                            </audio>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- /GEPETROL HOME MODAL -->
        <?php
        // Nota: la capa de nieve (#gepetrol-snow-layer) la generamos en header.php
        // según las opciones de Redux (scope, intensidad, etc.), para no duplicarla aquí.
    }

    // Lo insertamos justo antes de cerrar el </body>
    add_action( 'wp_footer', 'gepetrol_home_modal_markup', 20 );
}