<?php

/**
 * This is a part template
 *
 */

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js" integrity="sha512-Ixzuzfxv1EqafeQlTCufWfaC6ful6WFqIz4G+dWvK0beHw0NVJwvCKSgafpy5gwNqKmgUfIBraVwkKI+Cz0SEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="select-none bg-gray-100">
    <div class="py-10"></div>
    <div class="container mx-auto">
    <h3 class="uppercase tracking-wider font-bold text-4xl text-yellow-500 mb-10 text-center">Avances de obra</h3>
        <?php $y = 0; ?>
        <div class="swiper mySwiper-avances <?php if (wp_is_Mobile()) echo 'p-0'; ?>">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="w-[100px] grayscale mt-[5vh] shadow-lg bg-white rounded-full" src="<?php the_field('proyecto-logo'); ?>" alt="" />
                    <span class="font-bold">Inicio de Obra</span>
                    <span><?php the_field('inicio-obra-mes'); ?> <?php the_field('inicio-obra-anho'); ?></span>
                </div>
                <?php while (have_rows('rep-avances-obra')) : the_row(); ?>
                    <?php $avances_galeria_images = get_sub_field('avances-galeria'); ?>

                    <?php if ($avances_galeria_images) :  ?>
                        <?php
                        $mes = get_sub_field('avances-mes');
                        $anho = get_sub_field('avances-mes-anho');
                        ?>

                        <div class="swiper-slide bg-white py-2">
                            <?php foreach ($avances_galeria_images as $avances_galeria_image) : ?>
                                <a data-lightbox="album-<?php echo $y; ?>" data-title="Avance de Obra - <?php echo $mes . ' ' . $anho; ?>" href="<?php echo esc_url($avances_galeria_image['url']); ?>">
                                    <img class="rounded-none" src="<?php echo esc_url($avances_galeria_image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($avances_galeria_image['alt']); ?>" />
                                </a>
                            <?php endforeach; ?>
                            <span><?php echo $mes . ' ' . $anho; ?></span>
                        </div>
                    <?php endif; ?>

                    <?php $y++; ?>
                <?php endwhile; ?>
                <?php if (get_field('fin-obra-anho') || get_field('fin-obra-mes')) : ?>
                    <div class="swiper-slide">
                <?php else : ?>
                    <div class="swiper-slide invisible">
                <?php endif; ?>
                    <img class="w-[100px] mt-[5vh] shadow-lg bg-white rounded-full" src="<?php the_field('proyecto-logo'); ?>" alt="" />
                    <span class="font-bold">Fin de Obra</span>
                    <span><?php the_field('fin-obra-mes'); ?> <?php the_field('fin-obra-anho'); ?></span>
                    </div>
                </div>
                <div class="<?php echo wp_is_Mobile() ? 'py-2' : 'py-5' ?>"></div>
                <div class="swiper-scrollbar"></div>
        </div>
    </div>
    <div class="py-20"></div>
</div>

<script>
                document.addEventListener('DOMContentLoaded', function() {
                    lightbox.option({
                        'albumLabel': 'Foto %1 de %2',
                        'disableScrolling': true
                    });
                });
            </script>
            <script>
                var swiper = new Swiper(".mySwiper-avances", {
                    slidesPerView: 2,
                    spaceBetween: 10,
                    grabCursor: true,
                    breakpoints: {
                        768: {
                            slidesPerView: 6,
                            spaceBetween: 50,
                        },
                    },
                    scrollbar: {
                        el: ".swiper-scrollbar",
                        hide: true,
                    },
                });
            </script>
            <style>
                .swiper {
                    width: 100%;
                    height: 100%;
                    padding: 0 1.3vh;
                }

                .swiper-slide {
                    /* Center slide text vertically */
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: -webkit-flex;
                    display: flex;
                    -webkit-box-pack: center;
                    -ms-flex-pack: center;
                    -webkit-justify-content: center;
                    justify-content: center;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    -webkit-align-items: center;
                    align-items: center;
                    flex-direction: column;
                }

                .swiper-slide img {
                    display: block;
                    width: 100%;
                }

                .mySwiper-avances .swiper-slide a:not(:first-child) {
                    display: none;
                }
            </style>