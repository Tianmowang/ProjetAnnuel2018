<?php
session_start();
if(isset($_SESSION['frist_name']) && isset($_SESSION['name']) )
    	 echo '<p> Bienvenue' . ' ' .$_SESSION['frist_name'] . ' ' . $_SESSION['name'] . '! </p>';
?>

<!DOCTYPE html>
<html>
<head>
	<?php include("header.php"); ?>
	<?php include("config.php"); ?>
	
</head>
<body>

<h4 class="col-sm-offset-1">VEG'N BIO BASTILLE</h4>
<div class="flip-container">
	<div class="flipper">
		<div class="devant_3 ">
		</div>
		<div class="derriere_3 ">
		</div>
	</div>
</div>

<p class ="col-xs-5">
Avenue de la Bastille </br>
Horaires : </br>
Lundi à Jeudi : de 9h à minuit.</br>
Vendredi : de 9h à 1h du matin.</br>
Samedi : de 9h à 5h du matin.</br>
Dimanche : de 11h à minuit.
</br>

<h4 class="col-sm-offset-7">VEG'N BIO REPUBLIQUE</h4>

<!-- la class col-xs-5 permet de faire flotter l'image et le 5 désigne la grandeur de l'image -->

<img src="../picture/resto10.jpg" class="col-xs-5" alt="Image du restaurant " />
 
<!-- cette classe nous permet de mettre le text a droite ! -->
</br>
Avenue de la Republique </br>
Horaires : </br>
Lundi à Jeudi : de 9h à minuit.</br>
Vendredi : de 9h à 1h du matin.</br>
Samedi : de 9h à 5h du matin.</br>
Dimanche : de 11h à minuit.</br>
</p>

<p class="modal-footer">

<h4 class="col-sm-offset-1">VEG'N BIO Nation</h4>

<div class="flip-container">
						<div class="flipper">
							<div class="devant_2">
								<!-- front content -->
							</div>
							<div class="derriere_2">
								<!-- back content -->
							</div>
						</div>
					</div>
<p class ="col-xs-5">
</br>
Avenue de la Nation </br>
Horaires : </br>
Lundi à Jeudi : de 9h à minuit.</br>
Vendredi : de 9h à 1h du matin.</br>
Samedi : de 9h à 5h du matin.</br>
Dimanche : de 11h à minuit.</br>



</br>
<h4 class="col-sm-offset-7">VEG'N BIO Place d'Italie</h4>

<a href="../picture/resto5.jpg"> <img src="../picture/resto10.jpg" class="col-xs-5" alt="Image du restaurant " /></a>


</br>
Avenue de la Place d'Italie </br>
Horaires : </br>
Lundi à Jeudi : de 9h à minuit.</br>
Vendredi : de 9h à 1h du matin.</br>
Samedi : de 9h à 5h du matin.</br>
Dimanche : de 11h à minuit.</br>
</p>

<p class="modal-footer">

<h4 class="col-sm-offset-1">VEG'N BIO Montparnasse</h4>
<div class="flip-container">
						<div class="flipper">
							<div class="devant_6">
								<!-- front content -->
							</div>
							<div class="derriere_6">
								<!-- back content -->
							</div>
						</div>
					</div>

<p class="col-xs-5">
Avenue du Montparnasse </br>
Horaires : </br>
Lundi à Jeudi : de 9h à minuit.</br>
Vendredi : de 9h à 1h du matin.</br>
Samedi : de 9h à 5h du matin.</br>
Dimanche : de 11h à minuit.</br>

<h4 class="col-sm-offset-7">VEG'N BIO Ivry</h4>

<img src="../picture/resto.jpg" class="col-xs-5" alt="Image du restaurant " />

</br>
Avenue d'Ivry </br>
Horaires : </br>
Lundi à Jeudi : de 9h à minuit.</br>
Vendredi : de 9h à 1h du matin.</br>
Samedi : de 9h à 5h du matin.</br>
Dimanche : de 11h à minuit.</br>

</p>

<p class="modal-footer">

<h4 class="col-sm-offset-1">VEG'N BIO BEAUBOURG</h4>

<div class="flip-container">
						<div class="flipper">
							<div class="devant_4">
								<!-- front content -->
							</div>
							<div class="derriere_4">
								<!-- back content -->
							</div>
						</div>
					</div>

</br>
Avenue de Beaubourg </br>
Horaires : </br>
Lundi à Jeudi : de 9h à 23h.</br>
Vendredi : de 9h à 1h du matin.</br>
Samedi : de 9h à 5h du matin.</br>
Dimanche : de 11h à 23h.</br>

</p>

<?php include('PiedDePage.php'); ?>
</body>
</html>