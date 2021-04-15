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
        $this->view->datos = $this->model->show(['id_libro' => $id_libro]);
        // var_dump($this->view->datos);
        $this->view->render('inicio/show');
    }

    public function venta()
    {
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $total = $_POST['total'];
        $direccion = $_POST['direccion'];
        $rfc = $_POST['rfc'];
        $id_libro = $_POST['id_libro'];
        $this->view->msj = false;
        if ($this->model->venta(['precio' => $precio, 'cantidad' => $cantidad, 'rfc' => $rfc, 'total' => $total, 'direccion' => $direccion, 'id_libro' => $id_libro]))
            $this->view->msj = true;
        $this->view->datos = $this->model->show(['id_libro' => $id_libro]);
        $this->view->render('inicio/show');
    }

    public function cliente_create()
    {
        $this->view->render('inicio/cliente_insert');
    }

    public function cliente_insert()
    {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $rfc = $_POST['rfc'];
        $credito = $_POST['credito']; // si y no
        $this->view->msj = false;
        if ($this->model->cliente_insert(['nombre' => $nombre, 'apellido' => $apellido, 'rfc' => $rfc, 'credito' => $credito]))
            $this->view->msj = true;
        $this->view->render('inicio/cliente_insert');

    }

 
    public function libros()
    {
        $numero_pagina = isset($_GET['numero_pagina']) ? $_GET['numero_pagina'] : 1;
        $host = constant('HOST');
        $dbname = constant('DB');
        $user = constant('USER');
        $password = constant('PASSWORD');
        $GLOBALS['db'] = NULL;
        try{
            $GLOBALS['db'] = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            $GLOBALS['db']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            $GLOBALS['msg'] = 'Fallo la conexion';
        }
        $consulta = $GLOBALS['db']->prepare("SELECT * FROM mostrar_libro");
        $consulta->execute();
        $numero_paginas =  9;
        $inicio = ($numero_pagina - 1) * $numero_paginas;
        $this->view->total_paginas = round($consulta->rowCount() / $numero_paginas);
        $this->view->numero_pagina = $numero_pagina;
        $this->view->datos = $this->model->libros(['numero_pagina' => $numero_pagina]);
        // var_dump($this->view->datos);
        $this->view->render('inicio/libros');
    }
    public function acerca(){
        print 'g';
        $this->view->render('inicio/acerca');
    }
    public function search()
    {
        $texto = $_POST['texto'];
        $this->view->datos = $this->model->search(['texto' => $texto]);
        
        $this->view->render('inicio/search');
    }
}
