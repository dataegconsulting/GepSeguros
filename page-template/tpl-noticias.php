<?php
/*
 * Template Name: Noticias
 */

get_header();

// Breadcrumb del tema
get_template_part( 'inc/breadcrumb' );
?>

<section
    class="blog-grid"
    id="seccion-noticias"
    role="region"
    aria-labelledby="seccion-noticias-title"
>
    <div class="auto-container">

        <?php
        // Título principal para SEO / accesibilidad (screen-reader)
        $page_title = get_the_title();
        ?>
        <h1 id="seccion-noticias-title" class="screen-reader-text">
            <?php echo esc_html( $page_title ?: __( 'Noticias', 'gepetrolseguros' ) ); ?>
        </h1>

        <div class="row clearfix">
            <?php
            /**
             * Paginación:
             * - Usamos paged de query_var
             * - Por defecto, 9 noticias por página (ajústalo si quieres)
             */
            $paged = get_query_var( 'paged' ) ? (int) get_query_var( 'paged' ) : 1;

            $news_args = array(
                'post_type'           => 'post',
                'category_name'       => 'noticias',
                'posts_per_page'      => 9,
                'paged'               => $paged,
                'orderby'             => 'date',
                'order'               => 'DESC',
                'ignore_sticky_posts' => true,
            );

            $news_query = new WP_Query( $news_args );

            if ( $news_query->have_posts() ) :

                while ( $news_query->have_posts() ) :
                    $news_query->the_post();

                    // Datos útiles
                    $permalink   = get_permalink();
                    $title       = get_the_title();
                    $date_string = get_the_date( 'j F, Y' );

                    // Excerpt: intenta usar el excerpt, si no, recorta el contenido
                    $excerpt = get_the_excerpt();
                    if ( ! $excerpt ) {
                        $excerpt = wp_trim_words( wp_strip_all_tags( get_the_content() ), 35, '…' );
                    }
                    ?>
                    <article
                        <?php post_class( 'col-lg-4 col-md-6 col-sm-12 news-block' ); ?>
                        aria-label="<?php echo esc_attr( $title ); ?>"
                    >
                        <div class="news-block-one wow fadeInUp"
                             data-wow-delay="00ms"
                             data-wow-duration="1500ms">
                            <div class="inner-box">

                                <figure class="image-box">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php
                                        // Miniatura optimizada
                                        the_post_thumbnail(
                                            'Post-featured-small',
                                            array(
                                                'loading'  => 'lazy',
                                                'decoding' => 'async',
                                                'alt'      => esc_attr( $title ),
                                            )
                                        );
                                        ?>
                                    <?php else : ?>
                                        <!-- Opcional: imagen por defecto -->
                                        <img
                                            src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/blog/default-news.jpg' ); ?>"
                                            loading="lazy"
                                            decoding="async"
                                            alt="<?php esc_attr_e( 'Noticia Gepetrol Seguros', 'gepetrolseguros' ); ?>"
                                        />
                                    <?php endif; ?>

                                    <a href="<?php echo esc_url( $permalink ); ?>">
                                        <i class="fas fa-search" aria-hidden="true"></i>
                                        <span class="screen-reader-text">
                                            <?php esc_html_e( 'Ver detalle de la noticia', 'gepetrolseguros' ); ?>
                                        </span>
                                    </a>
                                </figure>

                                <div class="lower-content">
                                    <div class="pattern"
                                         style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/shape/pattern-6.png);">
                                    </div>

                                    <h2 class="news-title">
                                        <a href="<?php echo esc_url( $permalink ); ?>">
                                            <?php echo esc_html( $title ); ?>
                                        </a>
                                    </h2>

                                    <div class="admin-box">
                                        <span class="news-date">
                                            <?php echo esc_html( $date_string ); ?>
                                        </span>
                                    </div>

                                    <?php if ( $excerpt ) : ?>
                                        <p class="news-excerpt">
                                            <?php echo esc_html( $excerpt ); ?>
                                        </p>
                                    <?php endif; ?>

                                    <div class="btn-box">
                                        <a href="<?php echo esc_url( $permalink ); ?>"
                                           class="theme-btn-two">
                                            <?php esc_html_e( 'Leer más', 'gepetrolseguros' ); ?>
                                        </a>
                                    </div>
                                </div><!-- .lower-content -->

                            </div><!-- .inner-box -->
                        </div><!-- .news-block-one -->
                    </article>
                    <?php
                endwhile;
                ?>

        </div><!-- .row -->

        <?php
        /**
         * Paginación accesible
         */
        $big = 999999999; // número grande para replace

        $pagination_links = paginate_links(
            array(
                'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format'    => '?paged=%#%',
                'current'   => max( 1, $paged ),
                'total'     => $news_query->max_num_pages,
                'prev_text' => __( '« Anteriores', 'gepetrolseguros' ),
                'next_text' => __( 'Siguientes »', 'gepetrolseguros' ),
                'type'      => 'list',
            )
        );

        if ( $pagination_links ) : ?>
            <nav class="gepetrol-pagination" aria-label="<?php esc_attr_e( 'Paginación de noticias', 'gepetrolseguros' ); ?>">
                <?php echo wp_kses_post( $pagination_links ); ?>
            </nav>
        <?php endif; ?>

        <?php
            else :
                // No hay posts
                ?>
                <div class="row clearfix">
                    <div class="col-12">
                        <article class="no-results not-found">
                            <h2>
                                <?php esc_html_e( 'No hay noticias disponibles en este momento.', 'gepetrolseguros' ); ?>
                            </h2>
                            <p>
                                <?php esc_html_e( 'Vuelve a visitarnos pronto o consulta otras secciones de Gepetrol Seguros.', 'gepetrolseguros' ); ?>
                            </p>
                        </article>
                    </div>
                </div>
            <?php
            endif;

            // Volver a la query global
            wp_reset_postdata();
            ?>

    </div><!-- .auto-container -->
</section>
<!-- blog-grid end -->

<?php get_footer(); ?>