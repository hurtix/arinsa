<?php

/**
 * Template Name: UI Legales
 *
 * Template for displaying a blank page.
 *
 */

get_header();
?>
<div class="w-full py-20">
	<div class="container mx-auto">
		<h3 class="uppercase tracking-wider font-bold text-4xl text-gray-600 my-10 text-center"><?php the_title(); ?></h3>
		<hr>
		<?php the_content(); ?>
	</div>
</div>
<?php get_footer();
