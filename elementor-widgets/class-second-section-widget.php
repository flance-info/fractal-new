<?php

use Elementor\Basic\FractalBaseElementor;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class SecondSection_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'stm-secondsection';
	}

	public function get_title() {
		return __( 'Second Section Fractal Widget', 'fractal' );
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
			'heading',
			[
				'label'       => __( 'Heading', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Have an Interior Design Project in Mind?', 'fractal' ),
				'placeholder' => __( 'Enter heading', 'fractal' ),
			]
		);
		$this->add_control(
			'label',
			[
				'label'       => __( 'Label', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => '',
				'placeholder' => __( 'Enter Label', 'fractal' ),
			]
		);
		$this->add_control(
			'subtitle',
			[
				'label'   => __( 'Subtitle', 'fractal' ),
				'type'    => \Elementor\Controls_Manager::WYSIWYG,
				'default' => __(
					'At Fractal Design Studio, we’re here to turn your interior design ideas into reality. Whether you’re envisioning a stylish home, a modern office, a luxurious villa, or a chic hotel, our team of experts is ready to help.',
					'fractal'
				),
			]
		);
		$this->add_control(
			'description',
			[
				'label'   => __( 'Description', 'fractal' ),
				'type'    => \Elementor\Controls_Manager::WYSIWYG,
				'default' => __(
					'As a leading provider of interior design in Dubai, we specialize in creating spaces that reflect your unique style and meet your functional needs. From comprehensive renovation projects to precise fit-out services, we manage every detail to ensure a seamless experience. Our commitment to quality and innovation guarantees that your project will stand out, enhancing both aesthetics and functionality. Get in touch with us today to start your journey toward transforming your space into something extraordinary.',
					'fractal'
				),
			]
		);
		// Background Image Control
		$this->add_control(
			'section_background',
			[
				'label'   => __( 'Section Side Image', 'fractal' ),
				'type'    => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => get_template_directory_uri() . '/fractal/build/indoor-luxury-meets-natural-charm.webp',
				],
			]
		);
		$this->end_controls_section();
	}

	protected function register_controls() {

		$this->register_content_controls();
		$this->register_section_styles();
		$this->register_universal_style_controls(
			'side_img',                   // Section ID
			'Side Image',                 // Section Label
			'.side-img',                  // CSS Selector
			0,                            // Default Left Position
			100                           // Default Width in %
		);
		$this->register_typography_controls( 'label', 'label', '.label', 'div' );
		$this->register_typography_controls( 'heading', 'Heading', '.heading', 'h2' );
		$this->register_typography_controls( 'subtitle', 'Subtitle', '.subtitle', 'div' );
		$this->register_typography_controls( 'description', 'Description', '.description', 'div' );


	}


	protected function render() {
		$settings = $this->get_settings_for_display();
		include get_stylesheet_directory() . '/elementor-templates/custom-second-section-template.php';
	}
}
