<?php

function dd(...$args)
{
    echo '<pre> ';
    var_dump($args);
    echo '</pre>';
    die();
}

function usrIf($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}


function abort($code = 404)
{
    http_response_code($code);

    // require base_path("/views/{$code}.php");
    require "views/{$code}.php";

    die();
}

function authorize($condition, $code = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($code);
    }
}




function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path)
{
    return base_path("/views/{$path}");
}
