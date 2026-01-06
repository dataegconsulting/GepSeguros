<?php
/*
 * Template Name: Seguros para empresas
 */

get_header();

// Breadcrumb del tema
get_template_part( 'inc/breadcrumb' );
?>

<!-- about-style-two -->
<section
    class="about-style-two sec-pad-2 bg-color-1"
    id="seguros-empresas"
    role="region"
    aria-labelledby="seguros-empresas-title"
>
    <div class="auto-container">
        <div class="row clearfix">

            <?php
            // Título principal de la página (útil para SEO y lectores de pantalla)
            $page_title = get_the_title();
            ?>

            <h1 id="seguros-empresas-title" class="screen-reader-text">
                <?php echo esc_html( $page_title ); ?>
            </h1>

            <?php
            // Repeater ACF: seguros_empresas
            if ( have_rows( 'seguros_empresas' ) ) :

                while ( have_rows( 'seguros_empresas' ) ) :
                    the_row();

                    // Campos ACF
                    $titulo_seguro = get_sub_field( 'titulo_seguro_' );
                    $contenido      = get_sub_field( 'contenido_' );
                    $lista          = get_sub_field( 'lista' );
                    $imagen_seguro  = get_sub_field( 'imagen_seguro' );
                    $alt_imagen     = get_sub_field( 'alt' );

                    // Normalizar imagen (puede ser array o URL)
                    if ( is_array( $imagen_seguro ) && ! empty( $imagen_seguro['url'] ) ) {
                        $image_url = $imagen_seguro['url'];
                    } else {
                        $image_url = $imagen_seguro; // asume string con URL
                    }

                    // Fallback del ALT
                    $alt_final = $alt_imagen
                        ? $alt_imagen
                        : ( $titulo_seguro ?: __( 'Seguro para empresas', 'gepetrolseguros' ) );
                    ?>

                    <article class="post-service">

                        <!-- Columna de contenido -->
                        <div class="col-lg-6 col-md-6 col-sm-6 content-column news-info">
                            <div id="content_block_5">
                                <div class="content-box ml-40">

                                    <?php if ( ! empty( $titulo_seguro ) ) : ?>
                                        <div class="sec-title">
                                            <h2>
                                                <?php echo esc_html( $titulo_seguro ); ?>
                                            </h2>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ( ! empty( $contenido ) ) : ?>
                                        <div class="text">
                                            <?php
                                            // Permitimos formato básico en el contenido
                                            echo wp_kses_post( wpautop( $contenido ) );
                                            ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ( ! empty( $lista ) ) : ?>
                                        <ul class="list-item clearfix">
                                            <?php
                                            // En ACF ya puedes guardar el HTML de la lista (<li>...</li>)
                                            echo wp_kses_post( $lista );
                                            ?>
                                        </ul>
                                    <?php endif; ?>

                                </div><!-- .content-box -->
                            </div><!-- #content_block_5 -->
                        </div><!-- .content-column -->

                        <!-- Columna de imagen -->
                        <div class="col-lg-6 col-md-6 col-sm-6 image-column news-image">
                            <div id="image_block_2">
                                <div class="image-box">

                                    <?php if ( ! empty( $image_url ) ) : ?>
                                        <figure class="image">
                                            <img
                                                src="<?php echo esc_url( $image_url ); ?>"
                                                loading="lazy"
                                                decoding="async"
                                                alt="<?php echo esc_attr( $alt_final ); ?>"
                                            />
                                        </figure>
                                    <?php endif; ?>

                                </div><!-- .image-box -->
                            </div><!-- #image_block_2 -->
                        </div><!-- .image-column -->

                    </article><!-- .post-service -->

                <?php
                endwhile;

            else : ?>

                <article class="no-results">
                    <h2>
                        <?php esc_html_e( 'Lo sentimos, no hay seguros para empresas disponibles en este momento.', 'gepetrolseguros' ); ?>
                    </h2>
                    <p>
                        <?php esc_html_e( 'Por favor, vuelve a visitar esta página más adelante o contacta con Gepetrol Seguros para más información.', 'gepetrolseguros' ); ?>
                    </p>
                </article>

            <?php endif; ?>

        </div><!-- .row -->
    </div><!-- .auto-container -->
</section>
<!-- about-style-two end -->

<?php get_footer(); ?>