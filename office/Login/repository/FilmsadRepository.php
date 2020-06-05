<?php

class FilmsadRepository
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
 public function add(Filmsad $filmsad)
 {
   //prepare une requete d'ajout de Portefolio
   $request = $this->_db->prepare("INSERT INTO filmsad(title_film, director_film, kind_film, annee_film, duration_film) VALUES (:title, :director, :kind, :annee, :duration)");
   //execute la requette avec un tableau d'atitle_ssociation
   $request->execute(array(
     'title' => $filmsad->title_film(),
     'director' => $filmsad->director_film(),
     'kind' => $filmsad->kind_film(),
     'annee' => $filmsad->annee_film(),
     'duration' => $filmsad->duration_film()
   ));
   // On hydrate l'objet afin que son id deviennt l'id qui vient
   //d'être créé
   $filmsad->hydrate(array(
     '_id_film' => $this->_db->lastInsertId()
   ));
 }

   //'READ'
   public function get($id)
   {
       //on vérifie que le paramètre est bien un id
       if (is_int($id)) {
           //on prépare la requete SELECT
           $request = $this->_db->query("SELECT * FROM filmsad
       WHERE id_film = $id");
           // On récupère le résultat dans un tableau
           $donnees = $request->fetch();
           // on retourne un nouvel objet alien construit
           //avec les donnees récupérer de la BDD
           return new Portefolio($donnees);
       }
   }

   public function getListName()
   {
       $tabloDonnees = [];
       //execute une requete SELECT qui récupère uniquement les noms de chaque portefolio
       $req = $this->_db->query("SELECT * FROM filmsad");
       //  transformer le résultat en array
       while ($donnees = $req->fetch()) {
         array_push($tabloDonnees, $donnees);
       }
       // retourner cet array
       return $tabloDonnees;
   }

   public function update(Filmsad $filmsad)
   {
       // On prépare la requete afin de modifier un Portefolio dans
       // la BDD, puis on execute en injectant
       // l'attribut $_nom de l'objet $Portefolio
       $request = $this->_db->prepare("UPDATE filmsad SET title_film= :title, director_film= :director, kind_film= :kind, annee_film= :annee, duration_film= :duration
         WHERE id_film=".$filmsad->id_film());
       $request->execute(array(
           'title' => $filmsad->title_film(),
           'director' => $filmsad->director_film(),
           'kind' => $filmsad->kind_film(),
           'annee' => $filmsad->annee_film(),
           'duration' => $filmsad->duration_film()
       ));
   }

   public function delete($id_film)
   {
       // execute une requete DELETE pour supprimer un portefolio avec son id
       $this->_db->exec("DELETE FROM filmsad WHERE id_film=".$id_film);

   }

   public function getCountById()
   {
       $tabloCount = [];
       //execute une requete SELECT qui récupère uniquement les noms de chaque portefolio
       $req = $this->_db->query("SELECT COUNT(*) FROM filmsad");
       $tabloCount = $req->fetch();

       return $tabloCount;
   }
 }

 ?>
