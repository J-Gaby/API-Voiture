<?php include 'connexion.php';

$id = $_GET["id"];
$ma = $_GET["marque"];
$mo = $_GET["modele"];
$ga = $_GET["gamme"];
$pr = $_GET["prix"];

$query = 'UPDATE info SET marque = :marque, modele = :modele, gamme = :gamme, prix = :prix WHERE id = :id';

$preparedQuery = $dbConnection->prepare($query);

$preparedQuery->bindParam(":marque",$ma);
$preparedQuery->bindParam(":modele",$mo);
$preparedQuery->bindParam(":gamme",$ga);
$preparedQuery->bindParam(":prix",$pr);
$preparedQuery->bindParam(":id",$id);

$preparedQuery->execute();

?>