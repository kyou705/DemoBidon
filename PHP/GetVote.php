<?php
    include 'cnx.php';
    
    //mettre à jour le nb de vote
    $sql = $cnx->prepare("update film
    SET nbVotes = nbVotes + 1
    WHERE codeFilm='".$_GET['numFilm']."' ");
    $sql->execute();
   
    //mettre à jour le total des votes
    $sql = $cnx->prepare("update film set totalVotes = totalVotes + ".$_GET['vote']." where codeFilm='".$_GET['numFilm']."' " );
    $sql->execute();
   
    ?>