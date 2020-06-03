<?php 

class PortefolioRepository
{
 //connexion à la bdd
 private $_db;

 public function __construct($db)
 {
   $this ->setDb($db);
 }

 //SETTER
 public function setDb(PDO $db)
 {
   $this->_db = $db;
 }


//  'ADD'
 public function add(Portefolio $portefolio)
 {
   //prepare une requete d'ajout de Portefolio
   $request = $this->_db->prepare("INSERT INTO portefolio(picture_portefolio, originPicture_portefolio, evenement_portefolio, lieu_portefolio, date_portefolio, other_portefolio) VALUES (:picture, :originPicture, :evenement, :lieu, :date, :other)");
   //execute la requette avec un tableau d'association  
   $request->execute(array(
     'picture' => $portefolio->picture_portefolio(),
     'originPicture' => $portefolio->originPicture_portefolio(),
     'evenement' => $portefolio->evenement_portefolio(),
     'lieu' => $portefolio->lieu_portefolio(),
     'date' => $portefolio->date_portefolio()
   ));
   // On hydrate l'objet afin que son id deviennt l'id qui vient 
   //d'être créé
   $portefolio->hydrate(array(
     'id_portefolio' => $this->_db->lastInsertId()
   ));
 }

   //'READ'
   public function get($id)
   {
       //on vérifie que le paramètre est bien un id
       if (is_int($id)) {
           //on prépare la requete SELECT
           $request = $this->_db->query("SELECT * FROM portefolio
       WHERE id_portefolio = $id");
           // On récupère le résultat dans un tableau
           $donnees = $request->fetch();
           // on retourne un nouvel objet alien construit
           //avec les donnees récupérer de la BDD
           return new Portefolio($donnees);
       }
   }

   public function getListName()
   {
       $tabloDonnees = [];
       //execute une requete SELECT qui récupère uniquement les noms de chaque portefolio
       $req = $this->_db->query("SELECT * FROM portefolio");
       //  transformer le résultat en array 
       while ($donnees = $req->fetch()) {
         array_push($tabloDonnees, $donnees);
       }
       // retourner cet array
       return $tabloDonnees;
   }

   public function update(Portefolio $portefolio)
   {
       // On prépare la requete afin de modifier un Portefolio dans 
       // la BDD, puis on execute en injectant 
       // l'attribut $_nom de l'objet $Portefolio
       $request = $this->_db->prepare("UPDATE portefolio SET picture_portefolio= :picture, originPicture_portefolio= :originPicture, evenement_portefolio= :evenement, lieu_portefolio= :lieu, date_portefolio= :date, other_portefolio= :other WHERE id_portefolio=".$portefolio->id_portefolio());
       $request->execute(array(
           'picture' => $portefolio->picture_portefolio(),
           'originPicture' => $portefolio->originPicture_portefolio(),
           'evenement' => $portefolio->evenement_portefolio(),
           'lieu' => $portefolio->lieu_portefolio(),
           'date' => $portefolio->date_portefolio(),
           'other' => $portefolio->other_portefolio()
       ));
   }

   public function delete($id_portefolio)
   {
       // execute une requete DELETE pour supprimer un portefolio avec son id
       $this->_db->exec("DELETE FROM portefolio WHERE id_portefolio=".$id_portefolio);
       
   }

   public function getCountById()
   {
       $tabloCount = [];
       //execute une requete SELECT qui récupère uniquement les noms de chaque portefolio
       $req = $this->_db->query("SELECT COUNT(*) FROM portefolio");
       $tabloCount = $req->fetch();
   
       return $tabloCount;
   }
 }
 
 ?>
 