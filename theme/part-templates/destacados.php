<?php
/**
 * This is a part template
 */

?>
<?php 
    $post_id = get_query_var('proyecto');
    $titulo = get_the_title($post_id); 
    $link = get_the_permalink($post_id); 
    $precio = get_field('proyecto-precio',$post_id);
    // setlocale(LC_MONETARY, 'es_CO');
    // $precio = money_format('%!.0n', $precio);
    $habitaciones = get_field( 'habitaciones',$post_id );
    $banhos = get_field( 'banos',$post_id );
    $parqueaderos = get_field( 'parqueaderos',$post_id );
?>
<a href="<?php echo $link;?>">
    <div class="bg-white shadow-lg rounded-xl border border-gray-200 overflow-hidden">
        <div class="grid grid-cols-1 relative md:grid-cols-2 gap-4">
            <div class="flex items-center justify-center px-3 pt-3 md:px-0 md:pt-0">
                <div class="flex h-full w-full relative p-1 md:p-0 bg-white">
                    <img class="object-cover object-right w-full min-h-[50vh]" src="<?php the_field( 'proyecto-portada',$post_id ); ?>" alt="">
                    <div class="absolute right-0 bottom-0 mb-2 mr-4 mb-4">
                        <span class="block text-5xl text-white text-right font-bold"><?php the_field( 'proyecto-area-desde',$post_id ); ?> m²</span>
                        <span class="block text-right text-white">Área construida desde</span>
                    </div>
                </div>
            </div>
            <?php if(wp_is_Mobile()) { ?>
                <img class="absolute left-5 top-0 ml-4 border border-gray-200 shadow bg-gray-100 rounded-b object-contain h-25 aspect-square p-2"  
                     src="<?php the_field( 'proyecto-logo',$post_id ); ?>" />
            <?php } ?>
            <div class="relative p-4 md:px-4 md:py-5">
                <?php if(!wp_is_Mobile()) { ?>
                    <img class="absolute aspect-square object-cover p-2 border border-gray-200 right-0 top-0 mr-4 mt-4  bg-gray-100" 
                         src="<?php the_field( 'proyecto-logo',$post_id ); ?>" 
                         width="100" />
                <?php } ?>
                <span class="text-sm uppercase tracking-wider">Popayán, Cauca</span>
                <h2 class="text-blue-500 mb-0 text-5xl font-bold w-2/3"><?php echo $titulo; ?></h2>
                <span><?php the_field('direccion',$post_id); ?></span>
                
                <div class="grid grid-cols-4 my-4 md:flex md:gap-2 md:items-center md_my-3">
                    <?php if (!empty($habitaciones)) { ?>
                        <img src="/wp-content/themes/understrap-child-main/assets/bedroom.png" width="35">
                        <span><?php echo $habitaciones;?> alcobas</span>
                    <?php } ?>
                    <?php if (!empty($banhos)) { ?>
                        <img src="/wp-content/themes/understrap-child-main/assets/bath.png" width="30">
                        <span><?php echo $banhos;?> baños</span>
                    <?php } ?>
                    <?php if (!empty($parqueaderos)) { ?>
                        <img src="/wp-content/themes/understrap-child-main/assets/parking.png" width="35">
                        <span><?php echo $parqueaderos;?> parqueaderos</span>
                    <?php } ?>
                </div>
                <h3>
                    <span class="inline-block bg-blue-500 text-white px-4 py-1 rounded-lg text-lg md:text-2xl font-bold">Desde $<?php echo number_format($precio, 0, ".", "."); ?></span>
                </h3>
                <div class="flex gap-4 items-center my-3">
                    <div class="flex items-center justify-center flex-col">
                        <span class="text-xl leading-none"><?php the_field( 'proyecto-etapas',$post_id ); ?></span>
                        <span class="text-xs">Etapas</span>
                    </div>
                    <div class="flex items-center justify-center flex-col">
                        <span class="text-xl leading-none"><?php the_field( 'proyecto-unidades',$post_id ); ?></span>
                        <span class="text-xs">Viviendas</span>
                    </div>
                </div>
                <span class="absolute right-0 bottom-0 mr-2 mb-2 md:mr-4 md:mb-4 text-2xl text-blue-500 font-bold" >Ver proyecto</span>
            </div>
        </div>
    </div>
</a>