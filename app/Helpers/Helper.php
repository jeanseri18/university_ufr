<?php

if (!function_exists('activeRoute')) {
    function activeRoute($routeName = '')
    {
        return request()->routeIs($routeName) ? 'active' : '';
    }
}