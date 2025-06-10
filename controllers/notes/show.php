<?php
$config = require base_path('config.php');
$header =  'note';
$currentUserId = 1; // $_SESSION['id']


$db = new Database($config['database']);
$query = "SELECT * FROM notes WHERE id = :id";
$note = $db->query($query, ['id' => $_GET['id']])->findAndFail();



authorize($note['user_id'] === $currentUserId);

require view('notes/show.view.php');
