<?php
session_start();
if(isset($_SESSION['frist_name']) && isset($_SESSION['name']) )
    	 echo '<p> Bienvenue' . ' ' .$_SESSION['frist_name'] . ' ' . $_SESSION['name'] . '! </p>';
?>

<!DOCTYPE html>
<html>
<head>
	<?php 
	include("header.php");
	include("config.php");
	 ?>
</head>
<body>




	<body>

		<header>
			<h1 class="col-sm-offset-1"> Formulaire </h1>
		</header>

		<form class="col-xs-offset-1" method = "POST" action="treatment_form.php">
		    <fieldset>

		    <legend >Vos cordonnées :</legend>
		     
		         <label for = "name"> Nom : </label>
		         <input type="text" name="name" id="name" placeholder="Dupont" autofocus required />

		         <!-- ce qu'on saisi dans ce champs de texte  (name) se recupera dans $_Post['name']  -->
		    
		      
		         <br/><label for = "frist_name"> Prenom :  </label>
		         <input type="text" name="frist_name" id="frist_name" placeholder="Alex" required />
		          
		         <br/><label for = "brithday"> Date de Naissance :  </label>
		         <input type="date" name="brithday" id="brithday" />

		         <br/>
                  
		         <label for = "sexe"> Sexe :  </label>
		            <td><input type="radio" name="sexe" value="homme" />
		            <label for = "men" > Homme </label></td>
		            <input type="radio" name="sexe" value="femme" />
		            <label for = "woman" > Femme </label>
        


		         <br/><label for = "mail"> Adresse email :  </label>
		         <input type="email" name="mail" id="mail" placeholder="XXXX@XXXX.com" />
		         

		         <br/><label for = "pwd"> Mot de passe :  </label>
		         <input type="password" name="pwd" id="pwd" >


		         <br/><input type="submit" id="sent"/>
		     
		     </fieldset>
		</form>


		</body>
		</html>
