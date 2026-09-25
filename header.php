<?php
/**
 * Header de la plantilla - Veladoras Santa María
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo esc_url( get_theme_file_uri( 'assets/img/favicon.ico' ) ); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo esc_url( get_theme_file_uri( 'assets/img/favicon.ico' ) ); ?>" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Barra de Anuncio Superior (Opcional, sutil y elegante) -->
<div class="top-announcement-bar">
    <div class="container-vsm">
        <span>Envíos a nivel nacional &bull; Precios especiales para distribuidores y parroquias</span>
    </div>
</div>

<!-- Cabecera Principal -->
<header class="site-header-vsm" id="siteHeader">
    <div class="container-vsm header-inner">
        
        <!-- Grupo Izquierdo: Botón Menú + Logotipo + Navegación -->
        <div class="header-left-col">
            <!-- Botón de Menú (A la izquierda) -->
            <button type="button" class="btn-menu-toggle" id="menuToggleBtn" aria-label="Abrir Menú de Navegación" aria-expanded="false">
                <span class="hamburger-icon" aria-hidden="true">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <span class="menu-btn-label">Menú</span>
            </button>

            <!-- Logotipo Corporativo Oficial -->
            <div class="header-logo-col">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo" rel="home">
                    <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/logopequeño.webp' ) ); ?>" alt="Velas y Velones Santa María" class="brand-logo-img" width="46" height="46">
                    <span class="logo-text-group">
                        <span class="logo-title">Santa María</span>
                        <span class="logo-subtitle">Velas y Velones</span>
                    </span>
                </a>
            </div>

            <!-- Enlaces de Navegación a la Izquierda -->
            <nav class="header-main-nav" aria-label="Navegación principal">
                <a href="<?php echo esc_url( home_url( '/catalogo/' ) ); ?>" class="header-nav-link">Catálogo</a>
                <a href="<?php echo esc_url( home_url( '/nosotros/' ) ); ?>" class="header-nav-link">Nosotros</a>
            </nav>
        </div>

        <!-- Grupo Derecho: Lupa de Búsqueda -->
        <div class="header-actions-col">
            <!-- Botón Lupa Buscador -->
            <button type="button" class="header-icon-btn header-search-trigger" id="headerSearchToggleBtn" aria-label="Abrir buscador de productos" title="Buscar productos">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </button>
        </div>

    </div>

    <!-- Desplegable de Búsqueda Rápida del Header -->
    <div class="header-search-dropdown" id="headerSearchDropdown" style="display: none;">
        <div class="container-vsm">
            <form class="header-dropdown-search-form" id="headerDropdownForm" action="<?php echo esc_url( home_url( '/catalogo/' ) ); ?>" method="get">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" class="dropdown-search-icon">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <input type="search" name="s" id="headerDropdownInput" class="header-dropdown-input" placeholder="¿Qué velón, cirio o vela estás buscando?" autocomplete="off" />
                <button type="submit" class="btn-primary header-dropdown-btn">Buscar</button>
                <button type="button" class="header-dropdown-close" id="headerDropdownClose" aria-label="Cerrar buscador">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</header>

<!-- Menú Lateral Móvil / Drawer de Navegación -->
<div class="mobile-drawer-overlay" id="drawerOverlay"></div>
<aside class="mobile-nav-drawer" id="mobileDrawer" aria-hidden="true">
    <div class="drawer-header">
        <div class="drawer-brand">
            <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/logopequeño.webp' ) ); ?>" alt="Velas y Velones Santa María" class="drawer-logo-img" width="38" height="38">
            <div class="drawer-brand-text">
                <span class="logo-title">Santa María</span>
                <span class="logo-subtitle">Velas y Velones</span>
            </div>
        </div>
        <button type="button" class="btn-drawer-close" id="drawerCloseBtn" aria-label="Cerrar Menú">&times;</button>
    </div>

    <!-- Buscador dentro del menú móvil -->
    <div class="drawer-search">
        <form role="search" method="get" class="search-form-vsm" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="search" class="search-input-vsm" placeholder="¿Qué producto buscas?" name="s" />
            <button type="submit" class="search-submit-vsm">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </button>
        </form>
    </div>

    <nav class="drawer-menu-nav">
        <ul class="drawer-nav-list">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="active">Inicio</a></li>
            <li><a href="<?php echo esc_url( home_url( '/catalogo/' ) ); ?>">Catálogo de Productos</a></li>
            <li><a href="<?php echo esc_url( home_url( '/#lineas-productos' ) ); ?>">Líneas de Productos</a></li>
            <li><a href="<?php echo esc_url( home_url( '/catalogo/?cat=velones' ) ); ?>" class="highlight-link">Promociones y Ofertas</a></li>
            <li><a href="<?php echo esc_url( home_url( '/nosotros/' ) ); ?>">Conoce Nuestra Historia</a></li>
            <li><a href="<?php echo esc_url( home_url( '/#contacto' ) ); ?>">Contacto & Pedidos</a></li>
        </ul>
    </nav>

    <div class="drawer-footer">
        <a href="https://wa.me/573144753682" target="_blank" rel="noopener" class="btn-primary w-full">
            <span>Cotizar por WhatsApp</span>
        </a>
    </div>
</aside>
