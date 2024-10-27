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
 leading-[normal] overflow-hidden tracking-[normal] w-full">

<?php
wp_body_open();
get_template_part( 'templates/header/index' );
