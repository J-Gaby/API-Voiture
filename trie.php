<?php include 'connexion.php';

if (!empty($_GET["marque"]) && isset($_GET["marque"])){
    $ma = $_GET["marque"];
    $query = 'SELECT * FROM info WHERE marque = "' .$ma. '"';

    $preparedQuery = $dbConnection->prepare($query);

    $preparedQuery->execute();

    $infos = $preparedQuery->fetchall();

    echo json_encode($infos);
}elseif (!empty($_GET["gamme"]) && isset($_GET["gamme"])) {
    $ga = $_GET["gamme"];
    $query = 'SELECT * FROM info WHERE gamme = "' .$ga. '"';

    $preparedQuery = $dbConnection->prepare($query);

    $preparedQuery->execute();

    $infos = $preparedQuery->fetchall();

    echo json_encode($infos);
}elseif (!empty($_GET["modele"]) && isset($_GET["modele"])) {
    $mo = $_GET["modele"];
    $query = 'SELECT * FROM info WHERE modele = "' .$mo. '"';

    $preparedQuery = $dbConnection->prepare($query);

    $preparedQuery->execute();

    $infos = $preparedQuery->fetchall();

    echo json_encode($infos);
}elseif (!empty($_GET["prix"]) && isset($_GET["prix"])) {
    $pr = $_GET["prix"];
    $query = 'SELECT * FROM info WHERE prix = "' .$pr. '"';

    $preparedQuery = $dbConnection->prepare($query);

    $preparedQuery->execute();

    $infos = $preparedQuery->fetchall();

    echo json_encode($infos);
}

?>