<?php 

 namespace App\Models;
 use App\Core\Model;
 
class User extends Model{
    //Attributs 
     protected int   $id;
     protected string $login;
     protected string $password;
     protected static string $role=ROLE_ADMIN;
     protected String $nom;
     protected String $prenom;
     protected String|null $image;
    
    public function __construct( string $role=ROLE_ADMIN)
    {
         $this->setRole($role);
    }
    
    public function getId():int{
       return $this->id;
    }
    
    /**
      * Set the value of login
      *
      * @return  self
      */ 
    public function setId(int $id):self{
               $this->id=$id;
               return $this;  
    }
    

     /**
      * Get the value of login
      */ 
     public function getLogin()
     {
          return $this->login;
     }

     /**
      * Set the value of login
      *
      * @return  self
      */ 
     public function setLogin(string $login):self
     {
          $this->login = $login;

          return $this;
     }

     /**
      * Get the value of password
      */ 
     public function getPassword()
     {
          return $this->password;
     }

     /**
      * Set the value of password
      *
      * @return self
      */ 
     public function setPassword(string $password):self
     {
          $this->password = $password;

          return $this;
     }

     /**
      * Get the value of role
      */ 
     public static  function getRole()
     {
          return self::$role;
     }

     /**
      *  set the role of the user
      *
      * @return self
       */     
     public static function setRole(string $role)
     {
          self::$role = $role;  
     }

     public function insert(){
          //die(parent::$table);
          $sql="INSERT INTO  ".parent::table()."  (`login`, `password`,  `roles`,`nom`,`prenom`)
               VALUES ( ?, ?, ?, ?, ?);";
         return parent::database()->executeUpdate($sql,[$this->login,$this->password,self::$role,$this->nom,$this->prenom]);
     }

     public  function selectUserByLoginAndPassword(){
           $sql="select * from user where login=? and password=? ;";
           return parent::database()->setClassName(get_called_class())->executeSelect($sql,
                                      [$this->login,$this->password],
                                       true) ;
     }
     public static function table(){
          return 'user';
        }


     /**
      * Get the value of prenom
      */ 
     public function getPrenom()
     {
          return $this->prenom;
     }

     /**
      * Set the value of prenom
      *
      * @return self
      */ 
     public function setPrenom($prenom):self
     {
          $this->prenom = $prenom;

          return $this;
     }

     /**
      * Get the value of nom
      */ 
     public function getNom()
     {
          return $this->nom;
     }

     /**
      * Set the value of nom
      *
      * @return self
      */ 
     public function setNom($nom):self
     {
          $this->nom = $nom;

          return $this;
     }

     /**
      * Get the value of image
      */ 
     public function getImage()
     {
          return $this->image;
     }

     /**
      * Set the value of image
      *
      * @return   self
      */ 
     public function setImage($image):self
     {
          $this->image = $image;

          return $this;
     }
}