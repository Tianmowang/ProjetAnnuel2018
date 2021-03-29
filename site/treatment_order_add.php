<?php
include("config.php");
if (isset($_POST['name'])) {
    //nom de la commande
    $name = $_POST['name'];
    // nom du restaurant
    //$restaurant = $_POST['nameR'];
    // la somme total
    $total =$_POST['total'];
    // numero du commande
    //$commande = $_POST['commande'];
    //on renvoit le prix et le nom du produit choisi qui sera afficher dans le Panier
    $answer = $bdd -> query(" SELECT * FROM `vegnbio`.Plat  WHERE nom ='".$name."' ");
    $data = $answer->fetch();
    $price=$data['prix']; 
    $name = $data['nom'];

    //mysqli_free_result($answer);

//on ajoute dans la BDD les commandes

if (isset($name) && isset($price)) {

    $answer2 = $bdd -> query(" SELECT * FROM `vegnbio`.Order  WHERE name ='".$name."' ");
    $data2 = $answer2->fetch();
    $amount = $data2['amount'] + 1;
    // on cherche a verifier si le plat qu'on ajoute est deja dans la commande
    if($data2){
        $answer2 = $bdd ->query("UPDATE `vegnbio`.Order SET amount = '$amount' WHERE  name='".$name."' ");
    //mysqli_free_result($answer2);

    }else{
         $request = $bdd ->query(" INSERT INTO `vegnbio`.Order (name,price,amount) VALUES ('".$name."','".$price."','".$amount."') ");
    //mysqli_free_result($request);

    }

   }



    $total = $total . "<br/>" . $name . "__________________________" . $price ;

    echo $total;

    

    
   
   }
?>
