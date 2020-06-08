<?php

require '../../vueadmin/header.php';

?>

<?php
$id = $_GET['id'];
$date = $_GET['date'];
$text = $_GET['text'];
$picture = $_GET['picture'];
$originPicture = $_GET['$originPicture']
?>

<h1>Update Story</h1>

<form method=POST action=ScriptUpdateOutil.php>
  <div class="row">
  <div class="col-1">
      <input type="hidden" id="id" name="id" class="form-control"  value="<?php echo $id ?>" >
    </div>
    <div class="col-3">
      <input type="text" id="nom" name="nom" class="form-control"  value="<?php echo $nom ?>" required placeholder="date">
    </div>
    <div class="col-3">
      <input type="text" id="role" name="role" class="form-control" value="<?php echo $text ?>" required placeholder="text">
    </div>
    <div class="col-3">
      <input type="text" id="role" name="role" class="form-control" value="<?php echo $picture ?>" required placeholder="picture">
    </div>
    <div class="col-3">
      <input type="text" id="role" name="role" class="form-control" value="<?php echo $originPicure ?>" required placeholder="$originPicure">
    </div>
    <button type="submit" style ="margin-right: 3vw;"class="btn btn-primary">Add tool</button>
  </div>
</form>







<?php

require '../../vueadmin/footer.php';

 ?>
