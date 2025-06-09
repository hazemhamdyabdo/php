<?php
// phpinfo();
// require 'router.php';
require 'functions.php';
require 'Database.php';


$db = new Database();
$posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $key => $value) {
    echo "<li>" . $value['title'] . "</li>";
}
