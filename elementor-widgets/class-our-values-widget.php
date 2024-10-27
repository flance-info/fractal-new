<?php

use Elementor\Basic\FractalBaseElementor;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class OurValues_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'stm-ourvalues';
	}

	public function get_title() {
		return __( 'Our values Section Fractal Widget', 'fractal' );
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
			'subtitle',
			[
				'label'       => __( 'Subtitle', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Enter Subtitle here', 'fractal' ),
				'placeholder' => __( 'Enter subtitle', 'fractal' ),
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

		$repeater->add_control(
			'values_icon',
			[
				'label'   => __( 'Values Icon', 'fractal' ),
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
				'title_field' => '{{{ subtitle }}}',
				'default'     => [
					[
						'subtitle'            => __( 'Commitment to Excellence in Interior Design', 'fractal' ),
						'description'        => __( 'We prioritize excellence in every interior design project, ensuring each space is not only aesthetically pleasing but also functional. Our dedication to quality craftsmanship and innovative design sets us apart, making Fractal a leader in the industry.', 'fractal' ),
						'values_icon' => [
							'url' => get_template_directory_uri() . '/fractal/build/furniture@2x.webp', // Default image for the first item
						],
					],
					[
						'subtitle'            => __( 'Collaboration with Leading Fit-Out Companies', 'fractal' ),
						'description'        => __( 'Collaboration is key to our success. We partner with top fit-out companies to deliver seamless and efficient project execution. By working closely with experts in the field, we ensure that every aspect of the design and renovation process meets the highest standards.', 'fractal' ),
						'values_icon' => [
							'url' => get_template_directory_uri() . '/fractal/build/architecture-3938580@2x.webp', // Default image for the second item
						],
					],
					[
						'subtitle'            => __( 'Integrity in Building in Dubai', 'fractal' ),
						'description'        => __( 'Integrity is at the core of everything we do. Whether building in Dubai or managing complex renovations, we adhere to ethical practices, transparent communication, and a commitment to delivering projects on time and within budget.', 'fractal' ),
						'values_icon' => [
							'url' => get_template_directory_uri() . '/fractal/build/company-2798585@2x.webp', // Default image for the second item
						],
					],
				],
			]
		);
		$this->end_controls_section();
	}


	protected function register_controls() {
		$this->start_controls_section(
			'content_section_heading',
			[
				'label' => __( 'Section Heading', 'fractal' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Enter Heading here', 'fractal' ),
				'placeholder' => __( 'Enter heading', 'fractal' ),
			]
		);
		$this->end_controls_section();
		$this->register_content_controls();
		$this->register_section_styles();
		$this->register_typography_controls( 'heading', 'Heading', '.heading', 'h2' );
		$this->register_typography_controls( 'subtitle', 'Subtitle', '.subtitle', 'h3' );
		$this->register_typography_controls( 'description', 'Description', '.description', 'div' );
	}


	protected function render() {
		$settings = $this->get_settings_for_display();
		include get_stylesheet_directory() . '/elementor-templates/custom-our-values-template.php';
	}
}
