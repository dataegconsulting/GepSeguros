<?php

/**
 * ReduxFramework Barebones Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 *
 * @package gepetrolseguros
 */

// Check if Redux installed.
if (! class_exists('ReduxFrameworkPlugin')) {
	return;
}
// This is your option name where all the Redux data is stored.
$opt_name = 'gepetrol_theme_option';

/**
 * SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 * */
$theme = wp_get_theme(); // For use with some settings. Not necessary.
$args  = array(
	// TYPICAL -> Change these values as you need/desire.
	'opt_name'             => $opt_name,
	'disable_tracking'     => true,
	'display_name'         => $theme->get('Name'),
	'display_version'      => esc_html__('Desarrollado por: Dataeg', 'gepetrolseguros'),
	'menu_type'            => 'menu',
	'allow_sub_menu'       => true,
	'menu_title'           => esc_html__('Theme Options', 'gepetrolseguros'),
	'page_title'           => esc_html__('Theme Options', 'gepetrolseguros'),
	'google_api_key'       => '',
	'google_update_weekly' => false,
	'async_typography'     => false,
	'admin_bar'            => true,
	'admin_bar_icon'       => 'dashicons-hammer',
	'admin_bar_priority'   => 50,
	'global_variable'      => '',
	'dev_mode'             => false,
	'update_notice'        => false,
	'customizer'           => true,
	'page_priority'        => 61,
	'page_parent'          => 'themes.php',
	'page_permissions'     => 'manage_options',
	'menu_icon'            => 'dashicons-hammer',
	'last_tab'             => '',
	'page_icon'            => 'icon-themes',
	'page_slug'            => '_options',
	'save_defaults'        => true,
	'default_show'         => false,
	'default_mark'         => '',
	'footer_credit'        => $theme->get('Name'),
	'show_import_export'   => true,
	'show_options_object'  => true,
	'transient_time'       => 60 * MINUTE_IN_SECONDS,
	'output'               => true,
	'output_tag'           => true,
	'database'             => '',
	'use_cdn'              => true,
	'ajax_save'            => true,
	'hints'                => array(
		'icon_position' => 'right',
		'icon_size'     => 'normal',
		'tip_style'     => array(
			'color' => 'light',
		),
		'tip_position'  => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect'    => array(
			'show' => array(
				'duration' => '500',
				'event'    => 'mouseover',
			),
			'hide' => array(
				'duration' => '500',
				'event'    => 'mouseleave unfocus',
			),
		),
	),
);
Redux::setArgs($opt_name, $args);

/*
 * ---> END ARGUMENTS
 */

/*
 *
 * ---> START SECTIONS
 *
 */
$ext_path = get_template_directory() . '/inc/redux-framework/extensions/';

// Evitar deprecated: usar get_extensions en lugar de setExtensions
if (class_exists('Redux') && is_dir($ext_path)) {
	Redux::get_extensions($opt_name, $ext_path);
}

/**
 * As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for
 */


