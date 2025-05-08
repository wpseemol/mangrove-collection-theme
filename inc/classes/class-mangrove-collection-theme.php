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
        $this->set_hooks();
    }

    protected function set_hooks() {}
}
