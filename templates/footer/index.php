<?php

$socials_twitter_url   = get_theme_mod( 'ms_lms_starter_socials_twitter' );
$socials_facebook_url  = get_theme_mod( 'ms_lms_starter_socials_facebook' );
$socials_instagram_url = get_theme_mod( 'ms_lms_starter_socials_instagram' );
$socials_youtube_url   = get_theme_mod( 'ms_lms_starter_socials_youtube' );
$twitter_url           = get_theme_mod( 'ms_lms_starter_socials_twitter', null );
$facebook_url          = get_theme_mod( 'ms_lms_starter_socials_facebook', null );
$instagram_url         = get_theme_mod( 'ms_lms_starter_socials_instagram', null );
$youtube_url           = get_theme_mod( 'ms_lms_starter_socials_youtube', null );
$custom_logo_id        = $logo_image = starter_get_option( 'logo_image', '' );
$custom_white_logo_id  = starter_get_option( 'logo_image_white', '' );
$logo_image            = wp_get_attachment_image_src( $custom_logo_id, 'full' );
$white_logo_image      = wp_get_attachment_image_src( $custom_white_logo_id, 'full' );
$current_url           = home_url( add_query_arg( null, null ) );
?>
<?php require_once 'contact.php'; ?>



<footer class="bg-general-1-secondary box-border flex flex-col font-button-space-grotesk gap-[58px] items-start justify-start max-w-full mq925:box-border mq925:gap-[29px] mq925:pt-[52px] pb-0 pt-20 px-0 relative self-stretch text-5xl text-general-white text-left z-[1]">
	<div class="box-border flex flex-row items-start justify-center max-w-full px-5 py-0 self-stretch">
		<div class="flex flex-row gap-[60px] items-start justify-center max-w-full mq1400:flex-wrap mq1400:gap-[30px] w-[1170px]">
			<div class="flex flex-1 flex-col gap-[30px] items-start justify-start max-w-full min-w-[474px] mq925:min-w-full"><h3
						class="font-[inherit] font-medium leading-[30px] m-0 mq450:leading-[24px] mq450:text-lgi relative text-inherit tracking-[-0.01em]"> Our Services </h3>
				<div class="flex flex-row gap-[30px] items-start justify-start mq925:flex-wrap self-stretch text-base text-gray-300">
					<div class="flex flex-1 flex-col gap-3.5 items-start justify-start min-w-[167px]">
						<?php
						$menu_name = 'footer-one';
						$locations = get_nav_menu_locations();
						if ( isset( $locations[ $menu_name ] ) ) {
							$menu_id            = $locations[ $menu_name ];
							$menu_items         = wp_get_nav_menu_items( $menu_id );
							$first_three_items  = array_slice( $menu_items, 0, 3 );
							$second_three_items = array_slice( $menu_items, 3, 3 );
							$four_three_items   = array_slice( $menu_items, 6, 3 );
							if ( $first_three_items ) { ?>
								<?php
								foreach ( $first_three_items as $menu_item ) :
									$title = esc_html( $menu_item->title );
									$url        = esc_url( $menu_item->url );
									$is_current = ( $url === $current_url );
									?>
									<div class="flex flex-row gap-2.5 items-center justify-start self-stretch">
										<img class="h-6 relative w-6" alt src="/wp-content/themes/fractal/fractal/build/iconssmall-iconsarrowchevronright.webp">
										<div class="flex-1 font-medium leading-[22px] relative">
											<a class="[text-decoration:none] hover:text-general-1-primary text-gray-300 font-medium <?php echo $is_current ? 'active' : ''; ?>" href="<?php echo $url ?>"> <?php echo $title ?></a>
										</div>
									</div>

								<?php
								endforeach;
								?>
								<?php
							}
						}
						?>
					</div>
					<div class="flex flex-1 flex-col gap-3.5 items-start justify-start min-w-[167px]">
						<?php
						if ( isset( $second_three_items ) ) {
							if ( $second_three_items ) { ?>
								<?php
								foreach ( $second_three_items as $menu_item ) :
									$title = esc_html( $menu_item->title );
									$url = esc_url( $menu_item->url );
									$is_current = ( $url === $current_url );
									?>
									<div class="flex flex-row gap-2.5 items-center justify-start self-stretch">
										<img class="h-6 relative w-6" alt src="/wp-content/themes/fractal/fractal/build/iconssmall-iconsarrowchevronright.webp">
										<div class="flex-1 font-medium leading-[22px] relative">
											<a class="[text-decoration:none] hover:text-general-1-primary text-gray-300 font-medium <?php echo $is_current ? 'active' : ''; ?>" href="<?php echo $url ?>"> <?php echo $title ?></a>
										</div>
									</div>

								<?php
								endforeach;
								?>
								<?php
							}
						}
						?>
					</div>
					<div class="flex flex-1 flex-col gap-3.5 items-start justify-start min-w-[167px]">
						<?php
						if ( isset( $four_three_items ) ) {

							if ( $four_three_items ) { ?>
								<?php
								foreach ( $four_three_items as $menu_item ) :
									$title = esc_html( $menu_item->title );
									$url = esc_url( $menu_item->url );
									$is_current = ( $url === $current_url );
									?>
									<div class="flex flex-row gap-2.5 items-center justify-start self-stretch">
										<img class="h-6 relative w-6" alt src="/wp-content/themes/fractal/fractal/build/iconssmall-iconsarrowchevronright.webp">
										<div class="flex-1 font-medium leading-[22px] relative">
											<a class="[text-decoration:none] hover:text-general-1-primary text-gray-300 font-medium <?php echo $is_current ? 'active' : ''; ?>" href="<?php echo $url ?>"> <?php echo $title ?></a>
										</div>
									</div>

								<?php
								endforeach;
								?>
								<?php
							}
						}
						?>
					</div>
				</div>
			</div>
			<div class="flex flex-col gap-[30px] items-start justify-start max-w-full min-w-[380px] mq1400:flex-1 mq450:min-w-full overflow-hidden"><h3
						class="font-[inherit] font-medium inline-block leading-[30px] m-0 min-w-[129px] mq450:leading-[24px] mq450:text-lgi relative text-inherit tracking-[-0.01em]"> Quick Links </h3>
				<div class="flex flex-row gap-[30px] items-start justify-start mq450:flex-wrap self-stretch text-base text-gray-300 ">
					<div class="flex flex-1 flex-col gap-3.5 items-start justify-start min-w-[114px]">


						<?php
						$menu_name = 'footer-two';
						$locations = get_nav_menu_locations();
						if ( isset( $locations[ $menu_name ] ) ) {
							$menu_id            = $locations[ $menu_name ];
							$menu_items         = wp_get_nav_menu_items( $menu_id );
							$first_three_items  = array_slice( $menu_items, 0, 3 );
							$second_three_items = array_slice( $menu_items, 3, 3 );
							if ( $first_three_items ) { ?>
								<?php
								foreach ( $first_three_items as $menu_item ) :
									$title = esc_html( $menu_item->title );
									$url        = esc_url( $menu_item->url );
									$is_current = ( $url === $current_url );
									?>
									<div class="flex flex-row gap-2.5 items-center justify-start self-stretch">
										<img class="h-6 relative w-6" alt src="/wp-content/themes/fractal/fractal/build/iconssmall-iconsarrowchevronright.webp">
										<div class="flex-1 font-medium leading-[22px] relative">
											<a class="[text-decoration:none] hover:text-general-1-primary text-gray-300 font-medium <?php echo $is_current ? 'active' : ''; ?>" href="<?php echo $url ?>"> <?php echo $title ?></a>
										</div>
									</div>

								<?php
								endforeach;
								?>
								<?php
							}
						}
						?>
					</div>
					<div class="flex flex-1 flex-col gap-3.5 items-start justify-start min-w-[114px]">
						<?php
						if ( isset( $second_three_items ) ) {

							if ( $second_three_items ) { ?>
								<?php
								foreach ( $second_three_items as $menu_item ) :
									$title = esc_html( $menu_item->title );
									$url = esc_url( $menu_item->url );
									$is_current = ( $url === $current_url );
									?>
									<div class="flex flex-row gap-2.5 items-center justify-start self-stretch">
										<img class="h-6 relative w-6" alt src="/wp-content/themes/fractal/fractal/build/iconssmall-iconsarrowchevronright.webp">
										<div class="flex-1 font-medium leading-[22px] relative">
											<a class="[text-decoration:none] hover:text-general-1-primary text-gray-300 font-medium <?php echo $is_current ? 'active' : ''; ?>" href="<?php echo $url ?>"> <?php echo $title ?></a>
										</div>
									</div>

								<?php
								endforeach;
								?>
								<?php
							}
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="box-border flex flex-row items-start justify-center max-w-full px-5 py-0 self-stretch"><img class="max-h-full max-w-full relative w-[1170px]" alt src="/wp-content/themes/fractal/fractal/build/rectangle-691.webp"></div>
	<div class="box-border flex flex-row font-body-b4-merriweather-13 items-start justify-center max-w-full px-5 py-0 self-stretch text-gray-200 text-sm">
		<div class="content-start flex flex-row flex-wrap gap-[60px] items-start justify-center max-w-full mq1400:gap-[30px] w-[1170px]">
			<div class="flex flex-1 flex-col gap-[23px] items-start justify-start max-w-full min-w-[361px] mq450:min-w-full relative">
				<div class="flex flex-row items-center justify-start">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img class="h-[63px] relative w-[172.1px]" loading="lazy" alt
							 src="<?php echo esc_url( $logo_image[0] ); ?>">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						</a>
				</div>


				<div class="leading-[24px] relative"> Fractal is a Dubai-based leading interior design company dedicated to creating exceptional spaces (Home, Villa, Hotel fit out works, Offices, Commercial spaces, etc) that reflect
					your unique taste.
				</div>
				<div class="flex flex-row font-button-space-grotesk gap-3.5 items-center justify-center mq925:flex-wrap overflow-hidden rounded-[20px] text-[20px] text-general-white">
					<div class="font-medium leading-[26px] mq450:leading-[21px] mq450:text-base relative tracking-[-0.01em]"> Follow Us on Social Media</div>

					<a href="<?php echo esc_url( $facebook_url ); ?>" target="_blank" rel="noopener noreferrer">
						<div class="border-[1px] border-gray-100 border-solid flex flex-col items-center justify-center overflow-hidden px-[11px] py-2.5 rounded-11xl">

							<img class="h-6 relative w-6" alt src="/wp-content/themes/fractal/fractal/build/iconssmall-iconssocialfacebook-filled.webp">

						</div>
					</a>
					<a href="<?php echo esc_url( $youtube_url ); ?>" target="_blank" rel="noopener noreferrer">
						<div class="border-[1px] border-gray-100 border-solid flex flex-col items-center justify-center overflow-hidden px-[11px] py-2.5 rounded-11xl">

							<img class="h-6 object-cover relative w-6" alt src="/wp-content/themes/fractal/fractal/build/iconssmall-iconssocialyoutube@2x.webp">

						</div>
					</a>
					<a href="<?php echo esc_url( $instagram_url ); ?>" target="_blank" rel="noopener noreferrer">

						<div class="border-[1px] border-gray-100 border-solid flex flex-col items-center justify-center overflow-hidden px-[11px] py-2.5 rounded-11xl">
							<img class="h-6 object-cover relative w-6" alt src="/wp-content/themes/fractal/fractal/build/iconssmall-iconssocialinstagram@2x.webp">


						</div>
					</a>
					<a href="<?php echo esc_url( $twitter_url ); ?>" target="_blank" rel="noopener noreferrer">

						<div class="border-[1px] border-gray-100 border-solid flex flex-col items-center justify-center overflow-hidden px-[11px] py-2.5 rounded-11xl">
							<img class="h-6 relative w-6" alt src="/wp-content/themes/fractal/fractal/build/iconssmall-iconssocialtwitter.webp">

						</div>
					</a>
					<a href="<?php echo esc_url( $twitter_url ); ?>" target="_blank" rel="noopener noreferrer">

						<div class="border-[1px] border-gray-100 border-solid box-border flex flex-col h-12 items-center justify-center overflow-hidden px-[11px] py-2.5 rounded-11xl">
							<img class="h-6 object-cover relative w-6" alt src="/wp-content/themes/fractal/fractal/build/iconssmall-iconssociallinkedin@2x.webp">

						</div>
					</a>
				</div>
				<div class="!m-[0] absolute bottom-[-8.78%] flex-row gap-5 h-[22.01%] hidden items-center justify-center left-[0.11%] mq450:flex-wrap overflow-hidden right-[37.14%] top-[86.77%] w-[62.76%] z-[3]"><img
							class="h-[50.4px] overflow-hidden relative shrink-0 w-[102.8px]" alt src="/wp-content/themes/fractal/fractal/build/twitter.webp"> <img class="h-[50.4px] overflow-hidden relative shrink-0 w-[102.8px]" alt src="/wp-content/themes/fractal/fractal/build/facebook.webp"> <img
							class="h-[50.4px] overflow-hidden relative shrink-0 w-[102.8px]" alt src="/wp-content/themes/fractal/fractal/build/youtube.webp"></div>
			</div>
			<div class="flex flex-1 flex-col gap-[28.3px] items-start justify-start max-w-full min-w-[361px] mq450:min-w-full text-5xl">
				<div class="flex flex-row font-button-space-grotesk items-start justify-start overflow-hidden self-stretch text-general-white"><h3
							class="font-[inherit] font-medium leading-[30px] m-0 mq450:leading-[24px] mq450:text-lgi relative text-inherit tracking-[-0.01em]"> Subscribe to Our Newsletter </h3></div>
				<div class="leading-[24px] relative text-sm"> Stay ahead in a rapidly changing world. Subscribe to Fractal Insights, our monthly look at the critical issues facing global businesses.</div>
				<div class="flex flex-row gap-2.5 items-start justify-start max-w-full mq925:flex-wrap self-stretch"><input
							class="[border:none] [outline:none] bg-general-1-secondary-variant box-border flex flex-1 flex-row font-body-b4-merriweather-13 h-11 items-start justify-start max-w-full min-w-[276px] px-[15px] py-2.5 text-gray-300 text-sm w-full"
							placeholder="Your email address" type="text">
					<button class="[border:none] bg-general-1-primary cursor-pointer flex flex-row gap-[15px] items-start justify-start overflow-hidden px-[15px] py-0">
						<div class="bg-general-1-primary-variant h-11 ml-[-135px] relative shrink-0 w-[120px]"></div>
						<div class="box-border flex flex-col items-start justify-start pb-0 pt-[11px] px-0 w-[90px]">
							<div class="font-button-space-grotesk font-medium leading-[22px] relative self-stretch shrink-0 text-base text-center text-general-white"> Subscribe</div>
						</div>
					</button>
				</div>
				<div class="flex flex-row gap-2.5 items-start justify-start max-w-full text-smi"><input class="h-[21px] m-0 w-5" type="checkbox">
					<div class="flex flex-row gap-1 items-start justify-start max-w-[calc(100%_-_30px)] mq450:flex-wrap">
						<div class="inline-block leading-[22px] min-w-[96px] relative"> I have read the</div>
						<a class="[text-decoration:none] leading-[22px] relative text-general-white">Privacy Policy</a>
						<div class="leading-[22px] relative"> and agree to its terms.</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="flex flex-col gap-[25px] items-center justify-start max-w-full self-stretch"><img class="max-h-full max-w-full relative w-[1170px]" alt src="/wp-content/themes/fractal/fractal/build/rectangle-691.webp">
		<copyright class="box-border flex flex-row font-primary-paragraph-paragraph-5 items-center justify-center max-w-full pb-[26px] text-gray-300 text-left text-xs">
			<div class="box-border flex flex-row gap-0.5 items-center justify-center max-w-full py-0">
				<div class="inline-block leading-[22px] min-w-[45px] relative"> © 2024</div>
				<div class="leading-[22px] relative text-general-white"> Fractal</div>
				<div class="leading-[22px] relative"> | All rights reserved</div>
			</div>
		</copyright>
	</div>
</footer>

<div class="relative z-[11111111111111] stm-f" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="myModal" style="display: none;">
	<div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
	<div class="fixed inset-0 z-10 overflow-y-auto">
		<div class="flex items-start justify-center min-h-full p-4 pt-[40px] text-center sm:items-center sm:p-0">
			<div class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
				<div class="bg-general-1-primary ">
					<div class="sm:flex sm:items-start ">
						<div class="self-stretch flex flex-row items-start justify-start flex-wrap content-start
						gap-[62px] max-w-full text-gray-400 mq450:gap-[15px] mq925:gap-[31px]">

							<div class="flex-1 flex flex-col items-start justify-start box-border min-w-[403px] max-w-full mq450:min-w-[300px]">
								<div class="self-stretch flex flex-col items-start justify-start gap-[18px]">
									<div class="self-stretch flex flex-col items-center justify-center gap-5 mq1400:flex-wrap">
										<?php echo do_shortcode( '[contact-form-7 id="5cdfa0d" title="Contact_modal"]' ); ?>


									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<button type="button" class="absolute top-4 right-4 text-white bg-transparent focus:outline-none" onclick="closeModal()">
					<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
		</div>
	</div>
</div>
