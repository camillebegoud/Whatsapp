<?php

    class Conversation
    {
        protected $messages=[];
        protected $participants=[];
        protected $id;

        public function __construct($_messages, $_participants, $_id)
        {
            $this-> messages = $_messages;
            $this-> participants = $_participants;
            $this-> id = $_id;
        }
        
        public static function create($to){
            $date = new DateTime();
            $discussion_id= $_SESSION["mail"] . "_" . $date->getTimestamp();
            $me = Me::loadme();
            $other = User::load($to);  

            $me -> add_discussion($discussion_id);
            $other -> add_discussion($discussion_id);
             
        
        // Renvoyer les discussions

        $discussion = new Conversation([],[$to,$_SESSION['mail']],$discussion_id);
        return $discussion;
        }

        public function get_messages()
        {        

        }
        public function add_message(Message $message)
        {
          array_push(  $this->messages,[
                "author"=>$message ->author,
                "msg"=>$message->msg,
                "date"=>$message->send
          ]);
          $this->save();

        }

        public static function load($discussion_id){ //  fonction statique avec une constante
      
                $discussion= json_decode(file_get_contents("discussions/$discussion_id") ,true);
                $conversation= new Conversation($discussion['messages'],$discussion['participants'],$discussion_id);
            return $conversation;
        }
        public function save(){
    
            $filepath="discussions/". $this -> id;
            $conversation = json_decode(file_get_contents($filepath),true);
    
            $conversation['messages'] = $this -> messages;
            $conversation['participants'] = $this -> participants;

    
            file_put_contents($filepath,json_encode( $conversation)  );
            
    
        }
        
   // public function tojson(){
    // return json_encode ();
    // }
        
     }
    
?>