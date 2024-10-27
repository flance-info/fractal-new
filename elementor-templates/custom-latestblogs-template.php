<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$heading_tag     = $settings['heading_html_tag'] ?: 'h2';
$label_tag       = $settings['label_html_tag'] ?: 'div';
$description_tag = $settings['description_html_tag'] ?: 'div';
$button_tag      = $settings['bttn_html_tag'] ?: 'a';
// Add inline editing attributes for each editable field
$this->add_inline_editing_attributes( 'blog_main_title', 'none' );
$this->add_inline_editing_attributes( 'blog_subtitle', 'none' );
$this->add_inline_editing_attributes( 'blog_description', 'basic' );
$this->add_inline_editing_attributes( 'button_text', 'none' );
$label_tag       = $settings['label_html_tag'] ?: 'div';
$description_tag = $settings['description_html_tag'] ?: 'div';

$title_tag       = $settings['blog_title_html_tag'] ?: 'h3';
$date_tag        = 'div';
// Apply inline editing attributes for static fields


$arrow_image_url       = $settings['icon_image']['url'] ?? \Elementor\Utils::get_placeholder_image_src();
$arrow_image_hover_url = $settings['icon_image_moved']['url'] ?? \Elementor\Utils::get_placeholder_image_src();
?>

<div class="w-full">
	<section class="self-stretch relative bg-general-white min-h-[1000px] text-sm flex flex-col items-center mq925:px-[25px]">
		<div class="w-full max-w-[1170px] flex flex-col justify-center ">


			<div class="flex flex-row mt-[148px] mb-[68px] justify-between mq925:flex-col">
				<<?php echo esc_attr( $heading_tag ); ?> class="heading  min-w-[370px] text-base tracking-[0.25em] leading-[22px] uppercase text-general-1-primary elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'blog_main_title' ); ?>>
				<?php echo esc_html( $settings['blog_main_title'] ); ?>
			</<?php echo esc_attr( $heading_tag ); ?>>

			<div class="flex flex-row">
				<div class="flex flex-col gap-[11px]">
					<<?php echo esc_attr( $label_tag ); ?> class="label text-29xl tracking-[-0.02em] leading-[54px] font-medium text-general-1-secondary inline-block w-[350px] elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'blog_subtitle' ); ?>>
					<?php echo esc_html( $settings['blog_subtitle'] ); ?>
				</<?php echo esc_attr( $label_tag ); ?>>

				<div class="flex flex-row mq925:flex-col mq925:gap-[30px]">
					<<?php echo esc_attr( $description_tag ); ?> class="description text-5xl tracking-[-0.01em] leading-[30px] font-medium text-general-1-secondary-variant inline-block w-[580px] mq925:w-full
					elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'blog_description' ); ?>>
					<?php echo esc_html( $settings['blog_description'] ); ?>
				</<?php echo esc_attr( $description_tag ); ?>>

				<<?php echo esc_attr( $button_tag ); ?> class="bttn [text-decoration:none] font-medium bg-general-white border-general-1-primary border-[2px] border-solid w-[150px] h-[50px] overflow-hidden text-center text-base text-general-1-secondary justify-center flex mbtn-prm-bord
				hover:text-white elementor-inline-editing" href="<?php echo esc_url( $settings['button_link']['url'] ); ?>" <?php echo $this->get_render_attribute_string( 'button_text' ); ?>>
				<div class="leading-[22px] font-medium flex items-center justify-center bttn">
					<?php echo esc_html( $settings['button_text'] ); ?>
				</div>
			</<?php echo esc_attr( $button_tag ); ?>>
		</div>
</div>
</div>
</div>
<div class="flex flex-row justify-between mq925:flex-col">
	<?php foreach ( $settings['blog_posts'] as $post ) :
		// Inline editing for repeater items
		$this->add_inline_editing_attributes( 'post_title', 'none' );
		$this->add_inline_editing_attributes( 'post_description', 'basic' );
		$this->add_inline_editing_attributes( 'post_date', 'none' );
		$post_image_url       = $post['post_image']['url'] ?? \Elementor\Utils::get_placeholder_image_src();
		$post_image_hover_url = $post['post_image_hover']['url'] ?? \Elementor\Utils::get_placeholder_image_src();
		?>

		<div class="w-[370px] h-[540px] overflow-hidden flex flex-col items-start justify-start gap-[30px] stm-hover-box mq925:mb-[50px] mq925:w-full">


			<div class="self-stretch relative h-60 stm-img">
				<div class="absolute inset-0 bg-gradient-hover z-[100]"></div>
				<img class="absolute h-full w-full top-0 right-0 bottom-0 left-0 max-w-full overflow-hidden max-h-full object-cover " alt="" src="<?php echo esc_url( $post_image_url ); ?>">

				<img class="absolute h-full w-full top-0 right-0 bottom-0 left-0 max-w-full overflow-hidden max-h-full object-cover hidden" alt="" src="<?php echo esc_url( $post_image_hover_url ); ?>">

				<div class="absolute top-[20px] left-[20px] bg-general-1-primary flex flex-row items-center justify-center py-[3px] px-2 text-white">
					<div class="stm-date relative leading-[20px]" <?php echo $this->get_render_attribute_string( 'post_date' ); ?>>
						<?php echo esc_html( $post['post_date'] ); ?>
					</div>
				</div>
			</div>

			<div class="self-stretch h-[270px] overflow-hidden shrink-0 flex flex-col items-start justify-between text-base text-general-1-secondary-variant">
				<div class="self-stretch flex flex-col items-start justify-start gap-5 text-5xl">
					<div class="self-stretch stm-title relative tracking-[-0.01em] leading-[30px] font-medium blog_title" <?php echo $this->get_render_attribute_string( 'post_title' ); ?>>
						<?php echo esc_html( $post['post_title'] ); ?>
					</div>
					<div class="self-stretch relative text-lg leading-[30px] font-body-b6-merriweather-11 blog_description text-elements-neutral" <?php echo $this->get_render_attribute_string( 'post_description' ); ?>>
						<?php echo esc_html( $post['post_description'] ); ?>
					</div>
				</div>

				<div class="flex flex-row items-center justify-start relative gap-4 text-right text-general-1-secondary">
					<a class="stm-gray" href="<?php echo esc_url( $post['post_link']['url'] ); ?>">
						<div class="notext-color arrow-container">
							<span class="text tracking-[0.25em] leading-[22px] uppercase z-[1]"><?php echo esc_html( $settings['icon_label'] ?? 'Read More' ); ?></span>
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


</div>
</section>
</div>



