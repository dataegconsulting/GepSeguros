<?php
/*
 * Template Name: Nuestra Historia
 */

get_header();

// Breadcrumb del tema
get_template_part( 'inc/breadcrumb' );

// Opciones Redux (global creado por Redux)
global $gepetrol_theme_option;
?>

<main id="primary" class="site-main">

    <!-- Sección principal: Nuestra Historia -->
    <section
        class="blog-standard sidebar-page-container"
        aria-labelledby="nuestra-historia-title"
    >
        <div class="auto-container">
            <div class="row clearfix">
                <?php while ( have_posts() ) : the_post(); ?>

                    <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                        <div class="blog-standard-content">

                            <article
                                id="post-<?php the_ID(); ?>"
                                <?php post_class( 'news-block-one wow fadeInUp' ); ?>
                                data-wow-delay="00ms"
                                data-wow-duration="1500ms"
                            >
                                <div class="inner-box">

                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <figure class="image-box">
                                            <?php
                                            the_post_thumbnail(
                                                'large',
                                                array(
                                                    'loading'  => 'lazy',
                                                    'decoding' => 'async',
                                                    'alt'      => esc_attr( get_the_title() ),
                                                )
                                            );
                                            ?>
                                        </figure>
                                    <?php endif; ?>

                                    <div class="lower-content">
                                        <div
                                            class="pattern"
                                            style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/shape/pattern-6.png);">
                                        </div>

                                        <h1 id="nuestra-historia-title" class="page-title-hitoria">
                                            <?php echo esc_html( get_the_title() ); ?>
                                        </h1>

                                        <div class="page-content">
                                            <?php
                                            // Contenido limpio con formato
                                            the_content();

                                            // Paginación interna del contenido (si usas <!--nextpage-->)
                                            wp_link_pages(
                                                array(
                                                    'before' => '<div class="page-links">',
                                                    'after'  => '</div>',
                                                )
                                            );
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </article>

                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!-- /Sección principal -->

    <!-- Sección Visión y Misión -->
    <?php
    $vision_items = ! empty( $gepetrol_theme_option['vision_mision'] )
        ? $gepetrol_theme_option['vision_mision']
        : array();

    $valores_items = ! empty( $gepetrol_theme_option['valores_gepetrol'] )
        ? $gepetrol_theme_option['valores_gepetrol']
        : array();
    ?>

    <?php if ( ! empty( $vision_items ) || ! empty( $valores_items ) ) : ?>
        <section
            class="contact-section bg-color-1"
            aria-labelledby="vision-mision-valores-title"
        >
            <div class="pattern-layer">
                <div
                    class="pattern-1"
                    style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/shape/pattern-18.png);">
                </div>
            </div>

            <div class="auto-container">
                <header class="sec-title centred">
                    <h2 id="vision-mision-valores-title">
                        <?php esc_html_e( 'Visión, Misión y Valores', 'gepetrolseguros' ); ?>
                    </h2>
                </header>

                <!-- Bloque Visión / Misión -->
                <?php if ( ! empty( $vision_items ) ) : ?>
                    <div class="row clearfix">
                        <?php foreach ( $vision_items as $vision_mision_gepetrol ) :

                            $title       = ! empty( $vision_mision_gepetrol['title'] )
                                ? $vision_mision_gepetrol['title']
                                : '';

                            $description = ! empty( $vision_mision_gepetrol['description'] )
                                ? $vision_mision_gepetrol['description']
                                : '';
                            ?>
                            <div class="col-lg-12 col-md-12 col-sm-12 service-block">
                                <article
                                    class="service-block-two wow fadeInLeft"
                                    data-wow-delay="00ms"
                                    data-wow-duration="1500ms"
                                >
                                    <div class="inner-box">
                                        <div
                                            class="pattern-layer"
                                            style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/shape/pattern-24.png);">
                                        </div>
                                        <div class="inner">
                                            <?php if ( $title ) : ?>
                                                <h3 class="service-title">
                                                    <span><?php echo esc_html( $title ); ?></span>
                                                </h3>
                                            <?php endif; ?>

                                            <?php if ( $description ) : ?>
                                                <div class="service-text">
                                                    <?php
                                                    // Permitimos un HTML básico (p, br, strong...)
                                                    echo wp_kses_post( wpautop( $description ) );
                                                    ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

            </div><!-- /.auto-container -->

            <!-- Bloque Valores -->
            <?php if ( ! empty( $valores_items ) ) : ?>
                <div class="auto-container valores-container">
                    <header class="sec-title">
                        <h2><?php esc_html_e( 'Nuestros Valores', 'gepetrolseguros' ); ?></h2>
                    </header>

                    <div class="row clearfix">
                        <?php foreach ( $valores_items as $valor ) :

                            $valor_title       = ! empty( $valor['title'] )
                                ? $valor['title']
                                : '';

                            $valor_description = ! empty( $valor['description'] )
                                ? $valor['description']
                                : '';
                            ?>
                            <div class="col-lg-12 col-md-12 col-sm-12 service-block">
                                <article
                                    class="service-block-two wow fadeInLeft"
                                    data-wow-delay="00ms"
                                    data-wow-duration="1500ms"
                                >
                                    <div class="inner-box">
                                        <div
                                            class="pattern-layer"
                                            style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/shape/pattern-24.png);">
                                        </div>
                                        <div class="inner">
                                            <?php if ( $valor_title ) : ?>
                                                <h3 class="service-title">
                                                    <span><?php echo esc_html( $valor_title ); ?></span>
                                                </h3>
                                            <?php endif; ?>

                                            <?php if ( $valor_description ) : ?>
                                                <div class="service-text">
                                                    <?php echo wp_kses_post( wpautop( $valor_description ) ); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

        </section>
    <?php endif; ?>
    <!-- /Visión, Misión y Valores -->

</main>

<?php get_footer(); ?>