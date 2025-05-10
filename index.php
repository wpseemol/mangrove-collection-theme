<?php

/**
 * The main template file.
 * @package Mangrove Collection
 * @version 1.0.0
 * 
 * 
 */

get_header();
?>

<div class="container mx-auto p-4">
    <div class="hero bg-green-900 text-white p-6 rounded-lg shadow-lg">
        <h1 class="text-4xl font-bold">Mangrove Collection</h1>
        <p class="text-lg">Explore the beauty of mangroves and their importance to our ecosystem.</p>
    </div>


    <h1>Welcome to the Mangrove Collection</h1>
    <p>This is the main template file for the Mangrove Collection theme.</p>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2><?php the_title(); ?></h2>
                <div><?php the_content(); ?></div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
    <nav class="pagination">
        <?php
        echo paginate_links(array(
            'total' => $wp_query->max_num_pages,
        ));
        ?>




</div>

<?php

get_footer();
