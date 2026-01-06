<?php
/**
 * ReduxFramework Barebones Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 *
 * @package gepetrolseguros
 */

// Check if Redux installed.
if ( ! class_exists( 'ReduxFrameworkPlugin' ) ) {
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
	'display_version'      => esc_html__( 'Powered By: RadiantThemes Customizer', 'gepetrolseguros' ),
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
$ext_path = get_template_directory() . 'inc/redux-framework/extensions/';
Redux::setExtensions( $opt_name, $ext_path );

/**
 * As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for
 */


 // -> START Basic Fields.
Redux::setSection(
	$opt_name,
	array(
		'title' => esc_html__( 'Contactos', 'gepetrolseguros' ),
		'icon'  => 'el el-cog',
		'id'    => 'contact-general',
	)
);

// Malabo
Redux::setSection(
	$opt_name,
	array(
		'title'		 => __('Contacto Malabo', 'gepetrolseguros'),
		'icon' 		 => 'el-icon-home',
		'id'         => 'contact-malabo',
		'subsection' => true,
		'fields'  	 => array(

			array(
				'id'       => 'contact_adress_malabo',
				'type'     => 'text',
				'title'    => esc_html__( 'Dirección Gepetrol Seguros', 'gepetrolseguros' ),
				'subtitle'     => esc_html__( 'Malabo', 'gepetrolseguros' ),
			),

			array(
				'id'       => 'contact_email_malabo',
				'type'     => 'text',
				'title'    => esc_html__( 'Email Gepetrol Seguros', 'gepetrolseguros' ),
				'subtitle'     => esc_html__( 'Malabo', 'gepetrolseguros' ),
			),

			array(
				'id'       => 'contact_phone_malabo',
				'type'     => 'text',
				'title'    => esc_html__( 'Telefono  Gepetrol Seguros', 'gepetrolseguros' ),
				'subtitle'     => esc_html__( 'Malabo', 'gepetrolseguros' ),
			),
		),
	)
);

//Bata
Redux::setSection(
	$opt_name,
	array(
		'title'		 => __('Contacto Bata', 'gepetrolseguros'),
		'icon' 		 => 'el-icon-home',
		'id'         => 'contact-bata',
		'subsection' => true,
		'fields'  	 => array(

			array(
				'id'       => 'contact_adress_bata',
				'type'     => 'text',
				'title'    => esc_html__( 'Dirección Gepetrol Seguros', 'gepetrolseguros' ),
				'subtitle'     => esc_html__( 'Bata', 'gepetrolseguros' ),
			),

			array(
				'id'       => 'contact_email_bata',
				'type'     => 'text',
				'title'    => esc_html__( 'Email Gepetrol Seguros', 'gepetrolseguros' ),
				'subtitle'     => esc_html__( 'Bata', 'gepetrolseguros' ),
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


// Redes Sociales
Redux::setSection(
	$opt_name,
	array(
		'title'   => esc_html__( 'Social Icons', 'gepetrolseguros' ),
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

			// typekit Switch.
			array(
				'id'       => 'social-icon-target',
				'type'     => 'switch',
				'title'    => esc_html__( 'Activa la Redes Sociales', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Elija si desea activar la Redes Sociales o no.', 'gepetrolseguros' ),
				'on'       => esc_html__( 'Yes', 'gepetrolseguros' ),
				'off'      => esc_html__( 'No', 'gepetrolseguros' ),
				'default'  => false,
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


// -> START Basic Fields.
Redux::setSection(
	$opt_name,
	array(
		'title' => esc_html__( 'General', 'gepetrolseguros' ),
		'icon'  => 'el el-cog',
		'id'    => 'theme-general',
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__( 'Layout', 'gepetrolseguros' ),
		'icon'       => 'el el-screen',
		'id'         => 'layout',
		'subsection' => true,
		'fields'     => array(
			// Layout Type.
			array(
				'id'       => 'layout_type',
				'type'     => 'select',
				'title'    => esc_html__( 'Layout Type', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Select layout type.', 'gepetrolseguros' ),
				'options'  => array(
					'full-width' => 'Full Width',
					'boxed'      => 'Boxed',
				),
				'default'  => 'full-width',
			),

			// Layout Type Boxed Width.
			array(
				'id'            => 'layout_type_boxed_width',
				'type'          => 'slider',
				'title'         => esc_html__( 'Boxed Width', 'gepetrolseguros' ),
				'subtitle'      => esc_html__( 'Select Boxed width. Min is 1000px, Max is 1400px and Default is 1200px.', 'gepetrolseguros' ),
				'min'           => 1000,
				'step'          => 10,
				'max'           => 1400,
				'default'       => 1200,
				'display_value' => 'text',
				'required'      => array(
					array(
						'layout_type',
						'equals',
						'boxed',
					),
				),
			),

			// Layout Type Boxed Background Color.
			array(
				'id'       => 'layout_type_boxed_background_color',
				'type'     => 'color_rgba',
				'title'    => esc_html__( 'Boxed Background Color', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Applies for Boxed layout. (Please Note: This can be overright by setting section background color.)', 'gepetrolseguros' ),
				'default'  => array(
					'color' => '#ffffff',
					'alpha' => 1,
				),
				'output'   => array(
					'background-color' => '.radiantthemes-website-layout',
				),
				'required' => array(
					array(
						'layout_type',
						'equals',
						'boxed',
					),
				),
			),

			// Layout Type Body Background.
			array(
				'id'       => 'layout_type_body_background',
				'type'     => 'background',
				'title'    => esc_html__( 'Body Background', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Choose a background for the theme. (Please Note: This can be overright by setting section background color.)', 'gepetrolseguros' ),
				'default'  => array(
					'background-color' => '#ffffff',
				),
				'output'   => array(
					'body',
				),
			),

		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__( 'Favicon', 'gepetrolseguros' ),
		'id'         => 'favicon',
		'icon'       => 'el el-bookmark-empty',
		'subsection' => true,
		'fields'     => array(

			array(
				'id'       => 'favicon',
				'type'     => 'media',
				'title'    => esc_html__( 'Favicon', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'You can upload Favicon on your website. (.ico 32x32 pixels)', 'gepetrolseguros' ),
				'default'  => array(
					'url' => get_template_directory_uri() . '/assets/images/favicon.png',
				),
			),

			array(
				'id'       => 'apple-icon',
				'type'     => 'media',
				'title'    => esc_html__( 'Apple Touch Icon', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'apple-touch-icon.png 192x192 pixels', 'gepetrolseguros' ),
			),

		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__( 'Typekit Fonts', 'gepetrolseguros' ),
		'id'         => 'typekit-fonts',
		'icon'       => 'el el-fontsize',
		'subsection' => true,
		'fields'     => array(

			// typekit Switch.
			array(
				'id'       => 'active_typekit',
				'type'     => 'switch',
				'title'    => esc_html__( 'Activate Typekit', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Choose if want to activate typekit or not.', 'gepetrolseguros' ),
				'on'       => esc_html__( 'Yes', 'gepetrolseguros' ),
				'off'      => esc_html__( 'No', 'gepetrolseguros' ),
				'default'  => false,
			),

			array(
				'id'       => 'typekit-id',
				'type'     => 'text',
				'title'    => esc_html__( 'Enter Typekit ID Here', 'gepetrolseguros' ),
				'default'  => '',
				'required' => array(
					array(
						'active_typekit',
						'equals',
						true,
					),
				),
			),

			array(
				'id'       => 'body-typekit',
				'type'     => 'text',
				'title'    => esc_html__( 'Enter Body typography', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Add the Typekit font family name Here.', 'gepetrolseguros' ),
				'default'  => '',
				'required' => array(
					array(
						'active_typekit',
						'equals',
						true,
					),
				),
			),

			array(
				'id'       => 'heading-typekit',
				'type'     => 'text',
				'title'    => esc_html__( 'Enter Headings typography', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Add the Typekit font family name Here.', 'gepetrolseguros' ),
				'default'  => '',
				'required' => array(
					array(
						'active_typekit',
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
		'title'      => esc_html__( 'Fonts', 'gepetrolseguros' ),
		'id'         => 'basic-settings',
		'icon'       => 'el el-fontsize',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'             => 'general_typography',
				'type'           => 'typography',
				'title'          => esc_html__( 'General', 'gepetrolseguros' ),
				'subtitle'       => esc_html__( 'This will be the default font of your website.', 'gepetrolseguros' ),
				'font-family'    => false,
				'text-transform' => true,
				'letter-spacing' => true,
				'font-style'     => false,
				'all_styles'     => false,
				'output'         => array( 'body' ),
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
				'title'          => esc_html__( 'General', 'gepetrolseguros' ),
				'subtitle'       => esc_html__( 'This will be the default font of your website.', 'gepetrolseguros' ),
				'text-transform' => true,
				'letter-spacing' => true,
				'font-style'     => false,
				'all_styles'     => false,
				'output'         => array( 'body' ),
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
				'title'          => esc_html__( 'H1', 'gepetrolseguros' ),
				'subtitle'       => esc_html__( 'This will be the default font for all H1 tags of your website.', 'gepetrolseguros' ),
				'font-family'    => false,
				'text-transform' => true,
				'letter-spacing' => true,
				'font-style'     => false,
				'all_styles'     => false,
				'output'         => array( 'h1' ),
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
				'title'          => esc_html__( 'H1', 'gepetrolseguros' ),
				'subtitle'       => esc_html__( 'This will be the default font for all H1 tags of your website.', 'gepetrolseguros' ),
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
				'output'         => array( 'h1' ),
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
				'title'          => esc_html__( 'H2', 'gepetrolseguros' ),
				'subtitle'       => esc_html__( 'This will be the default font for all H2 tags of your website.', 'gepetrolseguros' ),
				'font-family'    => false,
				'text-transform' => true,
				'letter-spacing' => true,
				'font-style'     => false,
				'all_styles'     => false,
				'output'         => array( 'h2' ),
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
				'title'          => esc_html__( 'H2', 'gepetrolseguros' ),
				'subtitle'       => esc_html__( 'This will be the default font for all H2 tags of your website.', 'gepetrolseguros' ),
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
				'output'         => array( 'h2' ),
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
				'title'          => esc_html__( 'H3', 'gepetrolseguros' ),
				'subtitle'       => esc_html__( 'This will be the default font for all H3 tags of your website.', 'gepetrolseguros' ),
				'font-family'    => false,
				'text-transform' => true,
				'letter-spacing' => true,
				'font-style'     => false,
				'all_styles'     => false,
				'output'         => array( 'h3' ),
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
				'title'          => esc_html__( 'H3', 'gepetrolseguros' ),
				'subtitle'       => esc_html__( 'This will be the default font for all H3 tags of your website.', 'gepetrolseguros' ),
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
				'output'         => array( 'h3' ),
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
				'title'          => esc_html__( 'H4', 'gepetrolseguros' ),
				'subtitle'       => esc_html__( 'This will be the default font for all H4 tags of your website.', 'gepetrolseguros' ),
				'font-family'    => false,
				'text-transform' => true,
				'letter-spacing' => true,
				'font-style'     => false,
				'all_styles'     => false,
				'output'         => array( 'h4' ),
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
				'title'          => esc_html__( 'H4', 'gepetrolseguros' ),
				'subtitle'       => esc_html__( 'This will be the default font for all H4 tags of your website.', 'gepetrolseguros' ),
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
				'output'         => array( 'h4' ),
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
				'title'          => esc_html__( 'H5', 'gepetrolseguros' ),
				'subtitle'       => esc_html__( 'This will be the default font for all H5 tags of your website.', 'gepetrolseguros' ),
				'font-family'    => false,
				'text-transform' => true,
				'letter-spacing' => true,
				'font-style'     => false,
				'all_styles'     => false,
				'output'         => array( 'h5' ),
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
				'title'          => esc_html__( 'H5', 'gepetrolseguros' ),
				'subtitle'       => esc_html__( 'This will be the default font for all H5 tags of your website.', 'gepetrolseguros' ),
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
				'output'         => array( 'h5' ),
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
				'title'          => esc_html__( 'H6', 'gepetrolseguros' ),
				'subtitle'       => esc_html__( 'This will be the default font for all H6 tags of your website.', 'gepetrolseguros' ),

				'font-family'    => false,

				'text-transform' => true,
				'letter-spacing' => true,
				'font-style'     => false,
				'all_styles'     => false,
				'output'         => array( 'h6' ),
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
				'title'          => esc_html__( 'H6', 'gepetrolseguros' ),
				'subtitle'       => esc_html__( 'This will be the default font for all H6 tags of your website.', 'gepetrolseguros' ),
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
				'output'         => array( 'h6' ),
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

$fields_array      = array();
$how_many_sections = 50;

for ( $i = 1; $i <= $how_many_sections; $i++ ) {
	$j               = $i - 1;
	$sectionstartid  = 'section-start-';
	$sectionstartid .= $i;

	if ( 1 === $i ) {
		$sectionstart = array(
			'id'     => $sectionstartid,
			'type'   => 'section',
			'title'  => esc_html__( 'Custom Font ', 'gepetrolseguros' ) . $i,
			'indent' => true,
		);
	} else {
		$sectionstart = array(
			'id'       => $sectionstartid,
			'type'     => 'section',
			'title'    => esc_html__( 'Custom Font ', 'gepetrolseguros' ) . $i,
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
		'title' => esc_html__( 'Font Name', 'gepetrolseguros' ),
		'desc'  => esc_html__( 'Give this any custom Name', 'gepetrolseguros' ),
	);

	$woofid  = 'woff';
	$woofid .= $i;

	$woof = array(
		'id'             => $woofid,
		'type'           => 'media',
		'title'          => esc_html__( 'WOFF ', 'gepetrolseguros' ),
		'class'          => 'medium-text',
		'mode'           => false,
		'preview'        => false,
		'library_filter' => array( 'woof' ),
		'placeholder'    => 'No Fonts selected',
	);

	$wooftwoid  = 'woffTwo';
	$wooftwoid .= $i;

	$wooftwo = array(
		'id'             => $wooftwoid,
		'type'           => 'media',
		'title'          => esc_html__( 'WOFF2 ', 'gepetrolseguros' ),
		'class'          => 'medium-text',
		'mode'           => false,
		'preview'        => false,
		'library_filter' => array( 'woof2' ),
		'placeholder'    => 'No Fonts selected',
	);

	$ttfid  = 'ttf';
	$ttfid .= $i;

	$ttf = array(
		'id'          => $ttfid,
		'type'        => 'media',
		'title'       => esc_html__( 'TTF ', 'gepetrolseguros' ),
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
		'title'       => esc_html__( 'SVG ', 'gepetrolseguros' ),
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
		'title'       => esc_html__( 'EOT ', 'gepetrolseguros' ),
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

	array_push( $fields_array, $sectionstart );
	array_push( $fields_array, $webfontname );
	array_push( $fields_array, $woof );
	array_push( $fields_array, $wooftwo );
	array_push( $fields_array, $ttf );
	array_push( $fields_array, $svg );
	array_push( $fields_array, $eot );
	array_push( $fields_array, $sectionend );
}

Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__( 'Custom Fonts', 'gepetrolseguros' ),
		'icon'       => 'el el-screen',
		'id'         => 'custom-fonts',
		'desc'       => esc_html__( 'Upload Custom Fonts.', 'gepetrolseguros' ),
		'subsection' => true,
		'fields'     => $fields_array,
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__( 'Custom Slug', 'gepetrolseguros' ),
		'icon'       => 'el el-folder-open',
		'id'         => 'custom_slug',
		'subsection' => true,
		'fields'     => array(

			// color info.
			array(
				'id'    => 'info_change_slug',
				'type'  => 'info',
				'title' => esc_html__( 'Change Custom Post Type Slug', 'gepetrolseguros' ),
				'style' => 'custom',
				'color' => '#b9cbe4',
				'class' => 'radiant-subheader',
			),
			array(
				'id'       => 'change_slug_portfolio',
				'type'     => 'text',
				'title'    => esc_html__( 'Portfolio', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'The slug name cannot be the same as a page name. Make sure to regenerate permalinks, after making changes.', 'gepetrolseguros' ),
				'validate' => 'no_special_chars',
				'default'  => 'project',
			),
			array(
				'id'       => 'change_slug_team',
				'type'     => 'text',
				'title'    => esc_html__( 'Team', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'The slug name cannot be the same as a page name. Make sure to regenerate permalinks, after making changes.', 'gepetrolseguros' ),
				'validate' => 'no_special_chars',
				'default'  => 'team',
			),
			array(
				'id'       => 'change_slug_casestudies',
				'type'     => 'text',
				'title'    => esc_html__( 'Case Study', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'The slug name cannot be the same as a page name. Make sure to regenerate permalinks, after making changes.', 'gepetrolseguros' ),
				'validate' => 'no_special_chars',
				'default'  => 'case-studies',
			),
		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__( 'Preloader', 'gepetrolseguros' ),
		'icon'       => 'el el-hourglass',
		'id'         => 'preloader',
		'subsection' => true,
		'fields'     => array(

			// Preloader Info.
			array(
				'id'    => 'info_preloader',
				'type'  => 'info',
				'title' => esc_html__( 'Preloader Options', 'gepetrolseguros' ),
				'style' => 'custom',
				'color' => '#b9cbe4',
				'class' => 'radiant-subheader',
			),

			// Preloader Switch.
			array(
				'id'      => 'preloader_switch',
				'type'    => 'switch',
				'title'   => esc_html__( 'Activate Preloader', 'gepetrolseguros' ),
				'on'      => esc_html__( 'Yes', 'gepetrolseguros' ),
				'off'     => esc_html__( 'No', 'gepetrolseguros' ),
				'default' => false,
			),

			// Preloader Loading Text.
			array(
				'id'       => 'preloader_loading_text',
				'type'     => 'text',
				'title'    => esc_html__( 'Preloader Loading Text', 'gepetrolseguros' ),
				'validate' => 'no_special_chars',
				'default'  => 'Loading',
			),

			// Preloader Background Color.
			array(
				'id'       => 'preloader_background_color',
				'type'     => 'color_rgba',
				'title'    => esc_html__( 'Preloader Background Color', 'gepetrolseguros' ),
				'default'  => array(
					'color' => '#ec0b0b',
					'alpha' => 1,
				),
				'output'   => array(
					'background-color' => 'body #loader.pr__dark',
				),
				'required' => array(
					array(
						'preloader_switch',
						'equals',
						true,
					),
				),
			),

			// Preloader Text Color.
			array(
				'id'       => 'preloader_text_color',
				'type'     => 'color_rgba',
				'title'    => esc_html__( 'Preloader Text Color', 'gepetrolseguros' ),
				'default'  => array(
					'color' => '#000000',
					'alpha' => 1,
				),
				'output'   => array(
					'color' => 'body #loader .loading',
				),
				'required' => array(
					array(
						'preloader_switch',
						'equals',
						true,
					),
				),
			),

			// Preloader Progress Bar Base Color.
			array(
				'id'       => 'preloader_progress_base_color',
				'type'     => 'color_rgba',
				'title'    => esc_html__( 'Progress Bar Base Color', 'gepetrolseguros' ),
				'default'  => array(
					'color' => '#ffffff',
					'alpha' => 1,
				),
				'output'   => array(
					'background-color' => 'body #loader.pr__dark .rt-progress',
				),
				'required' => array(
					array(
						'preloader_switch',
						'equals',
						true,
					),
				),
			),

			// Preloader Progress Bar Fill Color.
			array(
				'id'       => 'preloader_progress_fill_color',
				'type'     => 'color_rgba',
				'title'    => esc_html__( 'Progress Bar Fill Color', 'gepetrolseguros' ),
				'default'  => array(
					'color' => '#000000',
					'alpha' => 1,
				),
				'output'   => array(
					'background-color' => 'body #loader .loading .rt-progress .bar-loading',
				),
				'required' => array(
					array(
						'preloader_switch',
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
		'title'      => esc_html__( 'Scroll To Top', 'gepetrolseguros' ),
		'icon'       => 'el el-chevron-up',
		'id'         => 'scroll_to_top',
		'subsection' => true,
		'fields'     => array(

			// Scroll To Top Info.
			array(
				'id'    => 'info_scroll_to_top',
				'type'  => 'info',
				'title' => esc_html__( 'Scroll To Top Options', 'gepetrolseguros' ),
				'style' => 'custom',
				'color' => '#b9cbe4',
				'class' => 'radiant-subheader',
			),

			// Scroll To Top Switch.
			array(
				'id'       => 'scroll_to_top_switch',
				'type'     => 'switch',
				'title'    => esc_html__( 'Activate Scroll To Top', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Choose if want to activate Scroll To Top or not.', 'gepetrolseguros' ),
				'on'       => esc_html__( 'Yes', 'gepetrolseguros' ),
				'off'      => esc_html__( 'No', 'gepetrolseguros' ),
				'default'  => true,
			),

			// Scroll To Top Direction.
			array(
				'id'       => 'scroll_to_top_direction',
				'type'     => 'select',
				'title'    => esc_html__( 'Direction', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Select Direction of the Scroll To Top.', 'gepetrolseguros' ),
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
				'title'    => esc_html__( 'Background Color', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Pick a background color for the Scroll To Top.', 'gepetrolseguros' ),
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
				'title'    => esc_html__( 'Icon Color', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Pick a icon color for the Scroll To Top.', 'gepetrolseguros' ),
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
		'title'      => esc_html__( 'Analytics Code', 'gepetrolseguros' ),
		'icon'       => 'el el-folder-open',
		'id'         => 'analytics_code',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'google_site_verification_code',
				'type'     => 'text',
				'title'    => esc_html__( 'Google Site Verification Code', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Put Google Site Verification Content. i.e. +2nxGUDJ4QpAZ5l9Bs4jdiLVC21AIh5d1Nl23908vVuFHs34=', 'gepetrolseguros' ),
				'validate' => 'no_special_chars',
				'default'  => '',
			),
			array(
				'id'       => 'google_analytics_code',
				'type'     => 'text',
				'title'    => esc_html__( 'Google Analytics Code', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Put Google Analytics code here ( Put the whole code including UA i.e. UA-XXXXX-Y).', 'gepetrolseguros' ),
				'validate' => 'no_special_chars',
				'default'  => '',
			),
			array(
				'id'       => 'fb_pixel_code',
				'type'     => 'text',
				'title'    => esc_html__( 'FB Pixel Code', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Put FB Pixel Code code here.', 'gepetrolseguros' ),
				'validate' => 'no_special_chars',
				'default'  => '',
			),
		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title' => esc_html__( 'Header', 'gepetrolseguros' ),
		'icon'  => 'el el-website',
		'id'    => 'header',
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__( 'General', 'gepetrolseguros' ),
		'icon'       => 'el el-cog-alt',
		'id'         => 'general',
		'subsection' => true,
		'fields'     => array(

			array(
				'id'       => 'header_list_text',
				'title'    => __( 'Select Header Style', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'If you want to disable header, then create a "Blank Header" and choose that.', 'gepetrolseguros' ),
				'type'     => 'select',
				'data'     => 'posts',
				'args'     => array(
					'post_type'      => 'elementor_library',
					'posts_per_page' => -1,
					'orderby'        => 'title',
					'order'          => 'ASC',
					'tax_query'      => array(
						array(
							'taxonomy' => 'elementor_library_category',
							'field'    => 'slug',
							'terms'    => 'custom-header',
						),
					),
				),
			),

			array(
				'id'       => 'header_list_text_blog',
				'title'    => __( 'Select Header Style for Blog Page', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'If you want to disable header, then create a "Blank Header" and choose that.', 'gepetrolseguros' ),
				'type'     => 'select',
				'data'     => 'posts',
				'args'     => array(
					'post_type'      => 'elementor_library',
					'posts_per_page' => -1,
					'orderby'        => 'title',
					'order'          => 'ASC',
					'tax_query'      => array(
						array(
							'taxonomy' => 'elementor_library_category',
							'field'    => 'slug',
							'terms'    => 'custom-header',
						),
					),
				),
			),

			array(
				'id'       => 'header_list_text_blog_detail_pages',
				'title'    => __( 'Select Header Style for Blog Detail Pages', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'If you want to disable header, then create a "Blank Header" and choose that.', 'gepetrolseguros' ),
				'type'     => 'select',
				'data'     => 'posts',
				'args'     => array(
					'post_type'      => 'elementor_library',
					'posts_per_page' => -1,
					'orderby'        => 'title',
					'order'          => 'ASC',
					'tax_query'      => array(
						array(
							'taxonomy' => 'elementor_library_category',
							'field'    => 'slug',
							'terms'    => 'custom-header',
						),
					),
				),
			),

			array(
				'id'       => 'header_list_text_shop',
				'title'    => __( 'Select Header Style for Shop Page', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'If you want to disable header, then create a "Blank Header" and choose that.', 'gepetrolseguros' ),
				'type'     => 'select',
				'data'     => 'posts',
				'args'     => array(
					'post_type'      => 'elementor_library',
					'posts_per_page' => -1,
					'orderby'        => 'title',
					'order'          => 'ASC',
					'tax_query'      => array(
						array(
							'taxonomy' => 'elementor_library_category',
							'field'    => 'slug',
							'terms'    => 'custom-header',
						),
					),
				),
			),

			array(
				'id'       => 'header_list_text_product_detail_pages',
				'title'    => __( 'Select Header Style for Product Detail Pages', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'If you want to disable header, then create a "Blank Header" and choose that.', 'gepetrolseguros' ),
				'type'     => 'select',
				'data'     => 'posts',
				'args'     => array(
					'post_type'      => 'elementor_library',
					'posts_per_page' => -1,
					'orderby'        => 'title',
					'order'          => 'ASC',
					'tax_query'      => array(
						array(
							'taxonomy' => 'elementor_library_category',
							'field'    => 'slug',
							'terms'    => 'custom-header',
						),
					),
				),
			),


		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__( 'Short Header', 'gepetrolseguros' ),
		'icon'       => 'el el-website',
		'id'         => 'inner_page_banner',
		'subsection' => true,
		'fields'     => array(

			// Short Header Style Options.
			array(
				'id'       => 'short-header',
				'type'     => 'image_select',
				'title'    => esc_html__( 'Select Short Header', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Choose what kind of short header you want to set.', 'gepetrolseguros' ),
				'options'  => array(
					'Banner-With-Breadcrumb' => array(
						'alt'   => esc_html__( 'Banner-With-Breadcrumb', 'gepetrolseguros' ),
						'img'   => get_parent_theme_file_uri( '/inc/redux-framework/css/img/banners/Banner-With-Breadcrumb.png' ),
						'title' => esc_html__( 'Banner & Breadcrumb', 'gepetrolseguros' ),
					),
					'Banner-only'            => array(
						'alt'   => esc_html__( 'Banner Only', 'gepetrolseguros' ),
						'img'   => get_parent_theme_file_uri( '/inc/redux-framework/css/img/banners/Banner-Only.png' ),
						'title' => esc_html__( 'Banner Only', 'gepetrolseguros' ),
					),
					'breadcrumb-only'        => array(
						'alt'   => esc_html__( 'Breadcrumb-Only', 'gepetrolseguros' ),
						'img'   => get_parent_theme_file_uri( '/inc/redux-framework/css/img/banners/Breadcrumb-Only.png' ),
						'title' => esc_html__( 'Breadcrumb Only', 'gepetrolseguros' ),
					),
					'banner-none'            => array(
						'alt'   => esc_html__( 'Banner None', 'gepetrolseguros' ),
						'img'   => get_parent_theme_file_uri( '/inc/redux-framework/css/img/banners/Banner-None.png' ),
						'title' => esc_html__( 'Banner None', 'gepetrolseguros' ),
					),
				),
				'default'  => 'Banner-With-Breadcrumb',
			),

			// Inner Page Banner Info.
			array(
				'id'    => 'inner_page_banner_info',
				'type'  => 'info',
				'style' => 'custom',
				'color' => '#b9cbe4',
				'class' => 'radiant-subheader',
				'title' => esc_html__( 'Inner Page Banner', 'gepetrolseguros' ),
			),

			// Inner Page Banner Background.
			array(
				'id'       => 'inner_page_banner_background',
				'type'     => 'background',
				'title'    => esc_html__( 'Inner Page Banner Background', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Set Background for Inner Page Banner. (Please Note: This is the default image of Inner Page Banner section. You can change background image on respective pages.)', 'gepetrolseguros' ),
				'default'  => array(
					'background-color'    => '#f6f6f6',
					'background-position' => 'center center',
					'background-repeat'   => 'no-repeat',
					'background-size'     => 'cover',

				),
				'output'   => array(
					'.wraper_inner_banner',
				),
			),

			// Inner Page Banner Border Bottom.
			array(
				'id'       => 'inner_page_banner_border_bottom',
				'type'     => 'color_rgba',
				'title'    => esc_html__( 'Inner Page Banner Border Bottom', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Set Border Bottom for Inner Page Banner.', 'gepetrolseguros' ),
				'default'  => array(
					'color' => '#ffffff',
					'alpha' => 0.01,
				),
				'output'   => array(
					'border-bottom-color' => '.wraper_inner_banner_main',
				),
			),

			// Inner Page Banner Padding.
			array(
				'id'             => 'inner_page_banner_padding',
				'type'           => 'spacing',
				'units'          => array( 'em', 'px' ),
				'units_extended' => 'false',
				'title'          => esc_html__( 'Inner Page Banner Padding', 'gepetrolseguros' ),
				'subtitle'       => esc_html__( 'Set padding for inner page banner area.', 'gepetrolseguros' ),
				'all'            => false,
				'top'            => true,
				'right'          => false,
				'bottom'         => true,
				'left'           => false,
				'default'        => array(
					'padding-top'    => '181px',
					'padding-bottom' => '20px',
					'units'          => 'px',
				),
				'output'         => array(
					'.wraper_inner_banner_main > .container',
				),
			),

			// Inner Page Banner Title Font.
			array(
				'id'             => 'inner_page_banner_title_font',
				'type'           => 'typography',
				'title'          => esc_html__( 'Inner Page Banner Title Font', 'gepetrolseguros' ),
				'subtitle'       => esc_html__( 'This will be the default font of your inner page banner title.', 'gepetrolseguros' ),
				'google'         => true,
				'font-backup'    => true,
				'text-align'     => false,
				'text-transform' => true,
				'letter-spacing' => true,
				'font-style'     => true,
				'all_styles'     => false,
				'units'          => 'px',
				'default'        => array(
					'google'         => true,
					'font-family'    => 'Poppins',
					'font-weight'    => '600',
					'font-size'      => '40px',
					'color'          => '#1d1847',
					'line-height'    => '52px',
					'letter-spacing' => '-1px',
				),
				'output'         => array(
					'.inner_banner_main .title',
				),
			),

			// Inner Page Banner Subtitle Font.
			array(
				'id'             => 'inner_page_banner_subtitle_font',
				'type'           => 'typography',
				'title'          => esc_html__( 'Inner Page Banner Subtitle Font', 'gepetrolseguros' ),
				'subtitle'       => esc_html__( 'This will be the default font of your inner page banner subtitle.', 'gepetrolseguros' ),
				'google'         => true,
				'font-backup'    => true,
				'text-align'     => false,
				'text-transform' => true,
				'letter-spacing' => true,
				'font-style'     => true,
				'all_styles'     => false,
				'units'          => 'px',
				'default'        => array(
					'google'      => true,
					'font-family' => 'Montserrat',
					'font-weight' => '600',
					'font-size'   => '15px',
					'color'       => '#1d1847',
					'line-height' => '34px',
				),
				'output'         => array(
					'.inner_banner_main .subtitle',
				),
			),

			// Inner Page Banner Alignment.
			array(
				'id'      => 'inner_page_banner_alignment',
				'type'    => 'select',
				'title'   => esc_html__( 'Inner Page Banner Alignment', 'gepetrolseguros' ),
				'options' => array(
					'left'   => 'Left',
					'center' => 'Center',
					'right'  => 'Right',
				),
				'default' => 'left',
			),

			// Breadcrumb Style Info.
			array(
				'id'    => 'breadcrumb_info',
				'type'  => 'info',
				'style' => 'custom',
				'color' => '#b9cbe4',
				'class' => 'radiant-subheader',
				'title' => esc_html__( 'Breadcrumb', 'gepetrolseguros' ),
			),

			// Breadcrumb Arrow Style.
			array(
				'id'       => 'breadcrumb_arrow_style',
				'type'     => 'select',
				'title'    => __( 'Breadcrumb Arrow Style', 'gepetrolseguros' ),
				'subtitle' => __( 'Select an icon for breadcrumb arrow.', 'gepetrolseguros' ),
				'data'     => 'elusive-icons',
				'default'  => 'el el-chevron-right',
			),

			// Breadcrumb Font.
			array(
				'id'             => 'breadcrumb_font',
				'type'           => 'typography',
				'title'          => esc_html__( 'Inner Page Banner Breadcrumb Font', 'gepetrolseguros' ),
				'subtitle'       => esc_html__( 'This will be the default font of your Inner Page Banner Breadcrumb.', 'gepetrolseguros' ),
				'google'         => true,
				'font-backup'    => true,
				'text-align'     => false,
				'text-transform' => true,
				'letter-spacing' => true,
				'font-style'     => true,
				'all_styles'     => false,
				'units'          => 'px',
				'default'        => array(
					'google'      => true,
					'font-family' => 'Montserrat',
					'font-weight' => '400',
					'font-size'   => '15px',
					'color'       => '#1d1847',
					'line-height' => '27px',
				),
				'output'         => array(
					'.inner_banner_breadcrumb #crumbs',
				),
			),

			// Breadcrumb Padding.
			array(
				'id'             => 'breadcrumb_padding',
				'type'           => 'spacing',
				'units'          => array( 'em', 'px' ),
				'units_extended' => 'false',
				'title'          => esc_html__( 'Breadcrumb Padding', 'gepetrolseguros' ),
				'subtitle'       => esc_html__( 'Set padding for breadcrumb area.', 'gepetrolseguros' ),
				'all'            => false,
				'top'            => true,
				'right'          => false,
				'bottom'         => true,
				'left'           => false,
				'default'        => array(
					'padding-top'    => '30px',
					'padding-bottom' => '150px',
					'units'          => 'px',
				),
				'output'         => array(
					'.wraper_inner_banner_breadcrumb > .container',
				),
			),

			// Breadcrumb Alignment.
			array(
				'id'      => 'breadcrumb_alignment',
				'type'    => 'select',
				'title'   => esc_html__( 'Breadcrumb Alignment', 'gepetrolseguros' ),
				'options' => array(
					'left'   => 'Left',
					'center' => 'Center',
					'right'  => 'Right',
				),
				'default' => 'left',
			),

		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'  => esc_html__( 'Footer', 'gepetrolseguros' ),
		'icon'   => 'el el-photo',
		'id'     => 'footer',
		'fields' => array(

			// Footer Style Info.
			array(
				'id'    => 'footer_style_info',
				'type'  => 'info',
				'style' => 'custom',
				'color' => '#b9cbe4',
				'class' => 'radiant-subheader',
				'title' => esc_html__( 'Footer Style', 'gepetrolseguros' ),
			),

			// Footer Style Options.
			array(
				'id'       => 'footer-style',
				'type'     => 'image_select',
				'title'    => esc_html__( 'Footer Style', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Select footer style. (N.B.: Please set style for individual footer on their respective settings below.)', 'gepetrolseguros' ),
				'options'  => array(
					'footer-default' => array(
						'alt'   => esc_html__( 'Default Footer', 'gepetrolseguros' ),
						'img'   => get_parent_theme_file_uri( '/inc/redux-framework/css/img/Footer-Default.png' ),
						'title' => esc_html__( 'Default Footer', 'gepetrolseguros' ),
					),
					'footer-custom'  => array(
						'alt'   => esc_html__( 'Custom Footer', 'gepetrolseguros' ),
						'img'   => get_parent_theme_file_uri( '/inc/redux-framework/css/img/Footer-Custom.png' ),
						'title' => esc_html__( 'Custom Footer ', 'gepetrolseguros' ),
					),
				),
				'default'  => 'footer-default',
			),

			// START OF FOOTER ONE OPTIONS.

			// Footer One Info.
			array(
				'id'       => 'footer_one_info',
				'type'     => 'info',
				'title'    => esc_html__( 'Footer Default Settings', 'gepetrolseguros' ),
				'class'    => 'radiant-subheader',
				'required' => array(
					array(
						'footer-style',
						'=',
						'footer-default',
					),
				),
			),

			// Open social links in new window.
			array(
				'id'       => 'hide-footer-widget',
				'type'     => 'switch',
				'title'    => esc_html__( 'Hide footer widget area', 'gepetrolseguros' ),
				'default'  => true,
				'required' => array(
					array(
						'footer-style',
						'=',
						'footer-default',
					),
				),
			),

			// Footer One Background.
			array(
				'id'       => 'footer_one_background',
				'type'     => 'background',
				'title'    => esc_html__( 'Footer Background', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Set Background for Footer.', 'gepetrolseguros' ),
				'output'   => array(
					'.wraper_footer.style-default',
				),
				'required' => array(
					array(
						'hide-footer-widget',
						'equals',
						true,
					),
				),
				'required' => array(
					array(
						'footer-style',
						'=',
						'footer-default',
					),
				),
			),

			// Footer One Main Background.
			array(
				'id'       => 'footer_one_main_background',
				'type'     => 'background',
				'title'    => esc_html__( 'Footer Main Background', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Pick a background color for the Footer Main Section.', 'gepetrolseguros' ),
				'default'  => array(
					'background-color' => '#161b27',
				),
				'output'   => array(
					'.wraper_footer.style-default .wraper_footer_main',
				),
				'required' => array(
					array(
						'footer-style',
						'=',
						'footer-default',
					),
				),
			),

			// Footer One Main Bottom Border.
			array(
				'id'       => 'footer_one_main_border_bottom',
				'type'     => 'color_rgba',
				'title'    => esc_html__( 'Footer Main Border Bottom Color', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Set Border Bottom Color for Footer Main section.', 'gepetrolseguros' ),
				'default'  => array(
					'color' => '#ffffff',
					'alpha' => 0.17,
				),
				'output'   => array(
					'border-bottom-color' => '.wraper_footer.style-default .wraper_footer_main',
				),
				'required' => array(
					array(
						'footer-style',
						'=',
						'footer-default',
					),
				),
			),

			// Footer One Copyright Background.
			array(
				'id'       => 'footer_one_copyright_background',
				'type'     => 'background',
				'title'    => esc_html__( 'Footer Copyright Background', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Pick a background color for the Footer Copyright Background.', 'gepetrolseguros' ),
				'default'  => array(
					'background-color' => '#161b27',
				),
				'output'   => array(
					'.wraper_footer.style-default .wraper_footer_copyright',
				),
				'required' => array(
					array(
						'footer-style',
						'=',
						'footer-default',
					),
				),
			),

			// Footer One Copyright Text.
			array(
				'id'       => 'footer_one_copyright_text',
				'type'     => 'text',
				'title'    => esc_html__( 'Copyright Text', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Enter Copyright Text.', 'gepetrolseguros' ),
				'default'  => esc_html__( 'gepetrolseguros Theme - Made by RadiantThemes for Themeforest.', 'gepetrolseguros' ),
				'required' => array(
					array(
						'footer-style',
						'=',
						'footer-default',
					),
				),
			),

			// END OF FOOTER DEFAULT OPTIONS.

			// START OF FOOTER CUSTOM OPTIONS.

			// Footer Eleven Info.
			array(
				'id'       => 'footer_custom_info',
				'type'     => 'info',
				'class'    => 'radiant-subheader',
				'title'    => esc_html__( 'Custom Footer Settings', 'gepetrolseguros' ),
				'required' => array(
					array(
						'footer-style',
						'=',
						'footer-custom',
					),
				),
			),

			array(
				'id'       => 'footer_list_text',
				'title'    => __( 'Elementor Section Template', 'gepetrolseguros' ),
				'type'     => 'select',
				'data'     => 'posts',
				'args'     => array(
					'post_type'      => 'elementor_library',
					'posts_per_page' => -1,
					'orderby'        => 'title',
					'order'          => 'ASC',
					'tax_query'      => array(
						array(
							'taxonomy' => 'elementor_library_category',
							'field'    => 'slug',
							'terms'    => 'custom-footer',
						),
					),
				),
				'required' => array(
					array(
						'footer-style',
						'=',
						'footer-custom',
					),
				),
			),
			array(
				'id'       => 'shop_footer_text',
				'title'    => __( 'Shop Footer Template', 'gepetrolseguros' ),
				'type'     => 'select',
				'data'     => 'posts',
				'args'     => array(
					'post_type'      => 'elementor_library',
					'posts_per_page' => -1,
					'orderby'        => 'title',
					'order'          => 'ASC',
					'tax_query'      => array(
						array(
							'taxonomy' => 'elementor_library_category',
							'field'    => 'slug',
							'terms'    => 'custom-footer',
						),
					),
				),
				'required' => array(
					array(
						'footer-style',
						'=',
						'footer-custom',
					),
				),
			),
			array(
				'id'       => 'shop_details_footer_text',
				'title'    => __( 'Product Details Footer Template', 'gepetrolseguros' ),
				'type'     => 'select',
				'data'     => 'posts',
				'args'     => array(
					'post_type'      => 'elementor_library',
					'posts_per_page' => -1,
					'orderby'        => 'title',
					'order'          => 'ASC',
					'tax_query'      => array(
						array(
							'taxonomy' => 'elementor_library_category',
							'field'    => 'slug',
							'terms'    => 'custom-footer',
						),
					),
				),
				'required' => array(
					array(
						'footer-style',
						'=',
						'footer-custom',
					),
				),
			),

			// Footer Custom Stucking.
			array(
				'id'       => 'footer_custom_stucking',
				'type'     => 'switch',
				'title'    => esc_html__( 'Stucking Option', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Choose if you want the stucking effect on footer or not.', 'gepetrolseguros' ),
				'on'       => esc_html__( 'Yes', 'gepetrolseguros' ),
				'off'      => esc_html__( 'No', 'gepetrolseguros' ),
				'default'  => true,
				'required' => array(
					array(
						'footer-style',
						'=',
						'footer-custom',
					),
				),
			),

			// END OF FOOTER OPTIONS.
		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title' => esc_html__( 'Elements', 'gepetrolseguros' ),
		'icon'  => 'el el-braille',
		'id'    => 'elements',
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__( 'Scroll Bar', 'gepetrolseguros' ),
		'id'         => 'scroll_bar',
		'icon'       => 'el el-adjust-alt',
		'subsection' => true,
		'fields'     => array(

			// Display Footer Main Section.
			array(
				'id'       => 'scrollbar_switch',
				'type'     => 'switch',
				'title'    => esc_html__( 'Activate Custom Scrollbar', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Choose if Custom Scrollbar will be activate or not. (Please Note: This will take effect on infinity scroll areas but not for entire website.)', 'gepetrolseguros' ),
				'on'       => esc_html__( 'Yes', 'gepetrolseguros' ),
				'off'      => esc_html__( 'No', 'gepetrolseguros' ),
				'default'  => false,
			),

			// Scroll Bar Color.
			array(
				'id'       => 'scrollbar_color',
				'type'     => 'color_rgba',
				'title'    => esc_html__( 'Scroll Bar Color', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Pick a color for Scroll Bar.', 'gepetrolseguros' ),
				'required' => array(
					array(
						'scrollbar_switch',
						'equals',
						true,
					),
				),
				'default'  => array(
					'color' => '#ffbc13',
					'alpha' => 1,
				),
			),

			// Scroll Bar Width.
			array(
				'id'       => 'scrollbar_width',
				'type'     => 'dimensions',
				'units'    => array( 'em', 'px' ),
				'height'   => false,
				'title'    => esc_html__( 'Scroll Bar Width', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Set width for Scroll Bar.', 'gepetrolseguros' ),
				'required' => array(
					array(
						'scrollbar_switch',
						'equals',
						true,
					),
				),
				'default'  => array(
					'width' => '7',
					'units' => 'px',
				),
			),

		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__( 'Button', 'gepetrolseguros' ),
		'icon'       => 'el el-off',
		'id'         => 'button-style',
		'subsection' => true,
		'fields'     => array(

			// Button Padding.
			array(
				'id'             => 'button_padding',
				'type'           => 'spacing',
				'mode'           => 'padding',
				'units'          => array( 'em', 'px' ),
				'units_extended' => 'false',
				'title'          => esc_html__( 'Button Padding', 'gepetrolseguros' ),
				'subtitle'       => esc_html__( 'Allow padding for buttons.', 'gepetrolseguros' ),
				'default'        => array(
					'padding-top'    => '17px',
					'padding-right'  => '45px',
					'padding-bottom' => '17px',
					'padding-left'   => '45px',
					'units'          => 'px',
				),
				'output'         => array(
					'.radiantthemes-button > .radiantthemes-button-main, .gdpr-notice .btn, .shop_single > .summary form.cart .button, .shop_single #review_form #respond input[type=submit], .woocommerce button.button[name=apply_coupon], .woocommerce button.button[name=update_cart], .woocommerce button.button[name=update_cart]:disabled, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .woocommerce form.checkout_coupon .form-row .button, .woocommerce #payment #place_order, .woocommerce .return-to-shop .button, .woocommerce form .form-row input.button, .woocommerce table.shop_table.wishlist_table > tbody > tr > td.product-add-to-cart a, .widget-area > .widget.widget_price_filter .button, .post.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .page.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .tribe_events.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .testimonial.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .team.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .portfolio.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .case-studies.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .client.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .product.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .post.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .page.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .tribe_events.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .testimonial.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .team.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .portfolio.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .case-studies.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .client.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .product.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .comments-area .comment-form > p button[type=submit], .comments-area .comment-form > p button[type=reset], .wraper_error_main.style-one .error_main .btn, .wraper_error_main.style-two .error_main .btn, .wraper_error_main.style-three .error_main_item .btn, .wraper_error_main.style-four .error_main .btn',
				),
			),

			// Button Background Color.
			array(
				'id'       => 'button_background_color',
				'type'     => 'color_rgba',
				'title'    => esc_html__( 'Background Color', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Pick a background color for buttons.', 'gepetrolseguros' ),
				'default'  => array(
					'color' => '#ed1b24',
					'alpha' => 1,
				),
				'output'   => array(
					'background-color' => '.radiantthemes-button > .radiantthemes-button-main, .gdpr-notice .btn, .shop_single > .summary form.cart .button, .shop_single #review_form #respond input[type=submit], .woocommerce button.button[name=apply_coupon], .woocommerce button.button[name=update_cart], .woocommerce button.button[name=update_cart]:disabled, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .woocommerce form.checkout_coupon .form-row .button, .woocommerce #payment #place_order, .woocommerce .return-to-shop .button, .woocommerce form .form-row input.button, .woocommerce table.shop_table.wishlist_table > tbody > tr > td.product-add-to-cart a, .widget-area > .widget.widget_price_filter .button, .post.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .page.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .tribe_events.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .testimonial.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .team.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .portfolio.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .case-studies.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .client.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .product.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .comments-area .comment-form > p button[type=submit], .comments-area .comment-form > p button[type=reset], .wraper_error_main.style-one .error_main .btn, .wraper_error_main.style-two .error_main .btn, .wraper_error_main.style-three .error_main_item .btn, .wraper_error_main.style-four .error_main .btn',
				),
			),

			// Hover Background Color Hover.
			array(
				'id'       => 'button_background_color_hover',
				'type'     => 'color_rgba',
				'title'    => esc_html__( 'Hover Background Color', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Pick a background color for buttons hover.', 'gepetrolseguros' ),
				'default'  => array(
					'color' => '#ed1b24',
				),
				'output'   => array(
					'background-color' => '.radiantthemes-button > .radiantthemes-button-main:hover, .gdpr-notice .btn:hover, .shop_single > .summary form.cart .button:hover, .shop_single #review_form #respond input[type=submit]:hover, .woocommerce button.button[name=apply_coupon]:hover, .woocommerce button.button[name=update_cart]:hover, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce form.checkout_coupon .form-row .button:hover, .woocommerce #payment #place_order:hover, .woocommerce .return-to-shop .button:hover, .woocommerce form .form-row input.button:hover, .woocommerce table.shop_table.wishlist_table > tbody > tr > td.product-add-to-cart a:hover, .widget-area > .widget.widget_price_filter .button:hover, .post.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .page.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .tribe_events.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .testimonial.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .team.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .portfolio.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .case-studies.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .client.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .product.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .comments-area .comment-form > p button[type=reset]:hover, .wraper_error_main.style-one .error_main .btn:hover, .wraper_error_main.style-two .error_main .btn:hover, .wraper_error_main.style-three .error_main_item .btn:hover, .wraper_error_main.style-four .error_main .btn:hover, .post.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:hover span,.widget-area > .widget.widget_search .search-form input[type="submit"]:hover',
				),
			),

			// Border.
			array(
				'id'      => 'button_border',
				'type'    => 'border',
				'title'   => esc_html__( 'Border', 'gepetrolseguros' ),
				'default' => array(
					'border-top'    => '0px',
					'border-right'  => '0px',
					'border-bottom' => '0px',
					'border-left'   => '0px',
					'border-style'  => 'solid',
					'border-color'  => '#5f27d4',
				),
				'output'  => array(
					'.radiantthemes-button > .radiantthemes-button-main, .gdpr-notice .btn, .shop_single > .summary form.cart .button, .shop_single #review_form #respond input[type=submit], .woocommerce button.button[name=apply_coupon], .woocommerce button.button[name=update_cart], .woocommerce button.button[name=update_cart]:disabled, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .woocommerce form.checkout_coupon .form-row .button, .woocommerce #payment #place_order, .woocommerce .return-to-shop .button, .woocommerce form .form-row input.button, .woocommerce table.shop_table.wishlist_table > tbody > tr > td.product-add-to-cart a, .widget-area > .widget.widget_price_filter .button, .post.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .page.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .tribe_events.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .testimonial.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .team.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .portfolio.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .case-studies.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .client.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .product.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn span, .comments-area .comment-form > p button[type=submit], .comments-area .comment-form > p button[type=reset], .wraper_error_main.style-one .error_main .btn, .wraper_error_main.style-two .error_main .btn, .wraper_error_main.style-three .error_main_item .btn, .wraper_error_main.style-four .error_main .btn',
				),
			),

			// Hover Border Color.
			array(
				'id'      => 'button_hover_border_color',
				'type'    => 'border',
				'title'   => esc_html__( 'Hover Border Color', 'gepetrolseguros' ),
				'default' => array(
					'border-top'    => '0px',
					'border-right'  => '0px',
					'border-bottom' => '0px',
					'border-left'   => '0px',
					'border-style'  => 'solid',
					'border-color'  => '#1ed5a4',
				),
				'output'  => array(
					' .radiantthemes-button > .radiantthemes-button-main:hover, .gdpr-notice .btn:hover, .shop_single > .summary form.cart .button:hover, .shop_single #review_form #respond input[type=submit]:hover, .woocommerce button.button[name=apply_coupon]:hover, .woocommerce button.button[name=update_cart]:hover, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce form.checkout_coupon .form-row .button:hover, .woocommerce #payment #place_order:hover, .woocommerce .return-to-shop .button:hover, .woocommerce form .form-row input.button:hover, .woocommerce table.shop_table.wishlist_table > tbody > tr > td.product-add-to-cart a:hover, .widget-area > .widget.widget_price_filter .button:hover, .post.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .page.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .tribe_events.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .testimonial.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .team.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .portfolio.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .case-studies.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .client.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .product.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .comments-area .comment-form > p button[type=submit]:hover, .comments-area .comment-form > p button[type=reset]:hover, .wraper_error_main.style-one .error_main .btn:hover, .wraper_error_main.style-two .error_main .btn:hover, .wraper_error_main.style-three .error_main_item .btn:hover, .wraper_error_main.style-four .error_main .btn:hover',
				),
			),

			// Border Radius.
			array(
				'id'             => 'border-radius',
				'type'           => 'spacing',
				'mode'           => 'margin',
				'units'          => array( 'em', 'px' ),
				'units_extended' => 'false',
				'title'          => esc_html__( 'Border Radius', 'gepetrolseguros' ),
				'subtitle'       => esc_html__( 'Users can change the Border Radius for Buttons.', 'gepetrolseguros' ),
				'all'            => false,
				'default'        => array(
					'margin-top'    => '0px',
					'margin-right'  => '0px',
					'margin-bottom' => '0px',
					'margin-left'   => '0px',
					'units'         => 'px',
				),
			),

			// Box Shadow.
			array(
				'id'      => 'theme_button_box_shadow',
				'type'    => 'box_shadow',
				'title'   => esc_html__( 'Theme Button Box Shadow', 'gepetrolseguros' ),
				'units'   => array( 'px', 'em', 'rem' ),
				'output'  => array(
					'.radiantthemes-button > .radiantthemes-button-main, .gdpr-notice .btn, .shop_single > .summary form.cart .button, .shop_single #review_form #respond input[type=submit], .woocommerce button.button[name=apply_coupon], .woocommerce button.button[name=update_cart], .woocommerce button.button[name=update_cart]:disabled, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .woocommerce form.checkout_coupon .form-row .button, .woocommerce #payment #place_order, .woocommerce .return-to-shop .button, .woocommerce form .form-row input.button, .woocommerce table.shop_table.wishlist_table > tbody > tr > td.product-add-to-cart a, .widget-area > .widget.widget_price_filter .button, .post.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .page.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .tribe_events.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .testimonial.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .team.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .portfolio.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .case-studies.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .client.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .product.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .comments-area .comment-form > p button[type=submit], .comments-area .comment-form > p button[type=reset], .wraper_error_main.style-one .error_main .btn, .wraper_error_main.style-two .error_main .btn, .wraper_error_main.style-three .error_main_item .btn, .wraper_error_main.style-four .error_main .btn',
				),
				'opacity' => true,
				'rgba'    => true,
				'default' => array(
					'horizontal'   => '0',
					'vertical'     => '0',
					'blur'         => '0',
					'spread'       => '0',
					'opacity'      => '0.01',
					'shadow-color' => '#000000',
					'shadow-type'  => 'outside',
					'units'        => 'px',
				),

			),

			// Button Typography.
			array(
				'id'             => 'button_typography',
				'type'           => 'typography',
				'title'          => esc_html__( 'Button Typography', 'gepetrolseguros' ),
				'subtitle'       => esc_html__( 'Typography options for buttons. Remember, this will effect all buttons of this theme. (Please Note: This change will effect all theme buttons, including Radiants Buttons, Radiant Contact Form Button, Radiant Fancy Text Box Button.)', 'gepetrolseguros' ),
				'google'         => true,
				'font-backup'    => false,
				'subsets'        => false,
				'text-align'     => false,
				'text-transform' => true,
				'letter-spacing' => true,
				'units'          => 'px',
				'default'        => array(
					'google'      => true,
					'font-family' => 'Montserrat',
					'font-weight' => '600',
					'font-size'   => '16px',
					'color'       => '#ffffff',
					'line-height' => '28px',
				),
				'output'         => array(
					'.radiantthemes-button > .radiantthemes-button-main, .gdpr-notice .btn, .shop_single > .summary form.cart .button, .shop_single #review_form #respond input[type=submit], .woocommerce button.button[name=apply_coupon], .woocommerce button.button[name=update_cart], .woocommerce button.button[name=update_cart]:disabled, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .woocommerce form.checkout_coupon .form-row .button, .woocommerce #payment #place_order, .woocommerce .return-to-shop .button, .woocommerce form .form-row input.button, .woocommerce table.shop_table.wishlist_table > tbody > tr > td.product-add-to-cart a, .widget-area > .widget.widget_price_filter .button, .post.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .page.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .tribe_events.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .testimonial.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .team.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .portfolio.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .case-studies.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .client.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .product.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .comments-area .comment-form > p button[type=submit], .comments-area .comment-form > p button[type=reset], .wraper_error_main.style-one .error_main .btn, .wraper_error_main.style-two .error_main .btn, .wraper_error_main.style-three .error_main_item .btn, .wraper_error_main.style-four .error_main .btn',
				),
			),

			// Hover Font Color.
			array(
				'id'       => 'button_typography_hover',
				'type'     => 'color',
				'title'    => esc_html__( 'Hover Font Color', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Select button hover font color.', 'gepetrolseguros' ),
				'default'  => '#ffffff',
				'output'   => array(
					'color' => '.radiantthemes-button > .radiantthemes-button-main:hover, .gdpr-notice .btn:hover, .shop_single > .summary form.cart .button:hover, .shop_single #review_form #respond input[type=submit]:hover, .woocommerce button.button[name=apply_coupon]:hover, .woocommerce button.button[name=update_cart]:hover, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce form.checkout_coupon .form-row .button:hover, .woocommerce #payment #place_order:hover, .woocommerce .return-to-shop .button:hover, .woocommerce form .form-row input.button:hover, .woocommerce table.shop_table.wishlist_table > tbody > tr > td.product-add-to-cart a:hover, .widget-area > .widget.widget_price_filter .button:hover, .post.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .page.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .tribe_events.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .testimonial.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .team.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .portfolio.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .case-studies.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .client.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .product.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .comments-area .comment-form > p button[type=submit]:hover, .comments-area .comment-form > p button[type=reset]:hover, .wraper_error_main.style-one .error_main .btn:hover, .wraper_error_main.style-two .error_main .btn:hover, .wraper_error_main.style-three .error_main_item .btn:hover, .wraper_error_main.style-four .error_main .btn:hover',
				),
			),

			// Icon Color.
			array(
				'id'       => 'button_typography_icon',
				'type'     => 'color_rgba',
				'title'    => esc_html__( 'Icon Color', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Applies only if Icon is present. (Please Note: This option will work only for "Theme Button" element.)', 'gepetrolseguros' ),
				'default'  => array(
					'color' => '#ffffff',
					'alpha' => 1,
				),
				'output'   => array(
					'color' => '.radiantthemes-button > .radiantthemes-button-main i',
				),
			),

			// Hover Icon Color.
			array(
				'id'       => 'button_typography_icon_hover',
				'type'     => 'color_rgba',
				'title'    => esc_html__( 'Hover Icon Color', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Applies only if Icon is present. (Please Note: This option will work only for "Theme Button" element.)', 'gepetrolseguros' ),
				'default'  => array(
					'color' => '#ffffff',
					'alpha' => 1,
				),
				'output'   => array(
					'color' => '.radiantthemes-button > .radiantthemes-button-main:hover i',
				),
			),

			// Hover Style.
			array(
				'id'       => 'button_hover_style',
				'type'     => 'select',
				'title'    => esc_html__( 'Select Hover Style', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Select Hover Style of the "Button". (Please Note: This option will work only for "Theme Button" element.)', 'gepetrolseguros' ),
				'options'  => array(
					'one'   => 'Style One (Fade)',
					'two'   => 'Style Two (Sweep Right)',
					'three' => 'Style Three (Zoom Out)',
					'four'  => 'Style Four (Fade with Icon Right)',
					'five'  => 'Style Five (3D Shadow With SlideUp)',
					'six'   => 'Style Six (Horizontal Shake)',
					'seven' => 'Style Seven (Zoom Out)',
				),
				'default'  => 'five',
			),

		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title' => esc_html__( 'Pages', 'gepetrolseguros' ),
		'icon'  => 'el el-book',
		'id'    => 'pages-option',
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__( 'Error 404', 'gepetrolseguros' ),
		'icon'       => 'el el-error',
		'id'         => '404_error',
		'subsection' => true,
		'fields'     => array(

			// 404 Page Style.
			array(
				'id'       => '404_error_style',
				'type'     => 'select',
				'title'    => esc_html__( '404 Page Style', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Select 404 Page Style of the website.', 'gepetrolseguros' ),
				'options'  => array(
					'one'   => 'Style One (Only Text)',
					'two'   => 'Style Two (Image, Text and Button)',
					'three' => 'Style Three (Image, Text and Button)',
					'four'  => 'Style Four (Image, Text and Button)',
				),
				'default'  => 'one',
			),

			// START OF 404 ERROR ONE OPTIONS.

			// Footer One Info.
			array(
				'id'    => '404_error_one_info',
				'type'  => 'info',
				'title' => esc_html__( '404 Error Style One Settings', 'gepetrolseguros' ),
				'class' => 'radiant-subheader enable-toggle',
			),

			// 404 Error One Content.
			array(
				'id'       => '404_error_one_content',
				'type'     => 'editor',
				'title'    => esc_html__( '404 Error Content', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Enter content to show on 404 page body. (Applicable only for 404 Error "Style One".)', 'gepetrolseguros' ),
				'args'     => array(
					'teeny' => false,
				),
				'default'  => '<h1>Oops! Page is not available</h1><h2>We\'re not being able to find the page you\'re looking for</h2>',
			),

			// 404 Error One Button Text.
			array(
				'id'       => '404_error_one_button_text',
				'type'     => 'text',
				'title'    => esc_html__( '404 Error Button Text', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Applicable only for 404 Error "Style One".', 'gepetrolseguros' ),
				'default'  => esc_html__( 'Back To Home', 'gepetrolseguros' ),
			),

			// 404 Error One Button Link.
			array(
				'id'       => '404_error_one_button_link',
				'type'     => 'text',
				'title'    => esc_html__( '404 Error Button Link', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Applicable only for 404 Error "Style One".', 'gepetrolseguros' ),
				'default'  => site_url(),
			),

			// END OF 404 ERROR ONE OPTIONS.

			// START OF 404 ERROR TWO OPTIONS.
			// 404 Error Two Info.
			array(
				'id'    => '404_error_two_info',
				'type'  => 'info',
				'title' => esc_html__( '404 Error Style Two Settings', 'gepetrolseguros' ),
				'class' => 'radiant-subheader enable-toggle',
			),

			// 404 Error Two Background.
			array(
				'id'       => '404_error_two_background',
				'type'     => 'background',
				'title'    => esc_html__( '404 Error Background', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Set Background for 404 Error. (Applicable only for 404 Error "Style Two".)', 'gepetrolseguros' ),
				'default'  => array(
					'background-color' => '#ffffff',
				),
				'output'   => array(
					'.wraper_error_main.style-two',
				),
			),

			// 404 Error Two Image.
			array(
				'id'       => '404_error_two_image',
				'type'     => 'media',
				'title'    => esc_html__( '404 Error Image', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'You can 404 error image for your website. (Applicable only for 404 Error "Style Two".)', 'gepetrolseguros' ),
				'default'  => array(
					'url' => get_template_directory_uri() . '/assets/images/404-Error-Style-Two-Image.png',
				),
			),

			// 404 Error Two Content.
			array(
				'id'       => '404_error_two_content',
				'type'     => 'editor',
				'title'    => esc_html__( '404 Error Content', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Enter content to show on 404 page body. (Applicable only for 404 Error "Style Two".)', 'gepetrolseguros' ),
				'args'     => array(
					'teeny' => false,
				),
				'default'  => '<h1>The requested page could not be found!</h1>',
			),

			// 404 Error Two Button Text.
			array(
				'id'       => '404_error_two_button_text',
				'type'     => 'text',
				'title'    => esc_html__( '404 Error Button Text', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Applicable only for 404 Error "Style Two".', 'gepetrolseguros' ),
				'default'  => esc_html__( 'Back To Home Page', 'gepetrolseguros' ),
			),

			// 404 Error Two Button Link.
			array(
				'id'       => '404_error_two_button_link',
				'type'     => 'text',
				'title'    => esc_html__( '404 Error Button Link', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Applicable only for 404 Error "Style Two".', 'gepetrolseguros' ),
				'default'  => site_url(),
			), // END OF 404 ERROR TWO OPTIONS.

			// START OF 404 ERROR THREE OPTIONS.
			// 404 Error Three Info.
			array(
				'id'    => '404_error_three_info',
				'type'  => 'info',
				'title' => esc_html__( '404 Error Style Three Settings', 'gepetrolseguros' ),
				'class' => 'radiant-subheader enable-toggle',
			),

			// 404 Error Three Background.
			array(
				'id'       => '404_error_three_background',
				'type'     => 'background',
				'title'    => esc_html__( '404 Error Background', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Set Background for 404 Error. (Applicable only for 404 Error "Style Three".)', 'gepetrolseguros' ),
				'default'  => array(
					'background-color' => '#ffffff',
				),
				'output'   => array(
					'.wraper_error_main.style-three',
				),
			),

			// 404 Error Three Image.
			array(
				'id'       => '404_error_three_image',
				'type'     => 'media',
				'title'    => esc_html__( '404 Error Image', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'You can 404 error image for your website. (Applicable only for 404 Error "Style Three".)', 'gepetrolseguros' ),
				'default'  => array(
					'url' => get_template_directory_uri() . '/assets/images/404-Error-Style-Three-Image.png',
				),
			),

			// 404 Error Three Content.
			array(
				'id'       => '404_error_three_content',
				'type'     => 'editor',
				'title'    => esc_html__( '404 Error Content', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Enter content to show on 404 page body. (Applicable only for 404 Error "Style Three".)', 'gepetrolseguros' ),
				'args'     => array(
					'teeny' => false,
				),
				'default'  => "<h1>Oops!</h1><h2>We can't seem to find the page you're looking for.</h2>",
			),

			// 404 Error Three Button Text.
			array(
				'id'       => '404_error_three_button_text',
				'type'     => 'text',
				'title'    => esc_html__( '404 Error Button Text', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Applicable only for 404 Error "Style Three".', 'gepetrolseguros' ),
				'default'  => esc_html__( 'Back To Home Page', 'gepetrolseguros' ),
			),

			// 404 Error Three Button Link.
			array(
				'id'       => '404_error_three_button_link',
				'type'     => 'text',
				'title'    => esc_html__( '404 Error Button Link', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Applicable only for 404 Error "Style Three".', 'gepetrolseguros' ),
				'default'  => site_url(),
			), // END OF 404 ERROR THREE OPTIONS.

			// START OF 404 ERROR FOUR OPTIONS.
			// 404 Error Four Info.
			array(
				'id'    => '404_error_four_info',
				'type'  => 'info',
				'title' => esc_html__( '404 Error Style Four Settings', 'gepetrolseguros' ),
				'class' => 'radiant-subheader enable-toggle',
			),

			// 404 Error Four Background.
			array(
				'id'       => '404_error_four_background',
				'type'     => 'background',
				'title'    => esc_html__( '404 Error Background', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Set Background for 404 Error. (Applicable only for 404 Error "Style Four".)', 'gepetrolseguros' ),
				'default'  => array(
					'background-color' => '#ffffff',
				),
				'output'   => array(
					'.wraper_error_main.style-four',
				),
			),

			// 404 Error Four Image.
			array(
				'id'       => '404_error_four_image',
				'type'     => 'media',
				'title'    => esc_html__( '404 Error Image', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'You can 404 error image for your website. (Applicable only for 404 Error "Style Four".)', 'gepetrolseguros' ),
				'default'  => array(
					'url' => get_template_directory_uri() . '/assets/images/404-Error-Style-Four-Image.png',
				),
			),

			// 404 Error Four Content.
			array(
				'id'       => '404_error_four_content',
				'type'     => 'editor',
				'title'    => esc_html__( '404 Error Content', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Enter content to show on 404 page body. (Applicable only for 404 Error "Style Four".)', 'gepetrolseguros' ),
				'args'     => array(
					'teeny' => false,
				),
				'default'  => '<h1>Sorry! This Page Was Lost</h1>',
			),

			// 404 Error Four Button Text.
			array(
				'id'       => '404_error_four_button_text',
				'type'     => 'text',
				'title'    => esc_html__( '404 Error Button Text', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Applicable only for 404 Error "Style Four".', 'gepetrolseguros' ),
				'default'  => esc_html__( 'Back To Home Page', 'gepetrolseguros' ),
			),

			// 404 Error Four Button Link.
			array(
				'id'       => '404_error_four_button_link',
				'type'     => 'text',
				'title'    => esc_html__( '404 Error Button Link', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Applicable only for 404 Error "Style Four".', 'gepetrolseguros' ),
				'default'  => site_url(),
			),
			// END OF 404 ERROR FOUR OPTIONS.
		),
	)
);
if ( class_exists( 'Radiantthemes_Addons' ) ) {
	Redux::setSection(
		$opt_name,
		array(
			'title'      => esc_html__( 'Maintenance Mode', 'gepetrolseguros' ),
			'icon'       => 'el el-broom',
			'id'         => 'maintenance_mode',
			'subsection' => true,
			'fields'     => array(

				// Maintenance Mode Switch.
				array(
					'id'       => 'maintenance_mode_switch',
					'type'     => 'switch',
					'title'    => esc_html__( 'Activate Maintenance Mode?', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Choose if want to Activate Maintenance Mode.', 'gepetrolseguros' ),
					'on'       => esc_html__( 'Yes', 'gepetrolseguros' ),
					'off'      => esc_html__( 'No', 'gepetrolseguros' ),
					'default'  => false,
				),

				// Maintenance Mode Style.
				array(
					'id'       => 'maintenance_mode_style',
					'type'     => 'select',
					'title'    => esc_html__( 'Maintenance Mode Style', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Select Maintenance Mode Style of the website.', 'gepetrolseguros' ),
					'options'  => array(
						'one'   => 'Style One (Background With Text)',
						'two'   => 'Style Two (Image With Text)',
						'three' => 'Style Three (Background With Text)',
					),
					'default'  => 'one',
				),

				// START OF MAINTENANCE MODE ONE OPTIONS.
				// Maintenance Mode One Info.
				array(
					'id'    => 'maintenance_mode_one_info',
					'type'  => 'info',
					'title' => esc_html__( 'Maintenance Mode Style One Settings', 'gepetrolseguros' ),
					'class' => 'radiant-subheader enable-toggle',
				),

				// Maintenance Mode One Background.
				array(
					'id'       => 'maintenance_mode_one_background',
					'type'     => 'background',
					'title'    => esc_html__( 'Maintenance Mode Background', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Set Background for Maintenance Mode. (Applicable only for Maintenance Mode "Style One".)', 'gepetrolseguros' ),
					'default'  => array(
						'background-image' => get_template_directory_uri() . '/assets/images/Maintenance-More-Style-One-Image.png',
						'background-color' => '#ffffff',
					),
					'output'   => array(
						'.wraper_maintenance_main.style-one',
					),
				),

				// Maintenance Mode One Content.
				array(
					'id'       => 'maintenance_mode_one_content',
					'type'     => 'editor',
					'title'    => esc_html__( 'Maintenance Mode Content', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Enter content to show on Maintenance Mode body. (Applicable only for Maintenance Mode "Style One".)', 'gepetrolseguros' ),
					'args'     => array(
						'teeny' => false,
					),
					'default'  => '<h1>The Website Is Currently <strong>Under Construction</strong></h1><h2>Please Check Back Soon...</h2>',
				), // END OF MAINTENANCE MODE ONE OPTIONS.

				// START OF MAINTENANCE MODE TWO OPTIONS.
				// Maintenance Mode Two Info.
				array(
					'id'    => 'maintenance_mode_two_info',
					'type'  => 'info',
					'title' => esc_html__( 'Maintenance Mode Style Two Settings', 'gepetrolseguros' ),
					'class' => 'radiant-subheader enable-toggle',
				),

				// Maintenance Mode Two Background.
				array(
					'id'       => 'maintenance_mode_two_background',
					'type'     => 'background',
					'title'    => esc_html__( 'Maintenance Mode Background', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Set Background for Maintenance Mode. (Applicable only for Maintenance Mode "Style Two".)', 'gepetrolseguros' ),
					'default'  => array(
						'background-image' => get_template_directory_uri() . '/assets/images/Maintenance-More-Style-Two-Image.png',
						'background-color' => '#ffffff',
					),
					'output'   => array(
						'.wraper_maintenance_main.style-two',
					),
				),

				// Maintenance Mode Two Content.
				array(
					'id'       => 'maintenance_mode_two_content',
					'type'     => 'editor',
					'title'    => esc_html__( 'Maintenance Mode Content', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Enter content to show on Maintenance Mode body. (Applicable only for Maintenance Mode "Style Two".)', 'gepetrolseguros' ),
					'args'     => array(
						'teeny' => false,
					),
					'default'  => '<h1><strong>This Website Is</strong> Under Construction.</h1><h2>Please Check Back Soon...</h2>',
				), // END OF MAINTENANCE MODE TWO OPTIONS.

				// START OF MAINTENANCE MODE THREE OPTIONS.
				// Maintenance Mode Three Info.
				array(
					'id'    => 'maintenance_mode_three_info',
					'type'  => 'info',
					'title' => esc_html__( 'Maintenance Mode Style Three Settings', 'gepetrolseguros' ),
					'class' => 'radiant-subheader enable-toggle',
				),

				// Maintenance Mode Three Background.
				array(
					'id'       => 'maintenance_mode_three_background',
					'type'     => 'background',
					'title'    => esc_html__( 'Maintenance Mode Background', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Set Background for Maintenance Mode. (Applicable only for Maintenance Mode "Style Three".)', 'gepetrolseguros' ),
					'default'  => array(
						'background-image' => get_template_directory_uri() . '/assets/images/Maintenance-More-Style-Three-Image.png',
						'background-color' => '#ffffff',
					),
					'output'   => array(
						'.wraper_maintenance_main.style-three',
					),
				),

				// Maintenance Mode Three Content.
				array(
					'id'       => 'maintenance_mode_three_content',
					'type'     => 'editor',
					'title'    => esc_html__( 'Maintenance Mode Content', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Enter content to show on Maintenance Mode body. (Applicable only for Maintenance Mode "Style Three".)', 'gepetrolseguros' ),
					'args'     => array(
						'teeny' => false,
					),
					'default'  => '<h1>The Website Is Currently <strong>Under Construction</strong></h1><h2>Please Check Back Soon...</h2>',
				),
				// END OF MAINTENANCE MODE THREE OPTIONS.
			),
		)
	);

	Redux::setSection(
		$opt_name,
		array(
			'title'      => esc_html__( 'Coming Soon', 'gepetrolseguros' ),
			'icon'       => 'el el-warning-sign',
			'id'         => 'coming_soon',
			'subsection' => true,
			'fields'     => array(

				// Coming Soon Switch.
				array(
					'id'       => 'coming_soon_switch',
					'type'     => 'switch',
					'title'    => esc_html__( 'Activate Coming Soon', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Choose if want to activate Coming Soon mode.', 'gepetrolseguros' ),
					'on'       => esc_html__( 'Yes', 'gepetrolseguros' ),
					'off'      => esc_html__( 'No', 'gepetrolseguros' ),
					'default'  => false,
				),

				// Coming Soon Launch Date-Time.
				array(
					'id'       => 'coming_soon_datetime',
					'type'     => 'text',
					'title'    => esc_html__( 'Launch Date & Time', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Enter Launch Date & Time.', 'gepetrolseguros' ),
					'default'  => date( 'Y-m-d h:i', strtotime( '+1 Months' ) ),
				),

				// Coming Soon Style.
				array(
					'id'       => 'coming_soon_style',
					'type'     => 'select',
					'title'    => esc_html__( 'Coming Soon Style', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Select Coming Soon Style of the website.', 'gepetrolseguros' ),
					'options'  => array(
						'one'   => 'Style One',
						'two'   => 'Style Two',
						'three' => 'Style Three',
					),
					'default'  => 'one',
				),

				// START OF COMING SOON ONE OPTIONS.
				// Coming Soon One Info.
				array(
					'id'    => 'coming_soon_one_info',
					'type'  => 'info',
					'title' => esc_html__( 'Coming Soon Style One Settings', 'gepetrolseguros' ),
					'class' => 'radiant-subheader enable-toggle',
				),

				// Coming Soon One Background.
				array(
					'id'       => 'coming_soon_one_background',
					'type'     => 'background',
					'title'    => esc_html__( 'Coming Soon Background', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Set Background for 404 Error. (Applicable only for Coming Soon "Style One".)', 'gepetrolseguros' ),
					'default'  => array(
						'background-image'    => get_template_directory_uri() . '/assets/images/Coming-Soon-Style-One-Background-Image.png',
						'background-color'    => '#000000',
						'background-size'     => 'cover',
						'background-position' => 'center-center',
					),
					'output'   => array(
						'.wraper_comingsoon_main.style-one',
					),
				),

				// Coming Soon One Content.
				array(
					'id'       => 'coming_soon_one_content',
					'type'     => 'editor',
					'title'    => esc_html__( 'Coming Soon Content', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Enter content to show on Coming Soon page body. (Applicable only for Coming Soon "Style One".)', 'gepetrolseguros' ),
					'args'     => array(
						'teeny' => false,
					),
					'default'  => '<h1>Our New Site Is Coming Soon</h1><h2>Stay tuned for something amazing</h2>',
				), // END OF COMING SOON ONE OPTIONS.

				// START OF COMING SOON TWO OPTIONS.
				// Coming Soon Two Info.
				array(
					'id'    => 'coming_soon_two_info',
					'type'  => 'info',
					'title' => esc_html__( 'Coming Soon Style Two Settings', 'gepetrolseguros' ),
					'class' => 'radiant-subheader enable-toggle',
				),

				// Coming Soon Two Background.
				array(
					'id'       => 'coming_soon_two_background',
					'type'     => 'background',
					'title'    => esc_html__( 'Coming Soon Background', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Set Background for 404 Error. (Applicable only for Coming Soon "Style Two".)', 'gepetrolseguros' ),
					'default'  => array(
						'background-image'    => get_template_directory_uri() . '/assets/images/Coming-Soon-Style-Two-Background-Image.png',
						'background-color'    => '#000000',
						'background-size'     => 'cover',
						'background-position' => 'center-center',
					),
					'output'   => array(
						'.wraper_comingsoon_main.style-two',
					),
				),

				// Coming Soon Two Content.
				array(
					'id'       => 'coming_soon_two_content',
					'type'     => 'editor',
					'title'    => esc_html__( 'Coming Soon Content', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Enter content to show on Coming Soon page body. (Applicable only for Coming Soon "Style Two".)', 'gepetrolseguros' ),
					'args'     => array(
						'teeny' => false,
					),
					'default'  => '<h1>Coming Soon</h1><h2>Stay tuned for something amazing</h2>',
				), // END OF COMING SOON TWO OPTIONS.

				// START OF COMING SOON THREE OPTIONS.
				// Coming Soon Three Info.
				array(
					'id'    => 'coming_soon_three_info',
					'type'  => 'info',
					'title' => esc_html__( 'Coming Soon Style Three Settings', 'gepetrolseguros' ),
					'class' => 'radiant-subheader enable-toggle',
				),

				// Coming Soon Three Background.
				array(
					'id'       => 'coming_soon_three_background',
					'type'     => 'background',
					'title'    => esc_html__( 'Coming Soon Background', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Set Background for 404 Error. (Applicable only for Coming Soon "Style Three".)', 'gepetrolseguros' ),
					'default'  => array(
						'background-image'    => get_template_directory_uri() . '/assets/images/Coming-Soon-Style-Three-Background-Image.png',
						'background-color'    => '#000000',
						'background-size'     => 'cover',
						'background-position' => 'center-center',
					),
					'output'   => array(
						'.wraper_comingsoon_main.style-three',
					),
				),

				// Coming Soon Three Content.
				array(
					'id'       => 'coming_soon_three_content',
					'type'     => 'editor',
					'title'    => esc_html__( 'Coming Soon Content', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Enter content to show on Coming Soon page body. (Applicable only for Coming Soon "Style Three".)', 'gepetrolseguros' ),
					'args'     => array(
						'teeny' => false,
					),
					'default'  => '<h1>Our Awesome Website Is <strong>Coming Soon!</strong></h1><h2>Stay tuned for something amazing</h2>',
				), // END OF COMING SOON THREE OPTIONS.

			),
		)
	);
}
Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__( 'Search', 'gepetrolseguros' ),
		'icon'       => 'el el-search-alt',
		'id'         => 'search',
		'subsection' => true,
		'fields'     => array(

			array(
				'id'       => 'search_page_banner_image',
				'type'     => 'media',
				'url'      => false,
				'title'    => esc_html__( 'Search Page Banner Image', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Select search page banner image', 'gepetrolseguros' ),
			),

			array(
				'id'       => 'search_page_banner_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Search Page Title', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Enter search page banner title', 'gepetrolseguros' ),
				'default'  => 'Search',
			),

			array(
				'id'       => 'search_page_banner_subtitle',
				'type'     => 'text',
				'title'    => esc_html__( 'Search Page Subtitle', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Enter search page banner subtitle', 'gepetrolseguros' ),
				'default'  => '',
			),

		),
	)
);
if ( class_exists( 'Tribe__Events__Main' ) ) {
	Redux::setSection(
		$opt_name,
		array(
			'title'      => esc_html__( 'Event', 'gepetrolseguros' ),
			'icon'       => 'el el-calendar',
			'id'         => 'banner_layout',
			'subsection' => true,
			'fields'     => array(
				array(
					'id'       => 'events_banner_details',
					'type'     => 'select',
					'title'    => esc_html__( 'Banner Details', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Select Banner options', 'gepetrolseguros' ),
					'options'  => array(
						'banner-breadcumbs' => 'Short Banner With Breadcumbs',
						'banner-only'       => 'Short Banner Only',
						'breadcumbs-only'   => 'Breadcumbs Only',
						'none'              => 'None',
					),
					'default'  => 'banner-breadcumbs',
				),
				array(
					'id'       => 'event_banner_image',
					'type'     => 'media',
					'url'      => false,
					'title'    => esc_html__( 'Event Banner Image', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Select event banner image', 'gepetrolseguros' ),
					'required' => array(
						array(
							'events_banner_details',
							'!=',
							'none',
						),
						array(
							'events_banner_details',
							'!=',
							'breadcumbs-only',
						),
					),
				),
				array(
					'id'       => 'event_banner_title',
					'type'     => 'text',
					'title'    => esc_html__( 'Event Title', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Enter event banner title', 'gepetrolseguros' ),
					'default'  => 'Events',
					'required' => array(
						array(
							'events_banner_details',
							'!=',
							'none',
						),
						array(
							'events_banner_details',
							'!=',
							'breadcumbs-only',
						),
					),
				),
				array(
					'id'       => 'event_banner_subtitle',
					'type'     => 'text',
					'title'    => esc_html__( 'Event Subtitle', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Enter event banner subtitle', 'gepetrolseguros' ),
					'default'  => '',
					'required' => array(
						array(
							'events_banner_details',
							'!=',
							'none',
						),
						array(
							'events_banner_details',
							'!=',
							'breadcumbs-only',
						),
					),
				),
			),
		)
	);
}

Redux::setSection(
	$opt_name,
	array(
		'title' => esc_html__( 'Blog', 'gepetrolseguros' ),
		'icon'  => 'el el-bullhorn',
		'id'    => 'blog',
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__( 'Blog Layout', 'gepetrolseguros' ),
		'icon'       => 'el el-check-empty',
		'id'         => 'blog_layout',
		'subsection' => true,
		'fields'     => array(

			// Blog Style.
			array(
				'id'       => 'blog-style',
				'type'     => 'image_select',
				'title'    => esc_html__( 'Blog Style', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Select blog style', 'gepetrolseguros' ),
				'options'  => array(
					'default' => array(
						'alt'   => 'Default',
						'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Blog-Style-Default.png',
						'title' => esc_html__( 'Default', 'gepetrolseguros' ),
					),
					'one'     => array(
						'alt'   => 'Classic',
						'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Blog-Style-Classic.png',
						'title' => esc_html__( 'Classic', 'gepetrolseguros' ),
					),
					'five'    => array(
						'alt'   => 'Standard',
						'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Blog-Style-Metro.png',
						'title' => esc_html__( 'Standard', 'gepetrolseguros' ),
					),
					'three'     => array(
						'alt'   => 'Classic',
						'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Blog-Style-List.png',
						'title' => esc_html__( 'List style', 'gepetrolseguros' ),
					),
				),
				'default'  => 'default',
			),

			// Blog Layout.
			array(
				'id'       => 'blog-layout',
				'type'     => 'image_select',
				'title'    => esc_html__( 'Blog Layout', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Select blog layout', 'gepetrolseguros' ),
				'options'  => array(
					'leftsidebar'  => array(
						'alt' => 'Left Sidebar',
						'img' => get_template_directory_uri() . '/inc/redux-framework/css/img/Blog-Layout-Left-Sidebar.png',
					),
					'nosidebar'    => array(
						'alt' => 'No Sidebar',
						'img' => get_template_directory_uri() . '/inc/redux-framework/css/img/Blog-Layout-No-Sidebar.png',
					),
					'rightsidebar' => array(
						'alt' => 'Right Sidebar',
						'img' => get_template_directory_uri() . '/inc/redux-framework/css/img/Blog-Layout-Right-Sidebar.png',
					),
				),
				'default'  => 'rightsidebar',
				'required' => array(
					array(
						'blog-style',
						'!=',
						'default',
					),
				),
			),

			// Blog Layout Sidebar Width.
			array(
				'id'       => 'blog-layout-sidebar-width',
				'type'     => 'select',
				'title'    => esc_html__( 'Sidebar Width', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Select sidebar width for blog pages.', 'gepetrolseguros' ),
				'options'  => array(
					'three-grid' => '3 Grids',
					'four-grid'  => '4 Grids',
					'five-grid'  => '5 Grids',
				),
				'default'  => 'three-grid',
				'required' => array(
					array(
						'blog-layout',
						'!=',
						'nosidebar',
					),
				),
			),
		),
	)
);
Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__( 'Single Page Layout', 'gepetrolseguros' ),
		'icon'       => 'el el-bold',
		'id'         => 'blog_single_layout',
		'subsection' => true,
		'fields'     => array(

			// Single Page Style.
			array(
				'id'       => 'blog_single_layout_style',
				'type'     => 'image_select',
				'title'    => esc_html__( 'Single Page Style', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Select blog single page style', 'gepetrolseguros' ),
				'options'  => array(
					'default' => array(
						'alt'   => 'Default',
						'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Blog-Single-Style-Default.png',
						'title' => esc_html__( 'Default', 'gepetrolseguros' ),
					),
					'one'     => array(
						'alt'   => 'Style One',
						'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Blog-Single-Style-One.png',
						'title' => esc_html__( 'Style One', 'gepetrolseguros' ),
					),
					'two'     => array(
						'alt'   => 'Style Two',
						'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Blog-Single-Style-Two.png',
						'title' => esc_html__( 'Style Two', 'gepetrolseguros' ),
					),
				),
				'default'  => 'one',
			),

		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__( 'Blog Options', 'gepetrolseguros' ),
		'icon'       => 'el el-ok-sign',
		'id'         => 'blog_options',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'display_social_sharing',
				'type'     => 'switch',
				'title'    => esc_html__( 'Social Sharing Box', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Select if you want to show Social Sharing icons on Blog Page (applicable for default structure).', 'gepetrolseguros' ),
				'on'       => esc_html__( 'Yes', 'gepetrolseguros' ),
				'off'      => esc_html__( 'No', 'gepetrolseguros' ),
				'default'  => false,
			),
			array(
				'id'       => 'display_author_information',
				'type'     => 'switch',
				'title'    => esc_html__( 'Author Information Box', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Select if you want to show author information on Blog Details Page.', 'gepetrolseguros' ),
				'on'       => esc_html__( 'Yes', 'gepetrolseguros' ),
				'off'      => esc_html__( 'No', 'gepetrolseguros' ),
				'default'  => true,
			),

			array(
				'id'       => 'display_categries',
				'type'     => 'switch',
				'title'    => esc_html__( 'Categories', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Select if you want to show the categories on both Blog Page and Blog Details Page.', 'gepetrolseguros' ),
				'on'       => esc_html__( 'Yes', 'gepetrolseguros' ),
				'off'      => esc_html__( 'No', 'gepetrolseguros' ),
				'default'  => true,
			),

			array(
				'id'       => 'display_tags',
				'type'     => 'switch',
				'title'    => esc_html__( 'Tags', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Select if you want to show the tags on both Blog Page and Blog Details Page.', 'gepetrolseguros' ),
				'on'       => esc_html__( 'Yes', 'gepetrolseguros' ),
				'off'      => esc_html__( 'No', 'gepetrolseguros' ),
				'default'  => true,
			),

			array(
				'id'       => 'display_navigation',
				'type'     => 'switch',
				'title'    => esc_html__( 'Navigation', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Select if you want to previous and next navigation the Previous/Next Navigation on Blog Details Page.', 'gepetrolseguros' ),
				'on'       => esc_html__( 'Yes', 'gepetrolseguros' ),
				'off'      => esc_html__( 'No', 'gepetrolseguros' ),
				'default'  => true,
			),

			array(
				'id'       => 'display_related_article',
				'type'     => 'switch',
				'title'    => esc_html__( 'Related Article', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Select if you want to show related article on Blog Details Page.', 'gepetrolseguros' ),
				'on'       => esc_html__( 'Yes', 'gepetrolseguros' ),
				'off'      => esc_html__( 'No', 'gepetrolseguros' ),
				'default'  => false,
			),

			array(
				'id'       => 'blog_comment_display',
				'type'     => 'switch',
				'title'    => esc_html__( 'Comments', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Select if you want to show comments on Blog Details Page.', 'gepetrolseguros' ),
				'on'       => esc_html__( 'Yes', 'gepetrolseguros' ),
				'off'      => esc_html__( 'No', 'gepetrolseguros' ),
				'default'  => true,
			),

		),
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title' => esc_html__( 'Team', 'gepetrolseguros' ),
		'icon'  => 'el el-user',
		'id'    => 'team',
	)
);

Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__( 'Team Details', 'gepetrolseguros' ),
		'icon'       => 'el el-address-book',
		'id'         => 'team_details',
		'subsection' => true,
		'fields'     => array(

			// Team Details Style.
			array(
				'id'       => 'team_details_style',
				'type'     => 'image_select',
				'title'    => esc_html__( 'Team Details Style', 'gepetrolseguros' ),
				'subtitle' => esc_html__( 'Select team details style', 'gepetrolseguros' ),
				'options'  => array(
					'blank' => array(
						'alt'   => 'Blank',
						'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Team-Details-Style-Blank.png',
						'title' => esc_html__( 'Blank', 'gepetrolseguros' ),
					),
					'one'   => array(
						'alt'   => 'Style One',
						'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Team-Details-Style-One.png',
						'title' => esc_html__( 'Style One', 'gepetrolseguros' ),
					),
				),
				'default'  => 'blank',
			),

		),
	)
);

if ( class_exists( 'woocommerce' ) ) {

	Redux::setSection(
		$opt_name,
		array(
			'title' => esc_html__( 'Shop', 'gepetrolseguros' ),
			'icon'  => 'el el-shopping-cart',
			'id'    => 'shop',
		)
	);

	Redux::setSection(
		$opt_name,
		array(
			'title'      => esc_html__( 'Product Listing', 'gepetrolseguros' ),
			'icon'       => 'el el-list-alt',
			'id'         => 'product_listing',
			'subsection' => true,
			'fields'     => array(

				// Product Listing Layout.
				array(
					'id'       => 'shop-style',
					'type'     => 'image_select',
					'title'    => esc_html__( 'Product Listing Layout', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Select Product Listing Layout', 'gepetrolseguros' ),
					'options'  => array(
						'shop-style-three-column' => array(
							'title' => 'Three Column',
							'alt'   => 'Three Column',
							'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Shop-Style-One.jpg',
						),
						'shop-style-four-column'  => array(
							'title' => 'Four Column',
							'alt'   => 'Four Column',
							'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Shop-Style-Two.jpg',
						),
						'shop-style-five-column'  => array(
							'title' => 'Five Column',
							'alt'   => 'Five Column',
							'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Shop-Style-Three.jpg',
						),
						'shop-style-six-column'   => array(
							'title' => 'Six Column',
							'alt'   => 'Six Column',
							'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Shop-Style-Four.jpg',
						),
					),
					'default'  => 'shop-style-four-column',
				),

				// Products Per Page.
				array(
					'id'       => 'shop-products-per-page',
					'type'     => 'text',
					'title'    => esc_html__( 'Products Per Page', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Put number of products you wants to show per page', 'gepetrolseguros' ),
					'default'  => '12',
					'validate' => 'numeric',
				),

				// Sidebar.
				array(
					'id'       => 'shop-sidebar',
					'type'     => 'image_select',
					'title'    => esc_html__( 'Sidebar.', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Select Sidebar', 'gepetrolseguros' ),
					'options'  => array(
						'shop-leftsidebar'  => array(
							'alt' => 'Left Sidebar',
							'img' => get_template_directory_uri() . '/inc/redux-framework/css/img/Product-Listing-Left-Sidebar.jpg',
						),
						'shop-nosidebar'    => array(
							'alt' => 'No Sidebar',
							'img' => get_template_directory_uri() . '/inc/redux-framework/css/img/Product-Listing-No-Sidebar.jpg',
						),
						'shop-rightsidebar' => array(
							'alt' => 'Right Sidebar',
							'img' => get_template_directory_uri() . '/inc/redux-framework/css/img/Product-Listing-Right-Sidebar.jpg',
						),
					),
					'default'  => 'shop-nosidebar',
				),

				// Shop Box Style.
				array(
					'id'       => 'shop_box_style',
					'type'     => 'image_select',
					'title'    => esc_html__( 'Shop Box Style', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Select Style of the Shop Box.', 'gepetrolseguros' ),
					'options'  => array(
						'style-one'   => array(
							'title' => 'Overlay',
							'alt'   => 'Overlay',
							'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Shop-Box-Style-One.jpg',
						),
						'style-two'   => array(
							'title' => 'Minimal',
							'alt'   => 'Minimal',
							'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Shop-Box-Style-Two.jpg',
						),
						'style-three' => array(
							'title' => 'Classic',
							'alt'   => 'Classic',
							'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Shop-Box-Style-Three.jpg',
						),
						'style-four'  => array(
							'title' => 'Simple',
							'alt'   => 'Simple',
							'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Shop-Box-Style-Four.jpg',
						),
						'style-five'  => array(
							'title' => 'Detailed',
							'alt'   => 'Detailed',
							'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Shop-Box-Style-Five.jpg',
						),
						'style-six'   => array(
							'title' => 'Overlay With Icon',
							'alt'   => 'Detailed With Icon',
							'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Shop-Box-Style-Six.jpg',
						),
						'style-seven' => array(
							'title' => 'With Zoom',
							'alt'   => 'With zoom image',
							'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Shop-Box-Style-Seven.jpg',
						),
						'style-eight' => array(
							'title' => 'With Hover',
							'alt'   => 'With Hover',
							'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Shop-Box-Style-Eight.jpg',
						),
					),
					'default'  => 'style-seven',
				),

			),
		)
	);

	Redux::setSection(
		$opt_name,
		array(
			'title'      => esc_html__( 'Product Details', 'gepetrolseguros' ),
			'icon'       => 'el el-shopping-cart',
			'id'         => 'product_details',
			'subsection' => true,
			'fields'     => array(

				// Product Details Layout.
				array(
					'id'       => 'shop-details-style',
					'type'     => 'image_select',
					'title'    => esc_html__( 'Product Details Layout', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Select Product Details Layout', 'gepetrolseguros' ),
					'options'  => array(
						'style-one'   => array(
							'alt' => 'Style One',
							'img' => get_template_directory_uri() . '/inc/redux-framework/css/img/Shop-Details-Style-One.jpg',
						),
						'style-two'   => array(
							'alt' => 'Style Two',
							'img' => get_template_directory_uri() . '/inc/redux-framework/css/img/Shop-Details-Style-Two.jpg',
						),
						'style-three' => array(
							'alt' => 'Style Three',
							'img' => get_template_directory_uri() . '/inc/redux-framework/css/img/Shop-Details-Style-Three.jpg',
						),
					),
					'default'  => 'style-three',
				),

				// Sidebar.
				array(
					'id'       => 'shop-details-sidebar',
					'type'     => 'image_select',
					'title'    => esc_html__( 'Sidebar', 'gepetrolseguros' ),
					'subtitle' => esc_html__( 'Select Sidebar', 'gepetrolseguros' ),
					'options'  => array(
						'shop-details-leftsidebar'  => array(
							'alt'   => 'Left Sidebar',
							'title' => 'Left Sidebar',
							'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Shop-Details-Layout-Left-Sidebar.jpg',
						),
						'shop-details-nosidebar'    => array(
							'alt'   => 'No Sidebar',
							'title' => 'No Sidebar',
							'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Shop-Details-Layout-No-Sidebar.jpg',
						),
						'shop-details-rightsidebar' => array(
							'alt'   => 'Right Sidebar',
							'title' => 'Right Sidebar',
							'img'   => get_template_directory_uri() . '/inc/redux-framework/css/img/Shop-Details-Layout-Right-Sidebar.jpg',
						),
					),
					'default'  => 'shop-details-nosidebar',
				),

			),
		)
	);

}
