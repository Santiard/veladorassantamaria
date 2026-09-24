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
    wp_enqueue_style( 'veladoras-style', get_stylesheet_uri(), array(), '1.0.0' );

    // Estilos principales de diseño y tokens de color
    wp_enqueue_style( 'veladoras-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0' );

    // Script principal para interacciones y menú móvil
    wp_enqueue_script( 'veladoras-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
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
