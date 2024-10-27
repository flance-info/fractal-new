<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$heading_html_tag = $settings['heading_html_tag'];
$bg_image    = (!empty( $settings['works_list'][0]['work_image']['url']))?$settings['works_list'][0]['work_image']['url']:$this->default_values[0]['work_image'] ;
$this->add_inline_editing_attributes( 'heading', 'none' );
$work_title_tag = $settings['work_title_tag'];
?>

<div class="w-full">
	<section class="self-stretch overflow-hidden flex flex-col items-center justify-center
		relative  bg-cover bg-no-repeat bg-[top] text-23xl
 text-general-white" style="background-image: url('<?php echo esc_url($bg_image) ?>')">
		<<?php echo esc_html( $heading_html_tag ); ?> class="max-w-[1170px] w-full text-base tracking-[0.25em] leading-[22px]
	 uppercase inline-block z-[2] mt-[100px] mb-[-100px] h-[0px]  mq925:pl-[50px] mq925:mt-[50px]
		heading elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'heading' ); ?>>
			<?php echo esc_html( $settings['heading'] ); ?>
		</<?php echo esc_html( $heading_html_tag ); ?> >
		<div class="w-full self-stretch flex flex-row mq925:flex-col">

			<?php foreach ( $settings['works_list'] as $i => $work ):
				$this->render_service( $work, $settings, $i );
				?>
				<div class="self-stretch w-px relative bg-general-white opacity-[0.25]"></div>
				<?php endforeach; ?>
		</div>
	</section>
</div>



