<?php
require '../../../identifier.php';
require '../../../chargeauto.php';
?>

<link rel="stylesheet" href="../../../bootstrap-4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/style_tablette.css">
<link rel="stylesheet" href="../../../css/style_smartphone.css">

<title>Pour les Yeux d'Adam</title>

<h1>Ajouter un film audio</h1>

<form class="w-75" method="POST" action="Added-Filmsad.php" style="margin:auto;">
    <div class="form-group">
        <label for="titre" style="color:black;">Titre</label>
        <input type="text" id="titre" name="titre" class="form-control" placeholder="Renseignez le titre">
    </div>
    <div class="form-group">
        <label for="director" style="color:black;">Directeur</label>
        <input type="text" id="director" name="director" class="form-control" placeholder="Renseignez le directeur">
    </div>
    <div class="form-group">
        <label for="kind" style="color:black;">Kind</label>
        <input type="text" id="kind" name="kind" class="form-control" placeholder="Renseignez le kind">
    </div>
    <div class="form-group">
        <label for="annee" style="color:black;">Année</label>
        <input type="text" id="annee" name="annee" class="form-control" placeholder="renseignez l'année">
    </div>
    <div class="form-group">
        <label for="duration" style="color:black;">Durée</label>
        <input type="date" id="duration" name="duration" class="form-control" placeholder="renseignez la durée">
    </div>

    <div style="width:12%;margin:auto;">
        <button type="submit" class="btn btn-outline-success" style="margin:auto;">Ajouter</button>
    </div>
</form>
