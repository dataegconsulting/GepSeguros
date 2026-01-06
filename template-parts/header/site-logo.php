<div class="logo-box pull-left" itemscope itemtype="https://schema.org/Organization">
    <figure class="logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
           title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
           rel="home"
           itemprop="url">

            <?php
            $logo_url = get_template_directory_uri() . '/assets/img/logo-3.png';
            $site_name = get_bloginfo( 'name' );

            // Si estamos en la home → usar H1 (buena práctica SEO)
            if ( is_front_page() || is_home() ) :
            ?>
                <h1 class="site-logo-title">
                    <img
                        src="<?php echo esc_url( $logo_url ); ?>"
                        height="89"
                        width="107"
                        alt="<?php echo esc_attr( $site_name ); ?>"
                        itemprop="logo"
                    />
                </h1>
            <?php else : ?>
                <p class="site-logo-title">
                    <img
                        src="<?php echo esc_url( $logo_url ); ?>"
                        height="89"
                        width="107"
                        alt="<?php echo esc_attr( $site_name ); ?>"
                        itemprop="logo"
                    />
                </p>
            <?php endif; ?>

        </a>
    </figure>
</div>