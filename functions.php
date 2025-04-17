<?php
/**
 * Memberlite - Child Theme functions and definitions
 *
 * @package Memberlite Child
 */
 
/**
 * Enqueue scripts and styles.
 *
 */
function memberlite_child_enqueue_styles() {
    wp_enqueue_style( 'memberlite', get_template_directory_uri() . '/style.css', array(), MEMBERLITE_VERSION );
}
add_action( 'wp_enqueue_scripts', 'memberlite_child_enqueue_styles' );
