<?php
class Camps
{
  private $_article_id;
  private $_article_title;
  private $_article_page;
  private $_article_text;
  private $_article_abstract;
  private $_article_picture;
  private $_article_originPicture;
  private $_article_link;


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
public function article_id()
  {
    // retourne la valeur de l'id
    return $this->_article_id;
  }

  public function article_title()
  {
    // retourne le titre de l'article
    return $this->_article_titile;
  }

public function article_page()
{
// retourne la valeur de la page si c'est la page home ou camps
  return $this->_article_page;
}

public function article_text()
{
  //renvoie le contenu texte de l'article
    return $this->_article_text;
}

public function article_abstract()
{
  // renvoie le debut de l'article_id
  return $this->_article_abstract;
}

public function article_picture()
{
  // renvoi le lien de l'image
  return $this->_article_picture;
}

public function article_originPicture()
{
  // renvoie le l'ien de l'image originale
  return $this->_article_originPicture;
}

public function article_link()
{
  // renvoie l'adresse du lien
return $this->_article_link;
}

// Seater//


  public function setArticle_id($id)
  {
    // permet une interaction avec l'id
    $id = (int) $id;

    if ($id > 0)
    {
      $this->_article_id = $id;
    }
  }

  public function setArticle_title($title)
  {
    //permet une interaction avec le titre de l'article
    if (is_string($title))
    {
      $this->_article_title = $title;
    }
  }

  public function setArticle_page($page)
  {
    // permet une faire une intraction avec le switch page pour différencier la page home et Camps
    if (is_string($page))
    {
      $this->_article_page = $page;
    }
  }

  public function setArticle($text)
  {
    // permet une interaction avec le contenu texte de l'article
    if (is_string($text))
    {
      $this->_article_text = $text;
    }
  }

public function setArticle_abstract($abstract)
{
  // permet une interaction avec le debut d'un texte
  if (is_string($abstract))
  {
    $this->_article_abstract = $abstract;
  }
}

public function setArticle_picture($picture)
{
  // permet d'obtenir le lien de l'image
  if(is_string($picture))
  {
    $this->_article_picture = $picture;
  }
}

  public function setArticle_originPicture($originPicture)
  {
    // permet une interaction avec le lien photo originale
    if (is_string($originPicture))
    {
      $this->_article_originPicture = $originPicture;
    }
  }

public function setArticle_link($link)
{
  // permet une interaction avec le lien de l'article
if(is_string($link))
{
  $this->_article_link = $link;
}
}







}


?>





<?php



 ?>
