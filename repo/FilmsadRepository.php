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

  public function add(Filmsad $filmsad)
  {
    //prepare une requete d'ajout de recette
    $request = $this->_db->prepare("INSERT INTO filmsad(filmsad_title, filmsad_director, filmsad_kind, fillmsad_annee, filmsad_duration) VALUES (:title, :director, :kind, :annee, :duration)");
    //execute la requette avec un tableau d'association
    $request->execute(array(
      'title' => $filmsad->filmsad_title(),
      'director' => $filmsad->filmsad_director(),
      'kind' => $filmsad->filmsad_kind(),
      'annee' => $filmsad->filmsad_annee(),
      'duration' =>$filmsad->filmsad_duration()
    ));
    // On hydrate l'objet afin que son id deviennt l'id qui vient
    //d'être créé
    $alien->hydrate(array(
      'filmsad_id' => $this->_db->lastInsertId()
    ));
  }

  //création du 'read'
  public function get($id)
  {
      //on vérifie que le paramètre est bien un id
      if (is_int($id)) {
          //on prépare la requete SELECT
          $request = $this->_db->query("SELECT * FROM filmsad
      WHERE filmsad_id = $id");
          // On récupère le résultat dans un tableau
          $donnees = $request->fetch();
          // on retourne un nouvel objet film construit
          //avec les donnees récupérer de la BDD
          return new Filmsad($donnees);
      }
  }

  public function getListName()
  {
      $tabloDonnees = [];
      //execute une requete SELECT qui récupère les caractéristique des films AD
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
      // On prépare la requete afin de modifier un film  dans
      // la BDD, puis on execute en injectant
      // l'attribut $_nom de l'objet $filmsad
      $request = $this->_db->prepare("UPDATE filmsad SET nom_alien= :nom, race_alien= :race, carac_alien= :carac WHERE id_alien=".$alien->id_alien());
      $request->execute(array(
          'title' => $filmsad->filmsad_title(),
          'director' => $filmsad->filmsad_director(),
          'kind' => $filmsad->filmsad_kind(),
          'annee' => $filmsad->filmsad_annee(),
          'duration' => $filmsad->filmsad_duration()
      ));

  }

  public function delete($filmsad_id)
  {
      // execute une requete DELETE pour supprimer un alien avec son id
      $this->_db->exec("DELETE FROM filmsad WHERE filmsad_id=".$filmsad_id);

  }

  public function getCountById()
  {
      $tabloCount = [];
      //execute une requete SELECT qui récupère uniquement les titres de chaques films
      $req = $this->_db->query("SELECT COUNT(*) FROM filmsad");
      $tabloCount = $req->fetch();

      return $tabloCount;
  }
}



?>
