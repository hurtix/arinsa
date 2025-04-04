<?php

/**
 * This is a part template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>


<?php
$mapa = get_field('proyecto_location'); 
?>

       <div class="select-none w-full">
              <?php echo $mapa; ?>
       </div>
