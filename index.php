<?php
/**
 * Plantilla Principal (Home) - Veladoras Santa María
 * 
 * Maquetación inspirada en e-commerce de veladoras tradicional,
 * adaptada con colores corporativos (#fdd400 y #011689) y variables genéricas.
 */

get_header();

// Carga de variables de imagen desde inc/placeholders.php
global $vsm_img_hero_banner,
       $vsm_img_historia_origen,
       $vsm_img_video_miniatura,
       $vsm_img_banner_citronela;
?>

<main id="primary" class="site-main">

    <!-- =======================================================================
         1. HERO BANNER PRINCIPAL (Inspirado en Banner de Temporada)
         ======================================================================= -->
    <section class="hero-banner-section" aria-label="Banner Principal de Temporada">
        <div class="container-vsm">
            <div class="hero-banner-card">
                
                <!-- Columna Izquierda: Gráfico / Set de Veladoras en Caja -->
                <div class="hero-visual-col">
                    <div class="hero-image-wrapper">
                        <?php echo vsm_render_image( 
                            $vsm_img_hero_banner, 
                            650, 
                            420, 
                            'Set de Veladoras y Velones Santa María', 
                            'hero-banner-img', 
                            'Foto Grande: Set de Veladoras en Caja' 
                        ); ?>
                    </div>
                </div>

                <!-- Columna Derecha: Título de Impacto & Botón de Compra -->
                <div class="hero-content-col">
                    <span class="hero-eyebrow">Edición Especial</span>
                    <h1 class="hero-title">
                        TEMPORADA<br>
                        <span class="highlight-flame">DEVOCIONAL</span>
                    </h1>
                    <p class="hero-description">
                        Velas, <strong>velones artesanales</strong>, cirios, vasos devocionales y todo lo que necesitas para encender tu fe con la mayor duración.
                    </p>
                    <div class="hero-cta-group">
                        <a href="<?php echo esc_url( home_url( '/catalogo/' ) ); ?>" class="btn-primary hero-btn">
                            <span>Compra aquí</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- =======================================================================
         2. CINTILLO INSTITUCIONAL DE PROPUESTA DE VALOR
         ======================================================================= -->
    <section class="brand-value-strip" aria-label="Mensaje Institucional">
        <div class="container-vsm">
            <p class="value-statement">
                Somos una empresa que trabaja con devoción y calidad para iluminar los hogares, templos y tradiciones de nuestras familias
            </p>
        </div>
    </section>


    <!-- =======================================================================
         3. ENLACE INSTITUCIONAL RÁPIDO A NOSOTROS
         ======================================================================= -->
    <section class="home-nosotros-teaser-section" aria-label="Enlace a Nuestra Historia">
        <div class="container-vsm">
            <div class="home-teaser-card">
                <div class="home-teaser-text">
                    <span class="teaser-tag">Nuestra Tradición</span>
                    <h2 class="teaser-title">Más de 30 años de experiencia e iluminación artesanal</h2>
                    <p class="teaser-desc">Fabricamos velas y velones con mecha de algodón puro y parafina de máxima pureza para asegurar una combustión limpia y duradera.</p>
                </div>
                <div class="home-teaser-action">
                    <a href="<?php echo esc_url( home_url( '/nosotros/' ) ); ?>" class="btn-secondary">
                        <span>Conoce nuestra historia</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- =======================================================================
         4. NUESTRAS LÍNEAS DE PRODUCTOS (Barra Azul & Grid de 8 Categorías)
         ======================================================================= -->
    <section class="product-lines-section" id="lineas-productos" aria-label="Nuestras Líneas de Productos">
        
        <!-- Barra Azul Marina con Título Central (Identidad San Jorge adaptada) -->
        <div class="section-title-navy-bar">
            <div class="container-vsm">
                <h2 class="title-navy-text">Nuestras líneas de productos</h2>
            </div>
        </div>

        <!-- Grid de Categorías con Placeholders o Imágenes Reales -->
        <div class="container-vsm py-10">
            <div class="categories-grid-vsm">
                <?php 
                $categorias = vsm_get_product_lines();
                foreach ( $categorias as $cat ) : 
                ?>
                    <article class="category-card-vsm" id="<?php echo esc_attr( $cat['id'] ); ?>">
                        <a href="<?php echo esc_url( $cat['enlace'] ); ?>" class="category-card-link">
                            <div class="category-img-container">
                                <?php echo vsm_render_image( 
                                    $cat['imagen'], 
                                    350, 
                                    350, 
                                    $cat['nombre'], 
                                    'cat-img-element', 
                                    $cat['nombre'] 
                                ); ?>
                            </div>
                            <h3 class="category-card-name"><?php echo esc_html( $cat['nombre'] ); ?></h3>
                            <span class="category-card-sub"><?php echo esc_html( $cat['descripcion'] ); ?></span>
                            <span class="category-card-btn-action">Ver línea &rarr;</span>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- =======================================================================
         5. BANNER DESTACADO: VELÓN DE CITRONELA SANTA MARÍA
         ======================================================================= -->
    <section class="featured-promo-section" aria-label="Producto Destacado Citronela">
        <div class="container-vsm">
            <div class="citronela-promo-card">
                
                <div class="citronela-visual-col">
                    <?php echo vsm_render_image( 
                        $vsm_img_banner_citronela, 
                        300, 
                        250, 
                        'Velón de Citronela Santa María', 
                        'citronela-img', 
                        'Foto: Velón de Citronela' 
                    ); ?>
                </div>

                <div class="citronela-info-col">
                    <span class="citronela-tag">Especial Exterior</span>
                    <h2 class="citronela-title">Velón de citronela Santa María</h2>
                    <p class="citronela-subtitle">Ideal para fincas, terrazas, jardines y restaurantes</p>
                    
                    <div class="citronela-badges">
                        <span class="badge-item">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="badge-icon">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                            <span>Ayuda a repeler insectos</span>
                        </span>
                        <span class="badge-item">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="badge-icon">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            <span>100% Cera sin humo tóxico</span>
                        </span>
                    </div>
                </div>

                <div class="citronela-action-col">
                    <a href="#contacto" class="btn-primary btn-large shadow-glow">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="cart-icon">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Comprar</span>
                    </a>
                </div>

            </div>
        </div>
    </section>

</main>

<?php
get_footer();
