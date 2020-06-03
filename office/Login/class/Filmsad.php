<?php
class Filmsad{
  //définir les attributs
  private $_id_film;
  private $_title_film;
  private $_director_film;
  private $_kind_film;
  private $_annee_film;
  private $_duration_film;


  //CONSTRUCTEUR
  public function __construct(array $donnees)
  {
      $this->hydrate($donnees);
  }

  //Fonction hydratation (pour donner des valeurs aux attributs)
  public function hydrate(array $donnees)
  {
      foreach ($donnees as $key => $value) {
          $method = 'set' . ucfirst($key);

          if (method_exists($this, $method)) {
              $this->$method($value);
          }
      }
  }

  //GETTER
   public function id_film()
   {
       return $this->_id_film;
   }

   public function title_film()
   {
       return $this->_title_film;
   }

   public function director_film()
   {
       return $this->_director_film;
   }

   public function kind_film()
   {
       return $this->_kind_film;
   }

   public function annee_film()
   {
       return $this->_annee_film;       
   }

   public function duration_film()
   {
       return $this->_duration_film;
   }

   //SETTER
   public function setId_film($id)
   {
       $id = (int) $id;

       if ($id > 0) {
           $this->_id_film = $id;
       }
   }

   public function setTitle_film($nom)
   {
       if (is_string($nom)) {
           $this->_title_film = $nom;
       }
   }

   public function setDirector_film($page)
   {
       if (is_string($page)) {
           $this->_director_film = $page;
       }
   }

   public function setKind_film($carac)
   {
       if (is_string($carac)) {
           $this->_kind_film = $carac;
       }
   }

   public function setAnnee_film($id)
   {
     $id = (int) $id;

     if ($id > 0) {
         $this->_annee_film = $id;
     }
   }


   public function setDuration_film($race)
   {
       if (is_string($race)) {
           $this->_duration_film = $race;
       }
   }

}

?>
