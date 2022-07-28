<?php 

require 'db.class.php';
require 'credential.php';

// Info User 
$mail = "NEW@mail.fr";
$pwd = "NEWsecret";
$pseudo = 'NEW';
$imageUrl = 'NEWUrl';

// Create
$table = 'user';
$fields = array('mail','pwd','pseudo','imageUrl');
$values = array($mail,$pwd,$pseudo,$imageUrl);

// Select 1 
$field = "msg";
$value = "123"; 
$tables = "message";
$valu = 'pas cool'; 
$field_id_message = "msg";
$id_msg = 4;

// SELECT UPDATE USER
$field_id = "user_id";
$id = 54;

$test = new Db();
$test -> connect($servername,$username,$password,$dbname);
$test -> create($table,$fields,$values);
$test -> selectOne($tables,$field, $id);
$test -> selectAll($tables,$field, $value);
// $test -> delete($tables,$field, $value);
$test ->update($table,$fields, $values,$id, $field_id);

?>