<?php
    include 'cnx.php';
    
    $sql = $cnx->prepare("select acteur.codeActeur, acteur.nomActeur, acteur.imageActeur
    from acteur, jouer
    where acteur.codeActeur = jouer.numActeur
    and jouer.numFilm =".$_GET['numFilm']);
    $sql->execute();
    echo "Les acteurs";
    foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
    {
    echo "<p>".$ligne['codeActeur']." - ".$ligne['nomActeur']."</p>";
    echo "<img  src=".$ligne['imageActeur'].">";
    }

    ?>