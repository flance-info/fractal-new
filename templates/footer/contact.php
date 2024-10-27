<?php

global $post;
$post_slug = $post->post_name;
// Check if it's the front page or a page with a specific slug
if (  $post_slug === 'contact1111' ) {


	?>

	<section class="self-stretch bg-general-1-secondary flex flex-row items-center justify-start
		 box-border relative
		max-w-full w-full text-center text-base text-general-white
		font-button-space-grotesk mq925:py-[65px]
		 mq925:box-border  mq1400:box-border">
		<div class="ml-auto bg-general-1-primary self-stretch flex-1"></div>
		<div class="max-w-[1170px] w-full bg-general-1-primary py-[100px]">


			<?php // echo do_shortcode( '[contact-form-7 id="c84e357" title="Contact footer"]' ); ?>

		</div>
		<div class="ml-auto flex-1"></div>
	</section>

	<?php

}
?>