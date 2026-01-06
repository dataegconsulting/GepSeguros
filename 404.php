<?php
/**
 * Plantilla 404 – Página no encontrada
 *
 * @package    GepetrolSeguros
 * @author     Filiberto Mba Obama
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- error-section -->
    <section class="error-section centred">
        <div class="auto-container">
            <div class="inner-box">

                <figure class="error-image">
                    <img
                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/resource/error-1.png' ); ?>"
                        alt="<?php esc_attr_e( 'Ilustración de página no encontrada', 'gepetrolseguros' ); ?>"
                        loading="lazy">
                </figure>

                <h1 class="error-title">
                    <?php esc_html_e( 'La página no se encuentra.', 'gepetrolseguros' ); ?>
                </h1>

                <p class="error-text">
                    <?php esc_html_e( 'Es posible que la página no exista, haya sido movida o esté temporalmente no disponible.', 'gepetrolseguros' ); ?>
                </p>

                <div class="error-actions">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                       class="theme-btn-one"
                       title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
                       rel="home">
                        <i class="fas fa-arrow-circle-left" aria-hidden="true"></i>
                        <?php esc_html_e( 'Volver a la página de inicio', 'gepetrolseguros' ); ?>
                    </a>
                </div>

                <div class="error-search">
                    <p>
                        <?php esc_html_e( 'O si lo prefieres, utiliza el buscador para encontrar lo que necesitas:', 'gepetrolseguros' ); ?>
                    </p>
                    <div class="error-search-form-wrapper">
                        <?php get_search_form(); ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- error-section end -->

</main><!-- #primary -->

<?php
get_footer();