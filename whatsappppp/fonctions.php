<?php
require 'db.class.php';
require 'credential.php';

$db = new Db();
$db -> connect($servername,$username,$password,$dbname);

$dbco = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8","$username","$password");

function moncompte()
{
    $mail = $_SESSION["mail"];
    return load_compte($mail);
}  

function load_compte($mail)
{
    global $db;
    $table = "user";
    $field = "mail";
    $value = $mail;

    $compte = $db -> selectOne($table, $field,$value);
    $compte['discussions'] = [];
  // $moncompte = "SELECT user_id, mail, "

  //   $compte = $dbco ->  prepare("SELECT u.user_id,u.mail,u.pseudo,d.discussion_id
  //                               FROM $table u
  //                               LEFT JOIN Participants p ON u.user_id = p.user_id
  //                               LEFT JOIN Discussion d ON p.discussion_id = d.discussion_id  
  //                               WHERE $field = '$value'
  //                               ");
    return $compte;


}

function save_moncompte($compte){
    $mail = $_SESSION["mail"];
    save_compte($compte,$mail);
}

function save_compte($compte,$mail){
    $filepath= __DIR__ . "/accounts/$mail";
    file_put_contents($filepath,json_encode( $compte)  );
}

function add_discussion($discussion_id,$mail)
{
    $compte=load_compte($mail);
    array_push($compte["discussions"],$discussion_id);
    save_compte($compte,$mail);
}


function get_discussions()
{
            $moncompte= moncompte();
            $discussions= $moncompte["discussions"];
            $resultats=[];
            foreach( $discussions as $discussion_id)
            {if(!file_exists("discussions/$discussion_id"))continue;
              $discussion = json_decode(  file_get_contents("discussions/$discussion_id"),true);
              $discussion["id"]= $discussion_id;
                  //on parcourt les messages de cette discussion et on crée un received s'il n'esxiste pas et si on n'est pas l'auteur du message
                  $blnsave=false;
                  $update =[];
                foreach ($discussion["messages"] as $message){
                  if($message["author"]!=$_SESSION["mail"] && !isset($message["received"])){
                      $message["received"]=date("Y-m-d M:i:s");
                      $blnsave=true;
                  }
                  array_push($update,$message);
                }
  
                if($blnsave==true){
                  $discussion["messages"]=$update;
                  file_put_contents("discussions/$discussion_id",json_encode($discussion));
                }


              $last_message= $discussion["messages"][ count($discussion["messages"]) -1 ];
              $discussion["last"]=$last_message;
              unset($discussion["messages"]);
              array_push($resultats,$discussion);
            }
            return $resultats;
}