<?php

class View{

    function __construct(){
        
    }

    function render($name){
        if(!file_exists('views/' . $name . '.php')) {
            require("controllers/fail.php");
            $controller = new Fail();
            return;
        }
        require("views/".$name.".php");
    }
}

?>