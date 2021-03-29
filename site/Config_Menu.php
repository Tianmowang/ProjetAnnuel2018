<!DOCTYPE html>
<html>
<head>
    <?php include("header_marche.php"); ?>

    <ul class="nav nav-tabs">
    <li role="presentation" ><a href="Add_Product.php" >Ajout d'une recette </a></li>
    <li role="presentation" ><a href="Add_Allergen.php">Ajout d'un allérgene</a></li>
    <li role="presentation" ><a href="Delete_Product.php">Supprimer une recette</a></li>
    <li role="presentation" class=" active"><a href="Config_Menu.php">Configurer les menus</a></li>
    <li role="presentation" ><a href="Add_Restaurant.php" >Ajout d'un nouveau restaurant </a></li>
  </ul>
    </ul>

</head>
<body>

<form method="post" action="treatment_Menu.php" id="frame4">
 
    <label for="entree"> De quoi est composé le Menu du jour ? <br /> Quel entrée</label><br />

     <select name="entree" id="entree">
 
 <?php
 
$answer = $bdd->query('SELECT nom FROM `vegnbio`.Plat WHERE type="entree" ');
 
while ($data = $answer->fetch())
{
?>
           <option value="<?php echo $data['nom']; ?>"> <?php echo $data['nom']; ?></option>
<?php
}
?>

</select><br />

<label for="food"> Quel plat ?</label><br />
    <select name="food" id="food">
 
 <?php
 
$answer = $bdd->query('SELECT nom FROM `vegnbio`.Plat  WHERE type="plat" ');
 
while ($data = $answer->fetch())
{
?>
           <option value="<?php echo $data['nom']; ?>"> <?php echo $data['nom']; ?></option>
<?php
}
?>

</select><br />

<label for="dessert"> Quel dessert?</label><br />
    <select name="dessert" id="dessert">
 
 <?php
 
$answer = $bdd->query('SELECT nom FROM `vegnbio`.Plat WHERE type="dessert"');
 
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