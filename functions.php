<?php
/**
 * Funciones y definiciones del tema Veladoras Santa María
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Cargar el sistema de variables de imágenes genéricas y placeholders
require_once get_template_directory() . '/inc/placeholders.php';

/**
 * Registro de estilos y scripts
 */
function veladoras_scripts() {
    // Estilos identificadores de WordPress
    wp_enqueue_style( 'veladoras-style', get_stylesheet_uri(), array(), '1.0.3' );

    // Estilos principales de diseño y tokens de color
    wp_enqueue_style( 'veladoras-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.3' );

    // Script principal para interacciones y menú móvil
    wp_enqueue_script( 'veladoras-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.3', true );
}
add_action( 'wp_enqueue_scripts', 'veladoras_scripts' );

/**
 * Configuración de características soportadas por el tema
 */
function veladoras_setup() {
    // Título dinámico gestionado por WordPress
    add_theme_support( 'title-tag' );

    // Soporte para imágenes destacadas
    add_theme_support( 'post-thumbnails' );

    // Soporte de logotipo personalizable desde el Personalizador
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 260,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Menús de navegación de WordPress
    register_nav_menus( array(
        'primary-menu' => __( 'Menú Principal', 'veladoras-santa-maria' ),
        'footer-menu'  => __( 'Menú del Footer', 'veladoras-santa-maria' ),
    ) );

    // Soporte oficial para WooCommerce con formato cuadrado 1:1
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width'         => 600,
        'single_image_width'            => 800,
        'gallery_thumbnail_image_width' => 150,
    ) );

    // Tamaño proporcional optimizado para productos (sin recorte destructivo)
    add_image_size( 'vsm-product-medium', 600, 600, false );

    // Marcado HTML5 limpio
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );
}
add_action( 'after_setup_theme', 'veladoras_setup' );

/**
 * Configurar miniaturas de productos en WooCommerce sin recorte destructivo.
 * Conserva la imagen íntegra para que el contenedor cuadrado 1:1 en CSS
 * con object-fit: contain muestre la totalidad del producto (mecha y base) sin cortes.
 */
function vsm_woocommerce_thumbnail_cropping( $size ) {
    return array(
        'width'  => 600,
        'height' => 600,
        'crop'   => 0, // 0 = sin recorte destructivo
    );
}
add_filter( 'woocommerce_get_image_size_thumbnail', 'vsm_woocommerce_thumbnail_cropping' );

/**
 * Reglas de reescritura de URL para Catálogo y Nosotros
 */
function vsm_custom_rewrite_rules() {
    add_rewrite_rule( '^catalogo/?$', 'index.php?vsm_route=catalogo', 'top' );
    add_rewrite_rule( '^nosotros/?$', 'index.php?vsm_route=nosotros', 'top' );
}
add_action( 'init', 'vsm_custom_rewrite_rules' );

function vsm_custom_query_vars( $vars ) {
    $vars[] = 'vsm_route';
    return $vars;
}
add_filter( 'query_vars', 'vsm_custom_query_vars' );

/**
 * Enrutamiento automático de plantillas para productos, catálogo, tienda y nosotros
 */
function vsm_product_template_include( $template ) {
    global $wp_query;

    $request_uri = isset( $_SERVER['REQUEST_URI'] ) ? trim( parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ), '/' ) : '';
    $route_var   = get_query_var( 'vsm_route' );

    // 1. Detalle de producto individual
    if ( is_singular( 'product' ) || ( isset( $_GET['id'] ) && strpos( $request_uri, 'producto' ) !== false ) ) {
        $custom_template = get_template_directory() . '/page-producto-detalle.php';
        if ( file_exists( $custom_template ) ) {
            if ( is_object( $wp_query ) ) {
                $wp_query->is_404 = false;
            }
            status_header( 200 );
            return $custom_template;
        }
    }

    // 2. Página de Catálogo / Tienda y Archivos de Taxonomía de Productos
    if ( ( function_exists( 'is_shop' ) && is_shop() ) 
         || ( function_exists( 'is_product_taxonomy' ) && is_product_taxonomy() )
         || $route_var === 'catalogo'
         || $request_uri === 'catalogo' 
         || $request_uri === 'tienda'
         || strpos( $request_uri, 'catalogo' ) === 0 ) {
        $catalog_template = get_template_directory() . '/page-catalogo.php';
        if ( file_exists( $catalog_template ) ) {
            if ( is_object( $wp_query ) ) {
                $wp_query->is_404 = false;
            }
            status_header( 200 );
            return $catalog_template;
        }
    }

    // 3. Página de Nosotros
    if ( $route_var === 'nosotros' 
         || $request_uri === 'nosotros' 
         || strpos( $request_uri, 'nosotros' ) === 0 
         || strpos( $request_uri, 'quienes-somos' ) === 0 
         || strpos( $request_uri, 'sobre-nosotros' ) === 0 ) {
        $nosotros_template = get_template_directory() . '/page-nosotros.php';
        if ( file_exists( $nosotros_template ) ) {
            if ( is_object( $wp_query ) ) {
                $wp_query->is_404 = false;
            }
            status_header( 200 );
            return $nosotros_template;
        }
    }

    return $template;
}
add_filter( 'template_include', 'vsm_product_template_include', 99 );