// -> START Basic Fields.
Redux::setSection(
	$opt_name,
	array(
		'title' => esc_html__('General', 'gepetrolseguros'),
		'icon'  => 'el el-cog',
		'id'    => 'theme-general',
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__('Fonts', 'gepetrolseguros'),
		'id'         => 'basic-settings',
		'icon'       => 'el el-fontsize',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'             => 'general_typography',
				'type'           => 'typography',
				'title'          => esc_html__('General', 'gepetrolseguros'),
				'subtitle'       => esc_html__('This will be the default font of your website.', 'gepetrolseguros'),
				'font-family'    => false,
				'text-transform' => true,
				'letter-spacing' => true,
				'font-style'     => false,
				'all_styles'     => false,
				'output'         => array('body'),
				'units'          => 'px',
				'default'        => array(
					'font-weight'    => '200',
					'font-size'      => '20px',
					'color'          => '#828282',
					'line-height'    => '32px',
					'letter-spacing' => '0',
				),
				'required'       => array(
					array(
						'active_typekit',
						'equals',
						true,
					),
				),
			),
			array(
				'id'             => 'general_typography2',
				'type'           => 'typography',
				'title'          => esc_html__('General', 'gepetrolseguros'),
				'subtitle'       => esc_html__('This will be the default font of your website.', 'gepetrolseguros'),
				'text-transform' => true,
				'letter-spacing' => true,
				'font-style'     => false,
				'all_styles'     => false,
				'output'         => array('body'),
				'units'          => 'px',
				'default'        => array(
					'font-family'    => 'Montserrat',
					'font-weight'    => '500',
					'font-size'      => '16px',
					'color'          => '#868890',
					'line-height'    => '28px',
					'letter-spacing' => '0.5px',
				),
				'required'       => array(
					array(
						'active_typekit',
						'equals',
						false,
					),
				),
			),

			array(
				'id'             => 'h1_typography',
				'type'           => 'typography',
				'title'          => esc_html__('H1', 'gepetrolseguros'),
				'subtitle'       => esc_html__('This will be the default font for all H1 tags of your website.', 'gepetrolseguros'),
				'font-family'    => false,
				'text-transform' => true,
				'letter-spacing' => true,
				'font-style'     => false,
				'all_styles'     => false,
				'output'         => array('h1'),
				'units'          => 'px',
				'default'        => array(
					'font-weight'    => '200',
					'font-size'      => '20px',
					'color'          => '#1d1847',
					'line-height'    => '32px',
					'letter-spacing' => '0',
				),
				'required'       => array(
					array(
						'active_typekit',
						'equals',
						true,
					),
				),
			),

			array(
				'id'             => 'h1_typography2',
				'type'           => 'typography',
				'title'          => esc_html__('H1', 'gepetrolseguros'),
				'subtitle'       => esc_html__('This will be the default font for all H1 tags of your website.', 'gepetrolseguros'),
				'google'         => true,
				'font-backup'    => true,
				'text-align'     => false,
				'font-weight'    => true,
				'font-style'     => true,
				'line-height'    => true,
				'text-transform' => true,
				'letter-spacing' => true,
				'font-family'    => true,
				'color'          => true,
				'all_styles'     => false,
				'output'         => array('h1'),
				'units'          => 'px',
				'default'        => array(
					'google'         => true,
					'font-family'    => 'Poppins',
					'font-weight'    => '600',
					'font-size'      => '50px',
					'color'          => '#1d1847',
					'line-height'    => '60px',
					'letter-spacing' => '2px',
				),
				'required'       => array(
					array(
						'active_typekit',
						'equals',
						false,
					),
				),
			),

			array(
				'id'             => 'h2_typography',
				'type'           => 'typography',
				'title'          => esc_html__('H2', 'gepetrolseguros'),
				'subtitle'       => esc_html__('This will be the default font for all H2 tags of your website.', 'gepetrolseguros'),
				'font-family'    => false,
				'text-transform' => true,
				'letter-spacing' => true,
				'font-style'     => false,
				'all_styles'     => false,
				'output'         => array('h2'),
				'units'          => 'px',
				'default'        => array(
					'font-weight'    => '200',
					'font-size'      => '20px',
					'color'          => '#1d1847',
					'line-height'    => '32px',
					'letter-spacing' => '0',
				),
				'required'       => array(
					array(
						'active_typekit',
						'equals',
						true,
					),
				),
			),
			array(
				'id'             => 'h2_typography2',
				'type'           => 'typography',
				'title'          => esc_html__('H2', 'gepetrolseguros'),
				'subtitle'       => esc_html__('This will be the default font for all H2 tags of your website.', 'gepetrolseguros'),
				'google'         => true,
				'font-backup'    => true,
				'text-align'     => false,
				'font-weight'    => true,
				'font-style'     => true,
				'line-height'    => true,
				'text-transform' => true,
				'letter-spacing' => true,
				'font-family'    => true,
				'color'          => true,
				'all_styles'     => false,
				'output'         => array('h2'),
				'units'          => 'px',
				'default'        => array(
					'google'         => true,
					'font-family'    => 'Poppins',
					'font-weight'    => '600',
					'font-size'      => '40px',
					'color'          => '#1d1847',
					'line-height'    => '52px',
					'letter-spacing' => '2px',
				),
				'required'       => array(
					array(
						'active_typekit',
						'equals',
						false,
					),
				),
			),

			array(
				'id'             => 'h3_typography',
				'type'           => 'typography',
				'title'          => esc_html__('H3', 'gepetrolseguros'),
				'subtitle'       => esc_html__('This will be the default font for all H3 tags of your website.', 'gepetrolseguros'),
				'font-family'    => false,
				'text-transform' => true,
				'letter-spacing' => true,
				'font-style'     => false,
				'all_styles'     => false,
				'output'         => array('h3'),
				'units'          => 'px',
				'default'        => array(
					'font-weight'    => '200',
					'font-size'      => '20px',
					'color'          => '#1d1847',
					'line-height'    => '32px',
					'letter-spacing' => '0',
				),
				'required'       => array(
					array(
						'active_typekit',
						'equals',
						true,
					),
				),
			),
			array(
				'id'             => 'h3_typography2',
				'type'           => 'typography',
				'title'          => esc_html__('H3', 'gepetrolseguros'),
				'subtitle'       => esc_html__('This will be the default font for all H3 tags of your website.', 'gepetrolseguros'),
				'google'         => true,
				'font-backup'    => true,
				'text-align'     => false,
				'font-weight'    => true,
				'font-style'     => true,
				'line-height'    => true,
				'text-transform' => true,
				'letter-spacing' => true,
				'font-family'    => true,
				'color'          => true,
				'all_styles'     => false,
				'output'         => array('h3'),
				'units'          => 'px',
				'default'        => array(
					'google'         => true,
					'font-family'    => 'Poppins',
					'font-weight'    => '600',
					'font-size'      => '35px',
					'color'          => '#1d1847',
					'line-height'    => '47px',
					'letter-spacing' => '2px',
				),
				'required'       => array(
					array(
						'active_typekit',
						'equals',
						false,
					),
				),
			),

			array(
				'id'             => 'h4_typography',
				'type'           => 'typography',
				'title'          => esc_html__('H4', 'gepetrolseguros'),
				'subtitle'       => esc_html__('This will be the default font for all H4 tags of your website.', 'gepetrolseguros'),
				'font-family'    => false,
				'text-transform' => true,
				'letter-spacing' => true,
				'font-style'     => false,
				'all_styles'     => false,
				'output'         => array('h4'),
				'units'          => 'px',
				'default'        => array(
					'font-weight'    => '200',
					'font-size'      => '20px',
					'color'          => '#1d1847',
					'line-height'    => '32px',
					'letter-spacing' => '0',
				),
				'required'       => array(
					array(
						'active_typekit',
						'equals',
						true,
					),
				),
			),
			array(
				'id'             => 'h4_typography2',
				'type'           => 'typography',
				'title'          => esc_html__('H4', 'gepetrolseguros'),
				'subtitle'       => esc_html__('This will be the default font for all H4 tags of your website.', 'gepetrolseguros'),
				'google'         => true,
				'font-backup'    => true,
				'text-align'     => false,
				'font-weight'    => true,
				'font-style'     => true,
				'line-height'    => true,
				'text-transform' => true,
				'letter-spacing' => true,
				'font-family'    => true,
				'color'          => true,
				'all_styles'     => false,
				'output'         => array('h4'),
				'units'          => 'px',
				'default'        => array(
					'google'         => true,
					'font-family'    => 'Poppins',
					'font-weight'    => '600',
					'font-size'      => '30px',
					'color'          => '#1d1847',
					'line-height'    => '42px',
					'letter-spacing' => '0.2px',
				),
				'required'       => array(
					array(
						'active_typekit',
						'equals',
						false,
					),
				),
			),

			array(
				'id'             => 'h5_typography',
				'type'           => 'typography',
				'title'          => esc_html__('H5', 'gepetrolseguros'),
				'subtitle'       => esc_html__('This will be the default font for all H5 tags of your website.', 'gepetrolseguros'),
				'font-family'    => false,
				'text-transform' => true,
				'letter-spacing' => true,
				'font-style'     => false,
				'all_styles'     => false,
				'output'         => array('h5'),
				'units'          => 'px',
				'default'        => array(
					'font-weight'    => '200',
					'font-size'      => '20px',
					'color'          => '#1d1847',
					'line-height'    => '32px',
					'letter-spacing' => '0',
				),
				'required'       => array(
					array(
						'active_typekit',
						'equals',
						true,
					),
				),
			),
			array(
				'id'             => 'h5_typography2',
				'type'           => 'typography',
				'title'          => esc_html__('H5', 'gepetrolseguros'),
				'subtitle'       => esc_html__('This will be the default font for all H5 tags of your website.', 'gepetrolseguros'),
				'google'         => true,
				'font-backup'    => true,
				'text-align'     => false,
				'font-weight'    => true,
				'font-style'     => true,
				'line-height'    => true,
				'text-transform' => true,
				'letter-spacing' => true,
				'font-family'    => true,
				'color'          => true,
				'all_styles'     => false,
				'output'         => array('h5'),
				'units'          => 'px',
				'default'        => array(
					'google'         => true,
					'font-family'    => 'Poppins',
					'font-weight'    => '600',
					'font-size'      => '20px',
					'color'          => '#1d1847',
					'line-height'    => '32px',
					'letter-spacing' => '2px',
				),
				'required'       => array(
					array(
						'active_typekit',
						'equals',
						false,
					),
				),
			),

			array(
				'id'             => 'h6_typography',
				'type'           => 'typography',
				'title'          => esc_html__('H6', 'gepetrolseguros'),
				'subtitle'       => esc_html__('This will be the default font for all H6 tags of your website.', 'gepetrolseguros'),

				'font-family'    => false,

				'text-transform' => true,
				'letter-spacing' => true,
				'font-style'     => false,
				'all_styles'     => false,
				'output'         => array('h6'),
				'units'          => 'px',
				'default'        => array(
					'font-weight'    => '200',
					'font-size'      => '20px',
					'color'          => '#1d1847',
					'line-height'    => '32px',
					'letter-spacing' => '0',
				),
				'required'       => array(
					array(
						'active_typekit',
						'equals',
						true,
					),
				),
			),
			array(
				'id'             => 'h6_typography2',
				'type'           => 'typography',
				'title'          => esc_html__('H6', 'gepetrolseguros'),
				'subtitle'       => esc_html__('This will be the default font for all H6 tags of your website.', 'gepetrolseguros'),
				'google'         => true,
				'font-backup'    => true,
				'text-align'     => false,
				'font-weight'    => true,
				'font-style'     => true,
				'line-height'    => true,
				'text-transform' => true,
				'letter-spacing' => true,
				'font-family'    => true,
				'color'          => true,
				'all_styles'     => false,
				'output'         => array('h6'),
				'units'          => 'px',
				'default'        => array(
					'google'         => true,
					'font-family'    => 'Poppins',
					'font-weight'    => '400',
					'font-size'      => '18px',
					'color'          => '#1d1847',
					'line-height'    => '28px',
					'letter-spacing' => '0px',
				),
				'required'       => array(
					array(
						'active_typekit',
						'equals',
						false,
					),
				),
			),
		),
	)
);

