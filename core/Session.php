<?php 
namespace App\Core;

use App\Exceptions;

abstract class Session{

    public static function openSession(){
        if(session_status()==PHP_SESSION_NONE){
            session_start();
        }
    }
    public static function get(string $key){
        if(array_key_exists($key,$_SESSION)){
            return $_SESSION[$key];
        }
        die('session key undefined');
        
    }

    public static function set(string $key,$data){
          $_SESSION[$key]=$data;
    }

    public static function setUser($user){
          self::set(KEY_USER,$user);
    }

    public static function getUser(){
        return self::get(KEY_USER);
    }

    public static function userExist(){
        return array_key_exists(KEY_USER,$_SESSION);
    }

    public static function destroy(){
        session_destroy();
        unset($_SESSION[KEY_USER]);
        $_SESSION=array();
    }

}