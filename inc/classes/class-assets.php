<?php

/**
 * Assets Class
 * @package Mangrove Collection
 * @subpackage Classes
 * @since 1.0.0
 */

namespace MANGROVE_COLLECTION\Inc;

use MANGROVE_COLLECTION\Inc\Traits\Singleton;

class Assets
{
    use Singleton;

    protected function __construct()
    {
        // Load the theme setup.
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {

        // Actions
        add_action("wp_enqueue_scripts", array($this, "register_style"));
        add_action("wp_enqueue_scripts", array($this, "register_scripts"));
    }


    public function register_style()
    {
        // register and enqueue stylesheets
        wp_register_style("main", MANGROVE_COLLECTION_DIR_URI . "/style.css", array(), filemtime(MANGROVE_COLLECTION_DIR_PATH . "/style.css"), "all");
        wp_register_style("mangrove-collection", MANGROVE_COLLECTION_DIR_URI . "/assets/css/main.css", array(), filemtime(MANGROVE_COLLECTION_DIR_PATH . "/assets/css/main.css"), "all");
        wp_register_style("mangrove-collection-tailwind", MANGROVE_COLLECTION_DIR_URI . "/assets/css/tOutput.css", array(), filemtime(MANGROVE_COLLECTION_DIR_PATH . "/assets/css/tOutput.css"), "all");
        wp_enqueue_style("main");
        wp_enqueue_style("mangrove-collection");
        wp_enqueue_style("mangrove-collection-tailwind");
    }

    public function register_scripts()
    {
        // register and enqueue scripts
        wp_register_script("main", MANGROVE_COLLECTION_DIR_URI . "/assets/js/main.js", array(), filemtime(MANGROVE_COLLECTION_DIR_PATH . "/assets/js/main.js"), true);

        // tailwind cdn
        // wp_register_script("tailwind", "https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4", array(), null, false);
        wp_enqueue_script("main");
        wp_enqueue_script("tailwind");
    }
}
