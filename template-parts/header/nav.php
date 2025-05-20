<?php

/**
 * Header Navigation Template
 * @package Mangrove Collection
 * @version 1.0.0
 */

?>

<div class="nav-menu flex justify-between items-center container mx-auto text-white">
    <div class="logo text-3xl font-bold capitalize max-h-[5rem]">


        <?php if (has_custom_logo()) {
            the_custom_logo();
        } else { ?>
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <h1><?php bloginfo('name'); ?></h1>
            </a>
        <?php } ?>


    </div>
    <nav class="main-navigation text-lg font-bold">
        <?php wp_nav_menu(array(
            'theme_location' => 'mangrove-header-menu',
        )); ?>
    </nav>
</div>