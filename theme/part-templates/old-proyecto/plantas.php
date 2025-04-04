<?php

/**
 * This is a part template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<!-- Plantas -->

    <div>
        <h3 class="text-center display-5">Plantas</h3>
        <?php
        if (have_rows('proyecto-plantas')) :
        ?>
            <?php if (get_field('proyecto-plantas')) : ?>
                <div id="plantas">
                    <ul class="list-unstyled m-0 p-0 <?php if(wp_is_Mobile()) echo 'grilla-1';else echo 'grilla-2'?> gap-4">
                        <?php while (have_rows('proyecto-plantas')) : the_row(); ?>
                            <li>
                                <div class="ribbon-wrapper">
                                    <div class="ribbon"><?php the_sub_field('titulo-planta'); ?></div>
                                </div>
                                <img class="imagen-planta" src="<?php the_sub_field('imagen-planta'); ?>">
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>

<!-- Fin plantas -->