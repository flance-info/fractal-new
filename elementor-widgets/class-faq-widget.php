<?php

use Elementor\Basic\FractalBaseElementor;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class FAQ_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'stm-faq';
	}

	public function get_title() {
		return __( 'FAQ Section Fractal Widget', 'fractal' );
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
				'label' => __( 'FAQs', 'fractal' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// Repeater for blog posts
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'post_title',
			[
				'label'       => __( 'Question', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Question', 'fractal' ),
				'placeholder' => __( 'Qestion', 'fractal' ),
			]
		);
		$repeater->add_control(
			'post_description',
			[
				'label'   => __( 'Answer', 'fractal' ),
				'type'    => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Answer', 'fractal' ),
			]
		);
		$this->add_control(
			'faq_items',
			[
				'label'       => __( 'FAQs', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::REPEATER,
				'fields'      => $repeater->get_controls(),
				'default'     => [
					[
						'post_title'       => __( 'How do I know if I need an interior design company in Dubai?', 'fractal' ),
						'post_description' => __( 'If you’re looking to create a functional, aesthetically pleasing space but aren’t sure where to start, an interior design company in Dubai can help. Professional interior design services are essential for transforming your vision into reality, whether it’s for a residential, commercial, or hospitality project.',
							'fractal' ),
					],
					[
						'post_title'       => __( 'What is commercial interior design?', 'fractal' ),
						'post_description' => __( 'Commercial interior design focuses on creating functional and appealing spaces for businesses. This includes offices, retail stores, and other commercial environments. The goal is to enhance the user experience, reflect the brand identity, and improve productivity.',
							'fractal' ),
					],
					[
						'post_title'       => __( 'What does residential interior design include?', 'fractal' ),
						'post_description' => __( 'Residential interior design involves planning and designing living spaces such as homes, apartments, and villas. This includes everything from creative space planning to selecting furniture, lighting, and finishes to create a comfortable, stylish space.',
							'fractal' ),
					],
					[
						'post_title'       => __( 'What is hospitality interior design?', 'fractal' ),
						'post_description' => __( 'Hospitality interior design involves creating luxurious and welcoming environments in hotels and other hospitality venues. It ensures that every space, from the lobby to guest rooms, offers comfort, style, and functionality.', 'fractal' ),
					],
					[
						'post_title'       => __( 'What exactly do interior designers do?', 'fractal' ),
						'post_description' => __( 'Interior design companies in Dubai manage the entire process of designing and decorating spaces. This includes conceptualizing the design, selecting materials, planning layouts, and overseeing execution to ensure a functional and aesthetically pleasing space.',
							'fractal' ),
					],
					[
						'post_title'       => __( 'Is Dubai good for interior designing?', 'fractal' ),
						'post_description' => __( 'Yes, Dubai is an excellent place for interior designing. The city is known for its innovative architecture and high demand for quality interiors, providing designers access to diverse materials and styles.', 'fractal' ),
					],
				],
				'title_field' => '{{{ post_title }}}',
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
			'label',
			[
				'label'       => __( 'Label', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Questions & Answers', 'fractal' ),
				'placeholder' => __( 'Enter Label', 'fractal' ),
			]
		);
		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Frequently Asked Questions', 'fractal' ),
				'placeholder' => __( 'Enter heading', 'fractal' ),
			]
		);
		$this->end_controls_section();
	}

	protected function register_controls() {
		$this->section_heading();
		$this->register_blog_posts_controls();
		$this->register_section_styles();
		$this->register_typography_controls( 'label', 'Label', '.label', 'div' );
		$this->register_typography_controls( 'heading', 'Heading', '.heading', 'h2' );
		$this->register_typography_controls( 'subtitle', 'Subtitle', '.subtitle', 'h3' );
		$this->register_typography_controls( 'description', 'Description', '.description', 'div' );
	}


	protected function render() {
		$settings = $this->get_settings_for_display();
		include get_stylesheet_directory() . '/elementor-templates/custom-faq-template.php';
	}
}
