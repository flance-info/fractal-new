<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<div class="w-full">
		<section class="mq925:mt-[100px] self-stretch relative h-[812px] text-77xl  text-general-1-secondary mq925:px-[25px] mq925:h-[800px]" xmlns="http://www.w3.org/1999/html">


			<div class="w-full max-w-[1170px]  flex items-center  h-full mx-auto slides">
				<?php foreach ( $settings['slides'] as $index => $slide ) : ?>
				<img class="slide-img-<?php echo $index + 1; ?> object-cover absolute h-full h-full !h-full  top-[0px]  bottom-[0px] max-h-full w-full transform translate-x-[50%] left-[-400px]
		mq600:top-[300px] mq600:translate-x-0 mq600:left-0 mq600:object-cover mq600:max-h-[500px]
	mq925:top-[300px] mq925:translate-x-0 mq925:left-0 mq925:object-cover mq925:max-h-[500px]"
					 src="<?php echo esc_url( $slide['slide_image']['url'] ); ?>">
				<div class="slide w-full slide-1 mq925:mt-[-160px] mq600:mt-[-135px] w-calc-100vw-minus-50px">


					<<?php echo esc_html( $slide['heading_tag'] ); ?> class="slide-heading elementor-heading-title relative font-medium text-77xl mq925:text-59xl tracking-[-4px] leading-[96px] inline-block max-w-[820px]"
					<?php if ( ! empty( $slide['heading_color'] ) ): ?> style="color: <?php echo esc_attr( $slide['heading_color'] ); ?>;" 	<?php endif; ?>
					<?php echo $this->get_render_attribute_string( 'heading_font_typography' ); ?>>
					<?php echo esc_html( $slide['slide_heading'] ); ?>
					</<?php echo esc_html( $slide['heading_tag'] ); ?>>
				</div>
			<?php endforeach; ?>
			</div>

	<div class="absolute top-[calc(50%_-_148px)]
		 overflow-hidden flex flex-col items-left justify-left gap-3.5
		 right-[calc((100vw-1172px)/4)]
		 ">

		<a href="<?php echo esc_url( $settings['facebook_url']['url'] ); ?>" target="_blank" rel="noopener noreferrer" class="rounded-11xl border-gray-200 border-[1px] border-solid overflow-hidden flex flex-col items-center justify-center p-3">
			<img class="w-6 relative h-6" alt="Facebook" src="/wp-content/themes/fractal/fractal/build/iconssmall-iconssocialfacebook-filled.webp">
		</a>
		<a href="<?php echo esc_url( $settings['youtube_url']['url'] ); ?>" target="_blank" rel="noopener noreferrer" class="rounded-11xl border-gray-200 border-[1px] border-solid overflow-hidden flex flex-col items-center justify-center p-3">
			<img class="w-6 relative h-6 object-cover" alt="YouTube" src="/wp-content/themes/fractal/fractal/build/iconssmall-iconssocialyoutube@2x.webp">
		</a>
		<a href="<?php echo esc_url( $settings['instagram_url']['url'] ); ?>" target="_blank" rel="noopener noreferrer" class="rounded-11xl border-gray-200 border-[1px] border-solid overflow-hidden flex flex-col items-center justify-center p-3">
			<img class="w-6 relative h-6 object-cover" alt="Instagram" src="/wp-content/themes/fractal/fractal/build/iconssmall-iconssocialinstagram@2x.webp">
		</a>
		<a href="<?php echo esc_url( $settings['twitter_url']['url'] ); ?>" target="_blank" rel="noopener noreferrer" class="rounded-11xl border-gray-200 border-[1px] border-solid overflow-hidden flex flex-col items-center justify-center p-3">
			<img class="w-6 relative h-6" alt="Twitter" src="/wp-content/themes/fractal/fractal/build/iconssmall-iconssocialtwitter.webp">
		</a>
		<a href="<?php echo esc_url( $settings['linkedin_url']['url'] ); ?>" target="_blank" rel="noopener noreferrer" class="rounded-11xl border-gray-200 border-[1px] border-solid overflow-hidden flex flex-col items-center justify-center p-3">
			<img class="w-6 relative h-6 object-cover" alt="LinkedIn" src="/wp-content/themes/fractal/fractal/build/iconssmall-iconssociallinkedin@2x.webp">
		</a>

	</div>
	<div class="w-full max-w-[1170px] relative flex items-center bottom-[200px] h-[80px] bottom-[100px] mx-auto mq925:bottom-[120px]">

		<img class="nav-left absolute right-[100px] bottom-[0px] w-[70px] h-[70px] transition-opacity duration-300 hover:opacity-0" alt="" src="/wp-content/themes/fractal/fractal/build/navigation.webp">
		<img class="nav-left absolute right-[100px] bottom-[0px] w-[70px] h-[70px] opacity-0 hover:opacity-100 transition-opacity duration-300 rotate-180" alt="" src="/wp-content/themes/fractal/fractal/build/orange_nav.webp">

		<img class="nav-right absolute right-[0px] bottom-[0px] w-[70px] h-[70px]  transition-opacity duration-300 hover:opacity-0" alt="" src="/wp-content/themes/fractal/fractal/build/navigation1.webp">
		<img class="nav-right absolute right-[0px] bottom-[0px] w-[70px] h-[70px] opacity-0 hover:opacity-100 transition-opacity duration-300" alt="" src="/wp-content/themes/fractal/fractal/build/orange_nav.webp">
	</div>
	</section>
</div>



