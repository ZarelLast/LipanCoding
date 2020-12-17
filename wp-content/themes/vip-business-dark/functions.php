<?php
/**
 * Child Theme functions and definitions.
 * This theme is a child theme for Vip Business.
 *
 * @package Vip_Business_Dark
 * @author  FireflyThemes https://fireflythemes.com
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU Public License
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 */

/**
 * Theme functions and definitions.
 */
function vip_business_dark_enqueue_styles() {
	// Parent Theme stylesheet.
	wp_enqueue_style( 'vip-business-style', get_template_directory_uri() . '/style.css', null, vip_business_get_file_mod_date( get_template_directory() . '/style.css' ) );

	wp_enqueue_style( 'vip-business-dark-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'vip-business-style' ),
        vip_business_get_file_mod_date( get_stylesheet_directory() . '/style.css' )
    );
}
add_action(  'wp_enqueue_scripts', 'vip_business_dark_enqueue_styles' );

/**
 * Loads the child theme textdomain.
 */
function vip_business_dark_setup() {
    load_child_theme_textdomain( 'vip-business-dark', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'vip_business_dark_setup', 11 );
