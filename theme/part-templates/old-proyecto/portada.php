<?php

/**
 * This is a part template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<div id="portada" class="minh-100  user-select-none pe-none" style="background: url('<?php the_field('proyecto-portada'); ?>')no-repeat center/cover;">
    <div class="overlay minh-100">
        <div class="space-15"></div>
        <h1 class="blanco display-2 text-center py-3 lh-1"><?php the_title(); ?></h1>
        <div class="container">
            <div class="<?php if(wp_is_Mobile()) echo 'grilla-1';else echo 'grilla-2'?> gap-3">
                <div class="<?php if(wp_is_Mobile()) echo 'pb-4';?>">
                    <img class="rounded-4 <?php if(!wp_is_Mobile()) echo 'h-100';?>" src="<?php the_field('proyecto-portada-1'); ?>" alt="">
                </div>
                <div class="grilla-2 gap-3">
                    <div class="">
                        <img class="rounded-4 <?php if(!wp_is_Mobile()) echo 'h-100';?>" src="<?php the_field('proyecto-portada-2'); ?>" alt="">
                    </div>
                    <div class="">
                        <img class="rounded-4 <?php if(!wp_is_Mobile()) echo 'h-100';?>" src="<?php the_field('proyecto-portada-3'); ?>" alt="">
                    </div>
                    <div class="">
                        <img class="rounded-4 <?php if(!wp_is_Mobile()) echo 'h-100';?>" src="<?php the_field('proyecto-portada-4'); ?>" alt="">
                    </div>
                    <div class="">
                        <img class="rounded-4 <?php if(!wp_is_Mobile()) echo 'h-100';?>" src="<?php the_field('proyecto-portada-5'); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="<?php if(wp_is_Mobile()) echo 'grilla-2';else echo 'grilla-4'?> gap-3">
                <div class="flex-center">
                    <img class="bg-blanco border p-3" src="<?php the_field('proyecto-logo'); ?>" width="150">
                </div>
                <div class="flex-center flex-column <?php if(!wp_is_Mobile()) echo 'border-end border-light border-opacity-25';?>">
                    <h4 class="blanco">Ubicación</h4>
                    <h4 class="fw-normal blanco"><?php the_field('proyecto-ubicacion'); ?></h4>
                </div>
                <?php if (get_field('proyecto-precio')) : ?>
                    <div class="flex-center flex-column border-end border-light border-opacity-25">
                        <h4 class="blanco">Precio</h4>
                        <h4 class="fw-normal blanco">
                        <span class="blanco mini pe-1">Desde</span>$
                                <?php
                                $precio = get_field('proyecto-precio');
                                setlocale(LC_MONETARY, 'es_CO');
                                $precio = money_format('%!.0n', $precio);
                                echo $precio;
                                ?>
                        <?php if(!wp_is_Mobile()) { ?>
                        <span class="ps-1">COP</span>
                        <?php } ?>
                        </h4>
                    </div>
                <?php endif; ?>
                <div class="flex-center flex-column">
                        <h4 class="blanco">Área construida</h4>
                        <div class="blanco fw-normal flex-center">
                            <h4 class="desde fw-normal pe-2 blanco"><?php the_field('proyecto-area-desde'); ?> m²</h4>
                            <?php if (get_field('proyecto-area-hasta')) : ?>
                                <span class="blanco h4 mb-0"> - </span>
                            <h4 class="hasta fw-normal ps-2 blanco"> <?php the_field('proyecto-area-hasta'); ?> m²</h4>
                            <?php endif; ?>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Aqui va el texto de subsidio -->
<?php if (get_field('texto-subsidio')) : ?>
    <div class="bg-azul flex-center py-2 user-select-none">
        <img src="/wp-content/themes/understrap-child-main/assets/subsidio.svg" alt="" width="35">
        <span class="blanco lead fw-bold ps-2">
            <?php the_field('texto-subsidio'); ?>
        </span>
    </div>
<?php endif; ?>
<!-- Aqui va el logo del proyecto -->
