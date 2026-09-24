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
        
        <!-- 1. Logotipo Corporativo Oficial -->
        <div class="header-logo-col">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo" rel="home">
                <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/logopequeño.webp' ) ); ?>" alt="Velas y Velones Santa María" class="brand-logo-img" width="46" height="46">
                <span class="logo-text-group">
                    <span class="logo-title">Santa María</span>
                    <span class="logo-subtitle">Velas y Velones</span>
                </span>
            </a>
        </div>

        <!-- 2. Botón de Menú Móvil / Desplegable -->
        <div class="header-menu-btn-col">
            <button type="button" class="btn-menu-toggle" id="menuToggleBtn" aria-label="Abrir Menú de Navegación" aria-expanded="false">
                <span class="hamburger-icon" aria-hidden="true">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <span class="menu-btn-label">Menú</span>
            </button>
        </div>

        <!-- 3. Barra de Búsqueda de Productos -->
        <div class="header-search-col">
            <form role="search" method="get" class="search-form-vsm" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="search" class="search-input-vsm" placeholder="¿Qué producto estás buscando?" value="<?php echo get_search_query(); ?>" name="s" aria-label="Buscar productos" />
                <button type="submit" class="search-submit-vsm" aria-label="Buscar">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </button>
            </form>
        </div>

        <!-- 4. Acciones Rápidas (Ofertas, Nosotros, Perfil, Carrito) -->
        <div class="header-actions-col">
            <!-- Botón Destacado de Ofertas (con icono SVG limpio de etiqueta) -->
            <a href="#ofertas" class="btn-ofertas-badge">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="badge-icon">
                    <polyline points="20 12 20 22 4 22 4 12"></polyline>
                    <rect x="2" y="7" width="20" height="5"></rect>
                    <line x1="12" y1="22" x2="12" y2="7"></line>
                    <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                    <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
                </svg>
                <span>OFERTAS</span>
            </a>

            <!-- Enlaces de Navegación -->
            <a href="<?php echo esc_url( home_url( '/catalogo/' ) ); ?>" class="header-nav-link">Catálogo</a>
            <a href="<?php echo esc_url( home_url( '/nosotros/' ) ); ?>" class="header-nav-link">Nosotros</a>

            <!-- Icono Mi Cuenta / Perfil -->
            <a href="#mi-cuenta" class="header-icon-btn" aria-label="Mi Cuenta">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
            </a>

            <!-- Icono Carrito con Contador Dinámico -->
            <a href="#carrito" class="header-icon-btn cart-btn" aria-label="Carrito de Compras">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="9" cy="21" r="1"></circle>
                    <circle cx="20" cy="21" r="1"></circle>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                </svg>
                <span class="cart-counter-badge" id="cartCountBadge">1</span>
            </a>
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
        <a href="https://wa.me/573000000000" target="_blank" rel="noopener" class="btn-primary w-full">
            <span>Cotizar por WhatsApp</span>
        </a>
    </div>
</aside>
