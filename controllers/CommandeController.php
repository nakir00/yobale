<?php 
namespace App\Controllers;

use App\Core\Request;
use App\Models\Classe;
use App\Core\Controller;
use App\Core\IController;
use App\Models\Commande;
use App\Models\Destinataire;
use App\Models\Expediteur;
use Rakit\Validation\Validator;

class CommandeController extends Controller implements IController{

    private array $niveaux=["L1","L2","L3"];
    private array $filieres=["MAE","GLRS","CDSD"];
    public function lister(){

         $classes=Classe::selectAll(true);
          $this->render("classe/liste",[
            'classes'=> $classes
         ]);
    }

    public function ajouter(){
        
        if( $this->request->isGet()){  
            
            $this->render("commande/add");
        }

      if($this->request->isPost()){
        $data=$this->request->request();
        $rawExpediteur=(new Expediteur)->setPrenom($data['prenom-expediteur'])->setNom($data['nom-expediteur'])->setVille($data['ville-expediteur'])->setTelephone((int)$data['telephone-expediteur'])->setAdresse($data['address-expediteur'])->setWhatsapp((int)$data['whatsapp-expediteur'])->setCode($data['code-secret-expediteur'])->setCin((int)$data['cin-expediteur']);
        $rawDestinataire=(new Destinataire)->setPrenom($data['prenom-destinataire'])->setNom($data['nom-destinataire'])->setVille($data['ville-destinataire'])->setTelephone($data['telephone-destinataire'])->setWhatsapp((int)$data['whatsapp-destinataire'])->setCin($data['cin-destinataire'])->setAdresse1($data['address-destinataire-1'])->setAdresse2($data['address-destinataire-2'])->setQuartier($data['quartier-destinataire']);
        $rawCommande=(new Commande)->setNature($data['nature-yobal'])->setCategorie($data['categorie-yobal'])->setVille($data['ville-yobal'])->setTarif($data['tarif-yobal'])->setFrais($data['frais-yobal'])->setTotal($data['total-yobal'])->setInfo($data['info-yobal'])->setDateCollect($data['date-collect'])->setHeureCollect($data['heure-collect'])->setDateDestination($data['date-destination'])->setHeureDestination($data['heure-destination']);
        
        $expediteur=Expediteur::selectByCin($rawExpediteur->getCin());
        if($expediteur==false){
            $rawExpediteur->insert();
            $expediteur=Expediteur::selectByCin($rawExpediteur->getCin());
        }

        $destinataire=Destinataire::selectByCin($rawDestinataire->getCin());
        if(!$destinataire){
            $rawDestinataire->insert();
            $destinataire=Destinataire::selectByCin($rawDestinataire->getCin());
        }
        if($destinataire&&$expediteur){
            $rawCommande->setExpediteurId($expediteur->getId())->setDestinataireId($destinataire->getId());
            $rawCommande->insert();
        }
             
             $this->redirectToRoute("/dashboard");
         
      }
    }

    public function supprimer(){
        
    }

    public function modifier(){
        if( $this->request->isGet()){  
            $classeId= intval($this->request->query()[0]) ;
            $classe=Classe::selectById( $classeId);
            //dd(  $classe);
            $this->render("classe/edit",[
                "niveaux"=>$this->niveaux,
                "filieres"=>$this->filieres,
                "classe"=>$classe
            ]);
      }

      if($this->request->isPost()){
        $validator = new Validator;
        $validation = $validator->make($this->request->request(),[
            'niveau' => 'required',
            'filiere'=> 'required',
            'libelle'=> 'required',
        ],
         [
             'required' => ':attribute est obligatoire',
         ]);
        $validation->validate();
         if ($validation->fails()) {
           $errors = $validation->errors();
            $this->render("classe/add",[
                 'errors'=>$errors->firstOfAll(),
                 "niveaux"=>$this->niveaux,
                 "filieres"=>$this->filieres
            ]);
         }else{
             $data=$this->request->request();
             $classe =Classe::selectById($data['classe_id']);
             $classe->setFiliere($data['filiere']);
             $classe->setNiveau($data['niveau']);
             $classe->setLibelle($data['libelle']);
             $classe->update();
             $this->redirectToRoute("/classe");
         }
      }
    }

   
}