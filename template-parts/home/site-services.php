<?php
global $gepetrol_theme_option;

// 1) Comprobamos que la sección está activa y que hay servicios definidos
$services_enabled = ! empty( $gepetrol_theme_option['services-home-target'] );
$services_items   = ! empty( $gepetrol_theme_option['services_home'] ) && is_array( $gepetrol_theme_option['services_home'] )
    ? $gepetrol_theme_option['services_home']
    : array();

if ( $services_enabled && $services_items ) :
?>
    <!-- service-section -->
    <section class="service-section bg-color-1"
             role="region"
             aria-labelledby="gepetrol-services-title">

        <div class="pattern-layer" aria-hidden="true">
            <div class="pattern-1"
                 style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/shape/pattern-5.png' ); ?>');"></div>
            <div class="pattern-2"></div>
            <div class="pattern-3"
                 style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/shape/pattern-7.png' ); ?>');"></div>
        </div>

        <div class="auto-container">
            <div class="sec-title centred">
                <h2 id="gepetrol-services-title">
                    <?php esc_html_e( 'Los mejores servicios de seguros', 'gepetrolseguros' ); ?>
                    <br>
                    <?php esc_html_e( 'para nuestros clientes', 'gepetrolseguros' ); ?>
                </h2>
            </div>

            <div class="row clearfix">
                <?php foreach ( $services_items as $service ) :

                    // 2) Normalizamos los datos del slide de Redux
                    $title = ! empty( $service['title'] ) ? $service['title'] : '';
                    $url   = ! empty( $service['url'] )   ? $service['url']   : '';

                    // Imagen: Redux puede devolver string o array con ['url']
                    $image_raw = ! empty( $service['image'] ) ? $service['image'] : '';
                    if ( is_array( $image_raw ) && ! empty( $image_raw['url'] ) ) {
                        $image_url = $image_raw['url'];
                    } else {
                        $image_url = $image_raw;
                    }
                    ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <article class="service-block-one wow fadeInUp"
                                 data-wow-delay="00ms"
                                 data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="pattern"
                                     aria-hidden="true"
                                     style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/shape/pattern-6.png' ); ?>');"></div>

                                <?php if ( $image_url ) : ?>
                                    <figure class="image-box">
                                        <img
                                            src="<?php echo esc_url( $image_url ); ?>"
                                            alt="<?php echo esc_attr( $title ); ?>"
                                            loading="lazy"
                                            decoding="async">
                                    </figure>
                                <?php endif; ?>

                                <div class="lower-content">
                                    <?php if ( $title ) : ?>
                                        <h3 class="service-title">
                                            <?php if ( $url ) : ?>
                                                <a href="<?php echo esc_url( $url ); ?>"
                                                   aria-label="<?php echo esc_attr( $title ); ?>">
                                                    <?php echo esc_html( $title ); ?>
                                                </a>
                                            <?php else : ?>
                                                <?php echo esc_html( $title ); ?>
                                            <?php endif; ?>
                                        </h3>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- service-section end -->
<?php endif; ?>