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
    $sql= $cnx -> prepare("select codeCine,nomCine,imageCine from cinema");
    $sql ->execute();

    foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
    {  
       
    echo "<p>".$ligne['codeCine']." - ".$ligne['nomCine']."</p>";
    echo "<img onclick=AfficherFilms('".$ligne['codeCine']."') src=".$ligne['imageCine'].">";
    
    }  
    ?>
    <div id="divFilms"></div>
    <div id="divActeurs"></div>
    </body>
    </html>




