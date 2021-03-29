<?php
include("config.php");
if (isset($_POST['name'])) {
    $n=$_POST['n'];
    $answer = $bdd -> query(" SELECT * FROM `vegnbio`.Plat  WHERE nom ='".$name."' ");
    $data = $answer->fetch();
    mysqli_free_result($answer);

    $n = $n + 1;
    echo $n;
   
   }
?>
