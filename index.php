<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP HerkansingnToets</title>
</head>
<body>
    <h1>De 5 snelste achtbanen van Europa</h1>
    
    <form action="create.php" method="post">

        <label for="naamachtbaan">NaamAchtbaan:</label><br>
        <input type="text" name="naamachtbaan" id="naamachtbaan"><br>
        <br>
        <label for="naampretpark">NaamPretpark:</label><br>
        <input type="text" name="naampretpark" id="naampretpark"><br>
        <br>
        <label for="land">Het Land:</label><br>
        <input type="text" name="land" id="land"><br>
        <br>
        <label for="topsnelheid">Topsnelheid:</label><br>
        <input type="number" name="topsnelheid" id="topsnelheid"><br>
        <br>
        <label for="hoogte">Het Hoogte:</label><br>
        <input type="number" name="hoogte" id="hoogte"><br>
        <br>
        <input type="submit" value="Verstuur!">        
    </form>

</body>
</html>