<?php

use Elementor\Basic\FractalBaseElementor;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class ContactUsForm_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'stm-contactusform';
	}

	public function get_title() {
		return __( 'Contact Form Fractal Widget', 'fractal' );
	}

	public function get_icon() {
		return 'eicon-form-horizontal';
	}

	public function get_categories() {
		return [ 'fractal' ];
	}

	protected function project_controls() {
		$this->start_controls_section(
			'project_types_section',
			[
				'label' => __( 'Project Types', 'fractal' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// Create a new repeater instance
		$repeater = new \Elementor\Repeater();
		// Add controls to the repeater
		$repeater->add_control(
			'project_type_name',
			[
				'label'       => __( 'Project Type Name', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'New Project Type', 'fractal' ),
				'label_block' => true,
			]
		);
		// Attach the repeater to a control
		$this->add_control(
			'project_types',
			[
				'label'       => __( 'Project Types List', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::REPEATER,
				'fields'      => $repeater->get_controls(),
				'default'     => [
					[ 'project_type_name' => __( 'Type 1', 'fractal' ) ],
					[ 'project_type_name' => __( 'Type 2', 'fractal' ) ],
					[ 'project_type_name' => __( 'Type 3', 'fractal' ) ],
				],
				'title_field' => '{{{ project_type_name }}}',
			]
		);
		$this->end_controls_section();
	}

	protected function register_blog_section_controls() {
		// Section for content controls (Title, Subtitle, Description)
		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'fractal' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// Main Title Control
		$this->add_control(
			'main_title',
			[
				'label'       => __( 'Main Title', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Get in Touch', 'fractal' ),
				'placeholder' => __( 'Enter main title', 'fractal' ),
			]
		);
		// Subtitle Control
		$this->add_control(
			'subtitle',
			[
				'label'       => __( 'Subtitle', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Ready to chat about your interior design project?', 'fractal' ),
				'placeholder' => __( 'Enter subtitle', 'fractal' ),
			]
		);
		// Description Control
		$this->add_control(
			'description',
			[
				'label'       => __( 'Description', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::WYSIWYG,
				'default'     => __( '<p class="m-0">
										We’re excited to&nbsp;help you create your dream outdoor
										or&nbsp;indoor spaces!
									</p>
									<p class="m-0">
										Just fill out the&nbsp;form below, and&nbsp;our team will be in touch
										to&nbsp;get started.
									</p>', 'fractal' ),
				'placeholder' => __( 'Enter description', 'fractal' ),
			]
		);

		// Submit Button Text
		$this->add_control(
			'submit_text',
			[
				'label'       => __( 'Submit Button Text', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Submit', 'fractal' ),
				'placeholder' => __( 'Enter button text', 'fractal' ),
			]
		);
		$this->add_control(
			'side_im_url',
			[
				'label'   => __( 'Side Image', 'fractal' ),
				'type'    => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => get_template_directory_uri() . '/fractal/build/iconsiconly-blacklightchat@2x.webp',
				],
			]
		);
		$this->end_controls_section();
	}

	protected function _register_controls() {

		$this->register_blog_section_controls();
		$this->project_controls();
		$this->register_section_styles();
		$this->register_typography_controls( 'main_title', 'Main Title', '.main-title', 'h2' );
		$this->register_typography_controls( 'subtitle', 'Subtitle', '.subtitle', 'div' );
		$this->register_typography_controls( 'description', 'Description', '.description', 'div' );
		// Register icon arrow controls for submit button
		$this->register_icon_arrow_controls(
			get_template_directory_uri() . '/fractal/build/navigation2.webp',
			get_template_directory_uri() . '/fractal/build/moved-arrow.webp',
			'Submit'
		);
	}


	protected function render() {
		$settings = $this->get_settings_for_display();
		// Add inline editing attributes
		include get_stylesheet_directory() . '/elementor-templates/custom-contactusform-template.php';
		?>

		<?php
	}
}
