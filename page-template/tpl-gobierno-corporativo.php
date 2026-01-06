<?php
/*
 * Template Name: Gobierno Corporativo
 */

get_header();

// Breadcrumb del tema
get_template_part( 'inc/breadcrumb' );
?>

<main id="primary" class="site-main">

    <!-- Sección Gobierno Corporativo -->
    <section
        class="blog-standard sidebar-page-container"
        aria-labelledby="gobierno-corporativo-title"
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

                                        <h1 id="gobierno-corporativo-title" class="page-title-gobierno-corporativo">
                                            <?php echo esc_html( get_the_title() ); ?>
                                        </h1>

                                        <div class="page-content">
                                            <?php
                                            the_content();

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
    <!-- /Sección Gobierno Corporativo -->

</main>

<?php get_footer(); ?>