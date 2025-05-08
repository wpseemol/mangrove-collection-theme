<?php

/**
 * Mangrove Collection Theme singleton trait file.
 * @package Mangrove Collection
 * @subpackage Traits
 * @since 1.0.0
 */

namespace MANGROVE_COLLECTION\Inc\Traits;

trait Singleton
{

    protected function __construct() {}

    final protected function __clone()
    {
        // Prevent cloning of the instance of the object
    }

    final public static function get_instance()
    {
        static $instance = array();

        $called_class = get_called_class();
        if (! isset($instance[$called_class])) {
            $instance[$called_class] = new $called_class();

            do_action(sprintf('mangrove_collection_singleton_init_%s', $called_class));
        }
        return $instance[$called_class];
    }
}
