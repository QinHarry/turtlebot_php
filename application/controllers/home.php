<?php

/**
 * * \HomeController
 * */
error_reporting(E_ALL);
ini_set("display_errors", 1);

include(__DIR__.'/base.php');
include(__DIR__.'/../models/user.php');

class HomeController extends BaseController 
{
      
      public static function home()
      {
          setcookie("position_id", User::getPositionId($_COOKIE['name']), time()+3600, "/");
          include(__DIR__.'/../views/home.php');
      }

}

