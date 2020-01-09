<?php include 'connexion.php';

$id = $_GET["id"];

$query = 'DELETE FROM info WHERE id = ' .$id;

$preparedQuery = $dbConnection->prepare($query);

$preparedQuery->execute();

$infos = $preparedQuery->fetch();

?>