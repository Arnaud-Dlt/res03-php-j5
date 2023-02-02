<?php 

require 'user.php';

$db = new PDO(
    "mysql:host=db.3wa.io;port=3306;dbname=arnauddeletre_phpj5",
    "arnauddeletre",
    "900979afbcfa4468bcb42cce8d75b844"
);

$query=$db->prepare("SELECT * FROM users");
$query->execute();
$user = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($user);

$newUser = new User ("Clark", "Kent","clark.kent@test.fr");

var_dump($newUser);


?>