<?php
class AdamStoryIntroduction
{
public $_adamStoryIntroduction_text;


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
public function adamStoryIntroduction_text()
  {
    // retourne la valeur du texte de l'article
    return $this->_adamStoryIntroduction_text;
  }


// Seater//



  public function setAdamStoryIntroduction_text($text)
  {
    //permet une interaction avec l'introduction de Adam's story
    if (is_string($text))
    {
      $this->_setAdamStoryIntroduction_text = $text;
    }
  }


}


?>





<?php



 ?>
