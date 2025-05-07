<?php
/**
 * Footer Template
 * @package Mangrove Collection
 * @version 1.0.0
 */
?>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
        <nav class="footer-nav">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer-menu',
                    'container'      => false,
                    'items_wrap'     => '<ul>%3$s</ul>',
                ) );
            ?>
        </nav> 
    </footer>
</main>
<?php wp_footer(); ?>
</body>
</html>