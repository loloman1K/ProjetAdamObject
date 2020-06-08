<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<div class="banner">
  <h1 style="margin-bottom:4vh">Updated Tool</h1>
</div>

<?php
$id = $_POST['id'];
$date = $_POST['date'];
$text = $_POST['text'];
$picture = $_POST['picture'];
$originPicure = $_POST['originPicture'];


$tabloOutil = array(
  "id_story" => $id,
  "date_story" => $date,
  "text_story" => $text,
  "picture_story" => $picture,
  "originPicture" => $originPicture

);

$monOutil = new Story($tabloStory);

$monOutilRepo = new StoryRepository($db);

$monOutilRepo -> update($monOutil);

  echo " <article>
              <h3>" . $tabloOutil['date_story'] . "</h3>
              <p> Role : ". $tabloOutil['text_story'] . "</p>
                <p> Role : ". $tabloOutil['picture_story'] . "</p>
                  <p> Role : ". $tabloOutil['originPicture_story'] . "</p>
      </article>";

?>
