<?php
require '../../../identifier.php';
require '../../../chargeauto.php';
?>

<link rel="stylesheet" href="../../../bootstrap-4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/style_tablette.css">
<link rel="stylesheet" href="../../../css/style_smartphone.css">

<title>Pour les Yeux d'Adam</title>

<h1>Ajouter une Story</h1>

<form class="w-75" method="POST" action="Added-Story.php" style="margin:auto;">
    <div class="form-group">
    <div class="form-group">
        <label for="date" style="color:black;">Date Story</label>
        <input type="date" id="date" name="date" class="form-control" placeholder="Date de la story">
    </div>
    <div class="form-group">
        <label for="text" style="color:black;">Description Story</label>
        <input type="text" id="text" name="text" class="form-control" placeholder="Description Story">
    </div>
    <div class="form-group">
        <label for="img" style="color:black;">Image réduite de la Story</label>
        <input type="text" id="picture" name="picture" class="form-control" placeholder="Rensignez le chemin de l'Image de la Story (taille réduite)">
    </div>
    <div class="form-group">
        <label for="img" style="color:black;">Image réelle de la Story</label>
        <input type="text" id="originPicture" name="originPicture" class="form-control" placeholder="Rensignez le chemin de l'Image de la Story (taille réduite)">
    </div>
    <div style="width:12%;margin:auto;">
        <button type="submit" class="btn btn-outline-success" style="margin:auto;">Ajouter</button>
    </div>
</form>
