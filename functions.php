<?php
/**
 * Functions.
 *
 * @package Page Builder Framework Child
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

/**
 * Child theme setup.
 */
function wpbf_child_theme_setup() {

	// Textdomain.
	load_child_theme_textdomain( 'page-builder-framework-child', WPBF_CHILD_THEME_DIR . '/languages' );

}
add_action( 'after_setup_theme', 'wpbf_child_theme_setup' );

/**
 * Enqueue scripts & styles.
 */
function wpbf_child_scripts() {

	// Styles.
	wp_enqueue_style( 'wpbf-style-child', WPBF_CHILD_THEME_URI . '/style.css', false, WPBF_CHILD_VERSION );

	// Scripts (uncomment if needed).
	// wp_enqueue_script( 'wpbf-site-child', WPBF_CHILD_THEME_URI . '/js/site-child.js', false, WPBF_CHILD_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'wpbf_child_scripts', 13 );

function montheme_supports () {
    add_theme_support('title-tag'); 
}


function montheme_registers_assets() {
    wp_register_style('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    //Lie la bibliothèque Bootstrap à Popper, Jquery -> ne peuvent pas être importé avant Bootstrap
    wp_register_script('bootstrap','https://code.jquery.com/jquery-3.3.1.slim.min.js', ['popper','jquery'], [], false, true);
    wp_register_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', [], false, true);
    wp_register_script('jquery','https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

//Lance les importations
add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts','montheme_registers_assets');
