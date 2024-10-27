<?php

namespace Elementor\Basic;
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

abstract class FractalBaseElementor extends \Elementor\Widget_Base {

	protected function register_typography_controls( $name, $label, $selector, $default_tag = 'div' ) {
		$this->start_controls_section(
			$name . '_section_styles',
			[
				'label' => sprintf( __( '%s Styles', 'fractal' ), $label ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		// Control for selecting the HTML tag (H1, H2, H3, etc.)
		$this->add_control(
			$name . '_html_tag',
			[
				'label'   => sprintf( __( '%s HTML Tag', 'fractal' ), $label ),
				'type'    => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'h1'   => __( 'H1', 'fractal' ),
					'h2'   => __( 'H2', 'fractal' ),
					'h3'   => __( 'H3', 'fractal' ),
					'h4'   => __( 'H4', 'fractal' ),
					'h5'   => __( 'H5', 'fractal' ),
					'h6'   => __( 'H6', 'fractal' ),
					'div'  => __( 'Div', 'fractal' ),
					'span' => __( 'Span', 'fractal' ),
					'p'    => __( 'Paragraph', 'fractal' ),
					'a'    => __( 'Paragraph', 'fractal' ),
				],
				'default' => $default_tag, // Set default tag
			]
		);
		// Typography control
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => $name . '_typography',
				'label'    => sprintf( __( '%s Typography', 'fractal' ), $label ),
				'selector' => '{{WRAPPER}} ' . $selector,
			]
		);
		// Color control
		$this->add_control(
			$name . '_color',
			[
				'label'     => sprintf( __( '%s Color', 'fractal' ), $label ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ' . $selector => 'color: {{VALUE}};',
				],
			]
		);
		// Divider (optional)
		$this->add_control(
			'separator_' . $name,
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		// Background color control (optional)
		$this->add_control(
			$name . '_background_color',
			[
				'label'     => sprintf( __( '%s Background Color', 'fractal' ), $label ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ' . $selector => 'background-color: {{VALUE}};',
					'{{WRAPPER}} ' . $selector => 'background: {{VALUE}};',
				],
			]
		);
		$this->end_controls_section();
	}

	protected function register_icon_arrow_controls(
		$default_icon_image_url,
		$default_hover_icon_image_url,
		$default_label = 'Get direction',
	) {
		$this->start_controls_section(
			'content_section_icon',
			[
				'label' => __( 'Arrow Icons', 'fractal' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		// Control for the arrow icon label with default
		$this->add_control(
			'icon_label',
			[
				'label'       => __( 'Arrow Icon Label', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => __( $default_label, 'fractal' ),
				'label_block' => true,
			]
		);
		// Control for choosing between clickable URL or popup form
		$this->add_control(
			'icon_type',
			[
				'label'        => __( 'Choose Clickable URL or POPUP Form', 'fractal' ),
				'type'         => \Elementor\Controls_Manager::SWITCHER,
				'label_on'     => __( 'URL', 'fractal' ),
				'label_off'    => __( 'Popup Form', 'fractal' ),
				'return_value' => 'url',
				'default'      => 'url',
				'description'  => __( 'Switch between a Popup Form or a URL for icon click.', 'fractal' ),
			]
		);
		$this->add_control(
			'icon_url',
			[
				'label'       => __( 'Icon URL', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'fractal' ),
				'default'     => [
					'url'         => '',
					'is_external' => true,
					'nofollow'    => true,
				],
				'condition'   => [
					'icon_type' => 'url', // Display this field only when 'icon_type' is set to 'url'
				],
			]
		);
		// Control for the default arrow icon image
		$this->add_control(
			'icon_image',
			[
				'label'   => __( 'Arrow Icon Image', 'fractal' ),
				'type'    => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => $default_icon_image_url,
				],
			]
		);
		// Control for the arrow icon hover image
		$this->add_control(
			'icon_image_moved',
			[
				'label'   => __( 'Arrow Icon Hovered Image', 'fractal' ),
				'type'    => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => $default_hover_icon_image_url,
				],
			]
		);
		$this->end_controls_section();
	}

	protected function register_section_styles() {
		$this->start_controls_section(
			'Section',
			[
				'label' => __( 'Section Styles', 'fractal' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'section_background_color',
			[
				'label'     => sprintf( __( '%s Background Color', 'fractal' ), 'Section' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ' . '.section_background_color' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} ' . '.section_background_color' => 'background: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'sblock',
			[
				'label'     => __( 'Section Box Background Color', 'fractal' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ' . '.sblock' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} ' . '.sblock' => 'background: {{VALUE}};',
				],
			]
		);
		$this->end_controls_section();
	}

	protected function register_universal_style_controls( $section_id, $section_label, $class_selector, $default_position = 0, $default_width = 100 ) {
		$this->start_controls_section(
			$section_id . '_style_section',
			[
				'label' => sprintf( __( 'Style: %s', 'fractal' ), $section_label ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		// Left Position Control
		// Margin Control
		$this->add_responsive_control(
			$section_id . '_margin',
			[
				'label'      => __( 'Margin', 'fractal' ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					"{{WRAPPER}} $class_selector" => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// Padding Control
		$this->add_responsive_control(
			$section_id . '_padding',
			[
				'label'      => __( 'Padding', 'fractal' ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					"{{WRAPPER}} $class_selector" => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		// heigth Control
		$this->add_responsive_control(
			$section_id . '_width',
			[
				'label'      => __( 'Width', 'fractal' ),
				'type'       => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'vw' ],
				'range'      => [
					'%'  => [
						'min' => 10,
						'max' => 100,
					],
					'px' => [
						'min' => 300,
						'max' => 1600,
					],
					'vw' => [
						'min' => 10,
						'max' => 100,
					],
				],
				'selectors'  => [
					"{{WRAPPER}} $class_selector" => 'width: {{SIZE}}{{UNIT}};',
				],
				'default'    => [
					'unit' => '%',
					'size' => $default_width,
				],
			]
		);
		$this->add_responsive_control(
			$section_id . '_max_width',
			[
				'label'      => __( 'Max Width', 'fractal' ),
				'type'       => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'vw' ],
				'range'      => [
					'%'  => [
						'min' => 10,
						'max' => 100,
					],
					'px' => [
						'min' => 300,
						'max' => 1600,
					],
					'vw' => [
						'min' => 10,
						'max' => 100,
					],
				],
				'selectors'  => [
					"{{WRAPPER}} $class_selector" => 'max-width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// Width Control
		$this->add_responsive_control(
			$section_id . '_height',
			[
				'label'      => __( 'Height', 'fractal' ),
				'type'       => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'vw' ],
				'range'      => [
					'%'  => [
						'min' => 10,
						'max' => 100,
					],
					'px' => [
						'min' => 300,
						'max' => 1600,
					],
					'vw' => [
						'min' => 10,
						'max' => 100,
					],
				],
				'selectors'  => [
					"{{WRAPPER}} $class_selector" => 'height: {{SIZE}}{{UNIT}};',
				],
				'default'    => [
					'unit' => '%',
					'size' => '',
				],
			]
		);
		$this->add_responsive_control(
			$section_id . '_max_height',
			[
				'label'      => __( 'Max Width', 'fractal' ),
				'type'       => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px', 'vw' ],
				'range'      => [
					'%'  => [
						'min' => 10,
						'max' => 100,
					],
					'px' => [
						'min' => 300,
						'max' => 1600,
					],
					'vw' => [
						'min' => 10,
						'max' => 100,
					],
				],
				'selectors'  => [
					"{{WRAPPER}} $class_selector" => 'max-height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
	}

	protected function get_link_attributes( $icon_type, $post_link ) {
		if ( $icon_type !== 'url' ) {
			echo 'onclick="openModal(event)"';
		} else {
			echo 'href="' . esc_url( $post_link ) . '"';
		}
	}
}
