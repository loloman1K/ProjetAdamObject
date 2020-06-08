<?php
require '../../../identifier.php';
require '../../../chargeauto.php';
?>

<link rel="stylesheet" href="../../../bootstrap-4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/style_tablette.css">
<link rel="stylesheet" href="../../../css/style_smartphone.css">

<title>Pour les Yeux d'Adam</title>

<h1>Le Portefolio a été modifié</h1>

<?php

$id = $_POST['id'];
$picture = $_POST['picture'];
$originPicture = $_POST['originPicture'];
$evenement = $_POST['evenement'];
$lieu = $_POST['lieu'];
$date = $_POST['date'];
$other = $_POST['other'];

$portefolioTable = array(
    "id_portefolio" => $id,
    "picture_portefolio" => $picture,
    'originPicture_portefolio' => $originPicture,
    'evenement_portefolio' => $evenement,
    'lieu_portefolio' => $lieu,
    'date_portefolio' => $date,
    'other_portefolio' => $other);
  
  $myPortefolio = new Portefolio($portefolioTable);
  
  $myPortefolioRepo = new PortefolioRepository($db);
  
  $myPortefolioRepo -> update($myPortefolio);

?>

<form class="w-75" style="margin:auto;">
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

    <a href="Liste-Portefolio.php" class="btn btn-outline-info">Retour à la page des portefolio</a>