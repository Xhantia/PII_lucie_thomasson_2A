<?php

// Fonction de connexion à la BDD
function getDb()
{
    // Deployement local
    $server = "localhost";
    $username = "BlogAutrice_user";
    $password = "secret";
    $db = "blogautrice";
	
	// Deployement sur 000webhost
	// $server = "localhost";
    // $username = "id13262033_utilisateur";
    // $password = "lCO||9At*5kwURPp";
    // $db = "id13262033_aniquizzcrossingbdd";

    return new PDO("mysql:host=$server;dbname=$db;charset=utf8", "$username", "$password",
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
?>
