<?php
require '../../../identifier.php';
require '../../../chargeauto.php';
?>

<link rel="stylesheet" href="../../../bootstrap-4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/style_tablette.css">
<link rel="stylesheet" href="../../../css/style_smartphone.css">

	<h1>Story supprimée</h1>

    <a href="../LoggedIn.php?testlog=9747272180611" class="btn btn-outline-info">Retour à la page de gestion</a>
<?php

$id = $_GET['id'];


$myStoryRepo = new StoryRepository($db);
$myStoryRepo->delete($id);



?>
