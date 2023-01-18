<?php

require('config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);

    if ($pdo) {
        
    } else {
        echo "Er is een interne server-error, neem contact op met de beheerder";
    }

} catch(PDOException $e) {
    echo $e->getMessage();
}


 
$sql = "INSERT INTO Achtbaan (Id
                            ,Naamachtbaan
                            ,Naampretpark
                            ,Land
                            ,Topsnelheid
                            ,Hoogte)
        VALUES              (NULL
                            ,:naamachtbaan
                            ,:naampretpark
                            ,:land
                            ,:topsnelheid
                            ,:hoogte);";

$statement = $pdo->prepare($sql);

$statement->bindValue(':naamachtbaan', $_POST['naamachtbaan'], PDO::PARAM_STR);
$statement->bindValue(':naampretpark', $_POST['naampretpark'], PDO::PARAM_STR);
$statement->bindValue(':land', $_POST['land'], PDO::PARAM_STR);
$statement->bindValue(':topsnelheid', $_POST['topsnelheid'], PDO::PARAM_STR);
$statement->bindValue(':hoogte', $_POST['hoogte'], PDO::PARAM_STR);


$result = $statement->execute();

if ($result) {
    echo "Er is een nieuw record gemaakt in de database.";
    header('Refresh:2; url=read.php');
} else {
    echo "Er is geen nieuw record gemaakt.";
    header('Refresh:2; url=read.php');
}
 