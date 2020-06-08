<?php
require '../../../identifier.php';
require '../../../chargeauto.php';
?>

<link rel="stylesheet" href="../../../bootstrap-4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/style_tablette.css">
<link rel="stylesheet" href="../../../css/style_smartphone.css">

<title>Pour les Yeux d'Adam</title>

<h1>Le film audio a été modifié</h1>

<?php

$id = $_POST['id'];
$titre = $_POST['titre'];
$director = $_POST['director'];
$kind = $_POST['kind'];
$annee = $_POST['annee'];
$duration = $_POST['duration'];

$filmsadTable = array(
    "id_film" => $id,
    'title_film' => $titre,
    'director_film' => $director,
    'kind_film' => $kind,
    'annee_film' => $annee,
    'duration_film' => $duration);

  $myFilmsad = new Filmsad($filmsadTable);
//echo var_dump($myArticle);
  $myFilmsadRepo = new FilmsadRepository($db);

$myFilmsadRepo->update($myFilmsad);

?>

<form class="w-75" style="margin:auto;">
<div class="form-group">
<input type="hidden" id="id" name="id" class="form-control" value="<?php echo $id ?>">
    </div>
    <div class="form-group">
        <label for="titre" style="color:black;">Titre du film audio</label>
        <input type="text" id="titre" name="titre" class="form-control"value="<?php echo $titre ?>">
    </div>
    <div class="form-group">
        <label for="director" style="color:black;">Directeur du film</label>
        <input type="text" id="director" name="director" class="form-control"value="<?php echo $director ?>">
    </div>
    <div class="form-group">
        <label for="kind" style="color:black;">Kind </label>
        <input type="text" id="kind" name="kind" class="form-control" value="<?php echo $kind ?>">
    </div>
    <div class="form-group">
        <label for="annee" style="color:black;">Année</label>
        <input type="text" id="annee" name="annee" class="form-control" value="<?php echo $annee ?>">
    </div>
    <div class="form-group">
        <label for="duration" style="color:black; ">duration </label>
        <input type="text" id="duration" name="duration" class="form-control" value="<?php echo $duration ?>">
    </div>
