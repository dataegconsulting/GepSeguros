<?php
global $gepetrol_theme_option;

// Aseguramos que sea un array para evitar notices
if ( ! is_array( $gepetrol_theme_option ) ) {
    $gepetrol_theme_option = array();
}

// Switch de Redux para activar/desactivar la sección
$car_insurance_enabled = ! empty( $gepetrol_theme_option['car-insurance-target'] );

if ( $car_insurance_enabled ) :

    // Título
    $car_title = ! empty( $gepetrol_theme_option['car_insurance_title'] )
        ? $gepetrol_theme_option['car_insurance_title']
        : __( 'Asegura tu coche con Gepetrol Seguros', 'gepetrolseguros' );

    // Descripción (editor de Redux → permitimos HTML seguro)
    $car_description = ! empty( $gepetrol_theme_option['car_insurance_description'] )
        ? $gepetrol_theme_option['car_insurance_description']
        : __( 'Calcula tu seguro online en pocos pasos y conduce con total tranquilidad.', 'gepetrolseguros' );

    // Texto del botón
    $car_button_text = ! empty( $gepetrol_theme_option['car_insurance_link'] )
        ? $gepetrol_theme_option['car_insurance_link']
        : __( 'Calcular mi presupuesto', 'gepetrolseguros' );

    // URL del botón
    $car_button_url = ! empty( $gepetrol_theme_option['car_insurance_url'] )
        ? $gepetrol_theme_option['car_insurance_url']
        : home_url( '/seguro-online' );

    // Imagen: priorizamos la configurada en Redux (car_insurance_image),
    // si no existe, usamos la de /assets/img/coche2.png como fallback.
    $car_image_url = '';
    if (
        ! empty( $gepetrol_theme_option['car_insurance_image'] )
        && ! empty( $gepetrol_theme_option['car_insurance_image']['url'] )
    ) {
        $car_image_url = $gepetrol_theme_option['car_insurance_image']['url'];
    } else {
        $car_image_url = get_template_directory_uri() . '/assets/img/coche2.png';
    }
    ?>

    <!-- seguro coche section -->
    <section class="about-section"
             id="seguro-online"
             role="region"
             aria-labelledby="gepetrol-car-insurance-title">

        <div class="pattern-layer" aria-hidden="true">
            <div class="pattern-1"
                 style="background-image: url(<?php echo esc_url( get_template_directory_uri() . '/assets/images/shape/pattern-5.png' ); ?>);">
            </div>
            <div class="pattern-2"></div>
        </div>

        <div class="auto-container">
            <div class="row clearfix">

                <!-- Columna imagen -->
                <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                    <div id="image_block_1">
                        <div class="image-box">
                            <div class="pattern-box" aria-hidden="true">
                                <div class="pattern-1"
                                     style="background-image: url(<?php echo esc_url( get_template_directory_uri() . '/assets/images/shape/pattern-4.png' ); ?>);">
                                </div>
                                <div class="pattern-2"
                                     style="background-image: url(<?php echo esc_url( get_template_directory_uri() . '/assets/images/shape/pattern-4.png' ); ?>);">
                                </div>
                            </div>

                            <figure class="image image-1 paroller">
                                <img
                                    src="<?php echo esc_url( $car_image_url ); ?>"
                                    loading="lazy"
                                    decoding="async"
                                    alt="<?php echo esc_attr( $car_title ); ?>">
                            </figure>
                        </div>
                    </div>
                </div>

                <!-- Columna texto / CTA -->
                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div id="content_block_1">
                        <div class="content-box ml-50">
                            <div class="upper-box">

                                <div class="sec-title">
                                    <h2 id="gepetrol-car-insurance-title">
                                        <?php echo esc_html( $car_title ); ?>
                                    </h2>
                                </div>

                                <div class="text">
                                    <?php
                                    // Permitimos HTML básico procedente del editor de Redux
                                    echo wp_kses_post( wpautop( $car_description ) );
                                    ?>
                                </div>

                                <?php if ( ! empty( $car_button_url ) && ! empty( $car_button_text ) ) : ?>
                                    <div class="btn-box">
                                        <a href="<?php echo esc_url( $car_button_url ); ?>"
                                           class="theme-btn-one"
                                           aria-label="<?php echo esc_attr( $car_button_text ); ?>">
                                            <?php echo esc_html( $car_button_text ); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>

                            </div><!-- /.upper-box -->
                        </div><!-- /.content-box -->
                    </div><!-- /#content_block_1 -->
                </div>

            </div>
        </div>
    </section>
    <!-- seguro coche section end -->

<?php
endif; // $car_insurance_enabled
?>