<?php
require '../../../identifier.php';
require '../../../chargeauto.php';
require '../../vueadmin/header.php';
?>

<link rel="stylesheet" href="../../../bootstrap-4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/style_tablette.css">
<link rel="stylesheet" href="../../../css/style_smartphone.css">

  <h1 style="margin-bottom:4vh">Film audio Ajouté</h1>


<?php

$id = 4;
$titre = $_POST['titre'];
$director = $_POST['director'];
$kind = $_POST['kind'];
$annee = $_POST['annee'];
$duration = $_POST['duration'];


$filmsadTable = array(
  "id_film" => $id,
  "title_film" => $titre,
  "director_film" => $director,
  "kind_film" => $kind,
  'annee_film' => $annee,
  'duration_film' => $duration);

$myFilmsad = new Filmsad($filmsadTable);

$myFilmsadRepo = new FilmsadRepository($db);

$myFilmsadRepo -> add($myFilmsad);

  echo " <article>
              <p> Titre : ". $filmsadTable['title_film']."</p>
              <p> Directeur : ". $filmsadTable['director_film']."</p>
              <p> Kind : ". $filmsadTable['kind_film'] . "</p>
              <p> Année : ". $filmsadTable['annee_film'] ."</p>
              <p> durée : ". $filmsadTable['duration_film'] ."</p>
      </article>";

?>
<?php

require '../../vueadmin/footer.php';

?>
