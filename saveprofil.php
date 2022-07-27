<?php
session_start();
require_once("fonctions.php");

$compte= moncompte();

$url = $_POST["url"];
$pseudo = $_POST["pseudo"];

$compte["url"]=$url;
$compte["pseudo"]=$pseudo;


save_moncompte($compte);

header('Location: ./profil.php');

?>