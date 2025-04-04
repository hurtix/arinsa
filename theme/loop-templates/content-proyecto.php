<?php

/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>


<div class="card position-relative filterDiv <?php the_field('estatus-proyecto'); ?> <?php if(wp_is_Mobile()) echo 'mb-4';?>">
	<div class="card-img-top w-100 d-block img-portada position-relative" style="background-image: url(<?php the_field('proyecto-portada'); ?>)">
	<div class="logo-proyecto" style="background:white url(<?php the_field('proyecto-logo'); ?>)no-repeat center/cover">
	</div>
	</div>
	<div class="card-body p-0">
		
		<h5 class="text-center px-0 pt-4 azul text-uppercase lh-1"><?php the_title(); ?></h5>
		<p class="text-center card-text"><?php the_field('proyecto-ubicacion'); ?></p>
		<ul class="list-inline text-center small">
			<?php if (get_field('proyecto-etapas')) : ?>
				<li class="list-inline-item">
					<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-building" style="margin-right: 5px;margin-top: -2px;color: var(--amarillo-arinsa);">
					<path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"></path>
					<path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"></path>
					</svg><?php the_field('proyecto-etapas'); ?> 
					Etapas
				</li>
			<?php endif; ?>
			<?php if (get_field('proyecto-unidades')) : ?>
				<li class="list-inline-item">
					<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-house-door" style="margin-right: 5px;margin-top: -2px;color: var(--amarillo-arinsa);">
					<path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"></path>
					</svg><?php the_field('proyecto-unidades'); ?> 
					viviendas
				</li>
			<?php endif; ?>
			<?php if (get_field('proyecto-area-desde')) : ?>
				<li class="list-inline-item">
					<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-border-left" style="margin-right: 5px;margin-top: -2px;color: var(--amarillo-arinsa);">
					<path d="M0 0v16h1V0H0zm1.906 1h.938V0h-.938v1zm1.875 0h.938V0H3.78v1zm1.875 0h.938V0h-.938v1zM7.531.969V1h.938V.969H8.5V.5h-.031V0H7.53v.5H7.5v.469h.031zM9.406 1h.938V0h-.938v1zm1.875 0h.938V0h-.938v1zm1.875 0h.938V0h-.938v1zm1.875 0h.469V.969h.5V0h-.969v.5H15v.469h.031V1zM7.5 1.906v.938h1v-.938h-1zm7.5 0v.938h1v-.938h-1zM7.5 3.781v.938h1V3.78h-1zm7.5 0v.938h1V3.78h-1zM7.5 5.656v.938h1v-.938h-1zm7.5 0v.938h1v-.938h-1zM1.906 8.5h.938v-1h-.938v1zm1.875 0h.938v-1H3.78v1zm1.875 0h.938v-1h-.938v1zm2.813 0v-.031H8.5V7.53h-.031V7.5H7.53v.031H7.5v.938h.031V8.5h.938zm.937 0h.938v-1h-.938v1zm1.875 0h.938v-1h-.938v1zm1.875 0h.938v-1h-.938v1zm1.875 0h.469v-.031h.5V7.53h-.5V7.5h-.469v.031H15v.938h.031V8.5zM7.5 9.406v.938h1v-.938h-1zm8.5.938v-.938h-1v.938h1zm-8.5.937v.938h1v-.938h-1zm8.5.938v-.938h-1v.938h1zm-8.5.937v.938h1v-.938h-1zm8.5.938v-.938h-1v.938h1zM1.906 16h.938v-1h-.938v1zm1.875 0h.938v-1H3.78v1zm1.875 0h.938v-1h-.938v1zm1.875-.5v.5h.938v-.5H8.5v-.469h-.031V15H7.53v.031H7.5v.469h.031zm1.875.5h.938v-1h-.938v1zm1.875 0h.938v-1h-.938v1zm1.875 0h.938v-1h-.938v1zm1.875-.5v.5H16v-.969h-.5V15h-.469v.031H15v.469h.031z"></path>
					</svg><?php the_field('proyecto-area-desde'); ?>
					m<sup>2</sup>
				</li>
			<?php endif; ?>
		</ul>
		<p class="text-center card-text"><?php the_field('proyecto-breve-desc'); ?></p>
		<div class="btns-videotour">
			<?php if (get_field('proyecto-video')) : ?>
				<button onclick="window.location.href='<?php the_permalink(); ?>/#video-proyecto'" class="btn btn-primary video-tour" type="button">Ver video<i class="fa fa-video-camera" style="margin-left: 10px;"></i>
				</button>
			<?php endif; ?>
			<?php if (get_field('tour-360')) : ?>
				<button onclick="window.location.href='<?php the_field('proyecto-tour'); ?>'" class="btn btn-primary video-tour" type="button">Tour 360<i class="fa fa-street-view" style="margin-left: 10px;"></i>
				</button>
			<?php endif; ?>
		</div>
		<div class="bg-azul py-4 px-1 flex-center">
		<button onclick="window.location.href='<?php the_permalink(); ?>'" class="btn-arinsa-blanco p-2" type="button" ><span class="small">Ver más de este proyecto</span>
		</button>
		</div>
	</div>
</div>