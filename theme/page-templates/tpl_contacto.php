<?php

/**
 * Template Name: UI Contacto
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 */

get_header(); ?>
<?php get_template_part('part-templates/encabezado'); ?>

<div class="wrapper py-0" id="page-wrapper">
	<?php get_template_part('part-templates/asesores'); ?>
</div>

<div class="w-full bg-gray-500 py-20">
    <div class="container mx-auto">
        <div class="w-full">
            <div class="w-full">
                <h2 class="text-blue-500 text-center text-4xl pb-10 uppercase tracking-wider underline font-bold">Directorio de colaboradores</h2>
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <?php while (have_rows('rep-directorio')) : the_row(); ?>
                            <ul class="list-none bg-white border border-gray-200 flex flex-col justify-center p-8 mb-0">
                                <li class="font-bold text-base uppercase mb-0"><?php the_sub_field('directorio-nombre') ?></li>
                                <li class="text-sm font-bold"><?php the_sub_field('directorio-cargo') ?></li>
                                <hr class="my-1 text-gray-200">
                                <li class="text-xs"><?php the_sub_field('directorio-correo') ?></li>
                                <li class="text-sm"><i class="bi bi-phone-vibrate-fill text-yellow-500"></i> <?php the_sub_field('directorio-telefono') ?> <?php if (get_sub_field('directorio-extension')) : ?> Ext: <?php the_sub_field('directorio-extension') ?><?php endif; ?></li>
                            </ul>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
