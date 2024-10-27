<?php

use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Basic\FractalBaseElementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class LatesBlogs_Widget extends FractalBaseElementor {

	public function get_name() {
		return 'latestblogs';
	}

	public function get_title() {
		return __( 'Home Latest Blogs Fractal Widget', 'fractal' );
	}

	public function get_icon() {
		return 'eicon-banner';
	}

	public function get_categories() {
		return [ 'fractal' ];
	}

	protected function register_controls() {
		$this->register_blog_section_controls();
		$this->register_blog_posts_controls();
		$typography_controls = [
				'heading'          => [ 'label' => 'Section Blog Heading', 'selector' => '.heading', 'default_tag' => 'h2' ],
				'label'            => [ 'label' => 'Section Blog Label', 'selector' => '.label' ],
				'description'      => [ 'label' => 'Section Blog Description', 'selector' => '.description' ],
				'bttn'             => [ 'label' => 'All Posts Button', 'selector' => '.bttn', 'default_tag' => 'a' ],
				'blog_title'       => [ 'label' => 'Blog Title', 'selector' => '.blog_title' ],
				'blog_description' => [ 'label' => 'Blog Description', 'selector' => '.blog_description' ],
				'stm-date'         => [ 'label' => 'Blog Date', 'selector' => '.stm-date' ],
		];
		foreach ( $typography_controls as $name => $control ) {
			$default_tag = ( ! empty( $control['default_tag'] ) ) ? $control['default_tag'] : 'div';
			$this->register_typography_controls( $name, $control['label'], $control['selector'], $default_tag );
		}
		$this->register_icon_arrow_controls(
				get_template_directory_uri() . '/fractal/build/navigation3.webp',
				get_template_directory_uri() . '/fractal/build/orange_nav.webp',
				'Read More',
		);

	}

	protected function register_blog_section_controls() {
		$this->start_controls_section(
				'blog_section',
				[
						'label' => __( 'Blog Section', 'fractal' ),
						'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);
		// Blog main title
		$this->add_control(
				'blog_main_title',
				[
						'label'       => __( 'Main Title', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'From the Blog', 'fractal' ),
						'placeholder' => __( 'Enter main title', 'fractal' ),
				]
		);
		// Blog subtitle
		$this->add_control(
				'blog_subtitle',
				[
						'label'       => __( 'Label', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'Latest Insights', 'fractal' ),
						'placeholder' => __( 'Enter Label', 'fractal' ),
				]
		);
		// Blog description
		$this->add_control(
				'blog_description',
				[
						'label'       => __( 'Description', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXTAREA,
						'default'     => __( 'Stay inspired with our latest interior design trends, expert advice, and project spotlights.', 'fractal' ),
						'placeholder' => __( 'Enter description', 'fractal' ),
				]
		);
		// "All Posts" button text
		$this->add_control(
				'button_text',
				[
						'label'       => __( 'Button Text', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'All Posts', 'fractal' ),
						'placeholder' => __( 'Enter button text', 'fractal' ),
				]
		);
		// "All Posts" button link
		$this->add_control(
				'button_link',
				[
						'label'       => __( 'Button Link', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::URL,
						'placeholder' => __( 'https://your-link.com', 'fractal' ),
						'default'     => [
								'url' => '#',
						],
				]
		);
		$this->end_controls_section();
	}

	protected function register_blog_posts_controls() {
		$this->start_controls_section(
				'blog_posts_section',
				[
						'label' => __( 'Blog Posts', 'fractal' ),
						'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);
		// Repeater for blog posts
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
				'post_image',
				[
						'label'   => __( 'Post Image', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::MEDIA,
						'default' => [
								'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
				]
		);
		$repeater->add_control(
				'post_image_hover',
				[
						'label'   => __( 'Post Hover Image', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::MEDIA,
						'default' => [
								'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
				]
		);
		$repeater->add_control(
				'post_date',
				[
						'label'   => __( 'Post Date', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::TEXT,
						'default' => __( 'August 30, 2024', 'fractal' ),
				]
		);
		$repeater->add_control(
				'post_title',
				[
						'label'       => __( 'Post Title', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'Post Title', 'fractal' ),
						'placeholder' => __( 'Enter post title', 'fractal' ),
				]
		);
		$repeater->add_control(
				'post_description',
				[
						'label'   => __( 'Post Description', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::TEXTAREA,
						'default' => __( 'Post description goes here.', 'fractal' ),
				]
		);
		$repeater->add_control(
				'post_link',
				[
						'label'       => __( 'Read More Link', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::URL,
						'placeholder' => __( 'https://your-link.com', 'fractal' ),
						'default'     => [
								'url' => '#',
						],
				]
		);
		$this->add_control(
				'blog_posts',
				[
						'label'       => __( 'Blog Posts', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::REPEATER,
						'fields'      => $repeater->get_controls(),
						'default'     => [
								[
										'post_title'       => __( 'Sustainable House Design—Features, Benefits & More', 'fractal' ),
										'post_date'        => __( 'August 30, 2024', 'fractal' ),
										'post_description' => __( 'Dubai is the reflection of its breathtaking skyline and luxury architecture.', 'fractal' ),
										'post_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/sustainablehousedesignfeaturesbenefitsmore@2x.webp' ],
										'post_image_hover' => [ 'url' => get_template_directory_uri() . '/fractal/build/glasses-girl.webp' ],
										'post_link'        => [ 'url' => home_url( '/sustainable-house-design-features-benefits-more/' ) ],
								],
								[
										'post_title'       => __( 'Garden Design in Dubai—Transform Your Outdoor Space', 'fractal' ),
										'post_date'        => __( 'August 4, 2024', 'fractal' ),
										'post_description' => __( 'When we hear about Dubai, luxury and innovative infrastructure come to mind.', 'fractal' ),
										'post_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/gardendesignindubaitransformyouroutdoorspace@2x.webp' ],
										'post_image_hover' => [ 'url' => get_template_directory_uri() . '/fractal/build/glasses-girl.webp' ],
										'post_link'        => [ 'url' => home_url( '/garden-design-in-dubai-transform-your-outdoor-space/' ) ],
								],
								[
										'post_title'       => __( 'Hospitality Interior Design in Dubai', 'fractal' ),
										'post_date'        => __( 'July 18, 2024', 'fractal' ),
										'post_description' => __( 'In the year 2024, Dubai has observed a rise in tourists exceeding the previous percentage.', 'fractal' ),
										'post_image'       => [ 'url' => get_template_directory_uri() . '/fractal/build/fotolia-6014662-subscription-monthly-m-1@2x.webp' ],
										'post_image_hover' => [ 'url' => get_template_directory_uri() . '/fractal/build/glasses-girl.webp' ],
										'post_link'        => [ 'url' => home_url( '/hospitality-interior-design-in-dubai/' ) ],
								],
						],
						'title_field' => '{{{ post_title }}}',
				]
		);
		$this->end_controls_section();
	}


	protected function render() {
		$settings = $this->get_settings_for_display();
		include get_stylesheet_directory() . '/elementor-templates/custom-latestblogs-template.php';
	}

	protected function content_template() {
		?>
		<#
		// Assigning the HTML tags from settings
		var headingTag = settings.heading_html_tag || 'h2';
		var labelTag = settings.label_html_tag || 'div';
		var descriptionTag = settings.description_html_tag || 'div';
		var buttonTag = settings.bttn_html_tag || 'a';
		var titleTag = settings.blog_title_html_tag || 'h3';
		var dateTag = settings.stm_date_html_tag || 'div';

		var arrowImageUrl = settings.icon_image.url || '<?php echo \Elementor\Utils::get_placeholder_image_src(); ?>';
		var arrowImageHoverUrl = settings.icon_image_moved.url || '<?php echo \Elementor\Utils::get_placeholder_image_src(); ?>';
		#>
		<div class="w-full">
			<section class="self-stretch relative bg-general-white min-h-[1000px] text-sm flex flex-col items-center mq925:px-[25px]">
				<div class="w-full max-w-[1170px] flex flex-col justify-center ">
					<div class="flex flex-row mt-[148px] mb-[68px] justify-between mq925:flex-col">
						<{{ headingTag }} class="heading min-w-[370px] text-base tracking-[0.25em] leading-[22px] uppercase text-general-1-primary elementor-inline-editing">
						{{{ settings.blog_main_title }}}
					</{{ headingTag }}>

					<div class="flex flex-row">
						<div class="flex flex-col gap-[11px]">
							<{{ labelTag }} class="label text-29xl tracking-[-0.02em] leading-[54px] font-medium text-general-1-secondary inline-block w-[350px] elementor-inline-editing">
							{{{ settings.blog_subtitle }}}
						</{{ labelTag }}>

						<div class="flex flex-row mq925:flex-col mq925:gap-[30px]">
							<{{ descriptionTag }} class="description text-5xl tracking-[-0.01em] leading-[30px] font-medium text-general-1-secondary-variant inline-block w-[580px] mq925:w-full elementor-inline-editing">
							{{{ settings.blog_description }}}
						</{{ descriptionTag }}>

						<{{ buttonTag }} href="{{ settings.button_link.url }}" class="bttn [text-decoration:none] font-medium bg-general-white border-general-1-primary border-[2px] border-solid w-[150px] h-[50px] overflow-hidden text-center text-base text-general-1-secondary justify-center flex
						mbtn-prm-bord hover:text-white elementor-inline-editing">
						<div class="bttn leading-[22px] font-medium flex items-center justify-center elementor-inline-editing">
							{{{ settings.button_text }}}
						</div>
						</{{ buttonTag }}>
				</div>
		</div>
		</div>
		</div>

		<div class="flex flex-row justify-between mq925:flex-col">
			<# _.each(settings.blog_posts, function(post) { #>
			<div class="w-[370px] h-[540px] overflow-hidden flex flex-col items-start justify-start gap-[30px] stm-hover-box mq925:mb-[50px] mq925:w-full">
				<div class="self-stretch relative h-60 stm-img">
					<img class="absolute h-full w-full top-0 right-0 bottom-0 left-0 max-w-full overflow-hidden max-h-full object-cover stm-m-img" src="{{ post.post_image.url }}" alt="">
					<img class="absolute h-full w-full top-0 right-0 bottom-0 left-0 max-w-full overflow-hidden max-h-full object-cover stm-h-img" src="{{ post.post_image_hover.url }}" alt="">

					<div class="absolute top-[20px] left-[20px] bg-general-1-primary flex flex-row items-center justify-center py-[3px] px-2 text-white">
						<{{ dateTag }} class="stm-date relative leading-[20px]">
						{{{ post.post_date }}}
					</{{ dateTag }}>
				</div>
			</div>

			<div class="self-stretch h-[270px] overflow-hidden shrink-0 flex flex-col items-start justify-between text-base text-general-1-secondary-variant">
				<div class="self-stretch flex flex-col items-start justify-start gap-5 text-5xl">
					<{{ titleTag }} class="self-stretch stm-title relative tracking-[-0.01em] leading-[30px] font-medium blog_title">
					{{{ post.post_title }}}
				</{{ titleTag }}>
				<{{ descriptionTag }} class="self-stretch relative text-lg leading-[30px] font-body-b6-merriweather-11 blog_description text-elements-neutral">
				{{{ post.post_description }}}
			</{{ descriptionTag }}>
		</div>

		<div class="flex flex-row items-center justify-start relative gap-4 text-right text-general-1-secondary">
			<a class="stm-gray" href="{{ post.post_link.url }}">
				<div class="notext-color arrow-container">
					<span class="text tracking-[0.25em] leading-[22px] uppercase z-[1]">{{{ settings.icon_label || 'Read More' }}}</span>
					<div class="circle">
						<img class="stm-mb w-[70px] relative h-[70px]" src="{{ arrowImageUrl }}" alt="">
						<img class="stm-mb1 w-[70px] relative h-[70px]" src="{{ arrowImageHoverUrl }}" alt="">
					</div>
				</div>
			</a>
		</div>
		</div>
		</div>
		<# }); #>
		</div>
		</div>
		</section>
		</div>
		<?php
	}

}
