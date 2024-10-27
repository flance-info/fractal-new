<?php

use Elementor\Basic\FractalBaseElementor;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Aboutus_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'aboutus';
	}

	public function get_title() {
		return __( 'About Us Fractal Widget', 'fractal' );
	}

	public function get_icon() {
		return 'eicon-banner';
	}

	public function get_categories() {
		return [ 'fractal' ];
	}

	/**
	 * Enable dynamic content for inline editing.
	 */
	protected function is_dynamic_content(): bool {
		return true; // Must return true for inline editing to work
	}

	protected function _register_controls() {

		// Content Section: Heading
		$this->start_controls_section(
				'content_section_heading',
				[
						'label' => __( 'Content Label and Heading', 'fractal' ),
						'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);
		// Widget Label (Heading One)
		$this->add_control(
				'heading_one',
				[
						'label'       => __( 'Widget Label', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'About Us', 'fractal' ),
						'label_block' => true,
						'dynamic'     => [
								'active' => true
						],
				]
		);

		// Heading Two
		$this->add_control(
				'heading_two',
				[
						'label'       => __( 'Heading', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'Your Vision, Our Expertise', 'fractal' ),
						'label_block' => true,
						'dynamic'     => [
								'active' => true
						],
				]
		);


		$this->end_controls_section();
		// Content Section: Description
		$this->start_controls_section(
				'content_section_description',
				[
						'label' => __( 'Content Text', 'fractal' ),
						'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);

		// Paragraph One (WYSIWYG)
		$this->add_control(
				'paragraph_one',
				[
						'label'       => __( 'Paragraph One', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::WYSIWYG,
						'default'     => __( 'Fractal is a Dubai-based leading interior design company dedicated to creating exceptional spaces (home, villa, hotel fit out works, offices, commercial spaces, etc) that reflect your unique taste.', 'fractal' ),
						'label_block' => true,
						'dynamic'     => [
								'active' => true
						],
				]
		);



		// Paragraph Two (WYSIWYG)
		$this->add_control(
				'paragraph_two',
				[
						'label'       => __( 'Paragraph Two', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::WYSIWYG,
						'default'     => __( '<p class="m-0">
                    Our design philosophy is deeply rooted in functionality
                    and elegance. We take the time to understand your lifestyle
                    and needs. From there, we create interiors that are not only
                    visually stunning but also perfectly suited to your
                    day-to-day life.
                </p>
                <p class="m-0">&nbsp;</p>
                <p class="m-0">
                    What makes Fractal stand out is our commitment to personalized
                    service. We know every client is different, so we approach each
                    project with fresh eyes. Whether you’re after a minimalist
                    renovation, a fit-out with a touch of luxury, or a cozy retreat,
                    we have the expertise to create a space (including furniture
                    and other elements) that truly speaks to you.
                </p>
                ', 'fractal' ),
						'label_block' => true,
						'dynamic'     => [
								'active' => true
						],
				]
		);
		$this->end_controls_section();
		// Content Section: Image
		$this->start_controls_section(
				'content_section_image',
				[
						'label' => __( 'Widget Image', 'fractal' ),
						'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);
		// Image Control with Custom Default Image
		$this->add_control(
				'widget_image',
				[
						'label'   => __( 'Choose Image', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::MEDIA,
						'default' => [
								'url' => get_template_directory_uri() . '/fractal/build/modern-rustic-serenity-bathroom.webp',
						],
						'dynamic' => [
								'active' => true
						],
				]
		);
		$this->end_controls_section();
$this->register_section_styles();
			$this->register_typography_controls( 'heading_one', 'Label', '.heading-one', 'div' );
		$this->register_typography_controls( 'heading_two', 'Heading', '.heading-two', 'h2' );
	$this->register_typography_controls( 'paragraph_one', 'Paragraph one', '.paragraph_one', 'div' );
		$this->register_typography_controls( 'paragraph_two', 'Paragraph two', '.paragraph_two', 'div' );
$this->register_universal_style_controls(
			'side_img',                   // Section ID
			'Side Image',                 // Section Label
			'.side-img',                  // CSS Selector
			0,                            // Default Left Position
			''                           // Default Width in %
		);
	}

	protected function render() {
		$settings  = $this->get_settings_for_display();
		$image_url = ! empty( $settings['widget_image']['url'] ) ? $settings['widget_image']['url'] : '';
		// Get heading and paragraph values
		$heading_one          = $settings['heading_one'];
		$heading_two          = $settings['heading_two'];
		$heading_two_html_tag = $settings['heading_two_html_tag'];
		$paragraph_one        = $settings['paragraph_one'];
		$paragraph_two        = $settings['paragraph_two'];
		// Add inline editing attributes for inline editing
		$this->add_inline_editing_attributes( 'heading_one', 'none' );
		$this->add_inline_editing_attributes( 'heading_two', 'none' );
		$this->add_inline_editing_attributes( 'paragraph_one', 'advanced' );
		$this->add_inline_editing_attributes( 'paragraph_two', 'advanced' );
		// Include the template
		include get_stylesheet_directory() . '/elementor-templates/custom-aboutus-template.php';
	}

	protected function content_template() {
		?>
		<#
		view.addInlineEditingAttributes( 'heading_one', 'none' );
		view.addInlineEditingAttributes( 'heading_two', 'none' );
		view.addInlineEditingAttributes( 'paragraph_one', 'advanced' );
		view.addInlineEditingAttributes( 'paragraph_two', 'advanced' );

		var image_url = settings.widget_image.url ? settings.widget_image.url : '';
		#>

		<div class="w-full">
			<section class="self-stretch bg-general-1-secondary min-h-[774px] flex flex-row mq925:flex-col items-center text-general-1-secondary w-full justify-center gap-20 mq925:p-0">

				<!-- Image -->
				<div class="absolute transform translate-x-[50%] ml-[-1950px] pt-[5px] mq925:relative mq925:m-0 mq925:p-0 mq925:transform-unset">
					<img class="w-[575px] h-[774px]" alt="" src="{{ image_url }}">
				</div>

				<!-- Content Section -->
				<div class="w-full max-w-[975px] ml-[175px] h-full mq925:ml-0 w-calc-100vw-minus-50px mq925:mb-[100px]">
					<div class="flex-1 flex flex-col items-start justify-start gap-[30px] pl-[75px] pt-[95px] mq925:pl-0 mq925:pt-[40px]">

						<!-- Heading One -->
					<div class="self-stretch relative tracking-[0.25em] leading-[22px] uppercase text-general-1-primary heading-one elementor-inline-editing" {{{ view.getRenderAttributeString(	'heading_one' ) }}}>
						{{{ settings.heading_one }}}
					</div>

					<!-- Heading Two -->
					<{{{ settings.heading_two_html_tag }}} class="self-stretch relative text-59xl tracking-[-0.04em] leading-[84px] text-general-white mq925:text-41xl heading-two elementor-inline-editing" {{{ view.getRenderAttributeString( 'heading_two' ) }}}>
					{{{ settings.heading_two }}}
				</{{{ settings.heading_two_html_tag }}}>

				<!-- Paragraph One -->
				<div class="self-stretch relative text-5xl tracking-[-0.01em] leading-[30px] font-medium text-general-white
				paragraph_one elementor-inline-editing " {{{ view.getRenderAttributeString('paragraph_one' ) }}}>
				{{{ settings.paragraph_one }}}
		</div>

		<!-- Paragraph Two -->
		<div class="self-stretch relative leading-[26px] font-body-b6-merriweather-11 text-elements-neutral paragraph_two elementor-inline-editing" {{{ view.getRenderAttributeString( 'paragraph_two' ) }}}>
		{{{ settings.paragraph_two }}}
		</div>

		<!-- Learn More Button -->
		<div onclick="openModal()" class="flex flex-row items-center justify-start relative gap-4 text-right text-base">
			<div class="arrow-container">
				<span class="text tracking-[0.25em] leading-[22px] uppercase z-[1]">Learn more</span>
				<div class="circle">
					<img class="stm-mb w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/navigation2.webp">
					<img class="stm-mb1 w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/moved-arrow.webp">
				</div>
			</div>
		</div>

		</div>
		</div>

		</section>
		</div>
		<?php
	}
}
