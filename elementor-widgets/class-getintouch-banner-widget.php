<?php

use Elementor\Basic\FractalBaseElementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class GetInTouch_Widget extends FractalBaseElementor {
	public function get_name() {
		return 'stm-getintouch';
	}

	public function get_title() {
		return __( 'Top Banner Fractal Widget', 'fractal' );
	}

	public function get_icon() {
		return 'eicon-form-horizontal';
	}

	public function get_categories() {
		return [ 'fractal' ];
	}

	protected function register_content_controls() {
		$this->start_controls_section(
				'content_section',
				[
						'label' => __( 'Content', 'fractal' ),
						'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);
		$this->add_control(
				'label',
				[
						'label'       => __( 'Label', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'Contact Us', 'fractal' ),
						'placeholder' => __( 'Enter label', 'fractal' ),
				]
		);
		$this->add_control(
				'heading',
				[
						'label'       => __( 'Heading', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'Get in Touch', 'fractal' ),
						'placeholder' => __( 'Enter heading', 'fractal' ),
				]
		);
		$this->add_control(
				'description',
				[
						'label'   => __( 'Description', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::WYSIWYG,
						'default' => __(
								'Fractal Design Studio: Dubai’s choice for exceptional interior design and renovation, creating beautiful and functional spaces.',
								'fractal'
						),
				]
		);
		// Background Image Control
		$this->add_control(
				'section_background',
				[
						'label'   => __( 'Section Background', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::MEDIA,
						'default' => [
								'url' => get_template_directory_uri() . '/fractal/build/unsplashmanhvw0nddy1.webp',
						],
				]
		);


		$this->end_controls_section();
	}

	protected function _register_controls() {
		$this->register_content_controls();
		$this->register_section_styles() ;
		$this->register_typography_controls( 'label', 'Label', '.label', 'div' );
		$this->register_typography_controls( 'heading', 'Heading', '.heading', 'h1' );
		$this->register_typography_controls( 'description', 'Description', '.description', 'div' );
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

			include get_stylesheet_directory() . '/elementor-templates/custom-getintouch-banner-template.php';
	}
}
