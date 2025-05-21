<?php
require 'functions.php';

// require 'router.php';


// connect to database

$dsn = "mysql:host=localhost;dbname=myapp;charset=utf8mb4;port=3306";

$pdo = new PDO($dsn, 'root', '1234');
 
$statement= $pdo->prepare("SELECT * FROM posts");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

dd($result);


class Person {
    public $name;
    public $age;

   public function breathe(){
    echo  $this->name .  ' is breathing';

    
   }
}

$person = new Person();
$person->name = 'Hazem';
$person->age = '25';
$person->breathe();