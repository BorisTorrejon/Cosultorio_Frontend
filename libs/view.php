<?php
class View{
    function __construct()
    {  
    }
    function render($name){
        require_once './views/'.$name.'.php';
    }
    function active($nav){
        $url = !empty($_GET['url']) ? $_GET['url'] : 'main';
        if ($url===$nav)
            echo 'active';
        else
            echo '';
    }
}
?>