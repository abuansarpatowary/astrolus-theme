<?php

function astrolus_theme_support(): void {
	load_theme_textdomain('astrolus');
	add_theme_support('title-tag');
	$astrolus_custom_header_details = array(
		'header-text' => true,
		'default-text-color' => '#fff',
		'width' => 1200,
		'height' => 600,
		'flex-width' => true,
		'flex-height' => true,
		'video' => true,
	);
	add_theme_support('custom-header', $astrolus_custom_header_details);
	add_theme_support('post-thumbnails');
	add_theme_support( 'custom-logo', array(
		'width'  => 150,
	) );
	add_theme_support('custom-background');
	register_nav_menus(array(
		'main' => __('Main Menu', 'astrolus'),
		'footer' => __('Footer Menu', 'astrolus'),
	));
}
add_action('after_setup_theme', 'astrolus_theme_support');

function astrolus_add_additional_class_on_a($atts, $item) {
	if (property_exists($item, 'classes')) {
		$atts['class'] = 'block md:px-3';
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

//added style in header banner
function astrolus_header_banner_style(){
	if(current_theme_supports('custom-header')){?>

	<style>
		.container h1, p{
			color: #<?php echo get_header_textcolor(); ?>;
		}
	</style>

<?php
}
}
add_action('wp_head', 'astrolus_header_banner_style');


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