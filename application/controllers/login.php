<?php

/**
 * * \HomeController
 * */
error_reporting(E_ALL);
ini_set("display_errors", 1);

include(__DIR__.'/base.php');
include(__DIR__.'/../models/user.php');

class LoginController extends BaseController 
{
      
      public static function login()
      {
          $name = $_POST['acount']?$_POST['acount']:null;
          $password = $_POST['password']?$_POST['password']:null;
          if($name != null && $password != null && User::getOne($name, md5($password))){
              setcookie("name", $name, time()+3600, "/");
              echo '<script language=javascript>window.location.href="../home"</script>';
          }else{
              include(__DIR__.'/../views/login.php');
          }
      }


      public static function register(){
          $name = $_POST["acount"]?$_POST["acount"]:null;
          $password = $_POST["password"]?$_POST["password"]:null;
          if ($name != null && $password != null){
              User::insert($name,md5($password)); 
              setcookie("name", $name, time()+3600, "/");
              echo '<script language=javascript>window.location.href="../home"</script>';
 
          }else{
              include(__DIR__.'/../views/register.php');
          }
      }


}

//HomeController::home();
