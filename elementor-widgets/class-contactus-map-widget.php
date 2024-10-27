<?php

use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class ContactUsMap_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'stm-contactusmap';
	}

	public function get_title() {
		return __( 'Contact Us Fractal Widget', 'fractal' );
	}

	public function get_icon() {
		return 'eicon-banner';
	}

	public function get_categories() {
		return [ 'fractal' ];
	}

	protected function _register_controls() {
		$this->start_controls_section(
				'content_section_style',
				[
						'label' => __( 'Fonts and Styles', 'fractal' ),
						'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);
		$this->add_control(
				'heading_html_tag',
				[
						'label'   => __( 'Section Title H Tag', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::SELECT,
						'options' => [
								'h1' => __( 'H1', 'fractal' ),
								'h2' => __( 'H2', 'fractal' ),
								'h3' => __( 'H3', 'fractal' ),
								'h4' => __( 'H4', 'fractal' ),
								'h5' => __( 'H5', 'fractal' ),
								'h6' => __( 'H6', 'fractal' ),
						],
						'default' => 'h2',
				]
		);
		$this->add_control(
				'heading_color',
				[
						'label'     => __( 'Section Title Color', 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								'{{WRAPPER}} .heading' => 'color: {{VALUE}};',
						],
				]
		);
		$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
						'name'     => 'heading_typography',
						'label'    => __( 'Section Title Typography', 'fractal' ),
						'selector' => '{{WRAPPER}} .heading',
				]
		);
		$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
						'name'     => 'description_typography',
						'label'    => __( 'Description Text Typography', 'fractal' ),
						'selector' => '{{WRAPPER}} .description',
				]
		);
		$this->add_control(
				'description_color',
				[
						'label'     => __( 'Description Text Color', 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								'{{WRAPPER}} .description' => 'color: {{VALUE}};',
						],
				]
		);
		$this->add_control(
				'separator_1',
				[
						'type' => \Elementor\Controls_Manager::DIVIDER,
				]
		);
		$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
						'name'     => 'title_typography',
						'label'    => __( 'Address/Phone/Email Label Typography', 'fractal' ),
						'selector' => '{{WRAPPER}} .label',
				]
		);
		$this->add_control(
				'title_color',
				[
						'label'     => __( 'Address/Phone/Email Label Color', 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								'{{WRAPPER}} .label' => 'color: {{VALUE}};',
						],
				]
		);
		$this->add_control(
				'separator_2',
				[
						'type' => \Elementor\Controls_Manager::DIVIDER,
				]
		);
		$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
						'name'     => 'text_typography',
						'label'    => __( 'Address/Phone/Email texts Typography', 'fractal' ),
						'selector' => '{{WRAPPER}} .phone_texts',
				]
		);
		$this->add_control(
				'text_color',
				[
						'label'     => __( 'Address/Phone/Email texts Color', 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								'{{WRAPPER}} .phone_texts' => 'color: {{VALUE}};',
						],
				]
		);
		$this->add_control(
				'separator_5',
				[
						'type' => \Elementor\Controls_Manager::DIVIDER,
				]
		);
		$this->end_controls_section();
		// Section Content Controls
		$this->start_controls_section(
				'content_section',
				[
						'label' => __( 'Content', 'fractal' ),
						'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);
		// Section Title (Heading)
		$this->add_control(
				'section_title',
				[
						'label'   => __( 'Heading', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::TEXT,
						'default' => __( 'Contact Us', 'fractal' ),
				]
		);
		// Description (Text under heading)
		$this->add_control(
				'description',
				[
						'label'   => __( 'Description', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::TEXTAREA,
						'default' => __( 'Visit one of our many Fractal WP Offices in United States.', 'fractal' ),
				]
		);
		// Office Selector Dropdown
		$this->add_control(
				'offices_list',
				[
						'label'       => __( 'Offices List', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::REPEATER,
						'fields'      => $this->add_office_repeater()->get_controls(), // Call the repeater method here
						'title_field' => '{{{ office_label }}}', // Display the office label in the editor
				]
		);
		// Phone Number
		$this->add_control(
				'phone_label',
				[
						'label'   => __( 'Phone Label', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::TEXT,
						'default' => __( 'Phone & Fax —', 'fractal' ),
				]
		);
		$this->add_control(
				'phone_number',
				[
						'label'   => __( 'Phone Number', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::TEXT,
						'default' => __( '+971 (56) 474 4155', 'fractal' ),
				]
		);
		$this->add_control(
				'phone_number_2',
				[
						'label'   => __( 'Phone Number 2', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::TEXT,
						'default' => __( '+971 (56) 474 4156', 'fractal' ),
				]
		);
		// Email
		$this->add_control(
				'email_label',
				[
						'label'   => __( 'Email Label', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::TEXT,
						'default' => __( 'Email —', 'fractal' ),
				]
		);
		$this->add_control(
				'email',
				[
						'label'   => __( 'Email Address', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::TEXT,
						'default' => __( 'info@fractaldubai.com', 'fractal' ),
				]
		);
		// Address
		$this->add_control(
				'address_label',
				[
						'label'   => __( 'Address Label', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::TEXT,
						'default' => __( 'Address —', 'fractal' ),
				]
		);
		$this->add_control(
				'address',
				[
						'label'   => __( 'Address', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::TEXT,
						'default' => __( 'Office 1004, Conrad Business Tower, Trade Centre First, 485054 Dubai, UAE', 'fractal' ),
				]
		);
		$this->add_control(
				'address_url',
				[
						'label'   => __( 'Map Address url', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::URL,
						'default' => [
								'url' => "https://www.google.com/maps/search/Office+1004,+Conrad+Business+Tower,+Trade+Centre+First,+485054+,+Dubai,+UAE/@25.2260619,55.2808463,809m/data=!3m2!1e3!4b1?entry=ttu&g_ep=EgoyMDI0MTAwOS4wIKXMDSoASAFQAw%3D%3D",
						],
				]
		);
		// Google Maps Image
		$this->add_control(
				'google_maps_image',
				[
						'label'   => __( 'Google Maps Image', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::MEDIA,
						'default' => [
								'url' => get_template_directory_uri() . '/fractal/build/google-maps1@2x.webp',
						],
				]
		);
		// Additional Image
		$this->add_control(
				'additional_image',
				[
						'label'   => __( 'Additional Image In Center Desktop', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::MEDIA,
						'default' => [
								'url' => get_template_directory_uri() . '/fractal/build/bur_desktop.webp',
						],
				]
		);
		$this->add_control(
				'additional_mobile_image',
				[
						'label'   => __( 'Additional Image In Center mobile', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::MEDIA,
						'default' => [
								'url' => get_template_directory_uri() . '/fractal/build/burja.webp',
						],
				]
		);
		// Background Color
		$this->add_control(
				'background_color',
				[
						'label'     => __( 'Background Color', 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'default'   => '#000000',
						'selectors' => [
								'{{WRAPPER}} .contact-section' => 'background-color: {{VALUE}};',
						],
				]
		);
		$this->end_controls_section();
		$this->start_controls_section(
				'content_section_icon',
				[
						'label' => __( 'Arrow Icons', 'fractal' ),
						'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);
		$this->add_control(
				'icon_label',
				[
						'label'       => __( 'Arrow Icon Label', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'Get direction', 'fractal' ),
						'label_block' => true,
				]
		);
		$this->add_control(
				'icon_url',
				[
						'label'       => __( 'Arrow Icon url', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::URL,
						'default'     => [
								'url' => '#',
						],
						'label_block' => true,
				]
		);
		$this->add_control(
				'icon_image',
				[
						'label'   => __( 'Arrow Icon  Image', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::MEDIA,
						'default' => [
								'url' => get_template_directory_uri() . '/fractal/build/navigation2.webp',
						],
				]
		);
		$this->add_control(
				'icon_image_moved',
				[
						'label'   => __( 'Arrow Icon Hovered Image', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::MEDIA,
						'default' => [
								'url' => get_template_directory_uri() . '/fractal/build/moved-arrow.webp',
						],
				]
		);
		$this->end_controls_section();
	}

// Method to add the office repeater
	protected function add_office_repeater() {
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
				'office_key',
				[
						'label'       => __( 'Office Key', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => 'dubai',
						'label_block' => true,
				]
		);
		$repeater->add_control(
				'office_label',
				[
						'label'       => __( 'Office Label', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'Dubai Office', 'fractal' ),
						'label_block' => true,
				]
		);

		return $repeater;
	}


	protected function render() {
		$settings = $this->get_settings_for_display();
		include get_stylesheet_directory() . '/elementor-templates/custom-contactusmap-template.php';
	}

	protected function _content_template() {
		?>

		<#
		var offices = settings.offices_list || [];
		#>

		<div class="w-full">
			<section class="self-stretch min-h-[640px] relative w-full text-left text-base text-general-1-primary font-button-space-grotesk mq450:h-auto mq450:min-h-[640] flex flex-row flex flex-col justify-center items-center contact-section">
				<div class="max-w-[1170px] w-full flex flex-row justify-between min-h-[640px] mq925:flex-col">
					<div class="bg-white">
						<div class="absolute w-[50%] left-0 bg-general-1-secondary mq925:relative mq925:w-full">
							<div class="left-0 w-[100%] h-full">
								<img class="h-full bottom-[0px] max-h-full w-[80%] min-h-[640px] mr-[190px] float-right object-cover mq925:m-0 mq925:w-full mq925:relative mq925:float-none" alt="" src="{{ settings.google_maps_image.url }}">
								<img class="absolute bottom-[0px] w-80 h-[540px] object-cover z-[1] right-[30px] mq925:hidden" loading="lazy" src="{{ settings.additional_image.url }}">
								<img class="absolute hidden bottom-[-100px] w-[92%] h-[220px] object-initial z-[1] right-[0px] mq925:block" loading="lazy" src="{{ settings.additional_mobile_image.url }}">
							</div>
						</div>
					</div>
					<div class="w-[50%] items-start justify-start gap-[78px] max-w-full pt-[100px] flex flex-col mq925:stm-width-180-25">
						<div class="self-stretch flex flex-col items-start justify-start gap-8">
							<{{{ settings.heading_html_tag }}} class="relative tracking-[0.25em] leading-[22px] uppercase heading elementor-inline-editing" {{{ view.getRenderAttributeString( 'section_title' ) }}}>
							{{{ settings.section_title }}}
							</{{{ settings.heading_html_tag }}}>
							<div class="self-stretch flex flex-row items-start justify-start flex-wrap content-start gap-[30px] text-general-white font-body-b4-merriweather-13 mq925:flex-col">
								<div class="flex-1 relative leading-[26px] inline-block min-w-[175px] description elementor-inline-editing" {{{ view.getRenderAttributeString(
								'description' ) }}}>
								{{{ settings.description }}}
							</div>
							<div class="flex-1 flex flex-col items-start justify-start pt-1 px-0 pb-0 box-border min-w-[175px] font-button-space-grotesk mq925:stm-cal-100-60">
								<select class="w-full placeholder-current [outline:none] h-[60px] flex-1 shadow-[0px_-1px_0px_rgba(255,_255,_255,_0.5)_inset] overflow-hidden flex flex-row items-start justify-start py-[10px] px-[15px] border-general-9-secondary-variant border-[1px] border-solid box-border font-medium font-button-space-grotesk text-base min-w-[195px] z-[1] text-white bg-general-1-secondary">
									<# _.each( offices, function( office ) { #>
									<option value="{{ office.office_key }}" {{ office.office_key===
									'dubai' ? 'selected' : '' }}>
									{{{ office.office_label }}}
									</option>
									<# }); #>
								</select>
							</div>
						</div>
					</div>
					<div class="self-stretch flex flex-row items-start justify-start flex-wrap content-start gap-[35px] text-5xl text-general-white mq925:stm-cal-100-60">
						<div class="flex-1 flex flex-col items-start justify-start gap-[78px] min-w-[172px]">
							<div class="flex flex-col items-start justify-start py-0 pl-0 pr-5 gap-[15px]">
								<div class="relative text-base tracking-[0.25em] leading-[22px] label uppercase text-general-1-primary label elementor-inline-editing" {{{ view.getRenderAttributeString(
								'phone_label' ) }}}>
								{{{ settings.phone_label }}}
							</div>
							<a href="tel:{{ settings.phone_number }}" class="[text-decoration:none] text-general-white relative tracking-[-0.01em] leading-[30px] font-medium mq450:text-lgi mq450:leading-[24px] phone_texts elementor-inline-editing" {{{ view.getRenderAttributeString( 'phone_number' )
							}}}>
							{{{ settings.phone_number }}}
							</a>
							<a href="tel:{{ settings.phone_number_2 }}" class="[text-decoration:none] text-general-white relative tracking-[-0.01em] leading-[30px] font-medium mq450:text-lgi mq450:leading-[24px] label phone_texts elementor-inline-editing" {{{ view.getRenderAttributeString(
							'phone_number_2' ) }}}>
							{{{ settings.phone_number_2 }}}
							</a>
						</div>
						<div class="self-stretch flex flex-col items-start justify-start gap-[15px] text-base text-general-1-primary label">
							<div class="relative tracking-[0.25em] leading-[22px] uppercase elementor-inline-editing" {{{ view.getRenderAttributeString(
							'email_label' ) }}}>
							{{{ settings.email_label }}}
						</div>
						<a href="mailto:{{ settings.email }}" class="[text-decoration:none] text-general-1-primary m-0 relative text-5xl tracking-[-0.01em] leading-[30px] font-medium font-[inherit] mq450:text-lgi mq450:leading-[24px] elementor-inline-editing label" {{{ view.getRenderAttributeString(
						'email' ) }}}>
						{{{ settings.email }}}
						</a>
					</div>
				</div>
				<div class="flex-1 flex flex-col items-start justify-start gap-3.5 min-w-[175px] text-base text-general-1-primary">
					<div class="relative tracking-[0.25em] leading-[22px] uppercase elementor-inline-editing label" {{{ view.getRenderAttributeString(
					'address_label' ) }}}>
					{{{ settings.address_label }}}
				</div>
				<div class="self-stretch flex flex-col items-start justify-start gap-[30px] text-5xl text-general-white">
					<a href="{{ settings.address_url.url }}" class="[text-decoration:none] m-0 relative text-inherit tracking-[-0.01em] leading-[30px] font-medium font-[inherit] mq450:text-lgi mq450:leading-[24px] phone_texts elementor-inline-editing" {{{ view.getRenderAttributeString( 'address' )
					}}}>
					{{{ settings.address }}}
					</a>
					<div class="flex flex-row items-center justify-start relative gap-4 text-right text-base">
						<a class="arrow-container" href="{{ settings.icon_url.url }}">
							<span class="text tracking-[0.25em] leading-[22px] uppercase z-[1] elementor-inline-editing" {{{ view.getRenderAttributeString( 'icon_label' ) }}}>
							{{{ settings.icon_label }}}
							</span>
							<div class="circle">
								<img class="stm-mb w-[70px] relative h-[70px]" alt="" src="{{ settings.icon_image.url }}">
								<img class="stm-mb1 w-[70px] relative h-[70px]" alt="" src="{{ settings.icon_image_moved.url }}">
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


<?php
}
}
