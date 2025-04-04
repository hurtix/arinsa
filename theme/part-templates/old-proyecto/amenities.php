<?php

/**
 * This is a part template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<!-- Amenities -->

    <div class="w-100">
        <h3 class="text-center display-5">Áreas comunes</h3>
        <?php if (get_field('zonas-comunes')) : ?>
            <div class="grilla-4 gap-4">
                <?php while (have_rows('zonas-comunes')) : the_row(); ?>
                    <div class="boxAmenities pt-5 <?php if(wp_is_Mobile()) echo 'lh-1 text-center';?>">
                        <img class="icono-zc" src="<?php the_sub_field('icono-zc'); ?>" width="75">
                        <span class="nombre-zc <?php if(wp_is_Mobile()) echo 'small';else echo 'lead'?>"> <?php the_sub_field('nombre-zc'); ?></span>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>

<!-- Fin amenities -->