<?php
namespace App\Models;
class Etudiant extends User{
    private string $matricule;
    private string $sexe;

    public function __construct(){
        parent::__construct();
        //parent::$role="ROLE_ETUDIANT";
        //parent::table()="etudiant";
    }
    //les attributs navigationnels
    //OneToMany avec Inscriptions
    public function inscriptions():array{
        $sql="select i.* from inscriptions i, 
              etudiant e where i.etudiant_id=e.id and e.id=? 
              ";
        parent::selectWhere($sql,[$this->id]);
           return [];
    }

    /**
     * Get the value of nomComplet
     */ 
    

    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }
    public static  function selectAll(){
        $sql="select *  from  ".parent::table()." where roles like ? ";
       return parent::database()->executeSelect($sql, [/* parent::$role */Etudiant::getRole()]);
     }
     public function insert(){
        $sql="INSERT INTO ".parent::table()." (`login`,`password`, `roles`,nomComplet,`matricule`, `sexe` )
             VALUES (?,?,?,?,?,?)";
        return parent::database()->executeUpdate($sql,[$this->login,$this->password,Etudiant::getRole(),$this->nomComplet,$this->matricule,$this->sexe]);
     }

    /**
     * Get the value of sexe
     *
     * @return string
     */
    public function getSexe(): string
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @param string $sexe
     *
     * @return self
     */
    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }
    public static function getRole(){
        return parent::$role="ROLE_ETUDIANT";
   }
}