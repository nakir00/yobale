<?php 
namespace App\Controllers;

use App\Core\Controller;
use App\Core\IController;
use App\Models\Etudiant;
use Rakit\Validation\Validator;

class EtudiantController extends Controller implements IController{

    public function lister(){
        $etudiants=Etudiant::selectAll(true);
        $this->render("etudiant/liste",[
            'etudiants'=>$etudiants
        ]);

            
    }
    public function ajouter(){
        if($this->request->isGet()){
             
            $this->render("etudiant/add");
        }



        if($this->request->isPost())
        $validator=new validator;
        $validation=$validator->make($this->request->request(),[

            'nomComplet'=>'required',
            'sexe'=>'required',
            'matricule'=>'required',
            'login'   => 'required|email',
            'password' => 'required|min:6|max:10',
            

            
        ],[
            'required'=>':attribute est obligatoire',
        ]);
        $validation->validate();
        if($validation->fails()){
            $errors=$validation->errors();
            $this->render("etudiant/add",[
                'errors'=>$errors->firstOfAll(),
            ]);
        }else{
            $data=$this->request->request();
            $etudiant=new Etudiant();
            $etudiant->setNomComplet($data['nomComplet']);
            $etudiant->setSexe($data['sexe']);
            $etudiant->setMatricule($data['matricule']);
            $etudiant->setLogin($data['login']);
            $etudiant->setPassword($data['password']);
            $etudiant->insert();
            $this->redirectToRoute("/etudiant");
        }
    }
   
    public function supprimer(){

    }
    public function modifier(){

    }
}
