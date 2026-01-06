<?php
/**
 * Plantilla para páginas (page.php)
 *
 * @package GepetrolSeguros
 */

// Si tu cabecera principal es header.php:
get_header();

// Si en tu tema usas un header alternativo (header-header.php), entonces sería:
// get_header( 'header' );
?>

<?php get_template_part( 'inc/breadcrumb' ); ?>

<!-- start blog-single-section -->
<main class="blog-single-section section-padding" role="main">
    <div class="container">
        <div class="row">

            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <div class="col col-md-10 col-md-offset-1">
                        <?php
                        /**
                         * Usamos <article> con post_class() para:
                         * - Mejor semántica (SEO)
                         * - Clases automáticas de WP (page, slug, etc.)
                         */
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-content' ); ?>>

                            <div class="post format-standard-image">

                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="entry-media">
                                        <?php
                                        // Imagen destacada de la página.
                                        the_post_thumbnail(
                                            'large',
                                            array(
                                                'loading'  => 'lazy',
                                                'decoding' => 'async',
                                            )
                                        );
                                        ?>
                                    </div>
                                <?php endif; ?>

                                <header class="entry-header">
                                    <h1 class="entry-title">
                                        <?php the_title(); ?>
                                    </h1>
                                </header>

                                <div class="entry-content">
                                    <?php
                                    the_content();

                                    // Soporte para paginación dentro de páginas (<!--nextpage-->)
                                    wp_link_pages(
                                        array(
                                            'before' => '<div class="page-links">' . esc_html__( 'Páginas:', 'gepetrolseguros' ),
                                            'after'  => '</div>',
                                        )
                                    );
                                    ?>
                                </div>

                            </div><!-- /.post -->

                        </article><!-- /article -->
                    </div><!-- /.col -->
                    <?php
                endwhile;
            endif;
            ?>

        </div><!-- /.row -->
    </div><!-- /.container -->
</main>
<!-- end blog-single-section -->

<?php get_footer(); ?>