<?php 
// Inclusion du fichier config
require_once(__DIR__.'/../config/functions.php');

require_once(__DIR__.'/../config/config.php');

require_once(__DIR__.'/../config/database.php');
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/img/favicon.ico">
    <title>

    <?php 
    if(empty($currentPageTitle)) {// SI on est sur la page d'accueil
    echo $siteName. ' - Notre Pizzeria en ligne';
    }else { // si on est sur une autre page
        echo $currentPageTitle.' - '.$siteName;
    }
    ?>
    
    </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>


    <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
        <a class="navbar-brand" href="#">Pizza Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-pizzastore">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?= ($currentPageUrl === 'index') ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item <?= ($currentPageUrl === 'pizza_list') ? 'active' : ''; ?>">
                    <a class="nav-link" href="pizza_list.php">Liste des pizzas</a>
                </li>
            </ul>
        </div>
    </nav>
    