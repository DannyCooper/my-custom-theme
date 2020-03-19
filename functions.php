<?php
/**
 * My Custom Theme functions and definitions
 *
 * @link       https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @copyright  Copyright (c) 2019, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

/**
 * Register one navigation menu.
 */
 register_nav_menus(
	array(
		'menu-1' => esc_html__( 'Primary Menu', 'my-custom-theme' ),
	)
);

/**
 * Register one sidebar.
 */
function my_custom_theme_sidebar() {
    register_sidebar( array(
        'name' => __( 'Primary Sidebar', 'my-custom-theme' ),
        'id'   => 'sidebar-1',
    ) );
}
add_action( 'widgets_init', 'my_custom_theme_sidebar' );

// Add featured image functionality.
add_theme_support( 'post-thumbnails' );

add_image_size( 'my-custom-image-size', 640, 999 );

// Add title tag functionality.
add_theme_support( 'title-tag' );

/**
 * Enqueue a stylesheet.
 */
function my_custom_theme_enqueue() {
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/normalize.css' );
    wp_enqueue_style( 'my-custom-theme', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_custom_theme_enqueue' );
