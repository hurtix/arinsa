<?php

/**
 * Template Name: UI Quienes somos
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 */

get_header(); ?>

<?php get_template_part('part-templates/encabezado'); ?>

    <div class="w-full bg-white">
        <div class="container mx-auto py-20">
            <div class="grid-cols-1 md:grid-cols-2 gap-5 grid">
                <div class="aspect-video youtube">
                    <?php the_field('video_intro'); ?>
                </div>
                <div>
                    <h2 class="underline uppercase tracking-wider font-bold text-4xl text-yellow-500 mb-4"><?php the_field('titulo_intro'); ?></h2>
                    <p class="mb-0 text-justify text-lg"><?php the_field('texto-intro'); ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full">
        <div class="py-20">
            <div class="bg-gray-500 min-h-[50vh] py-5 flex items-center justify-center flex-col">
                <div class="container mx-auto">
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <h1 class="uppercase tracking-wider font-bold text-4xl text-yellow-500 mb-4">¿Quíenes somos?</h1>
                            <?php if (get_field('texto-quienes-somos')) : ?>
                                <p class="text-justify text-lg">
                                    <?php the_field('texto-quienes-somos'); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div>
                            <div class="swiper mySwiper-carrusel">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="https://constructoraarinsa.com/wp-content/uploads/2024/04/quienes_somos_v1.jpg" alt=""></div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto pb-20">
            <div class="grid-cols-1 md:grid-cols-2 gap-5 grid">
                <div class="py-5 flex items-center justify-center flex-col">
                    <img src="https://constructoraarinsa.com/wp-content/uploads/2024/04/mision_v1.jpg" alt="">
                </div>
                <div class="py-5 flex items-center justify-center flex-col">
                    <h1 class="uppercase tracking-wider font-bold text-4xl text-yellow-500 mb-4">Misión</h1>
                    <?php if (get_field('texto-vision')) : ?>
                        <p class="text-justify text-lg">
                            <?php the_field('texto-mision'); ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="py-5 flex items-center justify-center flex-col">
                    <h1 class="uppercase tracking-wider font-bold text-4xl text-yellow-500 mb-4">Visión</h1>
                    <?php if (get_field('texto-mision')) : ?>
                        <p class="text-justify <?php if(!wp_is_Mobile()) echo 'text-lg'; ?>">
                            <?php the_field('texto-vision'); ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="py-5 flex items-center justify-center flex-col">
                    <img src="https://constructoraarinsa.com/wp-content/uploads/2024/04/vision_v1.jpg" alt="">
                </div>
            </div>
        </div>
	</div>

        <div class="w-full">
            <div class="bg-white min-h-[50vh] py-5 flex items-center justify-center flex-col py-20">
                <div class="container mx-auto">
                    <h1 class="uppercase tracking-wider font-bold text-4xl text-yellow-500 mb-4 text-center">Valores Corporativos</h1>
                    <div class="swiper mySwiper-wheel">
                        <div class="swiper-wrapper">
                            <?php for($i = 1; $i <= 6; $i++): ?>
                            <div class="swiper-slide swiper-no-swiping">
                                <img class="w-full md:w-3/4 pointer-events-none mx-auto" 
                                     src="https://constructoraarinsa.com/wp-content/themes/understrap-child-main/assets/wheel_v2_<?php echo $i; ?>.png" 
                                     alt="">
                            </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    

<script>
    var swiper = new Swiper(".mySwiper-wheel", {
		// loop: true,
		effect: "fade",
		slidesPerView: 1,
		spaceBetween: 0,
		// pagination: {
		// 	el: ".swiper-pagination",
		// 	clickable: true,
      	// },
		autoplay: {
			delay: 1500,
			disableOnInteraction: false,
      	},
    });
	var swiper = new Swiper(".mySwiper-carrusel", {
		// loop: true,
		// effect: "fade",
		slidesPerView: 1,
		spaceBetween: 0,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		// autoplay: {
		// 	delay: 1500,
		// 	disableOnInteraction: false,
      	// },
    });
  </script>

<?php
get_footer();
