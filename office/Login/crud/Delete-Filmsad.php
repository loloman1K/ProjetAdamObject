<?php

require '../../../identifier.php';
require '../../../chargeauto.php';
require '../../../vue/header.php';
?>


<div class="banner">
	<h1 style="margin-bottom:4vh">Film audio effacé !</h1>
	</div>

<?php
	$id = $_GET['id'];


$monFilmRepo = new FilmsadRepository($db);
$monFilmRepo->delete($id);

?>
<?php
require '../../../vue/footer.php';
?>
