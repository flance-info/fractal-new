<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
//$this->add_inline_editing_attributes( 'label', 'none' );
//$this->add_inline_editing_attributes( 'subtitle', 'none' );
$this->add_inline_editing_attributes( 'heading', 'none' );
$this->add_inline_editing_attributes( 'description', 'advanced' );
//$label_tag            = $settings['label_html_tag'] ?? 'div';
//$subtitle_tag         = $settings['subtitle_html_tag'] ?? 'div';
$heading_tag     = $settings['heading_html_tag'] ?? 'h1';
$description_tag = $settings['description_html_tag'] ?? 'div';
//$background_image_url = $settings['section_background']['url'] ?? '';
?>

	<div clas="w-full">
		<section class="section_background_color self-stretch bg-general-1-primary flex flex-row
			items-center justify-center flex-wrap content-start py-[140px]
		text-left text-29xl text-general-white
			font-button-space-grotesk mq450:box-border
			mq925:gap-[15px] mq925:py-[91px] mq925:box-border
			  mq1400:box-border mq925:px-[25px]">
			<div class="max-w-[1170px]  gap-[60px] flex flex-row items-center justify-center mq925:flex-col mq925:px-[25px]">


				<?php if ( ! empty( $settings['content_repeater'] ) ) : ?>
			<?php foreach ( $settings['content_repeater'] as $index => $item ) :
			// HTML tag and inline editing controls

			// Background image URL for each repeater item
			$image_url = isset( $item['section_background']['url'] ) ? $item['section_background']['url'] : \Elementor\Utils::get_placeholder_image_src();
			?>

			<div class="flex-1 flex flex-col items-start justify-start gap-10 min-w-[361px] w-full mq925:gap-5">
				<img decoding="async" class="w-16 h-16 relative object-cover" src="<?php echo esc_url( $image_url ); ?>">

				<<?php echo esc_attr( $heading_tag ); ?>
				class="heading m-0 self-stretch relative text-inherit tracking-[-0.02em] leading-[54px]
				font-medium font-[inherit] mq450:text-10xl mq450:leading-[32px] mq925:text-19xl mq925:leading-[43px] " >
				<?php echo esc_html( $item['heading'] ); ?>
			</<?php echo esc_attr( $heading_tag ); ?>>

			<<?php echo esc_attr( $description_tag ); ?> class="description relative text-lg leading-[30px] font-body-b4-merriweather-13" >
			<?php echo wp_kses_post( $item['description'] ); ?>
		</<?php echo esc_attr( $description_tag ); ?>>
		</div>

		<?php endforeach; ?>
		<?php endif; ?>

			</div>
		</section>
	</div>


