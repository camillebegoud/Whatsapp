<?php
session_start();
require_once("fonctions.php");
require 'credential.php';

$compte= moncompte();

$url = $_POST["url"];
$pseudo = $_POST["pseudo"];
$_SESSION['compte']
$id = $compte['user_id'];

$table = 'user';
$fields = array('imageUrl','pseudo');
$values = array($url,$pseudo);

$field_id='user_id';

$db -> update($table,$fields,$values,$id, $field_id);

header('Location: ./profil.php');

?>