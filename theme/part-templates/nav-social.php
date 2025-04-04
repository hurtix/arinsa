<?php
/**
 * This is a part template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<nav class="fixed top-1/2 right-[-240px] z-50">
    <ul class="p-0 translate-x-0">
        <li class="block my-1 bg-black/35 w-[300px] text-left p-2 rounded-tl-full rounded-bl-full transition-all duration-1000 hover:translate-x-[-150px] hover:bg-white/99 hover:shadow-lg">
            <a target="_blank" href="<?php the_field('enlace-whatsapp', 'option'); ?>">
                <div class="grid grid-cols-12">
                    <div class="col-span-3 <?php if(wp_is_Mobile()) echo 'pl-1'?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/whatsapp.png" class="block rounded-full w-[50px] rotate-0 hover:rotate-[-360deg] transition-all duration-1000" alt="...">
                    </div>
                    <div class="col-span-7 flex items-center">
                        <p class="text-left text-[#003A70] text-base font-semibold cursor-pointer mb-0">Whatsapp</p>
                    </div>
                </div>
            </a>
        </li>

        <li class="block my-1 bg-black/35 w-[300px] text-left p-2 rounded-tl-full rounded-bl-full transition-all duration-1000 hover:translate-x-[-150px] hover:bg-white/99 hover:shadow-lg">
            <a target="_blank" href="<?php the_field('enlace-pse', 'option'); ?>">
                <div class="grid grid-cols-12">
                    <div class="col-span-3 <?php if(wp_is_Mobile()) echo 'pl-1'?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/pse.jpg" class="block rounded-full w-[50px] rotate-0 hover:rotate-[-360deg] transition-all duration-1000" alt="...">
                    </div>
                    <div class="col-span-7 flex items-center">
                        <p class="text-left text-[#003A70] text-base font-semibold cursor-pointer mb-0">Pagos PSE</p>
                    </div>
                </div>
            </a>
        </li>

        <li class="block my-1 bg-black/35 w-[300px] text-left p-2 rounded-tl-full rounded-bl-full transition-all duration-1000 hover:translate-x-[-150px] hover:bg-white/99 hover:shadow-lg">
            <a target="_blank" href="/referido">
                <div class="grid grid-cols-12">
                    <div class="col-span-3 <?php if(wp_is_Mobile()) echo 'pl-1'?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/btn-referal.png" class="block rounded-full w-[50px] rotate-0 hover:rotate-[-360deg] transition-all duration-1000" alt="...">
                    </div>
                    <div class="col-span-7 flex items-center">
                        <p class="text-left text-[#003A70] text-base font-semibold cursor-pointer mb-0">Refiere y gana</p>
                    </div>
                </div>
            </a>
        </li>

        <?php 
        $waze = get_field('enlace_waze');
        if (!empty($waze)) {
        ?>
        <li class="block my-1 bg-black/35 w-[300px] text-left p-2 rounded-l-3xl transition-all duration-1000 hover:translate-x-[-150px] hover:bg-white/99 hover:shadow-lg">
            <a target="_blank" href="<?php echo $waze; ?>">
                <div class="grid grid-cols-12">
                    <div class="col-span-3 <?php if(wp_is_Mobile()) echo 'pl-1'?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/waze-icon.svg" class="block rounded-full w-[50px] rotate-0 hover:rotate-[-360deg] transition-all duration-1000" alt="...">
                    </div>
                    <div class="col-span-7 flex items-center">
                        <p class="text-left text-[#003A70] text-base font-semibold cursor-pointer mb-0">Ir con Waze</p>
                    </div>
                </div>
            </a>
        </li>
        <?php } ?>
    </ul>
</nav>
<style>
	.social {
  position: fixed;
  top: 50%;
  right: -240px;
  z-index: 500;
}
.social ul {
  padding: 0px;
  transform: translate(0px, 0);
}
.social ul li {
  display: block;
  margin: 5px;
  background: rgba(0, 0, 0, 0.36);
  width: 300px;
  text-align: left;
  padding: 0px;
  border-radius: 30px 0 0 30px;
  transition: all 1s;
  padding: .5em;
}
.social ul li .iconos-sidebar {
  display: flex;
  align-items: center;
}
.social ul li p {
  text-align: left;
  color: var(--azul-arinsa);
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  margin-bottom:0;
}
.social ul li:hover {
  transform: translate(-150px, 0);
  background: rgba(255, 255, 255, 0.99);
  box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.052);
}
.social ul li img {
  display: block;
  margin-right: 10px;
  color: #000;
  padding: 0;
  border-radius: 50%;
  width: 50px !important;
  height: auto;
  transform: rotate(0deg);
}
.social ul li:hover img {
  color: #fff;
  transform: rotate(-360deg);
  transition: all 1s;
}

</style>