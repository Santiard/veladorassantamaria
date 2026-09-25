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

// Datos Oficiales de Contacto
$vsm_phone_raw         = '573144753682';
$vsm_phone_display     = '+57 (314) 475-3682';
$vsm_phone_cucuta_raw  = '573144753682';
$vsm_phone_cucuta      = '+57 (314) 475-3682';
$vsm_phone_patios_raw  = '573134616819';
$vsm_phone_patios      = '+57 (313) 461-6819';
$vsm_address_cucuta    = 'Av. 11 #14-45, Cúcuta, Norte de Santander';
$vsm_address_lospatios = 'Calle 37 #7 - 80, Los Patios, Norte de Santander';
$vsm_maps_url_cucuta   = 'https://maps.app.goo.gl/WEqPBmxZDsdk9gb5A';
$vsm_maps_url_lospatios= 'https://maps.google.com/?q=Calle+37+%237+-+80,+Los+Patios,+Norte+de+Santander';

$vsm_social_instagram  = 'https://www.instagram.com/velasyvelonessantamaria/';
$vsm_social_facebook   = 'https://www.facebook.com/people/Veladoras-Santa-Maria/100093007599538/';

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
            'enlace'      => ( function_exists('home_url') ? home_url('/catalogo/?cat=velones') : 'preview-catalogo.html?cat=velones' )
        ),
        array(
            'id'          => 'velas',
            'nombre'      => 'Velas Tradicionales',
            'descripcion' => 'Paquetes de vela blanca y colores',
            'imagen'      => 'assets/img/vela.webp',
            'enlace'      => ( function_exists('home_url') ? home_url('/catalogo/?cat=velas') : 'preview-catalogo.html?cat=velas' )
        ),
        array(
            'id'          => 'devocionales',
            'nombre'      => 'Veladoras de Vaso',
            'descripcion' => 'Devocionales con estampas sagradas',
            'imagen'      => 'assets/img/vela.webp',
            'enlace'      => ( function_exists('home_url') ? home_url('/catalogo/?cat=devocionales') : 'preview-catalogo.html?cat=devocionales' )
        ),
        array(
            'id'          => 'cirios',
            'nombre'      => 'Cirios Pascuales',
            'descripcion' => 'Cirios solemnes y ceremoniales',
            'imagen'      => 'assets/img/vela.webp',
            'enlace'      => ( function_exists('home_url') ? home_url('/catalogo/?cat=cirios') : 'preview-catalogo.html?cat=cirios' )
        ),
        array(
            'id'          => 'aromas',
            'nombre'      => 'Aromas & Esencias',
            'descripcion' => 'Velas aromáticas relajantes',
            'imagen'      => 'assets/img/vela.webp',
            'enlace'      => ( function_exists('home_url') ? home_url('/catalogo/?cat=aromas') : 'preview-catalogo.html?cat=aromas' )
        ),
        array(
            'id'          => 'encendedores',
            'nombre'      => 'Encendedores & Fósforos',
            'descripcion' => 'Accesorios de encendido seguro',
            'imagen'      => 'assets/img/vela.webp',
            'enlace'      => ( function_exists('home_url') ? home_url('/catalogo/?cat=accesorios') : 'preview-catalogo.html?cat=accesorios' )
        ),
        array(
            'id'          => 'inciensos',
            'nombre'      => 'Inciensos & Sahumerios',
            'descripcion' => 'Armonización y ambientación',
            'imagen'      => 'assets/img/vela.webp',
            'enlace'      => ( function_exists('home_url') ? home_url('/catalogo/?cat=inciensos') : 'preview-catalogo.html?cat=inciensos' )
        ),
        array(
            'id'          => 'citronela',
            'nombre'      => 'Citronela & Repelentes',
            'descripcion' => 'Protección natural para exteriores',
            'imagen'      => 'assets/img/vela.webp',
            'enlace'      => ( function_exists('home_url') ? home_url('/catalogo/?cat=citronela') : 'preview-catalogo.html?cat=citronela' )
        ),
    );
}

// =============================================================================


// =============================================================================
// 3. PRODUCTOS DEL CATÁLOGO (Colección para page-catalogo.php)
// =============================================================================

