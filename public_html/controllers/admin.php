<?php

    class Admin extends Controller
    {

        function __construct()
        {
            parent::__construct();
            session_start();
        }
        
        function editorial()
        {
            session_start();
            $id = $_SESSION['id_usuario'];
            session_unset();
            $_SESSION['id_usuario'] = $id;
            $this->view->datos = $this->model->editorial();
            $this->view->render('admin/editorial/index');
        }


        public function editorial_create()
        {
            $this->view->render('admin/editorial/create');
        }
        
        public function editorial_insert()
        {
            $nombre = $_POST['name'];
            $direccion = $_POST['direccion'];
            $descripcion = $_POST['descripcion'];
            $this->view->msj = false;
            if($this->model->editorial_insert(['nombre' => $nombre, 'direccion' => $direccion, 'descripcion' => $descripcion]))
                $this->view->msj = true;
            $this->view->render('admin/editorial/create');
        }

        public function editorial_remove()
        {
            $id_editorial = $_POST['id_editorial'];
            $this->view->msj = false;
            if($this->model->editorial_remove(['id_editorial' => $id_editorial]))
                $this->view->msj = true;
            $this->view->datos = $this->model->editorial();
            $this->view->render('admin/editorial/index');
        }

        public function editorial_update(){
            session_start();
            $_SESSION['id_editorial']=isset($_POST['id_editorial']) ? $_POST['id_editorial'] : $_SESSION['id_editorial'];
            $id_editorial = $_POST['id_editorial'];
            $this->view->datos = $this->model->editorial_update(['id_editorial' => $_SESSION['id_editorial']]);
            $this->view->render('admin/editorial/update');
        }

        public function editorial_update2(){
            session_start();
             $_SESSION['id_editorial'] = isset($_POST['id_editorial']) ? $_POST['id_editorial'] : $_SESSION['id_editorial']; 
             $_SESSION['name'] = isset($_POST['name']) ? $_POST['name'] : $_SESSION['name'];
             $_SESSION['direccion'] = isset($_POST['direccion']) ? $_POST['direccion'] : $_SESSION['direccion'];
             $_SESSION['descripcion'] = isset($_POST['descripcion']) ? $_POST['descripcion'] : $_SESSION['descripcion'];
            $this->view->msj = false;
            if($this->model->editorial_update2(['id_editorial' => $_SESSION['id_editorial'], 'nombre' =>  $_SESSION['name'], 'direccion' => $_SESSION['direccion'], 'descripcion' => $_SESSION['descripcion']]))
                $this->view->msj = true;
            $this->view->datos = $this->model->editorial_update(['id_editorial' =>  $_SESSION['id_editorial']]);
            $this->view->render('admin/editorial/update');
        }
        
        function autor()
        {
            session_start();
            $id = $_SESSION['id_usuario'];
            session_unset();
            $_SESSION['id_usuario'] = $id;
            $this->view->datos = $this->model->autor();
            $this->view->render('admin/autor/index');

        }

        public function autor_create()
        {
            $this->view->render('admin/autor/create');
        }
        
        public function autor_insert()
        {
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $genero = $_POST['genero'];
            $this->view->msj = false;
            if($this->model->autor_insert(['nombre' => $nombre, 'edad' => $edad, 'genero' => $genero]))
                $this->view->msj = true;
            $this->view->render('admin/autor/create');
        }
        public function autor_remove()
        {
            $id_autor = $_POST['id_autor'];
            $this->view->msj = false;
            if($this->model->autor_remove(['id_autor' => $id_autor]))
                $this->view->msj = true;
            $this->view->datos = $this->model->autor();
            $this->view->render('admin/autor/index');
        }

        public function autor_update(){
            session_start();
            $_SESSION['id_autor'] = isset($_POST['id_autor']) ? $_POST['id_autor'] : $_SESSION['id_autor']; 
            $id_autor = $_POST['id_autor'];
            $this->view->datos = $this->model->autor_update(['id_autor' => $_SESSION['id_autor']]);
            $this->view->render('admin/autor/update');
        }
        
        public function autor_update2(){
            session_start();
            $_SESSION['id_autor'] = isset($_POST['id_autor']) ? $_POST['id_autor'] : $_SESSION['id_autor']; 
            $_SESSION['nombre'] = isset($_POST['nombre']) ? $_POST['nombre'] : $_SESSION['nombre'];
            $_SESSION['edad'] = isset($_POST['edad']) ? $_POST['edad'] : $_SESSION['edad'];
            $_SESSION['genero'] = isset($_POST['genero']) ? $_POST['genero'] : $_SESSION['genero'];
            $this->view->msj = false;
            if($this->model->autor_update2(['id_autor' =>  $_SESSION['id_autor'], 'nombre' => $_SESSION['nombre'], 'edad' => $_SESSION['edad'], 'genero' => $_SESSION['genero']]))
                $this->view->msj = true;
            $this->view->datos = $this->model->autor_update(['id_autor' => $_SESSION['id_autor']]);
            $this->view->render('admin/autor/update');
        }

        function usuario()
        {
            session_start();
            $id = $_SESSION['id_usuario'];
            session_unset();
            $_SESSION['id_usuario'] = $id;
            $this->view->datos = $this->model->usuario();
            $this->view->render('admin/usuario/index');
        }

        public function usuario_create()
        {
            $this->view->render('admin/usuario/create');
        }

        public function usuario_insert()
        {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];
            $this->view->msj = false;
            if($this->model->usuario_insert(['nombre' => $nombre, 'apellido' => $apellido, 'usuario' => $usuario, 'contrasena' => $contrasena]))
                $this->view->msj = true;
            $this->view->render('admin/usuario/create');
        }

        public function usuario_remove()
        {
            $id_usuario = $_POST['id_usuario'];
            $this->view->msj = false;
            if($this->model->usuario_remove(['id_usuario' => $id_usuario]))
                $this->view->msj = true;
            $this->view->datos = $this->model->usuario();
            $this->view->render('admin/usuario/index');
        }

        public function usuario_update()
        {
            session_start();
            $_SESSION['id_usuario2'] = isset($_POST['id_usuario']) ? $_POST['id_usuario'] : $_SESSION['id_usuario2']; 
            $this->view->datos = $this->model->usuario_update(['id_usuario' => $_SESSION['id_usuario2']]);
            $this->view->render('admin/usuario/update');
        }

        public function usuario_update2(){
            session_start();
            $_SESSION['id_usuario2'] = isset($_POST['id_usuario']) ? $_POST['id_usuario'] : $_SESSION['id_usuario2']; 
            $_SESSION['nombre'] = isset($_POST['nombre']) ? $_POST['nombre'] : $_SESSION['nombre'];
            $_SESSION['apellido'] = isset($_POST['apellido']) ? $_POST['apellido'] : $_SESSION['apellido'];
            $_SESSION['usuario'] = isset($_POST['usuario']) ? $_POST['usuario'] : $_SESSION['usuario'];
            $_SESSION['contrasena'] = isset($_POST['contrasena']) ? $_POST['contrasena'] : $_SESSION['contrasena'];
            $this->view->msj = false;
            if($this->model->usuario_update2(['id_usuario' => $_SESSION['id_usuario2'], 'nombre' => $_SESSION['nombre'], 'apellido' => $_SESSION['apellido'],  'usuario' =>   $_SESSION['usuario'], 'contrasena' =>  $_SESSION['contrasena']]))
                $this->view->msj = true;
            $this->view->datos = $this->model->usuario_update(['id_usuario2' =>  $_SESSION['id_usuario2']]);
            $this->view->render('admin/usuario/update');
        }
        
        public function usuario_imagen()
        {
            session_start();
            $this->view->id = $_SESSION['id_usuario2'];
            $this->view->render('admin/usuario/imagen');

        }

        function cliente()
        {
            session_start();
            $id = $_SESSION['id_usuario'];
            session_unset();
            $_SESSION['id_usuario'] = $id;
            $this->view->datos = $this->model->cliente();
            $this->view->render('admin/cliente/index');
        }


        public function cliente_create()
        {
            $this->view->render('admin/cliente/create');
        }

        public function cliente_insert()
        {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $rfc = $_POST['rfc'];
            $credito = $_POST['credito']; // si y no
            $this->view->msj = false;
            if($this->model->cliente_insert(['nombre' => $nombre, 'apellido' => $apellido, 'rfc' => $rfc, 'credito' => $credito]))
                $this->view->msj = true;
            $this->view->render('admin/cliente/create');
        }
        public function cliente_remove()
        {
            $id_cliente = $_POST['id_cliente'];
            $this->view->msj = false;
            if($this->model->cliente_remove(['id_cliente' => $id_cliente]))
                $this->view->msj = true;
            $this->view->datos = $this->model->cliente();
            $this->view->render('admin/cliente/index');
        }
        public function cliente_update(){
            session_start();
            $_SESSION['id_cliente'] = isset($_POST['id_cliente']) ? $_POST['id_cliente'] : $_SESSION['id_cliente']; 
            $this->view->datos = $this->model->cliente_update(['id_cliente' => $_SESSION['id_cliente']]);
            $this->view->render('admin/cliente/update');
        }

        public function cliente_update2(){
            session_start();
            $_SESSION['id_cliente'] = isset($_POST['id_cliente']) ? $_POST['id_cliente'] : $_SESSION['id_cliente']; 
            $_SESSION['nombre'] = isset($_POST['nombre']) ? $_POST['nombre'] : $_SESSION['nombre'];
            $_SESSION['apellido'] = isset($_POST['apellido']) ? $_POST['apellido'] : $_SESSION['apellido'];
            $_SESSION['rfc'] = isset($_POST['rfc']) ? $_POST['rfc'] : $_SESSION['rfc'];
            $_SESSION['credito'] = isset($_POST['credito']) ? $_POST['credito'] : $_SESSION['credito'];
            $this->view->msj = false;
            if($this->model->cliente_update2(['id_cliente' => $_SESSION['id_cliente'], 'nombre' => $_SESSION['nombre'], 'apellido' => $_SESSION['apellido'],  'rfc' =>  $_SESSION['rfc'] , 'credito' => $_SESSION['credito']]))
                $this->view->msj = true;
            $this->view->datos = $this->model->cliente_update(['id_cliente' => $_SESSION['id_cliente']]);
            $this->view->render('admin/cliente/update');
        }

        function libro()
        {
            session_start();
            $id = $_SESSION['id_usuario'];
            session_unset();
            $_SESSION['id_usuario'] = $id;
            $this->view->datos = $this->model->libro();
            $this->view->render('admin/libro/index');
        }

        public function libro_create()
        {
            $this->view->render('admin/libro/create');
        }

        public function libro_insert()
        {
            $image = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
            $nombre = $_POST['nombre'];
            $color = $_POST['color'];
            $estante = $_POST['estante'];
            $estado = $_POST['estado'];
            $numero_paginas = $_POST['numero_paginas'];
            $descripcion = $_POST['descripcion'];
            $precio = $_POST['precio'];
            $id_autor = $_POST['id_autor'];
            $id_editorial = $_POST['id_editorial'];
            $query = "INSERT INTO Libro(nombre, color, estante, numero_paginas, descripcion, estado, precio, id_autor, id_editorial, imagen) VALUES ('$nombre', '$color', '$estante', '$numero_paginas', '$descripcion', '$estado', '$precio', '$id_autor', '$id_editorial', '$image')";
            $conexion = new mysqli(constant('HOST'), constant('USER'), constant('PASSWORD'), constant('DB'));
            $resultado = $conexion->query($query);
            $this->view->msj = $resultado ? true : false;
            $this->view->render('admin/libro/create');
        }
        public function libro_remove()
        {
            $id_libro = $_POST['id_libro'];
            $this->view->msj = false;
            if($this->model->libro_remove(['id_libro' => $id_libro]))
                $this->view->msj = true;
            $this->view->datos = $this->model->libro();
            $this->view->render('admin/libro/index');
        }

        public function libro_update()
        {
            session_start();
            $_SESSION['id_libro'] = isset($_POST['id_libro']) ? $_POST['id_libro'] : $_SESSION['id_libro'];
            $this->view->datos = $this->model->libro_update(['id_libro' => $_SESSION['id_libro']]);
            $this->view->render('admin/libro/update');
        }

        public function libro_update2()
        {
            $image = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
            $_SESSION['id_libro'] = isset($_POST['id_libro']) ? $_POST['id_libro'] : $_SESSION['id_libro']; 
            $_SESSION['nombre'] = isset($_POST['nombre']) ? $_POST['nombre'] : $_SESSION['nombre'];
            $_SESSION['color'] = isset($_POST['color']) ? $_POST['color'] : $_SESSION['color'];
            $_SESSION['estante'] = isset($_POST['estante']) ? $_POST['estante'] : $_SESSION['estante'];
            $_SESSION['numero_paginas'] = isset($_POST['numero_paginas']) ? $_POST['numero_paginas'] : $_SESSION['numero_paginas'];
            $_SESSION['descripcion'] = isset($_POST['descripcion']) ? $_POST['descripcion'] : $_SESSION['descripcion'];
            $_SESSION['estado'] = isset($_POST['estado']) ? $_POST['estado'] : $_SESSION['estado'];
            $_SESSION['precio'] = isset($_POST['precio']) ? $_POST['precio'] : $_SESSION['precio'];
            $_SESSION['id_autor'] = isset($_POST['id_autor']) ? $_POST['id_autor'] : $_SESSION['id_autor'];
            $_SESSION['id_editorial'] = isset($_POST['id_editorial']) ? $_POST['id_editorial'] : $_SESSION['id_editorial'];
            $id_libro = $_SESSION['id_libro']; 
            $nombre = $_SESSION['nombre'];
            $color =  $_SESSION['color'];
            $estante = $_SESSION['estante'];
            $numero_paginas = $_SESSION['numero_paginas'];
            $descripcion = $_SESSION['descripcion'];
            $estado = $_SESSION['estado'];
            $precio = $_SESSION['precio'];
            $id_autor = $_SESSION['id_autor'];
            $id_editorial = $_SESSION['id_editorial'];
            if(!$image)
                $query = "CALL actualizar_libro2('$id_libro', '$nombre', '$color', '$estante', '$numero_paginas', '$descripcion', '$estado', '$precio', '$id_autor', '$id_editorial')";
            else
                $query = "CALL actualizar_libro('$id_libro', '$nombre', '$color', '$estante', '$numero_paginas', '$descripcion', '$estado', '$precio', '$image', '$id_autor', '$id_editorial')";
            $conexion = new mysqli(constant('HOST'), constant('USER'), constant('PASSWORD'), constant('DB'));
            $resultado = $conexion->query($query);
            $this->view->msj = $resultado ? true : false;
            $this->view->datos = $this->model->libro_update(['id_libro' => $_SESSION['id_libro']]);
            $this->view->render('admin/libro/update');
        }

        function inventario()
        {
            session_start();
            $id = $_SESSION['id_usuario'];
            session_unset();
            $_SESSION['id_usuario'] = $id;
            $this->view->datos = $this->model->inventario();
            $this->view->render('admin/inventario/index');
        }
        
        public function inventario_update()
        {
            session_start();
            $_SESSION['id_inventario'] = isset($_POST['id_inventario']) ? $_POST['id_inventario'] : $_SESSION['id_inventario'];
            $this->view->datos = $this->model->inventario_update(['id_inventario' => $_SESSION['id_inventario']]);
            $this->view->render('admin/inventario/update');
        }

        public function inventario_update2()
        {
            session_start();
            $_SESSION['id_inventario'] = isset($_POST['id_inventario']) ? $_POST['id_inventario'] : $_SESSION['id_inventario']; 
            $_SESSION['stock'] = isset($_POST['stock']) ? $_POST['stock'] : $_SESSION['stock'];
            $this->view->msj = false;
            if($this->model->inventario_update2(['id_inventario' => $_SESSION['id_inventario'], 'stock' => $_SESSION['stock']]))
                $this->view->msj = true;
            $this->view->datos = $this->model->inventario_update(['id_inventario' => $_SESSION['id_inventario']]);
            $this->view->render('admin/inventario/update');
        }

        function venta()
        {
            $this->view->datos = $this->model->venta();
            $this->view->render('admin/venta/index');
        }
    }
?>