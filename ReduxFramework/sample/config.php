<?php
/**
 * ReduxFramework Barebones Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 *
 * @package gepetrolseguros
 */

// Check if Redux installed.
if ( ! class_exists( 'ReduxFramework' ) ) {
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
	'display_name'         => $theme->get( 'Name' ),
	'display_version'      => esc_html__( 'Powered By: GepetrolSeguros Themes Customizer', 'gepetrolseguros' ),
	'menu_type'            => 'menu',
	'allow_sub_menu'       => true,
	'menu_title'           => esc_html__( 'Theme Options', 'gepetrolseguros' ),
	'page_title'           => esc_html__( 'Theme Options', 'gepetrolseguros' ),
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
	'footer_credit'        => $theme->get( 'Name' ),
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
Redux::setArgs( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */

/*
 *
 * ---> START SECTIONS
 *
 */
$ext_path = get_template_directory() . 'sections/';
Redux::setExtensions( $opt_name, $ext_path );

/**
 * As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for
 */

// -> START Basic Fields.

// CONTACTOS 
Redux::setSection(
	$opt_name,
	array(
		'title'		 => __('Contactos Gepetrol', 'gepetrolseguros'),
		'icon' 		 => 'el-icon-home',
		'id'         => 'contact',
		'subsection' => false,
		'fields'  	 => array(

			array(
				'id'       => 'contact_adress_malabo',
				'type'     => 'text',
				'title'    => esc_html__( 'Dirección Gepetrol Seguros', 'gepetrolseguros' ),
				'subtitle'     => esc_html__( 'Malabo', 'gepetrolseguros' ),
			),

			array(
				'id'       => 'contact_adress_bata',
				'type'     => 'text',
				'title'    => esc_html__( 'Dirección Gepetrol Seguros', 'gepetrolseguros' ),
				'subtitle'     => esc_html__( 'Bata', 'gepetrolseguros' ),
			),

			array(
				'id'       => 'contact_email_malabo',
				'type'     => 'text',
				'title'    => esc_html__( 'Email Gepetrol Seguros', 'gepetrolseguros' ),
				'subtitle'     => esc_html__( 'Malabo', 'gepetrolseguros' ),
			),

			array(
				'id'       => 'contact_email_bata',
				'type'     => 'text',
				'title'    => esc_html__( 'Email Gepetrol Seguros', 'gepetrolseguros' ),
				'subtitle'     => esc_html__( 'Bata', 'gepetrolseguros' ),
			),

			array(
				'id'       => 'contact_phone_malabo',
				'type'     => 'text',
				'title'    => esc_html__( 'Telefono  Gepetrol Seguros', 'gepetrolseguros' ),
				'subtitle'     => esc_html__( 'Malabo', 'gepetrolseguros' ),
			),

			array(
				'id'       => 'contact_phone_bata',
				'type'     => 'text',
				'title'    => esc_html__( 'Telefono  Gepetrol Seguros', 'gepetrolseguros' ),
				'subtitle'     => esc_html__( 'Bata', 'gepetrolseguros' ),
			),
			array(
				'id'       => 'contact_phone_two_bata',
				'type'     => 'text',
				'title'    => esc_html__( 'Telefono  Gepetrol Seguros', 'gepetrolseguros' ),
				'subtitle'     => esc_html__( 'Bata', 'gepetrolseguros' ),
			),
		),
	)
);

// REDES SOCIALES 
Redux::setSection(
	$opt_name,
	array(
		'title'   => esc_html__( 'Social Icons', 'gepetrolseguros' ),
		'icon'    => 'el el-globe',
		'id'      => 'social_icons',
		'submenu' => false,
		'fields'  => array(

			// Open social links in new window.
			array(
				'id'      => 'social-icon-target',
				'type'    => 'switch',
				'title'   => esc_html__( 'Open links in new window', 'gepetrolseguros' ),
				'desc'    => esc_html__( 'Open social links in new window', 'gepetrolseguros' ),
				'default' => true,
			),
			// Facebook.
			array(
				'id'      => 'social-icon-facebook',
				'type'    => 'text',
				'title'   => esc_html__( 'Facebook', 'gepetrolseguros' ),
				'desc'    => esc_html__( 'Link to the profile page', 'gepetrolseguros' ),
				'default' => '#',
			),

			// Twitter.
			array(
				'id'      => 'social-icon-twitter',
				'type'    => 'text',
				'title'   => esc_html__( 'Twitter', 'gepetrolseguros' ),
				'desc'    => esc_html__( 'Link to the profile page', 'gepetrolseguros' ),
				'default' => '#',
			),

			// YouTube.
			array(
				'id'    => 'social-icon-youtube',
				'type'  => 'text',
				'title' => esc_html__( 'YouTube', 'gepetrolseguros' ),
				'desc'  => esc_html__( 'Link to the profile page', 'gepetrolseguros' ),
			),

			// LinkedIn.
			array(
				'id'    => 'social-icon-linkedin',
				'type'  => 'text',
				'title' => esc_html__( 'LinkedIn', 'gepetrolseguros' ),
				'desc'  => esc_html__( 'Link to the profile page', 'gepetrolseguros' ),
			),

			// Instagram.
			array(
				'id'    => 'social-icon-instagram',
				'type'  => 'text',
				'title' => esc_html__( 'Instagram', 'gepetrolseguros' ),
				'desc'  => esc_html__( 'Link to the profile page', 'gepetrolseguros' ),
			),
		),
	)
);

// BANNER PRINCIPAL 
Redux::setSection(
	$opt_name,
	array(
		'title'   => esc_html__( 'Banner Principal', 'gepetrolseguros' ),
		'icon'    => 'el el-website',
		'id'      => 'features-slider',
		'submenu' => false,
		'fields'  => array(

			// Open social links in new window.
			array(
				'id'      => 'features-slider-target',
				'type'    => 'switch',
				'title'   => esc_html__( 'Open links in new window', 'gepetrolseguros' ), 
				'default' => true,
			),

			array(
				'title'       => __( 'Banner Publicitario', 'gepetrolseguros' ), 
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
					'facode'       => __( 'Font Awesome Icon here. e.g. fa-folder-open.', 'gepetrolseguros' ),
					'title'        => __( 'This is a title.', 'gepetrolseguros' ),
					'description'  => __( 'Description here.', 'gepetrolseguros' ),
					'image_upload'  => __( 'Image.', 'gepetrolseguros' ),
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
		'title'   => esc_html__( 'Seguro Online', 'gepetrolseguros' ),
		'icon'    => 'el el-website',
		'id'      => 'car-insurance',
		'submenu' => false,
		'fields'  => array(

			// Open social links in new window.
			array(
				'id'      => 'car-insurance-target',
				'type'    => 'switch',
				'title'   => esc_html__( 'Open links in new window', 'gepetrolseguros' ), 
				'default' => true,
			),

			array( 
				'title'     => __( 'Features Section Title', 'gepetrolseguros' ),
				'subtitle'  => __( 'Add your title for Features section.', 'gepetrolseguros' ),
				'id'        => 'car_insurance_title',
				'type'      => 'text',
			),
			array( 
				'title'     => __( 'Features Section Title', 'gepetrolseguros' ),
				'subtitle'  => __( 'Add your title for Features section.', 'gepetrolseguros' ),
				'id'        => 'car_insurance_description',
				'type'      => 'editor',
			),
			array( 
				'title'     => __( 'Features Section Title', 'gepetrolseguros' ),
				'subtitle'  => __( 'Add your title for Features section.', 'gepetrolseguros' ),
				'id'        => 'car_insurance_image',
				'type'      => 'media',
			),
			array( 
				'title'     => __( 'Features Section Title', 'gepetrolseguros' ),
				'subtitle'  => __( 'Add your title for Features section.', 'gepetrolseguros' ),
				'id'        => 'car_insurance_link',
				'type'      => 'text',
			),
			array( 
				'title'     => __( 'Features Section Title', 'gepetrolseguros' ),
				'subtitle'  => __( 'Add your title for Features section.', 'gepetrolseguros' ),
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
		'title'   => esc_html__( 'Servicios Home', 'gepetrolseguros' ),
		'icon'    => 'el el-website',
		'id'      => 'services-home',
		'submenu' => false,
		'fields'  => array(

			// Open social links in new window.
			array(
				'id'      => 'services-home-target',
				'type'    => 'switch',
				'title'   => esc_html__( 'Open links in new window', 'gepetrolseguros' ), 
				'default' => true,
			),

			array(
				'title'       => __( 'Servicios Destacados', 'gepetrolseguros' ), 
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
					'facode'       => __( 'Font Awesome Icon here. e.g. fa-folder-open.', 'gepetrolseguros' ),
					'title'        => __( 'This is a title.', 'gepetrolseguros' ),
					'description'  => __( 'Description here.', 'gepetrolseguros' ),
					'image_upload'  => __( 'Image.', 'gepetrolseguros' ),
					'url'          => __( 'Link for title.', 'gepetrolseguros' ), 
				),
			),
		),
	)
);

// PLAN PARTICULARES 
Redux::setSection(
	$opt_name,
	array(
		'title'   => esc_html__( 'Seguros Particulares', 'gepetrolseguros' ),
		'icon'    => 'el el-website',
		'id'      => 'individuals-plans',
		'submenu' => false,
		'fields'  => array(

			// Open social links in new window.
			array(
				'id'      => 'individuals-plans-target',
				'type'    => 'switch',
				'title'   => esc_html__( 'Open links in new window', 'gepetrolseguros' ), 
				'default' => true,
			),

			array(
				'title'       => __( 'Nuestros Mejores Planes : PARTICULARES', 'gepetrolseguros' ), 
				'id'          => 'individuals_plans',
				'type'        => 'slides',
				'show'        => array( 
					'title'        => true, 
				),
				'placeholder' => array( 
					'title'        => __( 'This is a title.', 'gepetrolseguros' ), 
				),
			),
		),
	)
);

// PLAN EMPRESAS
Redux::setSection(
	$opt_name,
	array(
		'title'   => esc_html__( 'Seguros para Empresas', 'gepetrolseguros' ),
		'icon'    => 'el el-website',
		'id'      => 'companies-plans',
		'submenu' => false,
		'fields'  => array(

			// Open social links in new window.
			array(
				'id'      => 'companies-plans-target',
				'type'    => 'switch',
				'title'   => esc_html__( 'Open links in new window', 'gepetrolseguros' ), 
				'default' => true,
			),

			array(
				'title'       => __( 'Nuestros Mejores Planes : EMPRESAS', 'gepetrolseguros' ), 
				'id'          => 'companies_plans',
				'type'        => 'slides',
				'show'        => array( 
					'title'        => true, 
				),
				'placeholder' => array( 
					'title'        => __( 'This is a title.', 'gepetrolseguros' ), 
				),
			),
		),
	)
);

// NUESTROS VALORES
Redux::setSection(
	$opt_name,
	array(
		'title'   => esc_html__( 'Nuestros Valores', 'gepetrolseguros' ),
		'icon'    => 'el el-website',
		'id'      => 'valores',
		'submenu' => false,
		'fields'  => array(

			// Open social links in new window.
			array(
				'id'      => 'valores-target',
				'type'    => 'switch',
				'title'   => esc_html__( 'Open links in new window', 'gepetrolseguros' ), 
				'default' => true,
			),

			array(
				'title'       => __( 'Nuestros Valores', 'gepetrolseguros' ), 
				'id'          => 'valores_gepetrol',
				'type'        => 'slides',
				'show'        => array( 
					'title'        => true,
					'description'  => true, 
				),
				'placeholder' => array( 
					'title'        => __( 'This is a title.', 'gepetrolseguros' ),
					'description'  => __( 'Description here.', 'gepetrolseguros' ), 
				),
			),
		),
	)
);

// VISION Y VALORES
Redux::setSection(
	$opt_name,
	array(
		'title'   => esc_html__( 'Vision y Mision', 'gepetrolseguros' ),
		'icon'    => 'el el-website',
		'id'      => 'vision-mision',
		'submenu' => false,
		'fields'  => array(

			// Open social links in new window.
			array(
				'id'      => 'vision-mision-target',
				'type'    => 'switch',
				'title'   => esc_html__( 'Open links in new window', 'gepetrolseguros' ), 
				'default' => true,
			),

			array(
				'title'       => __( 'Vision y Mision', 'gepetrolseguros' ), 
				'id'          => 'vision_mision',
				'type'        => 'slides',
				'show'        => array( 
					'title'        => true,
					'description'  => true, 
				),
				'placeholder' => array( 
					'title'        => __( 'This is a title.', 'gepetrolseguros' ),
					'description'  => __( 'Description here.', 'gepetrolseguros' ), 
				),
			),
		),
	)
);

// FOOTER 
Redux::setSection(
	$opt_name,
	array(
		'title'		 => __('Pie de Pagina Gepetrol', 'gepetrolseguros'),
		'icon' 		 => 'el-icon-home',
		'id'         => 'about',
		'subsection' => false,
		'fields'  	 => array(

			array(
				'id'       => 'about_footer',
				'type'     => 'editor',
				'title'    => esc_html__( 'Dirección Gepetrol Seguros', 'gepetrolseguros' ),
				'subtitle'     => esc_html__( 'Malabo', 'gepetrolseguros' ),
			),
		),
	)
);
