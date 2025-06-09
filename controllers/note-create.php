<?php 
$header =  'Create Note';
$db = new Database($config['database']);
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $payload = $_POST['body'];
    
    

    if (strlen($payload) === 0) {
        $errors['body'] = 'Body is required';
    } else if (!is_string($payload)) {
        $errors['body'] = 'Body must be a string';
    }else if (strlen($payload) < 10) {
        $errors['body'] = 'Body must be at least 10 characters long';
    } else if (strlen($payload) > 255) {
        $errors['body'] = 'Body must be at most 255 characters long';
    }
    
    if (empty($errors)) {
        $db->query("INSERT INTO notes (body,user_id) VALUES (:body,:user_id)", [
            'body' => $payload,
            'user_id' => 1
        ]);
    }

    
}



require 'views/create-notes.view.php';

