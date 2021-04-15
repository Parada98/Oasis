<?php

class Controller{

    function __construct(){
        $this->view = new View();
    }

    function load_model($url){
        if($url == 'inicio'){
            $file_model = 'models/inicio.php';
            if(file_exists($file_model)) {
                require $file_model;
                $name = 'Inicio_model';
                $this->model = new $name();                
            }
            
        }
        $file_model = 'models/'.$url[0].'.php';
        if(!file_exists($file_model)) return;
        require $file_model;
        $name = $url[0].'_model';
        $this->model = new $name();
    }
}

?>
