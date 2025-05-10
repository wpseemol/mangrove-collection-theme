<?php

/**
 * Footer Template
 * @package Mangrove Collection
 * @version 1.0.0
 */
?>

<footer class="site-footer bg-green-900 text-white py-6">
    <div class="container mx-auto text-center">
        <p class="text-sm">&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
        <nav class="footer-nav mt-4">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'container'      => false,
                'items_wrap'     => '<ul class="flex justify-center space-x-4">%3$s</ul>',
            ));
            ?>
        </nav>
    </div>
</footer>
</main>
<?php wp_footer(); ?>
</body>

</html>