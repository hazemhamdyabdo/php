<?php 
$header =  'Create Note';
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $db->query("INSERT INTO notes (body,user_id) VALUES (:body,:user_id)", [
        'body' => $_POST['body'],
        'user_id' => 1
    ]);

    
}



require 'views/create-notes.view.php';

