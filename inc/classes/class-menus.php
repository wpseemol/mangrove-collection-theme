<?php

/**
 * Menus
 * @package Mangrove Collection
 * @subpackage Classes
 * @since 1.0.0
 */

namespace MANGROVE_COLLECTION\Inc;

use MANGROVE_COLLECTION\Inc\Traits\Singleton;

class Menus
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
        add_action("init", array($this, "register_menus"));
    }


    public function register_menus()
    {
        register_nav_menus(array(
            "mangrove-header-menu" => esc_html__("Header Menu", "mangrove-collection"),
            "mangrove-footer-menu" => esc_html__("Footer Menu", "mangrove-collection"),
        ));
    }
}
