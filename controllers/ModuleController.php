<?php 
namespace App\Controllers;

use App\Core\Controller;
use App\Core\IController;
use App\Core\Request;
use App\Models\Module;
use Rakit\Validation\Validator;

class ModuleController extends Controller implements IController{


    public function lister(){

        $modules=Module::selectAll(true);
        $this->render("module/liste",[
            'modules'=>$modules
        ]);
    }

    public function ajouter(){

        if($this->request->isGet()){
             
            $this->render("module/add");
        }



        if($this->request->isPost())
        $validator=new validator;
        $validation=$validator->make($this->request->request(),[

            'libelle'=>'required',
            'nomModule'=>'required',
            'duree'=>'required'
            
        ],[
            'required'=>':attribute est obligatoire',
        ]);
        $validation->validate();
        if($validation->fails()){
            $errors=$validation->errors();
            $this->render("module/add",[
                'errors'=>$errors->firstOfAll(),
                'libelle'=>$this->filieres
            ]);
        }else{
            $data=$this->request->request();
            $module=new Module();
            $module->setLibelle($data['libelle']);
            $module->setNomModule($data['nomModule']);
             $module->setDuree($data['duree']);
            $module->insert();
            $this->redirectToRoute("/module");
        }

    }
    public function supprimer(){
        
    }

    public function modifier(){
        
        if( $this->request->isGet()){  
            $moduleId= intval($this->request->query()[0]) ;
            $module=Module::selectById( $moduleId);
            //dd(  $classe);
            $this->render("module/edit",[
                "libelle"=>$this->libelle,
                "nomModule"=>$this->nomModule,
                "duree"=>$this->duree,
                "module"=>$module
            ]);
      }

      if($this->request->isPost()){
        $validator = new Validator;
        $validation = $validator->make($this->request->request(),[
            'libelle' => 'required',
            'nomModule'=> 'required',
            'duree'=> 'required',
        ],
         [
             'required' => ':attribute est obligatoire',
         ]);
        $validation->validate();
         if ($validation->fails()) {
           $errors = $validation->errors();
            $this->render("module/add",[
                 'errors'=>$errors->firstOfAll(),
                 "libelle"=>$this->libelle,
                 "nomModule"=>$this->nomModule,
                 "duree"=>$this->duree
            ]);
         }else{
             $data=$this->request->request();
             $classe =Module::selectById($data['Module_id']);
             $classe->setLibelle($data['libelle']);
             $classe->setNomModule($data['nomModule']);
             $classe->setDuree($data['duree']);
             $classe->update();
             $this->redirectToRoute("/module");
         }
      }
    }




} 