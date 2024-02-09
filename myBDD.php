<?php

$host="localhost";
$db_name="blogart24";
$login="root";
$password="";

try{
	$bdd = new PDO('mysql:host='.$host.';
	dbname='.$db_name, $login, $password);
}catch (Exception $e){
	die('Erreur : ' . $e->getMessage());
}
$bdd->exec("SET NAMES UTF8");

date_default_timezone_set('Europe/Paris');
ini_set("display_errors", 1);

?>