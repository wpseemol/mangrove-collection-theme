<?php

/**
 * Theme Functions File
 * @package Mangrove Collection
 * @version 1.0.0
 */



if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function mangrove_collection_enqueue_scripts()
{
    // register and enqueue stylesheets
    wp_register_style("main", get_stylesheet_uri(), array(), filemtime(get_stylesheet_directory()), "all");
    wp_register_style("mangrove-collection", get_template_directory_uri() . "/assets/css/main.css", array(), filemtime(get_template_directory() . "/assets/css/main.css"), "all");
    wp_enqueue_style("main");
    wp_enqueue_style("mangrove-collection");

    // register and enqueue scripts
    wp_register_script("main", get_template_directory_uri() . "/assets/js/main.js", array(), filemtime(get_template_directory() . "/assets/js/main.js"), true);
    wp_enqueue_script("main");
}


add_action("wp_enqueue_scripts", "mangrove_collection_enqueue_scripts");



if (!defined("MANGROVE_COLLECTION_DIR_PATH")) {
    define("MANGROVE_COLLECTION_DIR_PATH", untrailingslashit(get_template_directory()));
}




require_once MANGROVE_COLLECTION_DIR_PATH . '/inc/helpers/autoloader.php';






function mangrove_collection_get_theme_instance()
{

    \MANGROVE_COLLECTION\Inc\MANGROVE_COLLECTION_THEME::get_instance();
}

mangrove_collection_get_theme_instance();
