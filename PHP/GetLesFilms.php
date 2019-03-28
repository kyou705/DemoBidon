<?php
    include 'cnx.php';
    
    $sql = $cnx->prepare("SELECT film.codeFilm,film.nomFilm,film.imageFilm,film.nbVotes,film.totalVotes from film,projeter where film.codeFilm = projeter.numFilm and projeter.numCinema = '".$_GET['numCine']."'");
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

    }

    ?>