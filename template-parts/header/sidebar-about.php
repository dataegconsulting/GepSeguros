<?php
global $gepetrol_theme_option;

// Seguridad: evitamos undefined indexes.
$about_footer = ! empty( $gepetrol_theme_option['about_footer'] )
    ? $gepetrol_theme_option['about_footer']
    : '';

$logo_url = get_template_directory_uri() . '/assets/img/logo-3.png';
?>
 
<div
    class="xs-sidebar-group info-group info-sidebar"
    role="dialog"
    aria-modal="true"
    aria-labelledby="sidebarInfoTitle"
    aria-hidden="true"
>
    <div class="xs-overlay xs-bg-black" data-sidebar-close></div>

    <div class="xs-sidebar-widget" role="document">
        <div class="sidebar-widget-container">

            <!-- Botón de cierre accesible -->
            <div class="widget-heading">
                <button
                    type="button"
                    class="close-side-widget"
                    aria-label="<?php esc_attr_e( 'Cerrar panel lateral', 'gepetrolseguros' ); ?>"
                    data-sidebar-close
                >
                    ×
                </button>
            </div>

            <!-- Contenido -->
            <div class="sidebar-textwidget">
                <div class="sidebar-info-contents">
                    <div class="content-inner">

                        <!-- Logo accesible -->
                        <div class="logo">
                            <a
                                href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
                                rel="home"
                            >
                                <img
                                    src="<?php echo esc_url( $logo_url ); ?>"
                                    width="107"
                                    height="89"
                                    loading="lazy"
                                    alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
                                >
                            </a>
                        </div>

                        <!-- Texto informativo -->
                        <?php if ( $about_footer ) : ?>
                            <div class="content-box">
                                <p><?php echo wp_kses_post( $about_footer ); ?></p>
                            </div>
                        <?php endif; ?>

                        <!-- Contact Form -->
                        <div class="form-inner">
                            <h4 id="sidebarInfoTitle">
                                <?php esc_html_e( 'Solicite un presupuesto gratuito', 'gepetrolseguros' ); ?>
                            </h4>

                            <?php
                            echo do_shortcode(
                                '[contact-form-7 id="332" title="Formulario de contacto Page Rápido"]'
                            );
                            ?>
                        </div>

                    </div><!-- /.content-inner -->
                </div><!-- /.sidebar-info-contents -->
            </div><!-- /.sidebar-textwidget -->

        </div><!-- /.sidebar-widget-container -->
    </div><!-- /.xs-sidebar-widget -->
</div><!-- /.xs-sidebar-group -->