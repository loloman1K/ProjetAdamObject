<?php
class StoryRepository
{

  //connexion à la bdd
  private $_db;

  public function __construct($db)
  {
    $this ->setDb($db);
  }

  //SETTER
  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }

  public function add(Story $story)
  {
    //prepare une requete d'ajout d'article
    $request = $this->_db->prepare("INSERT INTO story(filmsad_date, story_text, story_picture, story_originPicture) VALUES (:date, :text, :picture, :originPicture)");
    //execute la requette avec un tableau d'association
    $request->execute(array(
      'date' => $story->story_date(),
      'text' => $story->story_text(),
      'picture' => $story->story_picture_kind(),
      'originPicture' => $story->story_originPicture()

    ));
    // On hydrate l'objet afin que son id deviennt l'id qui vient
    //d'être créé
    $alien->hydrate(array(
      'story_id' => $this->_db->lastInsertId()
    ));
  }

  //création du 'read'
  public function get($id)
  {
      //on vérifie que le paramètre est bien un id
      if (is_int($id)) {
          //on prépare la requete SELECT
          $request = $this->_db->query("SELECT * FROM story
      WHERE story_id = $id");
          // On récupère le résultat dans un tableau
          $donnees = $request->fetch();
          // on retourne un nouvel objet story construit
          //avec les donnees récupérer de la BDD
          return new Story($donnees);
      }
  }

  public function getListName()
  {
      $tabloDonnees = [];
      //execute une requete SELECT qui récupère les donnée des articles story
      $req = $this->_db->query("SELECT * FROM story");
      //  transformer le résultat en array
      while ($donnees = $req->fetch()) {
        array_push($tabloDonnees, $donnees);
      }
      // retourner cet array
      return $tabloDonnees;
  }

  public function update(Story $story)
  {
      // On prépare la requete afin de modifier un article  dans
      // la BDD, puis on execute en injectant
      // l'attribut $_nom de l'objet $story
      $request = $this->_db->prepare("UPDATE story SET story_date= :date, story_text= :text, story_picture= :picture WHERE story_id=".$story->story_id());
      $request->execute(array(
          'date' => $story->story_date(),
          'text' => $story->story_text(),
          'picture' => $story->story_picture(),
          'originPicture' => $story->story_originPicture()

      ));

  }

  public function delete($story_id)
  {
      // execute une requete DELETE pour supprimer un article avec son id
      $this->_db->exec("DELETE FROM story WHERE story_id=".$story_id);

  }

  public function getCountById()
  {
      $tabloCount = [];
      //execute une requete SELECT qui récupère uniquement les date de chaque articles
      $req = $this->_db->query("SELECT COUNT(*) FROM story");
      $tabloCount = $req->fetch();

      return $tabloCount;
  }
}




 ?>
