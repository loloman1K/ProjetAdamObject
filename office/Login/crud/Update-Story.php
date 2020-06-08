<?php
require '../../../identifier.php';
require '../../../chargeauto.php';
?>

<link rel="stylesheet" href="../../../bootstrap-4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/style_tablette.css">
<link rel="stylesheet" href="../../../css/style_smartphone.css">

<title>Pour les Yeux d'Adam</title>

<h1>Modification de Story</h1>

<?php

$id = $_GET['id'];
$picture = $_GET['picture'];
$originPicture = $_GET['originPicture'];
$text = $_GET['text'];
$date = $_GET['date'];


?>

<form class="w-75" method="POST" action="Updated-Story.php" style="margin:auto;">
<div class="form-group">
<input type="hidden" id="id" name="id" class="form-control" value="<?php echo $id ?>">
    </div>
    <div class="form-group">
        <label for="img" style="color:black;">Chemin de l'Image réduite de la Story</label>
        <input type="text" id="picture" name="picture" class="form-control" value="<?php echo $picture ?>">
    </div>
    <div class="form-group">
        <label for="img" style="color:black;">Chemin de l'Image taille réelle de la Story</label>
        <input type="text" id="originPicture" name="originPicture" class="form-control" value="<?php echo $originPicture ?>">
    </div>
    <div class="form-group">
        <label for="text" style="color:black;">Description Story</label>
        <input type="text" id="text" name="text" class="form-control"value="<?php echo $text ?>">
    </div>
    <div class="form-group">
        <label for="date" style="color:black;">Date Story</label>
        <input id="date" name="date" class="form-control" value="<?php echo $date ?>">
    </div>

    <div style="width:12%;margin:auto;">
        <button type="submit" class="btn btn-outline-success" style="margin:auto;">Enregistrer les modifications !</button>
    </div>
</form>