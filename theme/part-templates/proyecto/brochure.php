<?php

/**
 * This is a part template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<!-- Brochure -->

    <div>
        <a class="position-fixed blanco d-block <?php if(wp_is_Mobile()) echo 'pt-5 px-2 pb-2';else echo 'p-4 lead'?> sombra border border-2 border-light" href="<?php the_field('brochure'); ?>" target="_blank" style="background-color: <?php the_field('proyecto-color'); ?>;z-index: 1;transform: rotate(-90deg);left: -75px;top:50%;">Descargar brochure</a>
    </div>
<!-- Fin brochure -->