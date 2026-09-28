<?php
/**
 * Template Name: Página Nosotros / Quiénes Somos
 * Description: Plantilla institucional inspirada en la diagramación clásica de empresas de veladoras tradicionales.
 */

get_header();

global $vsm_img_banner_nosotros, $vsm_img_empresa_grande;
?>

<main id="primary" class="site-main page-nosotros-main">

    <!-- 1. Banner Superior Grande de Cabecera (Inspirado en San Jorge) -->
    <section class="nosotros-top-banner" aria-label="Banner de cabecera Nosotros">
        <div class="nosotros-top-banner-bg">
            <?php echo vsm_render_image( 
                $vsm_img_banner_nosotros, 
                1600, 
                380, 
                'Instalaciones y producción Veladoras Santa María', 
                'banner-nosotros-img', 
                'Banner Superior: Instalaciones y Bodega' 
            ); ?>
        </div>
        <div class="nosotros-top-banner-overlay">
            <div class="container-vsm">
                <h1 class="nosotros-hero-title">Nosotros</h1>
            </div>
        </div>
    </section>

    <!-- 2. Sección Quiénes Somos & Compromiso (Layout 2 Columnas) -->
    <section class="nosotros-overview-section" aria-label="Quiénes Somos y Nuestro Compromiso">
        <div class="container-vsm">
            <div class="nosotros-overview-grid">
                
                <!-- Columna Izquierda: Quiénes Somos -->
                <div class="nosotros-col-about">
                    <div class="nosotros-badge-header">
                        <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/logopequeño.webp' ) ); ?>" alt="Velas y Velones Santa María" class="nosotros-badge-logo" width="46" height="46">
                        <span class="nosotros-badge-tag">Nuestra Historia</span>
                    </div>

                    <h2 class="nosotros-col-title">Quiénes Somos</h2>
                    <div class="nosotros-title-divider"></div>

                    <p class="nosotros-lead-text">
                        Velas y Velones Santa Maria, fue creado en el año 1.999 por el señor <strong>FRANKO TALAL HARB</strong> en la ciudad de Cúcuta, Norte de Santander, Colombia. Dedicándose a la fabricación y comercialización de velas y veladoras despachando y ofreciendo su producto hacia la zona centro de la ciudad y sus alrededores, convirtiéndose en alternativa para la clientela de la ciudad.
                    </p>

                    <p class="nosotros-body-text">
                        Actualmente la empresa posee una amplia capacidad de producción y estrictos controles de calidad para fabricar velas y veladoras con una amplia gama de variedad en colores y tamaños, cumpliendo las exigencias del mercado.
                    </p>
                </div>

                <!-- Columna Derecha: Comprometidos con la Calidad y la Tradición -->
                <div class="nosotros-col-commitment">
                    <div class="nosotros-commitment-panel">
                        <div class="commitment-panel-accent"></div>
                        <span class="commitment-eyebrow">Propósito & Tradición</span>
                        <h3 class="commitment-title">Comprometidos con la calidad y la tradición</h3>
                        <p class="commitment-desc">
                            Trabajamos cada día para que nuestras velas no solo iluminen espacios, sino también emociones y tradiciones. A través de procesos productivos eficientes y una selección cuidadosa de materiales, logramos crear productos que conectan con lo espiritual, lo cotidiano y lo especial.
                        </p>
                        <p class="commitment-desc">
                            Nuestra pasión por la excelencia nos impulsa a innovar, sin perder la esencia artesanal que nos distingue.
                        </p>
                        <div class="commitment-trust-badge">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <span>Fabricación artesanal con respaldo y trayectoria desde 1.999</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. Misión y Visión (Diseño Editorial Clásico y Tradicional) -->
    <section class="nosotros-mv-classic-section">
        <div class="container-vsm">
            <div class="mv-classic-grid">
                
                <!-- Columna Misión -->
                <div class="mv-classic-col">
                    <h2 class="mv-classic-title">MISIÓN</h2>
                    <div class="mv-classic-divider"></div>
                    <p class="mv-classic-p">
                        Fabricar y comercializar velas, veladoras y velones con altos estándares de calidad, innovación y competitividad, generando valor para nuestros clientes, colaboradores y aliados estratégicos mediante procesos eficientes y una gestión orientada al crecimiento sostenible.
                    </p>
                </div>

                <!-- Columna Visión -->
                <div class="mv-classic-col">
                    <h2 class="mv-classic-title">VISIÓN</h2>
                    <div class="mv-classic-divider"></div>
                    <p class="mv-classic-p">
                        Para el año 2030, ser una empresa referente en Colombia en la industria de velas, veladoras y velones, con una sólida presencia nacional y una creciente participación en mercados internacionales, reconocida por la calidad, innovación, capacidad productiva y confiabilidad de nuestra marca.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. Imagen Grande sobre la Empresa (Fachada / Instalaciones) -->
    <section class="nosotros-big-image-section">
        <div class="container-vsm">
            <div class="nosotros-big-image-wrapper">
                <?php echo vsm_render_image( 
                    $vsm_img_empresa_grande, 
                    1200, 
                    550, 
                    'Instalaciones y planta de producción de Veladoras Santa María', 
                    'img-empresa-grande', 
                    'Foto Grande: Fachada o Planta de Producción de la Empresa' 
                ); ?>
            </div>
            <p class="nosotros-image-caption">
                Planta de producción y centro de distribución nacional &bull; Veladoras Santa María
            </p>
        </div>
    </section>

    <!-- 5. Preguntas Frecuentes (FAQ) -->
    <section class="nosotros-faq-section" aria-label="Preguntas Frecuentes">
        <div class="container-vsm">
            <div class="nosotros-faq-header">
                <span class="nosotros-faq-tag">Resolviendo tus dudas</span>
                <h2 class="nosotros-faq-title">Preguntas Frecuentes</h2>
                <div class="mv-classic-divider"></div>
            </div>

            <div class="nosotros-faq-list">
                <!-- FAQ Item 1 -->
                <details class="nosotros-faq-item" open>
                    <summary class="nosotros-faq-question">
                        <span>¿Qué tipos de velas y veladoras fabrican?</span>
                        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </summary>
                    <div class="nosotros-faq-answer">
                        <p>Fabricamos una amplia variedad de velas y veladoras en diferentes tamaños, colores y presentaciones, ideales para uso decorativo, religioso y espiritual. Nos enfocamos en ofrecer productos duraderos y de excelente calidad.</p>
                    </div>
                </details>

                <!-- FAQ Item 2 -->
                <details class="nosotros-faq-item">
                    <summary class="nosotros-faq-question">
                        <span>¿Realizan despachos a otras ciudades fuera de Cúcuta?</span>
                        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </summary>
                    <div class="nosotros-faq-answer">
                        <p>Sí, contamos con capacidad de distribución hacia otras zonas del país. Atendemos pedidos mayoristas y estamos en constante expansión para llegar a nuevos mercados.</p>
                    </div>
                </details>

                <!-- FAQ Item 3 -->
                <details class="nosotros-faq-item">
                    <summary class="nosotros-faq-question">
                        <span>¿Ofrecen productos personalizados o por encargo?</span>
                        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </summary>
                    <div class="nosotros-faq-answer">
                        <p>Sí, podemos fabricar velas y veladoras con características específicas según las necesidades del cliente, como color, aroma o tamaño, especialmente para eventos o fines comerciales.</p>
                    </div>
                </details>
            </div>

            <!-- CTA de contacto adicional -->
            <div class="nosotros-faq-cta">
                <p>¿Tienes alguna otra consulta sobre nuestros productos o despachos?</p>
                <a href="https://wa.me/573144753682" class="btn-primary" target="_blank" rel="noopener">
                    <span>Escríbenos por WhatsApp</span>
                </a>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
