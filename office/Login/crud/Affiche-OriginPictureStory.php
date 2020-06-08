<?php
require '../../../identifier.php';
require '../../../chargeauto.php';
?>

<link rel="stylesheet" href="../../../bootstrap-4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/style_tablette.css">
<link rel="stylesheet" href="../../../css/style_smartphone.css">

	

    <a href="Liste-Story.php" class="btn btn-outline-info">Retour à la page des portefolio</a>
<?php

$id = $_GET['id'];


$myStoryRepo = new StoryRepository($db);

$storyTable = $myStoryRepo->AfficheOriginPicture($id);



echo " <div class='card' style='width:45%; margin-top:5%;'>
<img src=../../../images/".$storyTable[0]['originPicture_story']." width='480' class='img-fluid' style='margin:auto; margin-top:1%; margin-bottom:2%;' "."</img>

</div>";

?>
