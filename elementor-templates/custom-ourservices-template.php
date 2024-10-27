<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<div class="w-full">

	<section class="self-stretch bg-elements-neutral-4 flex flex-col items-center justify-center py-[140px] gap-[80px]
			text-general-1-secondary mq925:px-[25px]">
		<div class="w-full max-w-[1170px] flex flex-col gap-[100px]">
			<div class="max-w-[991px] w-full flex flex-col items-center justify-start text-center text-general-1-primary mb-[-45px]">
				<div class="self-stretch relative tracking-[0.25em] leading-[22px] uppercase label_one elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'label_one' ); ?>>
					<?php echo esc_html( $label_one ); ?>
				</div>
				<<?php echo esc_html( $heading_tag ); ?> class="self-stretch relative text-59xl tracking-[-0.04em] leading-[20px] text-general-1-secondary font-medium my-[64px] mq925:leading-[70px] mq925:my-[30px] heading elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'heading' ); ?> >
				<?php echo esc_html( $heading ); ?>
			</<?php echo esc_html( $heading_tag ); ?>>
		</div>
		<div class="self-stretch flex flex-row items-center justify-start gap-[60px] text-29xl mq925:flex-col">
			<div class="flex-1 flex flex-col items-start justify-start gap-[30px]">
				<?php $this->render_service( $services[1], 1 );
				$bg_image = $services[1]['bg_image'];
				?>
			</div>
			<div class="flex-[0.8559] mq925:w-full mq925:min-h-[664px] h-[664px] flex flex-col items-end justify-end p-10 box-border gap-2.5  bg-cover bg-no-repeat bg-[top] text-right text-base text-general-white" style="background-image: url('<?php echo esc_url( $bg_image ); ?>');">
				<div onclick="openModal()" class="flex flex-row items-center justify-start relative gap-4 text-right text-base">


					<div class="notrans arrow-container">
						<span class="text tracking-[0.25em] leading-[22px]  uppercase z-[1]">Learn more</span>
						<div class="circle">
							<img class="stm-mb w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/navigation2.webp">
							<img class="stm-mb1 w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/orange_nav.webp">
						</div>

					</div>
				</div>


			</div>
		</div>
		<div class="self-stretch flex flex-row items-center justify-start gap-[60px] text-right text-general-white mq925:flex-col">
			<?php $bg_image = $services[2]['bg_image']; ?>
			<div class="flex-[0.8559] mq925:w-full mq925:min-h-[664px]  h-[664px] flex flex-col items-end justify-end p-10 box-border gap-2.5  bg-cover bg-no-repeat bg-[top]" style="background-image: url('<?php echo esc_url( $bg_image ); ?>');">

				<div onclick="openModal()" class="flex flex-row items-center justify-start relative gap-4 text-right text-base">


					<div class="notrans arrow-container">
						<span class="text tracking-[0.25em] leading-[22px]  uppercase z-[1]">Learn more</span>
						<div class="circle">
							<img class="stm-mb w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/navigation2.webp">
							<img class="stm-mb1 w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/orange_nav.webp">
						</div>

					</div>
				</div>


			</div>
			<div class="flex-1 flex flex-col items-start justify-start gap-[30px] text-left text-29xl text-general-1-secondary">
				<?php $this->render_service( $services[2], 2 );
				$bg_image = $services[2]['bg_image'];
				?>
			</div>
		</div>
		<div class="self-stretch flex flex-row items-center justify-start gap-[60px] text-29xl mq925:flex-col">
			<div class="flex-1 flex flex-col items-start justify-start gap-[30px]">
				<?php $this->render_service( $services[3], 3 );
				$bg_image = $services[3]['bg_image'];
				?>
			</div>
			<div class="flex-[0.8559] mq925:w-full mq925:min-h-[664px]  h-[664px] flex flex-col items-end justify-end p-10 box-border gap-2.5 bg-cover bg-no-repeat bg-[top] text-right text-base text-general-white" style="background-image: url('<?php echo esc_url( $bg_image ); ?>');">
				<div onclick="openModal()" class="flex flex-row items-center justify-start relative gap-4 text-right text-base">


					<div class="notrans arrow-container">
						<span class="text tracking-[0.25em] leading-[22px]  uppercase z-[1]">Learn more</span>
						<div class="circle">
							<img class="stm-mb w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/navigation2.webp">
							<img class="stm-mb1 w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/orange_nav.webp">
						</div>

					</div>
				</div>


			</div>
		</div>
		<div class="self-stretch flex flex-row items-center justify-start gap-[60px] text-right text-general-white mq925:flex-col">
			<?php
			$bg_image = $services[4]['bg_image'];
			?>
			<div class="self-stretch flex-[0.8559] mq925:w-full mq925:min-h-[664px]  flex flex-col items-end justify-end p-10 gap-2.5  bg-cover bg-no-repeat bg-[top]" style="background-image: url('<?php echo esc_url( $bg_image ); ?>');">
				<div onclick="openModal()" class="flex flex-row items-center justify-start relative gap-4 text-right text-base">


					<div class="notrans arrow-container">
						<span class="text tracking-[0.25em] leading-[22px]  uppercase z-[1]">Learn more</span>
						<div class="circle">
							<img class="stm-mb w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/navigation2.webp">
							<img class="stm-mb1 w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/orange_nav.webp">
						</div>

					</div>
				</div>
			</div>
			<div class="flex-1 flex flex-col items-start justify-start gap-[30px] text-left text-29xl text-general-1-secondary">
				<?php $this->render_service( $services[4], 4 ); ?>
			</div>
		</div>
	</section>
</div>



