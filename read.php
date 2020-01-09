<?php include 'connexion.php';

$id = $_GET["id"];

$query = 'SELECT * FROM info WHERE id= ' .$id;

echo ($query);

// $preparedQuery = $dbConnection->prepare($query);

// $preparedQuery->execute();

// $infos = $preparedQuery->fetch();

// echo json_encode($infos);

?>