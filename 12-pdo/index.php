<?php 
// On va crée une connection à la base de donnée
$db = new PDO('mysql:host=localhost;dbname=pizzastore;charset=utf8','root','');
//Le try catch permet de faire quelque chose de particulier s'il y a une erreur
/*try {
	$db = new PDO('mysql:host=sql.docker;port=3366;dbname=pizzastore;charset=utf8', 'root', 'root', [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // Active les erreurs SQL,
		// On récupère tous les résultats en tableau associatif
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	]);
} catch(Exception $e) {
	echo $e->getMessage();
	// Redirection en PHP vers Google avec le message d'erreur concerné
	header('Location: https://www.google.fr/search?q='.$e->getMessage());
}*/
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