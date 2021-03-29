<!DOCTYPE html>
<html>
<head>
    <?php include("header_marche.php"); ?>
    <ul class="nav nav-tabs">
  
  <li role="presentation"><a href="Add_Product.php" >Ajout d'une recette </a></li>
  <li role="presentation" ><a href="Add_Allergen.php">Ajout d'un allérgene</a></li>
  <li role="presentation"><a href="Delete_Product.php">Supprimer une recette</a></li>
  <li role="presentation"><a href="Config_Menu.php">Configurer les menus</a></li>
  <li role="presentation" class=" active"><a href="Add_Restaurant.php" >Ajout d'un nouveau restaurant </a></li>

</ul>
</head>
<body >

      <form method="post" action="treatment_restaurant.php" id="frame8">
      <label>Nom du Restaurant :</label> 
      <input type="text" name="name" />
      </br>
      <label>Son adresse : </label> 
      <input type="text" name="adresse" />
       </br>
       <label>Sa capacitée en terme de personne: </label> 
      <input type="text" name="person">
       </br>
      <label>Nombre de tables: </label> 
      <input type="text" name="table">
      </br>
       <input type="submit" id="envoyer"/>
       
</form>
</body>
</html>