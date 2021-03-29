
	<?php

    function Price($db, $nom) {

      $statement = $db->prepare('SELECT * FROM Plat WHERE nom = ?');
      $statement->execute([$nom]);
      $donnees = $statement->fetch();
      return $donnees['prix'];
    }
    
    ?>