function vsm_get_catalog_products() {
    $desc_estandar = 'Producto elaborado con materiales de alta calidad y tradición cerera Santa María. Ideal para el hogar, templos y momentos de oración o ambientación.';

    return array(
        array(
            'id'               => 1,
            'nombre'           => 'Velón envase de vidrio – Virgen del Carmen',
            'categoria_slug'   => 'devocionales',
            'categoria_nombre' => 'DEVOCIONALES',
            'precio'           => 9480,
            'precio_formato'   => '$ 9.480',
            'imagen'           => 'assets/img/vela.webp',
            'etiqueta'         => 'Más Vendido',
            'sku'              => 'DEV-VC-001',
            'descripcion'      => $desc_estandar
        ),
        array(
            'id'               => 2,
            'nombre'           => 'Encendedor Eléctrico Recargable para velones',
            'categoria_slug'   => 'accesorios',
            'categoria_nombre' => 'ACCESORIOS',
            'precio'           => 13800,
            'precio_formato'   => '$ 13.800',
            'imagen'           => 'assets/img/vela.webp',
            'etiqueta'         => 'Práctico & Seguro',
            'sku'              => 'ACC-ENC-002',
            'descripcion'      => $desc_estandar
        ),
        array(
            'id'               => 3,
            'nombre'           => 'Velón envase de vidrio – Virgen Milagrosa',
            'categoria_slug'   => 'devocionales',
            'categoria_nombre' => 'DEVOCIONALES',
            'precio'           => 9480,
            'precio_formato'   => '$ 9.480',
            'imagen'           => 'assets/img/vela.webp',
            'etiqueta'         => 'Devoción',
            'sku'              => 'DEV-VM-003',
            'descripcion'      => $desc_estandar
        ),
        array(
            'id'               => 4,
            'nombre'           => 'Velón envase de vidrio – Señor de los Milagros',
            'categoria_slug'   => 'devocionales',
            'categoria_nombre' => 'DEVOCIONALES',
            'precio'           => 9480,
            'precio_formato'   => '$ 9.480',
            'imagen'           => 'assets/img/vela.webp',
            'etiqueta'         => 'Fe & Tradición',
            'sku'              => 'DEV-SM-004',
            'descripcion'      => $desc_estandar
        ),
        array(
            'id'               => 5,
            'nombre'           => 'Velón #22 Blanco – Cera pura para decoraciones',
            'categoria_slug'   => 'velones',
            'categoria_nombre' => 'VELONES',
            'precio'           => 31900,
            'precio_formato'   => '$ 31.900',
            'imagen'           => 'assets/img/vela.webp',
            'etiqueta'         => 'Larga Duración',
            'sku'              => 'VEL-B22-005',
            'descripcion'      => $desc_estandar
        ),
        array(
            'id'               => 6,
            'nombre'           => 'Velón Santa María #15 Amarillo Tradicional',
            'categoria_slug'   => 'velones',
            'categoria_nombre' => 'VELONES',
            'precio'           => 15200,
            'precio_formato'   => '$ 15.200',
            'imagen'           => 'assets/img/vela.webp',
            'etiqueta'         => 'Clásico',
            'sku'              => 'VEL-A15-006',
            'descripcion'      => $desc_estandar
        ),
        array(
            'id'               => 7,
            'nombre'           => 'Velón #18 Blanco con etiqueta decorativa',
            'categoria_slug'   => 'velones',
            'categoria_nombre' => 'VELONES',
            'precio'           => 18500,
            'precio_formato'   => '$ 18.500',
            'imagen'           => 'assets/img/vela.webp',
            'etiqueta'         => 'Especial',
            'sku'              => 'VEL-B18-007',
            'descripcion'      => $desc_estandar
        ),
        array(
            'id'               => 8,
            'nombre'           => '12 Velones Pequeños Blancos – 2.8 cm de diámetro',
            'categoria_slug'   => 'velones',
            'categoria_nombre' => 'VELONES',
            'precio'           => 7450,
            'precio_formato'   => '$ 7.450',
            'imagen'           => 'assets/img/vela.webp',
            'etiqueta'         => 'Paquete x 12',
            'sku'              => 'VEL-PX12-008',
            'descripcion'      => $desc_estandar
        ),
        array(
            'id'               => 9,
            'nombre'           => 'Cirio Pascual Litúrgico Ceremonial 50 cm',
            'categoria_slug'   => 'cirios',
            'categoria_nombre' => 'CIRIOS PASCUALES',
            'precio'           => 48000,
            'precio_formato'   => '$ 48.000',
            'imagen'           => 'assets/img/vela.webp',
            'etiqueta'         => 'Artesanal',
            'sku'              => 'CIR-PAS-009',
            'descripcion'      => $desc_estandar
        ),
        array(
            'id'               => 10,
            'nombre'           => 'Velas Blancas Tradicionales – Paquete x 20 unidades',
            'categoria_slug'   => 'velas',
            'categoria_nombre' => 'VELAS TRADICIONALES',
            'precio'           => 11500,
            'precio_formato'   => '$ 11.500',
            'imagen'           => 'assets/img/vela.webp',
            'etiqueta'         => 'Hogar y Templo',
            'sku'              => 'VELA-TRAD-010',
            'descripcion'      => $desc_estandar
        ),
        array(
            'id'               => 11,
            'nombre'           => 'Vela Aromática en Vaso – Lavanda y Flor de Azahar',
            'categoria_slug'   => 'aromas',
            'categoria_nombre' => 'AROMAS & ESENCIAS',
            'precio'           => 14900,
            'precio_formato'   => '$ 14.900',
            'imagen'           => 'assets/img/vela.webp',
            'etiqueta'         => 'Relajante',
            'sku'              => 'ARO-LAV-011',
            'descripcion'      => $desc_estandar
        ),
        array(
            'id'               => 12,
            'nombre'           => 'Velón de Citronela Especial Exterior con Tapa',
            'categoria_slug'   => 'citronela',
            'categoria_nombre' => 'CITRONELA',
            'precio'           => 16500,
            'precio_formato'   => '$ 16.500',
            'imagen'           => 'assets/img/vela.webp',
            'etiqueta'         => 'Repelente',
            'sku'              => 'CIT-EXT-012',
            'descripcion'      => $desc_estandar
        ),
    );
}

/**
 * Obtener un producto por su ID
 *
 * @param int $id Identificador del producto
 * @return array|null Datos del producto o null si no se encuentra
 */
function vsm_get_product_by_id( $id ) {
    $productos = vsm_get_catalog_products();
    $id = intval( $id );
    foreach ( $productos as $p ) {
        if ( intval( $p['id'] ) === $id ) {
            return $p;
        }
    }
    return ! empty( $productos ) ? $productos[0] : null;
}


// 4. FUNCIÓN DE RENDERIZADO CON FALLBACK SVG INTELIGENTE
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
