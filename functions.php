<?php
/**
 * Memberlite - Child Theme functions and definitions
 *
 * @package Memberlite 2.0
 * @subpackage Memberlite - Child Theme 1.0
 */
 
 /**
 * Enqueue scripts and styles.
 */
function memberlite_child_enqueue_styles() {
    wp_enqueue_style( 'memberlite', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'memberlite_child_enqueue_styles' );
