<?php

// if (!function_exists('activeRoute')) {
//     function activeRoute($routeName = '')
//     {
//         return request()->routeIs($routeName) ? 'active' : '';
//     }
// }



if (!function_exists('activeRoute')) {
    /**
     * Determine if the given route is active.
     *
     * @param  string $routes
     * @return string 
     */
    function activeRoute(string ...$routes): string
    {
        foreach ($routes as $route) {
            if (request()->routeIs($route)) {
                return 'active';
            }
        }

        return '';
    }
}

if (!function_exists('activeRouteSubMenu')) {
    /**
     * Determine if the given route is active.
     *
     * @param  string $routes
     * @return string 
     */
    function activeRouteSubMenu(string ...$routes): string
    {
        foreach ($routes as $route) {
            if (request()->routeIs($route)) {
                return 'active-submenu';
            }
        }

        return '';
    }
}
