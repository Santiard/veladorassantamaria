<?php
/**
 * WooCommerce Archive & Shop Template Override
 * Tema: Veladoras Santa María
 * 
 * Permite que WooCommerce renderice directamente nuestro catálogo de alta velocidad
 * para la tienda (/tienda/) y archivos de categorías de producto.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require get_template_directory() . '/page-catalogo.php';
