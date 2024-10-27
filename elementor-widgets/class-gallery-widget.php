<?php

use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class FractalGallery_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'stm-gallery';
	}

	public function get_title() {
		return __( 'Gallery Fractal Widget', 'fractal' );
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
		$repeater = new \Elementor\Repeater();
		// Add control for image
		$repeater->add_control(
				'gallery_image',
				[
						'label'   => __( 'Choose Image', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::MEDIA,
						'default' => [
								'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
				]
		);
		// Add control for image alt text
		$repeater->add_control(
				'gallery_image_alt',
				[
						'label'       => __( 'Image Alt Text', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'Image description', 'fractal' ),
						'label_block' => true,
				]
		);
		// Gallery Repeater Control
		$this->add_control(
				'gallery_items',
				[
						'label'   => __( 'Gallery Items', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::REPEATER,
						'fields'  => $repeater->get_controls(),
						'default' => [
								[
										'gallery_image_alt' => __( 'Luxurious Interior with Ocean View', 'fractal' ),
										'gallery_image'     => [
												'url' => get_template_directory_uri() . '/fractal/build/luxurious-interior-with-ocean-view@2x.webp',
										],
								],
								[
										'gallery_image_alt' => __( 'Modern Architecture and Luxury Car', 'fractal' ),
										'gallery_image'     => [
												'url' => get_template_directory_uri() . '/fractal/build/modern-architecture-and-luxury-car1@2x.webp',
										],
								],
								[
										'gallery_image_alt' => __( 'Modern Colorful Office Interior', 'fractal' ),
										'gallery_image'     => [
												'url' => get_template_directory_uri() . '/fractal/build/modern-colorful-office-interior@2x.webp',
										],
								],
								[
										'gallery_image_alt' => __( 'Luxurious Seaside Living Room', 'fractal' ),
										'gallery_image'     => [
												'url' => get_template_directory_uri() . '/fractal/build/luxurious-seaside-living-room-1@2x.webp',
										],
								],
								[
										'gallery_image_alt' => __( 'Miniature Modern House Model', 'fractal' ),
										'gallery_image'     => [
												'url' => get_template_directory_uri() . '/fractal/build/miniature-modern-house-model@2x.webp',
										],
								],
								[
										'gallery_image_alt' => __( 'Contemporary Pastel Oasis', 'fractal' ),
										'gallery_image'     => [
												'url' => get_template_directory_uri() . '/fractal/build/contemporary-pastel-oasis@2x.webp',
										],
								],
						],
						'title_field' => '{{{ gallery_image_alt }}}',
				]
		);
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		// Start rendering the gallery
		if ( ! empty( $settings['gallery_items'] ) ) {
			echo '<div class="w-full">';
			echo '<section class="self-stretch flex flex-row items-start justify-center mq450:grid-cols-[minmax(240px,_1fr)] mq925:grid-cols-[repeat(2,_minmax(240px,_416px))] mq925:overflow-x-auto mq925:flex-nowrap mq925:justify-start ">';
			foreach ( $settings['gallery_items'] as $index => $item ) {
				$image_url = isset( $item['gallery_image']['url'] ) ? esc_url( $item['gallery_image']['url'] ) : '';
				$image_alt = isset( $item['gallery_image_alt'] ) ? esc_attr( $item['gallery_image_alt'] ) : '';
				if ( $image_url ) {
					echo '<img class="h-80 flex-1 relative object-cover min-w-[314px] mq450:w-full" loading="lazy" alt="' . $image_alt . '" src="' . $image_url . '">';
				}
			}
			echo '</section>';
			echo '</div>';
		}
	}

	protected function _content_template() {
		?>
		<#
		if ( settings.gallery_items.length ) { #>
		<div class="w-full">
			<section class="self-stretch flex flex-row items-start justify-center
                mq450:grid-cols-[minmax(240px,_1fr)]
                mq925:grid-cols-[repeat(2,_minmax(240px,_416px))] mq925:overflow-x-auto mq925:flex-nowrap mq925:justify-start ">

				<# _.each( settings.gallery_items, function( item ) { #>
				<img class="h-80 flex-1 relative object-cover min-w-[314px] mq450:w-full" loading="lazy" alt="{{ item.gallery_image_alt }}" src="{{ item.gallery_image.url }}">
				<# }); #>

			</section>
		</div>
		<# } #>
		<?php
	}
}

