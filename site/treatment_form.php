
<?php
include("header.php");
include("config.php");

    $name = $_POST['name'];
    $frist_name =$_POST['frist_name'];
    $brithday =$_POST['brithday'];
    $sexe = $_POST['sexe'];
    $mail =$_POST['mail'];
    $pwd =$_POST['pwd'];

    //Vérification du mail

    $query=$bdd->prepare('SELECT COUNT(*) FROM  `vegnbio`.user WHERE mail =:mail ');

    $query->bindValue(':mail',$mail, PDO::PARAM_STR);

    $query->execute();

    $mail_free=($query->fetchColumn()==0)?1:0;

    $query->CloseCursor();

    if(!$mail_free)

    {

        $mail_erreur1 = "Cette adresse mail est déjà utilisé par un membre";
        echo $mail_erreur1;

        $i++;

    }
    else{

        $hashedPass=password_hash($pwd,PASSWORD_DEFAULT);

    $request = $bdd ->query(" INSERT INTO `vegnbio`.user (name,frist_name,brithday,sexe,mail,pwd) VALUES ('".$name."','".$frist_name."','".$brithday."','".$sexe."','".$mail."','".$hashedPass."') ");
    //mysqli_free_result($request);
        echo 'Votre inscription a bien été prise en compte';

     
    
    }
