<?php
    session_start();

    require_once("fonctions.php");

    require 'user.class.php';
    require 'message.class.php';
    require 'conversation.class.php';
    require 'me.class.php';


if(!isset($_GET["action"]))
{
    exit;
}

switch($_GET["action"])
{
    case "get_contacts":

    $me = Me::loadme();
    echo $me->get_contact();
    break;
    case "send_message":
    $post =  file_get_contents("php://input");
    $info= json_decode($post,true);
    $msg = $info["msg"];
    $message = Me::loadme();
    // Renvoie la methode send_message et verifie si il y a déja une discussions ou non
    $message->send_message($msg,
    isset($_GET["to"])?$_GET['to']:null,
    isset($_GET["discussion_id"])?$_GET['discussion_id']:null);
    $reponse["discussion_id"]=$discussion_id;
    $compte= moncompte();
    $reponse["discussions"]=$compte["discussions"];
    // $message = new Message($received,$send,$read,$author,$msg);
    // echo $message->send_message();
    break;
    case "get_messages":
    $message = new Message($received,$send,$read,$author,$msg);  
    break;
    case "get_discussions":
    $conversation = new conversation($messages,$participant,$id); 
    break;
    case "refresh":
    break;




} 
?>