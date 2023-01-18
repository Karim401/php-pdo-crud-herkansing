<?php

require('config.php');


$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo =  new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
        // echo "Er is een verbinding met de database";
    } else {
        echo "Interne server-error";
    }
} catch(PDOException $e) {
    echo $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    var_dump($_POST);

    exit();
}


$sql = "SELECT Id
              ,Naamachtbaan
              ,NaampretPark
              ,Land
              ,Topsnelheid
              ,Hoogte
        FROM Achtbaan
        WHERE Id = :Id";

$statement = $pdo->prepare($sql);


$statement->bindValue(':Id', $_GET['Id'], PDO::PARAM_INT);


$statement->execute();

$result = $statement->fetch(PDO::FETCH_OBJ);







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Herkansing</title>
</head>
<body>
    <h1>De  5 snelste achtbanen van Europa </h1>
    
    <form action="update.php" method="post">

        <label for="naamachtbaan">NaamAchtbaan:</label><br>
        <input type="text" name="naamachtbaan" id="naamachtbaan" value="<?= $result->naamachtbaan; ?>"><br>
        <br>
        <label for="naampretpark">NaampretPark:</label><br>
        <input type="text" name="naampretpark" id="naampretpark" value="<?= $result->naampretpark; ?>"><br>
        <br>
        <label for="land">Het Land:</label><br>
        <input type="text" name="land" id="land" value="<?= $result->land; ?>"><br>
        <br>
        <label for="topsnelheid">Topsnelheid:</label><br>
        <input type="number" name="topsnelheid" id="topsnelheid" value="<?= $result->lopsnelheid; ?>"><br>
        <br>
        <label for="hoogte">Het Hoogte:</label><br>
        <input type="number" name="hoogte" id="hoogte" value="<?= $result->loogte; ?>"><br>
        <br>
        <input type="submit" value="Verstuur!">        

    </form>
    
</body>
</html>
