<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$heading_tag     = $settings['heading_html_tag'] ?? 'h2';
$description_tag = $settings['description_html_tag'] ?? 'div';
$subtitle_tag = $settings['subtitle_html_tag'] ?? 'div';

?>
<div class="w-full">
	<section class="self-stretch bg-general-white flex flex-col items-center justify-start py-[140px] px-5 box-border gap-[100px]
			max-w-full text-left text-29xl text-general-1-secondary-variant font-button-space-grotesk mq450:gap-[25px]
			 mq925:gap-[50px] mq925:pt-[38px] mq925:pb-[38px] mq925:box-border mq1400:pt-[59px] mq1400:pb-[59px] mq1400:box-border mq925:px-[25px]  section_background_color">
		<?php foreach ( $settings['blog_posts'] as $index => $post ) :

		$image_url       = $post['post_image']['url'] ?? \Elementor\Utils::get_placeholder_image_src();
		$post_title        = $post['post_title'];
						$post_subtitle    = $post['post_subtitle'];
						$post_description  = $post['post_description'];

		?>
			<?php if ( $index % 2 === 0 ) : ?>
			<div class="max-w-[1170px] flex flex-row items-left w-full justify-start gap-[60px] w-full mq1400:gap-[30px] mq1400:flex-wrap stm-shop-<?php echo $index ?>">
				<div class="flex-1 flex flex-col items-start justify-start gap-[30px] min-w-[361px] max-w-full mq450:min-w-full mq1400:flex-1 ">

					<<?php echo esc_attr( $heading_tag ); ?> class="heading m-0 relative text-inherit
					tracking-[-0.02em] leading-[54px] font-medium font-[inherit] mq450:text-10xl mq450:leading-[32px] mq925:text-19xl mq925:leading-[43px]">
						<?php echo esc_html($post_title ); ?>
					</<?php echo esc_attr( $heading_tag ); ?>>

					<<?php echo esc_attr( $subtitle_tag ); ?> class="subtitle m-0 relative text-5xl tracking-[-0.01em]
				leading-[30px] font-medium font-[inherit] mq450:text-lgi mq450:leading-[24px]">
					<?php echo  $post_subtitle ; ?>
					</<?php echo esc_attr( $subtitle_tag ); ?>>

					<<?php echo esc_attr( $description_tag  ); ?> class="description relative text-base leading-[26px] font-body-b4-merriweather-13 text-elements-neutral">
						<?php echo $post_description ?>
					</<?php echo esc_attr( $description_tag  ); ?>>
				</div>
				<div class="side-img h-[524px] flex-[0.8559] flex flex-col items-end justify-end p-10 box-border
				 bg-cover bg-no-repeat bg-[top]
				min-w-[361px] max-w-full text-right text-base text-general-white mq450:min-w-full mq1400:flex-1"
				 style="background-image: url(' <?php echo esc_url($image_url) ?>')">

				</div>
			</div>
		<?php else: ?>
			<div class="max-w-[1170px] flex flex-row items-left w-full justify-start gap-[60px] w-full
			 text-right text-base text-general-white mq1400:gap-[30px] mq1400:flex-wrap stm-shop-<?php echo $index ?>">
				<div class="side-img h-[492px] flex-[0.8559] flex flex-col items-end justify-end p-10 box-border
				 bg-cover
				  bg-no-repeat bg-[top] min-w-[361px] max-w-full
				  mq450:min-w-full mq1400:flex-1"  style="background-image: url(' <?php echo esc_url($image_url) ?>')">

				</div>
				<div class="flex-1 flex flex-col items-start justify-start gap-[30px] min-w-[361px] max-w-full text-left text-29xl text-general-1-secondary-variant mq450:min-w-full mq1400:flex-1">
					<<?php echo esc_attr( $heading_tag ); ?> class="heading m-0 relative text-inherit tracking-[-0.02em] leading-[54px] font-medium font-[inherit] mq450:text-10xl mq450:leading-[32px] mq925:text-19xl mq925:leading-[43px]">
						<?php echo esc_html($post_title ); ?>
					</<?php echo esc_attr( $heading_tag ); ?>>
					<<?php echo esc_attr( $subtitle_tag ); ?> class="subtitle m-0 relative text-5xl tracking-[-0.01em] leading-[30px] font-medium font-[inherit] mq450:text-lgi mq450:leading-[24px]">
					<?php echo  $post_subtitle ; ?>
					</<?php echo esc_attr( $subtitle_tag ); ?>>
					<<?php echo esc_attr( $description_tag  ); ?> class="description relative text-base leading-[26px] font-body-b4-merriweather-13 text-elements-neutral">
						<?php echo $post_description ?>
					</<?php echo esc_attr( $description_tag  ); ?>>
				</div>
			</div>
		<?php endif; ?>

		<?php
		endforeach;
		?>
	</section>

</div>