<?php
/**
 * Footer template
 *
 * @package    GepetrolSeguros
 * @author     Filiberto Mba Obama
 * @copyright  Copyright (C) 2022 Dataeg
 * @license    GNU/GPL v2 or later
 */

// Opciones Redux del tema.
$gepetrol_options = get_option( 'gepetrol_theme_option' );
if ( ! is_array( $gepetrol_options ) ) {
    $gepetrol_options = array();
}

// Texto “about” del footer (editor de Redux).
$about_footer = ! empty( $gepetrol_options['about_footer'] )
    ? $gepetrol_options['about_footer']
    : '';

// Redes sociales.
$facebook_url  = ! empty( $gepetrol_options['social-icon-facebook'] )  ? $gepetrol_options['social-icon-facebook']  : '';
$instagram_url = ! empty( $gepetrol_options['social-icon-instagram'] ) ? $gepetrol_options['social-icon-instagram'] : '';
$twitter_url   = ! empty( $gepetrol_options['social-icon-twitter'] )   ? $gepetrol_options['social-icon-twitter']   : '';

// Datos de contacto Malabo.
$address_malabo = ! empty( $gepetrol_options['contact_adress_malabo'] ) ? $gepetrol_options['contact_adress_malabo'] : '';
$phone_malabo   = ! empty( $gepetrol_options['contact_phone_malabo'] )  ? $gepetrol_options['contact_phone_malabo']  : '';
$email_malabo   = ! empty( $gepetrol_options['contact_email_malabo'] )  ? $gepetrol_options['contact_email_malabo']  : '';

// Datos de contacto Bata.
$address_bata     = ! empty( $gepetrol_options['contact_adress_bata'] )     ? $gepetrol_options['contact_adress_bata']     : '';
$phone_bata       = ! empty( $gepetrol_options['contact_phone_bata'] )      ? $gepetrol_options['contact_phone_bata']      : '';
$phone_bata_two   = ! empty( $gepetrol_options['contact_phone_two_bata'] )  ? $gepetrol_options['contact_phone_two_bata']  : '';
$email_bata       = ! empty( $gepetrol_options['contact_email_bata'] )      ? $gepetrol_options['contact_email_bata']      : '';

// Imagen de fondo del footer (fija en el tema).
$footer_bg = get_template_directory_uri() . '/assets/images/background/footer-1.jpg';

// Año actual.
$current_year = date_i18n( 'Y' );

// URL de política de privacidad de WordPress (si está configurada en Ajustes > Privacidad).
$privacy_url = function_exists( 'get_privacy_policy_url' )
    ? get_privacy_policy_url()
    : '';
