<?php

class Story
{
    private $_id_story;
    private $_date_story;
    private $_text_story;
    private $_picture_story;
    private $_originPicture_story;


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
    public function id_story()
    {
        //retourne id_story
        return $this->_id_story;
    }

public function date_story()
{
    //retourne date_story
    return $this->_date_story;
}

public function text_story()
{
    //retourne text_story
    return $this->_text_story;
}

public function picture_story()
{
    //retourne picture_story
    return $this->_picture_story;
}

public function originPicture_story()
{
    //retourne originPicture_story
    return $this->_originPicture_story;
}

 //SETTERS
 public function setId_story($id)
 {
     $id = (int) $id;

     if ($id > 0) {
         $this->_id_story = $id;
     }
 }

 public function setDate_story($date)
 {
     if (is_string($date)) {
         $this->_date_story = $date;
     }
 }

 public function setText_story($text)
 {
     if (is_string($text)) {
         $this->_text_story = $text;
     }
 }

 public function setPicture_story($picture)
 {
     if (is_string($picture)) {
         $this->_picture_story = $picture;
     }
 }

 public function setOriginPicture_story($originPicture)
 {
     if (is_string($originPicture)) {
         $this->_OriginPicture_story = $originPicture;
     }
 }
}

?>
