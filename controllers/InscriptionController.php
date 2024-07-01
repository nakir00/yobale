<?php 
namespace App\Controllers;

use App\Core\Request;
use App\Models\Classe;
use App\Models\Etudiant;
use App\Core\Controller;
use App\Core\IController;
use App\Models\inscription;
use Rakit\Validation\Validator;

class InscriptionController extends Controller implements IController{
    private array $niveau=["Licence 1","Licence 2","Licence 3","Master 1","Master 2"];
    public function classes():array{
        $cl=Classe::selectAll(true);
        return $cl;

    }
    public function etudiants():array{
        $et=Etudiant::selectAll(true);
        return$et;
    }

    public function lister(){
        $inscriptions=Inscription::selectAll(true);
        $this->render("inscription/liste",[
            'inscriptions'=> $inscriptions
         ]);
    }

    public function ajouter(){
        if( $this->request->isGet()){  
            $this->render("inscription/add",[
                "annee"=>$this->niveau,
                "classe"=>$this->classes(),
                "etudiant"=>$this->etudiants(),
            ]);
      }

      if($this->request->isPost()){
        $validator = new Validator;
        
        $validation = $validator->make($this->request->request(),[
            'dateInscription' => 'required',
            'annee'=> 'required',
            'classe'=> 'required',
            'etudiant'=> 'required'
        ],
         [
             'required' => ':attribute est obligatoire',
         ]);
        $validation->validate();
         if ($validation->fails()) {
           $errors = $validation->errors();
            $this->render("inscription/add",[
                 'errors'=>$errors->firstOfAll(),
                 "annee"=>$this->niveau,
                 "classe"=>$this->classes(),
                 "etudiant"=>$this->etudiants()
            ]);
         }else{
             $data=$this->request->request();
             $inscription =new Inscription();
             $inscription->setDateInscription($data['dateInscription']);
             $inscription->setAnnee($data['annee']);
             //$inscription->classe();
             $inscription->insert();
             $this->redirectToRoute("/inscription");
         }
      }
    }

    public function supprimer(){
        
    }

    public function modifier(){
        if( $this->request->isGet()){  
            $classeId= intval($this->request->query()[0]) ;
            $classe=Classe::selectById( $classeId);
            //dd(  $classe);
            $this->render("inscription/edit",[
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
            $this->render("inscription/add",[
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
             $this->redirectToRoute("/inscription");
         }
      }
    }

   
}