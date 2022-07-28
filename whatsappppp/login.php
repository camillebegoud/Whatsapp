<?php
session_start();
require 'db.class.php';
require 'credential.php';

$mail = $_POST['mail'] ;
$pwd = $_POST['pwd'];

$table = 'user';
$field = 'mail';
$value = $mail;

$db = new Db(); // création de la nouvelle instance de Db 
$db -> connect($servername,$username,$password,$dbname); // connexion à la base de données
$user = $db -> selectOne($table,$field,$value); // on trouve le mail = $POST_['mail']


// On fait une condition si le mail est vide 
if(!empty($user) ){ 
$field = 'pwd';
$value = $pwd;

$user = $db -> selectOne($table,$field,$value);

    if(!empty($user)){                       // On fait une condition si le mdp est vide 
        $_SESSION['mail'] = $mail;
        header('location:./profil.php');
    }
    else{
        header('location: ./login.html?errorpwd=true'); // sert à faire une redirection 
    }
}
else{
    header('location: ./login.html?errormail=true');
} 





    // header('Location: ./login.html');
?>