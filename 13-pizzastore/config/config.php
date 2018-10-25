<?php

/*
|--------------------------------------------------
|Config file
|--------------------------------------------------
|
| Ce fichier contiendra nos variales "globales" pour notre site.
| Titre du site, titre de la page, page courante, ...
|
*/

$siteName ='Pizza Store';

//Si request_uri vaut /home/totp/fichier.php, $ page renverra fichier

$currentPageUrl = basename($_SERVER['REQUEST_URI'],'.php');