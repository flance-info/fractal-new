<?php

use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class TypesProjects_Widget extends \Elementor\Widget_Base {
	public array $default_values = [];


	public function __construct( $data = [], $args = null ) {
		parent::__construct( $data, $args );
		// Move the dynamic values to the constructor
		$this->default_values = [
				[
						'work_title'       => __( 'Modern Villa Design and Renovation', 'fractal' ),
						'work_description' => __( 'Transform your villa into a modern masterpiece with Fractal. We 	specialize in creating stunning modern villa designs tailored to your lifestyle. Our expert team delivers exceptional renovation services to elevate your Dubai home to new heights of luxury and comfort.',
								'fractal' ),
						'work_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/slide1.webp' ],
						'icon_label'       => __( 'FULL CASE STUDY', 'fractal' ),
						'icon_url'         => "#",
				],
				[
						'work_title'       => __( 'Residential Interior Design and Apartment Renovation', 'fractal' ),
						'work_description' => __( 'We build machines that set the industry standard for precision and durability.', 'fractal' ),
						'work_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/slide2.webp' ],
						'icon_label'       => __( 'FULL CASE STUDY', 'fractal' ),
						'icon_url'         => "#",
				],
				[
						'work_title'       => __( 'Hotel Interior Design and Hospitality', 'fractal' ),
						'work_description' => __( 'We build machines that set the industry standard for precision and durability.', 'fractal' ),
						'work_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/slide3.webp' ],
						'icon_label'       => __( 'FULL CASE STUDY', 'fractal' ),
						'icon_url'         => "#",
				],
		];
	}

	public function get_name() {
		return 'ourtypesprojects';
	}

	public function get_title() {
		return __( 'Home Types Design Projects Fractal Widget', 'fractal' );
	}

	public function get_icon() {
		return 'eicon-banner';
	}

	public function get_categories() {
		return [ 'fractal' ];
	}

	protected function _register_controls() {
		$this->start_controls_section(
				'content_section',
				[
						'label' => __( 'Content', 'fractal' ),
						'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);
		$this->add_control(
				'heading',
				[
						'label'       => __( 'heading', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'Types of Interior Design Projects', 'fractal' ),
						'label_block' => true,
				]
		);
		$this->add_control(
				'heading_color',
				[
						'label'     => __( 'Heading Color', 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								'{{WRAPPER}} .heading' => 'color: {{VALUE}};',
						],
				]
		);
		$this->add_control(
				'heading_html_tag',
				[
						'label'   => __( 'HTML Tag for Heading', 'fractal' ),
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
		$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
						'name'     => 'heading_typography',
						'label'    => __( 'Heading Typography', 'fractal' ),
						'selector' => '{{WRAPPER}} .heading',
				]
		);
		$this->add_control(
				'heading_color',
				[
						'label'     => __( 'Heading Color', 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								'{{WRAPPER}} .heading' => 'color: {{VALUE}};',
						],
				]
		);
		$this->add_control(
				'separator_1',
				[
						'type' => \Elementor\Controls_Manager::DIVIDER,
				]
		);
		$this->add_control(
				'work_title_tag',
				[
						'label'   => __( 'Design Types Title H tag', 'fractal' ),
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
		$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
						'name'     => 'work_title_typography',
						'label'    => __( 'Design Types title Typography', 'fractal' ),
						'selector' => '{{WRAPPER}} .work_title',
				]
		);
		$this->add_control(
				'work_title_color',
				[
						'label'     => __( 'Design Types titles Color', 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								'{{WRAPPER}} .work_title' => 'color: {{VALUE}};',
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
						'name'     => 'work_description_typography',
						'label'    => __( 'Design Types description Typography', 'fractal' ),
						'selector' => '{{WRAPPER}} .work_description',
				]
		);
		$this->add_control(
				'work_title_color',
				[
						'label'     => __( 'Design Types description Color', 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								'{{WRAPPER}} .work_description' => 'color: {{VALUE}};',
						],
				]
		);
		$this->add_control(
				'separator_5',
				[
						'type' => \Elementor\Controls_Manager::DIVIDER,
				]
		);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
				'work_title',
				[
						'label'       => __( 'Design Types Title', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'Default Work Title', 'fractal' ),
						'label_block' => true,
				]
		);
		$repeater->add_control(
				'work_description',
				[
						'label'       => __( 'Design Types Description', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXTAREA,
						'default'     => __( 'Description of the work goes here.', 'fractal' ),
						'label_block' => true,
				]
		);
		$repeater->add_control(
				'work_image',
				[
						'label'   => __( 'Design Types Image', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::MEDIA,
						'default' => [
								'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
				]
		);
		$repeater->add_control(
				'icon_label',
				[
						'label'       => __( 'Arrow Icon Label', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'FULL CASE STUDY', 'fractal' ),
						'label_block' => true,
				]
		);
		$repeater->add_control(
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
				'works_list',
				[
						'label'       => __( 'Design Types', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::REPEATER,
						'fields'      => $repeater->get_controls(),
						'default'     => $this->default_values,
						'title_field' => '{{{ work_title }}}',
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
		$this->add_control(
				'icon_type',
				[
						'label'        => __( 'Choose Clickable url or POPUP form', 'fractal' ),
						'type'         => \Elementor\Controls_Manager::SWITCHER,
						'label_on'     => __( 'Url', 'fractal' ),
						'label_off'    => __( 'Popup form', 'fractal' ),
						'return_value' => 'url',
						'default'      => 'url',
						'description'  => __( 'Switch between an POPUP Form or a URL for icon click.', 'fractal' ),
				]
		);
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		include get_stylesheet_directory() . '/elementor-templates/custom-typesprojects-template.php';
	}

	protected function render_service( $service, $settings, $i ) {
		$title            = $service['work_title'];
		$bg_image         = $service['work_image']['url'];
		$work_description = $service['work_description'];
		$icon_label       = $service['icon_label'];
		$icon_url         = $service['icon_url']['url'];
		$title_tag        = $settings['work_title_tag'];
		$k                = $i + 1;
		$nav              = $settings['icon_image']['url'];
		$nav_hover        = $settings['icon_image_moved']['url'];
		$icon_type        = $settings['icon_type'];
		?>
		<div class="flex-1 relative min-h-[780px] overflow-hidden bg-gradient-hover child_el mq925:img-slide<?php echo $k ?> " data-bg="url('<?php echo esc_url( $bg_image ) ?>')">
			<div class="h-full w-[calc(100%_-_0.3px)] top-[0px] right-[0.3px] bottom-[0px] left-[0px] "></div>
			<div class="absolute w-[calc(100%_-_80.3px)] right-[40.3px] bottom-[41px]
			 left-[40px] flex flex-col items-start justify-end gap-5">
				<<?php echo esc_html( $title_tag ); ?> class="text-23xl self-stretch relative tracking-[-0.02em] leading-[48px]
				font-medium fade-out h-100 mq925:text-11xl mq925:leading-[34px] mq925:m-0 work_title elementor-inline-editing" >
				<?php echo esc_html( $title ); ?>
			</<?php echo esc_html( $title_tag ); ?>>
			<div class="self-stretch relative text-lg leading-[30px]
						font-body-b6-merriweather-11 fade-out mq925:text-sm mq925:leading-[24px] elementor-inline-editing work_description">
				<?php echo $work_description ?>
			</div>
			<a
					<?php if ( $icon_type !== 'url' )
						echo 'onclick="openModal()"' ?>
					<?php if ( $icon_type === 'url' )
						echo "href='$icon_url'" ?>
					class="flex flex-row items-center justify-start relative gap-4 text-right text-base">
				<div class="arrow-container">
					<span class="text tracking-[0.25em] leading-[22px]  uppercase z-[1]  elementor-inline-editing">
						<?php echo esc_html( $icon_label ) ?></span>
					<div class="circle">
						<img class="stm-mb w-[70px] relative h-[70px]" alt="" src="<?php echo esc_url( $nav ) ?>">
						<img class="stm-mb1 w-[70px] relative h-[70px]" alt="" src="<?php echo esc_url( $nav_hover ) ?>">
					</div>

				</div>
			</a>

		</div>

		</div>

		<?php
	}

	protected function content_template() {
		?>
		<#
		var bg_image = settings.works_list[0].work_image.url ? settings.works_list[0].work_image.url : '';
		var heading_html_tag = settings.heading_html_tag;
		var work_title_tag = settings.work_title_tag;
		#>

		<div class="w-full">
			<section class="self-stretch overflow-hidden flex flex-col items-center justify-center
		relative  bg-cover bg-no-repeat bg-[top] text-23xl
 text-general-white" style="background-image: url('{{ bg_image }}')">

				<{{{ heading_html_tag }}} class="max-w-[1170px] w-full text-base tracking-[0.25em] leading-[22px]
	 uppercase inline-block z-[2] mt-[100px] mb-[-100px] h-[0px]  mq925:pl-[50px] mq925:mt-[50px]
		heading elementor-inline-editing" data-elementor-setting-key="heading" data-elementor-inline-editing>
				{{{ settings.heading }}}
			</{{{ heading_html_tag }}}>

			<div class="w-full self-stretch flex flex-row mq925:flex-col">
				<#
				_.each( settings.works_list, function( work, index ) {
				var k = index + 1;
				var work_title = work.work_title;
				var work_description = work.work_description;
				var bg_image = work.work_image.url;
				var icon_label = work.icon_label;
				var icon_url = work.icon_url.url;
				var icon_type = settings.icon_type;
				var nav = settings.icon_image.url;
				var nav_hover = settings.icon_image_moved.url;
				#>

				<div class="flex-1 relative min-h-[780px] overflow-hidden bg-gradient-hover child_el mq925:img-slide{{ k }}"
					 data-bg=" url('{{ bg_image }}')">
					<div class="h-full w-[calc(100%_-_0.3px)] top-[0px] right-[0.3px] bottom-[0px] left-[0px]"></div>
					<div class="absolute w-[calc(100%_-_80.3px)] right-[40.3px] bottom-[41px]
			 left-[40px] flex flex-col items-start justify-end gap-5">
						<{{{ work_title_tag }}} class="text-23xl self-stretch relative tracking-[-0.02em] leading-[48px]
				font-medium fade-out h-100 mq925:text-11xl mq925:leading-[34px] mq925:m-0 work_title elementor-inline-editing">
						{{{ work_title }}}
					</{{{ work_title_tag }}}>
					<div class="self-stretch relative text-lg leading-[30px]
						font-body-b6-merriweather-11 fade-out mq925:text-sm mq925:leading-[24px] elementor-inline-editing work_description">
						{{{ work_description }}}
					</div>

					<a
					<# if ( icon_type !== 'url' ) { #> onclick="openModal()" <# } #>
					<# if ( icon_type === 'url' ) { #> href="{{ icon_url }}" <# } #>
					class="flex flex-row items-center justify-start relative gap-4 text-right text-base">
					<div class="arrow-container">
						<span class="text tracking-[0.25em] leading-[22px]  uppercase z-[1]  elementor-inline-editing">{{{ icon_label }}}</span>
						<div class="circle">
							<img class="stm-mb w-[70px] relative h-[70px]" alt="Icon" src="{{ nav }}">
							<img class="stm-mb1 w-[70px] relative h-[70px]" alt="Hovered Icon" src="{{ nav_hover }}">
						</div>
					</div>
					</a>
				</div>
			</div>

			<div class="self-stretch w-px relative bg-general-white opacity-[0.25]"></div>

			<# }); #>
		</div>
		</section>
		</div>
		<?php
	}

}
