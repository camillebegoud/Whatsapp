<?php
session_start();
require_once("fonctions.php");
require 'credential.php';

$compte= moncompte();

$url = $_POST["url"];
$pseudo = $_POST["pseudo"];

$id = $compte['user_id'];

$table = 'user';
$fields = array('imageUrl','pseudo');
$values = array($url,$pseudo);

$field_id='user_id';

$db -> update($table,$fields,$values,$id, $field_id);


$verifpseudo = moncompte();
$_SESSION['pseudo'] = $verifpseudo['pseudo'];

header('Location: ./profil.php');

?>