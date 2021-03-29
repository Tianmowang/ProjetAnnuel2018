<!DOCTYPE html>
<html>
<head>
	<?php
	 include("header_marche.php"); 
	?>
  <ul class="nav nav-tabs">
  <li role="presentation"><a href="Add_Product.php" >Ajout d'une recette </a></li>
  <li role="presentation"  class=" active"><a href="Add_Allergen.php">Ajout d'un allérgene</a></li>
  <li role="presentation"><a href="Delete_Product.php">Supprimer une recette</a></li>
  <li role="presentation"><a href="Config_Menu.php">Configurer les menus</a></li>
  <li role="presentation" ><a href="Add_Restaurant.php" >Ajout d'un nouveau restaurant </a></li>
  </ul>
  
</head>
<body>

<?php
if (isset($_POST['name']) && isset($_POST['allergen'])) {
    $name = $_POST['name'];
    $allergen_Rec= $_POST['allergen']; //l'allergene qu'on a recu de la page Ajout_ALlergene celui qu'il faudra ajouter au reste
    $answer = $bdd -> query(" SELECT * FROM `vegnbio`.Plat  WHERE nom ='".$name."' ");
    $data = $answer->fetch();
    $allergen_Exp=$data['allergene']; //l'allergene Exporter depuis la BDD
    $allergene = "$allergen_Exp" . " " . "$allergen_Rec";
    $answer2 = $bdd ->query("UPDATE `vegnbio`.Plat SET allergene = '$allergene' WHERE  nom='".$name."' ");
    //mysqli_free_result($answer2);
    //mysqli_free_result($answer);
    echo 'Mise a jour effectué !';
   }
?>

</body>
</html>