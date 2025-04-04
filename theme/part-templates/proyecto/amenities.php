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
<hr class="mb-20">
<div class="<?php echo wp_is_Mobile() ? 'grid grid-cols-1 text-sm' : 'grid grid-cols-2'?> gap-20">
    <div class="w-full">
        <h3 class="text-4xl font-bold mb-4 text-blue-500">Zonas Privadas</h3>
        <?php if (get_field('zonas-privadas')) { ?>
            <div class="grid grid-cols-3 gap-2">
                <?php while (have_rows('zonas-privadas')) { the_row(); ?>
                    <div class="flex items-center text-left gap-1">
                        <?php if(get_sub_field('icono-zc')) { ?>
                            <img class="w-[35px]" src="<?php the_sub_field('icono-zc'); ?>">
                        <?php } ?>
                        <span class="<?php echo !wp_is_Mobile() ? 'pl-1' : ''?> leading-none text-sm"><?php the_sub_field('nombre-zc'); ?></span>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
    <div class="w-full">
        <h3 class="text-4xl font-bold mb-4 text-blue-500">Zonas Comunes</h3>
        <?php if (get_field('zonas-comunes')) { ?> 
            <div class="grid grid-cols-3 gap-2">
                <?php while (have_rows('zonas-comunes')) { the_row(); ?>
                    <div class="flex items-center text-left gap-1">
                        <?php if(get_sub_field('icono-zc')) { ?>
                            <img class="w-[35px]" src="<?php the_sub_field('icono-zc'); ?>">
                        <?php } ?>
                        <span class="<?php echo !wp_is_Mobile() ? 'pl-1' : ''?> leading-none text-sm"><?php the_sub_field('nombre-zc'); ?></span>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>
<!-- Fin amenities -->