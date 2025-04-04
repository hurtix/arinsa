<?php

/**
 * The template for displaying all single posts
 *
 */


get_header(); ?>
<div class="relative select-none" id="single-wrapper">
    <div class="w-full">
        <?php get_template_part('part-templates/proyecto/portada') ?>

        <!-- Cuerpo del proyecto -->
        <div>
            <?php if (!wp_is_Mobile()) { ?>
                <div id="proyecto--bar" class="bg-yellow-500">
                    <div class="flex justify-center items-center text-xl border-b border-gray-200 py-4" id="proyecto--barTab">
                        <button type="button"
                            class="inline-block p-4 text-white hover:bg-black/40 transition-colors uppercase tracking-wider"
                            id="presentacion-tab"
                            data-tabs-target="#presentacion"
                            role="tab"
                            aria-controls="presentacion"
                            aria-selected="true">
                            Presentación
                        </button>

                        <?php if (get_field('brochure')) { ?>
                            <a href="<?php the_field('brochure'); ?>"
                                class="inline-block p-4 text-white hover:bg-black/40 transition-colors uppercase tracking-wider"
                                target="_blank">
                                Brochure
                            </a>
                        <?php } ?>

                        <button type="button"
                            class="inline-block p-4 text-white hover:bg-black/40 transition-colors uppercase tracking-wider"
                            id="ubicacion-tab"
                            data-tabs-target="#ubicacion"
                            role="tab"
                            aria-controls="ubicacion"
                            aria-selected="false">
                            Ubicación
                        </button>

                        <button type="button"
                            class="inline-block p-4 text-white hover:bg-black/40 transition-colors uppercase tracking-wider"
                            id="videos-tab"
                            data-tabs-target="#videos"
                            role="tab"
                            aria-controls="videos"
                            aria-selected="false">
                            Videos
                        </button>

                        <button type="button"
                            class="inline-block p-4 text-white hover:bg-black/40 transition-colors uppercase tracking-wider"
                            id="imagenes-tab"
                            data-tabs-target="#imagenes"
                            role="tab"
                            aria-controls="imagenes"
                            aria-selected="false">
                            Imágenes
                        </button>

                        <?php if (get_field('tour-360')) { ?>
                            <a href="<?php the_field('tour-360'); ?>"
                                class="inline-block p-4 text-white hover:bg-black/40 transition-colors uppercase tracking-wider"
                                target="_blank">
                                Maqueta
                            </a>
                        <?php } ?>

                        <a href="/contacto-inversiones-inmobiliarias"
                            class="inline-block p-4 text-white hover:bg-black/40 transition-colors uppercase tracking-wider"
                            target="_blank">
                            Hablar con asesor
                        </a>

                        <?php if (have_rows('rep-avances-obra')) { ?>
                            <button type="button"
                                class="inline-block p-4 text-white hover:bg-black/40 transition-colors uppercase tracking-wider"
                                id="avances-tab"
                                data-tabs-target="#avances"
                                role="tab"
                                aria-controls="avances"
                                aria-selected="false">
                                Avances de obra
                            </button>
                        <?php } ?>
                    </div>
                </div>
            <?php } else { ?>
                <!-- Mobile swiper version remains unchanged -->
            <?php } ?>

            <div id="myTabContent">
                <div class="hidden"
                    id="presentacion"
                    role="tabpanel"
                    aria-labelledby="presentacion-tab">

                    <div class="w-full py-20 bg-white">
                        <div class="container mx-auto py-10">
                            <div class="max-w-7xl mx-auto">
                                <h1 class="font-bold text-center underline uppercase tracking-widest text-5xl text-blue-500 leading-tight"><?php the_field('proyecto-copy'); ?></h1>
                                <div class="grid <?php echo wp_is_Mobile() ? 'grid-cols-1' : 'grid-cols-2'; ?> gap-4 mt-20">
                                    <div>
                                        <span class="block text-sm tracking-wider uppercase">Proyecto Inmobiliario</span>
                                        <h1 class="uppercase tracking-wider font-bold text-4xl text-yellow-500 mb-4"><?php the_title(); ?></h1>
                                        <div class="text-lg leading-relaxed"><?php the_field('proyecto-descripcion'); ?></div>
                                    </div>
                                    <?php if (get_field('proyecto-video-embed')) { ?>
                                        <div>
                                            <?php get_template_part('part-templates/proyecto/video') ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if (get_field('zonas-comunes')) { ?>
                        <div class="w-full bg-white pb-20">
                            <div class="container mx-auto">
                                <div class="max-w-7xl mx-auto">
                                    <?php get_template_part('part-templates/proyecto/amenities') ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>


                <div class="tab-pane fade" id="ubicacion" role="tabpanel" aria-labelledby="ubicacion-tab" tabindex="0">
                        <?php if (get_field('mapa_showhide') == 1) { ?>
                            <div id="location" class="w-full m-0">
                                <div class="w-full">
                                    <?php get_template_part('part-templates/proyecto/location') ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                <div class="hidden"
                    id="videos"
                    role="tabpanel"
                    aria-labelledby="videos-tab">
                    <?php if (get_field('proyecto-video-embed')) { ?>
                        <div class="container mx-auto youtube my-10">
                            <?php get_template_part('part-templates/proyecto/video') ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="hidden"
                    id="imagenes"
                    role="tabpanel"
                    aria-labelledby="imagenes-tab">
                    <?php if (get_field('proyecto-plantas')) : ?>
                        <div class="w-full py-20">
                                <div class="container mx-auto">
                                    <?php get_template_part('part-templates/proyecto/plantas') ?>
                                </div>
                        </div>
                    <?php endif; ?>

                    <?php if (get_field('proyecto-tipos')) : ?>
                        <div class="w-full bg-gray-100">
                            <div class="py-10"></div>
                                <div class="container mx-auto">
                                    <?php get_template_part('part-templates/proyecto/tipos') ?>
                                </div>
                            <div class="py-10"></div>
                        </div>
                    <?php endif; ?>

                    <?php if (get_field('galeria')) : ?>
                        <?php if (wp_is_Mobile()) { ?>
                            <div class="w-full">
                                <?php get_template_part('part-templates/proyecto/galeria') ?>
                            </div>
                        <?php } else { ?>
                            <div class="w-full">
                                <div class="<?php echo wp_is_Mobile() ? 'pb-20' : '' ?>">
                                    <div class="container mx-auto bg-white">
                                            <?php get_template_part('part-templates/proyecto/galeria') ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php endif; ?>

                </div>
                <div class="hidden"
                    id="avances"
                    role="tabpanel"
                    aria-labelledby="avances-tab">

                    <?php if (have_rows('rep-avances-obra')) { ?>
                        <div id="avances-obra" class="w-full bg-gray-100">
                            <div class="w-full">
                                    <?php get_template_part('part-templates/proyecto/avances') ?>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="py-8 bg-[#00B147]">
        <div class="inline-block text-center w-full md:flex md:justify-center md:items-center md:gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-headset scale-[3] " viewBox="0 0 16 16">
                <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5" />
            </svg>
            <h3 class="text-white mb-0 text-4xl font-bold">Hablar con un asesor</h3>
            <button class="bg-transparent hover:bg-white border border-white text-white hover:text-[#00B147] px-4 py-2 rounded-0 hover:bg-opacity-90 transition-all uppercase tracking-wider text-lg" onclick="window.open('/contactenos', '_blank')">Click aquí</button>
        </div>
    </div>
</section>
<section>
    <div class="bg-gray-100 relative">
        <?php $enlace_banner = get_field('enlace_banner', 698); ?>
        <?php if ($enlace_banner) { ?>
            <a class="block" href="<?php echo esc_url($enlace_banner); ?>">
            <?php } ?>
            <?php if (wp_is_Mobile()) { ?>
                <img class="block mx-auto border-t" src="<?php the_field('banner_mobile', 698); ?>" alt="">
            <?php } else { ?>
                <img class="block mx-auto border-t" src="<?php the_field('banner_desktop', 698); ?>" alt="">
            <?php } ?>
            <?php if ($enlace_banner) { ?>
            </a>
        <?php } ?>
        <div class="mb-10 absolute bottom-0 flex justify-center items-center w-full">
            <button class="bg-transparent hover:bg-blue-500 border border-blue-500 text-blue-500 hover:text-white px-4 py-2 rounded-0 hover:bg-opacity-90 transition-all uppercase tracking-wider text-lg" onClick="window.location.href ='<?php echo $enlace_banner; ?>';">Refiere aquí</button>
        </div>
    </div>
</section>

<script>
    var swiper = new Swiper(".mySwiper--tabs", {
        slidesPerView: 2,
        spaceBetween: 30,
        centeredSlides: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>

<style>
    .mySwiper--tabs .nav-link {
        margin: 1em 0;
        font-weight: bold;
        letter-spacing: 1px;
        font-size: 1.2rem;
        padding: 1em;
        white-space: nowrap;
    }

    .mySwiper--tabs .nav-link:hover,
    .mySwiper--tabs .nav-link:focus,
    .mySwiper--tabs .nav-link.active,
    #proyecto--bar .nav-link:hover,
    #proyecto--bar .nav-link:focus,
    #proyecto--bar .nav-link.active {
        background-color: rgba(0, 0, 0, 0.25);
    }

    .mySwiper--tabs .nav-link,
    #proyecto--bar .nav-link {
        border: none !important;
        border-radius: 0 !important;
        text-transform: uppercase;
        color: white !important;
    }

    /* .single-proyecto .ribbon-wrapper .ribbon {
        background-color: var(--amarillo-arinsa);
        color: var(--azul-arinsa);
    } */

    .mySwiper-avances .swiper-slide:not(:first-child)::after {
        content: ' ';
        width: 100%;
        height: 3px;
        background: var(--azul-arinsa);
        position: absolute;
        right: -55px;
        z-index: -1;
    }

    .mySwiper-avances .swiper-slide::before {
        content: ' ';
        height: 15px;
        width: 15px;
        background: var(--azul-arinsa);
        position: absolute;
        right: -10px;
        border-radius: 50%;
    }

    .mySwiper-avances .swiper-slide:first-child::before,
    .mySwiper-avances .swiper-slide:last-child::before,
    .mySwiper-avances .swiper-slide:first-child::after,
    .mySwiper-avances .swiper-slide:last-child::after {
        display: none;
    }

    .mySwiper-avances .swiper-slide:nth-last-child(2)::after {
        right: -10px !important;
    }

    .leaflet-marker-icon {
        width: 75px !important;
        height: 75px !important;
        border-radius: 50%;
        background-color: white;
        box-shadow: var(--sombra);
        border: 1px solid var(--azul-arinsa);
        object-fit: contain;
        padding: 7.5px !important;
    }
</style>

<!-- Add Flowbite JS -->
<!-- ... existing code ... -->

<!-- Add Flowbite JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabsElement = document.getElementById('proyecto--barTab');

        // Initialize tabs using flowbite's data attributes
        const tabElements = document.querySelectorAll('[role="tab"]');
        tabElements.forEach(function(tab) {
            tab.addEventListener('click', function() {
                // Hide all tab panels
                document.querySelectorAll('[role="tabpanel"]').forEach(panel => {
                    panel.classList.add('hidden');
                });

                // Remove active state from all tabs
                tabElements.forEach(t => {
                    t.classList.remove('bg-black/40');
                    t.setAttribute('aria-selected', 'false');
                });

                // Show selected tab panel
                const targetId = this.getAttribute('data-tabs-target');
                const targetPanel = document.querySelector(targetId);
                if (targetPanel) {
                    targetPanel.classList.remove('hidden');
                }

                // Set active state on clicked tab
                this.classList.add('bg-black/40');
                this.setAttribute('aria-selected', 'true');
            });
        });

        // Activate first tab by default
        const firstTab = document.querySelector('[role="tab"]');
        if (firstTab) {
            firstTab.click();
        }
    });
</script>

<!-- ... rest of the code ... -->

<?php if (get_field('mapa_showhide') == 1) { ?>
    <script>
        function changeMarker() {
            var image = document.querySelector('.leaflet-marker-icon');
            image.src = '<?php the_field('proyecto-logo'); ?>';
        }
        window.onload = changeMarker;
    </script>
<?php } ?>

<?php
get_footer();
