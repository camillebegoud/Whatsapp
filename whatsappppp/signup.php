<?php
session_start();
require 'db.class.php';
require 'credential.php';

$mail = $_POST["mail"];
$pwd = $_POST["pwd"]; 
$table = "user";
$field = "mail";


$db = new Db();
$db -> connect($servername,$username,$password,$dbname);

//Verification si le compte existe 

$user = $db -> selectOne($table,$field,$mail);



if(empty($user) ){
$fields = array("mail","pwd");
$values = array($mail,$pwd);

$db -> create($table,$fields,$values);
$_SESSION["mail"]= $_POST["mail"];
header('location:./login.html');
}
else{
header('location: ./signup.html');
}
// Connexion directe après inscription



?>