<?php

if (!function_exists('activRoute')) {
    function activRoute($routeName = '')
    {
        return request()->routeIs($routeName) ? 'active' : '';
    }
}