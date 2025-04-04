<?php
/**
 * Template Name: UI Referido
 *
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
?>
<div class="w-full min-h-screen select-none bg-blue-600">
    <div class="relative">
        <div class="relative">
            <?php 
            if(!wp_is_Mobile()) {
                $class = "absolute top-0 left-0 mt-2 pointer-events-none";
                $width = "400";
            } else { 
                $class = "relative w-3/4 mx-auto pointer-events-none block";
                $width = "300";
            }
            ?>
            <img class="<?php echo $class;?>" src="/wp-content/uploads/2024/01/h_arinsa_light.svg" alt="Logo Arinsa" width="<?php echo $width;?>">
            
            <div class="flex flex-col md:flex-row">
                <?php if(!wp_is_Mobile()) { ?>
                    <div class="w-full md:w-8/12 min-h-screen">
                        <img class="object-cover w-full h-screen max-h-screen select-none pointer-events-none" src="<?php the_field('fondo'); ?>" alt="">
                    </div>
                <?php } ?>
                <div class="w-full md:w-4/12 bg-white overflow-y-auto max-h-screen">
                    <div class="p-4">
                        <p class="font-bold text-2xl text-blue-600"><?php the_field('titulo'); ?></p>
                        <?php echo do_shortcode('[contact-form-7 id="4cd6ebf"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Form Styles */
    .wpcf7-form input:not([type="checkbox"]):not([type="radio"]),
    .wpcf7-form select,
    .wpcf7-form textarea {
        @apply w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .wpcf7-form input[type="number"] {
        @apply appearance-textfield;
    }

    .acepto p {
        @apply leading-none text-xs;
    }

    /* Custom Switch */
    .flipswitch {
        @apply relative w-[55px] h-[30px] cursor-pointer rounded-md bg-blue-500 border border-gray-300;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .flipswitch::after {
        @apply absolute top-0 left-[2%] w-[45%] h-full bg-white text-center transition-all duration-300 border border-gray-400 rounded content-['NO'];
        line-height: 28px;
    }

    .flipswitch:checked::after {
        @apply left-[53%] content-['SI'];
    }

    /* Form Messages */
    .wpcf7-response-output {
        @apply fixed top-0 left-0 w-full m-0 p-3 text-center;
    }

    .wpcf7 form.invalid .wpcf7-response-output {
        @apply bg-red-100 border-2 border-red-200 text-red-800;
    }

    .wpcf7 form.sent .wpcf7-response-output {
        @apply bg-green-100 border-2 border-green-200 text-green-800;
    }

    /* Hide navbar and footer */
    #masthead {
  display: none;
}

    /* Form Validation Styles */
    .wpcf7-not-valid-tip {
        @apply hidden;
    }

    .wpcf7-form .wpcf7-not-valid {
        @apply border-red-500;
        padding-right: calc(1.5em + 0.75rem);
        background-repeat: no-repeat;
        background-position: right calc(0.375em + 0.1875rem) center;
        background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .wpcf7-form .wpcf7-validated {
        @apply border-green-500;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkbox = document.getElementById('flipswitch');
        const elementToToggle = document.getElementById('btn-referido');

        if (checkbox && elementToToggle) {
            checkbox.addEventListener('change', function() {
                if (checkbox.checked) {
                    elementToToggle.classList.remove('pointer-events-none', 'opacity-25');
                } else {
                    elementToToggle.classList.add('pointer-events-none', 'opacity-25');
                }
            });
        }
    });
</script>