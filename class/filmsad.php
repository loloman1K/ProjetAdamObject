<?php
class Filmsad
{
  private $_filmsad_id;
  private $_filmsad_title;
  private $_filmsad_director;
  private $_filmsad_kind;
  private $_filmsad_annee;
  private $_filmsad_duration;


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
public function filmsad_id()
  {
    // retourne la valeur de l'id
    return $this->_filmsad_id;
  }

  public function flimsad_title()
  {
    // retourne le titre du film
    return $this->_filmsad_title;
  }

public function filmsad_director()
{
// retourne le nom du ou des réalisateurs
  return $this->_filmsad_director;
}

public function filmsad_kind()
{
  //renvoie la catégorie du film
    return $this->_filmsad_kind;
}

public function filmsad_annee()
{
  // renvoie l'annee de la première diffusion au cinéma
  return $this->_filmsad_annee;
}

public function $_filmsad_duration()
{
  // renvoi la durée du film
  return $this->_filmsad_duration;
}


// Seater//


  public function setFilmsad_id($id)
  {
    // permet une interaction avec l'id
    $id = (int) $id;

    if ($id > 0)
    {
      $this->_filmsad_id= $id;
    }
  }

  public function setFilmsad_title($title)
  {
    //permet une interaction avec le titre du film
    if (is_string($title))
    {
      $this->_filmsad_title = $title;
    }
  }

  public function setFilmsad_director($director)
  {
    // retourne le nom du ou des réalisateur
    if (is_string($director))
    {
      $this->_filmsad_director = $director;
    }
  }

  public function setKind($kind)
  {
    // retourne la catégorie du fim
    if (is_string($kind))
    {
      $this->_filmsad_kind = $kind;
    }
  }

public function filmsad_annee($annee)
{
  // retourne l'annee de la première diffusion du film
  if (is_string($annee))
  {
    $this->_filmsad_annee = $annee;
  }
}

public function setFilmsad_duration($duration)
{
  // retourne la durée du film
  if(is_string($duration))
  {
    $this->_filmsad_duration = $duration;
  }
}









}


?>





<?php



 ?>
