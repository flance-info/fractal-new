<?php

use Elementor\Basic\FractalBaseElementor;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class OurMissions_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'stm-ourmissions';
	}

	public function get_title() {
		return __( 'Our Missions Section Fractal Widget', 'fractal' );
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
		// Create a new repeater instance
		$repeater = new \Elementor\Repeater();
		// Heading Control in Repeater
		$repeater->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Enter heading here', 'fractal' ),
				'placeholder' => __( 'Enter heading', 'fractal' ),
			]
		);
		// Description Control in Repeater
		$repeater->add_control(
			'description',
			[
				'label'   => __( 'Description', 'fractal' ),
				'type'    => \Elementor\Controls_Manager::WYSIWYG,
				'default' => __( 'Enter description here', 'fractal' ),
			]
		);
		// Background Image Control in Repeater
		$repeater->add_control(
			'section_background',
			[
				'label'   => __( 'Background Image', 'fractal' ),
				'type'    => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		// Add the Repeater control to the main control section
		$this->add_control(
			'content_repeater',
			[
				'label'       => __( 'Content Items', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::REPEATER,
				'fields'      => $repeater->get_controls(),
				'title_field' => '{{{ heading }}}',
				'default'     => [
					[
						'heading'            => __( 'Our Mission', 'fractal' ),
						'description'        => __( 'At Fractal Design Studio, our mission is to deliver the best interior design services in Dubai by creating spaces that reflect our clients’ individuality and lifestyle. We focus on innovation, quality, and client satisfaction, ensuring every project exceeds expectations, from modern villas to luxury offices and hotels.', 'fractal' ),
						'section_background' => [
							'url' => get_template_directory_uri() . '/fractal/build/image@2x.webp', // Default image for the first item
						],
					],
					[
						'heading'            => __( 'Our Vision', 'fractal' ),
						'description'        => __( 'Our vision at Fractal Design Studio is to become the leading team of designers in Dubai, recognized for transforming ordinary spaces into extraordinary environments. We strive to inspire and elevate the industry by consistently delivering innovative, high-quality designs that cater to the diverse needs of our clients.', 'fractal' ),
						'section_background' => [
							'url' => get_template_directory_uri() . '/fractal/build/image-1@2x.webp', // Default image for the second item
						],
					],
				],
			]
		);
		$this->end_controls_section();
	}


	protected function register_controls() {
		$this->register_content_controls();
		$this->register_section_styles();
		$this->register_typography_controls( 'heading', 'Heading', '.heading', 'h3' );
		$this->register_typography_controls( 'description', 'Description', '.description', 'div' );
	}


	protected function render() {
		$settings = $this->get_settings_for_display();
		include get_stylesheet_directory() . '/elementor-templates/custom-our-missions-template.php';
	}
}
