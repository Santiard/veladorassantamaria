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
$vsm_img_banner_nosotros      = 'assets/img/4.webp';
$vsm_img_nosotros_maquinaria  = 'assets/img/6.webp';
$vsm_img_empresa_grande       = 'assets/img/empresa.webp';
$vsm_img_historia_origen      = 'assets/img/empresa.webp';
$vsm_img_video_miniatura      = 'assets/img/video-miniatura-fabrica.jpg';

// Fotos Reales de Fábrica
$vsm_img_fabrica_fachada      = 'assets/img/3.webp';
$vsm_img_fabrica_almacen      = 'assets/img/1.webp';
$vsm_img_fabrica_nave         = 'assets/img/4.webp';
$vsm_img_fabrica_despachos    = 'assets/img/2.webp';
$vsm_img_fabrica_mesas        = 'assets/img/5.webp';
$vsm_img_fabrica_maquinaria   = 'assets/img/6.webp';

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
            'id'          => 'velas-decorativas',
            'nombre'      => 'Velas Decorativas',
            'descripcion' => 'Diseños pensados para ambientar y aportar estilo a cualquier espacio, combinando formas atractivas, aromas sutiles y detalles visuales que complementan la decoración del hogar.',
            'imagen'      => 'assets/img/velas-dcorativas.webp',
            'enlace'      => ( function_exists('home_url') ? home_url('/catalogo/?cat=velas-decorativas') : 'preview-catalogo.html?cat=velas-decorativas' )
        ),
        array(
            'id'          => 'velones',
            'nombre'      => 'Velones',
            'descripcion' => 'Cirios gruesos de combustión prolongada y llama constante, ideales para altares, momentos de introspección, ceremonias o iluminación continua de larga duración.',
            'imagen'      => 'assets/img/velones.webp',
            'enlace'      => ( function_exists('home_url') ? home_url('/catalogo/?cat=velones') : 'preview-catalogo.html?cat=velones' )
        ),
        array(
            'id'          => 'veladoras',
            'nombre'      => 'Veladoras',
            'descripcion' => 'Presentaciones clásicas en vaso o contenedor protector que aseguran un consumo limpio y seguro, pensadas para la devoción personal, peticiones y agradecimientos diarios.',
            'imagen'      => 'assets/img/veladoras.webp',
            'enlace'      => ( function_exists('home_url') ? home_url('/catalogo/?cat=veladoras') : 'preview-catalogo.html?cat=veladoras' )
        ),
        array(
            'id'          => 'velas-de-semana-santa',
            'nombre'      => 'Velas de Semana Santa',
            'descripcion' => 'Cirios y velas ceremoniales elaborados especialmente para acompañar la solemnidad litúrgica, vigilias, procesiones y tradiciones de la Pascua.',
            'imagen'      => 'assets/img/Velas-de-semana-santa.webp',
            'enlace'      => ( function_exists('home_url') ? home_url('/catalogo/?cat=velas-de-semana-santa') : 'preview-catalogo.html?cat=velas-de-semana-santa' )
        ),
        array(
            'id'          => 'velas-navidenas',
            'nombre'      => 'Velas Navideñas',
            'descripcion' => 'Diseños con motivos festivos, colores tradicionales de temporada y destellos cálidos, perfectos para celebrar en familia las novenas y la época de fin de año.',
            'imagen'      => 'assets/img/Velas-navidenas.webp',
            'enlace'      => ( function_exists('home_url') ? home_url('/catalogo/?cat=velas-navidenas') : 'preview-catalogo.html?cat=velas-navidenas' )
        ),
    );
}

// =============================================================================
// =============================================================================
// 3. CATEGORÍAS Y PRODUCTOS DEL CATÁLOGO
// =============================================================================

/**
 * Obtiene las categorías disponibles para el filtro del catálogo.
 * Si WooCommerce está activo, consulta las categorías reales de la base de datos.
 */
