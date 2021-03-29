<!DOCTYPE html>
<html>
<head>
	<?php
	 include("header_marche.php"); 
	?>

    <ul class="nav nav-tabs">
  
  <li role="presentation" ><a href="Add_Product.php" >Ajout d'une recette </a></li>
  <li role="presentation" ><a href="Add_Allergen.php">Ajout d'un allérgene</a></li>
  <li role="presentation"><a href="Delete_Product.php">Supprimer une recette</a></li>
  <li role="presentation"><a href="Config_Menu.php">Configurer les menus</a></li>
  <li role="presentation" class=" active"><a href="Add_Restaurant.php" >Ajout d'un nouveau restaurant </a></li>

</ul>

</head>
<body>

<?php

    $name = $_POST['name'];
    $adresse = $_POST['adresse'];
    $person = $_POST['person'];
    $table=$_POST['table'];
   

    if($table > 0){

    $request = $bdd ->query(" INSERT INTO `vegnbio`.restaurant (name,adresse,nbr_person,nbr_table) VALUES ('".$name."','".$adresse."','".$person."','".$table."') ");
    mysqli_free_result($request);
    echo 'Ajout avec succes !';
  }
  else
    echo "le nombre de table saisi est négatif ! échec de l'opération "
   
?>

</body>
</html>