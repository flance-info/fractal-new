<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$heading_html_tag = $settings['heading_html_tag'];
$this->add_inline_editing_attributes( 'label', 'none' );
$this->add_inline_editing_attributes( 'heading', 'none' );
$work_title_tag = $settings['work_title_tag'];

$arrow_image_url       = $settings['icon_image']['url'] ?? \Elementor\Utils::get_placeholder_image_src();
$arrow_image_hover_url = $settings['icon_image_moved']['url'] ?? \Elementor\Utils::get_placeholder_image_src();
$arrow_image_label = $settings['icon_label'] ?? 'read more';

$icon_type = $settings['icon_type'] ?? '';
?>

<div class="w-full">
	<section class="self-stretch overflow-hidden flex flex-col items-start justify-center text-17xl">
		<div class="self-stretch bg-general-1-secondary flex flex-col items-center justify-center pt-[140px] px-0 pb-[60px] gap-[30px] text-center text-base text-general-1-primary">
			<div class="relative tracking-[0.25em] leading-[22px] uppercase label elementor-inline-editing label" <?php echo $this->get_render_attribute_string( 'label' ); ?>>
				<?php echo esc_html( $settings['label'] ); ?>
			</div>
			<<?php echo esc_html( $heading_html_tag ); ?> class="relative text-59xl tracking-[-0.04em] leading-[84px] text-general-white heading elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'heading' ); ?>>
			<?php echo esc_html( $settings['heading'] ); ?>
		</<?php echo esc_html( $heading_html_tag ); ?> >
</div>

<div class="self-stretch flex flex-row items-center justify-start  text-general-white mq925:flex-col mq925:self-stretch mq925:h-[2000px]">
	<?php foreach ( $settings['works_list'] as $index => $work ) :
	if ( $index > 3 ) {
		continue;
	}
	?>
	<div class="work-item flex-1 relative h-[480px]  bg-cover bg-no-repeat bg-[top] mq925:w-full" style="background-image: url('<?php echo esc_url( $work['work_image']['url'] ); ?>');">
		<div class="bg-gradient-hover h-full">
			<div class="absolute h-full w-full top-[780px] right-[0px] bottom-[-780px] left-[0px] bg-general-1-secondary-variant opacity-[0]"></div>

			<div class="absolute w-[calc(100%_-_80px)] right-[40px] bottom-[41px] left-[40px] flex flex-col items-start justify-end gap-5">
				<<?php echo esc_html( $work_title_tag ); ?> class="work_title text-17xl self-stretch relative tracking-[-0.01em] leading-[42px] fade-out h-100 work_title">
				<?php echo esc_html( $work['work_title'] ); ?>
			</<?php echo esc_html( $work_title_tag ); ?>>
			<div class="work-description w-[303px] relative text-lg leading-[30px] font-body-b6-merriweather-11  fade-out work_description">
				<?php echo esc_html( $work['work_description'] ); ?>
			</div>

			<?php



			$post_link = esc_url($work['work_link']['url'] ); ?>
			<a <?php $this->get_link_attributes( $icon_type, $post_link ) ?> class="flex flex-row items-center justify-start relative gap-4 text-right text-base">


				<div class="arrow-container">
					<span class="text tracking-[0.25em] leading-[22px]  uppercase z-[1]"><?php echo esc_html( 	$arrow_image_label ); ?></span>
					<div class="circle">

				<img class="stm-mb w-[70px] relative h-[70px]" alt="" src="<?php echo esc_url( $arrow_image_url ); ?>">
					<img class="stm-mb1 w-[70px] relative h-[70px]" alt="" src="<?php echo esc_url( $arrow_image_hover_url ) ?>">


					</div>

				</div>
			</a>
		</div>
	</div>
</div>
<?php endforeach; ?>

</div>

<div class="self-stretch flex flex-row items-center justify-start text-general-white mq925:flex-col mq925:self-stretch mq925:h-[2000px]">
	<?php foreach ( $settings['works_list'] as $index => $work ) :
	if ( $index < 4 ) {
		continue;
	}
	?>
	<div class="work-item flex-1 relative h-[480px]  bg-cover bg-no-repeat bg-[top] mq925:w-full" style="background-image: url('<?php echo esc_url( $work['work_image']['url'] ); ?>');">
		<div class="bg-gradient-hover h-full">
			<div class="absolute h-full w-full top-[780px] right-[0px] bottom-[-780px] left-[0px] bg-general-1-secondary-variant opacity-[0]"></div>

			<div class="absolute w-[calc(100%_-_80px)] right-[40px] bottom-[41px] left-[40px] flex flex-col items-start justify-end gap-5">
				<<?php echo esc_html( $work_title_tag ); ?> class="work_title text-17xl self-stretch relative tracking-[-0.01em] leading-[42px] fade-out h-100 work_title">
				<?php echo esc_html( $work['work_title'] ); ?>
			</<?php echo esc_html( $work_title_tag ); ?>>
			<div class="work-description w-[303px] relative text-lg leading-[30px] font-body-b6-merriweather-11  fade-out work_description">
				<?php echo esc_html( $work['work_description'] ); ?>
			</div>


			<?php 		$post_link = esc_url($work['work_link']['url'] ); ?>
			<a <?php $this->get_link_attributes( $icon_type, $post_link ) ?> class="flex flex-row items-center justify-start relative gap-4 text-right text-base">

				<div class="arrow-container">
					<span class="text tracking-[0.25em] leading-[22px]  uppercase z-[1]"><?php echo esc_html( 	$arrow_image_label ); ?></span>
					<div class="circle">
							<img class="stm-mb w-[70px] relative h-[70px]" alt="" src="<?php echo esc_url( $arrow_image_url ); ?>">
					<img class="stm-mb1 w-[70px] relative h-[70px]" alt="" src="<?php echo esc_url( $arrow_image_hover_url ) ?>">
					</div>

				</div>
			</a>
		</div>
	</div>
</div>
<?php endforeach; ?>
</div>

</section>
</div>



