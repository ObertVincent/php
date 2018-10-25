<?php
// On créer une connection à la BDD
//$db = new PDO('mysql:host=localhost;dbname=pizzastore;charset=utf8','root','');
//var_dump($db);

//$query = $db -> query('select * from pizza');

//var_dump ($query);
// Le try catch permet de faire quelque chose de particulier s'il y a une erreur
try {
	$db = new PDO('mysql:host=localhost;dbname=pizzastore;charset=utf8', 'root', '', [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // Active les erreurs SQL,
		// On récupère tous les résultats en tableau associatif
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	]);
} catch(Exception $e) {
	echo $e->getMessage();
	// Redirection en PHP vers Google avec le message d'erreur concerné
    echo '<img src="assets/img/punicher.gif">';
    die('Stop'); //Arrête le script si la base de donnée n'est pas dispo
}

?>