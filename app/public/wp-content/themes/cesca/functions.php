<?php

function cesca_enqueue_styles1() {
	wp_enqueue_style( 
		'cesca-css',
		get_template_directory_uri() . "/css/style.css"
	);
}

add_action('wp_enqueue_scripts', 'cesca_enqueue_styles1');

function cesca_register_acf_blocks() {
    register_block_type( __DIR__ . '/blocks/cta' );
}

add_action( 'init', 'cesca_register_acf_blocks' );