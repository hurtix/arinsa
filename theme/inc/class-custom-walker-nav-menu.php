<?php
// Primero, modifica el objeto de menú para incluir información sobre etapa_comercial
function add_status_attribute_to_menu_items($items, $args) {
    foreach ($items as $item) {
        // Verificar si el item es de tipo proyecto
        if ($item->object === 'proyecto') {
            // Obtener los valores de los campos ACF
            $etapa_comercial = get_field('etapa_comercial', $item->object_id);
            $logo = get_field('proyecto-logo', $item->object_id);
            
            if ($etapa_comercial) {
                // Modificar las clases del elemento para incluir el atributo data-status
                $item->classes[] = 'status-' . sanitize_title($etapa_comercial);
                
                // Almacenar el valor de etapa_comercial directamente en el objeto del ítem
                $item->etapa_comercial = $etapa_comercial;
            }
            
            // Almacenar el logo si existe
            if ($logo) {
                $item->proyecto_logo = $logo;
            }
        }
    }
    return $items;
}
add_filter('wp_nav_menu_objects', 'add_status_attribute_to_menu_items', 10, 2);

// Clase Walker modificada para incluir el atributo data-status
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    public function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $submenu_class = ($depth === 0) ?
            "sub-menu hidden absolute top-full left-0 bg-blue-500 w-full md:w-auto" :
            "sub-menu hidden absolute left-full top-0 bg-blue-500 w-full md:w-auto";
        $output .= "\n$indent<ul class=\"{$submenu_class}\">\n";
    }
    
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        
        if ($args->walker->has_children) {
            $classes[] = 'menu-item-has-children';
        }
        
        // Different classes for top-level and submenu items
        $item_class = $depth === 0 ?
            'relative p-5 cursor-pointer md:hover:bgtransparent uppercase text-xl tracking-wider font-bold' :
            'relative py-3 px-4 cursor-pointer hover:bgtransparent w-full border-1 border-white rounded-md';
        
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . $item_class . ' ' . esc_attr($class_names) . '"' : ' class="' . $item_class . '"';
        
        $output .= $indent . '<li' . $class_names . '>';
        
        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        
        // Different classes for top-level and submenu links
        $link_class = $depth === 0 ?
            'block text-white hover:text-gray-200 transition-colors duration-200' :
            'block text-white hover:text-gray-200 transition-colors duration-200 w-full flex items-center';
        
        $attributes .= ' class="' . $link_class . ' ' . ($args->link_class ?? '') . '"';
        
        // AQUÍ ESTÁ EL CAMBIO IMPORTANTE: Agregamos el atributo data-status si existe
        if (isset($item->etapa_comercial)) {
            $attributes .= ' data-status="' . esc_attr($item->etapa_comercial) . '"';
        }
        
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        
        // Añadir el logo antes del título si existe
        if (isset($item->proyecto_logo) && !empty($item->proyecto_logo)) {
            // Determinar el formato correcto del campo logo
            $logo_url = '';
            
            // Si es un array con clave 'url' (formato estándar de ACF)
            if (is_array($item->proyecto_logo) && isset($item->proyecto_logo['url'])) {
                $logo_url = $item->proyecto_logo['url'];
            } 
            // Si es un array con ID numérico (cuando se devuelve el ID de la imagen)
            else if (is_numeric($item->proyecto_logo)) {
                $logo_array = wp_get_attachment_image_src($item->proyecto_logo, 'thumbnail');
                if ($logo_array) {
                    $logo_url = $logo_array[0];
                }
            }
            // Si es solo una URL directa
            else if (is_string($item->proyecto_logo)) {
                $logo_url = $item->proyecto_logo;
            }
            
            // Si tenemos una URL válida, mostramos la imagen
            if (!empty($logo_url)) {
                $logo_html = '<img src="' . esc_url($logo_url) . '" alt="' . esc_attr($item->title) . ' logo" class="menu-item-logo mr-4 inline-block h-12 w-auto bg-white p-1 aspect-square object-cover" />';
                $item_output .= $logo_html;
            }
        }
        
        // Envolver el título en un elemento span
        $item_output .= $args->link_before . '<span class="menu-item-title">' . apply_filters('the_title', $item->title, $item->ID) . '</span>' . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
?>