<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
// Inline editing attributes
$this->add_inline_editing_attributes( 'label', 'none' );
$this->add_inline_editing_attributes( 'heading', 'none' );
$this->add_inline_editing_attributes( 'description', 'advanced' );
$label_tag            = $settings['label_html_tag'] ?? 'div';
$heading_tag          = $settings['heading_html_tag'] ?? 'h1';
$description_tag      = $settings['description_html_tag'] ?? 'div';
$background_image_url = $settings['section_background']['url'] ?? '';
?>

<div class="w-full">
	<section class="self-stretch relative  h-[460px] text-left text-base text-general-1-secondary
mq925:text-white font-body-b4-merriweather-13 section_background_color">
		<img decoding="async" class="absolute h-full top-[0px]  bottom-[0px] max-h-full w-full
			transform translate-x-[50%] left-[-385px] object-cover mq925:transform-unset mq925:left-0" alt=""
			 src="<?php echo esc_url($background_image_url) ?>">
		<div class="w-full max-w-[1170px]  h-full mx-auto flex flex-col justify-center items-start pt-[50px] mq925:px-[25px] sblock">
			<<?php echo esc_attr( $label_tag ); ?> class="tracking-[0.25em] leading-[22px] uppercase font-button-space-grotesk
			text-general-1-primary inline-block min-h-[22px] z-[100] label elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'label' ); ?>>
			<?php echo esc_html( $settings['label'] ); ?>
		</<?php echo esc_attr( $label_tag ); ?>>
		<<?php echo esc_attr( $heading_tag ); ?> class="relative font-medium text-41xl tracking-[-0.03em] leading-[5px] font-medium font-button-space-grotesk
		inline-block max-w-[820px] heading elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'heading' ); ?>>
		<?php echo esc_html( $settings['heading'] ); ?>

	</<?php echo esc_attr( $heading_tag ); ?>>
	<<?php echo esc_attr( $description_tag ); ?> class="leading-[26px] inline-block max-w-[720px] z-[2] description elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'description' ); ?>>
	<?php echo  $settings['description'] ; ?>
</<?php echo esc_attr( $description_tag ); ?>>
</div>
</section>
</div>



