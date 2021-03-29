<?php
function connexion_chief($bdd){
    $name = $_POST['pseudo'];
    $pwd = $_POST['mdp'];
    $answer = $bdd ->query("SELECT user,mdp FROM chef  ");
    $data = $answer->fetch();
    if($data['user'] != $name || $data['mdp'] != $pwd)
	return "Pseudo ou mot de passe incorrect !</br>";
}

?>