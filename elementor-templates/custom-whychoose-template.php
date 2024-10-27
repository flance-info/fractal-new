<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$this->add_inline_editing_attributes( 'label', 'none' );
$this->add_inline_editing_attributes( 'subtitle', 'none' );
$this->add_inline_editing_attributes( 'heading', 'none' );
$this->add_inline_editing_attributes( 'description', 'advanced' );
//$label_tag       = $settings['label_html_tag'] ?? 'div';
$subtitle_tag    = $settings['subtitle_html_tag'] ?? 'div';
$heading_tag     = $settings['heading_html_tag'] ?? 'h2';
$description_tag = $settings['description_html_tag'] ?? 'div';
$bg_image        = $settings['section_background']['url'] ?? '';

?>

<div class="w-full">

	<section class="self-stretch bg-elements-neutral-4 overflow-hidden flex flex-row
			items-start justify-center gap-20 max-w-full text-left text-11xl
			 text-general-1-secondary-variant
			 font-button-space-grotesk w-full mq925:mb-[50px] mq925:flex-col section_background_color">
		<div class="absolute h-full max-h-full w-full transform translate-x-[50%] left-[-962px] mq925:relative mq925:left-0 mq925:transform-unset">

			<img decoding="async" class="w-[640px]
			relative max-h-full max-w-full
			flex-1 mq925:w-full side-img" loading="lazy" alt="" src="<?php echo esc_url( $bg_image ); ?>">
		</div>

		<div class="sblock max-w-[1170px] flex flex-col items-start justify-start py-[140px]
			px-0 pb-0 box-border w-full mq925:pt-32 mq925:box-border
			mq925:min-w-full mq1875:flex-1 pl-[350px] min-h-[1124px] mq925:px-[25px] mq925:pt-[50px] mq925:min-h-[500px] mq925:px-[25px]">
			<div class="self-stretch flex flex-col items-start justify-start gap-[30px]">


					<<?php echo esc_attr( $heading_tag ); ?>
				class="m-0 self-stretch relative text-29xl tracking-[-0.02em]
				leading-[54px] font-medium font-[inherit] text-general-1-secondary
				mq450:text-10xl mq450:leading-[32px] mq925:text-19xl mq925:leading-[43px]
				heading elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'heading' ); ?>>
		<?php echo esc_html( $settings['heading'] ); ?>
	</<?php echo esc_attr( $heading_tag ); ?>>
				<?php foreach ( $settings['content_blocks'] as $index => $post ) :?>

				<div class="self-stretch flex flex-col items-start justify-start gap-3.5">
					<<?php echo esc_attr( $subtitle_tag ); ?> class="subtitle
							m-0 self-stretch relative text-inherit tracking-[-0.01em]
					leading-[36px] font-medium font-[inherit] mq450:text-lg mq450:leading-[22px]
					 mq925:text-5xl mq925:leading-[29px]">
						<?php echo esc_html( $post['heading'] ); ?>
					</<?php echo esc_attr($subtitle_tag); ?>>


					<<?php echo esc_attr($description_tag); ?>
					class="description relative text-base leading-[26px] font-body-b4-merriweather-13 text-elements-neutral">
					<?php echo wp_kses_post(  $post['description'] ); ?>
					</<?php echo esc_attr($description_tag); ?>>
				</div>
				<?php endforeach; ?>

			</div>
		</div>
	</section>


</div>