Redux::setSection($opt_name, array(
	'title'  => esc_html__('Modo Navidad', 'gepetrolseguros'),
	'id'     => 'christmas_mode_section',
	'icon'   => 'el el-gift',
	'fields' => array(

		array(
			'id'      => 'christmas_mode',
			'type'    => 'button_set',
			'title'   => esc_html__('Modo Navidad', 'gepetrolseguros'),
			'subtitle' => esc_html__('Controla la decoración navideña de la web.', 'gepetrolseguros'),
			'options' => array(
				'off'  => esc_html__('Desactivado', 'gepetrolseguros'),
				'auto' => esc_html__('Automático (solo en diciembre)', 'gepetrolseguros'),
				'on'   => esc_html__('Siempre activo', 'gepetrolseguros'),
			),
			'default' => 'auto',
		),

		// Texto de franja superior del slider (si luego quieres usarlo)
		array(
			'id'       => 'christmas_ribbon_text',
			'type'     => 'text',
			'title'    => esc_html__('Texto franja superior (slider)', 'gepetrolseguros'),
			'default'  => '🎄 Especial Navidad Gepetrol Seguros: protege tu vehículo y disfruta las fiestas. 🎁',
			'required' => array('christmas_mode', '!=', 'off'),
		),

		// Texto del badge en el slider
		array(
			'id'       => 'christmas_badge_text',
			'type'     => 'text',
			'title'    => esc_html__('Texto del badge en el slider', 'gepetrolseguros'),
			'default'  => '🎅 Protege tu coche estas fiestas',
			'required' => array('christmas_mode', '!=', 'off'),
		),

		// Color principal navideño
		array(
			'id'       => 'christmas_primary_color',
			'type'     => 'color',
			'title'    => esc_html__('Color principal navideño', 'gepetrolseguros'),
			'default'  => '#b30000',
			'validate' => 'color',
			'required' => array('christmas_mode', '!=', 'off'),
		),

		// IMAGEN DECORATIVA HEADER (bola, Papá Noel, etc.)
		array(
			'id'       => 'christmas_header_image',
			'type'     => 'media',
			'title'    => esc_html__('Imagen decorativa header', 'gepetrolseguros'),
			'subtitle' => esc_html__('Sube una bola navideña, Papá Noel o adorno para la esquina del header.', 'gepetrolseguros'),
			'url'      => true,
			'required' => array('christmas_mode', '!=', 'off'),
		),

		// ACTIVAR AUDIO
		array(
			'id'       => 'christmas_enable_audio',
			'type'     => 'switch',
			'title'    => esc_html__('Música de Navidad', 'gepetrolseguros'),
			'subtitle' => esc_html__('Muestra un botón para reproducir/pausar música navideña.', 'gepetrolseguros'),
			'default'  => false,
			'on'       => esc_html__('Activado', 'gepetrolseguros'),
			'off'      => esc_html__('Desactivado', 'gepetrolseguros'),
			'required' => array('christmas_mode', '!=', 'off'),
		),

		array(
			'id'       => 'christmas_audio_file',
			'type'     => 'media',
			'title'    => esc_html__('Archivo de audio navideño (mp3)', 'gepetrolseguros'),
			'subtitle' => esc_html__('Sube aquí tu música navideña de fondo (recomendado formato .mp3).', 'gepetrolseguros'),
			'required' => array(
				array('christmas_mode', '!=', 'off'),
				array('christmas_enable_audio', '=', true),
			),
			'url'      => true,

			// OPCIONAL: si tu versión/extensión de Redux lo soporta,
			// esto hará que el selector de medios se centre en audio.
			// Si ves que da problemas, puedes comentar esta línea sin miedo.
			'library_filter' => array('audio'),
		),

		// --- EFECTO NIEVE / EMOJIS ---
		array(
			'id'       => 'christmas_snow_enable',
			'type'     => 'switch',
			'title'    => esc_html__('Activar nieve/emoji en la web', 'gepetrolseguros'),
			'subtitle' => esc_html__('Activa un efecto continuo de nieve o emojis navideños.', 'gepetrolseguros'),
			'on'       => esc_html__('Sí', 'gepetrolseguros'),
			'off'      => esc_html__('No', 'gepetrolseguros'),
			'default'  => true,
			'required' => array('christmas_mode', '!=', 'off'),
		),

		array(
			'id'       => 'christmas_snow_intensity',
			'type'     => 'select',
			'title'    => esc_html__('Intensidad de la nieve', 'gepetrolseguros'),
			'options'  => array(
				'low'    => esc_html__('Suave', 'gepetrolseguros'),
				'medium' => esc_html__('Media', 'gepetrolseguros'),
				'high'   => esc_html__('Intensa', 'gepetrolseguros'),
			),
			'default'  => 'medium',
			'required' => array(
				array('christmas_mode', '!=', 'off'),
				array('christmas_snow_enable', '=', true),
			),
		),

		array(
			'id'       => 'christmas_snow_style',
			'type'     => 'button_set',
			'title'    => esc_html__('Estilo de copos', 'gepetrolseguros'),
			'options'  => array(
				'snow'   => esc_html__('Solo copos ❄️', 'gepetrolseguros'),
				'emojis' => esc_html__('Solo emojis 🎄', 'gepetrolseguros'),
				'emojis2' => esc_html__('Solo emojis ☃️', 'gepetrolseguros'),
				'both'   => esc_html__('Mezcla ❄️ + 🎄 + ☃️', 'gepetrolseguros'),
			),
			'default'  => 'both',
			'required' => array(
				array('christmas_mode', '!=', 'off'),
				array('christmas_snow_enable', '=', true),
			),
		),

		array(
			'id'       => 'christmas_snow_scope',
			'type'     => 'button_set',
			'title'    => esc_html__('Dónde mostrar la nieve', 'gepetrolseguros'),
			'subtitle' => esc_html__('Elige en qué partes del sitio se verá la nieve.', 'gepetrolseguros'),
			'options'  => array(
				'home' => esc_html__('Solo Inicio (Home)', 'gepetrolseguros'),
				'all'  => esc_html__('Todo el sitio', 'gepetrolseguros'),
			),
			'default'  => 'home',
			'required' => array(
				array('christmas_mode', '!=', 'off'),
				array('christmas_snow_enable', '=', true),
			),
		),

		array(
			'id'       => 'christmas_snow_mobile_enable',
			'type'     => 'switch',
			'title'    => esc_html__('Nieve en móviles', 'gepetrolseguros'),
			'subtitle' => esc_html__('Activa o desactiva la nieve en dispositivos móviles.', 'gepetrolseguros'),
			'on'       => esc_html__('Sí', 'gepetrolseguros'),
			'off'      => esc_html__('No', 'gepetrolseguros'),
			'default'  => true,
			'required' => array(
				array('christmas_mode', '!=', 'off'),
				array('christmas_snow_enable', '=', true),
			),
		),

	),
));

