<!DOCTYPE html>
<html>
<head>
    <?php include("header_marche.php"); ?>
    <ul class="nav nav-tabs">
  
  <li role="presentation" class=" active"><a href="Add_Product.php" >Ajout d'une recette </a></li>
  <li role="presentation" ><a href="Add_Allergen.php">Ajout d'un allérgene</a></li>
  <li role="presentation"><a href="Delete_Product.php">Supprimer une recette</a></li>
  <li role="presentation"><a href="Config_Menu.php">Configurer les menus</a></li>
  <li role="presentation" ><a href="Add_Restaurant.php" >Ajout d'un nouveau restaurant </a></li>
  </ul>

</ul>
</head>
<body >

      <form method="post" action="treatment_AP.php" id="frame2">
      <label>Nom du Produit :</label> 
      <input type="text" name="name" />
      </br>
       <label> Son type :</label> 
        <select name="type" id="type">
           <option value="entree">Entrée</option>
           <option value="food">Plat</option>  
           <option value="dessert">Dessert</option>
       </select>
        </br>
      <label>Son prix : </label> 
      <input type="text" name="price" />
       </br>
       <label>Ses ingrédients : </label> 
      <input type="text" name="ingredient">
       </br>
      <label>Ses allergenes :</label> 
      <input type="text" name="allergen" />
       </br>
       <input type="submit" id="envoyer"/>
       
</form>
</body>
</html>