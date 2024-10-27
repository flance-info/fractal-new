<div class="header-placeholder hidden h-[90px] mq950:block "></div>
<header class="box-border flex flex-row gap-[275px] items-start justify-center max-w-full mb-[-150px] mq1400:gap-[137px]
 mq450:gap-[34px] mq925:gap-[69px] px-5 py-[39px] self-stretch z-[1] mq925:justify-between mq925:px-[25px]">

	<div class="flex flex-row items-center justify-start">
		<?php get_template_part( 'templates/header/parts/logo' ); ?>
	</div>

	<?php
	$menu_name = 'ms-lms-starter-theme-main-menu'; // The theme location you specified
	$locations = get_nav_menu_locations();
	?>
	<div class="box-border flex flex-col items-start justify-start max-w-full mq925:w-0 pb-0 pt-2 px-0 w-[725px]">
		<?php
		if ( isset( $locations[ $menu_name ] ) ) {
			$menu_id    = $locations[ $menu_name ];
			$menu_items = wp_get_nav_menu_items( $menu_id );
			if ( $menu_items ) {
				// Create an array to hold the menu items by their parent IDs
				$menu_item_parents = [];
				foreach ( $menu_items as $menu_item ) {
					// Group menu items by their parent IDs
					$menu_item_parents[ $menu_item->menu_item_parent ][] = $menu_item;
				}
				?>

				<nav class="flex flex-row font-button-space-grotesk gap-5 items-start justify-between m-0 mq925:hidden self-stretch text-base text-general-white text-right">
					<?php
					$current_url = home_url( add_query_arg( null, null ) );
					foreach ( $menu_item_parents[0] as $menu_item ) { // Start with the top-level items
						$title        = esc_html( $menu_item->title );
						$url          = esc_url( $menu_item->url );
						$has_children = isset( $menu_item_parents[ $menu_item->ID ] );
						 $is_current = ( $url === $current_url );

						?>

						<div class="flex flex-col items-start justify-start pb-0 pt-3 px-0 <?php if ( $has_children ): ?> group <?php endif; ?> ">
							<a class="hover:text-general-1-primary-variant [text-decoration:none] leading-[22px] relative text-[inherit] tracking-[0.25em] uppercase  <?php echo $is_current ? 'active' : ''; ?>" href="<?php echo $url ?>">
								<?php echo $title ?>
								<?php if ( $has_children ): ?>
									<img class="inline-block stm-logo-white  h-[18px] w-[18px] relative overflow-hidden shrink-0 min-h-[18px]
transform transition-transform duration-300 group-hover:rotate-180" src="/wp-content/themes/business-setup/web/public/arrowdownsline1.svg" alt="Submenu Icon">

									<img class="inline-block stm-logo-black h-[18px] w-[18px] relative overflow-hidden shrink-0 min-h-[18px]
transform transition-transform duration-300 group-hover:rotate-180" src="/wp-content/themes/business-setup/web/public/arrowdownsline.svg" alt="Submenu Icon">

								<?php endif ?>
							</a>
							<?php if ( $has_children ): ?>
								<div class="absolute right-[0px]  stm-dropdown   hidden mt-2 bg-general-1-primary shadow-lg rounded-md w-48 group-hover:block z-10 w-full text-left min-h-[100px] top-[8px] er-back-tr">
									<ul class="py-2">
										<?php foreach ( $menu_item_parents[ $menu_item->ID ] as $child ): ?>
											<li>
												<a href="<?php echo esc_url( $child->url ); ?>" class="block px-4 py-2  hover:bg-general-white hover:text-general-1-primary">
													<?php echo esc_html( $child->title ); ?>
												</a>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
							<?php endif; ?>
						</div>
						<?php
					}
					?>
					<button onclick="openModal()" class="[border:none] bg-general-1-primary cursor-pointer flex flex-row gap-[15px] items-start justify-start overflow-hidden px-[15px] py-0 mbtn-prm ">
						<div class="bg-general-1-primary-variant h-[46px] ml-[-215px] relative shrink-0 w-[200px]"></div>
						<div class="box-border flex flex-col items-start justify-start pb-0 pt-3 px-0 w-[170px]"><a
									class="[text-decoration:none] font-button-space-grotesk font-medium leading-[22px] relative self-stretch shrink-0 text-base text-center text-general-white">Free consultation</a></div>
					</button>

				</nav>

				<?php
			}
		}
		?>

		<?php
		$menu_args = array(
				'depth'          => 3,
				'container'      => false,
				'items_wrap'     => '%3$s',
				'fallback_cb'    => false,
				'theme_location' => 'ms-lms-starter-theme-main-menu',
		);
		?>
	</div>
	<div class="navigation hidden mq925:flex">
		<div class="navigation-menu">
			<ul class="starter-menu menu ">
				<?php wp_nav_menu( $menu_args ); ?>
			</ul>

			<div class="mobile-switcher">
				<span></span> <span></span> <span></span>
			</div>
		</div>
	</div>


</header>


