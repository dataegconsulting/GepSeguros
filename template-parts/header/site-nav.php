<!-- Mobile Navigation Toggler -->
<button
    class="mobile-nav-toggler"
    aria-label="<?php esc_attr_e( 'Abrir menú móvil', 'gepetrolseguros' ); ?>"
    aria-controls="gp-main-menu"
    aria-expanded="false"
>
    <span class="icon-bar" aria-hidden="true"></span>
    <span class="icon-bar" aria-hidden="true"></span>
    <span class="icon-bar" aria-hidden="true"></span>
</button>

<!-- Main Navigation -->
<nav
    class="main-menu navbar-expand-md navbar-light"
    role="navigation"
    aria-label="<?php esc_attr_e( 'Menú principal', 'gepetrolseguros' ); ?>"
>
    <div class="collapse navbar-collapse show clearfix" id="gp-main-menu">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'principal',
            'depth'          => 5,
            'menu_class'     => 'navigation clearfix',
            'container'      => false,
            'fallback_cb'    => '__return_empty_string',
        ) );
        ?>
    </div>
</nav>