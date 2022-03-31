<?php
/**
 * Enqueue child styles.
 */
function child_enqueue_styles() {
	//wp_enqueue_style( 'flexslider', get_stylesheet_directory_uri() . '/inc/flexslider/flexslider.css', array(), "1.0");
	wp_enqueue_style( 'swiper', get_stylesheet_directory_uri() . '/build/index.css', array(), "8.0.7");

	wp_enqueue_style( 'tailwind', get_stylesheet_directory_uri() . '/src/output.css', array(), "3.0");
	wp_enqueue_style( 'child-theme', get_stylesheet_directory_uri() . '/style.css', array(), 100 );
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 11 ); // Remove the // from the beginning of this line if you want the child theme style.css file to load on the front end of your site.

function child_enqueue_scripts() {
	//wp_enqueue_script('flexslider-min', get_stylesheet_directory_uri() . '/inc/flexslider/jquery.flexslider-min.js', array('jquery'), '1.0', true );
	//wp_enqueue_script('flexslider-js', get_stylesheet_directory_uri() . '/inc/flexslider/flexslider.js', array('jquery'), '1.0', true );
	
	wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/build/index.js', array(), '8.0.7', true );
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_scripts');
/**
 * Add custom functions here
 */

function kadence_child_config() {

}

add_action('after_setup_theme', 'kadence_child_config');

require_once "hook/cart.php";
require_once "hook/checkout.php";

add_filter("script_loader_tag", "add_module_to_my_script", 10, 3);
function add_module_to_my_script($tag, $handle, $src)
{
    if ("my-script" === $handle) {
        $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    }

    return $tag;
}