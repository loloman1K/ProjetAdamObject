<?php

	
    class Portefolio 
{
//définition des attributs
private $_id_portefolio;
private $_picture_portefolio;
private $_originPicture_portefolio;
private $_evenement_portefolio;
private $_lieu_portefolio;
private $_date_portefolio;
private $_other_portefolio;

//constructeur
public function __construct(array $donnees)
{
    $this->hydrate($donnees);
}

    //Fonction hydrate (pour donner des valeurs aux attributs)
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);
        
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    //Getters
public function id_portefolio()
{
    //retourne id_portefolio
    return $this->_id_portefolio;
}

public function picture_portefolio()
{
    //retourne le picture_portefolio
    return $this->_picture_portefolio;
}

public function originPicture_portefolio()
{
    //retourne le public function originPicture_portefolio
    return $this->_originPicture_portefolio;
}

public function evenement_portefolio()
{
    //retourne le public function evenement_portefolio
    return $this->_evenement_portefolio;
}

public function lieu_portefolio()
{
    //retourne le public function lieu_portefolio
    return $this->_lieu_portefolio;
}

public function date_portefolio()
{
    //retourne le public function date_portefolio
    return $this->_date_portefolio;
}

public function other_portefolio()
{
    //retourne le public function date_portefolio
    return $this->_other_portefolio;
}


 //SETTERS
 public function setId_portefolio($id)
 {
     $id = (int) $id;

     if ($id > 0) {
         $this->_id_portefolio = $id;
     }
 }

 public function setPicture_portefolio($picture)
 {
     if (is_string($picture)) {
         $this->_picture_portefolio = $picture;
     }
 }

 public function setOriginPicture_portefolio($originPicture)
 {
     if (is_string($originPicture)) {
         $this->_originPicture_portefolio = $originPicture;
     }
 }

 public function setEvenement_portefolio($evenement)
 {
     if (is_string($evenement)) {
         $this->_evenement_portefolio = $evenement;
     }
 }

 public function setLieu_portefolio($lieu)
 {
     if (is_string($lieu)) {
         $this->_lieu_portefolio = $lieu;
     }
 }

 public function setDate_portefolio($date)
 {
     if (is_string($date)) {
         $this->date_portefolio = $date;
     }
 }

 public function setOther_portefolio($other)
 {
     if (is_string($other)) {
         $this->other_portefolio = $other;
     }
 }

}

?>
