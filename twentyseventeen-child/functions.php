<?php
add_action( 'wp_enqueue_scripts', 'gtberlin_2018_enqueue_styles' );
function gtberlin_2018_enqueue_styles() {
    $parent_style = 'twentyseventeen-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

/**
 * WooCommerce adjustments functions and filters.
 */
require get_parent_theme_file_path( '/inc/woocommerce-functions.php' );

/**
* Gruseltour Berlin adjustments functions and filters.
*/
require get_parent_theme_file_path( '/inc/gtberlin-functions.php' );