?>

        <!-- main-footer -->
        <footer class="main-footer" role="contentinfo">
            <div class="footer-top" style="background-image: url(<?php echo esc_url( $footer_bg ); ?>);">
                <div class="auto-container">
                    <div class="widget-section">
                        <div class="row clearfix">

                            <!-- Columna 1: Sobre Gepetrol Seguros -->
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget about-widget">
                                    <div class="widget-title">
                                        <h2><?php esc_html_e( 'GEPetrol Seguros', 'gepetrolseguros' ); ?></h2>
                                    </div>
                                    <div class="widget-content">
                                        <?php if ( $about_footer ) : ?>
                                            <div class="text">
                                                <?php
                                                // El contenido viene de un editor de WordPress, así que permitimos HTML seguro.
                                                echo wp_kses_post( wpautop( $about_footer ) );
                                                ?>
                                            </div>
                                        <?php endif; ?>

                                        <ul class="social-links clearfix" aria-label="<?php esc_attr_e( 'Redes sociales', 'gepetrolseguros' ); ?>">
                                            <?php if ( $facebook_url ) : ?>
                                                <li>
                                                    <a href="<?php echo esc_url( $facebook_url ); ?>"
                                                       target="_blank"
                                                       rel="noopener noreferrer"
                                                       aria-label="<?php esc_attr_e( 'Facebook', 'gepetrolseguros' ); ?>">
                                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>

                                            <?php if ( $instagram_url ) : ?>
                                                <li>
                                                    <a href="<?php echo esc_url( $instagram_url ); ?>"
                                                       target="_blank"
                                                       rel="noopener noreferrer"
                                                       aria-label="<?php esc_attr_e( 'Instagram', 'gepetrolseguros' ); ?>">
                                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>

                                            <?php if ( $twitter_url ) : ?>
                                                <li>
                                                    <a href="<?php echo esc_url( $twitter_url ); ?>"
                                                       target="_blank"
                                                       rel="noopener noreferrer"
                                                       aria-label="<?php esc_attr_e( 'Twitter', 'gepetrolseguros' ); ?>">
                                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Columna 2: Menú de servicios (footer) -->
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget links-widget ml-50">
                                    <div class="widget-title">
                                        <h3><?php esc_html_e( 'Servicios', 'gepetrolseguros' ); ?></h3>
                                    </div>
                                    <div class="widget-content">
                                        <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'footer',
                                                'depth'          => 3,
                                                'menu_class'     => 'links-list clearfix',
                                                'container'      => false,
                                                'fallback_cb'    => '__return_empty_string',
                                            )
                                        );
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Columna 3: Contacto Malabo -->
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget contact-widget">
                                    <div class="widget-title">
                                        <h3><?php esc_html_e( 'Malabo', 'gepetrolseguros' ); ?></h3>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="info-list clearfix">
                                            <?php if ( $address_malabo ) : ?>
                                                <li>
                                                    <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                                                    <span><?php echo esc_html( $address_malabo ); ?></span>
                                                </li>
                                            <?php endif; ?>

                                            <?php if ( $phone_malabo ) : ?>
                                                <li>
                                                    <i class="fas fa-phone" aria-hidden="true"></i>
                                                    <span>(+240) <?php echo esc_html( $phone_malabo ); ?></span>
                                                </li>
                                            <?php endif; ?>

                                            <?php if ( $email_malabo ) : ?>
                                                <li>
                                                    <i class="fas fa-envelope" aria-hidden="true"></i>
                                                    <a href="mailto:<?php echo antispambot( esc_attr( $email_malabo ) ); ?>">
                                                        <?php echo esc_html( $email_malabo ); ?>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Columna 4: Contacto Bata -->
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget contact-widget">
                                    <div class="widget-title">
                                        <h3><?php esc_html_e( 'Bata', 'gepetrolseguros' ); ?></h3>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="info-list clearfix">
                                            <?php if ( $address_bata ) : ?>
                                                <li>
                                                    <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                                                    <span><?php echo esc_html( $address_bata ); ?></span>
                                                </li>
                                            <?php endif; ?>

                                            <?php if ( $phone_bata || $phone_bata_two ) : ?>
                                                <li>
                                                    <i class="fas fa-phone" aria-hidden="true"></i>
                                                    <span>
                                                        (+240)
                                                        <?php
                                                        echo esc_html( $phone_bata );
                                                        if ( $phone_bata && $phone_bata_two ) {
                                                            echo ' - ';
                                                        }
                                                        echo esc_html( $phone_bata_two );
                                                        ?>
                                                    </span>
                                                </li>
                                            <?php endif; ?>

                                            <?php if ( $email_bata ) : ?>
                                                <li>
                                                    <i class="fas fa-envelope" aria-hidden="true"></i>
                                                    <a href="mailto:<?php echo antispambot( esc_attr( $email_bata ) ); ?>">
                                                        <?php echo esc_html( $email_bata ); ?>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div><!-- /.row -->
                    </div><!-- /.widget-section -->
                </div><!-- /.auto-container -->
            </div><!-- /.footer-top -->

            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="bottom-inner">
                        <div class="copyright">
                            <p>
                                &copy; <?php echo esc_html( $current_year ); ?>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Ir al inicio', 'gepetrolseguros' ); ?>">
                                    <?php esc_html_e( 'GEPETROL SEGUROS', 'gepetrolseguros' ); ?>
                                </a>.
                                <?php esc_html_e( 'Todos los derechos reservados.', 'gepetrolseguros' ); ?>
                            </p>
                        </div>

                        <ul class="footer-nav clearfix">
                            <?php if ( $privacy_url ) : ?>
                                <li>
                                    <a href="<?php echo esc_url( $privacy_url ); ?>">
                                        <?php esc_html_e( 'Política de privacidad', 'gepetrolseguros' ); ?>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <li>
                                <a href="https://dataeg.com"
                                   target="_blank"
                                   rel="noopener noreferrer"
                                   aria-label="<?php esc_attr_e( 'Sitio web Data EG', 'gepetrolseguros' ); ?>">
                                    <?php esc_html_e( 'Diseño por DATA EG', 'gepetrolseguros' ); ?>
                                </a>
                            </li>
                        </ul>
                    </div><!-- /.bottom-inner -->
                </div><!-- /.auto-container -->
            </div><!-- /.footer-bottom -->
        </footer>
        <!-- main-footer end -->

    </div><!-- end of page-wrapper -->

    <?php wp_footer(); ?>
</body>
</html>