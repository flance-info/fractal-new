<?php

use Elementor\Basic\FractalBaseElementor;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class OurServices_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'ourservices';
	}

	public function get_title() {
		return __( 'Our Services Fractal Widget', 'fractal' );
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
						'label' => __( 'Content Label and Heading', 'fractal' ),
						'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);
		$this->add_control(
				'label_one',
				[
						'label'       => __( 'Widget Label', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'Our Services', 'fractal' ),
						'label_block' => true,
						'dynamic'     => [
								'active' => true
						],
				]
		);
		// Widget Label Color
		$this->add_control(
				'heading_one_color',
				[
						'label'     => __( 'Widget Label Color', 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								'{{WRAPPER}} .label_one' => 'color: {{VALUE}};',
						],
						'dynamic'   => [
								'active' => true
						],
				]
		);
		// Widget Label Typography
		$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
						'name'     => 'heading_one_typography',
						'label'    => __( 'Widget Label Typography', 'fractal' ),
						'selector' => '{{WRAPPER}} .label_one',
				]
		);
		// Heading
		$this->add_control(
				'heading',
				[
						'label'       => __( 'Heading', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'Our Design Services in Dubai', 'fractal' ),
						'label_block' => true,
						'dynamic'     => [
								'active' => true
						],
				]
		);
		// HTML Tag for Heading Two
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
		// Heading Two Color
		$this->add_control(
				'heading_color',
				[
						'label'     => __( 'Heading Color', 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								'{{WRAPPER}} .heading' => 'color: {{VALUE}};',
						],
						'dynamic'   => [
								'active' => true
						],
				]
		);

			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
						'name'     => 'heading_typography',
						'label'    => __( 'Widget Label Typography', 'fractal' ),
						'selector' => '{{WRAPPER}} .heading',
				]
		);
		$this->end_controls_section();
		$default_values = [
				1 => [
						'title'       => 'Comprehensive Interior Design',
						'paragraph_1' => 'Fractal offers a full suite of interior design services to
						transform your Dubai space into a place you want to be at every
						time of the day. Whether you\'re creating a new interior space,
						sprucing up an existing one, or thinking about a simple fit out,
						we have the expertise and experience to help you nail down your
						needs.',
						'paragraph_2' => '<p class="m-0">
							Our company works with projects of all sizes and styles—be it
							a luxurious villa, a trendy hotel, a commercial space, or a chic
							residential apartment. We carry you along throughout the entire
							process, ensuring every detail aligns with your taste and
							lifestyle.
						</p>
						<p class="m-0">&nbsp;</p>
						<p class="m-0">
							Did we mention how outstanding our attention to detail is? Yes,
							from the paintwork to the flooring and cabinetry, everything is
							handled with a surprising degree of precision and care.
						</p>',
						'bg_image'    => get_template_directory_uri() . '/fractal/build/home_tables.png',
				],
				2 => [
						'title'       => 'Expert Renovation Services',
						'paragraph_1' => '	Ready to give your space a fresh start? Fractal has you covered.
						Whether you\'re thinking of a little apartment renovation or a full
						villa transformation, we’re the best at turning your home interior
						into modern, functional living spaces (with minimal disruption to
						your daily life).',
						'paragraph_2' => '	<p class="m-0">
							Our company handles it all—from the initial sketches and
							planning right through to the final build and those
							all-important finishing touches.
						</p>
						<p class="m-0">&nbsp;</p>
						<p class="m-0">
							And it’s not just your house—we also bring our design services
							to hospitality and office renovations. We understand your space
							needs to look amazing and work perfectly for your lifestyle or
							business. This is what guides our entire working relationship
							with you.
						</p>
						<p class="m-0">&nbsp;</p>
						<p class="m-0">
							Our mission? To create a space that not only meets but exceeds
							your expectations, leaving you with a place you’ll love for
							years to come.
						</p>',
						'bg_image'    => get_template_directory_uri() . '/fractal/build/frame-26587@3x.png',
				],
				3 => [
						'title'       => 'Exquisite Furniture Services',
						'paragraph_1' => '	Fractal redefines luxury living and workspaces with our
						custom-made interiors furniture and precision fit-out services in
						Dubai. But before we dive into our fit-out solutions, let’s talk
						about furniture.',
						'paragraph_2' => '<p class="m-0">
							We know it’s an investment. And like every investment, you need
							to see good returns. That’s why we treat every piece with the
							care it deserves.
						</p>
						<p class="m-0">&nbsp;</p>
						<p class="m-0">
							As we’ve emphasized so far, a common thread in all our services
							is the belief that every design should be both functional and
							beautiful. This isn’t just a tagline; it’s a promise. We work
							hard to strike that perfect balance in every furniture we
							create.
						</p>
						<p class="m-0">&nbsp;</p>
						<p class="m-0">
							At Fractal, there’s no such thing as a one-size-fits-all
							approach. All our services are bespoke, collaborative, and
							tailored to your needs. This way, we make sure your vision comes
							to life just the way you imagined.
						</p>',
						'bg_image'    => get_template_directory_uri() . '/fractal/build/frame-26588@3x.png',
				],
				4 => [
						'title'       => 'Construction Supervision',
						'paragraph_1' => 'At Fractal, we make sure your construction project goes off
						without a hitch. Our experienced construction supervision team
						handles every step, from breaking ground to handing over the keys.
						We keep a close eye on quality, stick to timelines, and manage
						your budgets smartly.',
						'paragraph_2' => '<p class="m-0">
							Our works include on-site inspections, tracking progress,
							ensuring top-notch quality, and risk management. We work closely
							with contractors, subcontractors, and clients to keep everything
							running smoothly.
						</p>
						<p class="m-0">&nbsp;</p>
						<p class="m-0">
							Again, our goal is to deliver projects that are safe, efficient,
							and of the highest quality. When you choose Fractal for
							construction supervision, you can relax knowing your project is
							in good hands.
						</p>
						<p class="m-0">&nbsp;</p>
						<p class="m-0">
							Last but not least—we also want to help you save money. So, you
							can rest assured you’ll be paying for only the things you
							absolutely need.
						</p>',
						'bg_image'    => get_template_directory_uri() . '/fractal/build/frame-26589@3x.png',
				],
		];
		for ( $i = 1; $i <= 4; $i ++ ) {
			$this->register_service_controls( $i, $default_values[ $i ] );
		}

		$this->register_icon_arrow_controls(
				get_template_directory_uri() . '/fractal/build/navigation2.webp',
				get_template_directory_uri() . '/fractal/build/orange_nav.webp',
				'Learn more',
		);
	}

	protected function register_service_controls( $service_number, $defaults ) {
		$this->start_controls_section(
				"content_section_{$service_number}",
				[
						'label' => __( "Service {$service_number}", 'fractal' ),
						'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);
		// Service Title Control
		$this->add_control(
				"service_{$service_number}_title",
				[
						'label'       => __( "Service {$service_number} Title", 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( $defaults['title'], 'fractal' ),
						'label_block' => true,
				]
		);
		$this->add_control(
				"service_{$service_number}_link",
				[
						'label'       => __( "Service {$service_number} Link", 'fractal' ),
						'type'        => \Elementor\Controls_Manager::URL,
						'default'     => [
					'url' => '#',
				],

				]
		);
		// Typography Group Control for Title
		$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
						'name'     => "service_{$service_number}_title_typography",
						'label'    => __( "Service {$service_number} Title Typography", 'fractal' ),
						'selector' => "{{WRAPPER}} .service-{$service_number}-title",
				]
		);
		// Color Control for Title
		$this->add_control(
				"service_{$service_number}_title_color",
				[
						'label'     => __( "Service {$service_number} Title Color", 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								"{{WRAPPER}} .service-{$service_number}-title" => 'color: {{VALUE}};',
						],
				]
		);
		$this->add_control(
				"service_{$service_number}_title_tag",
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
						'default' => 'h3',
				]
		);
		// Service First Paragraph  Control
// Add First Paragraph Controls
		$this->add_paragraph_controls( $service_number, 1, 'First', $defaults['paragraph_1'] );
// Add Second Paragraph Controls
		$this->add_paragraph_controls( $service_number, 2, 'Second', $defaults['paragraph_2'] );
		// Background Image Control
		$this->add_control(
				"service_{$service_number}_bg_image",
				[
						'label'   => __( "Service {$service_number} Background Image", 'fractal' ),
						'type'    => \Elementor\Controls_Manager::MEDIA,
						'default' => [
								'url' => $defaults['bg_image'],
						],
				]
		);
		$this->end_controls_section();
	}

	protected function add_paragraph_controls( $service_number, $paragraph_number, $label, $default_description ) {
		// Paragraph Control
		$this->add_control(
				"service_{$service_number}_paragraph_{$paragraph_number}",
				[
						'label'       => __( "Service {$service_number} {$label} Paragraph", 'fractal' ),
						'type'        => \Elementor\Controls_Manager::WYSIWYG,
						'default'     => __( $default_description, 'fractal' ),
						'label_block' => true,
				]
		);
		// Typography Group Control for Paragraph
		$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
						'name'     => "service_{$service_number}_paragraph_{$paragraph_number}_typography",
						'label'    => __( "Service {$service_number} {$label} Paragraph Typography", 'fractal' ),
						'selector' => "{{WRAPPER}} .service-{$service_number}-paragraph-{$paragraph_number}",
				]
		);
		// Color Control for Paragraph
		$this->add_control(
				"service_{$service_number}_paragraph_{$paragraph_number}_color",
				[
						'label'     => __( "Service {$service_number} {$label} Paragraph Color", 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								"{{WRAPPER}} .service-{$service_number}-paragraph-{$paragraph_number}" => 'color: {{VALUE}};',
						],
				]
		);
	}

	protected function render() {
		$settings    = $this->get_settings_for_display();
		$label_one   = $settings['label_one'];
		$heading     = $settings['heading'];
		$heading_tag = $settings['heading_html_tag'];
		$this->add_inline_editing_attributes( 'label_one', 'none' );
		$this->add_inline_editing_attributes( 'heading', 'none' );
		$services = [];
		for ( $i = 1; $i <= 4; $i ++ ) {
			$services[ $i ] = [
					'title'       => $settings["service_{$i}_title"],
					'link'       => $settings["service_{$i}_link"],
					'bg_image'    => ! empty( $settings["service_{$i}_bg_image"]['url'] ) ? esc_url( $settings["service_{$i}_bg_image"]['url'] ) : '',
					'paragraph_1' => $settings["service_{$i}_paragraph_1"],
					'paragraph_2' => $settings["service_{$i}_paragraph_2"],
					'title_tag'   => $settings["service_{$i}_title_tag"],
			];
			// Add inline editing attributes for title and paragraphs
			$this->add_inline_editing_attributes( "service_{$i}_title", 'none' );
			$this->add_inline_editing_attributes( "service_{$i}_paragraph_1", 'advanced' );
			$this->add_inline_editing_attributes( "service_{$i}_paragraph_2", 'advanced' );
		}
		include get_stylesheet_directory() . '/elementor-templates/custom-ourservices-template.php';
	}

	protected function render_service( $service, $i ) {
		$title       = $service['title'];
		$bg_image    = $service['bg_image'];
		$paragraph_1 = $service['paragraph_1'];
		$paragraph_2 = $service['paragraph_2'];
		$title_tag   = $service['title_tag'];
		?>
		<<?php echo esc_html( $title_tag ); ?>  class="self-stretch relative tracking-[-0.02em] leading-[54px] font-medium <?php echo "service-{$i}-title" ?> elementor-inline-editing" <?php echo $this->get_render_attribute_string( "service_{$i}_title" ); ?>>
			<?php echo esc_html( $title ); ?>
		</<?php echo esc_html( $title_tag ); ?>>
		<div class="self-stretch relative text-5xl tracking-[-0.01em] leading-[30px] font-medium text-general-1-secondary-variant <?php echo "service-{$i}-paragraph-1" ?> elementor-inline-editing" <?php echo $this->get_render_attribute_string( "service_{$i}_paragraph_1" ); ?>>
			<?php echo $paragraph_1; ?>
		</div>
		<div class="self-stretch relative text-base leading-[26px] font-body-b6-merriweather-11 text-elements-neutral <?php echo "service-{$i}-paragraph-2" ?> elementor-inline-editing" <?php echo $this->get_render_attribute_string( "service_{$i}_paragraph_2" ); ?>>
			<?php echo $paragraph_2; ?>
		</div>
		<?php
	}


}