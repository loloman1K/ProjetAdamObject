<?php
class Article{
  //définir les attributs
  private $_id_art;
  private $_title_art;
  private $_page_art;
  private $_text_art;
  private $_abstract_art;
  private $_picture_art;
  private $_originPict_art;
  private $_link_art;

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
   public function id_art()
   {
       return $this->_id_art;
   }

   public function title_art()
   {
       return $this->_title_art;
   }

   public function page_art()
   {
       return $this->_page_art;
   }

   public function text_art()
   {
       return $this->_text_art;
   }

   public function abstract_art()
   {
       return $this->_abstract_art;
   }

   public function picture_art()
   {
       return $this->_picture_art;
   }

   public function originPict_art()
   {
       return $this->_originPict_art;
   }

   public function link_art()
   {
       return $this->_link_art;
   }


   //SETTER
   public function setId_art($id)
   {
       $id = (int) $id;

       if ($id > 0) {
           $this->_id_art = $id;
       }
   }

   public function setTitle_art($tit)
   {
       if (is_string($tit)) {
           $this->_title_art = $tit;
       }
   }

   public function setPage_art($page)
   {
       if (is_string($page)) {
           $this->_page_art = $page;
       }
   }

   public function setText_art($tex)
   {
       if (is_string($tex)) {
           $this->_text_art = $tex;
       }
   }

   public function setAbstract_art($abst)
   {
       if (is_string($abst)) {
           $this->_abstract_art = $abst;
       }
   }

   public function setPicture_art($pic)
   {
       if (is_string($pic)) {
           $this->_picture_art = $pic;
       }
   }

   public function setOriginPict_art($op)
   {
       if (is_string($op)) {
           $this->_originPict_art = $op;
       }
   }

   public function setLink_art($link)
   {
       if (is_string($link)) {
           $this->_link_art = $link;
       }
   }

}

?>
