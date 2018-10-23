<?php 
// On va crée une connection à la base de donnée
$db = new PDO('mysql:host=localhost;dbname=pizzastore;charset=utf8','root','');
// Permet de vérifier que la connexion à la BDD fonctionne
var_dump($db);
// On créer une requête pour récupérer les pizzas
$query = $db -> query('select * from pizza');

var_dump ($query);

//Pour récupérer une seule pizza
//$pizza= $query->fetch();
//var_dump($pizza);

// Récupérer toutes les pizzas
//$pizzas = $query->fetchAll();
//var_dump($pizzas);

// Parcourir toutes les pizzas avec le fetchall (Nom affiché dans un h1)

$pizzas = $query->fetchAll();

foreach ($pizzas as $pizza){
    echo '<h1>'.$pizza['name'].'</h1>';
}

$query = $db -> query('select * from pizza');

//Parcourir toutes les pizzas avec le fetch (Nom affiché dans un h)

while($pizza = $query->fetch()) {
    echo '<h2>'.$pizza['name'].'</h2>';
}

?>