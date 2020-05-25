<?php
class EvenementPortefolio
{
  private $_evenementPortefolio_id;
  private $_evenementPortefolio_picture;
  private $_evenementPortefolio_originPicture;
  private $_evenementPortefolio_evenement;
  private $_evenementPortefolio_lieu;
  private $_evenementPortefolio_date;
  private $_evenementPortefolio_other;



//constructeur
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




  //Getter//
public function evenementPortefolio_id()
  {
    // retourne la valeur de l'id
    return $this->_evenementPortefolio_id;
  }

  public function evenementPortefolio_picture()
  {
    // retourne le lien de l'image
    return $this->_evenementPortefolio_picture;
  }

public function evenementPortefolio_originPicture()
{
// retourne le lien de l'image en format original
  return $this->_evenementPortefolio_originPicture;
}

public function evenementPortefolio_evenement()
{
  //renvoie la description de l'évenement
    return $this->_evenementPortefolio_evenement;
}

public function evenementPortefolio_lieu()
{
  //renvoie le nom du lieu
return $this->evenementPortefolio_lieu;
}

public function evenementPortefolio_date()
{
  //renvoie la date de l'evenement
  return $this->_evenementPortefolio_date;
}

public function evnementPortefolio_other()
{
  // renvoie d'autres elements
  return $this->_evenementPortefolio_other;
}

// Seater//


  public function setEvenementPortefolio_id($id)
  {
    // permet une interaction avec l'id
    $id = (int) $id;

    if ($id > 0)
    {
      $this->_evenementPortefolio_id= $id;
    }
  }

  public function setEvenementPortefolio_picture($picture)
  {
    //permet une interaction avec le lien de l'image
    if (is_string($picture))
    {
      $this->_evenementPortefolio_picture = $picture;
    }
  }

  public function setEvenementPortefolio_originPicture($originPicture)
  {
    // permet une interaction avec le lien originale de l'image
    if (is_string($originPicture))
    {
      $this->_evenementPortefolio_originPicture= $originPicture;
    }
  }

  public function setEvenementPortefolio_evenement($evenemet)
  {
    // retourne le texte de l'évenement
    if (is_string($evenement))
    {
      $this->_evenementPortefolio_evenement = $evenement;
    }
  }
public function setEvenementPortefolio_lieu($lieu)
{
  // retourne le nom du lieu de l'évenement
  if (is_string($lieu))
  {
    $this->_evenementPortefolio_lieu = $lieu;
  }
}

public function setEvenementPortefolio_date($date)
{
  // retourne la date de l'évenement
  if(is_int($date))
  {
    $this->_evenementPortefolio_date = $date;
  }
}

public function setEvenementPortefolio_other($other)
{
  // renvoie d'autres elements
if(is_string($other))
{
  $this->_evenementPortefolio_other = $other;
}
}




}


?>





<?php



 ?>
