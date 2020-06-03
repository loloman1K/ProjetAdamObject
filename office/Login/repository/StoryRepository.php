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

 //  'ADD'
 public function add(Story $story)
 {
   //prepare une requete d'ajout de Story
   $request = $this->_db->prepare("INSERT INTO story(date_story, text_story, picture_story, originPicture_story) VALUES (:date, :text, :picture, :originPicture)");
   //execute la requette avec un tableau d'association  
   $request->execute(array(
     'date' => $story->date_story(),
     'text' => $story->text_story(),
     'picture' => $story->originPicture_story(),
     'originPicture' => $story->originPicture_story(),
   ));
   // On hydrate l'objet afin que son id deviennt l'id qui vient 
   //d'être créé
   $story->hydrate(array(
     'id_story' => $this->_db->lastInsertId()
   ));
 }

   //'READ'
   public function get($id)
   {
       //on vérifie que le paramètre est bien un id
       if (is_int($id)) {
           //on prépare la requete SELECT
           $request = $this->_db->query("SELECT * FROM story
       WHERE id_story = $id");
           // On récupère le résultat dans un tableau
           $donnees = $request->fetch();
           // on retourne un nouvel objet alien construit
           //avec les donnees récupérer de la BDD
           return new Story($donnees);
       }
   }

   public function getListName()
   {
       $tabloDonnees = [];
       //execute une requete SELECT qui récupère uniquement les noms de chaque story
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
       // On prépare la requete afin de modifier un story dans 
       // la BDD, puis on execute en injectant 
       // l'attribut $_nom de l'objet $story
       $request = $this->_db->prepare("UPDATE story SET date_story= :date, text_story= :text, picture_story= :picture, originPicture_story= :originPicture WHERE id_story=".$story->id_story());
       $request->execute(array(
           'date' => $story->date_story(),
           'text' => $story->text_story(),
           'picture' => $story->picture_story(),
           'originPicture' => $story->originPicture_story()
       ));
   }

   public function delete($id_story)
   {
       // execute une requete DELETE pour supprimer un story avec son id
       $this->_db->exec("DELETE FROM story WHERE id_story=".$id_story);
       
   }

   public function getCountById()
   {
       $tabloCount = [];
       //execute une requete SELECT qui récupère uniquement les noms de chaque story
       $req = $this->_db->query("SELECT COUNT(*) FROM story");
       $tabloCount = $req->fetch();
   
       return $tabloCount;
   }
}