function vsm_get_catalog_categories() {
    if ( taxonomy_exists( 'product_cat' ) ) {
        $terms = get_terms( array(
            'taxonomy'   => 'product_cat',
            'hide_empty' => true,
            'orderby'    => 'count',
            'order'      => 'DESC',
        ) );

        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
            $categorias = array();
            foreach ( $terms as $t ) {
                if ( in_array( $t->slug, array( 'sin-categoria', 'uncategorized' ), true ) ) {
                    continue;
                }
                $categorias[] = array(
                    'slug'  => $t->slug,
                    'name'  => $t->name,
                    'count' => $t->count,
                );
            }
            if ( ! empty( $categorias ) ) {
                return $categorias;
            }
        }
    }

    return array(
        array( 'slug' => 'velas-decorativas', 'name' => 'Velas Decorativas', 'count' => 0 ),
        array( 'slug' => 'velones',           'name' => 'Velones',           'count' => 0 ),
        array( 'slug' => 'veladoras',         'name' => 'Veladoras',         'count' => 0 ),
        array( 'slug' => 'semana-santa',      'name' => 'Semana Santa',      'count' => 0 ),
        array( 'slug' => 'velas-navidenas',   'name' => 'Velas Navideñas',   'count' => 0 ),
        array( 'slug' => 'recordatorios',     'name' => 'Recordatorios',     'count' => 0 ),
        array( 'slug' => 'velas',             'name' => 'Velas',             'count' => 0 ),
    );
}

/**
 * Obtiene la lista completa de productos para el catálogo.
 * Si existen productos en la base de datos de WooCommerce, los lee dinámicamente.
 */
