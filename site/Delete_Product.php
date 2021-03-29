<!DOCTYPE html>
<html>
<head>
    <?php include("header_marche.php"); ?>
    <ul class="nav nav-tabs">
  
  <li role="presentation" ><a href="Add_Product.php" >Ajout d'une recette </a></li>
  <li role="presentation" ><a href="Add_Allergen.php">Ajout d'un allérgene</a></li>
  <li role="presentation" class=" active"><a href="Delete_Product.php">Supprimer une recette</a></li>
  <li role="presentation"><a href="Config_Menu.php">Configurer les menus</a></li>
  <li role="presentation" ><a href="Add_Restaurant.php" >Ajout d'un nouveau restaurant </a></li>
  </ul>

</ul>
 
</head>
<body>

<form method="post" action="treatment_SUP.php" id="frame3">
 
    <label for="name">Quel recette souhaitez vous supprimer ?</label><br />
     <select name="name" id="name">
 
 <?php
 
$answer = $bdd->query('SELECT nom FROM `vegnbio`.Plat');
 
while ($data = $answer->fetch())
{
?>
           <option value="<?php echo $data['nom']; ?>"> <?php echo $data['nom']; ?></option>
<?php
}
?>

</select>
   </br>
       <input type="submit" id="envoyer"/>

</form>
</body>
</html>