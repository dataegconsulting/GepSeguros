<ul class="menu-right-content pull-left clearfix" aria-label="<?php esc_attr_e( 'Acciones de cabecera', 'gepetrolseguros' ); ?>">
    <!-- Buscador en cabecera -->
    <li class="search-box-outer">
        <div class="dropdown">
            <button
                class="search-box-btn"
                type="button"
                id="headerSearchToggle"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                aria-label="<?php esc_attr_e( 'Abrir buscador', 'gepetrolseguros' ); ?>"
            >
                <i class="icon-Search" aria-hidden="true"></i>
            </button>

            <div
                class="dropdown-menu search-panel"
                aria-labelledby="headerSearchToggle"
                role="search"
            >
                <div class="form-container">
                    <form
                        method="get"
                        action="<?php echo esc_url( home_url( '/' ) ); ?>"
                        class="header-search-form"
                        role="search"
                    >
                        <div class="form-group">
                            <label class="screen-reader-text" for="header-search-field">
                                <?php esc_html_e( 'Buscar en el sitio:', 'gepetrolseguros' ); ?>
                            </label>

                            <input
                                type="search"
                                id="header-search-field"
                                name="s"
                                value="<?php echo esc_attr( get_search_query() ); ?>"
                                placeholder="<?php esc_attr_e( 'Buscar…', 'gepetrolseguros' ); ?>"
                                autocomplete="off"
                                required
                            >

                            <button type="submit" class="search-btn">
                                <span class="fas fa-search" aria-hidden="true"></span>
                                <span class="screen-reader-text">
                                    <?php esc_html_e( 'Buscar', 'gepetrolseguros' ); ?>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </li>

    <!-- Botón Área de cliente -->
    <li class="btn-box">
        <a
            href="<?php echo esc_url( 'https://gepetrol-seguros.com/' ); ?>"
            class="theme-btn-one-cliente"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="<?php esc_attr_e( 'Acceder al área de cliente (se abre en una pestaña nueva)', 'gepetrolseguros' ); ?>"
        >
            <?php esc_html_e( 'Área de cliente', 'gepetrolseguros' ); ?>
            <i
                class="nav-btn nav-toggler navSidebar-button clearfix icon-Menu"
                aria-hidden="true"
            ></i>
        </a>
    </li>
</ul>