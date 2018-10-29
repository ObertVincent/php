<?php
//On veut utliser les sessions sur la page
session_start(); 

// Le tableau est vide la première fois
var_dump($_SESSION); 

$countries = ['fr','it'];

//J'atoute des pays dans la session
$_SESSION['countries'] = $countries;
//Permet de supprimer un élément d'une session.
unset($_SESSION['countries']);

/* session_destroy(); Attention, supprime toute la session  */

// La session doit contenir tous les pays
var_dump($_SESSION);

//Pour les cookies (session qui dure indéfiniment et sur la machine cliente)
var_dump($_COOKIE);
//$_COOKIE['cookie'] = 'test';
setcookie('cookie','test', time()+60*60*24*365);

// détruire un cookie
setcookie('cookie',null, time()-60*60*24*365);
?>