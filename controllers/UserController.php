<?php 
namespace App\Controllers;

use App\Core\Request;
use App\Models\Classe;
use App\Core\Controller;
use App\Core\IController;
use App\Models\User;
use Rakit\Validation\Validator;

class UserController extends Controller implements IController{

    public function lister(){

         $users=User::selectAll(true);
          $this->render("users/liste",[
            'users'=> $users
         ]);
    }

    public function ajouter(){
        if( $this->request->isGet()){  
            $this->render("users/add",[
                "niveaux"=>$this->niveaux,
                "filieres"=>$this->filieres
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
            $this->render("users/add",[
                 'errors'=>$errors->firstOfAll(),
                 "niveaux"=>$this->niveaux,
                 "filieres"=>$this->filieres
            ]);
         }else{
             $data=$this->request->request();
             $classe =new Classe();
             $classe->setFiliere($data['filiere']);
             $classe->setNiveau($data['niveau']);
             $classe->setLibelle($data['libelle']);
             $classe->insert();
             $this->redirectToRoute("/users");
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