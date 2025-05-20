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
        // Load Class.
        Assets::get_instance();
        Menus::get_instance();

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
            'header-text'  => array('site-title', 'site-description'),
            'height'       => 100,
            'width'        => 400,
            'flex-height'  => true,
            'flex-width'   => true,
        ));

        add_theme_support("custom-background", array(
            "default-color"  => "#fff",
            "default-image"  => "",
            "default-repeat" => "no-repeat",

        ));

        add_theme_support("post-thumbnails");

        add_theme_support("customize-selective-refresh-widgets");

        add_theme_support("automatic-feed-links");

        add_theme_support("html5", array(
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption',
            "gallery",
            "script",
            "style"
        ));

        add_theme_support("align-wide");

        add_theme_support("wp-block-styles");

        add_editor_style();

        global $content_width;
        if (! isset($content_width)) {
            $content_width = 1240;
        }
    }
}
