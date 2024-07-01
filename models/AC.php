<?php
namespace App\Models;
class AC extends User{
    private string $adresse;

    public function __construct()
    {
        parent::__construct();
        //self::$role="ROLE_AC";
        
    }

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
    public static  function selectAll(){
        $sql="select *  from  ".parent::table()." where role like ? ";
       return parent::database()->executeSelect($sql,[parent::$role]);
     }
}