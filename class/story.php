<?php
class Story
{
  private $_story_id;
  private $_story_date;
  private $_story_text;
  private $_story_picture;
  private $_story_originPicture;


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
public function story_id()
  {
    // retourne la valeur de l'id
    return $this->_story_id;
  }

  public function story_date()
  {
    // retourne la date de l'évenement
    return $this->_story_date;
  }

public function story_text()
{
// retourne la valeur du text de l'évenement
  return $this->_story_text;
}

public function story_picture()
{
  //renvoie le lien de l'images
    return $this->_story_picture;
}

public function story_originPicture()
{
  // renvoie le l'ien de l'image originale
  return $this->_story_originPicture;
}

// Seater//


  public function setStory_id($id)
  {
    // permet une interaction avec l'id
    $id = (int) $id;

    if ($id > 0)
    {
      $this->_story_id = $id;
    }
  }

  public function setStory_date($date)
  {
    //permet une interaction avec la date de l'évenement
    if (is_integer($date))
    {
      $this->_story_date = $date;
    }
  }

  public function setStory_text($text)
  {
    // permet une interaction avec le text de l'évenement
    if (is_string($text))
    {
      $this->_story_text= $text;
    }
  }

  public function setStory_picture($picture)
  {
    // permet une interaction avec le lien photo
    if (is_string($text))
    {
      $this->_story_picture= $picture;
    }
  }

  public function setStory_originPicture($originPicture)
  {
    // permet une interaction avec le lien photo originale
    if (is_string($originPicture))
    {
      $this->_story_originPicture = $originPicture;
    }
  }








}


?>





<?php



 ?>
