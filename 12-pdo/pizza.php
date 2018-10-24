<?php
// On va crée une connection à la base de donnée
$db = new PDO('mysql:host=localhost;dbname=pizzastore;charset=utf8','root','',[PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);


//1.On va créer une requête pour récupérer la pizza qui a l'id 3

$query = $db -> query('select * from pizza where id= 3');
$pizza= $query->fetch();
var_dump($pizza);

//2.Récupérer l'id dynamiquement à partir de l'url 
// Exemple si je saisis pizza.php?id=7, je dois récupérer la pizza avec l'id 7

$id = $_GET['id'];

$query = $db->query('SELECT name FROM pizza WHERE id ='.$id);
$pizza = $query->fetch();
var_dump($pizza);