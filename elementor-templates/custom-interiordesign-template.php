<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<div class="w-full">
	<section class="self-stretch bg-elements-neutral-4 flex flex-col items-center justify-start py-[140px]
			 gap-[100px] text-11xl text-general-1-secondary-variant mq925:px-[25px]">
		<div class="w-full max-w-[1170px] flex flex-col  gap-[100px] ">

			<div class="self-stretch flex flex-row items-center justify-start gap-[60px] mq925:flex-col">
				<div class="flex-1 flex flex-col items-start justify-start gap-[30px]">
					<?php
					$heading     = $settings["service_1_heading"];
					$this->add_inline_editing_attributes( "service_1_heading" , 'none' );
					$heading_tag = $settings['service_heading_tag'];
					?>
					<<?php echo esc_html( $heading_tag ); ?> class="self-stretch relative text-base tracking-[0.25em] leading-[22px]
					uppercase text-general-1-primary heading
					elementor-inline-editing" <?php echo $this->get_render_attribute_string( "service_1_heading" ); ?> >
					<?php echo esc_html( $heading ); ?>
				</<?php echo esc_html( $heading_tag ); ?>>
				<?php
				$service_number = 1;
				if ( ! empty( $settings["paragraphs_list_{$service_number}"] ) ) {
					foreach ( $settings["paragraphs_list_{$service_number}"] as $index => $paragraph ) {

						$title     = $paragraph["paragraph_title_{$service_number}"];
						$content   = $paragraph["paragraph_content_{$service_number}"];
						$title_tag = $settings["paragraph_title_tag"] ?? 'h3';
						$this->render_paragraph_service( [
								'title'     => $title,
								'paragraph' => $content,
								'title_tag' => $title_tag,
						], $service_number, $index );
					}
				}

		$bg_image    = ! empty( $settings["service_1_bg_image"]['url'] ) ? esc_url( $settings["service_1_bg_image"]['url'] ) : '';
				?>
			</div>
			<div class="flex-[0.8559] mq925:w-full mq925:min-h-[664px]  h-[692px] mq600:min-h-[320px] flex flex-col items-end justify-end p-10 box-border  bg-cover bg-no-repeat bg-[top] text-right text-base text-general-white"  style="background-image: url('<?php echo esc_url( $bg_image ); ?>');">
				<div class="hidden flex-row items-center justify-start gap-4">
					<div class="relative tracking-[0.25em] leading-[22px] uppercase">
						Learn more
					</div>
					<img class="w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/navigation1.webp">
				</div>
			</div>
		</div>
		<?php $bg_image    = ! empty( $settings["service_2_bg_image"]['url'] ) ? esc_url( $settings["service_2_bg_image"]['url'] ) : '' ; ?>
		<div class="self-stretch flex flex-row items-center justify-start gap-[60px] text-right text-base text-general-white mq925:flex-col">
			<div class="self-stretch flex-[0.8559] mq925:w-full mq925:min-h-[664px]  mq600:min-h-[320px] mq925:p-0 flex flex-col items-end justify-end p-10 bg-cover bg-no-repeat bg-[top]"  style="background-image: url('<?php echo esc_url( $bg_image ); ?>');">
				<div class="hidden flex-row items-center justify-start gap-4">
					<div class="relative tracking-[0.25em] leading-[22px] uppercase">
						Learn more
					</div>
					<img class="w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/navigation1.webp">
				</div>
			</div>
			<div class="flex-1 flex flex-col items-start justify-start gap-[30px] text-left text-11xl text-general-1-secondary-variant">
					<?php
					$heading     = $settings["service_2_heading"];
					$this->add_inline_editing_attributes( "service_2_heading" , 'none' );
					$heading_tag = $settings['service_heading_tag'];
					?>
					<<?php echo esc_html( $heading_tag ); ?> class="self-stretch relative text-base tracking-[0.25em] leading-[22px]
					uppercase text-general-1-primary heading
					elementor-inline-editing" <?php echo $this->get_render_attribute_string( "service_2_heading" ); ?> >
					<?php echo esc_html( $heading ); ?>
				</<?php echo esc_html( $heading_tag ); ?>>
				<?php
				$service_number = 2;
				if ( ! empty( $settings["paragraphs_list_{$service_number}"] ) ) {
					foreach ( $settings["paragraphs_list_{$service_number}"] as $index => $paragraph ) {

						$title     = $paragraph["paragraph_title_{$service_number}"];
						$content   = $paragraph["paragraph_content_{$service_number}"];
						$title_tag = $settings["paragraph_title_tag"] ?? 'h3';
						$this->render_paragraph_service( [
								'title'     => $title,
								'paragraph' => $content,
								'title_tag' => $title_tag,
						], $service_number, $index);
					}
				}
				?>
			</div>
		</div>
</div>
</section>
</div>



