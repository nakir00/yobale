<?php 
namespace App\Controllers;

use App\Core\Request;
use App\Models\Classe;
use App\Core\Controller;
use App\Core\IController;
use App\Core\Session;
use App\Models\User;
use Rakit\Validation\Validator;

class HomeController extends Controller {

    public function home(){
        $this->layout='base';
        if(Session::userExist()){
            $this->render("dashboard/home");
        }else{
            $this->redirectToRoute("/");
        }
        
    }
    

   
}