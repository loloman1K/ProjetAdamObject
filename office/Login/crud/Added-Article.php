<?php
require '../../../identifier.php';
require '../../../chargeauto.php';
require '../../vueadmin/header.php';
?>

<link rel="stylesheet" href="../../../bootstrap-4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/style_tablette.css">
<link rel="stylesheet" href="../../../css/style_smartphone.css">

  <h1 style="margin-bottom:4vh">Article Ajouté</h1>


<?php

$id = 4;
$picture = $_POST['picture'];
$originPicture = $_POST['originPicture'];
$titre = $_POST['titre'];
$page = $_POST['page'];
$texte = $_POST['texte'];
$abstract = "";
$link = "";

$articleTable = array(
  "id_art" => $id,
  "picture_art" => $picture,
  "originPict_art" => $originPicture,
  'title_art' => $titre,
  'page_art' => $page,
  'text_art' => $texte,
  'abstract_art' => $abstract,
  'link_art' => $link);

$myArticle = new Article($articleTable);

$myArticleRepo = new ArticleRepository($db);
echo var_dump($myArticleRepo->getListName());
$myArticleRepo -> add($myArticle);

  echo " <article>
              <img src=../../../images/". $articleTable['picture_art']." width='320' height='200' class='img-fluid' "."</img>
              <img src=../../../images/". $articleTable['originPict_art']." width='320' height='200' class='img-fluid' "."</img>
              <p> Titre : ". $articleTable['title_art'] . "</p>
              <p> Page : ". $articleTable['page_art'] ."</p>
              <p> Texte : ". $articleTable['text_art'] ."</p>
      </article>";

?>
<?php

require '../../vueadmin/footer.php';

?>
