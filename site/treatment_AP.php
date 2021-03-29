<!DOCTYPE html>
<html>
<head>
	<?php
	 include("header_marche.php"); 
	?>

    <ul class="nav nav-tabs">
  
  <li role="presentation" class=" active"><a href="Add_Product.php" >Ajout d'une recette </a></li>
  <li role="presentation" ><a href="Add_Allergen.php">Ajout d'un allérgene</a></li>
  <li role="presentation"><a href="Delete_Product.php">Supprimer une recette</a></li>
  <li role="presentation"><a href="Config_Menu.php">Configurer les menus</a></li>
  <li role="presentation" ><a href="Add_Restaurant.php" >Ajout d'un nouveau restaurant </a></li>
  </ul>

</ul>

</head>
<body>

<?php

    $name = $_POST['name'];
    $allergen = $_POST['allergen'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $ingredient = $_POST['ingredient'];

    if($price > 0){

    $request = $bdd ->query(" INSERT INTO `vegnbio`.Plat (nom,prix,type,ingredient,allergene) VALUES ('".$name."','".$price."','".$type."','".$ingredient."','".$allergen."') ");
    //mysqli_free_result($request);
    echo 'Ajout avec succes !';
  }
  else
    echo "le prix saisi est negatif ! échec de l'opération "
   
?>

</body>
</html>