// MODAL DE INICIO (HOME)
Redux::setSection(
	$opt_name,
	array(
		'title'   => esc_html__('Modal Inicio', 'gepetrolseguros'),
		'icon'    => 'el el-popup',
		'id'      => 'home-modal',
		'submenu' => false,
		'fields'  => array(

			array(
				'id'       => 'home_modal_enable',
				'type'     => 'switch',
				'title'    => esc_html__('Activar modal en la página de inicio', 'gepetrolseguros'),
				'subtitle' => esc_html__('Muestra un modal promocional/temporada en la Home.', 'gepetrolseguros'),
				'on'       => esc_html__('Sí', 'gepetrolseguros'),
				'off'      => esc_html__('No', 'gepetrolseguros'),
				'default'  => false,
			),

			array(
				'id'       => 'home_modal_only_december',
				'type'     => 'switch',
				'title'    => esc_html__('Solo en Navidad (diciembre)', 'gepetrolseguros'),
				'subtitle' => esc_html__('Si se activa, el modal solo aparecerá en el mes de diciembre.', 'gepetrolseguros'),
				'on'       => esc_html__('Sí', 'gepetrolseguros'),
				'off'      => esc_html__('No', 'gepetrolseguros'),
				'default'  => true,
			),

			array(
				'id'       => 'home_modal_title',
				'type'     => 'text',
				'title'    => esc_html__('Título del modal', 'gepetrolseguros'),
				'default'  => esc_html__('Especial Navidad Gepetrol Seguros', 'gepetrolseguros'),
				'required' => array('home_modal_enable', '=', true),
			),

			array(
				'id'       => 'home_modal_content',
				'type'     => 'editor',
				'title'    => esc_html__('Mensaje del modal', 'gepetrolseguros'),
				'subtitle' => esc_html__('Puedes poner aquí una oferta, mensaje navideño o aviso importante.', 'gepetrolseguros'),
				'default'  => esc_html__('Protege tu vehículo y disfruta de las fiestas con la tranquilidad de Gepetrol Seguros.', 'gepetrolseguros'),
				'required' => array('home_modal_enable', '=', true),
			),

			// ✅ Media genérico (imagen O vídeo)
            array(
                'id'       => 'home_modal_image',
                'type'     => 'media',
                'title'    => esc_html__( 'Media del modal (imagen o vídeo)', 'gepetrolseguros' ),
                'subtitle' => esc_html__( 'Sube una imagen (JPG/PNG) o un vídeo (MP4) que se mostrará en el lado izquierdo del modal.', 'gepetrolseguros' ),
                'required' => array( 'home_modal_enable', '=', true ),
                'url'      => true,
            ),

            // ✅ Switch para indicar que el media es un vídeo
            array(
                'id'       => 'home_modal_media_is_video',
                'type'     => 'switch',
                'title'    => esc_html__( 'Usar el media como vídeo', 'gepetrolseguros' ),
                'subtitle' => esc_html__( 'Actívalo si el archivo subido es un vídeo (MP4). Si está desactivado, se mostrará como imagen.', 'gepetrolseguros' ),
                'on'       => esc_html__( 'Vídeo', 'gepetrolseguros' ),
                'off'      => esc_html__( 'Imagen', 'gepetrolseguros' ),
                'default'  => false,
                'required' => array( 'home_modal_enable', '=', true ),
            ),

			array(
				'id'       => 'home_modal_button_text',
				'type'     => 'text',
				'title'    => esc_html__('Texto del botón', 'gepetrolseguros'),
				'default'  => esc_html__('Calcular mi seguro ahora', 'gepetrolseguros'),
				'required' => array('home_modal_enable', '=', true),
			),

			array(
				'id'       => 'home_modal_button_url',
				'type'     => 'text',
				'title'    => esc_html__('URL del botón', 'gepetrolseguros'),
				'default'  => home_url('/seguro-online'),
				'required' => array('home_modal_enable', '=', true),
			),
		),
	)
);

