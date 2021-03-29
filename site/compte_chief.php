<?php
session_start();
if (isset($_SESSION['name']) AND isset($_SESSION['frist_name']))
{
      echo '<p> Bienvenue' . ' ' .$_SESSION['frist_name'] . ' ' . $_SESSION['name'] . '! </p>';
}
?>
<!DOCTYPE html>
<html>
<head>
	<?php
	 include("header_Menu.php"); 
	?>
	    <ul class="nav nav-tabs">
  
  <li role="presentation" class="active"><a href="Add_Product.php" >Ajout d'une recette </a></li>
  <li role="presentation" ><a href="Add_Allergen.php">Ajout d'un allérgene</a></li>
  <li role="presentation"><a href="Delete_Product.php">Supprimer une recette</a></li>
  <li role="presentation"><a href="Config_Menu.php">Configurer les menus</a></li>
  <li role="presentation" ><a href="Add_Restaurant.php" >Ajout d'un nouveau restaurant </a></li>

</ul>
</head>
<body>


</body>
</html>