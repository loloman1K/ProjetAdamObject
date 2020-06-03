<?php
require '../../../identifier.php';
require '../../../chargeauto.php';
require '../../vueadmin/header.php';
?>

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
              <img>" . $portefolioTable['picture_portefolio'] . "</img>
              <img>" . $portefolioTable['originPicture_portefolio'] . "</img>
              <p> Lieu : ". $portefolioTable['lieu_portefolio'] . "</p>
              <p> Date : ". $portefolioTable['date_portefolio'] ."</p>
              <p> Autre : ". $portefolioTable['other_portefolio'] ."</p>
      </article>";

?>
<?php

require '../../vueadmin/footer.php';

?>
