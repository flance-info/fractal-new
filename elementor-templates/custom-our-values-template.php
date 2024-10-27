<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$this->add_inline_editing_attributes( 'heading', 'none' );

$heading_tag          = $settings['heading_html_tag'] ?? 'h2';
$subtitle_tag         = $settings['subtitle_html_tag'] ?? 'h3';
$description_tag      = $settings['description_html_tag'] ?? 'div';


?>
<div clas="w-full">
	<section class="self-stretch bg-elements-neutral-4 flex flex-col items-center
			justify-center py-[140px] gap-[60px]
			max-w-full text-center text-29xl text-general-1-secondary
			 font-button-space-grotesk mq925:gap-[15px] mq925:py-[91px]
			mq925:box-border mq1400:gap-[30px] section_background_color">
		<<?php echo esc_attr( $heading_tag ); ?>  class="m-0 relative text-inherit tracking-[-0.02em]
				leading-[54px] font-medium font-[inherit] mq450:text-10xl
				 mq450:leading-[32px] mq925:text-19xl mq925:leading-[43px] heading elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'heading' ); ?>>
				 <?php echo esc_html( $settings['heading'] ); ?>
				 </<?php echo esc_attr( $heading_tag ); ?>>
		<div class="flex flex-row items-start justify-center
				 flex-wrap content-start gap-[30px] max-w-[1170px] gap-[60px]
				  text-5xl text-general-1-secondary-variant">

	<?php if ( ! empty( $settings['content_repeater'] ) ) : ?>
			<?php foreach ( $settings['content_repeater'] as $index => $item ) :
			// Background image URL for each repeater item
			$image_url = isset( $item['values_icon']['url'] ) ? $item['values_icon']['url'] : \Elementor\Utils::get_placeholder_image_src();
			?>
			<div class="flex-1 flex flex-col items-center justify-start gap-[30px] min-w-[277px] max-w-full">
				<img decoding="async" class="w-16 h-16 relative object-cover" src="<?php echo esc_url( $image_url ); ?>" alt="">
				<div class="self-stretch flex flex-col items-center justify-start gap-5">
					<<?php echo esc_attr( $subtitle_tag ); ?> class="m-0 relative text-inherit tracking-[-0.01em]
					leading-[30px] font-medium font-[inherit]
					mq450:text-lgi mq450:leading-[24px] subtitle">
				<?php echo esc_html( $item['subtitle'] ); ?>

				</<?php echo esc_attr( $subtitle_tag ); ?>>
					<<?php echo esc_attr( $description_tag ); ?> class="relative text-base leading-[26px]
					 font-body-b4-merriweather-13
					  text-elements-neutral-1 description">
							<?php echo wp_kses_post( $item['description'] ); ?>
					</<?php echo esc_attr( $description_tag ); ?>>
				</div>
			</div>
		<?php endforeach; ?>
		<?php endif; ?>
		</div>
	</section>
</div>



