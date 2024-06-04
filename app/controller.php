<?php
$RouteLists = [];
function handleURL()
{
    $getURL = array_values(array_filter(explode('/', $_SERVER['REQUEST_URI'])));
    unset($getURL[0]);
    return array_values($getURL);
}

function route($route, $callback)
{
    global $RouteLists;

    $RouteLists[$route] = $callback;
}

function handleRoute()
{
    global $RouteLists;

    $URL = handleURL();

    foreach ($RouteLists as $route => $callback) {
        $route = array_values(array_filter(explode('/', $route)));


        if (count($URL) == count($route)) {
            $match = true;
            foreach ($route as $key => $value) {
                if (strpos($value, '{') !== false) {
                    continue;
                }
                if ($value !== $URL[$key]) {
                    $match = false;
                    break;
                }
            }

            if ($match) {
                $callbackParameters = [];

                foreach ($route as $key => $value) {
                    if (strpos($value, '{') !== false) {
                        $paramName = trim($value, '{}');
                        $callbackParameters[$paramName] = $URL[$key];
                    }
                }

                call_user_func_array($callback, $callbackParameters);
                return;
            }
        }
    }

    http_response_code(404);
    view('error/404', ['error' => '404 | Halaman tidak ditemukan']);
}

function view($view, $data = [])
{
    extract($data);
    require_once VIEW_PATH . $view . '.php';
}

function handleError($message)
{
    echo "Error: $message";
}
