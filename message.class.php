<?php

class Message
{
public $received;
public $send;
public $read;
public $author;
public $msg;

public function __construct( $newauthor,$newmsg,$newsend,$newreceived, $newread, ){
    $this-> received = $newreceived; 
    $this-> send = $newsend;
    $this-> read = $newread; 
    $this-> author = $newauthor;
    $this-> msg = $newmsg;
}
public function add_message(){
}
    // public function tojson(){
    // return json_encode ();
    // }
}
?>