$fields_array      = array();
$how_many_sections = 50;

for ($i = 1; $i <= $how_many_sections; $i++) {
	$j               = $i - 1;
	$sectionstartid  = 'section-start-';
	$sectionstartid .= $i;

	if (1 === $i) {
		$sectionstart = array(
			'id'     => $sectionstartid,
			'type'   => 'section',
			'title'  => esc_html__('Custom Font ', 'gepetrolseguros') . $i,
			'indent' => true,
		);
	} else {
		$sectionstart = array(
			'id'       => $sectionstartid,
			'type'     => 'section',
			'title'    => esc_html__('Custom Font ', 'gepetrolseguros') . $i,
			'indent'   => true,
			'required' => array(
				array(
					'webfontName' . $j,
					'!=',
					false,
				),
			),
		);
	}

	$webfontnameid  = 'webfontName';
	$webfontnameid .= $i;

	$webfontname = array(
		'id'    => $webfontnameid,
		'type'  => 'text',
		'title' => esc_html__('Font Name', 'gepetrolseguros'),
		'desc'  => esc_html__('Give this any custom Name', 'gepetrolseguros'),
	);

	$woofid  = 'woff';
	$woofid .= $i;

	$woof = array(
		'id'             => $woofid,
		'type'           => 'media',
		'title'          => esc_html__('WOFF ', 'gepetrolseguros'),
		'class'          => 'medium-text',
		'mode'           => false,
		'preview'        => false,
		'library_filter' => array('woof'),
		'placeholder'    => 'No Fonts selected',
	);

	$wooftwoid  = 'woffTwo';
	$wooftwoid .= $i;

	$wooftwo = array(
		'id'             => $wooftwoid,
		'type'           => 'media',
		'title'          => esc_html__('WOFF2 ', 'gepetrolseguros'),
		'class'          => 'medium-text',
		'mode'           => false,
		'preview'        => false,
		'library_filter' => array('woof2'),
		'placeholder'    => 'No Fonts selected',
	);

	$ttfid  = 'ttf';
	$ttfid .= $i;

	$ttf = array(
		'id'          => $ttfid,
		'type'        => 'media',
		'title'       => esc_html__('TTF ', 'gepetrolseguros'),
		'class'       => 'medium-text',
		'mode'        => false,
		'preview'     => false,
		'placeholder' => 'No Fonts selected',
	);

	$svgid  = 'svg';
	$svgid .= $i;

	$svg = array(
		'id'          => $svgid,
		'type'        => 'media',
		'title'       => esc_html__('SVG ', 'gepetrolseguros'),
		'class'       => 'medium-text',
		'mode'        => false,
		'preview'     => false,
		'placeholder' => 'No Fonts selected',
	);

	$eotid  = 'eot';
	$eotid .= $i;

	$eot = array(
		'id'          => $eotid,
		'type'        => 'media',
		'title'       => esc_html__('EOT ', 'gepetrolseguros'),
		'class'       => 'medium-text',
		'mode'        => false,
		'preview'     => false,
		'placeholder' => 'No Fonts selected',
	);

	$sectionendid  = 'section-end-';
	$sectionendid .= $i;

	$sectionend = array(
		'id'     => $sectionendid,
		'type'   => 'section',
		'indent' => false,
	);

	array_push($fields_array, $sectionstart);
	array_push($fields_array, $webfontname);
	array_push($fields_array, $woof);
	array_push($fields_array, $wooftwo);
	array_push($fields_array, $ttf);
	array_push($fields_array, $svg);
	array_push($fields_array, $eot);
	array_push($fields_array, $sectionend);
}


Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__('Scroll To Top', 'gepetrolseguros'),
		'icon'       => 'el el-chevron-up',
		'id'         => 'scroll_to_top',
		'subsection' => true,
		'fields'     => array(

			// Scroll To Top Info.
			array(
				'id'    => 'info_scroll_to_top',
				'type'  => 'info',
				'title' => esc_html__('Scroll To Top Options', 'gepetrolseguros'),
				'style' => 'custom',
				'color' => '#b9cbe4',
				'class' => 'radiant-subheader',
			),

			// Scroll To Top Switch.
			array(
				'id'       => 'scroll_to_top_switch',
				'type'     => 'switch',
				'title'    => esc_html__('Activate Scroll To Top', 'gepetrolseguros'),
				'subtitle' => esc_html__('Choose if want to activate Scroll To Top or not.', 'gepetrolseguros'),
				'on'       => esc_html__('Yes', 'gepetrolseguros'),
				'off'      => esc_html__('No', 'gepetrolseguros'),
				'default'  => true,
			),

			// Scroll To Top Direction.
			array(
				'id'       => 'scroll_to_top_direction',
				'type'     => 'select',
				'title'    => esc_html__('Direction', 'gepetrolseguros'),
				'subtitle' => esc_html__('Select Direction of the Scroll To Top.', 'gepetrolseguros'),
				'options'  => array(
					'left'  => 'Left',
					'right' => 'Right',
				),
				'default'  => 'right',
				'required' => array(
					array(
						'scroll_to_top_switch',
						'equals',
						true,
					),
				),
			),

			// Scroll To Top Background Color.
			array(
				'id'       => 'scroll_to_top_background_color',
				'type'     => 'color_rgba',
				'title'    => esc_html__('Background Color', 'gepetrolseguros'),
				'subtitle' => esc_html__('Pick a background color for the Scroll To Top.', 'gepetrolseguros'),
				'default'  => array(
					'color' => '#ffffff',
					'alpha' => 1,
				),
				'output'   => array(
					'background-color' => 'body > .scrollup',
				),
				'required' => array(
					array(
						'scroll_to_top_switch',
						'equals',
						true,
					),
				),
			),

			// Scroll To Top Icon Color.
			array(
				'id'       => 'scroll_to_top_icon_color',
				'type'     => 'color_rgba',
				'title'    => esc_html__('Icon Color', 'gepetrolseguros'),
				'subtitle' => esc_html__('Pick a icon color for the Scroll To Top.', 'gepetrolseguros'),
				'default'  => array(
					'color' => '#191919',
					'alpha' => 1,
				),
				'output'   => array(
					'color' => 'body > .scrollup',
				),
				'required' => array(
					array(
						'scroll_to_top_switch',
						'equals',
						true,
					),
				),
			),

		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__('Analytics Code', 'gepetrolseguros'),
		'icon'       => 'el el-folder-open',
		'id'         => 'analytics_code',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'google_site_verification_code',
				'type'     => 'text',
				'title'    => esc_html__('Google Site Verification Code', 'gepetrolseguros'),
				'subtitle' => esc_html__('Put Google Site Verification Content. i.e. +2nxGUDJ4QpAZ5l9Bs4jdiLVC21AIh5d1Nl23908vVuFHs34=', 'gepetrolseguros'),
				'validate' => 'no_special_chars',
				'default'  => '',
			),
			array(
				'id'       => 'google_analytics_code',
				'type'     => 'text',
				'title'    => esc_html__('Google Analytics Code', 'gepetrolseguros'),
				'subtitle' => esc_html__('Put Google Analytics code here ( Put the whole code including UA i.e. UA-XXXXX-Y).', 'gepetrolseguros'),
				'validate' => 'no_special_chars',
				'default'  => '',
			),
			array(
				'id'       => 'fb_pixel_code',
				'type'     => 'text',
				'title'    => esc_html__('FB Pixel Code', 'gepetrolseguros'),
				'subtitle' => esc_html__('Put FB Pixel Code code here.', 'gepetrolseguros'),
				'validate' => 'no_special_chars',
				'default'  => '',
			),
		),
	)
);

