<?php
require '../../../identifier.php';
require '../../../chargeauto.php';
require '../../vueadmin/header.php';
?>

<link rel="stylesheet" href="../../../bootstrap-4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/style_tablette.css">
<link rel="stylesheet" href="../../../css/style_smartphone.css">

  <h1 style="margin-bottom:4vh">Story Ajoutée</h1>


<?php

$id = 4;
$date = $_POST['date'];
$text = $_POST['text'];
$picture = $_POST['picture'];
$originPicture = $_POST['originPicture'];


$storyTable = array(
  "id_story" => $id,
  "date_story" =>$date,
  "text_story" =>$text,
  "picture_story" => $picture,
  "originPicture_story" => $originPicture
);

$myStory = new Story($storyTable);

$myStoryRepo = new StoryRepository($db);

$myStoryRepo -> add($myStory);

  echo " <article>
              <p> Date : ". $storyTable['date_story'] ."</p>
              <p> Description : ". $storyTable['text_story'] ."</p>
              <img src=../../../images/". $storyTable['picture_story']." width='320' height='200' class='img-fluid' "."</img>
              <img src=../../../images/". $storyTable['originPicture_story']." width='320' height='200' class='img-fluid' "."</img>
      </article>";

?>
<?php

require '../../vueadmin/footer.php';

?>
