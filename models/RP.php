<?php 
namespace App\Models;
class RP extends User {
    
    public function __construct()
    {
        parent::__construct();
        parent::$role="ROLE_RP";
        
    }

    public static  function selectAll(){
        $sql="select *  from  ".parent::table()." where roles like ? ";
       return parent::database()->executeSelect($sql,[parent::$role]);
     }


}
