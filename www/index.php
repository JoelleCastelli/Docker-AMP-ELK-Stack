<?php

$pdo = new \PDO("mysql:host=database; dbname=docker; port=3306; charset=UTF8", "root", "password");
$sth = $pdo->prepare("SELECT name FROM users where id = 1");
$sth->execute();
$name = $sth->fetchColumn();


echo "<h1 style='color: deeppink'>Hello $name</h1>"


?>
