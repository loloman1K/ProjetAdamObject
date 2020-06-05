<?php

class ArticleRepository
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


//  'ADD'
 public function add(Article $article)
 {
   //prepare une requete d'ajout de Portefolio
   $request = $this->_db->prepare("INSERT INTO
     article(title_art, page_art, text_art, abstract_art,
       picture_art, originPict_art, link_art)
       VALUES (:title, :page, :text, :abstract, :picture,
         :originPict, :link)");
   //execute la requette avec un tableau d'association
   $request->execute(array(
     'title' => $article->title_art(),
     'page' => $article->page_art(),
     'text' => $article->text_art(),
     'abstract' => $article->abstract_art(),
     'picture' => $article->picture_art(),
     'originPict' => $article->originPict_art(),
     'link' => $article->link_art()
   ));
   // On hydrate l'objet afin que son id deviennt l'id qui vient
   //d'être créé
   $article->hydrate(array(
     'id_art' => $this->_db->lastInsertId()
   ));
   // echo $this->_db->lastInsertId();
 }

   //'READ'
   public function get($id)
   {
       //on vérifie que le paramètre est bien un id
       if (is_int($id)) {
           //on prépare la requete SELECT
           $request = $this->_db->query("SELECT * FROM article
       WHERE id_art = $id");
           // On récupère le résultat dans un tableau
           $donnees = $request->fetch();
           // on retourne un nouvel objet alien construit
           //avec les donnees récupérer de la BDD
           return new Article($donnees);
       }
   }

   public function getListName()
   {
       $tabloDonnees = [];
       //execute une requete SELECT qui récupère uniquement les noms de chaque portefolio
       $req = $this->_db->query("SELECT * FROM article");
       //  transformer le résultat en array
       while ($donnees = $req->fetch()) {
         array_push($tabloDonnees, $donnees);
       }
       // retourner cet array
       return $tabloDonnees;
   }

   public function update(Article $article)
   {
       $request = $this->_db->prepare("UPDATE article SET title_art= :title, page_art= :page, text_art= :text, abstract_art= :abstract, picture_art= :picture, originPict_art= :originPicture, link_art= :link WHERE id_art=".$article->id_art());
       $request->execute(array(
           'title' => $article->title_art(),
           'page' => $article->page_art(),
           'text' => $article->text_art(),
           'abstract' => $article->abstract_art(),
           'picture' => $article->picture_art(),
           'originPicture' => $article->originPict_art(),
           'link' => $article->link_art()
       ));
   }

   public function delete($id_art)
   {
       // execute une requete DELETE pour supprimer un portefolio avec son id
       $this->_db->exec("DELETE FROM article WHERE id_art=".$id_art);

   }

   public function getCountById()
   {
       $tabloCount = [];
       //execute une requete SELECT qui récupère uniquement les noms de chaque portefolio
       $req = $this->_db->query("SELECT COUNT(*) FROM article");
       $tabloCount = $req->fetch();

       return $tabloCount;
   }
 }

 ?>
