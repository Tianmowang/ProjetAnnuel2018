
	<?php
  
    function Menu_Day($db, $id) {

      $statement = $db->prepare('SELECT * FROM Menu WHERE id = ?');
      $statement->execute([$id]);
      $data = $statement->fetch();
      return " Dans  le Menu du Jour : </br> Entrée :  " . $data['entree'] . " </br> Plat : " .  $data['plat']. " </br> Dessert : " .  $data['dessert'] . " </br> Pour un total de 25 euros ";
    }
    
    ?>

