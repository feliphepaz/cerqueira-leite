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

// CMB2 Fields

function get_field($key, $page_id = 0) {
	$id = $page_id !== 0 ? $page_id : get_the_ID();
	return get_post_meta($id, $key, true);
}

add_action('cmb2_admin_init', 'cmb2_fields_home');
function cmb2_fields_home() {
	$cmb = new_cmb2_box([
		'id' => 'home_box',
		'title' => 'SLIDE DOS ESPECIALISTAS',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-home.php',
		],
	]);

	$pratos = $cmb->add_field([
		'name' => 'Especialistas',
		'id' => 'especialistas',
		'type' => 'group',
		'repeatable' => true,
		'options' => [
			'group_title' => 'Especialista {#}',
			'add_button' => 'Adicionar Especialista',
			'sortable' => true,
		]
	]);

	$cmb->add_group_field($pratos, [
		'name' => 'Nome',
		'id' => 'nome',
		'type' => 'text',
	]);

	$cmb->add_group_field($pratos, [
		'name' => 'Descrição',
		'id' => 'descricao',
		'type' => 'textarea',
	]);

	$cmb->add_group_field($pratos, [
		'name' => 'Imagem',
		'id' => 'imagem',
		'type' => 'file',
		'query_args' => array(
			'type' => array(
			    'image/jpeg',
			    'image/png',
			),
		),
	]);
}

?>