<?php

/**
 * Theme Functions File
 * @package Mangrove Collection
 * @version 1.0.0
 */


if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}


if (!defined("MANGROVE_COLLECTION_DIR_PATH")) {
    define("MANGROVE_COLLECTION_DIR_PATH", untrailingslashit(get_template_directory()));
}

if (!defined("MANGROVE_COLLECTION_DIR_URI")) {
    define("MANGROVE_COLLECTION_DIR_URI", untrailingslashit(get_template_directory_uri()));
}

require_once MANGROVE_COLLECTION_DIR_PATH . '/inc/helpers/autoloader.php';

function mangrove_collection_get_theme_instance()
{

    \MANGROVE_COLLECTION\Inc\MANGROVE_COLLECTION_THEME::get_instance();
}

mangrove_collection_get_theme_instance();
