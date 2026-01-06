<?php
/**
 * Sidebar principal
 *
 * Puede ir en sidebar.php o como parte de un template-part.
 */
?>

<aside class="sidebar" role="complementary" aria-label="<?php esc_attr_e( 'Barra lateral', 'gepetrolseguros' ); ?>">

    <!-- Buscador -->
    <section class="sidebar-widget search-widget">
        <h2 class="screen-reader-text">
            <?php esc_html_e( 'Buscar en el sitio', 'gepetrolseguros' ); ?>
        </h2>

        <form role="search"
              method="get"
              class="search-form"
              action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="form-group">
                <label class="screen-reader-text" for="sidebar-search">
                    <?php esc_html_e( 'Buscar:', 'gepetrolseguros' ); ?>
                </label>
                <input
                    id="sidebar-search"
                    type="search"
                    class="search-field"
                    name="s"
                    placeholder="<?php esc_attr_e( 'Buscar…', 'gepetrolseguros' ); ?>"
                    value="<?php echo esc_attr( get_search_query() ); ?>"
                    required
                >
                <button type="submit" class="search-submit">
                    <i class="icon-Search" aria-hidden="true"></i>
                    <span class="screen-reader-text">
                        <?php esc_html_e( 'Buscar', 'gepetrolseguros' ); ?>
                    </span>
                </button>
            </div>
        </form>
    </section>

    <!-- Menú de servicios -->
    <section class="sidebar-widget category-widget">
        <div class="widget-title">
            <h3><?php esc_html_e( 'Servicios', 'gepetrolseguros' ); ?></h3>
        </div>

        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'services',
                'depth'          => 3,
                'menu_class'     => 'category-list',
                'container'      => false,
                'fallback_cb'    => '__return_empty_string',
            )
        );
        ?>
    </section>

    <!-- Etiquetas del post actual (en single.php) -->
    <section class="sidebar-widget tags-widget">
        <div class="widget-title">
            <h3><?php esc_html_e( 'Etiquetas', 'gepetrolseguros' ); ?></h3>
        </div>

        <ul class="tags-list clearfix">
            <?php
            // En single.php: etiquetas del post actual.
            $post_tags = get_the_tags();

            if ( ! empty( $post_tags ) && ! is_wp_error( $post_tags ) ) :
                foreach ( $post_tags as $post_tag ) :
                    $tag_link = get_tag_link( $post_tag->term_id );
                    ?>
                    <li>
                        <a href="<?php echo esc_url( $tag_link ); ?>">
                            <?php echo esc_html( $post_tag->name ); ?>
                        </a>
                    </li>
                    <?php
                endforeach;
            else :
                ?>
                <li class="no-tags">
                    <?php esc_html_e( 'Este contenido no tiene etiquetas.', 'gepetrolseguros' ); ?>
                </li>
            <?php endif; ?>
        </ul>
    </section>

</aside>