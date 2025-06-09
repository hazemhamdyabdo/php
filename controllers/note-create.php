<?php 

require '../Validator.php';

$header =  'Create Note';
$db = new Database($config['database']);
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $payload = $_POST['body'];
    
    

    if (!Validator::validate($payload,10,255)) {
        $errors['body'] = 'Body is required to be min 10 and max 255 characters';
    }   
    
    if (empty($errors)) {
        $db->query("INSERT INTO notes (body,user_id) VALUES (:body,:user_id)", [
            'body' => $payload,
            'user_id' => 1
        ]);
    }

    
}



require 'views/create-notes.view.php';

