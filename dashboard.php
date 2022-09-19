<?php

require_once './base/autoload.php';

$method = $_GET['m'] ?? 'dashboard';
$controller = $_GET['c'] ?? 'Home';

$controller = $controller."Controller";

require_once("controllers/$controller.php");

if(class_exists($controller)){
    $obj = new $controller;
    if(method_exists($obj , $method)){
        $obj->$method();
    }else{
        die('method does not exists');
    }
}else{
    die('class does not exists');
}

// unset($_SESSION['message']);