<?php

/**
 * Header Navigation Template
 * @package Mangrove Collection
 * @version 1.0.0
 */


?>

<div class="nav-menu flex justify-between items-center container mx-auto">
    <div class="logo text-3xl font-bold capitalize max-h-[5rem]">


        <?php if (has_custom_logo()) {
            the_custom_logo();
        } else { ?>
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <h1><?php bloginfo('name'); ?></h1>
            </a>
        <?php } ?>


    </div>
    <nav class="main-navigation text-lg font-bold flex justify-center">
        <?php wp_nav_menu(array(
            'theme_location' => 'mangrove-header-menu',
        )); ?>
    </nav>

    <form class="flex items-center space-x-2" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <input
            type="search"
            name="s"
            class="border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="Search..."
            aria-label="Search">
        <button
            type="submit"
            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
            Search
        </button>
    </form>
</div>