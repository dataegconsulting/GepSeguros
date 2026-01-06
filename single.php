<?php
/**
 * Plantilla para entrada individual (single post)
 *
 * @package GepetrolSeguros
 */

get_header();
?>

<?php
// Migas de pan (breadcrumb)
get_template_part( 'inc/breadcrumb' );
?>

<!-- blog-details -->
<main class="blog-details sidebar-page-container" role="main">
    <div class="auto-container">
        <div class="row clearfix">

            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <?php
                        /**
                         * Usamos <article> con post_class() para:
                         * - Mejorar SEO/semántica
                         * - Aprovechar las clases automáticas de WordPress (category, tag, etc.)
                         */
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-details-content' ); ?>>

                            <div class="news-block-one">
                                <div class="inner-box">

                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <figure class="image-box">
                                            <?php
                                            /**
                                             * Imagen destacada:
                                             * - Tamaño: 'Post-noticias' (tu tamaño registrado)
                                             * - loading="lazy" → mejor rendimiento
                                             * - decoding="async" → ayuda al navegador
                                             * - alt automático de WP (título/alt que tengas en la media)
                                             */
                                            the_post_thumbnail(
                                                'Post-noticias',
                                                array(
                                                    'loading'  => 'lazy',
                                                    'decoding' => 'async',
                                                )
                                            );
                                            ?>
                                        </figure>
                                    <?php endif; ?>

                                    <div class="lower-content">
                                        <?php
                                        /**
                                         * Título principal del post.
                                         * H1 aquí está bien porque es la página de la entrada individual.
                                         */
                                        ?>
                                        <h1 class="entry-title"><?php the_title(); ?></h1>

                                        <div class="admin-box">
                                            <?php
                                            // Fecha en formato semántico <time>, útil para SEO y accesibilidad.
                                            $post_date      = get_the_date( 'j F, Y' );
                                            $post_date_iso  = get_the_date( 'c' ); // ISO 8601 para datetime
                                            ?>
                                            <span class="posted-on">
                                                <time datetime="<?php echo esc_attr( $post_date_iso ); ?>">
                                                    <?php echo esc_html( $post_date ); ?>
                                                </time>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="text entry-content">
                                    <?php
                                    /**
                                     * Contenido del post:
                                     * - the_content() aplica todos los filtros (shortcodes, embeds, etc.)
                                     */
                                    the_content();

                                    /**
                                     * Soporte para posts paginados (<!--nextpage-->):
                                     * - Si no lo usas, no molesta.
                                     */
                                    wp_link_pages(
                                        array(
                                            'before' => '<div class="page-links">' . esc_html__( 'Páginas:', 'gepetrolseguros' ),
                                            'after'  => '</div>',
                                        )
                                    );
                                    ?>
                                </div>
                            </div>

                        </article>
                    </div><!-- /.content-side -->

                <?php endwhile; ?>
            <?php endif; ?>

            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <aside class="sidebar ml-40" role="complementary">
                    <?php get_sidebar(); ?>
                </aside>
            </div>

        </div><!-- /.row -->
    </div><!-- /.auto-container -->
</main>
<!-- blog-details end -->

<?php get_footer(); ?>