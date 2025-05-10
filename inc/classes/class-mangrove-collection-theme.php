<?php

/**
 * Bootstraps the theme.
 * @package Mangrove Collection
 * @subpackage Classes
 * @since 1.0.0
 */

namespace MANGROVE_COLLECTION\Inc;

use MANGROVE_COLLECTION\Inc\Traits\Singleton;

class MANGROVE_COLLECTION_THEME
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
        wp_register_style("main", get_stylesheet_uri(), array(), filemtime(get_stylesheet_directory()), "all");
        wp_register_style("mangrove-collection", get_template_directory_uri() . "/assets/css/main.css", array(), filemtime(get_template_directory() . "/assets/css/main.css"), "all");
        wp_enqueue_style("main");
        wp_enqueue_style("mangrove-collection");
    }

    public function register_scripts()
    {
        // register and enqueue scripts
        wp_register_script("main", get_template_directory_uri() . "/assets/js/main.js", array(), filemtime(get_template_directory() . "/assets/js/main.js"), true);
        wp_enqueue_script("main");
    }
}
