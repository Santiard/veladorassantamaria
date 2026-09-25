<?php
/**
 * Template Name: Detalle de Producto
 * Description: Plantilla de alta velocidad para visualización de ficha técnica y pedido directo por WhatsApp de un producto individual.
 */

get_header();

$prod_id = isset( $_GET['id'] ) ? intval( $_GET['id'] ) : 1;
$producto = vsm_get_product_by_id( $prod_id );

if ( ! $producto ) {
    $producto = vsm_get_product_by_id( 1 );
}

$todos_los_productos = vsm_get_catalog_products();
$relacionados = array();
foreach ( $todos_los_productos as $p ) {
    if ( intval( $p['id'] ) !== intval( $producto['id'] ) && count( $relacionados ) < 4 ) {
        $relacionados[] = $p;
    }
}

$wa_msg_order = rawurlencode( 'Hola Veladoras Santa María, deseo pedir el producto: ' . $producto['nombre'] . ' (' . $producto['precio_formato'] . '). ¿Tienen disponibilidad y envíos?' );
?>

<main id="primary" class="site-main product-detail-page">
    <div class="container-vsm">

        <!-- Migas de Pan (Breadcrumbs) -->
        <nav class="breadcrumb-nav" aria-label="Ruta de navegación">
            <ol class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a></li>
                <li class="breadcrumb-separator">/</li>
                <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/catalogo/' ) ); ?>">Catálogo</a></li>
                <li class="breadcrumb-separator">/</li>
                <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/catalogo/?cat=' . $producto['categoria_slug'] ) ); ?>"><?php echo esc_html( $producto['categoria_nombre'] ); ?></a></li>
                <li class="breadcrumb-separator">/</li>
                <li class="breadcrumb-item breadcrumb-current" aria-current="page"><?php echo esc_html( $producto['nombre'] ); ?></li>
            </ol>
        </nav>

        <!-- Escaparate Principal de 2 Columnas -->
        <div class="product-detail-layout">
            
            <!-- Columna Izquierda: Galería e Imagen del Producto -->
            <div class="product-detail-visual">
                <div class="product-detail-img-container">
                    <?php if ( ! empty( $producto['etiqueta'] ) ) : ?>
                        <span class="product-detail-badge"><?php echo esc_html( $producto['etiqueta'] ); ?></span>
                    <?php endif; ?>
                    <img src="<?php echo esc_url( get_theme_file_uri( $producto['imagen'] ) ); ?>" 
                         alt="<?php echo esc_attr( $producto['nombre'] ); ?>" 
                         class="product-detail-main-img" 
                         width="480" 
                         height="480">
                </div>
            </div>

            <!-- Columna Derecha: Información Técnica y Botones de Pedido -->
            <div class="product-detail-info">
                
                <div class="product-detail-meta-top">
                    <span class="product-detail-cat-tag"><?php echo esc_html( $producto['categoria_nombre'] ); ?></span>
                    <span class="product-detail-sku-tag">Ref: <?php echo esc_html( $producto['sku'] ); ?></span>
                </div>

                <h1 class="product-detail-heading"><?php echo esc_html( $producto['nombre'] ); ?></h1>

                <!-- Bloque de Precio -->
                <div class="product-detail-price-box">
                    <span class="product-detail-price-val"><?php echo esc_html( $producto['precio_formato'] ); ?></span>
                    <span class="product-detail-price-curr">COP</span>
                    <span class="product-unit-price-label">Precio por unidad</span>
                </div>

                <!-- Descripción del Producto -->
                <p class="product-detail-desc">
                    Producto elaborado con materiales de alta calidad y tradición cerera Santa María. Ideal para el hogar, templos y momentos de oración o ambientación.
                </p>

                <!-- Botón Principal de Pedido -->
                <div class="product-detail-actions">
                    <a href="https://wa.me/573144753682?text=<?php echo $wa_msg_order; ?>" 
                       class="btn-detail-whatsapp" 
                       target="_blank" 
                       rel="noopener">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2zm0 18.15c-1.48 0-2.93-.4-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.31a8.19 8.19 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24 2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.01 4.54-3.68 8.23-8.22 8.23zm4.52-6.17c-.25-.12-1.47-.72-1.7-.81-.23-.08-.39-.12-.56.12-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.12-1.05-.39-2-1.23-.74-.66-1.23-1.47-1.38-1.72-.14-.25-.02-.38.11-.5.11-.11.25-.29.37-.43.12-.14.17-.25.25-.41.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.44.06-.66.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.44 1.03 2.61.12.17 1.77 2.71 4.3 3.79.6.26 1.07.41 1.44.53.61.19 1.16.17 1.6.1.49-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.14-1.18-.06-.11-.22-.18-.47-.3z"/>
                        </svg>
                        <span>Pedir por WhatsApp</span>
                    </a>
                </div>

                <!-- Tira de Confianza de Fábrica -->
                <div class="product-trust-strip">
                    <div class="trust-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                        <span>Venta directa de fábrica</span>
                    </div>
                    <div class="trust-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="1" y="3" width="15" height="13"></rect>
                            <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                            <circle cx="5.5" cy="18.5" r="2.5"></circle>
                            <circle cx="18.5" cy="18.5" r="2.5"></circle>
                        </svg>
                        <span>Envíos a todo el país</span>
                    </div>
                    <div class="trust-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <span>Asesoría personalizada</span>
                    </div>
                </div>

            </div>

        </div>

        <!-- Sección de Productos Relacionados -->
        <?php if ( ! empty( $relacionados ) ) : ?>
            <section class="related-products-section" aria-label="Productos recomendados">
                <div class="related-products-header">
                    <h2 class="related-products-title">También te puede interesar</h2>
                    <p class="related-products-subtitle">Descubre otros velones y complementos litúrgicos de nuestra fabricación tradicional.</p>
                </div>

                <div class="catalog-products-grid">
                    <?php foreach ( $relacionados as $rel ) : 
                        $rel_detalle_url = home_url( '/producto/?id=' . $rel['id'] );
                    ?>
                        <article class="product-card-minimal" data-category="<?php echo esc_attr( $rel['categoria_slug'] ); ?>">
                            <div class="product-img-box">
                                <?php if ( ! empty( $rel['etiqueta'] ) ) : ?>
                                    <span class="product-badge-pill"><?php echo esc_html( $rel['etiqueta'] ); ?></span>
                                <?php endif; ?>
                                <a href="<?php echo esc_url( $rel_detalle_url ); ?>" class="product-img-link" aria-label="<?php echo esc_attr( 'Ver detalles de ' . $rel['nombre'] ); ?>">
                                    <img src="<?php echo esc_url( get_theme_file_uri( $rel['imagen'] ) ); ?>" 
                                         alt="<?php echo esc_attr( $rel['nombre'] ); ?>" 
                                         class="product-thumb-img" 
                                         width="300" 
                                         height="300" 
                                         loading="lazy">
                                </a>
                                <div class="product-img-overlay">
                                    <a href="<?php echo esc_url( $rel_detalle_url ); ?>" class="btn-ver-detalles" aria-label="<?php echo esc_attr( 'Ver detalles de ' . $rel['nombre'] ); ?>">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                        <span>Ver detalles</span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-card-body">
                                <span class="product-card-cat"><?php echo esc_html( $rel['categoria_nombre'] ); ?></span>
                                <h3 class="product-card-title">
                                    <a href="<?php echo esc_url( $rel_detalle_url ); ?>"><?php echo esc_html( $rel['nombre'] ); ?></a>
                                </h3>
                                <div class="product-card-price-row">
                                    <span class="product-card-price"><?php echo esc_html( $rel['precio_formato'] ); ?></span>
                                    <a href="https://wa.me/573144753682?text=<?php echo rawurlencode( 'Hola, deseo pedir: ' . $rel['nombre'] ); ?>" target="_blank" rel="noopener" class="btn-product-order">
                                        <span>Pedir</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>

    </div>
</main>

<?php
get_footer();
