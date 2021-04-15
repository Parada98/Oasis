<?php


    class Admin_model extends Model
    {
        
        function __construct()
        {
            parent::__construct();
        }
        
        
        public function editorial()
        {
            
            $created = array();
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("SELECT * FROM mostrar_editorial");
                $consulta->execute();
                while($fila = $consulta->fetch())
                    array_push($created, ['id_editorial' => $fila['id_editorial'], 'nombre' => $fila['nombre'], 'direccion' => $fila['direccion'], 'descripcion' => $fila['descripcion']]);
            }
            catch(PDOException $e)
            {
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;
        }
        public function editorial_insert($data)
        {
            $created = null;
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("CALL insertar_editorial(:nombre, :direccion, :descripcion)");
                $consulta->execute(['nombre' => $data['nombre'], 'direccion' => $data['direccion'], 'descripcion' => $data['descripcion']]);
                $created = true;
            }
            catch(PDOException $e)
            {
                $created = false;
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;
        }
        public function editorial_remove($data)
        {
            $created = null;
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("CALL eliminar_editorial(:id_editorial) ");
                $consulta->execute(['id_editorial' => $data['id_editorial']]);
                $created = true;
            }
            catch(PDOException $e)
            {
                $created = false;
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;
        }
        public function editorial_update($data){
            $created = array();
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("SELECT * FROM mostrar_editorial WHERE id_editorial = :id_editorial");
               $consulta->execute(['id_editorial' => $data['id_editorial']]);
                while($fila = $consulta->fetch())
                    $created = array(['id_editorial' => $fila['id_editorial'], 'nombre' => $fila['nombre'], 'direccion' => $fila['direccion'], 'descripcion' => $fila['descripcion']]);
            }
            catch(PDOException $e)
            {
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;          
        }
        public function editorial_update2($data)
        {
            $created = null;
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("CALL actualizar_editorial(:id_editorial, :nombre, :direccion, :descripcion) ");
                $consulta->execute(['id_editorial' => $data['id_editorial'], 'nombre' => $data['nombre'], 'direccion' => $data['direccion'], 'descripcion' => $data['descripcion']]);
                $created = true;
            }
            catch(PDOException $e)
            {
                $created = false;
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;

        }
        // // auhor aun no esta terminado
        public function autor()
        {
            
            $created = array();
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("SELECT * FROM mostrar_autor");
                $consulta->execute();
                while($fila = $consulta->fetch())
                    array_push($created, ['id_autor' => $fila['id_autor'], 'nombre' => $fila['nombre'], 'edad' => $fila['edad'], 'genero' => $fila['genero']]);
            }
            catch(PDOException $e)
            {
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;
        }
        public function autor_insert($data)
        {
            $created = null;
            try
            {

                $this->db->open_connection();
                $consulta = $this->db->con->prepare("CALL insertar_autor(:nombre, :edad, :genero) ");
                $consulta->execute(['nombre' => $data['nombre'], 'edad' => $data['edad'], 'genero' => $data['genero']]);
                $created = true;
            }
            catch(PDOException $e)
            {
                $created = false;
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;
            // todo bien o me equivoque?
            /// que datos pide insertar_usuario
            //  ok ahorita como consula
            // por que nos va a flatar la foto
        }
        public function autor_remove($data)
        {
            $created = null;
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("CALL eliminar_autor(:id_autor) ");
                $consulta->execute(['id_autor' => $data['id_autor']]);
                $created = true;
            }
            catch(PDOException $e)
            {
                $created = false;
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;
        }
        public function autor_update($data){
            $created = array();
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("SELECT * FROM mostrar_autor WHERE id_autor = :id_autor");
                $consulta->execute(['id_autor' => $data['id_autor']]);
                while($fila = $consulta->fetch())
                    $created = array(['id_autor' => $fila['id_autor'], 'nombre' => $fila['nombre'], 'edad' => $fila['edad'], 'genero' => $fila['genero']]);
            }
            catch(PDOException $e)
            {
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;          
        }
        public function autor_update2($data)
        {
            $created = null;
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("CALL actualizar_autor(:id_autor, :nombre, :edad, :genero)");
                $consulta->execute(['id_autor' => $data['id_autor'], 'nombre' => $data['nombre'], 'edad' => $data['edad'], 'genero' => $data['genero']]);
                $created = true;
            }
            // actualizar tambien trae foto?
            catch(PDOException $e)
            {
                $created = false;
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;

        }
        
        public function usuario()
        {
// que si copie usuario            
            $created = array();
            try
            {
                $this->db->open_connection();
                // $consulta = $this->db->con->prepare("select * from Usuario");
                $consulta = $this->db->con->prepare("SELECT * FROM mostrar_usuario");
                // le falta el usuario al procediemientp
                $consulta->execute();
                while($fila = $consulta->fetch())
                    array_push($created, ['id_usuario' => $fila['id_usuario'], 'nombre' => $fila['nombre'], 'apellido' => $fila['apellido'], 'fotografia' => $fila['fotografia'], 'usuario' => $fila['usuario']]);
            }
            catch(PDOException $e)
            {
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;
        }
        public function usuario_insert($data)
        {
            $created = null;
            try
            {
                $this->db->open_connection();
                $contrasena = password_hash($data['contrasena'], PASSWORD_DEFAULT);
                // $consulta = $this->db->con->prepare("insert into Usuario(nombre, apellido, usuario, contrasena) values(:nombre, :apellido, :usuario, :contrasena) ");
                $consulta = $this->db->con->prepare("CALL insertar_usuario(:nombre, :apellido, :usuario, :contrasena)");
                $consulta->execute(['nombre' => $data['nombre'], 'apellido' => $data['apellido'], 'usuario' => $data['usuario'], 'contrasena' => $contrasena]);
                $created = true;
            }
            catch(PDOException $e)
            {
                $created = false;
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;
        }
        public function usuario_remove($data)
        {
            $created = null;
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("CALL eliminar_usuario(:id_usuario)");
                $consulta->execute(['id_usuario' => $data['id_usuario']]);
                $created = true;
            }
            catch(PDOException $e)
            {
                $created = false;
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;
        }

        public function usuario_update($data){
            $created = array();
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("SELECT * FROM mostrar_usuario WHERE id_usuario = :id_usuario");
                $consulta->execute(['id_usuario' => $data['id_usuario']]);
                while($fila = $consulta->fetch())
                    $created = array(['id_usuario' => $fila['id_usuario'], 'nombre' => $fila['nombre'], 'apellido' => $fila['apellido'], 'usuario' => $fila['usuario']]);
            }
            catch(PDOException $e)
            {
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;          
        }
        public function usuario_update2($data)
        {
            $created = null;
            try
            {
                $this->db->open_connection();
                if($data['contrasena'] == ''){
                    $consulta = $this->db->con->prepare("CALL actualizar_usuario2 (:id_usuario, :nombre, :apellido, :usuario)");
                    $consulta->execute(['id_usuario' => $data['id_usuario'],'nombre' => $data['nombre'], 'apellido' => $data['apellido'], 'usuario' => $data['usuario'], 'id_usuario' => $data['id_usuario']]);
                }
                else{
                    $contrasena = password_hash($data['contrasena'], PASSWORD_DEFAULT);
                    $consulta = $this->db->con->prepare("CALL actualizar_usuario (:id_usuario, :nombre, :apellido, :usuario, :contrasena)");
                    $consulta->execute(['id_usuario' => $data['id_usuario'], 'nombre' => $data['nombre'], 'apellido' => $data['apellido'], 'usuario' => $data['usuario'], 'contrasena' => $contrasena,'id_usuario' => $data['id_usuario']]);
                }
                $created = true;
            }
            catch(PDOException $e)
            {
                $created = false;
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;

        }
        public function cliente()
        {
            $created = array();
            try
            {
                $this->db->open_connection();
                // esa esta bien
                $consulta = $this->db->con->prepare("SELECT * FROM mostrar_cliente");
                // le falta el usuario al procediemientp
                $consulta->execute();
                while($fila = $consulta->fetch())
                    array_push($created, ['id_cliente' => $fila['id_cliente'], 'nombre' => $fila['nombre'], 'apellido' => $fila['apellido'], 'rfc' => $fila['rfc'], 'credito' => $fila['credito']]);
            }
            catch(PDOException $e)
            {
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;
        }
        public function cliente_insert($data)
        {
            $created = null;
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("CALL insertar_cliente(:nombre, :apellido, :rfc, :credito)");
                $consulta->execute(['nombre' => $data['nombre'], 'apellido' => $data['apellido'], 'rfc' => $data['rfc'], 'credito' => $data['credito']]);
                $created = true;
            }
            catch(PDOException $e)
            {
                $created = false;
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;
        }
        public function cliente_remove($data)
        {
            $created = null;
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("CALL eliminar_cliente(:id_cliente)");
                $consulta->execute(['id_cliente' => $data['id_cliente']]);
                $created = true;
            }
            catch(PDOException $e)
            {
                $created = false;
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;
        }
        public function cliente_update($data){
            $created = array();
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("SELECT * FROM Cliente where id_cliente = :id_cliente");
                $consulta->execute(['id_cliente' => $data['id_cliente']]);
                while($fila = $consulta->fetch()){
                    $created = array(['id_cliente' => $fila['id_cliente'], 'nombre' => $fila['nombre'], 'apellido' => $fila['apellido'], 'rfc' => $fila['rfc'], 'credito' => $fila['credito']]);
                }
            }
            catch(PDOException $e)
            {
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;          
        }
        public function cliente_update2($data)
        {
            $created = null;
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("CALL actualizar_cliente(:id_cliente, :nombre, :apellido, :rfc, :credito)");
                $consulta->execute(['id_cliente' => $data['id_cliente'], 'nombre' => $data['nombre'], 'apellido' => $data['apellido'], 'rfc' => $data['rfc'], 'credito' => $data['credito']]);
                $created = true;
            }
            catch(PDOException $e)
            {
                $created = false;
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;

        }
        public function libro()
        {
            $created = array();
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("SELECT * FROM mostrar_libro");
                $consulta->execute();
                while($fila = $consulta->fetch())
                    array_push($created, ['id_libro' => $fila['id_libro'], 'nombre' => $fila['nombre'], 'color' => $fila['color'], 'estante' => $fila['estante'], 'numero_paginas' => $fila['numero_paginas'], 'descripcion' => $fila['libro_descripcion'], 'estado' => $fila['estado'], 'precio' => $fila['precio'], 'autor' => $fila['autor'], 'editorial' => $fila['editorial'], 'imagen' => $fila['imagen']]);
            }
            catch(PDOException $e)
            {
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;
        }
        public function libro_remove($data)
        {
            $created = null;
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("DELETE FROM Libro WHERE id_libro = :id_libro");
                $consulta->execute(['id_libro' => $data['id_libro']]);
                $created = true;
            }
            catch(PDOException $e)
            {
                $created = false;
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;
        }
        public function libro_update($data){
            $created = array();
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("SELECT * FROM Libro where id_libro = :id_libro");
                $consulta->execute(['id_libro' => $data['id_libro']]);
                while($fila = $consulta->fetch())
                    $created = array(['id_libro' => $fila['id_libro'],'nombre' => $fila['nombre'], 'color' => $fila['color'], 'estante' => $fila['estante'], 'numero_paginas' => $fila['numero_paginas'], 'descripcion' => $fila['descripcion'], 'estado' => $fila['estado'], 'precio' => $fila['precio'], 'id_autor' => $fila['id_autor'], 'id_editorial' => $fila['id_editorial']]);
            }
            catch(PDOException $e)
            {
                $created = false;
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;          
        }
        public function libro_update2($data)
        {
            $created = null;
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("CALL actualizar_libro  (:id_libro, :nombre, :color, :estante, :numero_paginas, :descripcion, :estado, :precio, :id_autor, :id_editorial)");
                $consulta->execute(['id_libro' => $data ['id_libro'], 'nombre' => $data['nombre'], 'color' => $data['color'], 'estante' => $data['estante'], 'numero_paginas' => $data['numero_paginas'], 'descripcion' => $data['descripcion'], 'estado' => $data['estado'], 'precio' => $data['precio'], 'id_autor' => $data['id_autor'], 'id_editorial' => $data['id_editorial'], 'id_libro' => $data['id_libro']]);
                $created = true;
            }
            catch(PDOException $e)
            {
                $created = false;
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;
        }
        public function inventario()
        {
            
            $created = array();
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("SELECT * FROM mostrar_inventario");
                $consulta->execute();
                while($fila = $consulta->fetch())
                    array_push($created, ['id_inventario' => $fila['id_invenatario'], 'nombre' => $fila['nombre'], 'stock' => $fila['stock_libros'], 'fecha' => $fila['fechadeingreso']]);
            }
            catch(PDOException $e)
            {
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;
       }
        public function inventario_update($data){
            $created = array();
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("SELECT * FROM mostrar_inventario where id_invenatario = :id_inventario");
                $consulta->execute(['id_inventario' => $data['id_inventario']]);
                while($fila = $consulta->fetch())
                    $created = array(['id_inventario' => $fila['id_invenatario'], 'nombre' => $fila['nombre'],'stock' => $fila['stock_libros']]);
            }
            catch(PDOException $e)
            {
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;          
        }
        public function inventario_update2($data)
        {
            $created = null;
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("CALL actualizar_inventario (:id_inventario, :stock_libros)");
                $consulta->execute([ 'id_inventario' => $data['id_inventario'],'stock_libros' => $data['stock']]);
                $created = true;
            }
            catch(PDOException $e)
            {
                $created = false;
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;
        }
        public function venta()
        {
            
            $created = array();
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("SELECT * FROM mostrar_venta");
                $consulta->execute();
                while($fila = $consulta->fetch())
                    array_push($created, ['nombre_libro' => $fila['nombre_libro'], 'nombre_usuario' => $fila['nombre_usuario'], 'direccion' => $fila['direccion'], 'rfc' => $fila['rfc'], 'credito' => $fila['credito'], 'precio' => $fila['precio'], 'cantidad' => $fila['cantidad'], 'total' => $fila['total'], 'imagen' => $fila['imagen']]);
            }
            catch(PDOException $e)
            {
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;
       }

        
    }
?>
