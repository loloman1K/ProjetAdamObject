<?php

class EvenementPortefolioRepository
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

  public function add(EvenementPortefolio $evenementPortefolio)
  {
    //prepare une requete d'ajout d'un evenement Portefolio
    $request = $this->_db->prepare("INSERT INTO EvenementPortefolio(evenementPortefolio_picture, evenementPortefolio_originPicture, evenementPortefolio_evenement, evenementPortefolio_lieu, evenementPortefolio_date, evenementPortefolio_other) VALUES (:picture, :originPicture, :evenement, :lieu, :date, :other)");
    //execute la requette avec un tableau d'association
    $request->execute(array(
      'picture' => $evenementPortefolio->evenementPortefolio_picture(),
      'originPicture' => $evenementPortefolio->evenementPortefolio_originPicture(),
      'evenement' => $evenementPortefolio->evenementPortefolio_evenement(),
      'lieu' => $evenementPortefolio->evenementPortefolio_lieu(),
      'date' =>$evenementPortefolio->evenementPortefolio_date(),
      'other' =>$evenementPortefolio->evenementPortefolio_other()
    ));
    // On hydrate l'objet afin que son id deviennt l'id qui vient
    //d'être créé
    $alien->hydrate(array(
      'EvenementPortefolio_id' => $this->_db->lastInsertId()
    ));
  }

  //création du 'read'
  public function get($id)
  {
      //on vérifie que le paramètre est bien un id
      if (is_int($id)) {
          //on prépare la requete SELECT
          $request = $this->_db->query("SELECT * FROM evenementPortefolio
      WHERE evenementPortefolio_id = $id");
          // On récupère le résultat dans un tableau
          $donnees = $request->fetch();
          // on retourne un nouvel objet evenementPortefolio construit
          //avec les donnees récupérer de la BDD
          return new EvenementPortefolio($donnees);
      }
  }

  public function getListName()
  {
      $tabloDonnees = [];
      //execute une requete SELECT qui récupère les caractéristique des evenements
      $req = $this->_db->query("SELECT * FROM evenementPortefolio");
      //  transformer le résultat en array
      while ($donnees = $req->fetch()) {
        array_push($tabloDonnees, $donnees);
      }
      // retourner cet array
      return $tabloDonnees;
  }

  public function update(EvenementPortefolio $evenementPortefolio)
  {
      // On prépare la requete afin de modifier un evenement du portefolio dans
      // la BDD, puis on execute en injectant
      // l'attribut $_nom de l'objet $filmsad
      $request = $this->_db->prepare("UPDATE evenementPortefolio SET evenementPortefolio_picture= :picture, evenementPortefolio_originPicture= :originPortefolio, evenementPortefolio_evenement= :evenement, evenementPortefolio_lieu= :lieu, evenementPortefolio_date= :date, evenementPortefolio_other= :other WHERE evenementPortefolio_id=".$evenementPortefolio->evenementPortefolio_id());
      $request->execute(array(
        'picture' => $evenementPortefolio->evenementPortefolio_picture(),
        'originPicture' => $evenementPortefolio->evenementPortefolio_originPicture(),
        'evenement' => $evenementPortefolio->evenementPortefolio_evenement(),
        'lieu' => $evenementPortefolio->evenementPortefolio_lieu(),
        'date' =>$evenementPortefolio->evenementPortefolio_date(),
        'other' =>$evenementPortefolio->evenementPortefolio_other()
      ));

  }

  public function delete($evenementPortefolio_id)
  {
      // execute une requete DELETE pour supprimer un evenement avec son id
      $this->_db->exec("DELETE FROM evenementPortefolio WHERE evenementPortefolio_id=".$evenementPortefolio_id);

  }

  public function getCountById()
  {
      $tabloCount = [];
      //execute une requete SELECT qui récupère uniquement les liens image de chaques evenements
      $req = $this->_db->query("SELECT COUNT(*) FROM evenementPortefolio");
      $tabloCount = $req->fetch();

      return $tabloCount;
  }
}



?>
