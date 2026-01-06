<?php
/**
 * Template Name: Contacto Info Email
 *
 * Página de contacto con información de oficinas (Malabo y Bata)
 * y formulario de contacto general.
 *
 * @package GepetrolSeguros
 */

get_header();

global $gepetrol_theme_option;

// Aseguramos que siempre sea un array para evitar notices
if ( ! is_array( $gepetrol_theme_option ) ) {
    $gepetrol_theme_option = array();
}

// Helpers con valores seguros (evita undefined index)
$addr_malabo   = ! empty( $gepetrol_theme_option['contact_adress_malabo'] )
    ? $gepetrol_theme_option['contact_adress_malabo']
    : '';

$phone_malabo  = ! empty( $gepetrol_theme_option['contact_phone_malabo'] )
    ? $gepetrol_theme_option['contact_phone_malabo']
    : '';

$email_malabo  = ! empty( $gepetrol_theme_option['contact_email_malabo'] )
    ? $gepetrol_theme_option['contact_email_malabo']
    : '';

$addr_bata     = ! empty( $gepetrol_theme_option['contact_adress_bata'] )
    ? $gepetrol_theme_option['contact_adress_bata']
    : '';

$phone_bata    = ! empty( $gepetrol_theme_option['contact_phone_bata'] )
    ? $gepetrol_theme_option['contact_phone_bata']
    : '';

$phone_bata_2  = ! empty( $gepetrol_theme_option['contact_phone_two_bata'] )
    ? $gepetrol_theme_option['contact_phone_two_bata']
    : '';

$email_bata    = ! empty( $gepetrol_theme_option['contact_email_bata'] )
    ? $gepetrol_theme_option['contact_email_bata']
    : '';
?>

<?php
// Breadcrumb del tema (coherente con el resto de plantillas)
get_template_part( 'inc/breadcrumb' );
?>

<main id="primary" class="site-main">

    <!-- contact-style-three -->
    <section
        class="contact-style-three"
        aria-labelledby="contact-info-title"
    >
        <div class="pattern-layer" aria-hidden="true">
            <div class="pattern-1"
                 style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/shape/pattern-20.png);">
            </div>
            <div class="pattern-2"
                 style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/shape/pattern-7.png);">
            </div>
        </div>

        <div class="auto-container">
            <header class="section-header centred">
                <h1 id="contact-info-title" class="section-title">
                    <?php echo esc_html( get_the_title() ); ?>
                </h1>
            </header>

            <div class="row clearfix" aria-label="<?php esc_attr_e( 'Información de contacto de nuestras oficinas', 'gepetrolseguros' ); ?>">
                <!-- Columna Malabo -->
                <div class="col-lg-6 col-md-12 col-sm-12 info-column">
                    <section class="info-box" aria-labelledby="contact-office-malabo">
                        <h2 id="contact-office-malabo" class="screen-reader-text">
                            <?php esc_html_e( 'Oficina de Malabo', 'gepetrolseguros' ); ?>
                        </h2>
                        <ul class="info-list clearfix">
                            <?php if ( $addr_malabo ) : ?>
                                <li>
                                    <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                                    <h3><?php esc_html_e( 'Malabo', 'gepetrolseguros' ); ?></h3>
                                    <p><?php echo esc_html( $addr_malabo ); ?></p>
                                </li>
                            <?php endif; ?>

                            <?php if ( $phone_malabo ) : ?>
                                <li>
                                    <i class="fas fa-phone" aria-hidden="true"></i>
                                    <h4><?php esc_html_e( 'Teléfono', 'gepetrolseguros' ); ?></h4>
                                    <p>
                                        <a href="tel:+240<?php echo esc_attr( preg_replace( '/\s+/', '', $phone_malabo ) ); ?>">
                                            (+240) <?php echo esc_html( $phone_malabo ); ?>
                                        </a>
                                    </p>
                                </li>
                            <?php endif; ?>

                            <?php if ( $email_malabo ) : ?>
                                <li>
                                    <i class="fas fa-envelope-open" aria-hidden="true"></i>
                                    <h4><?php esc_html_e( 'Email', 'gepetrolseguros' ); ?></h4>
                                    <p>
                                        <a href="mailto:<?php echo esc_attr( antispambot( $email_malabo ) ); ?>">
                                            <?php echo esc_html( antispambot( $email_malabo ) ); ?>
                                        </a>
                                    </p>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </section>
                </div>

                <!-- Columna Bata -->
                <div class="col-lg-6 col-md-12 col-sm-12 info-column">
                    <section class="info-box" aria-labelledby="contact-office-bata">
                        <h2 id="contact-office-bata" class="screen-reader-text">
                            <?php esc_html_e( 'Oficina de Bata', 'gepetrolseguros' ); ?>
                        </h2>
                        <ul class="info-list clearfix">
                            <?php if ( $addr_bata ) : ?>
                                <li>
                                    <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                                    <h3><?php esc_html_e( 'Bata', 'gepetrolseguros' ); ?></h3>
                                    <p><?php echo esc_html( $addr_bata ); ?></p>
                                </li>
                            <?php endif; ?>

                            <?php if ( $phone_bata || $phone_bata_2 ) : ?>
                                <li>
                                    <i class="fas fa-phone" aria-hidden="true"></i>
                                    <h4><?php esc_html_e( 'Teléfono', 'gepetrolseguros' ); ?></h4>
                                    <p>
                                        <?php if ( $phone_bata ) : ?>
                                            <a href="tel:+240<?php echo esc_attr( preg_replace( '/\s+/', '', $phone_bata ) ); ?>">
                                                (+240) <?php echo esc_html( $phone_bata ); ?>
                                            </a>
                                        <?php endif; ?>

                                        <?php if ( $phone_bata && $phone_bata_2 ) : ?>
                                            <span> &nbsp;–&nbsp; </span>
                                        <?php endif; ?>

                                        <?php if ( $phone_bata_2 ) : ?>
                                            <a href="tel:+240<?php echo esc_attr( preg_replace( '/\s+/', '', $phone_bata_2 ) ); ?>">
                                                (+240) <?php echo esc_html( $phone_bata_2 ); ?>
                                            </a>
                                        <?php endif; ?>
                                    </p>
                                </li>
                            <?php endif; ?>

                            <?php if ( $email_bata ) : ?>
                                <li>
                                    <i class="fas fa-envelope-open" aria-hidden="true"></i>
                                    <h4><?php esc_html_e( 'Email', 'gepetrolseguros' ); ?></h4>
                                    <p>
                                        <a href="mailto:<?php echo esc_attr( antispambot( $email_bata ) ); ?>">
                                            <?php echo esc_html( antispambot( $email_bata ) ); ?>
                                        </a>
                                    </p>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </section>
                </div>
            </div><!-- /.row -->

            <!-- Formulario de contacto -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 form-column">
                    <section
                        class="form-inner mt-100"
                        aria-labelledby="contact-form-title"
                    >
                        <h2 id="contact-form-title">
                            <?php esc_html_e( 'Si aún tiene dudas, rellene el formulario.', 'gepetrolseguros' ); ?>
                        </h2>

                        <div class="contact-form" role="form">
                            <?php
                            echo do_shortcode(
                                '[contact-form-7 id="261" title="Formulario de contacto Page"]'
                            );
                            ?>
                        </div>
                    </section>
                </div>
            </div>

        </div><!-- /.auto-container -->
    </section>
    <!-- contact-style-three end -->

</main><!-- /#primary -->

<?php get_footer(); ?>