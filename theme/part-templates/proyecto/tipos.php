<?php

/**
 * This is a part template
 *
 */


?>

<!-- Tipos -->

<div>
    <h3 class="uppercase tracking-wider font-bold text-4xl text-yellow-500 mb-10 text-center">Tipología</h3>
    <div>
            <div class="w-full">
                <div class="swiper timeline-mini">
                    <div class="swiper-button-next text-[#003A70]"></div>
                    <?php if (have_rows('proyecto-tipos')) : ?>
                        <div class="swiper-wrapper">
                            <?php while (have_rows('proyecto-tipos')) : the_row(); ?>
                                <div class="swiper-slide">
                                    <span class="text-2xl <?php if (wp_is_Mobile()) echo 'py-3'; ?>"><?php the_sub_field('titulo-tipo'); ?></span>
                                </div>
                            <?php endwhile; ?>
                            <?php if ( get_field( 'planta-urbana' ) ) : ?>
                                <div class="swiper-slide">
                                    <span class="text-2xl <?php if (wp_is_Mobile()) echo 'py-3'; ?>">Planta Urbana</span>
                                </div>
                            <?php endif ?>
                        </div>
                    <?php endif; ?>
                    <div class="swiper-button-prev text-[#003A70]"></div>
                </div>
            </div>
    </div>
    <div class="py-5"></div>
    <div class="swiper timeline px-0">
        <?php if (have_rows('proyecto-tipos')) : ?>
            <div class="swiper-wrapper">
                <?php while (have_rows('proyecto-tipos')) : the_row(); ?>
                    <div class="swiper-slide bg-white <?php the_sub_field( 'acciones' ); ?>">
                    <?php if (get_sub_field('acciones')=='agotado') { ?>
                    <div class="flex justify-center items-center absolute w-full h-full"><span class="text-3xl tracking-widest border-3 border-red-500 text-red-500 px-3 font-bold">AGOTADO</span></div>
                    <?php } ?>
                    <?php if (get_sub_field('acciones')=='preventa') { ?>
                    <div class="flex justify-center items-center absolute"><span class="text-3xl tracking-widest border-3 border-green-500 text-green-500 px-3 font-bold">PREVENTA</span></div>
                    <?php } ?>
                        <div class="p-4 grid gap-4 grid-cols-1 md:grid-cols-[70%_30%]">
                            <img class="imagen-tipo w-full h-auto" src="<?php the_sub_field('imagen-tipo'); ?>">
                            <div class="caracteristicas p-4 border-l-0 md:border-l border-gray-200">
                                <ul class="list-none text-xl flex flex-col gap-4">
                                <?php if (get_sub_field('area-tipo')) { ?>
                                    <li>
                                    <h5 class="<?php if (wp_is_Mobile()) echo 'text-sm'; ?>"> <span class="font-bold pr-1">Área:</span><span class="font-normal"> <?php the_sub_field('area-tipo'); ?> m²</span></h5>
                                    </li>
                                <?php } ?>
                                <?php if (get_sub_field('precio-tipo')) { ?>
                                    <li>
                                    <h5>
                                        <span class="font-bold">Precio: </span>
                                        <span class="font-normal">
                                        <?php
                                        $precioTipo = get_sub_field('precio-tipo');
                                        setlocale(LC_MONETARY, 'es_CO');
                                        $precioTipo = money_format('%!.0n', $precioTipo);
                                        echo '$'.$precioTipo;
                                        ?>
                                        </span>
                                    </h5>
                                    </li>
                                <?php } ?>
                                <?php if (get_sub_field('habitaciones-tipo')) { ?>
                                    <li>
                                    <h5>
                                    <span class="font-bold pr-1">Habitaciones:</span><span class="font-normal"> <?php the_sub_field('habitaciones-tipo'); ?></span>
                                    </h5>
                                    </li>
                                <?php } ?>
                                <?php if (get_sub_field('banhos-tipo')) { ?>
                                    <li>
                                    <h5>
                                    <span class="font-bold pr-1">Baños:</span><span class="font-normal"> <?php the_sub_field('banhos-tipo'); ?></span>
                                    </h5>
                                    </li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                
                <?php if ( get_field( 'planta-urbana' ) ) : ?>
                    <div class="swiper-slide bg-white">
                    <img class="w-full h-auto" src="<?php the_field( 'planta-urbana' ); ?>" />
                    </div>
                <?php endif ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Fin Tipos -->


<script>
    var swiper = new Swiper(".timeline-mini", {
        breakpoints: {
            768: {
                slidesPerView: 4,
                spaceBetween: 0,
            }
        },
        loop: false,
        rewind: true,
        spaceBetween: 0,
        slidesPerView: 1,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".timeline", {
        autoHeight: true,
        loop: false,
        rewind: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });
</script>

<style>
    .timeline-mini .swiper-slide {
        text-align: center;
    }
    .swiper-slide.agotado .caracteristicas,
    .swiper-slide.agotado .imagen-tipo {
  opacity: .25;
  /* filter: grayscale(10); */
  /* z-index: 10; */
}
</style>