// -> START Contactos.
Redux::setSection(
	$opt_name,
	array(
		'title' => esc_html__('Contactos', 'gepetrolseguros'),
		'icon'  => 'el el-address-book',
		'id'    => 'contact-general',
	)
);

// Malabo
Redux::setSection(
	$opt_name,
	array(
		'title'		 => __('Malabo', 'gepetrolseguros'),
		'icon' 		 => 'el el-circle-arrow-right',
		'id'         => 'contact-malabo',
		'subsection' => true,
		'fields'  	 => array(

			array(
				'id'       => 'contact_adress_malabo',
				'type'     => 'text',
				'title'    => esc_html__('Dirección Gepetrol Seguros', 'gepetrolseguros'),
				'subtitle'     => esc_html__('Malabo', 'gepetrolseguros'),
			),

			array(
				'id'       => 'contact_email_malabo',
				'type'     => 'text',
				'title'    => esc_html__('Email Gepetrol Seguros', 'gepetrolseguros'),
				'subtitle'     => esc_html__('Malabo', 'gepetrolseguros'),
			),

			array(
				'id'       => 'contact_phone_malabo',
				'type'     => 'text',
				'title'    => esc_html__('Telefono  Gepetrol Seguros', 'gepetrolseguros'),
				'subtitle'     => esc_html__('Malabo', 'gepetrolseguros'),
			),
		),
	)
);

//Bata
Redux::setSection(
	$opt_name,
	array(
		'title'		 => __('Bata', 'gepetrolseguros'),
		'icon' 		 => 'el el-circle-arrow-right',
		'id'         => 'contact-bata',
		'subsection' => true,
		'fields'  	 => array(

			array(
				'id'       => 'contact_adress_bata',
				'type'     => 'text',
				'title'    => esc_html__('Dirección Gepetrol Seguros', 'gepetrolseguros'),
				'subtitle'     => esc_html__('Bata', 'gepetrolseguros'),
			),

			array(
				'id'       => 'contact_email_bata',
				'type'     => 'text',
				'title'    => esc_html__('Email Gepetrol Seguros', 'gepetrolseguros'),
				'subtitle'     => esc_html__('Bata', 'gepetrolseguros'),
			),

			array(
				'id'       => 'contact_phone_bata',
				'type'     => 'text',
				'title'    => esc_html__('Telefono  Gepetrol Seguros', 'gepetrolseguros'),
				'subtitle'     => esc_html__('Bata', 'gepetrolseguros'),
			),
			array(
				'id'       => 'contact_phone_two_bata',
				'type'     => 'text',
				'title'    => esc_html__('Telefono  Gepetrol Seguros', 'gepetrolseguros'),
				'subtitle'     => esc_html__('Bata', 'gepetrolseguros'),
			),
		),
	)
);


