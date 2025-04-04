<?php
/**
 * This is a part template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>


<div class="bg-blue-500">
    <div class="py-20"></div>
    <div class="container mx-auto">
        <h2 class="text-5xl text-yellow-500 font-bold"><?php the_field( 'titulo' ); ?></h2>
        <h3 class="font-normal text-white text-xl mt-4"><?php the_field( 'subtitulo' ); ?></h3>
    </div>
    <div class="py-20"></div>
</div>