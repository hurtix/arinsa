<?php

/**
 * This is a part template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<!-- Tour 360 -->
    <div class="row clearfix">
        <div id="tour360" style="background-image: url('https://constructorasimbra.com/wp-content/uploads/2021/07/bg-360.jpg');min-height: 600px;background-size: cover;display: flex;width: 100%;">
            <div class="centarDiv" style="background: rgba(0,0,0,0.6);width: 100%;">
                <img style="width: 80px;margin: 10vh auto 0 auto;display: block;" src="https://constructorasimbra.com/wp-content/uploads/2021/07/icon-360.png">
                <p style="font-size: 25px;font-weight: lighter;color: #fff;padding: 20px 0;text-align: center;">Siéntete en nuestra <strong>Casa</strong> y enamórate</p>
                <a class="btnDestacado" style="width: auto;margin: 0 auto !important;padding: 15px;display: block;width: 180px;text-align: center;" href="<?php the_field('tour-360'); ?>" target="_blank">Iniciar el recorrido</a>
            </div>
        </div>
    </div>
<!-- Fin tour 360 -->