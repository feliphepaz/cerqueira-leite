<?php

// Função para registrar os scripts e o CSS

function cla_js() {
	wp_register_script('script', get_template_directory_uri() . '/script.js', [], false, true);
	wp_enqueue_script('script');
  }
add_action('wp_enqueue_scripts', 'cla_js');

function cla_css() {
	wp_register_style( 'main-style', get_template_directory_uri() . '/style.css?v='.time(), array(), false, false );
	wp_enqueue_style( 'main-style' );
}
add_action( 'wp_enqueue_scripts', 'cla_css' );

// Funções para Limpar o Header

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus

add_theme_support('menus');

?>