// Redes Sociales
Redux::setSection(
	$opt_name,
	array(
		'title'   => esc_html__('Redes Sociales', 'gepetrolseguros'),
		'icon'    => 'el el-globe',
		'id'      => 'social_icons',
		'submenu' => false,
		'fields'  => array(

			// Open social links in new window.
			/* array(
				'id'      => 'social-icon-target',
				'type'    => 'switch',
				'title'   => esc_html__( 'Open links in new window', 'gepetrolseguros' ),
				'desc'    => esc_html__( 'Open social links in new window', 'gepetrolseguros' ),
				'default' => true,
			), */

			// Redes Sociales Switch.
			array(
				'id'       => 'social-icon-target',
				'type'     => 'switch',
				'title'    => esc_html__('Activa la Redes Sociales', 'gepetrolseguros'),
				'subtitle' => esc_html__('Elija si desea activar la Redes Sociales o no.', 'gepetrolseguros'),
				'on'       => esc_html__('Yes', 'gepetrolseguros'),
				'off'      => esc_html__('No', 'gepetrolseguros'),
				'default'  => false,
			),

			// Facebook.
			array(
				'id'      => 'social-icon-facebook',
				'type'    => 'text',
				'title'   => esc_html__('Facebook', 'gepetrolseguros'),
				'desc'    => esc_html__('Enlace a la página de perfil', 'gepetrolseguros'),
				'default' => '#',
			),

			// Twitter.
			array(
				'id'      => 'social-icon-twitter',
				'type'    => 'text',
				'title'   => esc_html__('Twitter', 'gepetrolseguros'),
				'desc'    => esc_html__('Enlace a la página de perfil', 'gepetrolseguros'),
				'default' => '#',
			),

			// YouTube.
			array(
				'id'    => 'social-icon-youtube',
				'type'  => 'text',
				'title' => esc_html__('YouTube', 'gepetrolseguros'),
				'desc'  => esc_html__('Enlace a la página de perfil', 'gepetrolseguros'),
			),

			// LinkedIn.
			array(
				'id'    => 'social-icon-linkedin',
				'type'  => 'text',
				'title' => esc_html__('LinkedIn', 'gepetrolseguros'),
				'desc'  => esc_html__('Enlace a la página de perfil', 'gepetrolseguros'),
			),

			// Instagram.
			array(
				'id'    => 'social-icon-instagram',
				'type'  => 'text',
				'title' => esc_html__('Instagram', 'gepetrolseguros'),
				'desc'  => esc_html__('Enlace a la página de perfil', 'gepetrolseguros'),
			),

		),
	)
);

// BANNER PRINCIPAL 
Redux::setSection(
	$opt_name,
	array(
		'title'   => esc_html__('Banner Principal', 'gepetrolseguros'),
		'icon'    => 'el el-screen',
		'id'      => 'features-slider',
		'submenu' => false,
		'fields'  => array(


			// Banner Principal Switch.
			array(
				'id'       => 'features-slider-target',
				'type'     => 'switch',
				'title'    => esc_html__('Activa el Banner Principal', 'gepetrolseguros'),
				'subtitle' => esc_html__('Elija si desea activar el Banner Principal o no.', 'gepetrolseguros'),
				'on'       => esc_html__('Yes', 'gepetrolseguros'),
				'off'      => esc_html__('No', 'gepetrolseguros'),
				'default'  => false,
			),

			array(
				'title'       => __('Banner Publicitario', 'gepetrolseguros'),
				'id'          => 'features_slider',
				'type'        => 'slides',
				'show'        => array(
					'facode'       => true,
					'title'        => true,
					'description'  => true,
					'image_upload' => true,
					//'url'          => true,
				),
				'placeholder' => array(
					'facode'       => __('Font Awesome Icon here. e.g. fa-folder-open.', 'gepetrolseguros'),
					'title'        => __('This is a title.', 'gepetrolseguros'),
					'description'  => __('Description here.', 'gepetrolseguros'),
					'image_upload'  => __('Image.', 'gepetrolseguros'),
					//'url'          => __( 'Link for title.', 'gepetrolseguros' ),
				),
			),
		),
	)
);

// Asugura tu Coche Home 
Redux::setSection(
	$opt_name,
	array(
		'title'   => esc_html__('Seguro Online Home', 'gepetrolseguros'),
		'icon'    => 'el el-car',
		'id'      => 'car-insurance',
		'submenu' => false,
		'fields'  => array(

			// Seguro Online Switch.
			array(
				'id'       => 'car-insurance-target',
				'type'     => 'switch',
				'title'    => esc_html__('Activa el Seguro Online', 'gepetrolseguros'),
				'subtitle' => esc_html__('Elija si desea activar el Seguro Online o no.', 'gepetrolseguros'),
				'on'       => esc_html__('Yes', 'gepetrolseguros'),
				'off'      => esc_html__('No', 'gepetrolseguros'),
				'default'  => false,
			),

			array(
				'title'     => __('Titulo', 'gepetrolseguros'),
				'subtitle'  => __('Añada su título para la sección', 'gepetrolseguros'),
				'id'        => 'car_insurance_title',
				'type'      => 'text',
			),
			array(
				'title'     => __('Descripción', 'gepetrolseguros'),
				'subtitle'  => __('Añada su descripción para la sección Características.', 'gepetrolseguros'),
				'id'        => 'car_insurance_description',
				'type'      => 'editor',
			),
			array(
				'title'     => __('Imagen', 'gepetrolseguros'),
				'subtitle'  => __('Añada una Imagen.', 'gepetrolseguros'),
				'id'        => 'car_insurance_image',
				'type'      => 'media',
			),
			array(
				'title'     => __('Nombre de Enlace', 'gepetrolseguros'),
				'subtitle'  => __('Añada su título de enlace para la sección.', 'gepetrolseguros'),
				'id'        => 'car_insurance_link',
				'type'      => 'text',
			),
			array(
				'title'     => __('URL', 'gepetrolseguros'),
				'subtitle'  => __('Añada su URL.', 'gepetrolseguros'),
				'id'        => 'car_insurance_url',
				'type'      => 'text',
			),
		),
	)
);

// SERVICIOS DESTACADOS 
Redux::setSection(
	$opt_name,
	array(
		'title'   => esc_html__('Servicios de Seguros', 'gepetrolseguros'),
		'icon'    => 'el el-idea-alt',
		'id'      => 'services-home',
		'submenu' => false,
		'fields'  => array(

			// Servicios Switch.
			array(
				'id'       => 'services-home-target',
				'type'     => 'switch',
				'title'    => esc_html__('Activa los Servicios', 'gepetrolseguros'),
				'subtitle' => esc_html__('Elija si desea activar los Servicios o no.', 'gepetrolseguros'),
				'on'       => esc_html__('Yes', 'gepetrolseguros'),
				'off'      => esc_html__('No', 'gepetrolseguros'),
				'default'  => false,
			),

			array(
				'title'       => __('Los mejores servicios de seguros para nuestros clientes', 'gepetrolseguros'),
				'id'          => 'services_home',
				'type'        => 'slides',
				'show'        => array(
					'facode'       => true,
					'title'        => true,
					'description'  => true,
					'image_upload' => true,
					'url'          => true,
				),
				'placeholder' => array(
					'facode'       => __('Font Awesome Icon here. e.g. fa-folder-open.', 'gepetrolseguros'),
					'title'        => __('título.', 'gepetrolseguros'),
					'description'  => __('Descripción.', 'gepetrolseguros'),
					'image_upload'  => __('Imagen.', 'gepetrolseguros'),
					'url'          => __('Enlace para el título.', 'gepetrolseguros'),
				),
			),
		),
	)
);

