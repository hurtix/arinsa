<?php

/**
 * This is a part template
 *
 */

?>

<?php if(wp_is_Mobile()) { ?>
    <div id="portada" class="min-h-[75vh] select-none pt-20 relative" style="background: url('<?php the_field('proyecto-portada'); ?>')no-repeat center/auto;">
<?php } else { ?>
    <div id="portada" class="min-h-screen select-none pt-20 relative" style="background: url('<?php the_field('proyecto-portada'); ?>')no-repeat center/cover;">
<?php } ?>
    <div class="overlay">
        <div class="container mx-auto flex flex-col justify-end h-full pb-10">
            <div>
                <img class="bg-white border border-gray-200 p-3 w-[150px]" src="<?php the_field('proyecto-logo'); ?>">
            </div>
            <div class="flex justify-center items-center flex-col w-full mt-4 border border-gray-200">
                <div class="grid grid-cols-2 gap-0 md:grid md:grid-cols-4 md:gap-0 bg-white text-blue-500 w-full">
                    <?php if (get_field('proyecto-precio')) : ?>
                        <div class="flex justify-center items-center gap-1 p-4 border-r border-gray-200 flex-col md:flex-row">
                            <span class="text-xs tracking-wider uppercase font-bold">Desde</span>
                            <h3 class="mb-0 font-normal text-lg md:text-3xl">
                            <?php 
                            $precio = get_field('proyecto-precio');
                            echo '$'.number_format($precio, 0, ".", "."); 
                            ?>
                            </h3>
                        </div>
                    <?php endif; ?>
                    <div class="flex justify-center items-center gap-1 p-4 border-r border-gray-200 flex-col md:flex-row">
                        <span class="text-xs tracking-wider uppercase font-bold">Área desde</span>
                        <h3 class="mb-0 font-normal text-lg md:text-3xl"><?php the_field('proyecto-area-desde'); ?> m²</h3>
                    </div>
                    <div class="flex justify-center items-center flex-col">
                        <span class="text-xs tracking-wider uppercase font-bold">Dirección</span>
                        <h5 class="uppercase font-normal leading-none text-center text-lg md:text-xl"><?php the_field('direccion'); ?></h5>
                    </div>
                    <div class="flex justify-center items-center flex-col bg-yellow-500 py-4">
                        <span class="text-white text-xs tracking-wider uppercase font-bold">Estado</span>
                        <h5 class="mb-0 text-white uppercase tracking-wider text-center text-lg md:text-3xl font-bold"><?php the_field('estatus-proyecto'); ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>