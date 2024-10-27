<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Nexter
 * @since	1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:url" content="<?php echo esc_url( get_post_permalink() ); ?>"/>
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="<?php echo esc_html( get_the_title() ); ?>"/>
	<meta property="og:image" content="<?php the_post_thumbnail_url( 'full' ); ?>"/>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	 <style>
        @font-face {
            font-family: 'Eudoxus Sans';
            src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/EudoxusSans-Regular.ttf') format('truetype');
            font-weight: 400;
        }
    </style>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="bg-general-white flex flex-col items-start justify-start
 leading-[normal] overflow-hidden relative tracking-[normal] w-full">

<?php
wp_body_open();
get_template_part( 'templates/header/index404' );
?>

	<div class="bg-general-white flex-col hidden items-center justify-start max-w-full self-stretch z-[2]">
		<div class="[row-gap:20px] flex flex-row gap-[-109px] items-center justify-between mq1125:flex-wrap px-[375px] py-3 self-stretch">
			<div class="flex-row gap-2 hidden items-center justify-end mq1125:flex-wrap text-smi z-[1]"><img class="h-[22px] overflow-hidden relative shrink-0 w-[22px]" alt src="/wp-content/themes/fractal/fractal/build/feather-iconsglobe.webp">
				<div class="leading-[22px] relative">English</div>
				<img class="h-[22px] relative w-[22px]" alt src="/wp-content/themes/fractal/fractal/build/iconssmall-iconsarrowchevrondown2.webp"></div>
			<div class="flex flex-row gap-2 items-center justify-end text-lightblue z-[2]"><img class="h-[22px] overflow-hidden relative shrink-0 w-[22px]" alt src="/wp-content/themes/fractal/fractal/build/feather-iconsphone.webp">
				<div class="leading-[24px] relative">212-714-0177</div>
			</div>
			<div class="flex flex-row items-center justify-start z-[3]"><img class="h-[62px] relative w-[169.4px]" alt src="/wp-content/themes/fractal/fractal/build/logotype-2.webp"></div>
			<div class="flex flex-row gap-[30px] items-start justify-start mq1125:flex-wrap z-[4]">
				<div class="flex flex-row gap-2 items-center justify-start"><img class="h-[22px] overflow-hidden relative shrink-0 w-[22px]" alt src="/wp-content/themes/fractal/fractal/build/feather-iconssearch.webp">
					<div class="leading-[24px] relative">Search</div>
				</div>
				<div class="flex flex-row gap-2 items-center justify-start"><img class="h-[22px] overflow-hidden relative shrink-0 w-[22px]" alt src="/wp-content/themes/fractal/fractal/build/feather-iconsshoppingcart.webp">
					<div class="leading-[24px] relative">Cart</div>
				</div>
			</div>
		</div>
		<img class="max-h-full max-w-full relative w-[1170px]" alt src="/wp-content/themes/fractal/fractal/build/shape-41.webp">
		<div class="flex flex-row font-button-space-grotesk gap-[33px] items-center justify-center mq1300:flex-wrap mq1300:justify-start pb-5 pt-[21px] px-[375px] self-stretch text-base text-general-1-secondary">
			<div class="flex flex-row items-center justify-start text-general-1-primary">
				<div class="leading-[22px] relative tracking-[0.25em] uppercase"> Home</div>
				<div class="flex flex-col items-start justify-start"><img class="h-4 relative w-4" alt src="/wp-content/themes/fractal/fractal/build/iconssmall-iconsarrowchevrondown-11.webp"></div>
			</div>
			<div class="flex flex-row items-center justify-start">
				<div class="leading-[22px] relative tracking-[0.25em] uppercase"> Pages</div>
				<div class="flex flex-col items-start justify-start"><img class="h-4 relative w-4" alt src="/wp-content/themes/fractal/fractal/build/iconssmall-iconsarrowchevrondown-2.webp"></div>
			</div>
			<div class="flex flex-row items-center justify-start">
				<div class="leading-[22px] relative tracking-[0.25em] uppercase"> Portfolio</div>
				<div class="flex flex-col items-start justify-start"><img class="h-4 relative w-4" alt src="/wp-content/themes/fractal/fractal/build/iconssmall-iconsarrowchevrondown-2.webp"></div>
			</div>
			<div class="flex-row hidden items-center justify-start text-general-white">
				<div class="leading-[22px] relative tracking-[0.25em] uppercase"> Blog</div>
				<div class="flex flex-col items-start justify-start"><img class="h-4 relative w-4" alt src="/wp-content/themes/fractal/fractal/build/iconssmall-iconsarrowchevrondown-1.webp"></div>
			</div>
			<div class="flex flex-row items-center justify-start">
				<div class="leading-[22px] relative tracking-[0.25em] uppercase"> Shop</div>
				<div class="flex flex-col items-start justify-start"><img class="h-4 relative w-4" alt src="/wp-content/themes/fractal/fractal/build/iconssmall-iconsarrowchevrondown-2.webp"></div>
			</div>
			<div class="flex-row hidden items-center justify-start text-general-white">
				<div class="leading-[22px] relative tracking-[0.25em] uppercase"> Elements</div>
				<div class="flex flex-col items-start justify-start"><img class="h-4 relative w-4" alt src="/wp-content/themes/fractal/fractal/build/iconssmall-iconsarrowchevrondown-1.webp"></div>
			</div>
			<div class="flex flex-row items-center justify-start">
				<div class="leading-[22px] relative tracking-[0.25em] uppercase"> Support</div>
				<div class="flex flex-col items-start justify-start"><img class="h-4 relative w-4" alt src="/wp-content/themes/fractal/fractal/build/iconssmall-iconsarrowchevrondown-2.webp"></div>
			</div>
		</div>
	</div>
	<section class="box-border flex flex-row font-button-space-grotesk items-start justify-center
	max-w-full px-5 py-0 text-[388px] text-center text-general-white w-[1755px]">
		<div class="flex flex-col gap-2 items-end justify-start max-w-full w-[1005px]">
			<b
				class="inline-block opacity-[0] leading-[388px] max-w-full mq450:leading-[155px] mq450:text-[97px] mq800:leading-[233px] mq800:text-[155px] relative tracking-[-0.03em] w-[723px] z-[1]">404</b>
			<div class="content-start flex flex-row flex-wrap gap-[55px] items-start justify-center max-w-full mq800:gap-[27px] self-stretch text-41xl text-general-1-secondary text-left">
				<h1 class="flex-1 font-[inherit] font-medium inline-block leading-[66px] m-0 max-w-full min-w-[488px] mq450:leading-[40px] mq450:text-17xl mq800:leading-[53px] mq800:min-w-full mq800:text-29xl relative text-inherit tracking-[-0.03em] z-[1]">
					<p class="m-0">We couldn’t find the page</p>
					<p class="m-0">you’re looking for</p></h1>
				<div class="flex flex-col items-start justify-start pb-0 pt-20 px-0">
					<button class="bg-[transparent] border-[2px] border-general-1-primary border-solid box-border cursor-pointer flex flex-row gap-2.5 h-[50px] items-start justify-start overflow-hidden pl-[66px] pr-[61px] py-[11px] relative self-stretch shrink-0 z-[1]">
						<div class="font-button-space-grotesk font-medium inline-block leading-[22px] min-w-[69px] relative text-base text-center text-general-1-secondary"> Go home</div>
						<div class="!m-[0] absolute bg-general-1-primary bottom-[0px] h-full left-[-200px] opacity-[0] top-[0px] w-full"></div>
					</button>
				</div>
			</div>
		</div>
	</section>


