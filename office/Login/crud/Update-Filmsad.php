<?php
require '../../../identifier.php';
require '../../../chargeauto.php';
?>

<link rel="stylesheet" href="../../../bootstrap-4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/style_tablette.css">
<link rel="stylesheet" href="../../../css/style_smartphone.css">

<title>Pour les Yeux d'Adam</title>

<h1>Modifier un film audio</h1>

<?php

$id = $_GET['id'];
$titre = $_GET['title'];
$director = $_GET['director'];
$kind = $_GET['kind'];
$annee = $_GET['annee'];
$duration = $_GET['duration'];

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


<form class="w-75" method="POST" action="Updated-Filmsad.php" style="margin:auto;">
    <div class="form-group">
        <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $id ?>">
    </div>
    <div class="form-group">
        <label for="titre" style="color:black;">Titre</label>
        <input type="text" id="titre" name="titre" class="form-control" placeholder="Renseignez le titre" value="<?php echo $titre ?>">
    </div>
    <div class="form-group">
        <label for="director" style="color:black;">Directeur</label>
        <input type="text" id="director" name="director" class="form-control" placeholder="Renseignez le directeur" value="<?php echo $director ?>">
    </div>
    <div class="form-group">
        <label for="kind" style="color:black;">Kind</label>
        <input type="text" id="kind" name="kind" class="form-control" placeholder="Renseignez le kind" value="<?php echo $kind ?>">
    </div>
    <div class="form-group">
        <label for="annee" style="color:black;">Année</label>
        <input type="text" id="annee" name="annee" class="form-control" placeholder="renseignez l'année" value="<?php echo $annee ?>">
    </div>
    <div class="form-group">
        <label for="duration" style="color:black;">Durée</label>
        <input type="date" id="duration" name="duration" class="form-control" placeholder="renseignez la durée" value="<?php echo $duration ?>">
    </div>

    <div style="width:12%;margin:auto;">
        <button type="submit" class="btn btn-outline-success" style="margin:auto;">Modifier</button>
    </div>
</form>
