<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arinsa
 */

?>



<footer class="bg-blue-500 text-white" id="colophon">
    <div class="container mx-auto px-0 py-5">
        <div class="grid grid-cols-1 md:grid-cols-[25%_30%_20%_25%] gap-4">
            <?php if (!wp_is_Mobile()) { ?>
                <div class="flex flex-col items-center justify-center">
                    <img class="grayscale w-[150px]" src="https://constructoraarinsa.com/wp-content/uploads/2024/04/LOGO-ARINSA-curvas-04.png" alt="">
                    <div class="flex items-center justify-center gap-3">
                        <span class="text-white text-sm">Afiliados a</span>
                        <img src="https://constructoraarinsa.com/wp-content/uploads/2024/01/camacol_blanco.png" alt="" class="w-[65px]">
                    </div>
                </div>
                <div class="flex flex-col items-start">
                    <h5 class="text-yellow-500 uppercase tracking-wider select-none font-bold text-xl my-4">Contáctanos</h5>
                    <p><?php the_field('footer-direccion', 'option'); ?></p>
                </div>
            <?php } ?>
            
            <div class="flex flex-col items-start px-4">
                <h5 class="text-yellow-500 uppercase tracking-wider select-none font-bold text-xl my-4">Legal</h5>
                <ul class="list-none m-0 p-0">
                    <?php get_legales(); ?>
                </ul>
            </div>
            
            <div class="flex flex-col items-start px-4">
                <h5 class="text-yellow-500 uppercase tracking-wider select-none font-bold text-xl my-4">Síguenos</h5>
                <ul class="list-none m-0 p-0">
                    <li class="mb-2">
                        <a href="https://www.facebook.com/arinsapopayan" target="_blank" class="text-white hover:text-yellow-600 transition-colors">
                            <i class="bi bi-facebook"></i> Facebook
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="https://www.instagram.com/arinsa_popayan/" target="_blank" class="text-white hover:text-yellow-600 transition-colors">
                            <i class="bi bi-instagram"></i> Instagram
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="https://www.youtube.com/@constructoraarinsasas" target="_blank" class="text-white hover:text-yellow-600 transition-colors">
                            <i class="bi bi-youtube"></i> YouTube
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>