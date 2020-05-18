<?php

/*Fonction qui detail les articles archivés*/
function AfficheArticleHome($idget)
{
  $dbh = new PDO('mysql:host=localhost;dbname=Adam', 'root', 'root');

$reponse = $dbh->query('SELECT * FROM article WHERE article_id = 1'); /* WHERE id_lieu=".$lieu->id_lieu());*/
  while ($donnees = $reponse->fetch()) {
    echo "<article style='flex-direction:column'>

      <h3>" . $donnees['article_title'] . "</h3>
            <p>" . $donnees['article_text'] . "</p>
            <h4 style='margin-top:3vh;'><a href =" . $donnees['article_link'] . "> Cliquez ici pour consulter l'article </a></h4>

        </article>";
  }
}





/*fonction qui pilote le titre de la section Camsp et sa mise en forme */
function AfficheArticleCamspHomeAside()
{
  $dbh = new PDO('mysql:host=localhost;dbname=Adam', 'root', 'root');
$reponse = $dbh->query('SELECT * FROM article WHERE article_id = 2');
  while ($donnees = $reponse->fetch()) {
echo "<aside>
    <h3>" . $donnees['article_title'] . "</h3>;
</aside>";

}
}


/*fonction qui pilote la section Camsp et sa mise en forme */
function AfficheArticleCamspHome()
{
  $dbh = new PDO('mysql:host=localhost;dbname=Adam', 'root', 'root');
$reponse = $dbh->query('SELECT * FROM article WHERE article_id = 2');
  while ($donnees = $reponse->fetch()) {
    echo  " <article>
  <p style='width: 36vw;'>" . $donnees['article_text'] . "</p>
  <img src='data/" . $donnees['article_picture'] . "'>
  </article>";
  }
}





function AfficheArticleCamspHomeNext()
{
  $dbh = new PDO('mysql:host=localhost;dbname=Adam', 'root', 'root');

$reponse = $dbh->query('SELECT * FROM article WHERE article_id = 3');
  while ($donnees = $reponse->fetch()) {
    echo "<article>

      <h3>" . $donnees['article_title'] . "</h3>
        <img src='data/" . $donnees['article_picture'] . "'>
            <p>" . $donnees['article_text'] . "</p>
            <h4><a href =" . $donnees['article_link'] . "> Cliquez ici pour consulter l'article</a> </h4>

        </article>";
  }
}


/*films AD période 2018*/



function AfficheLastMovie2018()
{
  $dbh = new PDO('mysql:host=localhost;dbname=Adam', 'root', 'root');
$reponse = $dbh->query('SELECT * FROM filmsad WHERE filmsad_annee = 2018');
  while ($donnees = $reponse->fetch()) {
    echo  " <tr>
  <td style='width:20vw; border:3px solid #bbd98f;'>" . $donnees['filmsad_title'] . "</td>
  <td style='width:20vw; border:3px solid #d7c095;'>" . $donnees['filmsad_director'] . "</td>
  <td style='width:20vw; border:3px solid #1f2c37;'>" . $donnees['filmsad_kind'] . "</td>
  <td style='width:4vw; border:3px solid #bbd98f;'>" . $donnees['filmsad_annee'] . "</td>
  <td style='width:4vw; border:3px solid #d7c095;'>" . $donnees['filmsad_duration'] . "</td>

  </tr>";
  }
}















?>
