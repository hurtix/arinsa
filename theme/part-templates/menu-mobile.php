<?php
/**
 * This is a part template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="offcanvas offcanvas-start w-100 h-100 bg-azul" tabindex="-1" id="offcanvasMenuMobile" aria-labelledby="offcanvasMenuMobileLabel">
  <div class="offcanvas-header bg-azul">
    <!-- <h5 class="offcanvas-title azul" id="offcanvasMenuMobileLabel">MENÚ</h5> -->
    <img src="/wp-content/uploads/2024/01/h_arinsa_light.svg" class="img-fluid w-50" alt="ARINSA" decoding="async">
    <button type="button" class="blanco bg-transparent border-0" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg blanco h3 mb-0"></i></button>
  </div>
  <div class="offcanvas-body bg-azul h-100 p-0">
  <?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'offcanvas-body',
					'container_id'    => '',
					'menu_class'      => 'navbar-nav',
					'fallback_cb'     => '',
					'menu_id'         => 'main-menu',
					'depth'           => 2,
					'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				)
			);
			?>
            <!-- <hr class="blanco">
            <div class="py-5 position-relative">
                <ul class="w-100 gap-2 mx-auto list-unstyled m-0 py-0 px-4 grilla-4">
                    <li class="bg-blanco flex-center">
                        <a class="p-1" href="https://constructoraarinsa.com/proyecto/azora/">
                        <img class="logo-proyecto" src="https://constructoraarinsa.com/wp-content/uploads/2023/01/LOGO-AZORA-e1678724735983.png" alt="content-arinsa">
                        </a>
                    </li>
                    <li class="bg-blanco flex-center">
                        <a class="p-1" href="https://constructoraarinsa.com/proyecto/bosques-de-la-alhambra/">
                        <img class="logo-proyecto" src="https://constructoraarinsa.com/wp-content/uploads/2022/02/logo-bosques-de-alhambra_Mesa-de-trabajo-1.png" alt="content-arinsa">
                        </a>
                    </li>
                    <li class="bg-blanco flex-center">
                        <a class="p-1" href="https://constructoraarinsa.com/proyecto/camino-viejo/">
                        <img class="logo-proyecto" src="https://constructoraarinsa.com/wp-content/uploads/2021/11/logo-caminoviejo.jpg" alt="content-arinsa">
                        </a>
                    </li>
                    <li class="bg-blanco flex-center">
                        <a class="p-1" href="https://constructoraarinsa.com/proyecto/campanario/">
                        <img class="logo-proyecto" src="https://constructoraarinsa.com/wp-content/uploads/2021/12/logo-campanario.jpg" alt="content-arinsa">
                        </a>
                    </li>
                </ul>
            </div> -->
            <hr class="blanco">           
            <div id="rrss-mobile" class="d-flex">
                        <span class="ps-3 user-select-none amarillo">Síguenos en</span>
                        <ul class="list-unstyled m-0 p-0 d-flex gap-3 ps-3">
                            <li class=""><a href="https://www.facebook.com/arinsapopayan" target="_blank"><i class="bi bi-facebook"></i> Facebook</a></li>
                            <li class=""><a href="https://www.instagram.com/arinsa_popayan/" target="_blank"><i class="bi bi-instagram"></i> Instagram</a></li>
                        </ul>
                    </div>  
    </div>
  
</div>