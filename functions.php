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

// Habilitar Thumbnails

function ed_support_thumbnails() {
    add_theme_support('post-thumbnails'); // thumbnails
}
add_action('after_setup_theme', 'ed_support_thumbnails');

// CMB2 Fields

function get_field($key, $page_id = 0) {
	$id = $page_id !== 0 ? $page_id : get_the_ID();
	return get_post_meta($id, $key, true);
}

add_action('cmb2_admin_init', 'cmb2_fields_home');
function cmb2_fields_home() {
	$cmb = new_cmb2_box([
		'id' => 'home_box',
		'title' => 'CUSTOM FIELDS DA HOME',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-home.php',
		],
	]);

	$especialistas = $cmb->add_field([
		'name' => 'Slide dos Especialistas',
		'id' => 'especialistas',
		'type' => 'group',
		'repeatable' => true,
		'options' => [
			'group_title' => 'Especialista {#}',
			'add_button' => 'Adicionar Especialista',
			'sortable' => true,
		]
	]);

	$cmb->add_group_field($especialistas, [
		'name' => 'Nome',
		'id' => 'nome_especialista',
		'type' => 'text',
	]);

	$cmb->add_group_field($especialistas, [
		'name' => 'Descrição',
		'id' => 'descricao_especialista',
		'type' => 'textarea',
	]);

	$cmb->add_group_field($especialistas, [
		'name' => 'Imagem ',
		'id' => 'imagem_especialista',
		'type' => 'file',
	]);

	$especialidades = $cmb->add_field([
		'name' => 'Tags das Especialidades',
		'id' => 'especialidades',
		'type' => 'group',
		'repeatable' => true,
		'options' => [
			'group_title' => 'Especialidade {#}',
			'add_button' => 'Adicionar Especialidade',
			'sortable' => true,
		]
	]);

	$cmb->add_group_field($especialidades, [
		'name' => 'Nome',
		'id' => 'nome_especialidade',
		'type' => 'text',
	]);

	$cmb->add_group_field($especialidades, [
		'name' => 'Chamada',
		'id' => 'chamada_especialidade',
		'type' => 'text',
	]);

	$cmb->add_group_field($especialidades, [
		'name' => 'Imagem',
		'id' => 'imagem_especialidade',
		'type' => 'file',
	]);

	$cmb->add_group_field($especialidades, [
		'name' => 'Link',
		'id' => 'link_especialidade',
		'type' => 'text_url',
	]);
}

?>