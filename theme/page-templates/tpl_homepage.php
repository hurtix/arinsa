<?php

/**
 * Template Name: UI Homepage
 */

get_header(); ?>

<div class="w-full relative">
	<?php if (have_rows('repeater-home-slider')) { ?>
		<?php if (wp_is_Mobile()) { ?>
			<section id="slider">
				<div class="swiper mySwiper-slide bg-white">
					<div class="swiper-wrapper">
						<?php while (have_rows('repeater-home-slider')) : the_row(); ?>
							<?php $enlace_item_slider = get_sub_field('enlace_item_slider'); ?>
							<div class="swiper-slide relative">
								<?php if ($enlace_item_slider) { ?>
									<a href="<?php echo esc_url($enlace_item_slider); ?>">
									<?php } ?>
									<img src="<?php the_sub_field('home-imagen_mobile'); ?>" alt="" class="w-full">
									<?php if ($enlace_item_slider) { ?>
									</a>
								<?php } ?>
							</div>
						<?php endwhile; ?>
					</div>
					<div class="swiper-button-prev text-white"></div>
					<div class="swiper-button-next text-white"></div>
				</div>
			</section>
		<?php } else { ?>
			<section id="slider">
				<div class="swiper mySwiper-slide bg-white">
					<div class="swiper-wrapper">
						<?php while (have_rows('repeater-home-slider')) : the_row(); ?>
							<?php $enlace_item_slider = get_sub_field('enlace_item_slider'); ?>
							<div class="swiper-slide position-relative">
								<?php if ($enlace_item_slider) { ?>
									<a href="<?php echo esc_url($enlace_item_slider); ?>">
									<?php } ?>
									<img src="<?php the_sub_field('home-imagen'); ?>" alt="">
									<?php if ($enlace_item_slider) { ?>
									</a>
								<?php } ?>
							</div>
						<?php endwhile; ?>
					</div>

					<div class="swiper-button-prev blanco"></div>
					<div class="swiper-button-next blanco"></div>
				</div>
			</section>
		<?php } ?>
	<?php } ?>


	<div class="w-full text-center leading-none relative">
		<h1 class="bg-yellow-500 text-white text-5xl font-bold uppercase px-15 md:px-5 py-3 leading-none mb-0">Proyectos en venta</h1>
	</div>

	<section class="py-20">
		<div class="container mx-auto">
			<div class="destacados">
				<article>
					<?php
					$post_id = get_field('proyecto_1');
					set_query_var('proyecto', $post_id); ?>
					<h1 class="text-center py-10 uppercase">
						<span class="bg-blue-500 text-white px-4 text-3xl md:text-5xl font-bold tracking-wider"><?php the_field('etapa_comercial', $post_id); ?></span>
					</h1>
					<?php get_template_part('/part-templates/destacados');
					wp_reset_query();
					?>
				</article>

				<article>
					<?php
					$post_id = get_field('proyecto_2');
					set_query_var('proyecto', $post_id); ?>
					<h1 class="text-center py-10 uppercase">
						<span class="bg-blue-500 text-white px-4 text-3xl md:text-5xl font-bold tracking-wider"><?php the_field('etapa_comercial', $post_id); ?></span>
					</h1>
					<?php get_template_part('/part-templates/destacados');
					wp_reset_query();
					?>
				</article>

				<article>
					<?php
					$post_id = get_field('proyecto_3');
					set_query_var('proyecto', $post_id); ?>
					<h1 class="text-center py-10 uppercase">
						<span class="bg-blue-500 text-white px-4 text-3xl md:text-5xl font-bold tracking-wider"><?php the_field('etapa_comercial', $post_id); ?></span>
					</h1>
					<?php get_template_part('/part-templates/destacados');
					wp_reset_query();
					?>
				</article>

			</div>
	</section>

	<section>
		<div class="bg-gray-100 relative">
			<?php $enlace_banner = get_field('enlace_banner'); ?>
			<?php if ($enlace_banner) { ?>
				<a class="block" href="<?php echo esc_url($enlace_banner); ?>">
				<?php } ?>
				<?php if (wp_is_Mobile()) { ?>
					<img class="block mx-auto" src="<?php the_field('banner_mobile'); ?>" alt="">
				<?php } else { ?>
					<img class="block mx-auto" src="<?php the_field('banner_desktop'); ?>" alt="">
				<?php } ?>
				<?php if ($enlace_banner) { ?>
				</a>
			<?php } ?>
			<div class="mb-10 absolute bottom-0 flex justify-center items-center w-full">
            <button class="bg-blue-500 hover:bg-transparent border border-blue-500 text-white hover:text-blue-500 px-4 py-2 rounded-0 hover:bg-opacity-90 transition-all uppercase tracking-wider text-lg" onClick="window.location.href ='<?php echo $enlace_banner; ?>';">Refiere aquí</button>
        </div>
		</div>
	</section>

</div>

<script>
	var swiper = new Swiper(".mySwiper-slide", {
		loop: true,
		slidesPerView: 1,
		spaceBetween: 0,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		autoplay: {
			delay: 8000,
			disableOnInteraction: false,
		},
	});
</script>

<?php get_footer(); ?>