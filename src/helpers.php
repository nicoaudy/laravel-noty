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

if (! function_exists('noty_assets')) {
    function noty_assets()
    {
        return view('noty::noty');
    }
}
