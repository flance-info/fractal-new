<?php

use Elementor\Basic\FractalBaseElementor;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class CommercialInteriorDesign_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'stm-commercialinteriordesign';
	}

	public function get_title() {
		return __( 'Commercial interior design Section Fractal Widget', 'fractal' );
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
				'default'     => __( 'Professional', 'fractal' ),
				'placeholder' => __( 'Enter Label', 'fractal' ),
			]
		);
		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Commercial Interior Design', 'fractal' ),
				'placeholder' => __( 'Enter heading', 'fractal' ),
			]
		);
		$this->add_control(
			'subtitle',
			[
				'label'       => __( 'Subtitle', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Let’s Transform Your Space Together', 'fractal' ),
				'placeholder' => __( 'Enter subtitle', 'fractal' ),
			]
		);


		$this->add_control(
			'description',
			[
				'label'   => __( 'Description', 'fractal' ),
				'type'    => \Elementor\Controls_Manager::WYSIWYG,
				'default' => __( 'Fractal is a Dubai-based company specializing in modern commercial interior design. We create functional commercial spaces (like offices and shops) that work for you. Our process is transparent and straightforward, ensuring you get the desired results without any hassle.', 'fractal' ),
			]
		);
		$this->add_control(
			'section_background',
			[
				'label'   => __( 'Side Image', 'fractal' ),
				'type'    => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => get_template_directory_uri() . '/fractal/build/modern-colorful-office-interior@3x.webp',
				],
			]
		);
		$this->end_controls_section();
	}


	protected function register_controls() {
		$this->register_content_controls();
		$this->register_section_styles();
		$this->register_typography_controls( 'label', 'Label', '.label', 'div' );
		$this->register_typography_controls( 'heading', 'Heading', '.heading', 'h2' );
		$this->register_typography_controls( 'subtitle', 'Subtitle', '.subtitle', 'h3' );

		$this->register_typography_controls( 'description', 'Description', '.description', 'div' );
	$this->register_universal_style_controls(
			'side_img',                   // Section ID
			'Side Image',                 // Section Label
			'.side-img',                  // CSS Selector
			0,                            // Default Left Position
			100                           // Default Width in %
		);
	$this->register_universal_style_controls(	'label', 'Label','.label',0,100);

	}


	protected function render() {
		$settings = $this->get_settings_for_display();
		include get_stylesheet_directory() . '/elementor-templates/custom-commercial-interior-design-template.php';
	}
}
