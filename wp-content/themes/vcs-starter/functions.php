<?php

// Įjungiame post thumbnail

add_theme_support('post-thumbnails');

// Apsibrėžiame stiliaus failus ir skriptus

if (!defined('THEME_FOLDER')) {
	define('THEME_FOLDER', get_bloginfo('template_url'));
}

function theme_scripts()
{

	if (!is_admin()) {

		//wp_register_script(handle, path, dependency, version, load_in_footer);

		wp_deregister_script('jquery');
		wp_register_script('jquery', THEME_FOLDER . '/assets/scripts/jquery.min.js', false, false, true);


		//Registration
		wp_register_script('js_fa', 'https://kit.fontawesome.com/b52cc7db39.js', array('jquery'), false, false);
		wp_register_script('js_owl', THEME_FOLDER . '/assets/scripts/owl.carousel.min.js', array('js_fa'), false, true);
		wp_register_script('js_fancybox', THEME_FOLDER . '/assets/scripts/jquery.fancybox.min.js', array('js_owl'), false, true);
		wp_register_script('js_custom', THEME_FOLDER . '/assets/scripts/custom.js', array('js_fancybox'), false, true);

		//Loading
		wp_enqueue_script('jquery');
		wp_enqueue_script('js_fa');
		wp_enqueue_script('js_owl');
		wp_enqueue_script('js_fancybox');
		wp_enqueue_script('js_custom');
	}
}
add_action('wp_enqueue_scripts', 'theme_scripts');


function theme_stylesheets()
{

	if (defined('THEME_FOLDER')) {
		//wp_register_style(handle, path, dependency, version, devices);
		
		// <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap&subset=latin-ext"
        // rel="stylesheet">

		//Registration
		wp_register_style('owl', THEME_FOLDER . '/assets/css/owl.carousel.min.css', array(), false, 'all');
		wp_register_style('owl-theme', THEME_FOLDER . '/assets/css/owl.theme.default.min.css', array('owl'), false, 'all');
		wp_register_style('fancybox', THEME_FOLDER . '/assets/css/jquery.fancybox.min.css', array('owl-theme'), false, 'all');
		wp_register_style('style', THEME_FOLDER . '/assets/css/style.css', array('fancybox'), false, 'all');
		wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap&subset=latin-ext', array('style'), false, 'all');

		//Loading
		wp_enqueue_style('owl');
		wp_enqueue_style('owl-theme');
		wp_enqueue_style('fancybox');
		wp_enqueue_style('style');
		wp_enqueue_style('fonts');
	}
}
add_action('wp_enqueue_scripts', 'theme_stylesheets');

// Apibrėžiame navigacijas

function register_theme_menus()
{

	register_nav_menus(array(
		'primary-navigation' => __('Primary Navigation')
	));
}

add_action('init', 'register_theme_menus');

// Apibrėžiame widgets juostas

#$sidebars = array( 'Footer Widgets', 'Blog Widgets' );

if (isset($sidebars) && !empty($sidebars)) {

	foreach ($sidebars as $sidebar) {

		if (empty($sidebar)) continue;

		$id = sanitize_title($sidebar);

		register_sidebar(array(
			'name' => $sidebar,
			'id' => $id,
			'description' => $sidebar,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		));
	}
}

if (function_exists('acf_add_options_page')) {
	acf_add_options_page();
}

//logo dydzio nustatymas(pavadinimas, plotis, aukstis, ar karpyti) 
// Sis pakeitimas nera retro active:
add_image_size('logo', 46, 44, false);
add_image_size('main', 4638, 1521, false);
add_image_size('profile_small', 332, 500, false);
add_image_size('profile_medium', 664, 1000, false);
add_image_size('profile_large', 1328, 2000, false);
add_image_size('gallery_small', 350, 200, true);
add_image_size('gallery_big', 1000, 662, false);


function dump($data){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}