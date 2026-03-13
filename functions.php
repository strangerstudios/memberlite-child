<?php
/**
 * Memberlite - Child Theme functions and definitions
 *
 * @package Memberlite Child
 */

define('MEMBERLITE_CHILD_VERSION', '1.0');

/**
 * Enqueue scripts and styles.
 */
function memberlite_child_enqueue_styles() {
	wp_enqueue_style('memberlite_style', get_template_directory_uri() .'/style.css', array('memberlite_main_style'), MEMBERLITE_VERSION);
	wp_enqueue_style('memberlite_pmpro_style', get_stylesheet_directory_uri() .'/style.css', array('memberlite_style'), MEMBERLITE_CHILD_VERSION);
}
add_action( 'wp_enqueue_scripts', 'memberlite_child_enqueue_styles' );
