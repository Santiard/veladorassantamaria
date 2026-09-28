<?php
/**
 * WooCommerce Single Product Template Override
 * Tema: Veladoras Santa María
 * 
 * Permite que WooCommerce renderice directamente nuestra plantilla de alta velocidad
 * para cualquier producto individual en la tienda.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require get_template_directory() . '/page-producto-detalle.php';
