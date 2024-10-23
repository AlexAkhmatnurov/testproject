<?php

function cesca_enqueue_styles1() {
	wp_enqueue_style( 
		'cesca-css',
		get_template_directory_uri() . "/css/style.css"
	);
}

add_action('wp_enqueue_scripts', 'cesca_enqueue_styles1');