<?php

use Elementor\Basic\FractalBaseElementor;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class ServicesInteriorDesign_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'stm-servicesinteriordesign';
	}

	public function get_title() {
		return __( 'Services interior design Section Fractal Widget', 'fractal' );
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
				'label' => __( 'Services Interior Design', 'fractal' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// Repeater for blog posts
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'post_image',
			[
				'label'   => __( 'Service Image', 'fractal' ),
				'type'    => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$repeater->add_control(
			'post_image_hover',
			[
				'label'   => __( 'Service Hover Image', 'fractal' ),
				'type'    => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$repeater->add_control(
			'post_title',
			[
				'label'       => __( 'Service Title', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Service Title', 'fractal' ),
				'placeholder' => __( 'Enter Service title', 'fractal' ),
			]
		);
		$repeater->add_control(
			'post_description',
			[
				'label'   => __( 'Service Description', 'fractal' ),
				'type'    => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Service description goes here.', 'fractal' ),
			]
		);
		$repeater->add_control(
			'post_link',
			[
				'label'       => __( 'Service Link', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'fractal' ),
				'default'     => [
					'url' => '#',
				],
			]
		);
		$this->add_control(
			'blog_posts',
			[
				'label'       => __( 'Service Posts', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::REPEATER,
				'fields'      => $repeater->get_controls(),
				'default'     => [
					[
						'post_title'       => __( 'Shop Interior Design', 'fractal' ),
						'post_description' => __( 'Fractal designs practical and attractive shop interiors that reflect your brand and enhance customer experience. Our team ensures your shop’s layout is functional and visually appealing.', 'fractal' ),
						'post_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/the-green-nook-cafe--artisan-boutique@2x.webp' ],
						'post_image_hover' => [ 'url' => get_template_directory_uri() . '/fractal/build/glasses-girl.webp' ],
						'post_link'        => [ 'url' => '' ],
					],
					[
						'post_title'       => __( 'Office Interior Design and Renovation', 'fractal' ),
						'post_description' => __( 'As the best interior design company, we specialize in office interior design and renovation, interior architecture, transforming spaces for companies of all sizes. Our designs prioritize productivity and create a comfortable, efficient work environment.',
							'fractal' ),
						'post_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/modern-interior-living-space-with-natural-touches@2x.webp' ],
						'post_image_hover' => [ 'url' => get_template_directory_uri() . '/fractal/build/glasses-girl.webp' ],
						'post_link'        => [ 'url' => '' ],
					],
					[
						'post_title'       => __( 'Modern Business and Small Salon Design', 'fractal' ),
						'post_description' => __( 'We create modern interior designs for businesses, including small salons. Our approach focuses on maximizing space, ensuring a stylish and functional environment that meets your specific needs.', 'fractal' ),
						'post_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/elegant-hair-salon-interior@2x.webp' ],
						'post_image_hover' => [ 'url' => get_template_directory_uri() . '/fractal/build/glasses-girl.webp' ],
						'post_link'        => [ 'url' => '' ],
					],
					[
						'post_title'       => __( 'Mall Interior Design for Companies', 'fractal' ),
						'post_description' => __( 'We offer comprehensive mall design services for companies, creating inviting interiors that attract and retain customers. Our designs balance aesthetics with functionality to enhance the shopping experience.', 'fractal' ),
						'post_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/futuristic-meshlit-lounge@2x.webp' ],
						'post_image_hover' => [ 'url' => get_template_directory_uri() . '/fractal/build/glasses-girl.webp' ],
						'post_link'        => [ 'url' => '' ],
					],
					[
						'post_title'       => __( 'Car Showroom Design', 'fractal' ),
						'post_description' => __( 'Our team designs car showrooms that highlight your vehicles and engage customers. We focus on creating spaces that are both visually appealing and conducive to making sales.', 'fractal' ),
						'post_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/futuristic-sports-car-and-architecture@2x.webp' ],
						'post_image_hover' => [ 'url' => get_template_directory_uri() . '/fractal/build/glasses-girl.webp' ],
						'post_link'        => [ 'url' => '' ],
					],
					[
						'post_title'       => __( 'Medical Center Interior Design', 'fractal' ),
						'post_description' => __( 'We design efficient and comfortable interiors for medical centers. Our focus is on creating welcoming spaces that prioritize patient comfort and support smooth operations.', 'fractal' ),
						'post_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/modern-dental-office2@2x.webp' ],
						'post_image_hover' => [ 'url' => get_template_directory_uri() . '/fractal/build/glasses-girl.webp' ],
						'post_link'        => [ 'url' => '' ],
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
				'default'     => __( 'Commercial', 'fractal' ),
				'placeholder' => __( 'Enter Label', 'fractal' ),
			]
		);
		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Interior Design Services We Provide', 'fractal' ),
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
		include get_stylesheet_directory() . '/elementor-templates/custom-services-interior-design-template.php';
	}
}
