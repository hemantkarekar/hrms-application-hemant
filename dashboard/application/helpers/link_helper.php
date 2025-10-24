<?php

if (! function_exists('link_is_active')) {
    function link_is_active($url = null, $group = false)
    {
        if ($group) {
            return (in_array((explode(base_url(), current_url()))[1], $url)) ? ['show' => true, 'active' => true, 'expand' => true] : ['show' => false, 'active' => false, 'expand' => false];
        } else {
            return ((explode(base_url(), current_url()))[1] == $url) ? ['show' => true, 'active' => true, 'expand' => true] : ['show' => false, 'active' => false, 'expand' => false];
        }
    }
}
