<?php

/**
 * 404 Template
 * @package Mangrove Collection
 * @version 1.0.0
 */

get_header();
?>
<main>
    <div class="container">
        <div class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e('Oops! That page can’t be found.', 'mangrove-collection'); ?></h1>
            </header><!-- .page-header -->
            <div class="page-content">
                <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'mangrove-collection'); ?></p>
                <?php get_search_form(); ?>
                <p><?php esc_html_e('Or return to the', 'mangrove-collection'); ?> <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('home page', 'mangrove-collection'); ?></a>.</p>
            </div><!-- .page-content -->
        </div><!-- .error-404 -->
        <div class="sidebar">
            <?php get_sidebar(); ?>

        </div><!-- .sidebar -->
    </div><!-- .container -->
</main>

<?php
get_footer();
