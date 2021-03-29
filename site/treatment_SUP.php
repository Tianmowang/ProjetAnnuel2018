<!DOCTYPE html>
<html>
<head>
    <?php
     include("header_marche.php"); 
    ?>
  <ul class="nav nav-tabs">
  <li role="presentation"><a href="Add_Product.php" >Ajout d'une recette </a></li>
  <li role="presentation" ><a href="Add_Allergen.php">Ajout d'un allérgene</a></li>
  <li role="presentation" class=" active"><a href="Delete_Product.php">Supprimer une recette</a></li>
  <li role="presentation"><a href="Config_Menu.php">Configurer les menus</a></li>
  <li role="presentation" ><a href="Add_Restaurant.php" >Ajout d'un nouveau restaurant </a></li>
  </ul>
  </ul>

</head>
<body >

<?php

    $name = $_POST['name'];
    $answer = $bdd ->query("DELETE FROM `vegnbio`.Plat WHERE nom ='".$name."' ");
    //mysqli_free_result($answer);
    echo 'Suppression succes !';
   
?>

</body>
</html>