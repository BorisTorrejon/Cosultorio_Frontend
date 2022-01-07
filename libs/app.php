<?php
require_once './controllers/bug.php';

class App{
    function __construct()
    {   
        $url = !empty($_GET['url']) ? $_GET['url'] : 'main';
        $url = rtrim($url,'/');
        $url = explode('/',$url);
        $fileController = './controllers/'.$url[0].'.php';
        if (file_exists($fileController)) {
            require_once $fileController;
            $controller = new $url[0];
            $controller->loadModel($url[0]);
            if(method_exists($controller,'get')){
                $controller->get();
            }
            if(isset($url[1])){
                $controller->{$url[1]}();
            }
            
        } else {
            $controller = new Bug();            
        }
        
    }
}
?>