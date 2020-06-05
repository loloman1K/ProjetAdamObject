<?php
require '../../../identifier.php';
require '../../../chargeauto.php';
?>

<link rel="stylesheet" href="../../../bootstrap-4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/style_tablette.css">
<link rel="stylesheet" href="../../../css/style_smartphone.css">

<title>Pour les Yeux d'Adam</title>

<h1>Modification du Portefolio</h1>

<?php

$id = $_GET['id'];
$picture = $_GET['picture'];
$originPicture = $_GET['originPicture'];
$evenement = $_GET['evenement'];
$lieu = $_GET['lieu'];
$date = $_GET['date'];
$other = $_GET['other'];

?>

<form class="w-75" method="POST" action="Updated-Portefolio.php" style="margin:auto;">
<div class="form-group">
<input type="hidden" id="id" name="id" class="form-control" value="<?php echo $id ?>">
    </div>
    <div class="form-group">
        <label for="img" style="color:black;">Chemin de l'Image réduite du Portefolio</label>
        <input type="text" id="picture" name="picture" class="form-control" value="<?php echo $picture ?>">
    </div>
    <div class="form-group">
        <label for="img" style="color:black;">Chemin de l'Image taille réelle du Portefolio</label>
        <input type="text" id="originPicture" name="originPicture" class="form-control" value="<?php echo $originPicture ?>">
    </div>
    <div class="form-group">
        <label for="evenement" style="color:black;">Evenement Portefolio</label>
        <input type="text" id="evenement" name="evenement" class="form-control"value="<?php echo $evenement ?>">
    </div>
    <div class="form-group">
        <label for="lieu" style="color:black;">Lieu Portefolio</label>
        <input type="text" id="lieu" name="lieu" class="form-control" value="<?php echo $lieu ?>">
    </div>
    <div class="form-group">
        <label for="date" style="color:black;">Date Portefolio</label>
        <input id="date" name="date" class="form-control" value="<?php echo $date ?>">
    </div>
    <div class="form-group">
        <label for="other" style="color:black; ">Autre</label>
        <input type="text" id="other" name="other" class="form-control" value="<?php echo $other ?>">
    </div>

    <div style="width:12%;margin:auto;">
        <button type="submit" class="btn btn-outline-success" style="margin:auto;">Enregistrer les modifications !</button>
    </div>
</form>