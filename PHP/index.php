<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
    <script src="jquery-3.1.1.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>
    <?php
    include 'cnx.php';
    $sql= $cnx -> prepare("select idFormation,nomFormation,lieuFormation,prixFormation,dureeFormation from formation");
    $sql ->execute();



    echo "Gestion des formations";
    echo "<br>";
    echo "<br>";

    

    echo "<input type='button' value='Inscription' onclick=presence()>";
    echo "<input type='button' value='Présence' onclick=presence()>";
    

    ?>
    <div id="div1"></div>
    <div id="div2"></div>
    </body>
    </html>




