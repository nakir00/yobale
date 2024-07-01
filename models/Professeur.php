<?php 
 namespace App\Models;
class Professeur extends User{
     private string $grade;   // V.7 private $grade
     //OnToOne
     private Adresse $adresse;

     
     public function __construct()
     {
         parent::__construct();
         //parent::$role="ROLE_PROFESSEUR";
         $this->adresse=new Adresse;
         
     }

    


     //Association 
      //OneToOne avec adresse
          //Un Objet de type Professeur contient un objet de type Adresse
          public function adresse():Adresse{
               
              return new Adresse();
          }
      //ManyToMany avec Module
       //Un Objet de type Professeur plusieurs objets de type Module
        public function modules():array{
            return [];
        }
     /**
      * Get the value of grade
      */ 
     public function getGrade()
     {
          return $this->grade;
     }

     /**
      * Set the value of grade
      *
      * @return  self
      */ 
     public function setGrade($grade)
     {
          $this->grade = $grade;

          return $this;
     }

      public static  function selectAll(){
         $sql="select *  from ".parent::table()." where roles like ? ";
         return parent::database()->executeSelect($sql,[ /* parent::$role */Professeur::getRole()]);
     } 

     public function insert(){
        $sql="INSERT INTO ".parent::table()." (`login`,`password`,  `roles`,nomComplet`)
             VALUES (?,?,?,?);";
        return parent::database()->executeUpdate($sql,[
                        $this->login,
                        $this->password,
                        parent::$role,
                        $this->nomComplet]);
   }

     /**
      * Get the value of nomComplet
      */ 
    

     /**
      * Get the value of adresse
      */ 
     public function getAdresse()
     {
          return $this->adresse;
     }

     /**
      * Set the value of adresse
      *
      * @return  self
      */ 
     public function setAdresse($adresse)
     {
          $this->adresse = $adresse;

          return $this;
     }
     public static function getRole(){
          return parent::$role="ROLE_PROFESSEUR";
     }
}