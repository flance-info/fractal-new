<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
// Add inline editing attributes
$this->add_inline_editing_attributes( 'main_title', 'none' );
$this->add_inline_editing_attributes( 'subtitle', 'basic' );
$this->add_inline_editing_attributes( 'description', 'basic' );
$this->add_inline_editing_attributes( 'submit_text', 'none' );
// Retrieve Arrow Images
$arrow_image_url       = $settings['icon_image']['url'] ?? \Elementor\Utils::get_placeholder_image_src();
$arrow_hover_image_url = $settings['icon_image_moved']['url'] ?? \Elementor\Utils::get_placeholder_image_src();
$side_im_url           = $settings['side_im_url']['url'] ?? \Elementor\Utils::get_placeholder_image_src();
?>

<section class="self-stretch bg-general-1-secondary flex flex-row items-center justify-start
		 box-border relative
		max-w-full w-full text-center text-base text-general-white
		font-button-space-grotesk mq925:py-[65px]
		 mq925:box-border  mq1400:box-border section_background_color">
	<div class="ml-auto bg-general-1-primary self-stretch flex-1 sblock"></div>
	<div class="max-w-[1170px] w-full bg-general-1-primary py-[100px] sblock">


		<div class="wpcf7 js" id="wpcf7-f784-p418-o1" lang="en-US" dir="ltr">
			<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p>
				<ul></ul>
			</div>
			<form action="" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
				<div style="display: none;">
					<input type="hidden" name="_wpcf7" value="784">
					<input type="hidden" name="_wpcf7_version" value="5.9.8">
					<input type="hidden" name="_wpcf7_locale" value="en_US">
					<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f784-p418-o1">
					<input type="hidden" name="_wpcf7_container_post" value="418">
					<input type="hidden" name="_wpcf7_posted_data_hash" value="">
					<input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit" value="Submit">
				</div>
				<div class="hidden">

					<span class="wpcf7-spinner"></span>
				</div>

				<div class="self-stretch flex flex-row items-start justify-start max-w-full text-left">
					<div class="max-w-[810px] flex flex-col items-start justify-start gap-8 w-full mq450:gap-4">
						<div class="self-stretch flex flex-row items-start justify-start flex-wrap content-start gap-[41px] max-w-full mq450:gap-5 mq925:px-[25px]">
							<div class="flex flex-col items-start justify-start pt-[27px] px-0 pb-0 mq925:w-full">
								<div class="main-title relative tracking-[0.25em] leading-[22px] uppercase z-[1] elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'main_title' ); ?>>
									<?php echo esc_html( $settings['main_title'] ); ?>
								</div>
							</div>

							<div class="subtitle m-0 flex-1 relative text-29xl tracking-[-0.02em] leading-[54px]
							font-medium font-[inherit] inline-block max-w-full z-[1]
							mq450:text-10xl mq450:leading-[32px] mq925:text-19xl
							 mq925:leading-[43px] elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'subtitle' ); ?>>
								<?php echo esc_html( $settings['subtitle'] ); ?>
							</div>
						</div>
						<div class="self-stretch flex flex-col items-start justify-start gap-1 max-w-full font-body-b4-merriweather-13 mq925:px-[25px]">
							<div class="self-stretch flex flex-row items-start justify-end max-w-full mq925:flex-col">

								<div class="description max-w-[620px] relative leading-[26px] inline-block shrink-0 w-full z-[1] elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'description' ); ?>>
									<?php echo  $settings['description'] ; ?>
								</div>
							</div>
							<div class="self-stretch flex flex-row items-start justify-start flex-wrap content-start gap-[62px] max-w-full text-gray-400 mq450:gap-[15px] mq925:gap-[31px]">
								<img decoding="async" class="h-32 w-32 relative object-cover z-[1] mq925:hidden" loading="lazy" alt="" src="<?php echo esc_url( $side_im_url ); ?>">

								<div class="flex-1 flex flex-col items-start justify-start pt-7 px-0 pb-0 box-border min-w-[403px] max-w-full mq600:min-w-[300px]">
									<div class="self-stretch flex flex-col items-start justify-start gap-[18px]">
										<div class="self-stretch flex flex-row items-start justify-start gap-5 mq1400:flex-wrap">

											<div class="w-[50%] mq600:w-full mq925:w-[48%]">
												<span class="wpcf7-form-control-wrap" data-name="first-name"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required stm-contact-footer-input" aria-required="true" aria-invalid="false"
																													placeholder="Your First Name" value="" type="text" name="first-name"></span>

											</div>

											<div class="w-[50%] mq600:w-full mq925:w-[48%]"><span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" maxlength="400"
																																								class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email stm-contact-footer-input"
																																								aria-required="true" aria-invalid="false" placeholder="Your Email Address" value="" type="email" name="your-email"></span>
											</div>

										</div>
										<div class="self-stretch flex flex-row items-start justify-start gap-5 mq1400:flex-wrap">
											<div class="w-[50%] mq600:w-full mq925:w-[48%]"><span class="wpcf7-form-control-wrap" data-name="phone-number"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-tel wpcf7-text wpcf7-validates-as-tel stm-contact-footer-input"
																																								  aria-invalid="false" placeholder="Phone number" value="" type="tel" name="phone-number"></span>
											</div>
											<div class="w-[50%] mq600:w-full mq925:w-[48%]"><span class="wpcf7-form-control-wrap" data-name="project-type">
													<select class="wpcf7-form-control wpcf7-select stm-contact-footer-select"
															aria-invalid="false" name="project-type">
														<option value="Project type">Project type</option>

														<?php
														if ( ! empty( $settings['project_types'] ) ) {

															foreach ( $settings['project_types'] as $k=>$project_type ) {
																$project_t = esc_html( $project_type['project_type_name'] );
																echo '<option value="'.$project_t.'">' . $project_t . '</option>';

															}

														}
														?>
													</select>
												</span>
											</div>

										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="self-stretch flex flex-row items-start justify-start flex-wrap content-start gap-[62px] max-w-full text-gray-400 mq450:gap-[15px] mq925:gap-[31px]">
					<div class="w-32"></div>
					<div class="max-w-[725px] flex flex-row items-end justify-start flex-wrap content-end gap-[35px]
					w-full text-right mq925:gap-[17px] mq925:px-[25px] mq600:justify-center mq600:flex-col">

						<div class="stm-contact-footer flex-1">
							<span class="wpcf7-form-control-wrap" data-name="your-message">
								<textarea cols="40" rows="10" maxlength="2000" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required stm-contact-footer-input" aria-required="true" aria-invalid="false"
										  placeholder="Your Message" name="your-message"></textarea></span>
						</div>

						<div id="stm-submit-2" class="stm-submit flex flex-row items-center justify-start relative gap-4 text-right text-base w-[70px] mq925:w-[200px]">


							<div class="arrow-container">
								<span class="text tracking-[0.25em] leading-[22px]  uppercase z-[1] elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'submit_text' ); ?>> <?php echo esc_html( $settings['submit_text'] ); ?></span>
								<div class="circle">
									<img decoding="async" class="no-el stm-mb w-[70px] relative h-[70px]" alt="" src="<?php echo esc_url( $arrow_image_url ); ?>">
									<img decoding="async" class="no-el stm-mb1 w-[70px] relative h-[70px]" alt="" src="<?php echo esc_url( $arrow_hover_image_url ); ?>">
								</div>

							</div>
						</div>


					</div>
				</div>
				<div class="wpcf7-response-output" aria-hidden="true"></div>
			</form>
		</div>

	</div>
	<div class="ml-auto flex-1"></div>
</section>


