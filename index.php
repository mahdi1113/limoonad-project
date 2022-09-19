<?php 


require_once './base/autoload.php';

require_once './controllers/DisplayPagesController.php';

$methods = $_GET['p'] ?? 'landing';
$controller = new DisplayPagesController;

if(method_exists($controller,$methods))
{
    $controller->$methods();
}else{
    abort(404);
}



