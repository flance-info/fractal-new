<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$this->add_inline_editing_attributes( 'label', 'none' );
$this->add_inline_editing_attributes( 'heading', 'none' );
$this->add_inline_editing_attributes( 'description', 'advanced' );
$label_tag       = $settings['label_html_tag'] ?? 'div';
$subtitle_tag    = $settings['subtitle_html_tag'] ?? 'div';
$heading_tag     = $settings['heading_html_tag'] ?? 'h2';
$description_tag = $settings['description_html_tag'] ?? 'div';
?>
<div class="w-full">
	<section class="self-stretch bg-elements-neutral-4 flex flex-col
		items-center justify-center py-[140px]  box-border
		gap-[60px] max-w-full text-left text-sm text-general-white
		 font-button-space-grotesk mq925:gap-[15px] mq925:py-[59px]
		  mq925:box-border mq1400:gap-[30px] mq1400:py-[91px] mq925:px-[25px] section_background_color">
		<div class="self-stretch flex flex-row items-start justify-center
			max-w-full text-center text-base text-general-1-primary  sblock">
			<div class="flex flex-col items-start justify-start gap-[30px] max-w-full">
				<div class="flex flex-row items-start justify-start py-0 pl-[315px] pr-[318px] mq450:pl-5 mq450:pr-5 mq450:box-border mq925:pl-[157px] mq925:pr-[159px] mq925:box-border">

					<?php if ( ! empty( $settings['label'] ) ) : ?>
					<<?php echo esc_attr( $label_tag ); ?> class="label relative tracking-[0.25em]
					leading-[22px] uppercase elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'label' ); ?>>
					<?php echo esc_html( $settings['label'] ); ?>
				</<?php echo esc_attr( $label_tag ); ?>>
				<?php endif; ?>

			</div>


			<<?php echo esc_attr( $heading_tag ); ?>
			class="m-0 relative text-29xl tracking-[-0.02em] leading-[54px]
			font-medium font-[inherit] text-general-1-secondary mq450:text-10xl mq450:leading-[32px]
			mq925:text-19xl mq925:leading-[43px]
			heading elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'heading' ); ?>>
			<?php echo esc_html( $settings['heading'] ); ?>
		</<?php echo esc_attr( $heading_tag ); ?>>

</div>
</div>
<div class="max-w-[1170px] flex flex-col items-start justify-start w-full gap-[60px]">
	<div class="self-stretch flex flex-row items-start justify-center flex-wrap content-start gap-[30px] max-w-full">
		<?php foreach ( $settings['blog_posts'] as $index => $post ) :
		if ( $index > 2 ) {
			continue;
		}
		$post_image_url       = $post['post_image']['url'] ?? \Elementor\Utils::get_placeholder_image_src();
		$post_image_hover_url = $post['post_image_hover']['url'] ?? \Elementor\Utils::get_placeholder_image_src();
		$post_url             = $post['post_link']['url'] ?? "#";
		?>
		<div class="flex-1 overflow-hidden flex flex-col items-start justify-start gap-[30px] min-w-[277px] max-w-full  stm-hover-box">
			<div class=" stm-img self-stretch flex flex-row items-start justify-start max-w-full">
				<img decoding="async" class=" stm-m-img  h-60 flex-1 relative
					max-w-full overflow-hidden object-cover  side-img" loading="lazy" alt="" src="<?php echo esc_url( $post_image_url ); ?>">
				<img decoding="async" class="h-60 flex-1 relative max-w-full
					overflow-hidden object-cover stm-h-img  side-img" alt="" src="<?php echo esc_url( $post_image_hover_url ); ?>">

			</div>
			<div class="self-stretch overflow-hidden flex flex-row items-start justify-start gap-[50px] max-w-full text-base text-general-1-secondary-variant mq450:gap-[25px]">
				<a href="<?php echo esc_url( $post_url ); ?>" class="flex-1 flex flex-col items-start justify-start gap-5 max-w-full text-5xl">

					<<?php echo esc_attr( $subtitle_tag ); ?> class="stm-title m-0
					self-stretch relative tracking-[-0.01em]
					leading-[30px] font-medium font-[inherit] mq450:text-lgi mq450:leading-[24px] subtitle text-general-1-secondary-variant">
					<?php echo esc_html( $post['post_title'] ); ?>
				</<?php echo esc_attr( $subtitle_tag ); ?>>

				<<?php echo esc_attr( $description_tag ); ?> class="relative text-base leading-[26px]
				font-body-b4-merriweather-13 text-elements-neutral description">
				<?php echo  $post['post_description'] ; ?>
			</<?php echo esc_attr( $description_tag ); ?>>
			</a>
		</div>
	</div>

	<?php endforeach; ?>
</div>
<div class="self-stretch flex flex-row items-start justify-center flex-wrap content-start gap-[30px] max-w-full">
	<?php foreach ( $settings['blog_posts'] as $index => $post ) :
	if ( $index < 3 ) {
		continue;
	}
	$post_image_url       = $post['post_image']['url'] ?? \Elementor\Utils::get_placeholder_image_src();
	$post_image_hover_url = $post['post_image_hover']['url'] ?? \Elementor\Utils::get_placeholder_image_src();
	?>

	<div class="flex-1 overflow-hidden flex flex-col items-start justify-start gap-[30px] min-w-[277px] max-w-full  stm-hover-box max-w-370" >
		<div class=" stm-img self-stretch flex flex-row items-start justify-start max-w-full">
			<img decoding="async" class=" stm-m-img  h-60 flex-1 relative
					max-w-full overflow-hidden object-cover  side-img" loading="lazy" alt="" src="<?php echo esc_url( $post_image_url ); ?>">
			<img decoding="async" class="h-60 flex-1 relative max-w-full
					overflow-hidden object-cover stm-h-img  side-img" alt="" src="<?php echo esc_url( $post_image_hover_url ); ?>">

		</div>
		<div class="self-stretch overflow-hidden flex flex-row items-start justify-start gap-[50px] max-w-full text-base text-general-1-secondary-variant mq450:gap-[25px]">
			<a href="<?php echo esc_url( $post_url ); ?>" class="flex-1 flex flex-col items-start justify-start gap-5 max-w-full text-5xl">

				<<?php echo esc_attr( $subtitle_tag ); ?> class="stm-title m-0
				self-stretch relative tracking-[-0.01em]
				leading-[30px] font-medium font-[inherit] mq450:text-lgi mq450:leading-[24px] subtitle text-general-1-secondary-variant">
				<?php echo esc_html( $post['post_title'] ); ?>
			</<?php echo esc_attr( $subtitle_tag ); ?>>

			<<?php echo esc_attr( $description_tag ); ?> class="relative text-base leading-[26px]
			font-body-b4-merriweather-13 text-elements-neutral description">
			<?php echo esc_html( $post['post_description'] ); ?>
		</<?php echo esc_attr( $description_tag ); ?>>
		</a>
	</div>
</div>


<?php endforeach; ?>
</div>
</div>
</section>

</div>