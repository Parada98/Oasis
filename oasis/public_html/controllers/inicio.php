<?php

    class Inicio extends Controller
    {

        public function __construct()
        {
            parent::__construct();
            // $this->view->render('inicio/index');
        }

        public function show()
        {
            $id_libro = $_GET['libro'];
            var_dump($_GET);
            $this->view->datos = $this->model->show(['id_libro' => $id_libro]);
            // var_dump($this->view->datos);
            $this->view->render('inicio/show');
        }


    }

?>