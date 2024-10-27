<?php

use Elementor\Basic\FractalBaseElementor;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class OurWorks_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'ourworks';
	}

	public function get_title() {
		return __( 'Our Works Fractal Widget', 'fractal' );
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
				'label',
				[
						'label'       => __( 'label', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'Our Works', 'fractal' ),
						'label_block' => true,
				]
		);
		$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
						'name'     => 'label_typography',
						'label'    => __( 'label Typography', 'fractal' ),
						'selector' => '{{WRAPPER}} .label',
				]
		);
		$this->add_control(
				'label_color',
				[
						'label'     => __( 'Label Color', 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								'{{WRAPPER}} .label' => 'color: {{VALUE}};',
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
				'heading',
				[
						'label'       => __( 'heading', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'Bespoke Interior Design in Dubai', 'fractal' ),
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
						'label'   => __( 'Work Title H tag', 'fractal' ),
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
						'name'     => 'heading_typography',
						'label'    => __( 'Heading Typography', 'fractal' ),
						'selector' => '{{WRAPPER}} .work_title',
				]
		);
		$this->add_control(
				'work_title_color',
				[
						'label'     => __( 'Work_title Color', 'fractal' ),
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
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
				'work_title',
				[
						'label'       => __( 'Work Title', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'Default Work Title', 'fractal' ),
						'label_block' => true,
				]
		);

		$repeater->add_control(
				"work_link",
				[
						'label'       => __( "Work Link", 'fractal' ),
						'type'        => \Elementor\Controls_Manager::URL,
						'default'     => [
					'url' => '#',
				],

				]
		);
		$repeater->add_control(
				'work_description',
				[
						'label'       => __( 'Work Description', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXTAREA,
						'default'     => __( 'Description of the work goes here.', 'fractal' ),
						'label_block' => true,
				]
		);
		$repeater->add_control(
				'work_image',
				[
						'label'   => __( 'Work Image', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::MEDIA,
						'default' => [
								'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
				]
		);
		$this->add_control(
				'works_list',
				[
						'label'       => __( 'Works List', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::REPEATER,
						'fields'      => $repeater->get_controls(),
						'default'     => [
								[
										'work_title'       => __( 'Architect Design', 'fractal' ),
										'work_description' => __( 'We build machines that set the industry standard for precision and durability.', 'fractal' ),
										'work_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/case-studies@3x.png' ],
								],
								[
										'work_title'       => __( 'Architectural Residential Designs', 'fractal' ),
										'work_description' => __( 'We build machines that set the industry standard for precision and durability.', 'fractal' ),
										'work_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/case-studies1@3x.png' ],
								],
								[
										'work_title'       => __( 'Building Designs', 'fractal' ),
										'work_description' => __( 'Our team creates building designs that blend functionality with aesthetics.', 'fractal' ),
										'work_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/component-5@3x.png' ],
								],
								[
										'work_title'       => __( 'Towers Design', 'fractal' ),
										'work_description' => __( 'Innovative tower designs that redefine urban skylines.', 'fractal' ),
										'work_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/twilight-reflections-on-modern-highrise@3x.png' ],
								],
								[
										'work_title'       => __( 'Palaces Designs', 'fractal' ),
										'work_description' => __( 'Crafting palatial designs that embody luxury and grandeur.', 'fractal' ),
										'work_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/case-studies2@3x.png' ],
								],
								[
										'work_title'       => __( 'Villas Design', 'fractal' ),
										'work_description' => __( 'Exclusive villa designs tailored to your lifestyle.', 'fractal' ),
										'work_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/component-51@3x.png' ],
								],
								[
										'work_title'       => __( 'Architectural Commercial Designs', 'fractal' ),
										'work_description' => __( 'Designing commercial spaces that drive success.', 'fractal' ),
										'work_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/photo-46-20240815-1209342@3x.png' ],
								],
								[
										'work_title'       => __( 'Malls Design', 'fractal' ),
										'work_description' => __( 'Creating mall designs that offer an immersive shopping experience.', 'fractal' ),
										'work_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/component-6@3x.png' ],
								],
						],
						'title_field' => '{{{ work_title }}}',
				]
		);
		$this->end_controls_section();
		$this->register_icon_arrow_controls(
				get_template_directory_uri() . '/fractal/build/navigation2.webp',
				get_template_directory_uri() . '/fractal/build/moved-arrow.webp',
				'FULL CASE STUDY',
		);
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		?>

		<?php
		include get_stylesheet_directory() . '/elementor-templates/custom-ourworks-template.php';
	}


}
