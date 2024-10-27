<?php

$custom_logo_id         = $logo_image = starter_get_option( 'logo_image', '' );
$custom_white_logo_id = starter_get_option( 'logo_image_white', '' );

$logo_image             = wp_get_attachment_image_src( $custom_logo_id, 'full' );

$white_logo_image = wp_get_attachment_image_src( $custom_white_logo_id, 'full' );


$customizer_logo_width  = get_theme_mod( 'ms_lms_starter_logo_width' ) ? get_theme_mod( 'ms_lms_starter_logo_width' ) : '226';
$customizer_logo_height = get_theme_mod( 'ms_lms_starter_logo_height' ) ? get_theme_mod( 'ms_lms_starter_logo_height' ) : '40';
?>

<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="starter-logo">
	<?php if ( is_404() ) : ?>
    <img
       class="h-[62px] relative w-[169.4px]"
		style="width: 140px;"
        loading="lazy"
        alt=""
        src="<?php echo esc_url( $white_logo_image[0] ); ?>"
    />

<?php else: ?>
		<img
			class="h-[62px] relative w-[169.4px] stm-logo-white"
			loading="lazy"
			alt=""
			src="<?php echo esc_url( $white_logo_image[0] ); ?>"
	/>
<?php endif; ?>


</a>

