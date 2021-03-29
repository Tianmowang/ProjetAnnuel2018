<?php
include("config.php");
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $cost=$_POST['cost'];
    $total =$_POST['total'];
    $answer = $bdd -> query(" SELECT * FROM `vegnbio`.Plat  WHERE nom ='".$name."' ");
    $data = $answer->fetch();
    $price=$data['prix']; 
    $name = $data['nom'];
    //mysqli_free_result($answer);


if (isset($name) && isset($price)) {

    $answer2 = $bdd -> query(" SELECT * FROM `vegnbio`.Order  WHERE name ='".$name."' ");
    $data2 = $answer2->fetch();
    $amount = $data2['amount'];

    // on verifie si la quantitée est supérieur a zéro

    if($amount>0){
        $amount = $data2['amount'] - 1;
        if($amount==0)
            $answer3 = $bdd ->query("DELETE FROM `Order` WHERE amount=0");
    }else{
        $answer3 = $bdd ->query("DELETE FROM `Order` WHERE amount=0");
    }

     //mysqli_free_result($answer3);

    // on cherche a verifier si le plat qu'on ajoute est deja dans la commande
    if($data2){
        $answer2 = $bdd ->query("UPDATE `vegnbio`.Order SET amount = '$amount' WHERE  name='".$name."' ");
        //mysqli_free_result($answer2);

    }else{
         $request = $bdd ->query(" INSERT INTO `vegnbio`.Order (name,price,amount) VALUES ('".$name."','".$price."','".$amount."') ");
         //mysqli_free_result($request);

    }

   }



    if($cost == 0){
        echo $total;
    }
    else{
        $total = $total  . "<br/>" . "<s> $name </s>" . "__________________________" . "<s> $price </s>";
        echo $total;
    }
   
   }

?>
