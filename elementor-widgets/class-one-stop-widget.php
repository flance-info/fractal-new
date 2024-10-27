<?php

use Elementor\Basic\FractalBaseElementor;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class OneShop_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'stm-oneshop';
	}

	public function get_title() {
		return __( 'One Shop Services Sections Fractal Widget', 'fractal' );
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
				'label' => __( 'Designs Content', 'fractal' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// Repeater for blog posts
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'post_image',
			[
				'label'   => __( 'Designs Image', 'fractal' ),
				'type'    => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$repeater->add_control(
			'post_title',
			[
				'label'       => __( 'Designs Title', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Service Title', 'fractal' ),
				'placeholder' => __( 'Enter Service title', 'fractal' ),
			]
		);
		$repeater->add_control(
			'post_subtitle',
			[
				'label'       => __( 'Designs Subtitle Title', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::WYSIWYG,
				'default'     => __( 'Service Subtitle', 'fractal' ),
				'placeholder' => __( 'Enter Service Subtitle', 'fractal' ),
			]
		);
		$repeater->add_control(
			'post_description',
			[
				'label'   => __( 'Service Description', 'fractal' ),
				'type'    => \Elementor\Controls_Manager::WYSIWYG,
				'default' => __( 'Service description goes here.', 'fractal' ),
			]
		);

		$this->add_control(
			'blog_posts',
			[
				'label'       => __( 'Designs Blocks', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::REPEATER,
				'fields'      => $repeater->get_controls(),
				'default'     => [
					[
						'post_title'       => __( 'Your One-Stop Shop for Commercial Interior Design', 'fractal' ),
						'post_subtitle'    => __( 'Fractal offers a comprehensive range of interior design services in Dubai, from initial concept and creative space planning development to final project execution.', 'fractal' ),
						'post_description' => __( '<p class="m-0">
						Our turnkey solutions ensure a seamless and stress-free
						experience, allowing you to focus on your business while we
						handle all the details.
					</p>
					<p class="m-0">&nbsp;</p>
					<p class="m-0">
						Whether you need a complete office renovation, a custom-designed
						retail space, or a state-of-the-art hospitality venue, our team
						of&nbsp;experienced designers and craftsmen will deliver very
						exceptional results. Just sit back and watch us bring that dream
						interior to life.
					</p>', 'fractal' ),
						'post_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/contemporary-luminescence-atrium@3x.webp' ],
					],
					[
						'post_title'       => __( 'Affordable, High-Quality Interior Design', 'fractal' ),
						'post_subtitle'    => __( 'We understand that budget constraints can be a major factor when it comes to residential and commercial spaces interior design.', 'fractal' ),
						'post_description' => __( '<p class="m-0">
						That’s why we offer competitive pricing without compromising
						on&nbsp;quality, unlike other commercial interior design companies.
					</p>
					<p class="m-0">&nbsp;</p>
					<p class="m-0">
						Our interior designers will work with you to develop a design
						that meets your specific needs and budget. Whether you’re a
						small shop owner or a large corporation, we can create a
						stunning interior that will help you achieve your goals. We
						believe that every business deserves a beautiful and functional
						workspace, regardless of&nbsp;their&nbsp;budget.
					</p>', 'fractal' ),
						'post_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/modern-office-interior-with-vibrant-accents@3x.webp' ],
					],
					[
						'post_title'       => __( 'Award-Winning Designs for Every Business', 'fractal' ),
						'post_subtitle'    => __( 'Fractal is proud to have a portfolio of award-winning commercial interior design projects.', 'fractal' ),
						'post_description' => __( '<p class="m-0">
						As one of the best interior design firms, our versatile approach
						allows us to create unique and functional spaces for all kinds
						of businesses, from modern office space to upscale mall design.
						Whether your company needs a design that is bold and innovative
						or classic and&nbsp;timeless, we can deliver a space that will make
						a&nbsp;lasting&nbsp;impression.
					</p>
					<p class="m-0">&nbsp;</p>
					<p class="m-0">
						We use the latest design trends and technologies to create
						sustainable and&nbsp;efficient spaces.
					</p>', 'fractal' ),
						'post_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/modern-office-seating-area@3x.webp' ],
					],
					[
						'post_title'       => __( 'Start Your Commercial Interior Design Project with Us', 'fractal' ),
						'post_subtitle'    => __( 'Why go for ordinary when you can choose Fractal for something extraordinary?', 'fractal' ),
						'post_description' => __( 'Get in touch with Fractal, one of the top interior design
					companies, today to schedule a consultation. Our skilled interior
					designers will sit down with you, get to know your vision and work
					with you to create a space that’s both beautiful and functional.
					Plus, we’ll do it all without breaking the bank. Whether you’re
					designing a shop, planning a renovation, or anything in between,
					we’ve got you covered.', 'fractal' ),
						'post_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/contemporary-urban-boardroom-design@3x.webp' ],
					],
				],
				'title_field' => '{{{ post_title }}}',
			]
		);




		$this->end_controls_section();
	}


	protected function register_controls() {

		$this->register_blog_posts_controls();
		$this->register_section_styles();

		$this->register_typography_controls( 'heading', 'Designs Heading', '.heading', 'h2' );
$this->register_typography_controls( 'subtitle', 'Designs Subtitle', '.subtitle', 'div' );

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
		include get_stylesheet_directory() . '/elementor-templates/custom-one-stop-template.php';
	}
}
