<?php 

$uri  = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = require 'routes.php';

require $routes[$uri] ?? abort(404);