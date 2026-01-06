<?php
/**
 * Sección de contacto / presupuesto
 * - Optimizada con esc_url / esc_attr
 * - Imágenes con loading="lazy"
 * - Etiquetas accesibles y lista para SEO
 */
?>
<!-- contact-section -->
<section class="contact-section bg-color-1"
         id="contacto"
         role="region"
         aria-labelledby="gepetrol-contact-title">

    <div class="pattern-layer" aria-hidden="true">
        <div class="pattern-1"
             style="background-image: url(<?php echo esc_url( get_template_directory_uri() . '/assets/images/shape/pattern-18.png' ); ?>);">
        </div>
        <div class="pattern-2"
             style="background-image: url(<?php echo esc_url( get_template_directory_uri() . '/assets/images/shape/pattern-19.png' ); ?>);">
        </div>
    </div>

    <figure class="image-layer wow slideInUp animated"
            data-wow-delay="00ms"
            data-wow-duration="1500ms">
        <img
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/resource/contact-1.png' ); ?>"
            loading="lazy"
            decoding="async"
            alt="<?php esc_attr_e( 'Equipo de Gepetrol Seguros atendiendo a clientes', 'gepetrolseguros' ); ?>">
    </figure>

    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 content-column">
                <div id="content_block_4">
                    <div class="content-box ml-50">

                        <div class="form-inner">
                            <div class="pattern"
                                 aria-hidden="true"
                                 style="background-image: url(<?php echo esc_url( get_template_directory_uri() . '/assets/images/shape/pattern-17.png' ); ?>);">
                            </div>

                            <h2 id="gepetrol-contact-title" class="contact-section__title">
                                <?php esc_html_e( 'Solicite un presupuesto gratuito', 'gepetrolseguros' ); ?>
                            </h2>

                            <?php
                            /**
                             * Formulario de contacto (Contact Form 7)
                             * - Asegúrate de que el formulario tenga campos con labels accesibles
                             *   desde el propio CF7 para mejor SEO y UX.
                             */
                            echo do_shortcode(
                                '[contact-form-7 id="332" title="Formulario de contacto Page Rápido"]'
                            );
                            ?>

                        </div><!-- /.form-inner -->
                    </div><!-- /.content-box -->
                </div><!-- /#content_block_4 -->
            </div>
        </div>
    </div>
</section>
<!-- contact-section end -->