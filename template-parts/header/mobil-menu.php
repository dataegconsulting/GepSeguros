<?php
global $gepetrol_theme_option;

// Valores saneados con fallback
$address_malabo = ! empty( $gepetrol_theme_option['contact_adress_malabo'] )
    ? $gepetrol_theme_option['contact_adress_malabo']
    : '';

$phone_malabo = ! empty( $gepetrol_theme_option['contact_phone_malabo'] )
    ? $gepetrol_theme_option['contact_phone_malabo']
    : '';

$phone_bata = ! empty( $gepetrol_theme_option['contact_phone_bata'] )
    ? $gepetrol_theme_option['contact_phone_bata']
    : '';

$phone_bata_2 = ! empty( $gepetrol_theme_option['contact_phone_two_bata'] )
    ? $gepetrol_theme_option['contact_phone_two_bata']
    : '';

$email_malabo = ! empty( $gepetrol_theme_option['contact_email_malabo'] )
    ? $gepetrol_theme_option['contact_email_malabo']
    : 'contacto@gepetrolseguros.gq';

// Para el tel: usamos solo dígitos
$tel_primary = preg_replace( '/\D+/', '', '+240' . $phone_malabo );

$facebook  = ! empty( $gepetrol_theme_option['social-icon-facebook'] )  ? $gepetrol_theme_option['social-icon-facebook']  : '';
$instagram = ! empty( $gepetrol_theme_option['social-icon-instagram'] ) ? $gepetrol_theme_option['social-icon-instagram'] : '';
$twitter   = ! empty( $gepetrol_theme_option['social-icon-twitter'] )   ? $gepetrol_theme_option['social-icon-twitter']   : '';
?>

<div class="mobile-menu" aria-hidden="true">
    <div class="menu-backdrop" data-mobile-menu-close></div>

    <button
        type="button"
        class="close-btn"
        aria-label="<?php esc_attr_e( 'Cerrar menú móvil', 'gepetrolseguros' ); ?>"
        data-mobile-menu-close
    >
        <i class="fas fa-times" aria-hidden="true"></i>
    </button>
    
    <nav
        class="menu-box"
        aria-label="<?php esc_attr_e( 'Menú principal móvil', 'gepetrolseguros' ); ?>"
    >
        <div class="nav-logo">
            <a
                href="<?php echo esc_url( home_url( '/' ) ); ?>"
                title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
                rel="home"
            >
                <img
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo-3.png' ); ?>"
                    width="107"
                    height="89"
                    loading="lazy"
                    alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
                />
            </a>
        </div>

        <!-- Aquí el menú se inyecta vía JS (clonado del principal) -->
        <div class="menu-outer"></div>

        <div class="contact-info">
            <h2 class="contact-info__title">
                <?php esc_html_e( 'Información de contacto', 'gepetrolseguros' ); ?>
            </h2>
            <ul>
                <?php if ( $address_malabo ) : ?>
                    <li>
                        <?php echo wp_kses_post( $address_malabo ); ?>
                    </li>
                <?php endif; ?>

                <?php if ( $phone_malabo || $phone_bata || $phone_bata_2 ) : ?>
                    <li>
                        <a href="tel:+<?php echo esc_attr( $tel_primary ); ?>">
                            (+240)
                            <?php echo esc_html( $phone_malabo ); ?>
                            <?php if ( $phone_bata ) : ?>
                                &nbsp; -:- <?php echo esc_html( $phone_bata ); ?>
                            <?php endif; ?>
                            <?php if ( $phone_bata_2 ) : ?>
                                &nbsp; -:- <?php echo esc_html( $phone_bata_2 ); ?>
                            <?php endif; ?>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if ( $email_malabo ) : ?>
                    <li>
                        <a href="mailto:<?php echo esc_attr( $email_malabo ); ?>">
                            <?php echo esc_html( $email_malabo ); ?>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>

        <?php if ( $facebook || $instagram || $twitter ) : ?>
            <div class="social-links">
                <ul class="clearfix">
                    <?php if ( $facebook ) : ?>
                        <li>
                            <a
                                href="<?php echo esc_url( $facebook ); ?>"
                                aria-label="<?php esc_attr_e( 'Facebook de Gepetrol Seguros', 'gepetrolseguros' ); ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if ( $instagram ) : ?>
                        <li>
                            <a
                                href="<?php echo esc_url( $instagram ); ?>"
                                aria-label="<?php esc_attr_e( 'Instagram de Gepetrol Seguros', 'gepetrolseguros' ); ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if ( $twitter ) : ?>
                        <li>
                            <a
                                href="<?php echo esc_url( $twitter ); ?>"
                                aria-label="<?php esc_attr_e( 'Twitter de Gepetrol Seguros', 'gepetrolseguros' ); ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        <?php endif; ?>
    </nav>
</div>