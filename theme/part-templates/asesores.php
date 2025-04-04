<?php

/**
 * This is a part template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<!-- Asesores autorizados -->
<div class="w-full py-20 bg-white">
    <h2 class="text-blue-500 text-center text-4xl pb-5 uppercase tracking-wider underline font-bold">Asesores autorizados</h2>
    <div class="w-full">
        <div class="container mx-auto">
            <div>
                <?php
                $posts = get_posts(array(
                    'posts_per_page'    => -1,
                    'post_type'         => 'asesor',
                    'orderby'           => 'rand',
                ));
                if ($posts) { ?>
                    <ul class="list-none m-0 p-0 grid grid-cols-1 md:grid-cols-2 gap-2 md:grid md:grid-cols-4 md:gap-4 select-none">
                        <?php foreach ($posts as $post) :
                            setup_postdata($post); ?>
                            <li class="transition-all duration-300 ease-in-out hover:scale-102">
                                <?php if (get_field('asesor-foto')) { ?>
                                    <img class="pointer-events-none" src="<?php the_field('asesor-foto'); ?>">
                                <?php } else { ?>
                                    <img class="pointer-events-none" src="/wp-content/themes/understrap-child-main/assets/no-pic.png" alt="">
                                <?php } ?>
                                <div class="shadow border border-gray-200 bg-white rounded-b">
                                    <h5 class="text-center text-blue-500 pt-3 mb-0 uppercase font-bold text-lg"><?php the_title(); ?></h5>
                                    <p class="text-sm mb-0 text-center"><?php the_field('cargo'); ?></p>
                                    <hr class="w-3/4 mx-auto text-gray-200 my-2">
                                    <p class="text-xs mb-0 text-center px-2"><?php the_field('email'); ?></p>
                                    <p class="text-sm text-center"><?php the_field('telefono'); ?></p>
                                    <h6 class="text-center font-normal">Punto de venta</h6>
                                    <p class="text-xs leading-tight text-center min-h-[25px]"><?php the_field('punto_venta'); ?></p>
                                    <div class="py-1"></div>
                                    <a class="flex justify-center items-center bg-[#00B147] hover:bg-[#008B21] text-white hover:text-yellow-500 text-center p-2 rounded-b transition-all duration-300"
                                        href="<?php the_field('whatsapp'); ?>"
                                        target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                        </svg> <span class="ps-1">Escribir un mensaje</span>
                                    </a>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php wp_reset_postdata(); ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- Fin Asesores autorizados -->