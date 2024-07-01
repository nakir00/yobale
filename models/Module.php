<?php 
namespace App\Models;
use App\Core\Model;
class Module extends Model{
   private int $id;  
   private string $libelle;
   private string $duree;
   private string $nomModule;


    public function __construct()
    {
       // parent::$table="classe";
    }


   //Association 
   //ManyToMany avec Professeur
     //Un Objet de type Module contient plusieurs objets de type professeur
     public function professeurs():array{
         return [];
     }
   //OneToMany avec Cours
     //Un Objet de type Module contient plusieurs objets de type Cours

     public function cours():array{
        return [];
      }
   /**
    * Get the value of id
    */ 
   public function getId()
   {
      return $this->id;
   }

   /**
    * Set the value of id
    *
    * @return  self
    */ 
   public function setId($id)
   {
      $this->id = $id;

      return $this;
   }

   /**
    * Get the value of libelle
    */ 
   public function getLibelle()
   {
      return $this->libelle;
   }

   /**
    * Set the value of libelle
    *
    * @return  self
    */ 
   public function setLibelle($libelle)
   {
      $this->libelle = $libelle;

      return $this;
   }
     public function insert(){
      $sql="INSERT INTO  ".parent::table()."  (`libelle`,`nomModule`,`duree`) VALUES (?,?,?)";
      return parent::database()->executeUpdate($sql,[
               $this->libelle,
               $this->nomModule,
               $this->duree,
      ]);
 } 
    public function update(){
   $sql="UPDATE ".parent::table()." SET `libelle` = ?, `nomModule` = ?, `duree` = ? WHERE `module`.`id` = ? ";
   return parent::database()->executeUpdate($sql,[
       $this->libelle,
       $this->nomModule,
       $this->duree,
       $this->id
  ]);
}  

   /**
    * Get the value of duree
    *
    * @return string
    */
   public function getDuree(): string
   {
      return $this->duree;
   }

   /**
    * Set the value of duree
    *
    * @param string $duree
    *
    * @return self
    */
   public function setDuree(string $duree): self
   {
      $this->duree = $duree;

      return $this;
   }

   /**
    * Get the value of nom
    *
    * @return string
    */
   public function getNomModule(): string
   {
      return $this->nomModule;
   }

   /**
    * Set the value of nom
    *
    * @param string $nom
    *
    * @return self
    */
   public function setNomModule(string $nomModule): self
   {
      $this->nomModule = $nomModule;

      return $this;
   }
}