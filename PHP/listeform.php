<?php
    include 'cnx.php';
    
   /* $sql = $cnx->prepare("SELECT film.codeFilm,film.nomFilm,film.imageFilm,film.nbVotes,film.totalVotes from film,projeter where film.codeFilm = projeter.numFilm and projeter.numCinema = '".$_GET['numCine']."'");
    $sql->execute();
    echo "Les films";
    foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
    {
     

    echo "<p>".$ligne['codeFilm']." - ".$ligne['nomFilm']."</p>";
    echo "<img onclick=AfficherLesActeurs(".$ligne['codeFilm'].") src=".$ligne['imageFilm'].">";
    echo "<p>NbVotes=".$ligne['nbVotes']."Total=".$ligne['totalVotes']."</p>";
    echo "<p>";
    echo "<input type=button value=+1 onclick=Voter(".$ligne['codeFilm'].",1)></input>";
    echo "<input type=button value=+2 onclick=Voter(".$ligne['codeFilm'].",2)></input>";
    echo "<input type=button value=+3 onclick=Voter(".$ligne['codeFilm'].",3)></input>";
    echo "</p>";

    }*/
    include 'cnx.php';
    $sql= $cnx -> prepare("select idFormation,nomFormation,lieuFormation,prixFormation,dureeFormation from formation");
    $sql ->execute();

    foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
    {  
    
    echo "<table>";
    echo "<tr>";
    echo "<td>".$ligne['idFormation']." - ".$ligne['nomFormation']."-".$ligne['lieuFormation']."-".$ligne['prixFormation']."-".$ligne['dureeFormation']."</td>";
    
   // echo "<td><input type=button value='".$ligne['idFormation']."' onclick=Voter()></input></td>";
   // echo "<td><input type=button value='".$ligne['nomFormation']."' onclick=Voter()></input></td>";
   // echo "<td><input type=button value='".$ligne['lieuFormation']."' onclick=Voter()></input></td>";
   // echo "<td><input type=button value='".$ligne['prixFormation']."' onclick=Voter()></input></td>";
   // echo "<td><input type=button value='".$ligne['dureeFormation']."' onclick=Voter()></input></td>";
    echo "</tr>";
    echo "</table>";
    }


    ?>