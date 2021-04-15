<?php

    class Route
    {
        function __construct()
        {
            $url = isset($_GET['url']) ? $_GET['url'] : null;
            $url = rtrim($url, '/');
            $url = explode('/', $url);
//            for($i = 0; $i < count($url); $i++)$url[$i] = preg_replace('/[[:punct:]]/', '', $url[$i]);
            if(empty($url[0]))
            {
                $file_controller = "controllers/inicio.php";
                require_once($file_controller);  
                $view = new View();
                // $controller = new Inicio();
                $view->render('inicio/index');
                $controller->load_model("inicio");
                return; 
            }
            $this->load_controller($url);
        }
        
        private function load_controller($url)
        {
            $file_controller = 'controllers/'.$url[0].'.php';
            if(!file_exists($file_controller))
            {
                require("controllers/fail.php");
                $controller = new Fail();
                return;
            }
            require $file_controller;
            if(count($url) == 1)
            {  
                    $view = new View();
                    $view->render("$url[0]/index");
                return;
            }
            $controller = new $url[0];
            $controller->load_model($url);
            if(isset($url[1])) $controller->{$url[1]}();
            else {
                require ("controllers/fail.php");
                $controller = new Fail();
            }
        }

    }

?>
