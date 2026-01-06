<?php
/**
 * Template Name: Contacto Servicios a Rellenar
 *
 * Página de contacto específica para servicios,
 * con formulario gestionado por Contact Form 7.
 *
 * @package GepetrolSeguros
 */

get_header();

// Breadcrumb del tema
get_template_part( 'inc/breadcrumb' );
?>

<main id="primary" class="site-main">

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <!-- Sección de contacto servicios -->
            <section
                class="contact-section section-padding"
                aria-labelledby="contact-services-title"
            >
                <div class="container"><!-- Si tu tema usa auto-container, puedes cambiarlo -->

                    <div class="contact-form-area">

                        <div class="row">
                            <div class="col col-md-8">
                                <div class="contact-text">
                                    <h1 id="contact-services-title" class="page-title-formulario">
                                        <?php echo esc_html( get_the_title() ); ?>
                                    </h1>

                                    <?php
                                    // Permitir que el editor de la página añada un texto introductorio.
                                    $content = get_the_content();

                                    if ( ! empty( $content ) ) :
                                        ?>
                                        <div class="page-intro">
                                            <?php
                                            // Contenido con formato seguro.
                                            echo wp_kses_post( wpautop( $content ) );
                                            ?>
                                        </div>
                                    <?php else : ?>
                                        <p>
                                            <?php esc_html_e(
                                                'Rellene el formulario a continuación y un asesor de clientes se pondrá en contacto con usted lo antes posible.',
                                                'gepetrolseguros'
                                            ); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="row" role="form">
                            <div class="col col-md-12">
                                <div class="contact-form">

                                    <?php
                                    // Formulario de Contact Form 7
                                    echo do_shortcode(
                                        '[contact-form-7 id="bd771d8" title="Formulario de contacto Servicios"]'
                                    );
                                    ?>

                                </div>
                            </div>
                        </div>

                    </div><!-- /.contact-form-area -->

                </div><!-- /.container -->
            </section>
            <!-- /Sección de contacto servicios -->

        <?php endwhile; ?>
    <?php endif; ?>

</main><!-- /#primary -->

<?php get_footer(); ?>