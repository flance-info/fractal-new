<?php

// phpcs:ignoreFile
if ( ! function_exists( 'vcn_starter_styles_and_scripts' ) && ! is_admin() ) {
	function vcn_starter_styles_and_scripts() {

		/*Styles*/
		wp_enqueue_style( 'starter-style', get_stylesheet_uri(), array(), VCN_THEME_VERSION );
		wp_enqueue_style( 'starter-base', VCN_TEMPLATE_URI . '/assets/css/style.css', array(), VCN_THEME_VERSION );

	}
}
add_action( 'wp_enqueue_scripts', 'vcn_starter_styles_and_scripts' );
function vision_prime_enqueue_styles() {
	wp_enqueue_script(
		'homepage-script',
		get_template_directory_uri() . '/fractal/build/main.js',
		array( 'jquery' ),
		time(),
		true
	);

	wp_register_script(
		'homepage-script_elementor',
		get_template_directory_uri() . '/fractal/build/main_elementor.js',
		array( 'jquery' ),
		time(),
		true
	);

	wp_enqueue_script(
		'alpinejs-intersect',
		'https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js',
		array(),
		null,
		true
	);
	wp_enqueue_script(
		'alpinejs',
		'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js',
		array(),
		null,
		true
	);

	wp_enqueue_style(
		'freactal-setup-global',
		get_template_directory_uri() . '/fractal/build/global.css',
		array(),
		filemtime( get_template_directory() . '/fractal/build/global.css' )
	);
	// Enqueue Google Fonts
	wp_enqueue_style(
		'fractal-google-fonts-groteks',
		'https://fonts.googleapis.com/css2?family=Space Grotesk:wght@400;500;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'fractal-google-fonts-merriweather',
		'https://fonts.googleapis.com/css2?family=Merriweather:wght@400&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'fractal-google-fonts-dm-sans',
		'https://fonts.googleapis.com/css2?family=DM Sans:wght@700&display=swap',
		array(),
		null
	);

	wp_register_style( 'starter-navigation', get_template_directory_uri() . '/assets/css/components/header/navigation.css', array(), time() );
		wp_enqueue_script( 'starter-header', get_template_directory_uri() . '/assets/js/components/header/header.js', array( 'jquery' ), time(), true );
		wp_enqueue_style( 'starter-navigation' );
}

add_action( 'wp_enqueue_scripts', 'vision_prime_enqueue_styles' );