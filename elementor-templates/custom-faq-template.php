<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$this->add_inline_editing_attributes( 'label', 'none' );
$this->add_inline_editing_attributes( 'subtitle', 'none' );
$this->add_inline_editing_attributes( 'heading', 'none' );
$this->add_inline_editing_attributes( 'description', 'advanced' );

$label_tag       = $settings['label_html_tag'] ?? 'div';
$subtitle_tag    = $settings['subtitle_html_tag'] ?? 'div';
$heading_tag     = $settings['heading_html_tag'] ?? 'h1';
$description_tag = $settings['description_html_tag'] ?? 'div';

?>

<div class="w-full">

	<section
			class="section_background_color self-stretch bg-general-1-primary flex flex-col items-center justify-start py-[140px] px-5 box-border max-w-full text-left text-base text-general-white font-headlines-h4-dm-sans-30 mq450:gap-5 mq925:gap-10 mq925:pt-[59px] mq925:pb-[59px] mq925:box-border mq1400:pt-[91px] mq1400:pb-[91px] mq1400:box-border">
		<div class="sblock w-[1170px] flex flex-row items-start justify-center gap-[30px] max-w-full mq1400:flex-wrap">
			<div class="w-[270px] flex flex-row items-start justify-start pt-3 px-0 pb-0 box-border">

					<?php if ( ! empty( $settings['label'] ) ) : ?>
					<<?php echo esc_attr( $label_tag ); ?> class="label relative leading-[22px] uppercase
				elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'label' ); ?>>
					<?php echo esc_html( $settings['label'] ); ?>
				</<?php echo esc_attr( $label_tag ); ?>>
				<?php endif; ?>
			</div>
			<div class="flex-1 flex flex-col items-start justify-start gap-[72px] min-w-[565px] min-h-[872px] max-w-full text-center text-29xl font-button-space-grotesk mq925:min-w-full mq1400:min-h-[auto]">


						<<?php echo esc_attr( $heading_tag ); ?>
				class="m-0 relative text-inherit tracking-[-0.02em] leading-[54px]
				 font-medium font-[inherit] inline-block max-w-full
				  mq450:text-10xl mq450:leading-[32px]
				  mq925:text-19xl mq925:leading-[43px]
				heading elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'heading' ); ?>>
		<?php echo esc_html( $settings['heading'] ); ?>
	</<?php echo esc_attr( $heading_tag ); ?>>
				<div class="self-stretch flex flex-col items-start justify-start gap-[30px] max-w-full text-left text-11xl font-headlines-h4-dm-sans-30">
					<?php foreach ( $settings['faq_items'] as $index => $post ) :

					?>

					<div class="stm-faq self-stretch flex flex-row items-start justify-center py-[11px] px-0 box-border gap-2.5 max-w-full mq925:flex-wrap">
						<div class="flex-1 flex flex-col items-start justify-start pt-1.5 px-0 pb-0 box-border gap-[26px] min-w-[528px] max-w-full mq925:min-w-[80%]">


								<<?php echo esc_attr( $subtitle_tag ); ?> class="cursor-pointer subtitle
							m-0 relative text-inherit tracking-[-0.01em]
							 leading-[36px] font-bold font-[inherit] mq450:text-lg
							  mq450:leading-[22px] mq925:text-5xl mq925:leading-[29px]
							">
						<?php echo esc_html( $post['post_title'] ); ?>
					</<?php echo esc_attr($subtitle_tag); ?>>


						<<?php echo esc_attr($description_tag); ?> class="description stm-answer relative text-lg
						leading-[30px] font-body-b4-merriweather-13
						" >
							<?php echo wp_kses_post(  $post['post_description'] ); ?>
					</<?php echo esc_attr($description_tag); ?>>

						</div>
						<img decoding="async" class="cursor-pointer stm-minus h-12 w-12 relative overflow-hidden shrink-0" loading="lazy" alt="" src="/wp-content/themes/fractal/fractal/build/feather-iconsminuscircle.webp">
						<img decoding="async" class="cursor-pointer stm-plus h-12 w-12 relative overflow-hidden shrink-0" loading="lazy" alt="" src="/wp-content/themes/fractal/fractal/build/feather-iconspluscircle.webp">
					</div>

					<?php endforeach; ?>

				</div>
			</div>
		</div>
	</section>


</div>