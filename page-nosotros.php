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

    <!-- 2. Cuerpo Institucional y Narrativa de Historia -->
    <section class="nosotros-story-section">
        <div class="container-vsm nosotros-narrow-container">

            <!-- Emblema Corporativo Oficial -->
            <div class="nosotros-emblem-center">
                <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/logopequeño.webp' ) ); ?>" alt="Velas y Velones Santa María" class="nosotros-emblem-img" width="70" height="70">
            </div>

            <!-- Título principal de origen -->
            <h2 class="nosotros-story-title">
                Veladoras Santa María nació con vocación y devoción
            </h2>

            <p class="nosotros-story-lead">
                Iniciamos con una producción artesanal dedicada a abastecer hogares, parroquias y comercios de la región, fundamentada en la calidad de nuestras materias primas, la pureza de la parafina y el respeto por las tradiciones de nuestras familias.
            </p>

            <!-- Hito de trayectoria -->
            <div class="nosotros-milestone-bar">
                <h3>Más de 30 años de trayectoria</h3>
            </div>

            <p class="nosotros-story-body">
                Con el paso de los años, la cobertura se extendió a nivel nacional, modernizando los medios de producción e infraestructura con tecnología adecuada para garantizar una llama limpia, mechas de algodón de prolongada duración y una respuesta eficiente a la creciente demanda de distribuidores y mayoristas en todo el país.
            </p>

        </div>
    </section>

    <!-- 3. Misión y Visión (Diseño Editorial Clásico y Tradicional) -->
    <section class="nosotros-mv-classic-section">
        <div class="container-vsm nosotros-narrow-container">
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

</main>

<?php
get_footer();
