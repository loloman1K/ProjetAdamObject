<?php

require '../../identifier.php';

$log = $_POST["login"];
$mdp = $_POST["mdp"];


$reponse = $db->query("SELECT * FROM admin WHERE log_admin='".$log."'");
// var_dump($reponse);
$donnees = $reponse->fetch();
// var_dump($donnees);
if ($donnees != false) {
    $reponse2 = $db->query("SELECT * FROM admin WHERE log_admin='".$log."' AND mdp_admin='".$mdp."'");
    $donnees2 = $reponse2->fetch();
    if ($donnees2 != false) {
        require 'sessionIn.php';
        header("Location:LoggedIn.php?testlog=9747272180611");
    }
    else{
        echo "mauvais mdp";
    }
} else {
    echo "mauvais login";

}
