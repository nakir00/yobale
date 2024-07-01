<?php 
namespace App\Controllers;

use App\Core\Controller;
use App\Core\IController;
use App\Models\Classe;
use App\Models\Cours;
use Rakit\Validation\Validator;

class CoursController extends Controller implements IController{


    public function lister(){

        $cours=Cours::selectAll(true);
        $this->render("cours/liste",[
            'cours'=>$cours
        ]);
    }
    public function listerCoursDelaClasse(){
        if( $this->request->isGet()){  
          $classeId= intval($this->request->query()[0]) ;
          $classe=Classe::selectById( $classeId);
         // $cours=$classe->cours()[0];
          // dd( $cours->professeur());
          //dd($classe->cours());
          $this->render("cours/liste.classe",[
              "classe"=>$classe
          ]);
      } 
    }

    public function ajouter(){
        if($this->request->isGet()){
             
            $this->render("cours/add");
        }



        if($this->request->isPost())
        $validator=new validator;
        $validation=$validator->make($this->request->request(),[

            'dateCours'=>'required',
            'heureDebut'=>'required',
            'heureFin'=>'required'
            
        ],[
            'required'=>':attribute est obligatoire',
        ]);
        $validation->validate();
        if($validation->fails()){
            $errors=$validation->errors();
            $this->render("cours/add",[
                'errors'=>$errors->firstOfAll(),
            ]);
        }else{
             $data=$this->request->request();
             $cours=new Cours();
             $cours->setDateCours($data['dateCours']);
             $cours->setHeureDebut($data['heureDebut']);
             $cours->setHeureFin($data['heureFin']);
             $cours->insert();
             $this->redirectToRoute("/cours");
        }
    }

    public function supprimer(){
        
    }

    public function modifier(){
        
    }


   
}