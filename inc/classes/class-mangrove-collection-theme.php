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

        Assets::get_instance();

        // Load the theme's text domain for translations
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        add_action('after_setup_theme', array($this, 'setup_theme'));
    }

    public function setup_theme()
    {
        add_theme_support('title-tag');

        add_theme_support("custom-logo", array(
            'header-text' => array('site-title', 'site-description'),
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true,
        ));

        add_theme_support("custom-background", array(
            "default-color" => "#fff",
            "default-image" => "",
        ));
    }
}
