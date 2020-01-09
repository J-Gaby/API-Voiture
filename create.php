<?php include 'connexion.php';

$ma = $_GET["marque"];
$mo = $_GET["modele"];
$ga = $_GET["gamme"];
$pr = $_GET["prix"];

$query = 'INSERT INTO info (marque, modele, gamme, prix) VALUES ("'.$ma.'","'.$mo.'", "' .$ga. '", "' .$pr. '")';

echo ($query);

$preparedQuery = $dbConnection->prepare($query);

$preparedQuery->execute();

$infos = $preparedQuery->fetch();

?>