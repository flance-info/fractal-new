<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
// Register the widget
function register_custom_banner_widget() {
	// Check if Elementor is active
	if ( did_action( 'elementor/loaded' ) ) {
		require_once( get_stylesheet_directory() . '/elementor-widgets/class-fractal-base-elementor.php' );
		require_once( get_stylesheet_directory() . '/elementor-widgets/class-custom-banner-widget.php' );
		require_once( get_stylesheet_directory() . '/elementor-widgets/class-aboutus-widget.php' );
		require_once( get_stylesheet_directory() . '/elementor-widgets/class-our-services-widget.php' );
		require_once( get_stylesheet_directory() . '/elementor-widgets/class-our-works-widget.php' );
		require_once( get_stylesheet_directory() . '/elementor-widgets/class-our-brands-widget.php' );
		require_once( get_stylesheet_directory() . '/elementor-widgets/class-types-projects-widget.php' );
		require_once( get_stylesheet_directory() . '/elementor-widgets/class-interior-design-widget.php' );
		require_once( get_stylesheet_directory() . '/elementor-widgets/class-latest-blogs-widget.php' );
		require_once( get_stylesheet_directory() . '/elementor-widgets/class-gallery-widget.php' );
		require_once( get_stylesheet_directory() . '/elementor-widgets/class-contactus-map-widget.php' );
		require_once( get_stylesheet_directory() . '/elementor-widgets/class-contactus-form-widget.php' );
		require_once( get_stylesheet_directory() . '/elementor-widgets/class-getintouch-banner-widget.php' );
		require_once( get_stylesheet_directory() . '/elementor-widgets/class-second-section-widget.php' );
		require_once( get_stylesheet_directory() . '/elementor-widgets/class-our-missions-widget.php' );
		require_once( get_stylesheet_directory() . '/elementor-widgets/class-our-values-widget.php' );
		require_once( get_stylesheet_directory() . '/elementor-widgets/class-commercial-interior-design-widget.php' );
		require_once( get_stylesheet_directory() . '/elementor-widgets/class-services-interior-design-widget.php' );
		require_once( get_stylesheet_directory() . '/elementor-widgets/class-one-stop-widget.php' );
		require_once( get_stylesheet_directory() . '/elementor-widgets/class-your-journey-widget.php' );
		require_once( get_stylesheet_directory() . '/elementor-widgets/class-why-choose-widget.php' );
		require_once( get_stylesheet_directory() . '/elementor-widgets/class-faq-widget.php' );
require_once( get_stylesheet_directory() . '/elementor-widgets/class-all-blogs-widget.php' );
require_once( get_stylesheet_directory() . '/elementor-widgets/custom_posts.php' );


		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Custom_Banner_Widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Aboutus_Widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \OurServices_Widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \OurWorks_Widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \OurBrands_Widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \TypesProjects_Widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \InteriorDesign_Widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \LatesBlogs_Widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \FractalGallery_Widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \ContactUsMap_Widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \ContactUsForm_Widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \GetInTouch_Widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \SecondSection_Widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \OurMissions_Widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \OurValues_Widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \CommercialInteriorDesign_Widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \ServicesInteriorDesign_Widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \OneShop_Widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \YourJourney_Widget());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \WhyChoose_Widget());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \FAQ_Widget());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Custom_Posts_Widget());

	}
}

add_action( 'elementor/widgets/widgets_registered', 'register_custom_banner_widget' );
function register_fractal_category_on_top( $elements_manager ) {
	// Create the custom 'fractal' category
	$elements_manager->add_category(
		'fractal',
		[
			'title' => __( 'Fractal Widgets', 'fractal' ),
			'icon'  => 'fa fa-plug',
		],
		0 // Priority: setting it to a lower number moves it to the top
	);

	// Optionally, you can reorder other categories if needed
}

add_action( 'elementor/elements/categories_registered', 'register_fractal_category_on_top', 5 );
function move_fractal_category_to_top( $categories ) {
	// Check if the 'fractal' category exists
	if ( isset( $categories['fractal'] ) ) {
		// Remove 'fractal' from its current position
		$fractal_category = $categories['fractal'];
		unset( $categories['fractal'] );
		// Add 'fractal' category back to the beginning of the array
		$categories = array_merge( [ 'fractal' => $fractal_category ], $categories );
	}

	return $categories;
}

add_filter( 'elementor/widgets/categories', 'move_fractal_category_to_top' );


