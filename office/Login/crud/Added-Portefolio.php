<?php
require '../../../identifier.php';
require '../../../chargeauto.php';
require '../../vueadmin/header.php';
?>

<link rel="stylesheet" href="../../../bootstrap-4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/style_tablette.css">
<link rel="stylesheet" href="../../../css/style_smartphone.css">

  <h1 style="margin-bottom:4vh">Portefolio Ajouté</h1>


<?php

$id = 4;
$picture = $_POST['picture'];
$originPicture = $_POST['originPicture'];
$lieu = $_POST['lieu'];
$date = $_POST['date'];
$other = $_POST['other'];


$portefolioTable = array(
  "id_portefolio" => $id,
  "picture_portefolio" => $picture,
  "originPicture_portefolio" => $originPicture,
  'lieu_portefolio' => $lieu,
  'date_portefolio' => $date,
  'other_portefolio' => $other);

$myPortefolio = new Portefolio($portefolioTable);

$myPortefolioRepo = new PortefolioRepository($db);

$myPortefolioRepo -> add($myPortefolio);

  echo " <article>
              <img src=../../../images/". $portefolioTable['picture_portefolio']." width='320' height='200' class='img-fluid' "."</img>
              <img src=../../../images/". $portefolioTable['originPicture_portefolio']." width='320' height='200' class='img-fluid' "."</img>
              <p> Lieu : ". $portefolioTable['lieu_portefolio'] . "</p>
              <p> Date : ". $portefolioTable['date_portefolio'] ."</p>
              <p> Autre : ". $portefolioTable['other_portefolio'] ."</p>
      </article>";

?>
<?php

require '../../vueadmin/footer.php';

?>
