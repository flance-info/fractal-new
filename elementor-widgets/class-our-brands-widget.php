<?php

use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class OurBrands_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'ourbrands';
	}

	public function get_title() {
		return __( 'Our Brands Fractal Widget', 'fractal' );
	}

	public function get_icon() {
		return 'eicon-banner';
	}

	public function get_categories() {
		return [ 'fractal' ];
	}

	protected function _register_controls() {
		$this->start_controls_section(
				'content_section',
				[
						'label' => __( 'Content', 'fractal' ),
						'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);
		// Create the repeater for brand logos
		$repeater = new \Elementor\Repeater();
		// Add control for logo image
		$repeater->add_control(
				'brand_logo',
				[
						'label'   => __( 'Choose Brand Logo', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::MEDIA,
						'default' => [
								'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
				]
		);
		// Add control for brand name (alt text)
		$repeater->add_control(
				'brand_name',
				[
						'label'       => __( 'Brand Name (Alt Text)', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'Brand Name', 'fractal' ),
						'label_block' => true,
				]
		);
		// Repeater control for brands
		$this->add_control(
				'brands_list',
				[
						'label'       => __( 'Brands', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::REPEATER,
						'fields'      => $repeater->get_controls(),
						'default'     => [
								[
										'brand_name' => __( 'Apple', 'fractal' ),
										'brand_logo' => [
												'url' => get_template_directory_uri() . '/fractal/build/apple.webp',
										],
								],
								[
										'brand_name' => __( 'Disney', 'fractal' ),
										'brand_logo' => [
												'url' => get_template_directory_uri() . '/fractal/build/disney.webp',
										],
								],
								[
										'brand_name' => __( 'Google', 'fractal' ),
										'brand_logo' => [
												'url' => get_template_directory_uri() . '/fractal/build/google.webp',
										],
								],
								[
										'brand_name' => __( 'Meta', 'fractal' ),
										'brand_logo' => [
												'url' => get_template_directory_uri() . '/fractal/build/meta.webp',
										],
								],
								[
										'brand_name' => __( 'Nike', 'fractal' ),
										'brand_logo' => [
												'url' => get_template_directory_uri() . '/fractal/build/nike.webp',
										],
								],
						],
						'title_field' => '{{{ brand_name }}}',
				]
		);
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		if ( ! empty( $settings['brands_list'] ) ) {
			echo '<div class="w-full">';
			echo '<section class="bg-general-white self-stretch flex flex-col items-center justify-center py-[98px]">';
			echo '<div class="max-w-[1170px] w-full flex flex-wrap overflow-x-auto items-center justify-between gap-4 scroll-snap-x scroll-snap-start scroll-smooth ">';
			// Loop through each brand in the repeater
			foreach ( $settings['brands_list'] as $item ) {
				$brand_logo = isset( $item['brand_logo']['url'] ) ? esc_url( $item['brand_logo']['url'] ) : '';
				$brand_name = isset( $item['brand_name'] ) ? esc_attr( $item['brand_name'] ) : '';
				if ( $brand_logo ) {
					echo '<img class="relative h-16" alt="' . $brand_name . '" src="' . $brand_logo . '">';
				}
			}
			echo '</div>';
			echo '</section>';
			echo '</div>';
		}
	}

	protected function _content_template() {
		?>
		<#
		if ( settings.brands_list.length ) { #>
		<div class="w-full">
			<section class="bg-general-white self-stretch flex flex-col items-center justify-center py-[98px]">
				<div class="max-w-[1170px] w-full flex flex-wrap overflow-x-auto items-center justify-between gap-4 scroll-snap-x scroll-snap-start scroll-smooth ">
					<# _.each( settings.brands_list, function( item ) { #>
					<img class="relative h-16" alt="{{ item.brand_name }}" src="{{ item.brand_logo.url }}">
					<# }); #>
				</div>
			</section>
		</div>
		<# } #>
		<?php
	}
}
