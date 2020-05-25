<?php
class Admin
{
  private $_id_admin;
  private $_log_admin;
  private $_mdp_admin;
  private $_nom_admin;



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
public function id_admin()
  {
    // retourne la valeur de l'id
    return $this->_id_admin;
  }

  public function log_admin()
  {
    // retourne le pseudo
    return $this->_log_admin;
  }

public function mdp_admin()
{
// retourne le mot de passe de l'utilisateur
  return $this->_mdp_admin;
}

public function nom_admin()
{
  //renvoie le nom de l'utilisateur
    return $this->_nom_admin;
}



// Seater//


  public function setId_admin($id)
  {
    // permet une interaction avec l'id
    $id = (int) $id;

    if ($id > 0)
    {
      $this->_id_admin= $id;
    }
  }

  public function setLog_admin($log)
  {
    //permet une interaction avec le pseudo de l'utilisateur
    if (is_string($log))
    {
      $this->_log_admin = $log;
    }
  }

  public function setMdp_admin($mdp)
  {
    // permet l'interaction avec le mot de passe de l'utilisateur
    if (is_string($mdp))
    {
      $this->_mdp_admin = $mdp;
    }
  }

  public function setNom($nom)
  {
    // retourne le nom de l'utilisateur
    if (is_string($nom))
    {
      $this->_nom_admin= $nom;
    }
  }










}


?>





<?php



 ?>
