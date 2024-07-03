<?php 
namespace App\Core;
class Request {
    public function getUrl(){
       return "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }

    public function getUri(){
        return explode('?',$_SERVER['REQUEST_URI'])[0]; 
    }

    public function isPost():bool{
        return $_SERVER["REQUEST_METHOD"]=="POST";
    }
    public function isGet():bool{
        return $_SERVER["REQUEST_METHOD"]=="GET";
    }

   public function request():array{
          return $_POST;
   }

   /**
    * return all the query strings in a (key=>value) array
    *
    * @return string<key,value>[]
    */
   public function query():array{
       $uri=explode('?',$this->getUrl());
       if(count($uri)==2){
        $queryStrings=$uri[1];
        $querys=explode('&',$queryStrings);
        $queryRecord=[];
        foreach ($querys as $key => $query) {
            $strings=explode('=',$query);
            if(count($strings)==2){
                $queryRecord[$strings[0]]=$strings[1];
            }else{
                $queryRecord[]=$query;
            }
        }
        return $queryRecord;
       }
       
}


}