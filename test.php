<?php

require 'db.class.php';
require 'config.php';


$mail = "test@mail.fr";
$pwd = "testsecret";

$table = 'users';
$column = 'mail,pwd,pseudo,imageUrl';

$test = new Db();
$test->connect($servername, $username, $password, $dbname);
// $test->select_one($table, 'user_id', 1);
// $test->select_all('messages', 'auteur', 'mina');
// $test->delete('messages', 'message', 'bonjour');
// $test->update($table, 'pseudo', "coquille", 'user_id', 1);
// $test->update($table, array('pseudo', 'imageUrl'), array("coquille", "imagetest"), 1, 'user_id');
// $test->create($table, array('mail', 'pwd', 'pseudo', 'imageUrl'), array("test@mail.fr", "testsecret", "test", "imagetest"));

$mail = "NEW@mail.fr";
$pwd = "NEWsecret";
$pseudo = 'NEW';
$imageUrl = 'NEWUrl';
$id= 1;
$field_id = 'user_id';

// Create
$fields = array('mail','pwd','pseudo','imageUrl');
$values = array($mail,$pwd,$pseudo,$imageUrl);

$test ->update($table, $fields, $values,$id, $field_id );