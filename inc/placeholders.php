<?php
/**
 * Configuración de Variables de Imágenes Genéricas y Placeholders
 * Tema: Veladoras Santa María
 *
 * Para reemplazar una imagen genérica por una imagen real:
 * 1. Coloca tu archivo en la carpeta 'assets/img/' con el nombre correspondiente
 *    (o edita la ruta en las variables de abajo).
 * 2. Si el archivo no existe, el sistema renderizará automáticamente un
 *    placeholder SVG vectorial limpio con los colores corporativos de la marca.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// =============================================================================
// 1. VARIABLES DE IMÁGENES GENÉRICAS (Rutas relativas dentro de assets/img/)
// =============================================================================

// Logotipos y Favicon Oficiales
$vsm_img_favicon              = 'assets/img/favicon.ico';
$vsm_img_logo_pequeno         = 'assets/img/logopequeño.webp';
$vsm_img_logo_grande          = 'assets/img/logogrande.webp';
$vsm_img_logo                 = 'assets/img/logogrande.webp';
$vsm_img_hero_banner          = 'assets/img/vela.webp';
$vsm_img_cintillo_valor       = 'assets/img/icono-fe-artesanal.svg';

// Imagen genérica por defecto para productos
$vsm_img_producto_default     = 'assets/img/vela.webp';

// Página Nosotros
$vsm_img_banner_nosotros      = 'assets/img/empresa.webp';
$vsm_img_empresa_grande       = 'assets/img/empresa.webp';
$vsm_img_historia_origen      = 'assets/img/empresa.webp';
$vsm_img_video_miniatura      = 'assets/img/video-miniatura-fabrica.jpg';

// Banners Comerciales y B2B
$vsm_img_banner_distribuidor  = 'assets/img/banner-distribuidor-caja.png';
$vsm_img_banner_tienda_online = 'assets/img/banner-tienda-online-laptop.png';

// Banner de Producto Destacado (Citronela / Temporada)
$vsm_img_banner_citronela     = 'assets/img/vela.webp';

// =============================================================================
// 2. ARRAY DE LÍNEAS DE PRODUCTOS (Categorías con sus variables de imagen)
// =============================================================================

function vsm_get_product_lines() {
    return array(
        array(
            'id'          => 'velones',
            'nombre'      => 'Velones',
            'descripcion' => 'Larga duración y flama constante',
            'imagen'      => 'assets/img/vela.webp',
            'enlace'      => '#velones'
        ),
        array(
            'id'          => 'velas',
            'nombre'      => 'Velas Tradicionales',
            'descripcion' => 'Paquetes de vela blanca y colores',
            'imagen'      => 'assets/img/vela.webp',
            'enlace'      => '#velas'
        ),
        array(
            'id'          => 'devocionales',
            'nombre'      => 'Veladoras de Vaso',
            'descripcion' => 'Devocionales con estampas sagradas',
            'imagen'      => 'assets/img/vela.webp',
            'enlace'      => '#devocionales'
        ),
        array(
            'id'          => 'cirios',
            'nombre'      => 'Cirios Pascuales',
            'descripcion' => 'Cirios solemnes y ceremoniales',
            'imagen'      => 'assets/img/vela.webp',
            'enlace'      => '#cirios'
        ),
        array(
            'id'          => 'aromas',
            'nombre'      => 'Aromas & Esencias',
            'descripcion' => 'Velas aromáticas relajantes',
            'imagen'      => 'assets/img/vela.webp',
            'enlace'      => '#aromas'
        ),
        array(
            'id'          => 'encendedores',
            'nombre'      => 'Encendedores & Fósforos',
            'descripcion' => 'Accesorios de encendido seguro',
            'imagen'      => 'assets/img/vela.webp',
            'enlace'      => '#encendedores'
        ),
        array(
            'id'          => 'inciensos',
            'nombre'      => 'Inciensos & Sahumerios',
            'descripcion' => 'Armonización y ambientación',
            'imagen'      => 'assets/img/vela.webp',
            'enlace'      => '#inciensos'
        ),
        array(
            'id'          => 'citronela',
            'nombre'      => 'Citronela & Repelentes',
            'descripcion' => 'Protección natural para exteriores',
            'imagen'      => 'assets/img/vela.webp',
            'enlace'      => '#citronela'
        ),
    );
}

// =============================================================================
// 3. FUNCIÓN DE RENDERIZADO CON FALLBACK SVG INTELIGENTE
// =============================================================================

/**
 * Renderiza la etiqueta <img> o un placeholder SVG corporativo si el archivo aún no existe.
 *
 * @param string $relative_path Ruta relativa desde la raíz del tema (ej: 'assets/img/foto.jpg')
 * @param int    $width         Ancho sugerido
 * @param int    $height        Alto sugerido
 * @param string $alt           Texto alternativo para SEO y accesibilidad
 * @param string $css_class     Clases CSS para el elemento
 * @param string $label         Texto identificativo que aparecerá en el placeholder
 * @return string HTML de la imagen o placeholder
 */
