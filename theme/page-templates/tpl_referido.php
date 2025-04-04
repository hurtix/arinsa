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
<div class="w-full min-h-screen select-none bg-blue-500">
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
            <img class="<?php echo $class;?>" src="https://constructoraarinsa.com/wp-content/uploads/2024/01/h_arinsa_light.svg" alt="Logo Arinsa" width="<?php echo $width;?>">
            
            <div class="flex flex-col md:flex-row">
                <?php if(!wp_is_Mobile()) { ?>
                    <div class="w-full md:w-8/12 min-h-screen">
                        <img class="object-cover w-full h-screen max-h-screen select-none pointer-events-none" src="<?php the_field('fondo'); ?>" alt="">
                    </div>
                <?php } ?>
                <div class="w-full md:w-4/12 bg-gray-500 overflow-y-auto overflow-x-hidden max-h-screen">
                    <div class="p-4">
                        <p class="font-bold text-2xl text-blue-500"><?php the_field('titulo'); ?></p>
                        <?php echo do_shortcode('[contact-form-7 id="4cd6ebf"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    #masthead,
    #navsocial {
        display: none;
    }
    /* Form Styles */
        .wpcf7-form input:not([type="checkbox"]):not([type="radio"]),
    .wpcf7-form select,
    .wpcf7-form textarea {
        width: 100%;
        padding: 0.5rem 0.75rem;
        border: 1px solid #e5e7eb;
        border-radius: 0.375rem;
        outline: none;
    }

    .wpcf7-form input:not([type="checkbox"]):not([type="radio"]):focus,
    .wpcf7-form select:focus,
    .wpcf7-form textarea:focus {
        border-color: gray;
        box-shadow: 0 0 0 2px rgba(137, 148, 161, 0.5);
    }

        .wpcf7-form input[type="number"] {
        -moz-appearance: textfield;
        appearance: textfield;
    }

    .wpcf7-form select, .wpcf7-form textarea {
  background-color: white;
}

    .acepto p {
        line-height: 1;
        font-size: 0.75rem;
    }

    /* Custom Switch */
    .flipswitch {
        background-image: none !important;
        position: relative;
        width: 55px;
        height: 30px;
        cursor: pointer;
        border-radius: 0.375rem;
        background-color: darkred;
        border: 1px solid #e5e7eb;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        color: green;
    }

    [type="checkbox"]:focus {
        border-color: gray;
        box-shadow: 0 0 0 2px rgba(137, 148, 161, 0.5);
    }

    .flipswitch::after {
        position: absolute;
        top: 0;
        left: 2%;
        width: 50%;
        height: 100%;
        background-color: white;
        text-align: center;
        transition: all 0.3s ease;
        border: 1px solid #9ca3af;
        border-radius: 0.25rem;
        content: 'NO';
        line-height: 28px;
        font-weight:bold;
        color: darkred;
    }

    .flipswitch:checked::after {
        left: 50%;
        content: 'SI';
        font-weight:bold;
        color: green;
    }

    /* Form Messages */
    .wpcf7-response-output {
        margin: 0 !important;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        margin: 0;
        padding: 0.75rem;
        text-align: center;
    }

    .wpcf7 form.invalid .wpcf7-response-output {
        background-color: #fee2e2;
        border: 2px solid #fecaca;
        color: darkred;
    }

    .wpcf7 form.sent .wpcf7-response-output {
        background-color: #dcfce7;
        border: 2px solid #bbf7d0;
        color: green;
    }

    /* Form Validation Styles */
    .wpcf7-not-valid-tip {
        display: none;
    }

    .wpcf7-form .wpcf7-not-valid {
        border-color: red;
        padding-right: calc(1.5em + 0.75rem);
        background-repeat: no-repeat;
        background-position: right calc(0.375em + 0.1875rem) center;
        background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .wpcf7-form .wpcf7-validated {
        border-color: green;
    }
    .wpcf7-form-control.wpcf7-submit {
  background: var(--color-yellow-500);
  color: white;
  font-weight: bold;
  border-radius:0 !important;
}
.wpcf7-list-item-label a {
  color: var(--color-yellow-500);
  font-weight: bold;
}
.wpcf7-list-item label {
  display: flex;
  align-items: center;
  gap:
1em;
}
.wpcf7-form .lead {
  font-size: 1.2rem;
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