function vsm_get_catalog_products() {
    // 1. Si existen productos en la base de datos de WordPress (WooCommerce)
    if ( function_exists( 'get_posts' ) ) {
        $db_prods = get_posts( array(
            'post_type'      => 'product',
            'post_status'    => 'publish',
            'posts_per_page' => -1,
            'orderby'        => 'menu_order title',
            'order'          => 'ASC',
        ) );

        if ( ! empty( $db_prods ) ) {
            $lista = array();
            foreach ( $db_prods as $p_post ) {
                $pid     = $p_post->ID;
                $wc_prod = function_exists( 'wc_get_product' ) ? wc_get_product( $pid ) : null;

                // Categorías y Slugs múltiples
                $terms          = get_the_terms( $pid, 'product_cat' );
                $cat_slugs      = array();
                $main_cat_slug  = 'velones';
                $main_cat_name  = 'VELONES';

                if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                    $main_cat_slug = $terms[0]->slug;
                    $main_cat_name = mb_strtoupper( $terms[0]->name, 'UTF-8' );

                    foreach ( $terms as $term_item ) {
                        $clean_slug = strtolower( trim( $term_item->slug ) );
                        $cat_slugs[] = $clean_slug;

                        // Variantes y alias para filtrado fluido
                        if ( $clean_slug === 'semana-santa' ) {
                            $cat_slugs[] = 'velas-de-semana-santa';
                        } elseif ( $clean_slug === 'velas-de-semana-santa' ) {
                            $cat_slugs[] = 'semana-santa';
                        }
                        if ( $clean_slug === 'velas-navidenas' ) {
                            $cat_slugs[] = 'navidad';
                            $cat_slugs[] = 'velas-navidad';
                        }
                    }
                } else {
                    $cat_slugs[] = $main_cat_slug;
                }

                $cat_slugs = array_values( array_unique( $cat_slugs ) );
                $cat_classes = implode( ' ', $cat_slugs );

                // Precio (Soporte para productos con precio 0 o a cotizar)
                $precio_num = 0;
                if ( $wc_prod ) {
                    $raw_price = $wc_prod->get_price();
                    if ( is_numeric( $raw_price ) && floatval( $raw_price ) > 0 ) {
                        $precio_num = floatval( $raw_price );
                    }
                }
                $is_cotizar = ( $precio_num <= 0 );
                $precio_fmt = ( ! $is_cotizar ) ? '$ ' . number_format( $precio_num, 0, ',', '.' ) : 'Consultar precio';

                // Imagen destacada con fallback a galería o placeholder de veladoras
                $thumb_url = get_the_post_thumbnail_url( $pid, 'medium_large' );
                if ( ! $thumb_url && $wc_prod && method_exists( $wc_prod, 'get_gallery_image_ids' ) ) {
                    $gallery = $wc_prod->get_gallery_image_ids();
                    if ( ! empty( $gallery ) ) {
                        $thumb_url = wp_get_attachment_image_url( $gallery[0], 'medium_large' );
                    }
                }
                if ( ! $thumb_url ) {
                    $thumb_url = 'assets/img/veladoras.webp';
                }

                // SKU
                $sku = $wc_prod ? $wc_prod->get_sku() : '';
                if ( empty( $sku ) ) {
                    $sku = 'VSM-' . str_pad( $pid, 3, '0', STR_PAD_LEFT );
                }

                // Descripción
                $desc = '';
                if ( $wc_prod && method_exists( $wc_prod, 'get_short_description' ) ) {
                    $desc = wp_strip_all_tags( $wc_prod->get_short_description() );
                }
                if ( empty( $desc ) && ! empty( $p_post->post_excerpt ) ) {
                    $desc = wp_strip_all_tags( $p_post->post_excerpt );
                }
                if ( empty( $desc ) && ! empty( $p_post->post_content ) ) {
                    $desc = wp_trim_words( wp_strip_all_tags( $p_post->post_content ), 25 );
                }
                if ( empty( $desc ) ) {
                    $desc = 'Producto elaborado con materiales de alta calidad y tradición cerera Santa María. Ideal para el hogar, templos y momentos de oración o ambientación.';
                }

                // URL amigable del producto
                $url_producto = function_exists( 'get_permalink' ) ? get_permalink( $pid ) : '';
                if ( empty( $url_producto ) ) {
                    $url_producto = function_exists( 'home_url' ) ? home_url( '/producto/?id=' . $pid ) : 'preview-producto.html?id=' . $pid;
                }

                $lista[] = array(
                    'id'                => $pid,
                    'nombre'            => get_the_title( $p_post ),
                    'categoria_slug'    => $main_cat_slug,
                    'categoria_nombre'  => $main_cat_name,
                    'categorias_clases' => $cat_classes,
                    'precio'            => $precio_num,
                    'precio_formato'    => $precio_fmt,
                    'is_consultar'      => $is_cotizar,
                    'imagen'            => $thumb_url,
                    'etiqueta'          => ( ! $is_cotizar ) ? 'Precio por unidad' : 'Venta mayorista y detal',
                    'sku'               => $sku,
                    'descripcion'       => $desc,
                    'url'               => $url_producto,
                );
            }

            return $lista;
        }
    }

    $desc_estandar = 'Producto elaborado con materiales de alta calidad y tradición cerera Santa María. Ideal para el hogar, templos y momentos de oración o ambientación.';

    return array(
        array(
            'id'               => 1,
            'nombre'           => 'Vela Decorativa en Vaso Elegance',
            'categoria_slug'   => 'velas-decorativas',
            'categoria_nombre' => 'VELAS DECORATIVAS',
            'precio'           => 14900,
            'precio_formato'   => '$ 14.900',
            'imagen'           => 'assets/img/velas-dcorativas.webp',
            'etiqueta'         => 'Precio por unidad',
            'sku'              => 'DEC-001',
            'descripcion'      => $desc_estandar
        ),
        array(
            'id'               => 2,
            'nombre'           => 'Veladora Santa María Tradicional en Vaso',
            'categoria_slug'   => 'veladoras',
            'categoria_nombre' => 'VELADORAS',
            'precio'           => 9480,
            'precio_formato'   => '$ 9.480',
            'imagen'           => 'assets/img/veladoras.webp',
            'etiqueta'         => 'Precio por unidad',
            'sku'              => 'VEL-002',
            'descripcion'      => $desc_estandar
        ),
        array(
            'id'               => 3,
            'nombre'           => 'Velas Navideñas de Colores – Paquete Tradicional',
            'categoria_slug'   => 'velas-navidenas',
            'categoria_nombre' => 'VELAS NAVIDEÑAS',
            'precio'           => 11500,
            'precio_formato'   => '$ 11.500',
            'imagen'           => 'assets/img/Velas-navidenas.webp',
            'etiqueta'         => 'Precio por unidad',
            'sku'              => 'NAV-003',
            'descripcion'      => $desc_estandar
        ),
        array(
            'id'               => 4,
            'nombre'           => 'Velón Litúrgico y Ceremonial de Larga Duración',
            'categoria_slug'   => 'velones',
            'categoria_nombre' => 'VELONES',
            'precio'           => 16500,
            'precio_formato'   => '$ 16.500',
            'imagen'           => 'assets/img/velones.webp',
            'etiqueta'         => 'Precio por unidad',
            'sku'              => 'VLN-004',
            'descripcion'      => $desc_estandar
        ),
        array(
            'id'               => 5,
            'nombre'           => 'Cirio Pascual y Vela de Semana Santa Solemne',
            'categoria_slug'   => 'velas-de-semana-santa',
            'categoria_nombre' => 'VELAS DE SEMANA SANTA',
            'precio'           => 12900,
            'precio_formato'   => '$ 12.900',
            'imagen'           => 'assets/img/Velas-de-semana-santa.webp',
            'etiqueta'         => 'Precio por unidad',
            'sku'              => 'SEM-005',
            'descripcion'      => $desc_estandar
        ),
        array(
            'id'               => 6,
            'nombre'           => 'Vela Decorativa Cilindro Blanco',
            'categoria_slug'   => 'velas-decorativas',
            'categoria_nombre' => 'VELAS DECORATIVAS',
            'precio'           => 18500,
            'precio_formato'   => '$ 18.500',
            'imagen'           => 'assets/img/velas-dcorativas.webp',
            'etiqueta'         => 'Precio por unidad',
            'sku'              => 'DEC-006',
            'descripcion'      => $desc_estandar
        ),
        array(
            'id'               => 7,
            'nombre'           => 'Veladora Mediana Devocional',
            'categoria_slug'   => 'veladoras',
            'categoria_nombre' => 'VELADORAS',
            'precio'           => 12500,
            'precio_formato'   => '$ 12.500',
            'imagen'           => 'assets/img/veladoras.webp',
            'etiqueta'         => 'Precio por unidad',
            'sku'              => 'VEL-007',
            'descripcion'      => $desc_estandar
        ),
        array(
            'id'               => 8,
            'nombre'           => 'Velas Navideñas Rojas y Blancas – Set Familiar',
            'categoria_slug'   => 'velas-navidenas',
            'categoria_nombre' => 'VELAS NAVIDEÑAS',
            'precio'           => 13800,
            'precio_formato'   => '$ 13.800',
            'imagen'           => 'assets/img/Velas-navidenas.webp',
            'etiqueta'         => 'Precio por unidad',
            'sku'              => 'NAV-008',
            'descripcion'      => $desc_estandar
        ),
        array(
            'id'               => 9,
            'nombre'           => 'Velón Devocional para Altar y Oración',
            'categoria_slug'   => 'velones',
            'categoria_nombre' => 'VELONES',
            'precio'           => 19200,
            'precio_formato'   => '$ 19.200',
            'imagen'           => 'assets/img/velones.webp',
            'etiqueta'         => 'Precio por unidad',
            'sku'              => 'VLN-009',
            'descripcion'      => $desc_estandar
        ),
        array(
            'id'               => 10,
            'nombre'           => 'Vela Ceremonial para Vigilia Pascual',
            'categoria_slug'   => 'velas-de-semana-santa',
            'categoria_nombre' => 'VELAS DE SEMANA SANTA',
            'precio'           => 14500,
            'precio_formato'   => '$ 14.500',
            'imagen'           => 'assets/img/Velas-de-semana-santa.webp',
            'etiqueta'         => 'Precio por unidad',
            'sku'              => 'SEM-010',
            'descripcion'      => $desc_estandar
        ),
        array(
            'id'               => 11,
            'nombre'           => 'Vela Decorativa Esculpida Diseño Floral',
            'categoria_slug'   => 'velas-decorativas',
            'categoria_nombre' => 'VELAS DECORATIVAS',
            'precio'           => 22000,
            'precio_formato'   => '$ 22.000',
            'imagen'           => 'assets/img/velas-dcorativas.webp',
            'etiqueta'         => 'Precio por unidad',
            'sku'              => 'DEC-011',
            'descripcion'      => $desc_estandar
        ),
        array(
            'id'               => 12,
            'nombre'           => 'Veladora Extra Duración en Vaso Grande',
            'categoria_slug'   => 'veladoras',
            'categoria_nombre' => 'VELADORAS',
            'precio'           => 16500,
            'precio_formato'   => '$ 16.500',
            'imagen'           => 'assets/img/veladoras.webp',
            'etiqueta'         => 'Precio por unidad',
            'sku'              => 'VEL-012',
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
    $id = intval( $id );

    // 1. Si estamos en WordPress y el ID es válido, intentar consultar directamente el producto
    if ( $id > 0 && function_exists( 'get_post' ) ) {
        $p_post = get_post( $id );
        if ( $p_post && $p_post->post_type === 'product' && $p_post->post_status === 'publish' ) {
            $wc_prod = function_exists( 'wc_get_product' ) ? wc_get_product( $id ) : null;

            $terms = get_the_terms( $id, 'product_cat' );
            $cat_slugs = array();
            $main_cat_slug = 'velones';
            $main_cat_name = 'VELONES';

            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                $main_cat_slug = $terms[0]->slug;
                $main_cat_name = mb_strtoupper( $terms[0]->name, 'UTF-8' );
                foreach ( $terms as $term_item ) {
                    $clean = strtolower( trim( $term_item->slug ) );
                    $cat_slugs[] = $clean;
                    if ( $clean === 'semana-santa' ) {
                        $cat_slugs[] = 'velas-de-semana-santa';
                    } elseif ( $clean === 'velas-de-semana-santa' ) {
                        $cat_slugs[] = 'semana-santa';
                    }
                }
            } else {
                $cat_slugs[] = $main_cat_slug;
            }

            $precio_num = 0;
            if ( $wc_prod ) {
                $raw_p = $wc_prod->get_price();
                if ( is_numeric( $raw_p ) && floatval( $raw_p ) > 0 ) {
                    $precio_num = floatval( $raw_p );
                }
            }
            $is_cotizar = ( $precio_num <= 0 );
            $precio_fmt = ( ! $is_cotizar ) ? '$ ' . number_format( $precio_num, 0, ',', '.' ) : 'Consultar precio';

            $thumb_url = get_the_post_thumbnail_url( $id, 'large' );
            if ( ! $thumb_url && $wc_prod && method_exists( $wc_prod, 'get_gallery_image_ids' ) ) {
                $gallery = $wc_prod->get_gallery_image_ids();
                if ( ! empty( $gallery ) ) {
                    $thumb_url = wp_get_attachment_image_url( $gallery[0], 'large' );
                }
            }
            if ( ! $thumb_url ) {
                $thumb_url = 'assets/img/veladoras.webp';
            }

            $sku = $wc_prod ? $wc_prod->get_sku() : '';
            if ( empty( $sku ) ) {
                $sku = 'VSM-' . str_pad( $id, 3, '0', STR_PAD_LEFT );
            }

            $desc = '';
            if ( $wc_prod && method_exists( $wc_prod, 'get_short_description' ) ) {
                $desc = wp_strip_all_tags( $wc_prod->get_short_description() );
            }
            if ( empty( $desc ) && ! empty( $p_post->post_excerpt ) ) {
                $desc = wp_strip_all_tags( $p_post->post_excerpt );
            }
            if ( empty( $desc ) && ! empty( $p_post->post_content ) ) {
                $desc = wp_trim_words( wp_strip_all_tags( $p_post->post_content ), 40 );
            }
            if ( empty( $desc ) ) {
                $desc = 'Producto elaborado con materiales de alta calidad y tradición cerera Santa María. Ideal para el hogar, templos y momentos de oración o ambientación.';
            }

            $url_producto = function_exists( 'get_permalink' ) ? get_permalink( $id ) : home_url( '/producto/?id=' . $id );

            return array(
                'id'                => $id,
                'nombre'            => get_the_title( $p_post ),
                'categoria_slug'    => $main_cat_slug,
                'categoria_nombre'  => $main_cat_name,
                'categorias_clases' => implode( ' ', array_unique( $cat_slugs ) ),
                'precio'            => $precio_num,
                'precio_formato'    => $precio_fmt,
                'is_consultar'      => $is_cotizar,
                'imagen'            => $thumb_url,
                'etiqueta'          => ( ! $is_cotizar ) ? 'Precio por unidad' : 'Venta mayorista y detal',
                'sku'               => $sku,
                'descripcion'       => $desc,
                'url'               => $url_producto,
            );
        }
    }

    // 2. Buscar en la lista de productos disponibles
    $productos = vsm_get_catalog_products();
    foreach ( $productos as $p ) {
        if ( intval( $p['id'] ) === $id ) {
            return $p;
        }
    }

    return ! empty( $productos ) ? $productos[0] : null;
}


/**
 * Resuelve la URL de una imagen soportando rutas locales del tema o URLs absolutas de la biblioteca de medios.
 *
 * @param string $path_or_url Ruta relativa o URL completa
 * @return string URL válida para etiqueta img
 */
function vsm_get_image_src( $path_or_url ) {
    if ( empty( $path_or_url ) ) {
        return function_exists( 'get_theme_file_uri' ) ? get_theme_file_uri( 'assets/img/veladoras.webp' ) : 'assets/img/veladoras.webp';
    }
    if ( strpos( $path_or_url, 'http://' ) === 0 || strpos( $path_or_url, 'https://' ) === 0 ) {
        return $path_or_url;
    }
    return function_exists( 'get_theme_file_uri' ) ? get_theme_file_uri( $path_or_url ) : $path_or_url;
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