// -> START Servicio General
Redux::setSection(
	$opt_name,
	array(
		'title' => esc_html__('Servicio General', 'gepetrolseguros'),
		'icon'  => 'el el-magic',
		'id'    => 'Servicio-plans',
	)
);

// PLAN PARTICULARES 
Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__('Particulares', 'gepetrolseguros'),
		'icon'       => 'el el-adult',
		'id'         => 'individuals-plans',
		'subsection' => true,
		'fields'     => array(

			// Seguros Particulares Switch.
			array(
				'id'       => 'individuals-plans-target',
				'type'     => 'switch',
				'title'    => esc_html__('Activa los Seguros Particulares', 'gepetrolseguros'),
				'subtitle' => esc_html__('Elija si desea activar los Seguros Particulares o no.', 'gepetrolseguros'),
				'on'       => esc_html__('Yes', 'gepetrolseguros'),
				'off'      => esc_html__('No', 'gepetrolseguros'),
				'default'  => false,
			),

			array(
				'title' => __('Nuestros Mejores Planes : PARTICULARES', 'gepetrolseguros'),
				'id'    => 'individuals_plans',
				'type'  => 'slides',

				// 🔹 IMPORTANTE: declarar todas las claves para evitar warnings
				'show'  => array(
					'title'       => true,
					'description' => false,
					'url'         => false,
				),

				'placeholder' => array(
					'title'       => __('Título.', 'gepetrolseguros'),
					'description' => '',
					'url'         => '',
				),
			),
		),
	)
);

// PLAN EMPRESAS
Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__('Empresas', 'gepetrolseguros'),
		'icon'       => 'el el-globe-alt',
		'id'         => 'companies-plans',
		'subsection' => true,
		'fields'     => array(

			// Seguros para Empresas Switch.
			array(
				'id'       => 'companies-plans-target',
				'type'     => 'switch',
				'title'    => esc_html__('Activa los Seguros para Empresas', 'gepetrolseguros'),
				'subtitle' => esc_html__('Elija si desea activar los Seguros para Empresas o no.', 'gepetrolseguros'),
				'on'       => esc_html__('Yes', 'gepetrolseguros'),
				'off'      => esc_html__('No', 'gepetrolseguros'),
				'default'  => false,
			),

			array(
				'title' => __('Nuestros Mejores Planes : EMPRESAS', 'gepetrolseguros'),
				'id'    => 'companies_plans',
				'type'  => 'slides',

				'show'  => array(
					'title'       => true,
					'description' => false,
					'url'         => false,
				),

				'placeholder' => array(
					'title'       => __('Título.', 'gepetrolseguros'),
					'description' => '',
					'url'         => '',
				),
			),
		),
	)
);

// -> START Mision Vision Valores
Redux::setSection(
	$opt_name,
	array(
		'title' => esc_html__('Mision Visión Valores', 'gepetrolseguros'),
		'icon'  => 'el el-tags',
		'id'    => 'mision-vision-valores',
	)
);

// VISION Y MISION
Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__('Visión y Misión', 'gepetrolseguros'),
		'icon'       => 'el el-eye-open',
		'id'         => 'vision-mision',
		'subsection' => true,
		'fields'     => array(

			array(
				'id'       => 'vision-mision-target',
				'type'     => 'switch',
				'title'    => esc_html__('Activa Visión y Misión', 'gepetrolseguros'),
				'subtitle' => esc_html__('Elija si desea activar Visión y Misión o no.', 'gepetrolseguros'),
				'on'       => esc_html__('Yes', 'gepetrolseguros'),
				'off'      => esc_html__('No', 'gepetrolseguros'),
				'default'  => false,
			),

			array(
				'title' => __('Visión y Misión', 'gepetrolseguros'),
				'id'    => 'vision_mision',
				'type'  => 'slides',

				'show'  => array(
					'title'       => true,
					'description' => true,
					'url'         => false,
				),

				'placeholder' => array(
					'title'       => __('Título.', 'gepetrolseguros'),
					'description' => __('Descripción.', 'gepetrolseguros'),
					'url'         => '',
				),
			),
		),
	)
);

// VALORES
Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__('Nuestros Valores', 'gepetrolseguros'),
		'icon'       => 'el el-bullhorn',
		'id'         => 'valores',
		'subsection' => true,
		'fields'     => array(

			array(
				'id'       => 'valores-target',
				'type'     => 'switch',
				'title'    => esc_html__('Activa los Valores', 'gepetrolseguros'),
				'subtitle' => esc_html__('Elija si desea activar los Valores o no.', 'gepetrolseguros'),
				'on'       => esc_html__('Yes', 'gepetrolseguros'),
				'off'      => esc_html__('No', 'gepetrolseguros'),
				'default'  => false,
			),

			array(
				'title' => __('Nuestros Valores', 'gepetrolseguros'),
				'id'    => 'valores_gepetrol',
				'type'  => 'slides',

				'show'  => array(
					'title'       => true,
					'description' => true,
					'url'         => false,
				),

				'placeholder' => array(
					'title'       => __('Título.', 'gepetrolseguros'),
					'description' => __('Descripción.', 'gepetrolseguros'),
					'url'         => '',
				),
			),
		),
	)
);

// FOOTER 
Redux::setSection(
	$opt_name,
	array(
		'title'		 => __('Pie de Pagina', 'gepetrolseguros'),
		'icon' 		 => 'el el-universal-access',
		'id'         => 'about',
		'subsection' => false,
		'fields'  	 => array(

			array(
				'id'       => 'about_footer',
				'type'     => 'editor',
				'title'    => esc_html__('Dirección Gepetrol Seguros', 'gepetrolseguros'),
				'subtitle'     => esc_html__('Malabo', 'gepetrolseguros'),
			),
		),
	)
);
