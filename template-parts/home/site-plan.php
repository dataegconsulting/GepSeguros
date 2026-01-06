<?php
global $gepetrol_theme_option;

// Aseguramos que el array existe por si acaso
if ( ! is_array( $gepetrol_theme_option ) ) {
    $gepetrol_theme_option = (array) get_option( 'gepetrol_theme_option', array() );
}

// Activación de bloques desde Redux
$individuals_enabled = ! empty( $gepetrol_theme_option['individuals-plans-target'] );
$companies_enabled   = ! empty( $gepetrol_theme_option['companies-plans-target'] );

// Listas de planes
$individuals_plans = ! empty( $gepetrol_theme_option['individuals_plans'] ) && is_array( $gepetrol_theme_option['individuals_plans'] )
    ? $gepetrol_theme_option['individuals_plans']
    : array();

$companies_plans = ! empty( $gepetrol_theme_option['companies_plans'] ) && is_array( $gepetrol_theme_option['companies_plans'] )
    ? $gepetrol_theme_option['companies_plans']
    : array();

// Si no hay ningún bloque activo con elementos, no rendereamos la sección
if ( ! $individuals_enabled && ! $companies_enabled ) {
    return;
}
?>

<!-- Plan-section -->
<section class="pricing-section sec-pad-3"
         role="region"
         aria-labelledby="gepetrol-pricing-title">

    <div class="auto-container">
        <div class="sec-title centred">
            <h1 id="gepetrol-pricing-title">
                <span>//</span>
                <?php esc_html_e( 'Nuestros Mejores Planes', 'gepetrolseguros' ); ?>
            </h1>
            <h2>
                <?php esc_html_e( 'No dejes para mañana lo que', 'gepetrolseguros' ); ?>
                <br>
                <?php esc_html_e( 'puedes ahorrar hoy', 'gepetrolseguros' ); ?>
            </h2>
        </div>

        <div class="pricign-inner">
            <div class="row clearfix">

                <?php if ( $individuals_enabled && $individuals_plans ) : ?>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="pricing-block-one">
                            <div class="pricing-table">
                                <div class="content-column">
                                    <div id="content_block_5">
                                        <div class="content-box ml-40 mr-50">
                                            <div class="sec-title">
                                                <h2><?php esc_html_e( 'PARTICULARES', 'gepetrolseguros' ); ?></h2>
                                            </div>

                                            <ul class="list-item clearfix">
                                                <?php foreach ( $individuals_plans as $particulares ) :

                                                    $title = ! empty( $particulares['title'] )
                                                        ? $particulares['title']
                                                        : '';

                                                    if ( ! $title ) {
                                                        continue;
                                                    }
                                                    ?>
                                                    <li><?php echo esc_html( $title ); ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-footer mt-50">
                                    <a href="<?php echo esc_url( 'https://gepetrol-seguros.com/servicios/seguros-particulares/' ); ?>"
                                       class="theme-btn-one"
                                       aria-label="<?php esc_attr_e( 'Leer más sobre seguros para particulares', 'gepetrolseguros' ); ?>">
                                        <?php esc_html_e( 'Leer más', 'gepetrolseguros' ); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ( $companies_enabled && $companies_plans ) : ?>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="pricing-block-one">
                            <div class="pricing-table">
                                <div class="content-column">
                                    <div id="content_block_5">
                                        <div class="content-box ml-40 mr-50">
                                            <div class="sec-title">
                                                <h2><?php esc_html_e( 'EMPRESAS', 'gepetrolseguros' ); ?></h2>
                                            </div>

                                            <ul class="list-item clearfix">
                                                <?php foreach ( $companies_plans as $empresas ) :

                                                    $title = ! empty( $empresas['title'] )
                                                        ? $empresas['title']
                                                        : '';

                                                    if ( ! $title ) {
                                                        continue;
                                                    }
                                                    ?>
                                                    <li><?php echo esc_html( $title ); ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-footer mt-50">
                                    <a href="<?php echo esc_url( 'https://gepetrol-seguros.com/servicios/seguros-para-empresas/' ); ?>"
                                       class="theme-btn-one"
                                       aria-label="<?php esc_attr_e( 'Leer más sobre seguros para empresas', 'gepetrolseguros' ); ?>">
                                        <?php esc_html_e( 'Leer más', 'gepetrolseguros' ); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<!-- plan-section end -->