<?php
global $gepetrol_theme_option;

// Seguridad: aseguramos que el array exista.
if ( ! is_array( $gepetrol_theme_option ) ) {
    $gepetrol_theme_option = array();
}

// Helper seguro para opciones.
$phone_malabo       = ! empty( $gepetrol_theme_option['contact_phone_malabo'] ) ? $gepetrol_theme_option['contact_phone_malabo'] : '';
$phone_bata         = ! empty( $gepetrol_theme_option['contact_phone_bata'] ) ? $gepetrol_theme_option['contact_phone_bata'] : '';
$phone_bata_2       = ! empty( $gepetrol_theme_option['contact_phone_two_bata'] ) ? $gepetrol_theme_option['contact_phone_two_bata'] : '';
$email_malabo       = ! empty( $gepetrol_theme_option['contact_email_malabo'] ) ? $gepetrol_theme_option['contact_email_malabo'] : '';
$address_malabo     = ! empty( $gepetrol_theme_option['contact_adress_malabo'] ) ? $gepetrol_theme_option['contact_adress_malabo'] : '';

$facebook_url       = ! empty( $gepetrol_theme_option['social-icon-facebook'] )  ? $gepetrol_theme_option['social-icon-facebook']  : '';
$instagram_url      = ! empty( $gepetrol_theme_option['social-icon-instagram'] ) ? $gepetrol_theme_option['social-icon-instagram'] : '';
$twitter_url        = ! empty( $gepetrol_theme_option['social-icon-twitter'] )   ? $gepetrol_theme_option['social-icon-twitter']   : '';

$social_enabled     = ! empty( $gepetrol_theme_option['social-icon-target'] );

// Helpers para convertir teléfonos en enlaces tel:
function gepetrol_format_tel_href( $number ) {
    $normalized = preg_replace( '/[^0-9+]/', '', (string) $number );
    return $normalized ? 'tel:' . $normalized : '';
}
?>

<div class="top-inner clearfix" aria-label="<?php esc_attr_e( 'Información de contacto principal', 'gepetrolseguros' ); ?>">

    <ul class="info pull-left clearfix">

        <?php if ( $phone_malabo || $phone_bata || $phone_bata_2 ) : ?>
            <li class="top-bar-phone">
                <i class="fas fa-phone" aria-hidden="true"></i>

                <?php if ( $phone_malabo ) : ?>
                    <a href="<?php echo esc_attr( gepetrol_format_tel_href( $phone_malabo ) ); ?>">
                        (+240) <?php echo esc_html( $phone_malabo ); ?>
                    </a>
                <?php endif; ?>

                <?php if ( $phone_bata ) : ?>
                    <span class="top-bar-phone-separator"> -:- </span>
                    <a href="<?php echo esc_attr( gepetrol_format_tel_href( $phone_bata ) ); ?>">
                        (+240) <?php echo esc_html( $phone_bata ); ?>
                    </a>
                <?php endif; ?>

                <?php if ( $phone_bata_2 ) : ?>
                    <span class="top-bar-phone-separator"> -:- </span>
                    <a href="<?php echo esc_attr( gepetrol_format_tel_href( $phone_bata_2 ) ); ?>">
                        (+240) <?php echo esc_html( $phone_bata_2 ); ?>
                    </a>
                <?php endif; ?>
            </li>
        <?php endif; ?>

        <?php if ( $email_malabo ) : ?>
            <li class="top-bar-email">
                <i class="fas fa-envelope" aria-hidden="true"></i>
                <a href="mailto:<?php echo esc_attr( $email_malabo ); ?>">
                    <?php echo esc_html( $email_malabo ); ?>
                </a>
            </li>
        <?php endif; ?>

        <?php if ( $address_malabo ) : ?>
            <li class="top-bar-address">
                <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                <address class="top-bar-address-text">
                    <?php echo esc_html( $address_malabo ); ?>
                </address>
            </li>
        <?php endif; ?>

    </ul>

    <?php if ( $social_enabled && ( $facebook_url || $instagram_url || $twitter_url ) ) : ?>
        <ul class="social-links pull-right clearfix" aria-label="<?php esc_attr_e( 'Redes sociales de Gepetrol Seguros', 'gepetrolseguros' ); ?>">

            <?php if ( $facebook_url ) : ?>
                <li>
                    <a href="<?php echo esc_url( $facebook_url ); ?>"
                       target="_blank"
                       rel="noopener noreferrer nofollow"
                       aria-label="<?php esc_attr_e( 'Facebook de Gepetrol Seguros', 'gepetrolseguros' ); ?>">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    </a>
                </li>
            <?php endif; ?>

            <?php if ( $instagram_url ) : ?>
                <li>
                    <a href="<?php echo esc_url( $instagram_url ); ?>"
                       target="_blank"
                       rel="noopener noreferrer nofollow"
                       aria-label="<?php esc_attr_e( 'Instagram de Gepetrol Seguros', 'gepetrolseguros' ); ?>">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>
            <?php endif; ?>

            <?php if ( $twitter_url ) : ?>
                <li>
                    <a href="<?php echo esc_url( $twitter_url ); ?>"
                       target="_blank"
                       rel="noopener noreferrer nofollow"
                       aria-label="<?php esc_attr_e( 'Perfil en X (antes Twitter) de Gepetrol Seguros', 'gepetrolseguros' ); ?>">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                    </a>
                </li>
            <?php endif; ?>

        </ul>
    <?php endif; ?>
</div>