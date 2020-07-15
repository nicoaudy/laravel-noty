<?php

/**
 * Helper function for a noty flash message
 *
 * @param string|null $message
 * @return
 */
if (! function_exists('noty')) {
    function noty()
    {
        $noty = app('noty');

        return $noty;
    }
}
