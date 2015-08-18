<?php
/**
 * Memberlite - Child Theme functions and definitions
 *
 * @package Memberlite 2.0
 * @subpackage Memberlite - Child Theme 1.0
 */
 
//Enqueue scripts and styles.
function memberlite_child_enqueue_styles() {
    wp_enqueue_style( 'memberlite', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'memberlite_child_enqueue_styles' );

//Child theme inherits parent theme settings - based on code by @greenshady from https://core.trac.wordpress.org/ticket/27177#comment:14
function memberlite_child_switch_theme_update_mods() {
	if ( is_child_theme() && false === get_theme_mods() ) {
		$mods = get_option( 'theme_mods_' . get_option( 'template' ) );
		if ( false !== $mods ) {
			foreach ( (array) $mods as $mod => $value ) {
				if ( 'sidebars_widgets' !== $mod )
					set_theme_mod( $mod, $value );
			}
		}
	}
}
add_action( 'switch_theme', 'memberlite_child_switch_theme_update_mods' );
