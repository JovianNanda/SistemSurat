<?php

function handleURL()
{
    $getURL = array_values(array_filter(explode('/', $_SERVER['REQUEST_URI'])));
    unset($getURL[0]);
    return array_values($getURL);
}
function route($route, $callback)
{
    $getURL = handleURL();
    $route = array_values(array_filter(explode('/', $route)));

    // cek jika ada {parameter}
    foreach ($route as $key => $value) {
        if (strpos($value, '{') !== false) {
            $route[$key] = $getURL[$key];
        }
    }

    if ($getURL == $route) {
        $callback();
    }
}

function view($view, $data = [])
{
    extract($data);
    require_once VIEW_PATH . $view . '.php';
}
