<?php

session_start();//recupere les donnees de l'email
session_destroy();// supprime toutes les donnees

header ("Location:./index.php");//redirige vers la page d'accueil
?>