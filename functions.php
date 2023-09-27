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

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 450 );

function custom_get_the_tag_list() {
	$tags = get_the_tags();

	if ($tags) {
		echo '<div class="flex gap-4">';
		foreach ($tags as $tag) {
			echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="px-3 py-1 rounded-full border border-gray-100 text-sm font-medium text-primary transition duration-300 hover:border-transparent hover:bg-primary hover:text-white dark:border-gray-700 dark:text-gray-300">' . esc_html($tag->name) . '</a>';
		}
		echo '</div>';
	}
}