function vsm_render_image( $relative_path, $width = 600, $height = 400, $alt = '', $css_class = '', $label = '' ) {
    $file_path = get_theme_file_path( $relative_path );
    $alt_text  = ! empty( $alt ) ? esc_attr( $alt ) : 'Veladoras Santa María';
    $label_txt = ! empty( $label ) ? $label : ( ! empty( $alt ) ? $alt : basename( $relative_path ) );

    // Si el archivo ya existe físicamente en assets/img/, cargarlo directamente
    if ( file_exists( $file_path ) && ! is_dir( $file_path ) ) {
        $file_uri = get_theme_file_uri( $relative_path );
        return sprintf(
            '<img src="%s" width="%d" height="%d" alt="%s" class="%s" loading="lazy" />',
            esc_url( $file_uri ),
            intval( $width ),
            intval( $height ),
            $alt_text,
            esc_attr( $css_class )
        );
    }

    // Si aún no existe la foto real, renderizar placeholder vectorial con los colores corporativos
    $svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 ' . intval($width) . ' ' . intval($height) . '" class="' . esc_attr( $css_class ) . '" style="background:#f4f6fc; border:1px dashed #011689; border-radius:12px; width:100%; height:auto; max-height:100%; aspect-ratio:' . intval($width) . '/' . intval($height) . ';">'
         . '<defs>'
         . '<linearGradient id="flameGrad" x1="0%" y1="100%" x2="0%" y2="0%">'
         . '<stop offset="0%" stop-color="#fdd400" />'
         . '<stop offset="100%" stop-color="#ff9900" />'
         . '</linearGradient>'
         . '</defs>'
         // Contenedor decorativo central
         . '<g transform="translate(' . (intval($width)/2 - 25) . ', ' . (intval($height)/2 - 45) . ') scale(1)">'
         // Vela
         . '<rect x="15" y="30" width="20" height="35" rx="3" fill="#011689" opacity="0.85" />'
         // Flama
         . '<path d="M25 8 C20 18, 15 22, 25 30 C35 22, 30 18, 25 8 Z" fill="url(#flameGrad)" />'
         . '<circle cx="25" cy="20" r="3" fill="#ffffff" opacity="0.8" />'
         . '</g>'
         // Texto del nombre de imagen
         . '<text x="50%" y="' . (intval($height)/2 + 35) . '" text-anchor="middle" fill="#011689" font-family="system-ui, -apple-system, sans-serif" font-weight="700" font-size="14">' . esc_html( $label_txt ) . '</text>'
         // Dimensiones y aviso
         . '<text x="50%" y="' . (intval($height)/2 + 55) . '" text-anchor="middle" fill="#64748b" font-family="system-ui, -apple-system, sans-serif" font-size="11">' . intval($width) . ' &times; ' . intval($height) . ' px &bull; Pendiente de carga</text>'
         . '</svg>';

    return $svg;
}
