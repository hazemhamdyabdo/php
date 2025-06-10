<?php
// phpinfo();
const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'functions.php';

spl_autoload_register(function ($class) {
    require base_path("core/{$class}.php");
});
$config = require base_path('config.php');
require base_path('router.php');
