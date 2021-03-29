<?php 

?>

<!DOCTYPE html>
<html>
<head>
	<?php
	include("header_marche.php"); 
	?>
  
  <ul class="nav nav-tabs">
  <li role="presentation"><a href="Add_Product.php" >Ajout d'une recette </a></li>
  <li role="presentation"  ><a href="Add_Allergen.php">Ajout d'un allérgene</a></li>
  <li role="presentation"><a href="Delete_Product.php">Supprimer une recette</a></li>
  <li role="presentation" class=" active"><a href="Config_Menu.php">Configurer les menus</a></li>
  <li role="presentation" ><a href="Add_Restaurant.php" >Ajout d'un nouveau restaurant </a></li>
  </ul>
  </ul>

</head>

<body>

<?php
 if (isset($_POST['entree']) && isset($_POST['food']) && isset($_POST['dessert'])) {
 
    $entree = $_POST['entree'];
    $food= $_POST['food'];
    $dessert = $_POST['dessert'];

    $requete = $bdd -> query(" SELECT * FROM `vegnbio`.Menu ");
    $donnees = $requete->fetch();
    if($donnees == FALSE){
    $requete = $bdd ->query(" INSERT INTO `vegnbio`.Menu (id,entree,plat,dessert)VALUES (1,'".$entree."','".$food."','".$dessert."') ");
    //mysqli_free_result($requete);
    echo 'Ajout avec succes !';
    }else{
    $answer = $bdd ->query("UPDATE `vegnbio`.Menu SET entree = '$entree', plat = '$food', dessert = '$dessert' ");
    //mysqli_free_result($answer);
    echo ' Mise a jour effectué !';
  }
 }
?>

</body>
</html>