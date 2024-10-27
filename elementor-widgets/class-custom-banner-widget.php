<?php

use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Custom_Banner_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'custom_banner';
	}

	public function get_title() {
		return __( 'Slide Banner', 'fractal' );
	}

	public function get_icon() {
		return 'eicon-banner';
	}

	public function get_categories() {
		return [ 'fractal' ];
	}
public function get_script_depends() {
		return [ 'homepage-script_elementor' ];
	}
	protected function _register_controls() {
		$this->start_controls_section(
				'content_section',
				[
						'label' => __( 'Content', 'fractal' ),
						'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
				'slide_heading',
				[
						'label'   => __( 'Slide Heading', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::TEXT,
						'default' => __( 'Bespoke Interior Design in Dubai', 'fractal' ),
				]
		);
		$repeater->add_control(
				'slide_image',
				[
						'label'   => __( 'Slide Image', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::MEDIA,
						'default' => [
								'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
				]
		);
		$repeater->add_control(
				'heading_tag',
				[
						'label'   => __( 'HTML Tag', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::SELECT,
						'options' => [
								'h1' => __( 'H1', 'fractal' ),
								'h2' => __( 'H2', 'fractal' ),
								'h3' => __( 'H3', 'fractal' ),
								'h4' => __( 'H4', 'fractal' ),
								'h5' => __( 'H5', 'fractal' ),
								'h6' => __( 'H6', 'fractal' ),
						],
						'default' => 'h1',
				]
		);
		$repeater->add_control(
				'heading_color',
				[
						'label'     => __( 'Heading Color', 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								'{{WRAPPER}} {{CURRENT_ITEM}} .elementor-heading-title' => 'color: {{VALUE}};',
						],
				]
		);
		$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
						'name'     => 'typography',
						'selector' => '{{WRAPPER}}  .elementor-heading-title',
				]
		);
		$this->add_control(
				'slides',
				[
						'label'       => __( 'Slides', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::REPEATER,
						'fields'      => $repeater->get_controls(),
						'default'     => [
								[
										'slide_heading' => __( 'Bespoke Interior Design in Dubai', 'fractal' ),
										'slide_image'   => [
												'url' => \Elementor\Utils::get_placeholder_image_src(),
										],
								],
								[
										'slide_heading' => __( 'Bespoke Interior Design in Dubai', 'fractal' ),
										'slide_image'   => [
												'url' => \Elementor\Utils::get_placeholder_image_src(),
										],
								],
						],
						'title_field' => '{{{ slide_heading }}}',
				]
		);
		$this->add_control(
				'facebook_url',
				[
						'label'       => __( 'Facebook URL', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::URL,
						'placeholder' => __( 'https://www.facebook.com/yourpage', 'fractal' ),
						'default'     => [
								'url' => '',
						],
				]
		);
		$this->add_control(
				'youtube_url',
				[
						'label'       => __( 'YouTube URL', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::URL,
						'placeholder' => __( 'https://www.youtube.com/yourchannel', 'fractal' ),
						'default'     => [
								'url' => '',
						],
				]
		);
		$this->add_control(
				'instagram_url',
				[
						'label'       => __( 'Instagram URL', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::URL,
						'placeholder' => __( 'https://www.instagram.com/yourprofile', 'fractal' ),
						'default'     => [
								'url' => '',
						],
				]
		);
		$this->add_control(
				'twitter_url',
				[
						'label'       => __( 'Twitter URL', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::URL,
						'placeholder' => __( 'https://www.twitter.com/yourprofile', 'fractal' ),
						'default'     => [
								'url' => '',
						],
				]
		);
		$this->add_control(
				'linkedin_url',
				[
						'label'       => __( 'LinkedIn URL', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::URL,
						'placeholder' => __( 'https://www.linkedin.com/in/yourprofile', 'fractal' ),
						'default'     => [
								'url' => '',
						],
				]
		);
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		foreach ( $settings['slides'] as $index => $slide ) {
			// Define a unique key for the typography
			//$this->add_render_attribute( 'slide_heading_' . $index, 'class', 'elementor-heading-title' );
			// Add typography styles to the specific slide heading
			if ( ! empty( $slide['heading_color'] ) ) {
				$this->add_render_attribute( 'slide_heading_' . $index, 'style', 'color: ' . $slide['heading_color'] . ';' );
			}

		}
		include get_stylesheet_directory() . '/elementor-templates/custom-banner-template.php';


	}

	protected function _content_template() {
		?>
		<#
		var slides = settings.slides;
		#>
		<div class="w-full">
			<section class="mq925:mt-[100px] self-stretch relative h-[812px] text-77xl  text-general-1-secondary mq925:px-[25px] mq925:h-[800px]" xmlns="http://www.w3.org/1999/html">

				<div class="w-full max-w-[1170px]  flex items-center  h-full mx-auto slides">
					<# _.each( slides, function( slide ) { #>
						<img src="{{ slide.slide_image.url }}"  class="object-cover absolute h-full h-full !h-full  top-[0px]  bottom-[0px] max-h-full w-full transform translate-x-[50%] left-[-400px]
		mq600:top-[300px] mq600:translate-x-0 mq600:left-0 mq600:object-cover mq600:max-h-[500px]
	mq925:top-[300px] mq925:translate-x-0 mq925:left-0 mq925:object-cover mq925:max-h-[500px]">
					<div class="slide w-full slide-1 mq925:mt-[-160px] mq600:mt-[-135px] w-calc-100vw-minus-50px">

						<{{ slide.heading_tag }} class="slide-heading elementor-heading-title relative font-medium text-77xl mq925:text-59xl tracking-[-4px] leading-[96px] inline-block max-w-[820px]" style="color: {{ slide.heading_color }};">
						{{{ slide.slide_heading }}}
					</{{ slide.heading_tag }}>
				</div>
				<# }); #>
		</div>
		<div class="absolute top-[calc(50%_-_148px)]
		 overflow-hidden flex flex-col items-left justify-left gap-3.5
		 right-[calc((100vw-1172px)/4)]">
			<a href="{{ settings.facebook_url.url }}" target="_blank" rel="noopener noreferrer" class="rounded-11xl border-gray-200 border-[1px] border-solid overflow-hidden flex flex-col items-center justify-center p-3">
				<img class="w-6 relative h-6" alt="Facebook" src="/wp-content/themes/fractal/fractal/build/iconssmall-iconssocialfacebook-filled.webp">
			</a>
			<a href="{{ settings.youtube_url.url }}" target="_blank" rel="noopener noreferrer" class="rounded-11xl border-gray-200 border-[1px] border-solid overflow-hidden flex flex-col items-center justify-center p-3">
				<img class="w-6 relative h-6 object-cover" alt="YouTube" src="/wp-content/themes/fractal/fractal/build/iconssmall-iconssocialyoutube@2x.webp">
			</a>
			<a href="{{ settings.instagram_url.url }}" target="_blank" rel="noopener noreferrer" class="rounded-11xl border-gray-200 border-[1px] border-solid overflow-hidden flex flex-col items-center justify-center p-3">
				<img class="w-6 relative h-6 object-cover" alt="Instagram" src="/wp-content/themes/fractal/fractal/build/iconssmall-iconssocialinstagram@2x.webp">
			</a>
			<a href="{{ settings.twitter_url.url }}" target="_blank" rel="noopener noreferrer" class="rounded-11xl border-gray-200 border-[1px] border-solid overflow-hidden flex flex-col items-center justify-center p-3">
				<img class="w-6 relative h-6" alt="Twitter" src="/wp-content/themes/fractal/fractal/build/iconssmall-iconssocialtwitter.webp">
			</a>
			<a href="{{ settings.linkedin_url.url }}" target="_blank" rel="noopener noreferrer" class="rounded-11xl border-gray-200 border-[1px] border-solid overflow-hidden flex flex-col items-center justify-center p-3">
				<img class="w-6 relative h-6 object-cover" alt="LinkedIn" src="/wp-content/themes/fractal/fractal/build/iconssmall-iconssociallinkedin@2x.webp">
			</a>
		</div>
		<div class="w-full max-w-[1170px] relative flex items-center bottom-[200px] h-[80px] bottom-[100px] mx-auto mq925:bottom-[120px]">

			<img class="nav-left absolute right-[100px] bottom-[0px] w-[70px] h-[70px] transition-opacity duration-300 hover:opacity-0" alt="" src="/wp-content/themes/fractal/fractal/build/navigation.webp">
			<img class="nav-left absolute right-[100px] bottom-[0px] w-[70px] h-[70px] opacity-0 hover:opacity-100 transition-opacity duration-300 rotate-180" alt="" src="/wp-content/themes/fractal/fractal/build/orange_nav.webp">

			<img class="nav-right absolute right-[0px] bottom-[0px] w-[70px] h-[70px]  transition-opacity duration-300 hover:opacity-0" alt="" src="/wp-content/themes/fractal/fractal/build/navigation1.webp">
			<img class="nav-right absolute right-[0px] bottom-[0px] w-[70px] h-[70px] opacity-0 hover:opacity-100 transition-opacity duration-300" alt="" src="/wp-content/themes/fractal/fractal/build/orange_nav.webp">
		</div>
		</section>
		</div>
		<?php
	}
}
