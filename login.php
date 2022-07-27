<?php
session_start();
$mail = $_POST['mail'] ;
$pwd = $_POST['pwd'];

$filepath="accounts/$mail";
if (file_exists($filepath)) {   
    
    $compte = json_decode(file_get_contents($filepath),true);

    //compare si le dossier avec le mail existe
        if($pwd==  $compte["pwd"] )    //compare si les mdp correspondent
        {
            $_SESSION["mail"] = $mail;          //sauvegarde $_session[mail]
           header('Location: ./index.php');
        }
        else {
            header('Location: ./login.html');
        }

} else {

    header('Location: ./login.html');
}
?>