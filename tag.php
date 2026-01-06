<?php
/**
 * Plantilla de archivos de etiqueta (tag.php)
 *
 * @package GepetrolSeguros
 */

get_header();
?>

<?php get_template_part( 'inc/breadcrumb' ); ?>

<main class="blog-grid" role="main">
    <div class="auto-container">

        <?php
        // Cabecera del archivo de etiqueta: título y descripción si existe.
        ?>
        <header class="archive-header">
            <h1 class="archive-title">
                <?php
                /* translators: %s: nombre de la etiqueta */
                printf(
                    esc_html__( 'Etiqueta: %s', 'gepetrolseguros' ),
                    single_tag_title( '', false )
                );
                ?>
            </h1>

            <?php if ( term_description() ) : ?>
                <div class="archive-description">
                    <?php echo wp_kses_post( term_description() ); ?>
                </div>
            <?php endif; ?>
        </header>

        <div class="row clearfix">
            <?php if ( have_posts() ) : ?>

                <?php
                // Ruta al patrón decorativo (antes estaba hardcodeado).
                $pattern_url = esc_url(
                    get_template_directory_uri() . '/assets/images/shape/pattern-6.png'
                );

                while ( have_posts() ) :
                    the_post();
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <article
                            id="post-<?php the_ID(); ?>"
                            <?php post_class( 'news-block-one wow fadeInUp animated' ); ?>
                            data-wow-delay="00ms"
                            data-wow-duration="1500ms"
                        >
                            <div class="inner-box">

                                <?php if ( has_post_thumbnail() ) : ?>
                                    <figure class="image-box">
                                        <?php
                                        the_post_thumbnail(
                                            'Post-featured-small',
                                            array(
                                                'loading'  => 'lazy',
                                                'decoding' => 'async',
                                            )
                                        );
                                        ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <i class="fas fa-search" aria-hidden="true"></i>
                                            <span class="screen-reader-text">
                                                <?php esc_html_e( 'Ver detalle de la entrada', 'gepetrolseguros' ); ?>
                                            </span>
                                        </a>
                                    </figure>
                                <?php endif; ?>

                                <div class="lower-content">
                                    <?php if ( $pattern_url ) : ?>
                                        <div class="pattern" style="background-image: url(<?php echo $pattern_url; ?>);"></div>
                                    <?php endif; ?>

                                    <h2 class="entry-title">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>

                                    <div class="admin-box">
                                        <span class="entry-date">
                                            <?php echo esc_html( get_the_date( 'j F, Y' ) ); ?>
                                        </span>
                                    </div>

                                    <div class="entry-summary">
                                        <?php
                                        // Usamos extracto si existe, si no recortamos el contenido.
                                        $excerpt_source = get_the_excerpt();
                                        if ( ! $excerpt_source ) {
                                            $excerpt_source = wp_strip_all_tags( get_the_content() );
                                        }

                                        echo esc_html(
                                            wp_trim_words( $excerpt_source, 35, '…' )
                                        );
                                        ?>
                                    </div>

                                    <div class="btn-box">
                                        <a href="<?php the_permalink(); ?>" class="theme-btn-two">
                                            <?php esc_html_e( 'Leer más', 'gepetrolseguros' ); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <?php
                endwhile;
                ?>

            <?php else : ?>

                <div class="col-12">
                    <div class="no-posts-found">
                        <p>
                            <?php esc_html_e( 'No hay entradas disponibles para esta etiqueta.', 'gepetrolseguros' ); ?>
                        </p>
                    </div>
                </div>

            <?php endif; ?>
        </div><!-- /.row -->

        <?php
        // Paginación (si hay muchas entradas).
        $pagination = get_the_posts_pagination(
            array(
                'mid_size'           => 2,
                'prev_text'          => esc_html__( 'Anterior', 'gepetrolseguros' ),
                'next_text'          => esc_html__( 'Siguiente', 'gepetrolseguros' ),
                'screen_reader_text' => esc_html__( 'Navegación de entradas', 'gepetrolseguros' ),
            )
        );

        if ( $pagination ) :
            ?>
            <nav class="posts-navigation">
                <?php echo $pagination; ?>
            </nav>
        <?php endif; ?>

    </div><!-- /.auto-container -->
</main><!-- /.blog-grid -->

<?php get_footer(); ?>