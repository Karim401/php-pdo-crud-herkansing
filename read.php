<?php
 
  require('config.php');

  $dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

  try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
    
    } else {
        echo "Interne server-error";
    }
  } catch(PDOException $e) {
    echo $e->getMessage();
  }


  $sql = "SELECT Id
                ,Naamachtbaan
                ,Naampretpark
                ,Land
                ,Topsnelheid
                ,Hoogte
          FROM Achtbaan
                         ";

  
  $statement = $pdo->prepare($sql);

 
  $statement->execute();

  
  $result = $statement->fetchAll(PDO::FETCH_OBJ);



  $rows = "";
  foreach ($result as $info) {
    $rows .= "<tr>
                <td>$info->Naamachtbaan</td>
                <td>$info->Naampretpark</td>
                <td>$info->Land</td>
                <td>$info->Topsnelheid</td>
                <td>$info->Hoogte</td>
                <td>
                    <a href='delete.php?Id=$info->Id'>
                        <img src='img/b_drop.png' alt='kruis'>
                    </a>
                </td>
              </tr>";
  }
  



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HerkansingnToets</title>
</head>
<body>
    <h3>De vijf snelste achtbanen van Europa</h3>
    <table border='1'>
        <thead>
            <th>naamachtbaan</th>
            <th>naampretpark</th>
            <th>land</th>
            <th>topsnelheid</th>
            <th> hoogte</th>
            <th>Delete</th>
        </thead>
    
        <tbody>
            <?= $rows; ?>
        </tbody>
    </table>
</body>
</html>

