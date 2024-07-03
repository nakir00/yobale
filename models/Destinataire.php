<?php
namespace App\Models;

use App\Core\Model;

class Destinataire extends Model{

    private ?int $id;  
    private string $prenom;
    private string $nom;
    private string $ville;
    private int $telephone;
    private int $whatsapp;
    private string $cin;
    private string $adresse1;
    private string $adresse2;
    private string $quartier;

    public function __construct()
    {
        
    }
    public static function dbInit(array $result):self{
        $user=new self;
        $user->setId($result['id']);
        $user->setNom($result['prenom']);
        $user->setPrenom($result['nom']);
        $user->setVille($result['ville']);
        $user->setTelephone($result['telephone']);
        $user->setWhatsapp($result['whatsapp']);
        $user->setCin($result['cin']);
        $user->setAdresse1($result['adresse1']);
        $user->setAdresse2($result['adresse2']);
        $user->setQuartier($result['quartier']);
        return $user;
   }

    public function insert(){
        $sql="INSERT INTO  ".parent::table()."  (`prenom`, `nom`, `ville`, `telephone`, `whatsapp`, `cin`, `adresse1`, `adresse2`, `quartier`) VALUES (?,?,?,?,?,?,?,?,?)";
        return parent::database()->executeUpdate($sql,[
                 $this->prenom,
                 $this->nom,
                 $this->ville,
                 $this->telephone,
                 $this->whatsapp,
                 $this->cin,
                 $this->adresse1,
                 $this->adresse2,
                 $this->quartier,
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
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of whatsapp
     */ 
    public function getWhatsapp()
    {
        return $this->whatsapp;
    }

    /**
     * Set the value of whatsapp
     *
     * @return  self
     */ 
    public function setWhatsapp($whatsapp)
    {
        $this->whatsapp = $whatsapp;

        return $this;
    }

    /**
     * Get the value of cin
     */ 
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set the value of cin
     *
     * @return  self
     */ 
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get the value of adresse1
     */ 
    public function getAdresse1()
    {
        return $this->adresse1;
    }

    /**
     * Set the value of adresse1
     *
     * @return  self
     */ 
    public function setAdresse1($adresse1)
    {
        $this->adresse1 = $adresse1;

        return $this;
    }

    /**
     * Get the value of adresse2
     */ 
    public function getAdresse2()
    {
        return $this->adresse2;
    }

    /**
     * Set the value of adresse2
     *
     * @return  self
     */ 
    public function setAdresse2($adresse2)
    {
        $this->adresse2 = $adresse2;

        return $this;
    }

    /**
     * Get the value of quartier
     */ 
    public function getQuartier()
    {
        return $this->quartier;
    }

    /**
     * Set the value of quartier
     *
     * @return  self
     */ 
    public function setQuartier($quartier)
    {
        $this->quartier = $quartier;

        return $this;
    }
}