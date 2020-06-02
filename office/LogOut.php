<?php

require 'vueadmin/header.php';
require 'Session.php';

?>

<div class="container-fluid">

<h1 style='margin-top: 3vh;'>Vous êtes déconnecté.e du site "Pour les yeux d'Adam" </h1>

</div>

<?php
// rappel de la session ouverte pour la detruire
$data = Session::getInstance();
session_destroy();
?>

<a href="LoginForm.php" class="btn btn-outline-success">Se reconnecter</a>

<?php require 'vueadmin/footer.php';
?>
