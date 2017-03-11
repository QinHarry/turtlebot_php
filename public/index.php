<?php

error_reporting(e_all);
ini_set('display_errors', 1);

$root = $_SERVER['SCRIPT_NAME'];
$request = $_SERVER['REQUEST_URI'];

$URI = array();
$url = trim(str_replace($root, '', $request), '/');
$class = 'home';
$func = 'home';
if (!empty($url)) {
    $URI = explode('/', $url);

    if (count($URI) == 2) {    
        $class = $URI[0];
        $func = $URI[1];

    }
}

if(!$_COOKIE["name"] && $class != 'login'){
    echo '<script language=javascript>window.location.href="login/login"</script>';
}

include(__DIR__.'/../application/controllers/'.$class.'.php');

$obj = ucfirst($class).'Controller';
call_user_func_array(
    array($obj, $func),
    array_slice($URI, 2)
);

