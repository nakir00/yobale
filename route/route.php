<?php
use App\Core\Router;
use App\Controllers\ClasseController;
use App\Controllers\CoursController;
use App\Controllers\ModuleController;
use App\Controllers\ProfesseurController;
use App\Controllers\SecuriteController;
use App\Controllers\EtudiantController;
use App\Controllers\HomeController;
use App\Controllers\InscriptionController;
use App\Controllers\UserController;
use App\Exceptions\RouteNotFoundException;
$router=new Router();

$router->route("/",[SecuriteController::class,"connexion"]);
$router->route("/sign-in",[SecuriteController::class,"inscription"]);
$router->route("/logout",[SecuriteController::class,"deconnexion"]);

$router->route("/dashboard",[HomeController::class,"home"]);

$router->route("/classe",[ClasseController::class,"lister"]);
$router->route("/classe-add",[ClasseController::class,"ajouter"]);
$router->route("/classe-up",[ClasseController::class,"modifier"]);
$router->route("/classe-del",[ClasseController::class,"supprimer"]);


$router->route("/cours-classe",[CoursController::class,"listerCoursDelaClasse"]);
$router->route("/cours",[CoursController::class,"lister"]);
$router->route("/cours-add",[CoursController::class,"ajouter"]);
$router->route("/cours-up",[CoursController::class,"modifier"]);
$router->route("/cours-del",[CoursController::class,"supprimer"]);


$router->route("/module",[ModuleController::class,"lister"]);
$router->route("/module-add",[ModuleController::class,"ajouter"]);
$router->route("/module-up",[ModuleController::class,"modifier"]);


$router->route("/professeur",[ProfesseurController::class,"lister"]);
$router->route("/professeur-add",[ProfesseurController::class,"ajouter"]);
$router->route("/etudiant",[EtudiantController::class,"lister"]);
$router->route("/etudiant-add",[EtudiantController::class,"ajouter"]);


$router->route("/inscription",[InscriptionController::class,"lister"]);
$router->route("/inscription-add",[InscriptionController::class,"ajouter"]);
$router->route("/inscription-up",[InscriptionController::class,"modifier"]);
$router->route("/inscription-del",[InscriptionController::class,"supprimer"]);

$router->route("/users",[UserController::class,"lister"]);
$router->route("/users-add",[UserController::class,"ajouter"]);
$router->route("/users-up",[UserController::class,"modifier"]);
$router->route("/users-del",[UserController::class,"supprimer"]);

try {
  $router->resolve();
} catch (RouteNotFoundException $ex) {
   die($ex->message);
}