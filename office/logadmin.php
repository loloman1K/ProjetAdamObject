

<?php
require 'bdd.php';

$log = $_POST["login"];
$mdp = $_POST["mdp"];

$reponse = $dbh->query("SELECT * FROM admin WHERE log_admin='$log'");
// var_dump($reponse);
$donnees = $reponse->fetch();
// var_dump($donnees);
if ($donnees != false) {
    $reponse2 = $dbh->query("SELECT * FROM admin WHERE log_admin='$log' AND mdp_admin='$mdp'");
    $donnees2 = $reponse2->fetch();
    if ($donnees2 != false) {
        header("Location: ../admin/ajouter.php");
    }
    else{
        echo "mauvais mdp";
    }
} else {
    echo "mauvais login";
}
