<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arinsa
 */

?>

<header id="masthead">
        <nav id="main-nav" class="<?php echo is_front_page() ? 'bg-gradient-to-b from-[#171B30] via-[#171B30]/50 to-transparent transition-colors duration-300' : 'bg-blue-500';?> border-gray-200 dark:bg-gray-900 fixed w-full top-0 z-50" data-nav-sticky>
        <div class="container flex flex-wrap items-center justify-between mx-auto">
		<div class="brand">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center py-1">
                    <img src="https://constructoraarinsa.com/wp-content/uploads/2024/01/h_arinsa_light.svg" class="h-20" alt="" />
                    
                </a>
            </div>

            <button id="navbar-toggle" 
                    data-collapse-toggle="navbar-main" 
                    type="button" 
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-white rounded-lg md:hidden hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-gray-200" 
                    aria-controls="navbar-main" 
                    aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>

            <div class="hidden w-full md:block md:w-auto" id="navbar-main">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'list-none pl-0 mb-0 flex flex-col font-medium p-4 md:p-0 mt-4 md:flex-row md:mt-0 md:border-0',
                        'container'      => false,
                        'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
                        'add_li_class'   => 'nav-item relative group',
                        'link_class'     => 'w-full block py-5 px-3 text-white hover:text-gray-200 md:p-0',
                        'walker'         => new Custom_Walker_Nav_Menu()
                    )
                );
                ?>
            </div>
        </div>
    </nav>
</header>
<script>
    // Sticky header color change
    const nav = document.querySelector('[data-nav-sticky]');
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                nav.classList.remove('bg-gradient-to-b', 'from-[#171B30]', 'via-[#171B30]/50', 'to-transparent');
                nav.classList.add('bg-blue-500');
            } else {
                if (document.body.classList.contains('home')) {
                    nav.classList.add('bg-gradient-to-b', 'from-[#171B30]', 'via-[#171B30]/50', 'to-transparent');
                    nav.classList.remove('bg-blue-500');
                }
            }
        });
    }, observerOptions);

    observer.observe(document.querySelector('header'));
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Flowbite Collapse
    const targetEl = document.getElementById('navbar-main');
    const triggerEl = document.getElementById('navbar-toggle');
    
    const options = {
        onCollapse: () => {
            triggerEl.setAttribute('aria-expanded', 'false');
        },
        onExpand: () => {
            triggerEl.setAttribute('aria-expanded', 'true');
        },
        onToggle: () => {
            console.log('navbar toggled');
        }
    };

    const instanceOptions = {
        id: 'navbar-main',
        override: true
    };

    if (typeof Collapse === 'function') {
        const collapse = new Collapse(targetEl, triggerEl, options, instanceOptions);
    }

    // Desktop dropdowns
    const dropdownItems = document.querySelectorAll('.menu-item-has-children');
    dropdownItems.forEach(item => {
        const link = item.querySelector('a');
        const submenu = item.querySelector('.sub-menu');
        
        if (submenu) {
            submenu.classList.add(
                'hidden', 
                'absolute', 
                'top-full', 
                'left-0', 
                'bg-blue-500', 
                'shadow-lg', 
                'mt-0', 
                'min-w-[400px]',
                'transition-all',
                'duration-200',
				'gap-6',
				'p-8',
				'flex',
				'flex-col',
                'list-none',
                'pl-8',
                'mb-0'
            );
            
            // Add dropdown arrow
            const arrow = document.createElement('span');
            arrow.innerHTML = `<svg class="w-2.5 h-2.5 ms-2.5 inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>`;
            link.appendChild(arrow);

            // Handle hover events with delay
            let timeout;
            
            item.addEventListener('mouseenter', () => {
                clearTimeout(timeout);
                submenu.classList.remove('hidden');
                submenu.classList.add('opacity-100');
            });
            
            item.addEventListener('mouseleave', () => {
                timeout = setTimeout(() => {
                    submenu.classList.add('hidden');
                    submenu.classList.remove('opacity-100');
                }, 200);
            });

            // Style submenu items
            submenu.querySelectorAll('a').forEach(subLink => {
                subLink.classList.add(
                    'block', 
                    'px-4', 
                    'py-3', 
                    'text-white',
                    'hover:bg-transparent',
                    'transition-colors',
                    'duration-200'
                );
            });
        }
    });
});
</script>