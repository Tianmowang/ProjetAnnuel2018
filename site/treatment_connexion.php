<?php

include("config.php");

    $mail =$_POST['mail'];
    $pwd =$_POST['pwd'];

//  Récupération de l'utilisateur et de son pass hashé
//$request = $bdd ->query("SELECT * FROM `vegnbio`.user WHERE mail = '".$mail."' ");
//$resultat = $request->fetch();

    $answer = $bdd -> query(" SELECT * FROM `vegnbio`.user  WHERE mail ='".$mail."' ");
    $data = $answer->fetch();


// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($pwd, $data['pwd']);

if (!$data['mail'])
{
    echo 'Mail saisi non valide !';
}
else
{
    if ($mail=='admin@esgi.com' && $isPasswordCorrect) {
        include("compte_chief.php");
        $_SESSION['name'] = $data['name'];
        $_SESSION['frist_name'] = $data['frist_name'];
        echo 'Vous êtes connecté !';
        
    }
    elseif ($isPasswordCorrect){
        $_SESSION['name'] = $data['name'];
        $_SESSION['frist_name'] = $data['frist_name'];

        include("header.php");
        echo 'Vous êtes connecté !';
    }
    else {
        echo 'Erreur de Mot de passe  !';
    }
}

?>
    