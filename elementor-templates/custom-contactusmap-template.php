<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$offices = [];
if ( ! empty( $settings['offices_list'] ) ) {
	foreach ( $settings['offices_list'] as $office ) {
		$offices[ $office['office_key'] ] = $office['office_label'];
	}
}

$this->add_inline_editing_attributes( 'section_title','none' );
$this->add_inline_editing_attributes( 'description' , 'basic' );
$this->add_inline_editing_attributes( 'phone_label','none'  );
$this->add_inline_editing_attributes( 'phone_number' );
$this->add_inline_editing_attributes( 'phone_number_2','none' );
$this->add_inline_editing_attributes( 'email_label','none');
$this->add_inline_editing_attributes( 'email','none' );
$this->add_inline_editing_attributes( 'address_label','none' );
$this->add_inline_editing_attributes( 'address' ,'none');
$this->add_inline_editing_attributes( 'icon_label','none' );

$heading_html_tag = $settings['heading_html_tag'];


?>

<div class="w-full">
	<section class="self-stretch min-h-[640px] relative
		w-full text-left text-base text-general-1-primary
		font-button-space-grotesk mq450:h-auto mq450:min-h-[640] flex flex-row	flex flex-col justify-center items-center contact-section">

		<div class="max-w-[1170px] w-full flex flex-row justify-between min-h-[640] mq925:flex-col">
			<div class="bg-white">
				<div class="absolute w-[50%] left-0 bg-general-1-secondary mq925:relative mq925:w-full">
					<div class="left-0 w-[100%] h-full">
						<img class="  h-full  bottom-[0px]  max-h-full w-[80%] min-h-[640px] mr-[190px] float-right object-cover
							mq925:m-0 mq925:w-full mq925:relative mq925:float-none stm-img-map" alt="" src="<?php echo esc_url( $settings['google_maps_image']['url'] ); ?>">

						<img class="absolute bottom-[0px] w-80 h-[540px] stm-burg-desk object-cover z-[1] right-[30px] mq925:hidden " loading="lazy" src="<?php echo esc_url( $settings['additional_image']['url'] ); ?>">
						<img class="absolute hidden bottom-[-100px] w-[92%] h-[220px] stm-burg-mobile object-initial z-[1] right-[0px] mq925:block" loading="lazy" src="<?php echo esc_url( $settings['additional_mobile_image']['url'] ); ?>">

					</div>
				</div>
			</div>
			<div class=" w-[50%] items-start justify-start gap-[78px]
				max-w-full pt-[100px] flex flex-col mq925:stm-width-180-25 ">
				<div class="self-stretch flex flex-col items-start justify-start gap-8">
					<<?php echo esc_html( $heading_html_tag ); ?> class="relative tracking-[0.25em] leading-[22px] uppercase heading elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'section_title' ); ?> >
						<?php echo $settings['section_title']; ?>
					</<?php echo esc_html( $heading_html_tag ); ?>>
					<div class="self-stretch flex flex-row items-start justify-start flex-wrap
						 content-start gap-[30px] text-general-white font-body-b4-merriweather-13 mq925:flex-col">
						<div class="flex-1 relative leading-[26px] inline-block min-w-[175px] description elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'description' ); ?> >
							<?php echo $settings['description']; ?>
						</div>
						<div class="flex-1 flex flex-col items-start justify-start pt-1 px-0 pb-0 box-border min-w-[175px] font-button-space-grotesk mq925:stm-cal-100-60">
							<select class="w-full placeholder-current
										 [outline:none]
										h-[60px] flex-1 shadow-[0px_-1px_0px_rgba(255,_255,_255,_0.5)_inset]
										overflow-hidden flex flex-row items-start justify-start py-[10px]
										px-[15px] border-general-9-secondary-variant border-[1px] border-solid box-border
										 font-medium font-button-space-grotesk
										text-base  min-w-[195px] z-[1] text-white bg-general-1-secondary">

								<?php foreach ( $offices as $office_key => $office_label ) {

									$selected_office = 'dubai';
									echo '<option value="' . esc_attr( $office_key ) . '" ' . $selected . '>' . esc_html( $office_label ) . '</option>';
								}
								?>
							</select>
						</div>
					</div>
				</div>
				<div class="self-stretch flex flex-row items-start justify-start flex-wrap content-start gap-[35px] text-5xl text-general-white mq925:stm-cal-100-60">
					<div class="flex-1 flex flex-col items-start justify-start gap-[78px] min-w-[172px]">
						<div class="flex flex-col items-start justify-start py-0 pl-0 pr-5 gap-[15px]">
							<div class="relative text-base tracking-[0.25em] leading-[22px] label
							 uppercase text-general-1-primary label elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'phone_label' ); ?> >

								<?php echo $settings['phone_label']; ?>
							</div>
							<a href="tel: <?php echo $settings['phone_number']; ?>" class="[text-decoration:none]  text-general-white
							relative tracking-[-0.01em] leading-[30px] font-medium
							mq450:text-lgi mq450:leading-[24px] phone_texts
							elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'phone_number' ); ?> >
								<?php echo $settings['phone_number']; ?>
							</a>
							<a href="tel: <?php echo $settings['phone_number_2']; ?>" class="[text-decoration:none]  text-general-white
							 relative tracking-[-0.01em] leading-[30px]
							  font-medium mq450:text-lgi mq450:leading-[24px] label phone_texts
							  elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'phone_number_2' ); ?> >
								<?php echo $settings['phone_number_2']; ?>
							</a>
						</div>
						<div class="self-stretch flex flex-col items-start justify-start gap-[15px] text-base text-general-1-primary label">
							<div class="relative tracking-[0.25em] leading-[22px] stm-email uppercase elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'email_label' ); ?> >

								<?php echo $settings['email_label']; ?>
							</div>
							<a href="mailto:<?php echo $settings['email']; ?>" class="[text-decoration:none] stm-email-text text-general-1-primary m-0 relative text-5xl
							 tracking-[-0.01em] leading-[30px] font-medium font-[inherit]
							  mq450:text-lgi mq450:leading-[24px] elementor-inline-editing label" <?php echo $this->get_render_attribute_string( 'email' ); ?> >
								<?php echo $settings['email']; ?>
							</a>
						</div>
					</div>
					<div class="flex-1 flex flex-col items-start justify-start gap-3.5 min-w-[175px] text-base text-general-1-primary">
						<div class="relative tracking-[0.25em] leading-[22px]
						 uppercase elementor-inline-editing label" <?php echo $this->get_render_attribute_string( 'address_label' ); ?> >

							<?php echo $settings['address_label']; ?>
						</div>
						<div class="self-stretch flex flex-col items-start justify-start gap-[30px] text-5xl text-general-white ">
							<a href="<?php echo $settings['address_url']['url']; ?>"
							   class="[text-decoration:none]  m-0 relative text-inherit
							    tracking-[-0.01em] leading-[30px] font-medium font-[inherit]
							     mq450:text-lgi mq450:leading-[24px] phone_texts
							     elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'address' ); ?> >
								<?php echo $settings['address']; ?>
							</a>
							<div class="flex flex-row items-center justify-start relative gap-4 text-right text-base">
								<a class="arrow-container" href="<?php echo esc_url( $settings['icon_url']['url'] ); ?>">
									<span class="text tracking-[0.25em] leading-[22px]
									 uppercase z-[1]
									 elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'icon_label' ); ?> >
										<?php echo esc_html( $settings['icon_label'] ); ?>
									</span>
									<div class="circle">
										<img class="stm-mb w-[70px] relative h-[70px]" alt="" src="<?php echo esc_url( $settings['icon_image']['url'] ); ?>">
										<img class="stm-mb1 w-[70px] relative h-[70px]" alt="" src="<?php echo esc_url( $settings['icon_image_moved']['url'] ); ?>">
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>



