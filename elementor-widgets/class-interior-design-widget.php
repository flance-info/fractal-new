<?php

use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class InteriorDesign_Widget extends \Elementor\Widget_Base {
	public array $default_values = [];

	public function __construct( $data = [], $args = null ) {
		parent::__construct( $data, $args );
		// Move the dynamic values to the constructor
		$this->default_values = [
				1 => [
						'heading'     => __( 'Why Choose Fractal Among All Interior Design Companies in Dubai', 'fractal' ),
						'title_1'     => 'Comprehensive Services',
						'paragraph_1' => 'When you choose Fractal, you’re opting for a smooth, all-in-one design and build experience. As leaders of interior designers in Dubai, UAE, we take care of everything—from the initial concept to the final touches. This means you can relax and watch your dream space come to life.',
						'title_2'     => 'Client Satisfaction is Our Top Priority',
						'paragraph_2' => 'We love building great relationships with our clients, not burning bridges. Your happiness is what matters most to us. We take the time to understand your needs and preferences to craft spaces that truly reflect your vision—whether it’s a fit out construction project or general interior design.',
						'title_3'     => 'Personalized, High-Touch Service',
						'paragraph_3' => 'Get ready for truly personalized interior design services with Fractal, Dubai. We offer a hands-on approach, paying close attention to every detail of your project. We have an initial sit down with you to fully understand your project and meet you right where you are. And the final result will blow your mind.',
						'bg_image'    => get_template_directory_uri() . '/fractal/build/contemporary-woodtextured-elegance-bathroom@3x.png',
				],
				2 => [
						'heading'     => __( 'Our Design Process', 'fractal' ),
						'title_1'     => 'Initial Consultation',
						'paragraph_1' => 'Our interior design company in Dubai kicks off your journey with a thorough consultation. We’ll listen to you as you share your ideas, preferences, and lifestyle to craft a space that truly mirrors your unique style. We’ll chat about the project scope, budget, and timeline to set the stage.',
						'title_2'     => 'Design Concept Development',
						'paragraph_2' => 'Then, we’ll whip up a detailed design concept or fit out works visualization just for you, using insights from our initial chat. This includes mood boards, detailed drawings, floor plans, and other tools to help you picture the final look. We’ll work closely with you to make sure everything aligns with your vision and expectations before proceeding.',
						'title_3'     => 'Project Execution and Completion',
						'paragraph_3' => 'Once you give the thumbs-up on the design, we jump into action. Our skilled team of designers and renovation experts takes care of everything from sourcing materials and construction to installation and finishing touches. We’ll keep you in the loop every step of the way, answering any questions and making sure the process runs smoothly.',
						'bg_image'    => get_template_directory_uri() . '/fractal/build/serene-modern-wardrobe-with-harmonious-accents@3x.png',
				],
		];
	}

	public function get_name() {
		return 'interiordesign';
	}

	public function get_title() {
		return __( 'Home Interior Desing Companies Fractal Widget', 'fractal' );
	}

	public function get_icon() {
		return 'eicon-banner';
	}

	public function get_categories() {
		return [ 'fractal' ];
	}

	protected function _register_controls() {

		$default_values = $this->default_values;
		$this->start_controls_section(
				"content_section",
				[
						'label' => __( "Fonts and Colors", 'fractal' ),
						'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);
		// Typography Group Control for Title
		$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
						'name'     => "service_heading_typography",
						'label'    => __( "Service  Heading Typography", 'fractal' ),
						'selector' => "{{WRAPPER}} .service-heading",
				]
		);
		// Color Control for Title
		$this->add_control(
				"service_heading_color",
				[
						'label'     => __( "Service  Heading Color", 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								"{{WRAPPER}} .service-heading" => 'color: {{VALUE}};',
						],
				]
		);
		$this->add_control(
				"service_heading_tag",
				[
						'label'   => __( 'HTML Tag for heading', 'fractal' ),
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
				'separator_1',
				[
						'type' => \Elementor\Controls_Manager::DIVIDER,
				]
		);
		$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
						'name'     => 'paragraph_title_typography',
						'label'    => __( 'Paragraph Titles Typography', 'fractal' ),
						'selector' => '{{WRAPPER}} .paragraph-title',
				]
		);
		$this->add_control(
				'paragraph_title_color',
				[
						'label'     => __( 'Paragraph Titles Color', 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								'{{WRAPPER}} .paragraph-title' => 'color: {{VALUE}};',
						],
				]
		);
		$this->add_control(
				"paragraph_title_tag",
				[
						'label'   => __( 'HTML Tag for Paragraph Titles', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::SELECT,
						'options' => [
								'h1' => __( 'H1', 'fractal' ),
								'h2' => __( 'H2', 'fractal' ),
								'h3' => __( 'H3', 'fractal' ),
								'h4' => __( 'H4', 'fractal' ),
								'h5' => __( 'H5', 'fractal' ),
								'h6' => __( 'H6', 'fractal' ),
						],
						'default' => 'h3',
				]
		);
		$this->add_control(
				'separator_2',
				[
						'type' => \Elementor\Controls_Manager::DIVIDER,
				]
		);
		$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
						'name'     => 'paragraph_content_typography',
						'label'    => __( 'Content Typography', 'fractal' ),
						'selector' => '{{WRAPPER}} .paragraph-content',
				]
		);
		$this->add_control(
				'paragraph_content_color',
				[
						'label'     => __( 'Content Color', 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								'{{WRAPPER}} .paragraph-content' => 'color: {{VALUE}};',
						],
				]
		);
		$this->end_controls_section();
		for ( $i = 1; $i <= 2; $i ++ ) {
			$this->register_service_controls( $i, $default_values[ $i ] );
		}
	}

	protected function register_service_controls( $service_number, $defaults ) {
		$default_values = $this->default_values;
		$this->start_controls_section(
				"content_section_{$service_number}",
				[
						'label' => __( "Service {$service_number}", 'fractal' ),
						'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);
		$this->add_control(
				"service_{$service_number}_heading",
				[
						'label'       => __( "Service {$service_number} heading", 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( $defaults['heading'], 'fractal' ),
						'label_block' => true,
				]
		);
		$this->add_control(
				"service_{$service_number}_bg_image",
				[
						'label'   => __( "Service {$service_number} Background Image", 'fractal' ),
						'type'    => \Elementor\Controls_Manager::MEDIA,
						'default' => [
								'url' => $default_values[ $service_number ]['bg_image'],
						],
				]
		);
		$this->add_title_paragraph_controls( $service_number );
		$this->end_controls_section();
	}


	protected function add_title_paragraph_controls( $i ) {
		$repeater = new \Elementor\Repeater();
		// Title control for the paragraph
		$repeater->add_control(
				"paragraph_title_{$i}",
				[
						'label'       => __( "Paragraph {$i} Title", 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'label_block' => true,
				]
		);
		// Content control for the paragraph
		$repeater->add_control(
				"paragraph_content_{$i}",
				[
						'label'       => __( "Paragraph {$i} Content", 'fractal' ),
						'type'        => \Elementor\Controls_Manager::WYSIWYG,
						'label_block' => true,
				]
		);
		// Add the repeater field to the widget with a dynamic ID based on $i
		$default_values = $this->default_values;
		$this->add_control(
				"paragraphs_list_{$i}",
				[
						'label'       => __( "Paragraphs {$i}", 'fractal' ),
						'type'        => \Elementor\Controls_Manager::REPEATER,
						'fields'      => $repeater->get_controls(),
						'default'     => [
								[
										"paragraph_title_{$i}"   => $default_values[ $i ]["title_1"],
										"paragraph_content_{$i}" => $default_values[ $i ]["paragraph_1"],
								],
								[
										"paragraph_title_{$i}"   => $default_values[ $i ]["title_2"],
										"paragraph_content_{$i}" => $default_values[ $i ]["paragraph_2"],
								],
								[
										"paragraph_title_{$i}"   => $default_values[ $i ]["title_3"],
										"paragraph_content_{$i}" => $default_values[ $i ]["paragraph_3"],
								],
						],
						'title_field' => "{{{ paragraph_title_{$i} }}}",
				]
		);
	}

	protected function render_paragraph_service( $service, $i, $paragraph_index ) {
		$title     = $service['title'];
		$paragraph = $service['paragraph'];
		$title_tag = $service['title_tag'];
		?>
		<div class="self-stretch flex flex-col items-start justify-start gap-2.5">
		<<?php echo esc_html( $title_tag ); ?> class="self-stretch relative tracking-[-0.01em] leading-[36px] font-medium elementor-inline-editing paragraph-title" <?php echo $this->get_render_attribute_string( "paragraph_title_{$i}_{$paragraph_index}" ); ?>>
		<?php echo esc_html( $title ); ?>
		</<?php echo esc_html( $title_tag ); ?>>
		<div class="self-stretch relative text-base leading-[26px] font-body-b6-merriweather-11 text-elements-neutral paragraph-content elementor-inline-editing" <?php echo $this->get_render_attribute_string( "paragraph_content_{$i}_{$paragraph_index}" ); ?>>
			<?php echo $paragraph ?>
		</div>
		</div>
		<?php
	}


	protected function render() {
		$settings = $this->get_settings_for_display();
		include get_stylesheet_directory() . '/elementor-templates/custom-interiordesign-template.php';
	}

	 protected function content_template() {
        ?>
        <#
        _.each(settings, function(value, key) {
            view.addInlineEditingAttributes( key, 'none' );
        });
        #>

        <div class="w-full">
            <section class="self-stretch bg-elements-neutral-4 flex flex-col items-center justify-start py-[140px]
                        gap-[100px] text-11xl text-general-1-secondary-variant mq925:px-[25px]">
                <div class="w-full max-w-[1170px] flex flex-col  gap-[100px] ">

                    <div class="self-stretch flex flex-row items-center justify-start gap-[60px] mq925:flex-col">
                        <div class="flex-1 flex flex-col items-start justify-start gap-[30px]">
                            <# var heading = settings.service_1_heading; #>
                            <{{ settings.service_heading_tag }} class="self-stretch relative text-base tracking-[0.25em] leading-[22px]
                                uppercase text-general-1-primary heading elementor-inline-editing" {{{ view.getRenderAttributeString( "service_1_heading" ) }}}>
                                {{{ heading }}}
                            </{{ settings.service_heading_tag }}>
                            <#
                            var service_number = 1;
                            if ( settings["paragraphs_list_" + service_number] ) {
                                _.each( settings["paragraphs_list_" + service_number], function( paragraph, index ) {
                                    var title = paragraph.paragraph_title_1;
                                    var content = paragraph.paragraph_content_1;
                                    var title_tag = settings["paragraph_title_tag"] || 'h3';
                                    #>
                                    <div class="self-stretch flex flex-col items-start justify-start gap-2.5">
                                        <{{ title_tag }} class="self-stretch relative tracking-[-0.01em] leading-[36px] font-medium elementor-inline-editing paragraph-title" {{{ view.getRenderAttributeString( "paragraph_title_" + service_number + "_" + index ) }}}>
                                            {{{ title }}}
                                        </{{ title_tag }}>
                                        <div class="self-stretch relative text-base leading-[26px] font-body-b6-merriweather-11 text-elements-neutral paragraph-content elementor-inline-editing" {{{ view.getRenderAttributeString( "paragraph_content_" + service_number + "_" + index ) }}}>
                                            {{{ content }}}
                                        </div>
                                    </div>
                                    <#
                                });
                            }
                            #>

                            <# var bg_image = settings.service_1_bg_image.url || ''; #>
                        </div>
                        <div class="flex-[0.8559] mq925:w-full mq925:min-h-[664px]  h-[692px] mq600:min-h-[320px] flex flex-col items-end justify-end p-10 box-border  bg-cover bg-no-repeat bg-[top] text-right text-base text-general-white"  style="background-image: url('{{{ bg_image }}}');">
                            <div class="hidden flex-row items-center justify-start gap-4">
                                <div class="relative tracking-[0.25em] leading-[22px] uppercase">
                                    Learn more
                                </div>
                                <img class="w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/navigation1.webp">
                            </div>
                        </div>
                    </div>
                    <# var bg_image_2 = settings.service_2_bg_image.url || ''; #>
                    <div class="self-stretch flex flex-row items-center justify-start gap-[60px] text-right text-base text-general-white mq925:flex-col">
                        <div class="self-stretch flex-[0.8559] mq925:w-full mq925:min-h-[664px]  mq600:min-h-[320px] mq925:p-0 flex flex-col items-end justify-end p-10 bg-cover bg-no-repeat bg-[top]"  style="background-image: url('{{{ bg_image_2 }}}');">
                            <div class="hidden flex-row items-center justify-start gap-4">
                                <div class="relative tracking-[0.25em] leading-[22px] uppercase">
                                    Learn more
                                </div>
                                <img class="w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/navigation1.webp">
                            </div>
                        </div>
                        <div class="flex-1 flex flex-col items-start justify-start gap-[30px] text-left text-11xl text-general-1-secondary-variant">
                            <# var heading_2 = settings.service_2_heading; #>
                            <{{ settings.service_heading_tag }} class="self-stretch relative text-base tracking-[0.25em] leading-[22px]
                                uppercase text-general-1-primary heading elementor-inline-editing" {{{ view.getRenderAttributeString( "service_2_heading" ) }}}>
                                {{{ heading_2 }}}
                            </{{ settings.service_heading_tag }}>
                            <#
                            var service_number_2 = 2;
                            if ( settings["paragraphs_list_" + service_number_2] ) {
                                _.each( settings["paragraphs_list_" + service_number_2], function( paragraph, index ) {
                                    var title = paragraph.paragraph_title_2;
                                    var content = paragraph.paragraph_content_2;
                                    var title_tag = settings["paragraph_title_tag"] || 'h3';
                                    #>
                                    <div class="self-stretch flex flex-col items-start justify-start gap-2.5">
                                        <{{ title_tag }} class="self-stretch relative tracking-[-0.01em] leading-[36px] font-medium elementor-inline-editing paragraph-title" {{{ view.getRenderAttributeString( "paragraph_title_" + service_number_2 + "_" + index ) }}}>
                                            {{{ title }}}
                                        </{{ title_tag }}>
                                        <div class="self-stretch relative text-base leading-[26px] font-body-b6-merriweather-11 text-elements-neutral paragraph-content elementor-inline-editing" {{{ view.getRenderAttributeString( "paragraph_content_" + service_number_2 + "_" + index ) }}}>
                                            {{{ content }}}
                                        </div>
                                    </div>
                                    <#
                                });
                            }
                            #>
                        </div>
                    </div>
            </div>
            </section>
        </div>
        <?php
    }
}
