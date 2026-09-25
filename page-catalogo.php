<?php
/**
 * Template Name: Catálogo de Productos / Tienda
 * Description: Plantilla de catálogo minimalista de alta velocidad de carga inspirada en tiendas de veladoras tradicionales.
 */

get_header();

$productos = vsm_get_catalog_products();
?>

<main id="primary" class="site-main catalog-main-page">
    <div class="container-vsm">

        <!-- Encabezado del Catálogo (Inspirado en el referente San Jorge) -->
        <header class="catalog-page-header">
            <h1 class="catalog-main-title">Velones de alta calidad – Santa María</h1>
            <p class="catalog-subtitle">Venta directa de fábrica para hogares, templos y distribuidores mayoristas con envíos a todo el país.</p>
        </header>

        <!-- Buscador Exclusivo del Catálogo -->
        <div class="catalog-search-wrapper">
            <div class="catalog-search-box">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" class="catalog-search-icon">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <input 
                    type="search" 
                    id="catalogSearchInput" 
                    class="catalog-search-input" 
                    placeholder="Buscar velón, cirio, devocional, aroma o accesorio..." 
                    autocomplete="off"
                    aria-label="Buscar en el catálogo"
                />
                <button type="button" id="catalogSearchClearBtn" class="catalog-search-clear-btn" aria-label="Borrar búsqueda" style="display: none;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Barra de Filtros por Categoría -->
        <nav class="catalog-filters-nav" aria-label="Filtrar por categoría">
            <div class="catalog-filters-scroll">
                <button type="button" class="catalog-filter-btn active" data-filter="todos">
                    <span>Todos</span>
                </button>
                <button type="button" class="catalog-filter-btn" data-filter="velones">
                    <span>Velones</span>
                </button>
                <button type="button" class="catalog-filter-btn" data-filter="devocionales">
                    <span>Veladoras de Vaso</span>
                </button>
                <button type="button" class="catalog-filter-btn" data-filter="velas">
                    <span>Velas Tradicionales</span>
                </button>
                <button type="button" class="catalog-filter-btn" data-filter="cirios">
                    <span>Cirios Pascuales</span>
                </button>
                <button type="button" class="catalog-filter-btn" data-filter="aromas">
                    <span>Aromas & Esencias</span>
                </button>
                <button type="button" class="catalog-filter-btn" data-filter="citronela">
                    <span>Citronela</span>
                </button>
                <button type="button" class="catalog-filter-btn" data-filter="accesorios">
                    <span>Accesorios</span>
                </button>
            </div>
        </nav>

        <!-- Cuadrícula Minimalista de Productos (4 Columnas) -->
        <div class="catalog-grid-wrapper">
            <div class="catalog-products-grid" id="catalogProductsGrid">
                <?php foreach ( $productos as $item ) : ?>
                    <article class="product-card-minimal" data-category="<?php echo esc_attr( $item['categoria_slug'] ); ?>" id="prod-<?php echo esc_attr( $item['id'] ); ?>">
                        
                        <div class="product-img-box">
                            <?php if ( ! empty( $item['etiqueta'] ) ) : ?>
                                <span class="product-badge-pill"><?php echo esc_html( $item['etiqueta'] ); ?></span>
                            <?php endif; ?>
                            
                            <img src="<?php echo esc_url( get_theme_file_uri( $item['imagen'] ) ); ?>" 
                                 alt="<?php echo esc_attr( $item['nombre'] ); ?>" 
                                 class="product-thumb-img" 
                                 width="300" 
                                 height="300" 
                                 loading="lazy">
                        </div>

                        <div class="product-card-body">
                            <span class="product-card-cat"><?php echo esc_html( $item['categoria_nombre'] ); ?></span>
                            
                            <h2 class="product-card-title">
                                <a href="https://wa.me/573144753682?text=<?php echo rawurlencode( 'Hola, me interesa información y pedido de: ' . $item['nombre'] ); ?>" target="_blank" rel="noopener">
                                    <?php echo esc_html( $item['nombre'] ); ?>
                                </a>
                            </h2>

                            <div class="product-card-price-row">
                                <span class="product-card-price"><?php echo esc_html( $item['precio_formato'] ); ?></span>
                                <a href="https://wa.me/573144753682?text=<?php echo rawurlencode( 'Hola, deseo cotizar y pedir: ' . $item['nombre'] . ' (' . $item['precio_formato'] . ')' ); ?>" 
                                   target="_blank" 
                                   rel="noopener" 
                                   class="btn-product-order" 
                                   aria-label="Pedir <?php echo esc_attr( $item['nombre'] ); ?>">
                                    <span>Pedir</span>
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </article>
                <?php endforeach; ?>
            </div>
            
            <!-- Mensaje cuando un filtro no tenga productos -->
            <div class="catalog-empty-notice" id="catalogEmptyNotice" style="display: none;">
                <p>No se encontraron productos en esta categoría por el momento.</p>
                <button type="button" class="btn-secondary" id="btnResetFilters">Ver todos los productos</button>
            </div>
        </div>

    </div>
</main>

<?php
get_footer();
