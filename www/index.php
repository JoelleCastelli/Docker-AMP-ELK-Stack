<?php

$pdo = new \PDO("mysql:host=database; dbname=docker; port=3306; charset=UTF8", "root", "password");
$sth = $pdo->prepare("SELECT name FROM users where id = 1");
$sth->execute();
$name = $sth->fetchColumn();


echo "<h1 style='color: deeppink'>Hello $name</h1>";

$redis = new Redis();
$redis->connect("redis", 6379);
echo "<div>Le serveur Redis est lancé : " . $redis->ping()."</div>";


$redis->lpush("contributors", "Coraline");
$redis->lpush("contributors", "Joëlle");
$contributors = $redis->lrange("contributors", 0 ,1);

echo "<br><div>";
echo "Contributeurs :";
echo "<ul>";
foreach ($contributors as $contributor) {
    echo "<li>".$contributor;
}
echo "</ul>";
echo "</div>";

?>
