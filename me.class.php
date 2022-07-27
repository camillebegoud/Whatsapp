<?php

class Me extends User
{

    protected $pass;

    public function __construct($newpseudo, $newurl, $newmail,$newpass,$newdiscussions){
        parent::__construct($newpseudo, $newurl, $newmail, $newdiscussions);
        $this-> pass = $newpass;
    }


    public function get_contact(){// fonction dèja crée dans le api.php (ancien code) on utilise chaque fonction(ou bien applé méthode)dans la class correspondante
        $contacts=[];
    $files = scandir("accounts");
    foreach( $files  as $file  )
    {
    if($file!="." && $file!=".." && $file!=$_SESSION["mail"])
    {
        $compte= self::load($file);
        if(!isset($compte["pseudo"]) || !isset($compte["url"]) ) continue;
        unset($compte["pwd"]);
        unset($compte["discussions"]);
        array_push($contacts,$compte);
    }
    } 

    return json_encode($contacts);
    }
    public function get_discussions(){

    }
    public function send_message($msg,$to,$discussion_id){
        date_default_timezone_set('Europe/Paris');
    $date = new DateTime();
    
    $reponse=[];
    if($to)
    {
        //Nouvelle discussion
        $discussion = Conversation::create($to);
    }
    else if($discussion_id)
    {
        $discussion = Conversation ::load($discussion_id);
    }
    //
    $message = new Message($msg, $this -> mail,date("Y-m-d H:i:s"),null,null );
    $discussion -> add_message($message);
    file_put_contents("discussions/$discussion_id",json_encode($discussion));
    
    // Renvoyer les messages de la discussion courante
    
    $reponse["discussion"]=$discussion;
    
    echo json_encode($reponse);
    }
    // public function tojson(){
    // return json_encode ();
    // }




    public static function loadme(){ //  fonction statique avec une constante
         $mail = $_SESSION['mail'];
        $filepath= __DIR__ . "/accounts/$mail";
        if (file_exists($filepath)) {    
            $compte = json_decode(file_get_contents($filepath),true);
            $me= new Me($compte['pseudo'],$compte['url'],$compte['mail'],$compte['pwd'],$compte['discussions']);
        }
        return $me;
        }

        public function save(){
    
            $filepath= __DIR__ . "/accounts/". $this -> mail;
            $compte = json_decode(file_get_contents($filepath),true);
    
            $compte['pseudo'] = $this -> pseudo;
            $compte['url'] = $this -> url;
            $compte['mail'] = $this -> mail;
            $compte['pwd'] = $this -> pass;
    
            file_put_contents($filepath,json_encode( $compte)  );
            
    
        }
        
    
}


?>