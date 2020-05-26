<?php
class AdamRepository
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

  public function add(Adam $article)
  {
    //prepare une requete d'ajout d'article
    $request = $this->_db->prepare("INSERT INTO article(article_title, article_page, article_text, article_abstract, article_picture, article_originPicture, article_link) VALUES (:title, :page, :text, :abstract, :picture, :originPicture, :link)");
    //execute la requette avec un tableau d'association
    $request->execute(array(
      'title' => $article->article_title(),
      'page' => $article->article_page(),
      'text' => $article->article_text(),
      'abstract' => $article->article_abstract(),
      'picture' => $article->article_picture(),
      'originPicture' => $article->article_originPicture(),
      'link' => $article->article_link()

    ));
    // On hydrate l'objet afin que son id deviennt l'id qui vient
    //d'être créé
    $alien->hydrate(array(
      'article_id' => $this->_db->lastInsertId()
    ));
  }

  //création du 'read'
  public function get($id)
  {
      //on vérifie que le paramètre est bien un id
      if (is_int($id)) {
          //on prépare la requete SELECT
          $request = $this->_db->query("SELECT * FROM article
      WHERE article_id = $id");
          // On récupère le résultat dans un tableau
          $donnees = $request->fetch();
          // on retourne un nouvel objet article construit
          //avec les donnees récupérer de la BDD
          return new Article($donnees);
      }
  }

  public function getListName()
  {
      $tabloDonnees = [];
      //execute une requete SELECT qui récupère les donnée des articles
      $req = $this->_db->query("SELECT * FROM article");
      //  transformer le résultat en array
      while ($donnees = $req->fetch()) {
        array_push($tabloDonnees, $donnees);
      }
      // retourner cet array
      return $tabloDonnees;
  }

  public function update(Adam $adam)
  {
      // On prépare la requete afin de modifier un article  dans
      // la BDD, puis on execute en injectant
      // l'attribut $_nom de l'objet $story
      $request = $this->_db->prepare("UPDATE Adam SET article_title= :title, article_page= :page, article_text= :text, article_abstract= :abstract, article_picture= :picture, article_originPicture= :originPicture, article_link= :link WHERE article_id=".$article->article_id());
      $request->execute(array(
        'title' => $article->article_title(),
        'page' => $article->article_page(),
        'text' => $article->article_text(),
        'abstract' => $article->article_abstract(),
        'picture' => $article->article_picture(),
        'originPicture' => $article->article_originPicture(),
        'link' => $article->article_link()

      ));

  }

  public function delete($adam_id)
  {
      // execute une requete DELETE pour supprimer un article Camps avec son id
      $this->_db->exec("DELETE FROM article WHERE article_id=".$article_id);

  }

  public function getCountById()
  {
      $tabloCount = [];
      //execute une requete SELECT qui récupère uniquement les titres de  chaque articles
      $req = $this->_db->query("SELECT COUNT(*) FROM article");
      $tabloCount = $req->fetch();

      return $tabloCount;
  }
}




 ?>
