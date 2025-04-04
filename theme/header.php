<?php

/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package arinsa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="<?php echo wp_is_Mobile() ? 'mobile' : 'desktop'; ?>">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-gray-500'); ?>>

	<?php wp_body_open(); ?>


	<style>
		:root {
			--azul-arinsa: <?php the_field('color_1', 'option'); ?>;
			--amarillo-arinsa: <?php the_field('color_2', 'option'); ?>;
			--gris: <?php the_field('color_3', 'option'); ?>;
		}

		.text-blue-500 {
			color: var(--azul-arinsa);
		}

		.border-blue-500 {
			border-color: var(--azul-arinsa);
		}

		.bg-blue-500,
		.hover\:bg-blue-500:hover {
			background-color: var(--azul-arinsa);
		}

		.text-gray-500 {
			color: var(--gris);
		}

		.border-gray-500 {
			border-color: var(--gris);
		}

		.bg-gray-500 {
			background-color: var(--gris);
		}

		.text-yellow-500 {
			color: var(--amarillo-arinsa);
		}

		.border-yellow-500 {
			border-color: var(--amarillo-arinsa);
		}

		.bg-yellow-500 {
			background-color: var(--amarillo-arinsa);
		}
	</style>

	<div id="page">
		<a href="#content" class="sr-only"><?php esc_html_e('Skip to content', 'arinsa'); ?></a>

		<?php get_template_part('template-parts/layout/header', 'content'); ?>
		<?php get_template_part('part-templates/nav-social') ?>
		<div id="content">