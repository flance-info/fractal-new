<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
if ( ! empty( $settings['gallery_items'] ) ) {
	echo '<div class="w-full">';
	echo '<section class="self-stretch flex flex-row items-start justify-center mq450:grid-cols-[minmax(240px,_1fr)] mq925:grid-cols-[repeat(2,_minmax(240px,_416px))] mq925:overflow-x-auto mq925:flex-nowrap mq925:justify-start ">';
	foreach ( $settings['gallery_items'] as $index => $item ) {
		$image_url = isset( $item['gallery_image']['url'] ) ? esc_url( $item['gallery_image']['url'] ) : '';
		$image_alt = isset( $item['gallery_image_alt'] ) ? esc_attr( $item['gallery_image_alt'] ) : '';
		if ( $image_url ) {
			echo '<img class="h-80 flex-1 relative object-cover min-w-[314px] mq450:w-full" loading="lazy" alt="' . $image_alt . '" src="' . $image_url . '">';
		}
	}
	echo '</section>';
	echo '</div>';
}





