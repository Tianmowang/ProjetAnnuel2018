<?php
include("config.php");
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $cost=$_POST['cost'];
    $answer = $bdd -> query(" SELECT * FROM `vegnbio`.Plat  WHERE nom ='".$name."' ");
    $data = $answer->fetch();
    $price=$data['prix']; 
    $name = $data['nom'];
    //mysqli_free_result($answer);

    $cost = $cost + $price ;

    echo $cost;
   
   }
?>
