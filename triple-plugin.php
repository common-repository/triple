<?php
 
/*
 
Plugin Name: Triple
 
Plugin URI: https://wordpress.org/plugins/Triple
 
Description: Handmade plugin for Triple customers
 
Version: 1.0
 
Author: Triple
 
Author URI: https://triple.nl/
 
License: GPLv2 or later
 
Text Domain: Triple
 
*/

/* Update Checker */

/* Log in */
function triple_login_stylesheet() {
	
    wp_enqueue_style( 'custom-login', plugin_dir_url(__FILE__). '/styles/login-style-triple.css');
}
add_action( 'login_enqueue_scripts', 'triple_login_stylesheet' );

/* Styling */
function triple_admin_color_scheme() {
  wp_admin_css_color( 'triple', __( 'Triple' ), 
	plugins_url( './styles/triple.css', __FILE__),
    array( '#587f40', '#fff', '#883031' , '#82b762')
  );
}
add_action('admin_init', 'triple_admin_color_scheme');

/* Logo Triple */
function triple_logo()
{
	wp_register_style('triple_logo', plugins_url('./styles/style.css', __FILE__));
	wp_enqueue_style('triple_logo');

}
add_filter('wp_before_admin_bar_render', 'triple_logo', 900);

/* About Triple */
function triple_add_link_to_admin_bar($admin_bar) {
	$args = array(
        'parent' => 'wp-logo',
		'id' => 'about-triple',
        'title' => 'About Triple', 
        'href' => 'https://www.triple-interactive.nl/over-ons/',
		'meta' => array(
            'target' => '_blank',
        )
    );
    $admin_bar->add_node($args);
}
	
add_action('admin_bar_menu', 'triple_add_link_to_admin_bar', 999);

/* Support Triple */
function triple_add_link_to_admin_bar2($admin_bar) {
	$args = array(
        'parent' => 'wp-logo-external',
		'id' => 'support-triple',
        'title' => 'Support Triple', 
        'href' => 'https://www.triple-interactive.nl/email-instellen/',
		'meta' => array(
            'target' => '_blank',
        )
    );
    $admin_bar->add_node($args);
}
	
add_action('admin_bar_menu', 'triple_add_link_to_admin_bar2', 999);

/* Hulp op afstand */
function triple_add_link_to_admin_bar3($admin_bar) {
	$args = array(
        'parent' => 'wp-logo-external',
		'id' => 'hulp-triple',
        'title' => 'Hulp op afstand', 
        'href' => 'https://www.triple-interactive.nl/hulp-op-afstand/',
		'meta' => array(
            'target' => '_blank',
        )
    );
    $admin_bar->add_node($args);
}
	
add_action('admin_bar_menu', 'triple_add_link_to_admin_bar3', 999);

?>