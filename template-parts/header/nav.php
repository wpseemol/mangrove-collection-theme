<?php

/**
 * Header Navigation Template
 * @package Mangrove Collection
 * @version 1.0.0
 */

?>

<div class="container">
    <div class="header-inner">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php if (has_custom_logo()) {
                    the_custom_logo();
                } else { ?>
                    <h1><?php bloginfo('name'); ?></h1>
                <?php } ?>
            </a>
        </div>
    </div>
    <nav class="main-navigation">
        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
    </nav>
</div>