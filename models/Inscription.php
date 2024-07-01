<?php 
namespace App\Models;

use App\Core\Model;

class inscription extends Model{
     private int $id;
     private string $dateInscription;
     private string $annee; 
     private Classe $classe;
     private Etudiant $etudiant;
    
    public function getDateInscription()
     {
          return $this->dateInscription;
     }
     public function getAnnee()
     {
          return $this->annee;
     }
     public function setDateInscription($dateInscription)
     {
          $this->date = $dateInscription;

          return $this;
     }
     public function setannee($annee)
     {
          $this->annee = $annee;

          return $this;
     }
    public function etudiant():Etudiant{
        $sql="select u.* from inscription i, 
           user u where i.user_id=user.id and i.id=?";
     return parent::selectWhere($sql,[$this->id],true,Etudiant::class);

        return new Etudiant;
    }
    public function classe():Classe{
     $sql="select cl.* from inscription i, 
           classe cl where i.classe_id=classe.id and i.id=?";
     return parent::selectWhere($sql,[$this->id],true,Classe::class);
     }
    public function __construct()
    {
        
        
    }
    



     /**
      * Get the value of classe
      */ 
     public function getClasse()
     {
          return $this->classe;
     }

     /**
      * Set the value of classe
      *
      * @return  self
      */ 
     public function setClasse($classe)
     {
          $this->classe = $classe;

          return $this;
     }

     /**
      * Get the value of etudiant
      */ 
     public function getEtudiant()
     {
          return $this->etudiant;
     }

     /**
      * Set the value of etudiant
      *
      * @return  self
      */ 
     public function setEtudiant($etudiant)
     {
          $this->etudiant = $etudiant;

          return $this;
     }
     public function insert(){
        $sql="INSERT INTO  ".parent::table()."  (`dateInscription`, `annee`, `classe_id`,`etudiant_id`) VALUES (?,?,?,1,)";
        return parent::database()->executeUpdate($sql,[
                 $this->dateInscription,
                 $this->annee,
                 $this->classe->getId()
        ]);
   }

   public function update(){
       $sql="UPDATE ".parent::table()." SET `libelle` = ?, `filiere` = ?, `niveau` = ? WHERE `classe`.`id` = ? ";
       return parent::database()->executeUpdate($sql,[
           $this->libelle,
           $this->filiere,
           $this->niveau,
           $this->id
      ]);
   }
}