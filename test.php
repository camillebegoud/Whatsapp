<?php

require 'db.class.php';

$servername = "localhost";
$username = "admin";
$password = "azerty";
$dbname = "whatsapp";

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
$test->update($table, array('pseudo', 'imageUrl'), array("coquille", "imagetest"), 1, 'user_id');
// $test->create($table, array('mail', 'pwd', 'pseudo', 'imageUrl'), array("test@mail.fr", "testsecret", "test", "imagetest"));
