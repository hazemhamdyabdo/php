<?php 

$header =  'notes';


$db = new Database($config['database']);

$query = "SELECT * FROM notes";

$notes = $db->query($query)->fetchAll();


require 'views/notes.view.php';