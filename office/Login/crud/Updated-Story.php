<?php
require '../../../identifier.php';
require '../../../chargeauto.php';
?>

<link rel="stylesheet" href="../../../bootstrap-4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/style_tablette.css">
<link rel="stylesheet" href="../../../css/style_smartphone.css">

<title>Pour les Yeux d'Adam</title>

<h1>La Story a été modifié</h1>

<?php

$id = $_POST['id'];
$picture = $_POST['picture'];
$originPicture = $_POST['originPicture'];
$text = $_POST['text'];
$date = $_POST['date'];


$storyTable = array(
    "id_story" => $id,
    "picture_story" => $picture,
    'originPicture_story' => $originPicture,
    'text_story' => $text,
    'date_story' => $date);
  
  $myStory = new Story($storyTable);
  
  $myStoryRepo = new StoryRepository($db);
  
  $myStoryRepo -> update($myStory);

?>

<form class="w-75" style="margin:auto;">
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
        <label for="evenement" style="color:black;">Description Story</label>
        <input type="text" id="evenement" name="evenement" class="form-control"value="<?php echo $text ?>">
    </div>
    <div class="form-group">
        <label for="date" style="color:black;">Date Story</label>
        <input id="date" name="date" class="form-control" value="<?php echo $date ?>">
    </div>

    <a href="Liste-Story.php" class="btn btn-outline-info">Retour à la page des Story</a>