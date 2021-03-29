<?php
session_start();
if(isset($_SESSION['frist_name']) && isset($_SESSION['name']) )
    	 echo '<p> Bienvenue' . ' ' .$_SESSION['frist_name'] . ' ' . $_SESSION['name'] . '! </p>';
?>

<!DOCTYPE html>
<html>
<head>
	<?php include("header.php");
	include("config.php");
	 ?>
	
	
</head>
<body>



 <p class="col-sm-offset-1"> Bonjour ! Soyez les bienvenue sur notre site du restaurant gastronomique Vegan Bio ! </p>

<?php include('PiedDePage.php'); ?>
</body>
</html>