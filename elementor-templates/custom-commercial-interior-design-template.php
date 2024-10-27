<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$this->add_inline_editing_attributes( 'label', 'none' );
$this->add_inline_editing_attributes( 'subtitle', 'none' );
$this->add_inline_editing_attributes( 'heading', 'none' );
$this->add_inline_editing_attributes( 'description', 'advanced' );
$label_tag            = $settings['label_html_tag'] ?? 'div';
$subtitle_tag         = $settings['subtitle_html_tag'] ?? 'div';
$heading_tag     = $settings['heading_html_tag'] ?? 'h1';
$description_tag = $settings['description_html_tag'] ?? 'div';
$bg_image = $settings['section_background']['url'] ?? '';
?>

<div class="w-full">
	<section class="self-stretch flex flex-row items-start justify-center pt-[140px] pb-[140px]
		 box-border max-w-full text-right text-base text-general-white
		 font-button-space-grotesk mq925:pb-[91px] mq925:box-border mq925:px-[25px] section_background_color" >
		<div class="max-w-[1170px] flex flex-row items-start justify-start gap-[60px] w-full
			mq1400:gap-[30px] mq1400:flex-wrap sblock">
			<div class="min-h-[414px] flex-[0.8559] flex flex-col
			items-end justify-end p-10 box-border

			  bg-cover bg-no-repeat bg-[top] min-w-[361px]
			  max-w-full mq450:min-w-full mq1400:flex-1 side-img" style="background-image: url('<?php echo esc_url( $bg_image ); ?>');">
			</div>
			<div class="flex-1 flex flex-col items-start justify-start pt-[17px] px-0 pb-0 box-border min-w-[361px] max-w-full text-left text-general-1-primary mq450:min-w-full mq1400:flex-1">
				<div class="self-stretch flex flex-col items-start justify-start gap-[30px]">

					<?php if ( ! empty( $settings['label'] ) ) : ?>
					<<?php echo esc_attr( $label_tag ); ?> class="label self-stretch relative tracking-[0.25em]
					leading-[22px] uppercase elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'label' ); ?>>
					<?php echo esc_html( $settings['label'] ); ?>
				</<?php echo esc_attr( $label_tag ); ?>>
				<?php endif; ?>


						<<?php echo esc_attr( $heading_tag ); ?>
				class="m-0 relative text-29xl tracking-[-0.02em] leading-[54px] font-medium
					font-[inherit] text-general-1-secondary mq450:text-10xl
					mq450:leading-[32px] mq925:text-19xl mq925:leading-[43px]
				heading elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'heading' ); ?>>
		<?php echo esc_html( $settings['heading'] ); ?>
	</<?php echo esc_attr( $heading_tag ); ?>>


					<<?php echo esc_attr( $subtitle_tag ); ?> class="subtitle m-0 self-stretch
			relative text-5xl tracking-[-0.01em] leading-[30px]
			font-medium font-[inherit] text-general-1-secondary-variant
			mq450:text-lgi mq450:leading-[24px] elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'subtitle' ); ?>>
						<?php echo esc_html( $settings['subtitle'] ); ?>
					</<?php echo esc_attr($subtitle_tag); ?>>
					<<?php echo esc_attr($description_tag); ?> class="description relative
		leading-[26px] font-body-b4-merriweather-13 text-elements-neutral elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'description' ); ?>>
							<?php echo wp_kses_post(  $settings['description'] ); ?>
					</<?php echo esc_attr($description_tag); ?>>
				</div>
			</div>
		</div>
	</section>
</div>