<?php

namespace App\Models;

use App\Core\Model;

class Expediteur extends Model{
    private ?int $id;  
    private string $prenom;
    private string $nom;
    private string $ville;
    private int $telephone;
    private string $adresse;
    private int $whatsapp;
    private string $code;
    private int $cin;

    public function __construct()
    {
    }

    public static function dbInit(array $result):self{
        $user=new self;
        $user->setId($result['id']);
        $user->setNom($result['prenom']);
        $user->setPrenom($result['nom']);
        $user->setVille($result['ville']);
        $user->setTelephone((int)$result['telephone']);
        $user->setWhatsapp((int)$result['whatsapp']);
        $user->setCin((int)$result['cin']);
        $user->setAdresse($result['adresse']);
        $user->setCode($result['code']);
        return $user;
    }

    public function insert(){
        $sql="INSERT INTO  ".parent::table()."  (`prenom`, `nom`, `ville`, `telephone`,`adresse`,`whatsapp`, `code`, `cin`) VALUES (?,?,?,?,?,?,?,?)";
        return parent::database()->executeUpdate($sql,[
                 $this->prenom,
                 $this->nom,
                 $this->ville,
                 $this->telephone,
                 $this->adresse,
                 $this->whatsapp,
                 $this->code,
                 $this->cin,
        ]);
   }

    public static  function selectByCin(int $cin):bool|self{
        $sql="select *  from ".self::table()."  where `cin` =?";
    
        self::database()->setClassName(get_called_class()) ;
        return self::database()->executeSelect($sql,[$cin],true);
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
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone():int
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone(int $telephone)
    {
        $this->telephone = $telephone;

        return $this;
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

    /**
     * Get the value of whatsapp
     */ 
    public function getWhatsapp():int
    {
        return $this->whatsapp;
    }

    /**
     * Set the value of whatsapp
     *
     * @return  self
     */ 
    public function setWhatsapp(int $whatsapp)
    {
        $this->whatsapp = $whatsapp;

        return $this;
    }

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of cin
     */ 
    public function getCin():int
    {
        return $this->cin;
    }

    /**
     * Set the value of cin
     *
     * @return  self
     */ 
    public function setCin(int $cin)
    {
        $this->cin = $cin;

        return $this;
    }
}