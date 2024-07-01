<?php 
namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;
use App\Core\Request;
use App\Core\Session;
use Rakit\Validation\Validator;





class SecuriteController extends Controller{

    public function connexion(){
          if(Session::userExist()){
               $this->redirectToRoute("/dashboard");
          }
         if( $this->request->isGet()){  
               
              $this->layout="connexion";     
              $this->render("securite/login");
         }
         
         if($this->request->isPost()){
                         
                         $data=$this->request->request();
                         $user=new User;
                              $user->setLogin($data['login']);
                              $user->setPassword($data['password']);
                         $result=$user->selectUserByLoginAndPassword();
                         if($result){
                              Session::setUser($result);
                              $this->redirectToRoute("/dashboard");

                         }else{
                              $this->render("securite/login",[
                                   'error'=>"Login ou Mot de Passe Incorrect"
                              ]); 
                         }

                 
         }
         

    }

     public function deconnexion(){

         Session::destroy();
        $this->redirectToRoute("");
     } 

     public function inscription(){
          if( $this->request->isGet()){  
               $this->layout="connexion";     
               $this->render("securite/inscription");
          }

          if( $this->request->isPost()){  
               $nom=$this->request->request()['nom'];
               $prenom=$this->request->request()['prenom'];
               $login=$this->request->request()['login'];
               $password=$this->request->request()['password'];
               $user=new User(role:ROLE_SUPER_ADMIN);
               $user->setLogin($login)->setPassword($password)->setNom($nom)->setPrenom($prenom);
               $result= $user->selectUserByLoginAndPassword();
               if($result){
                    $this->layout="connexion";
                    $this->render("securite/inscription",[
                         'error'=>"cet utilisateur existe déjà"
                    ]); 
               }else{
                    $user->insert();        
                    Session::setUser($result);
                    $this->redirectToRoute("/dashboard");
               }
             
          }

     }
}
?>