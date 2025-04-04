<?php

/**
 * This is a part template
 *
 */

?>

<!-- Plantas -->

 <div>
    <h3 class="text-center text-5xl uppercase tracking-widest underline mb-5">Plantas</h3>
    <?php
    if (have_rows('proyecto-plantas')) :
    ?>
        <?php if (get_field('proyecto-plantas')) : ?>
            <div id="plantas">
                <ul class="list-none m-0 p-0 grid grid-cols-1 md:grid-cols-3 gap-4">
                    <?php while (have_rows('proyecto-plantas')) : the_row(); ?>
                        <li class="bg-white shadow-lg">
                            <img class="w-full h-auto object-cover" src="<?php the_sub_field('imagen-planta'); ?>">
                            <hr class="my-0 invisible">
                            <div class="p-3">
                                <h4 class="text-center uppercase tracking-wider"><?php the_sub_field('titulo-planta'); ?></h4>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</div>

<!-- Fin plantas -->