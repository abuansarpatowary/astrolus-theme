<?php

function astrolus_theme_support(): void {
	load_theme_textdomain('astrolus');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'astrolus_theme_support');

function astrolus_enequeue_scripts(){
	
	wp_enqueue_script('tailwind-js', 'https://cdn.tailwindcss.com', array(), '1.0.0', false);
}
add_action('wp_enqueue_scripts', 'astrolus_enequeue_scripts');


