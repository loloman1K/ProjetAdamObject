<?php

require '../../../identifier.php';
require '../../../chargeauto.php';
//require '../../../vue/header.php';
?>


<div class="banner">
	<h1 style="margin-bottom:4vh">Un article effacé !</h1>
	</div>

<?php
	$id = $_GET['id'];


$monArtRepo = new ArticleRepository($db);
$monArtRepo->delete($id);

?>
<?php
//require '../../../vue/footer.php';
?>
