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

    <!-- =======================================================================
         6. UBICACION Y SEDES (Google Maps Cúcuta & Sedes de Atención)
         ======================================================================= -->
    <section class="store-location-section" id="ubicacion" aria-label="Ubicacion y Sedes">
        <div class="container-vsm">
            <div class="location-card-wrapper">
                
                <!-- Columna Izquierda: Mapa de Google Maps Sede Cúcuta -->
                <div class="location-map-col">
                    <iframe 
                        id="locationIframeMap"
                        src="https://maps.google.com/maps?q=Velas+y+Velones+Santa+Maria+Plus+SAS,+Av.+11+%2314-45,+C%C3%BAcuta&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=&amp;output=embed" 
                        class="location-iframe-map" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Ubicación Velas y Velones Santa María Plus S.A.S. en Google Maps">
                    </iframe>
                </div>

                <!-- Columna Derecha: Datos de las 2 Sedes y Horarios -->
                <div class="location-info-col">
                    <div class="location-tag-badge">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span>Nuestras Sedes & Fábrica</span>
                    </div>

                    <h2 class="location-title">Visítanos en Nuestras Sedes</h2>
                    <p class="location-desc">
                        Contamos con dos sedes de atención y distribución en Norte de Santander para compras al detal, pedidos mayoristas y despachos a todo el país.
                    </p>

                    <!-- Cuadrícula Horizontal de las 2 Sedes -->
                    <div class="location-branches-grid">
                        <!-- Sede 1: Cúcuta -->
                        <div class="location-item location-branch-card">
                            <div class="location-item-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <div class="location-item-text">
                                <span class="location-label">Sede Cúcuta (Principal & Fábrica)</span>
                                <strong class="location-val">Av. 11 #14-45, Cúcuta</strong>
                                <span class="location-phone-line">Tel / WhatsApp: <a href="https://wa.me/573144753682" target="_blank" rel="noopener" class="location-phone-link">+57 (314) 475-3682</a></span>
                            </div>
                        </div>

                        <!-- Sede 2: Los Patios -->
                        <div class="location-item location-branch-card">
                            <div class="location-item-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <div class="location-item-text">
                                <span class="location-label">Sede Los Patios</span>
                                <strong class="location-val">Calle 37 #7 - 80, Los Patios</strong>
                                <span class="location-phone-line">Tel / WhatsApp: <a href="https://wa.me/573134616819" target="_blank" rel="noopener" class="location-phone-link">+57 (313) 461-6819</a></span>
                            </div>
                        </div>
                    </div>

                    <!-- Horarios de atención exactos -->
                    <div class="location-item location-item-hours">
                        <div class="location-item-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <div class="location-item-text">
                            <span class="location-label">Horarios de atención</span>
                            <div class="location-schedule-box">
                                <div class="schedule-row">
                                    <span class="schedule-days">Lunes y Martes:</span>
                                    <span class="schedule-hours">7:00 a.m. – 11:55 a.m. &nbsp;|&nbsp; 1:00 p.m. – 5:00 p.m.</span>
                                </div>
                                <div class="schedule-row">
                                    <span class="schedule-days">Miércoles a Viernes:</span>
                                    <span class="schedule-hours">6:00 a.m. – 11:55 a.m. &nbsp;|&nbsp; 1:00 p.m. – 5:00 p.m.</span>
                                </div>
                                <div class="schedule-row">
                                    <span class="schedule-days">Sábado:</span>
                                    <span class="schedule-hours">6:00 a.m. – 12:00 m.</span>
                                </div>
                                <div class="schedule-row schedule-closed">
                                    <span class="schedule-days">Domingo:</span>
                                    <span class="schedule-hours">Cerrado</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Botones de Acción -->
                    <div class="location-actions-group">
                        <a href="https://maps.app.goo.gl/WEqPBmxZDsdk9gb5A" target="_blank" rel="noopener" class="btn-primary location-maps-btn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="3 11 22 2 13 21 11 13 3 11"></polygon>
                            </svg>
                            <span>Ver en Google Maps</span>
                        </a>

                        <a href="https://wa.me/573144753682?text=Hola,%20quisiera%20informaci%C3%B3n%20para%20visitar%20sus%20sedes" target="_blank" rel="noopener" class="btn-outline-navy">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M9.53 7.34C9.36 7.34 9.09 7.4 8.87 7.65C8.65 7.89 8.02 8.48 8.02 9.7C8.02 10.92 8.91 12.1 9.03 12.26C9.15 12.42 10.74 14.88 13.21 15.94C15.26 16.83 15.68 16.65 16.12 16.61C16.56 16.57 17.54 16.03 17.74 15.46C17.95 14.89 17.95 14.4 17.89 14.3C17.83 14.2 17.66 14.14 17.4 14.01C17.15 13.88 15.89 13.26 15.66 13.18C15.43 13.1 15.26 13.06 15.09 13.3C14.93 13.55 14.44 14.14 14.3 14.3C14.15 14.46 14 14.48 13.75 14.36C13.5 14.23 12.69 13.97 11.73 13.11C10.98 12.44 10.47 11.62 10.33 11.37C10.18 11.12 10.31 10.99 10.44 10.86C10.55 10.75 10.69 10.57 10.81 10.42C10.94 10.28 10.98 10.18 11.06 10.01C11.15 9.85 11.1 9.7 11.04 9.58C10.98 9.46 10.5 8.28 10.29 7.79C10.09 7.31 9.89 7.38 9.73 7.37C9.59 7.37 9.42 7.34 9.53 7.34Z"/>
                        </svg>
                        <span>WhatsApp Sedes</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

</main>

<?php
get_footer();
