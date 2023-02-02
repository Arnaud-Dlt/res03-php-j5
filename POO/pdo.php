<?php 

require 'user.php';

//CONNEXION BDD
$db = new PDO(
    "mysql:host=db.3wa.io;port=3306;dbname=arnauddeletre_phpj5",
    "arnauddeletre",
    "900979afbcfa4468bcb42cce8d75b844"
);

//EX1
$user = [
    "firstName" => "Clark",
    "lastName" => "Kent",
    "email" => "clark.kent@test.fr"
];

$newUser = new User ($user["firstName"], $user["lastName"],$user["email"]);

//EX2
$query=$db->prepare("SELECT * FROM users");
$query->execute();
$user1 = $query->fetch(PDO::FETCH_ASSOC);

$newuser1 = new User($user1["first_name"],$user1["last_name"],$user1["email"]);

// EX3,4
$query=$db->prepare("SELECT * FROM users");
$query->execute();
$users = $query->fetchAll(PDO::FETCH_ASSOC);

$tabUsers = [];

for($i=0;$i<count($users);$i++){
    $user=new User($users[$i]["first_name"], $users[$i]["last_name"], $users[$i]["email"]);
    $user->setId($i);
    array_push($tabUsers, $user);
}


$query=$db->prepare("INSERT INTO users VALUES (null, :first_name, :last_name, :email)");
$parameters = [
    'first_name' => $newUser -> getFirstName(),
    'last_name' => $newUser -> getLastName(),
    'email' => $newUser -> getEmail()
    ];
$query -> execute($parameters);
var_dump($tabUsers);






?>