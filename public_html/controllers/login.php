<?php
    class Login extends Controller
    {
        
        function __construct()
        {
            parent::__construct();
        }

        public function create()
        {
            $this->view->render('login/create');
        }
        
        public function auth()
        {
            $usuario = $_POST['user'];
            $contrasena = $_POST['password'];
            if($this->model->auth(['usuario' => $usuario, 'contrasena' => $contrasena]))
            {
                $this->view->msj = 'Accediste al sistema';
                $this->view->render('admin/index');
            }
            else
            {
                $this->view->msj = 'error de usuario y/o contrseña';
                $this->view->render('login/index');
            }
        }

        public function salir()
        {
            session_start();
            session_destroy();
            $this->view->render('login/index');
        }

    }

?>
