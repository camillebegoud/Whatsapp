<?php
session_start();

$mail = $_POST["mail"];
$pwd = $_POST["pwd"]; 

$filepath= "accounts/$mail";
//Verification si le compte existe 
if( file_exists($filepath)  )
{
    header('Location: ./signup.html');
    exit;
}

$compte = [
"mail"=>$mail,
"pwd"=>$pwd,
"discussions"=>[]
];

file_put_contents($filepath,json_encode( $compte)  );



// Connexion directe après inscription
$_SESSION["mail"]= $_POST["mail"];



header('Location: ./index.php');

?>