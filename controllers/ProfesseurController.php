<?php 
namespace App\Controllers;

use App\Core\Controller;
use App\Core\IController;
use App\Core\Request;
use App\Models\professeur;
use App\Models\Adresse;
use Rakit\Validation\Validator;

class ProfesseurController extends Controller implements IController{



    public function lister(){
        $professeurs=Professeur::selectAll(true);
        $this->render("professeur/liste",[
            'professeurs'=>$professeurs
        ]);

       
    }

    public function ajouter(){
        if($this->request->isGet()){
             
            $this->render("professeur/add");
        }



        if($this->request->isPost())
        $validator=new validator;
        $validation=$validator->make($this->request->request(),[

            'nomComplet'=>'required',
            'grade'=>'required',
            'login'   => 'required|email',
            'password' => 'required|min:6|max:10',
        ],[
            'required'=>':attribute est obligatoire',
        ]);
        $validation->validate();
        if($validation->fails()){
            $errors=$validation->errors();
            $this->render("professeur/add",[
                'errors'=>$errors->firstOfAll(),
            ]);
        }else{
            $data=$this->request->request();
            $professeur=new Professeur();
            $professeur->setNomComplet($data['nomComplet']);
            $professeur->setGrade($data['grade']);
            $professeur->setLogin($data['login']);
            $professeur->setPassword($data['password']);
            $professeur->insert();
            $this->redirectToRoute("/professeur");
        }
    }



    
    public function supprimer(){

    }
    public function modifier(){
        
    }

    public function affecterModule(){

    }


} 