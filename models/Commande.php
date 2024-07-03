<?php

namespace App\Models;

use App\Core\Model;

class Commande extends Model{

    private ?int $id;  
    private string $nature;
    private string $categorie;
    private string $ville;
    private int $tarif;
    private int $frais;
    private int $total;
    private string $info;
    private string $dateCollect;
    private string $heureCollect;
    private string $dateDestination;
    private string $heureDestination;

    private ?Expediteur $expediteur=null;
    private int $expediteurId;

    private ?Destinataire $destinataire=null;
    private int $destinataireId;

    private ?Convoyeur $convoyeur=null;
    private ?int $convoyeurId=null;
    //
    private ?string $lieuCollecte=null;
    private ?string $numCommande=null;
    private ?int $remuneration=null;

    public function __construct()
    {
    }

    public function insert(){
        $sql="INSERT INTO  ".parent::table()."  (`expediteur_id`, `destinataire_id`, `convoyeur_id`, `nature`,`categorie`,`ville`, `tarif`, `frais`, `total`, `info`, `date_collect`, `heure_collect`, `date_destination`, `heure_destination`, `lieu_collect`, `num_command`, `remuneration`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
        return parent::database()->executeUpdate($sql,
            [
                $this->expediteurId,
                $this->destinataireId,
                $this->convoyeurId,
                $this->nature,
                $this->categorie,
                $this->ville,
                $this->tarif,
                $this->frais,
                $this->total,
                $this->info,
                $this->dateCollect,
                $this->heureCollect,
                $this->dateDestination,
                $this->heureDestination,
                $this->lieuCollecte,
                $this->numCommande,
                $this->remuneration,
            ]
        );
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
     * Get the value of nature
     */ 
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set the value of nature
     *
     * @return  self
     */ 
    public function setNature($nature)
    {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get the value of categorie
     */ 
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set the value of categorie
     *
     * @return  self
     */ 
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

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
     * Get the value of tarif
     */ 
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set the value of tarif
     *
     * @return  self
     */ 
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get the value of frais
     */ 
    public function getFrais()
    {
        return $this->frais;
    }

    /**
     * Set the value of frais
     *
     * @return  self
     */ 
    public function setFrais($frais)
    {
        $this->frais = $frais;

        return $this;
    }

    /**
     * Get the value of total
     */ 
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set the value of total
     *
     * @return  self
     */ 
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get the value of info
     */ 
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set the value of info
     *
     * @return  self
     */ 
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get the value of dateCollect
     */ 
    public function getDateCollect()
    {
        return $this->dateCollect;
    }

    /**
     * Set the value of dateCollect
     *
     * @return  self
     */ 
    public function setDateCollect($dateCollect)
    {
        $this->dateCollect = $dateCollect;

        return $this;
    }

    /**
     * Get the value of heureCollect
     */ 
    public function getHeureCollect()
    {
        return $this->heureCollect;
    }

    /**
     * Set the value of heureCollect
     *
     * @return  self
     */ 
    public function setHeureCollect($heureCollect)
    {
        $this->heureCollect = $heureCollect;

        return $this;
    }

    /**
     * Get the value of dateDestination
     */ 
    public function getDateDestination()
    {
        return $this->dateDestination;
    }

    /**
     * Set the value of dateDestination
     *
     * @return  self
     */ 
    public function setDateDestination($dateDestination)
    {
        $this->dateDestination = $dateDestination;

        return $this;
    }

    /**
     * Get the value of heureDestination
     */ 
    public function getHeureDestination()
    {
        return $this->heureDestination;
    }

    /**
     * Set the value of heureDestination
     *
     * @return  self
     */ 
    public function setHeureDestination($heureDestination)
    {
        $this->heureDestination = $heureDestination;

        return $this;
    }

    /**
     * Get the value of lieuCollecte
     */ 
    public function getLieuCollecte()
    {
        return $this->lieuCollecte;
    }

    /**
     * Set the value of lieuCollecte
     *
     * @return  self
     */ 
    public function setLieuCollecte($lieuCollecte)
    {
        $this->lieuCollecte = $lieuCollecte;

        return $this;
    }

    /**
     * Get the value of numCommande
     */ 
    public function getNumCommande()
    {
        return $this->numCommande;
    }

    /**
     * Set the value of numCommande
     *
     * @return  self
     */ 
    public function setNumCommande($numCommande)
    {
        $this->numCommande = $numCommande;

        return $this;
    }

    /**
     * Get the value of remuneration
     */ 
    public function getRemuneration()
    {
        return $this->remuneration;
    }

    /**
     * Set the value of remuneration
     *
     * @return  self
     */ 
    public function setRemuneration($remuneration)
    {
        $this->remuneration = $remuneration;

        return $this;
    }

    /**
     * Get the value of expediteur
     */ 
    public function getExpediteur()
    {
        return $this->expediteur;
    }

    /**
     * Set the value of expediteur
     *
     * @return  self
     */ 
    public function setExpediteur($expediteur)
    {
        $this->expediteur = $expediteur;

        return $this;
    }

    /**
     * Get the value of expediteurId
     */ 
    public function getExpediteurId()
    {
        return $this->expediteurId;
    }

    /**
     * Set the value of expediteurId
     *
     * @return  self
     */ 
    public function setExpediteurId($expediteurId)
    {
        $this->expediteurId = $expediteurId;

        return $this;
    }

    /**
     * Get the value of destinataire
     */ 
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * Set the value of destinataire
     *
     * @return  self
     */ 
    public function setDestinataire($destinataire)
    {
        $this->destinataire = $destinataire;

        return $this;
    }

    /**
     * Get the value of destinataireId
     */ 
    public function getDestinataireId()
    {
        return $this->destinataireId;
    }

    /**
     * Set the value of destinataireId
     *
     * @return  self
     */ 
    public function setDestinataireId($destinataireId)
    {
        $this->destinataireId = $destinataireId;

        return $this;
    }

    /**
     * Get the value of convoyeur
     */ 
    public function getConvoyeur()
    {
        return $this->convoyeur;
    }

    /**
     * Set the value of convoyeur
     *
     * @return  self
     */ 
    public function setConvoyeur($convoyeur)
    {
        $this->convoyeur = $convoyeur;

        return $this;
    }

    /**
     * Get the value of convoyeurId
     */ 
    public function getConvoyeurId()
    {
        return $this->convoyeurId;
    }

    /**
     * Set the value of convoyeurId
     *
     * @return  self
     */ 
    public function setConvoyeurId($convoyeurId)
    {
        $this->convoyeurId = $convoyeurId;

        return $this;
    }
}