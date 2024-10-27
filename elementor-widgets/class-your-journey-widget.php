<?php

use Elementor\Basic\FractalBaseElementor;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class YourJourney_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'stm-yourjourney';
	}

	public function get_title() {
		return __( 'Your Journey Section Fractal Widget', 'fractal' );
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
				'default'     => __( 'Start', 'fractal' ),
				'placeholder' => __( 'Enter Label', 'fractal' ),
			]
		);
		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( 'Your journey with us', 'fractal' ),
				'placeholder' => __( 'Enter heading', 'fractal' ),
			]
		);
		$this->add_control(
			'subtitle',
			[
				'label'       => __( 'Subtitle', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::TEXTAREA,
				'default'     => __( 'Ready to bring your vision to life? Partner with&nbsp;Fractal, Dubai’s
						best interior design company, and let’s create spaces that truly
						reflect your style.', 'fractal' ),
				'placeholder' => __( 'Enter subtitle', 'fractal' ),
			]
		);


		$this->add_control(
			'description',
			[
				'label'   => __( 'Description', 'fractal' ),
				'type'    => \Elementor\Controls_Manager::WYSIWYG,
				'default' => __( '<p class="m-0">
							We get it—you’ve probably seen it all: muse interior design that
							doesn’t quite match, spaces that lack a personal touch, or
							trends that are way past their prime. No one wants a repeat of
							those mistakes.
						</p>
						<p class="m-0">&nbsp;</p>
						<p class="m-0">
							Even if this is your first time working with an interior design
							company in Dubai and UAE, you deserve a smooth and enjoyable
							experience. That’s where we come in.
						</p>
						<p class="m-0">&nbsp;</p>
						<p class="m-0">
							Our promise? We’ll help you design a beautiful, functional,
							and&nbsp;personalized space you’ll love for years. Let’s work
							together to&nbsp;create the home or office of your dreams.
						</p>', 'fractal' ),
			]
		);
		$this->add_control(
			'section_background',
			[
				'label'   => __( 'Side Image', 'fractal' ),
				'type'    => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => get_template_directory_uri() . '/fractal/build/serenity-in-symmetry--modern-minimalist-interior-with-natural-accents@3x.webp',
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
		$this->register_typography_controls( 'subtitle', 'Subtitle', '.subtitle', 'div' );

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
		include get_stylesheet_directory() . '/elementor-templates/custom-your-journey-template.php';
	}
}
