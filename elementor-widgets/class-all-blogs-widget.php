<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class BlogDisplay_Widget extends Widget_Base {

	public function get_name() {
		return 'latest_post_display';
	}

	public function get_title() {
		return __( 'Latest Post Display Fractal', 'your-text-domain' );
	}

	public function get_icon() {
		return 'eicon-post-list';
	}

	public function get_categories() {
		return [ 'Fractal' ];
	}

	protected function register_controls() {
		// Section for content controls
		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'your-text-domain' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			]
		);
		// Dropdown for selecting post type
		$this->add_control(
			'post_type',
			[
				'label'   => __( 'Select Post Type', 'your-text-domain' ),
				'type'    => Controls_Manager::SELECT,
				'options' => $this->get_post_types(),
				'default' => 'post',
			]
		);
		// Number of posts to display
		$this->add_control(
			'posts_count',
			[
				'label'   => __( 'Number of Posts', 'your-text-domain' ),
				'type'    => Controls_Manager::NUMBER,
				'default' => 3,
			]
		);
		$this->end_controls_section();
	}

	// Function to get available post types for dropdown
	private function get_post_types() {
		$post_types = get_post_types( [ 'public' => true ], 'objects' );
		$options    = [];
		foreach ( $post_types as $post_type ) {
			$options[ $post_type->name ] = $post_type->label;
		}

		return $options;
	}

	protected function render() {
		$settings    = $this->get_settings_for_display();

		include get_stylesheet_directory() . '/elementor-templates/custom-allblogs-template.php';
	}
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \BlogDisplay_Widget() );
