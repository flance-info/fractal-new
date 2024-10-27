<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<div class="w-full">

	<section class="self-stretch bg-general-1-secondary min-h-[774px] flex flex-row mq925:flex-col items-center text-general-1-secondary w-full
			justify-center gap-20 mq925:p-0 section_background_color">


		<div class="absolute  transform translate-x-[50%] ml-[-1950px] pt-[5px] mq925:relative mq925:m-0 mq925:p-0 mq925:transform-unset">
			<img class="w-[575px] h-[774px] side-img" alt="" src="<?php echo esc_url( $image_url ); ?>">
		</div>


		<div class="w-full max-w-[975px] ml-[175px] h-full mq925:ml-0 w-calc-100vw-minus-50px mq925:mb-[100px]">
			<div class="flex-1 flex flex-col items-start justify-start gap-[30px] pl-[75px] pt-[95px]
		mq925:pl-0 mq925:pt-[40px] ">
				<div class="self-stretch relative tracking-[0.25em] leading-[22px] uppercase text-general-1-primary heading-one elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'heading_one' ); ?>>
				<?php echo esc_html( $heading_one ); ?>
			</div>

			<<?php echo esc_html( $heading_two_html_tag ); ?> class="self-stretch relative text-59xl tracking-[-0.04em] leading-[84px] text-general-white mq925:text-41xl heading-two elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'heading_two' ); ?> >
			<?php echo esc_html( $heading_two ); ?>
		</<?php echo esc_html( $heading_two_html_tag ); ?>>
		<div class="self-stretch relative text-5xl tracking-[-0.01em] leading-[30px] font-medium text-general-white paragraph_one elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'paragraph_one' ); ?>>
			<?php echo $paragraph_one; ?>
		</div>

		<div class="self-stretch relative leading-[26px] font-body-b6-merriweather-11 text-elements-neutral paragraph_two elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'paragraph_two' ); ?>>
			<?php echo $paragraph_two; ?>
		</div>

		<div onclick="openModal()" class="flex flex-row items-center justify-start relative gap-4 text-right text-base">


			<div class="arrow-container">
				<span class="text tracking-[0.25em] leading-[22px]  uppercase z-[1]">Learn more</span>
				<div class="circle">
					<img class="stm-mb w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/navigation2.webp">
					<img class="stm-mb1 w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/moved-arrow.webp">
				</div>

			</div>
		</div>


</div>
</div>

</section>
</div>



