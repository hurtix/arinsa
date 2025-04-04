<?php

/**
 * Noticias relacionadas
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div id="compartir" class="w-100 grilla-4">
    <!-- Sharingbutton Facebook -->
    <a style="background: #3b5998;" class="flex-center text-center py-1 lh-1 scale-1" href="https://facebook.com/sharer/sharer.php?u=<?php echo get_permalink($post->ID); ?>" target="_blank" rel="noopener" aria-label="Facebook">
        <i class="bi bi-facebook blanco fs-4"></i>
    </a>
    <!-- Sharingbutton Twitter -->
    <a style="background: #0F141A;" class="flex-center text-center py-1 lh-1 scale-1" href="https://twitter.com/intent/tweet/?text=<?php the_title(); ?>&amp;url=<?php echo get_permalink($post->ID); ?>" target="_blank" rel="noopener" aria-label="Twitter">
        <i class="bi bi-twitter-x blanco fs-4"></i>
    </a>
    <!-- Sharingbutton WhatsApp -->
    <a style="background: #25d366;" class="flex-center text-center py-1 lh-1 scale-1" href="whatsapp://send?text=Ent&eacute;rese:%20<?php the_title(); ?>%20<?php echo get_permalink($post->ID); ?>" target="_blank" rel="noopener" aria-label="WhatsApp">
        <i class="bi bi-whatsapp blanco fs-4"></i>
    </a>
    <!-- Sharingbutton E-Mail -->
    <a style="background: var(--azul-arinsa);" class="flex-center text-center py-1 lh-1 scale-1" href="mailto:?subject=Constructora%20Arinsa%20-%20<?php the_title(); ?>&amp;body=Ent&eacute;rese%20:%20<?php the_title(); ?>%20<?php echo get_permalink($post->ID); ?>" target="_self" rel="noopener" aria-label="E-Mail">
        <i class="bi bi-envelope-fill blanco fs-4"></i>
    </a>
</div>