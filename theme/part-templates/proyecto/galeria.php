<?php

/**
 * This is a part template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>



<?php $galeria_urls = get_field('galeria'); ?>
<?php if ($galeria_urls) { ?>
  <div class="bg-wite py-10">
    <?php if (get_field('galeria-copy')) { ?>
      <h1 class="uppercase tracking-wider font-bold text-4xl text-gray-600 mb-10 text-center"><?php the_field('galeria-copy'); ?></h1>
    <?php } ?>
    <div class="swiper mySwiper-galeria px-0">
      <div class="swiper-wrapper">
        <?php foreach ($galeria_urls as $galeria_url): ?>
          <div class="swiper-slide">
            <img class="" src="<?php echo esc_url($galeria_url); ?>" />
          </div>
        <?php
        endforeach; ?>
      </div>
      <div class="swiper-button-next azul"></div>
      <div class="swiper-button-prev azul"></div>
    </div>
  </div>
<?php } ?>

<script>
  var swiper = new Swiper(".mySwiper-galeria", {
    autoHeight: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>