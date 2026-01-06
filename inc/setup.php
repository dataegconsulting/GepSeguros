<?php
/**
 * Configuración principal del tema Gepetrol Seguros.
 *
 * - Carga de textdomain
 * - Soportes de theme (thumbnails, title-tag, HTML5, etc.)
 * - Menús
 * - Tamaños de imagen
 */

if ( ! function_exists( 'gepetrolseguros_setup' ) ) :

	function gepetrolseguros_setup() {

		/**
		 * Traducciones
		 * /wp-content/themes/tu-tema/languages/
		 */
		load_theme_textdomain(
			'gepetrolseguros',
			get_template_directory() . '/languages'
		);

		/**
		 * Estilos del editor (Gutenberg / clásico).
		 * Si tienes un archivo dedicado, ponlo aquí.
		 * Ej: add_editor_style( 'assets/css/editor-style.css' );
		 */
		add_editor_style();

		/**
		 * RSS de entradas y comentarios en <head>.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * <title> gestionado por WordPress (SEO básico correcto).
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Imágenes destacadas (posts y páginas).
		 */
		add_theme_support( 'post-thumbnails' );

		// Tamaño por defecto (puedes ajustarlo a tu diseño).
		set_post_thumbnail_size( 1200, 675, true );

		/**
		 * Cabecera y logo personalizados (por si quieres usar custom-logo).
		 */
		add_theme_support(
			'custom-header',
			array(
				'default-text-color' => '000000',
				'width'              => 1920,
				'height'             => 300,
				'flex-height'        => true,
				'flex-width'         => true,
			)
		);

		add_theme_support(
			'custom-logo',
			array(
				'height'      => 90,
				'width'       => 120,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);

		/**
		 * Menús de navegación.
		 */
		register_nav_menus(
			array(
				'principal' => esc_html__( 'Menú principal', 'gepetrolseguros' ),
				'services'  => esc_html__( 'Menú servicios', 'gepetrolseguros' ),
				'footer'    => esc_html__( 'Menú footer', 'gepetrolseguros' ),
			)
		);

		/**
		 * Marcado HTML5 para componentes core.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);

		/**
		 * Fondo personalizado.
		 */
		add_theme_support(
			'custom-background',
			apply_filters(
				'gepetrolseguros_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		/**
		 * Formatos de entrada (si los usas en la maquetación).
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
			)
		);

		/**
		 * Mejoras de editor / frontend modernas.
		 */
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Tamaños de imagen personalizados del tema.
		 */
		add_image_size( 'gepetrolseguros_48x48_crop', 48, 48, true );
		add_image_size( 'gepetrolseguros_48x48', 48, 0, false );

	}

endif;
add_action( 'after_setup_theme', 'gepetrolseguros_setup' );

/**
 * Registrar tamaños personalizados en el selector de medios.
 */
if ( ! function_exists( 'gepetrolseguros_custom_sizes' ) ) :

	function gepetrolseguros_custom_sizes( $sizes ) {
		$custom_sizes = array(
			'gepetrolseguros_48x48_crop' => '48x48 crop',
			'gepetrolseguros_48x48'      => '48x48',
		);

		return array_merge( $sizes, $custom_sizes );
	}

endif;
add_filter( 'image_size_names_choose', 'gepetrolseguros_custom_sizes' );

/**
 * Anchura máxima del contenido (para embeds, imágenes, etc.).
 * Ayuda a que WordPress genere HTML más correcto.
 */
function gepetrolseguros_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gepetrolseguros_content_width', 1200 );
}
add_action( 'after_setup_theme', 'gepetrolseguros_content_width', 0 );

/**
 * Permitir subir archivos MP3 al media library.
 */
function gepetrolseg_allow_mp3_uploads( $mimes ) {
	if ( ! is_array( $mimes ) ) {
		$mimes = array();
	}

	$mimes['mp3']  = 'audio/mpeg';
	$mimes['mpeg'] = 'audio/mpeg';

	return $mimes;
}
add_filter( 'upload_mimes', 'gepetrolseg_allow_mp3_uploads' );


