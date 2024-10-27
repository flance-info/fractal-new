<?php

use Elementor\Basic\FractalBaseElementor;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class WhyChoose_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'stm-whychoose';
	}

	public function get_title() {
		return __( 'Why Choose Fractal Widget', 'fractal' );
	}

	public function get_icon() {
		return 'eicon-form-horizontal';
	}

	public function get_categories() {
		return [ 'fractal' ];
	}


	protected function register_blog_posts_controls() {
		$this->start_controls_section(
			'blog_posts_section',
			[
				'label' => __( 'Why Choose Section', 'fractal' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// Repeater for blog posts
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'heading',
			[
				'label'       => __( 'Reason Title', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Reason Title', 'fractal' ),
				'placeholder' => __( 'Reason Title', 'fractal' ),
			]
		);
		$repeater->add_control(
			'description',
			[
				'label'   => __( 'Reason  Description', 'fractal' ),
				'type'    => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Reason  description goes here.', 'fractal' ),
			]
		);
		$this->add_control(
			'content_blocks',
			[
				'label'       => __( 'Content Blocks', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::REPEATER,
				'fields'      => $repeater->get_controls(),
				'default'     => [
					[
						'heading'     => __( 'Expertise in Dubai’s Interior Design Market', 'fractal' ),
						'description' => __( 'As a leading interior design company in Dubai, we have the best designers, materials, and industry connections at our fingertips—things you won’t easily find elsewhere. So, not only will your design be stunning, but it’ll also come together without breaking the bank.',
							'fractal' ),
					],
					[
						'heading'     => __( 'Comprehensive Design Services', 'fractal' ),
						'description' => __( 'We take care of every detail, from the first sketch to the final touches. Whether it’s your house, office, or villa, we handle it all—space planning, material selection, and finishing—making the process smooth and the results spectacular.', 'fractal' ),
					],
					[
						'heading'     => __( 'Specialization in Modern Interiors', 'fractal' ),
						'description' => __( 'We specialize in modern interiors for bedrooms, bathrooms, living rooms, and Majlis. Our designs strike a fine balance of contemporary style with practical solutions, creating spaces that look great and are perfect for everyday living.', 'fractal' ),
					],
					[
						'heading'     => __( 'Detail-Driven Designing and Decoration', 'fractal' ),
						'description' => __( 'We emphasize detailed designing and decoration, ensuring every element of your space is thoughtfully considered. From the initial layout to the final decorative touches, our meticulous approach guarantees a polished, cohesive interior.', 'fractal' ),
					],
					[
						'heading'     => __( 'Top-Quality Furniture and Finishing', 'fractal' ),
						'description' => __( 'As one of the best interior design companies, we only work with top-quality furniture and materials to ensure your interior spaces are both beautiful and durable. Our commitment to quality means you’ll receive a top-tier design that stands the test of time.',
							'fractal' ),
					],
				],
				'title_field' => '{{{ heading }}}',
			]
		);
		$this->end_controls_section();
	}

	protected function section_heading() {
		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Section headers', 'fractal' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Why Choose Fractal Design?', 'fractal' ),
				'placeholder' => __( 'Enter heading', 'fractal' ),
			]
		);
		$this->add_control(
			'section_background',
			[
				'label'   => __( 'Section Side Image', 'fractal' ),
				'type'    => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => get_template_directory_uri() . '/fractal/build/modern-monochrome-kitchen-with-artistic-lighting.webp',
				],
			]
		);
		$this->end_controls_section();
	}

	protected function register_controls() {
		$this->section_heading();
		$this->register_blog_posts_controls();
		$this->register_section_styles();
		//$this->register_typography_controls( 'label', 'Label', '.label', 'b' );
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

	}


	protected function render() {
		$settings = $this->get_settings_for_display();
		include get_stylesheet_directory() . '/elementor-templates/custom-whychoose-template.php';
	}
}
