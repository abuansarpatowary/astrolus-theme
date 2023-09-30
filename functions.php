<?php

function astrolus_theme_support(): void {
	load_theme_textdomain('astrolus');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support( 'custom-logo', array(
		'width'  => 150,
	) );
	register_nav_menus(array(
		'main' => __('Main Menu', 'astrolus'),
		'footer' => __('Footer Menu', 'astrolus'),
	));
}
add_action('after_setup_theme', 'astrolus_theme_support');

function astrolus_add_additional_class_on_a($atts, $item) {
	if (property_exists($item, 'classes')) {
		$atts['class'] = 'relative text-gray-600 dark:text-white hover:text-yellow-500 before:absolute before:-inset-2 before:w-full before:h-0.5 before:origin-left dark:before:bg-yellow-500 before:mx-auto before:mt-auto before:rounded-full before:bg-yellow-800 before:transition before:scale-x-0 group-hover:before:scale-x-100';
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'astrolus_add_additional_class_on_a',  10, 2 );

function astrolus_add_additional_class_on_li($classes, $item) {
	if (property_exists($item, 'classes')) {
		$classes[] = 'block md:px-3 group';
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'astrolus_add_additional_class_on_li', 10, 2);

function astrolus_enequeue_scripts(){
	
	wp_enqueue_script('tailwind-js', 'https://cdn.tailwindcss.com', array(), '1.0.0', false);
}
add_action('wp_enqueue_scripts', 'astrolus_enequeue_scripts');

// added_custom_tag style
function astrolus_custom_tag_list() {
	$tags = get_the_tags();

	if ($tags) {
		echo '<div class="flex gap-4">';
		foreach ($tags as $tag) {
			echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="px-3 py-1 rounded-full border border-gray-100 text-sm font-medium text-primary transition duration-300 hover:border-transparent hover:bg-primary hover:text-white dark:border-gray-700 dark:text-gray-300">' . esc_html($tag->name) . '</a>';
		}
		echo '</div>';
	}
}


function astrolus_widgets_register(){
	register_sidebar(array(
		'name' => _('Footer Widget', 'astrolus'),
		'id' => 'footer_widget',
		'description' => _('Footer Widget Area', 'astrolus'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	));
}
add_action('widgets_init', 'astrolus_widgets_register');