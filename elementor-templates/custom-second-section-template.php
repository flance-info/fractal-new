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
$heading_tag          = $settings['heading_html_tag'] ?? 'h1';
$description_tag      = $settings['description_html_tag'] ?? 'div';
$background_image_url = $settings['section_background']['url'] ?? '';
?>

<section class="self-stretch bg-general-white overflow-hidden flex flex-row
			items-start justify-center gap-20 max-w-full text-left text-base
			text-general-1-primary font-button-space-grotesk w-full mq925:flex-col mq925:mb-[50px] section_background_color">
	<div class="side-img absolute h-full max-h-full w-full transform translate-x-[50%] left-[-995px] mq925:relative mq925:left-0 mq925:transform-unset">
		<img decoding="async" class="h-[774px] relative max-h-full max-w-full flex-1 mq925:stm-img-cover "
			 alt="" src="<?php echo esc_url( $background_image_url ) ?>"></div>
	<div class="max-w-[1170px] flex flex-col items-start justify-start pt-[197px]
			px-0 pb-0 box-border w-full mq925:pt-32 mq925:box-border
			mq925:min-w-full mq1875:flex-1 pl-[280px] min-h-[774px] mq925:px-[25px] mq925:pt-[50px] mq925:min-h-[500px] mq925:px-[25px]">
		<div class="self-stretch flex flex-col items-start justify-start gap-[30px]">

			<?php if ( ! empty( $settings['label'] ) ) : ?>
			<<?php echo esc_attr( $label_tag ); ?> class="label self-stretch relative tracking-[0.25em]
			leading-[22px] uppercase text-general-1-primary elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'label' ); ?>>
			<?php echo esc_html( $settings['label'] ); ?>
		</<?php echo esc_attr( $label_tag ); ?>>
		<?php endif; ?>


		<<?php echo esc_attr( $heading_tag ); ?> class="m-0 self-stretch relative text-29xl
		tracking-[-0.02em] leading-[54px] font-medium font-[inherit]
		text-general-1-secondary mq450:text-10xl mq450:leading-[32px]
		mq925:text-19xl mq925:leading-[43px] heading elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'heading' ); ?>>
		<?php echo esc_html( $settings['heading'] ); ?>
	</<?php echo esc_attr( $heading_tag ); ?>>
	<<?php echo esc_attr( $subtitle_tag ); ?> class="subtitle m-0 relative text-5xl tracking-[-0.01em] leading-[30px]
	font-medium font-[inherit] text-general-1-secondary-variant
	mq450:text-lgi mq450:leading-[24px] elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'subtitle' ); ?>>
	<?php echo $settings['subtitle']; ?>
</<?php echo esc_attr( $subtitle_tag ); ?>>
<<?php echo esc_attr( $description_tag ); ?> class="description relative leading-[26px]
font-body-b4-merriweather-13 text-elements-neutral elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'description' ); ?>>
<?php echo $settings['description'] ?>
</<?php echo esc_attr( $description_tag ); ?>>

</div>
</div>
</div>
</section>



