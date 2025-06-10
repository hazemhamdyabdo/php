<?php

$header =  'notes';

$db = new Database($config['database']);

$query = "SELECT * FROM notes";

$notes = $db->query($query)->getAll();


require view('notes/index.view.php');
