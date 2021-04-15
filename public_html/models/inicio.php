<?php

    
    class Inicio_model extends Model
    {

        function __construct()
        {
            parent::__construct();
        }

        function show($data)
        {
            $created = array();
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("SELECT * FROM mostrar_libro WHERE id_libro = :id_libro");
                $consulta->execute(['id_libro' => $data['id_libro']]);
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

        public function venta($data)
        {
            $created = null;
            try
            {
                $this->db->open_connection();

                $consulta = $this->db->con->prepare("SELECT id_cliente FROM Cliente WHERE rfc = :rfc");
                $consulta->execute(['rfc' => $data['rfc']]);
                if ($consulta->rowCount() != 1) {
                    $created = false;
                    return;
                }
                $datos = $consulta->fetchAll();
                $id_cliente = $datos[0]['id_cliente'];

                $consulta = $this->db->con->prepare("CALL insertar_venta(:cantidad, :total, :direccion, :id_libro, :id_cliente)");
                $consulta->execute(['cantidad' => $data['cantidad'], 'total' => $data['total'], 'direccion' => $data['direccion'], 'id_libro' => $data['id_libro'], 'id_cliente' => $id_cliente]);

                $consulta = $this->db->con->prepare("SELECT * FROM mostrar_libro WHERE id_libro = :id_libro");
                $consulta->execute(['id_libro' => $data['id_libro']]);
                
                $book = array();
                while($fila = $consulta->fetch())
                    array_push($book, ['id_libro' => $fila['id_libro'], 'nombre' => $fila['nombre'], 'color' => $fila['color'], 'estante' => $fila['estante'], 'numero_paginas' => $fila['numero_paginas'], 'descripcion' => $fila['libro_descripcion'], 'estado' => $fila['estado'], 'precio' => $fila['precio'], 'autor' => $fila['autor'], 'editorial' => $fila['editorial'], 'imagen' => $fila['imagen']]);

                include 'php/imprimir.php';                
                $created = true;
            }
            catch(PDOException $e)
            {
                $created = false;
                // print $e->getMessage();
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;
        }

        
        // function show($data)
        // {
        //     $created = array();
        //     try
        //     {
        //         $this->db->open_connection();
        //         $consulta = $this->db->con->prepare("SELECT * FROM mostrar_libro WHERE id_libro = :id_libro");
        //         $consulta->execute(['id_libro' => $data['id_libro']]);
        //         while($fila = $consulta->fetch())
        //             array_push($created, ['id_libro' => $fila['id_libro'], 'nombre' => $fila['nombre'], 'color' => $fila['color'], 'estante' => $fila['estante'], 'numero_paginas' => $fila['numero_paginas'], 'descripcion' => $fila['libro_descripcion'], 'estado' => $fila['estado'], 'precio' => $fila['precio'], 'autor' => $fila['autor'], 'editorial' => $fila['editorial'], 'imagen' => $fila['imagen']]);
        //         print 'f';
        //     }
        //     catch(PDOException $e)
        //     {
        //     }
        //     finally
        //     {
        //         $this->db->close_connection();
        //     }
        //     return $created;
        // }

        public function libros($data)
        {
            $created = array();
            try
            {
                $numero_pagina = $data['numero_pagina'];
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("SELECT * FROM mostrar_libro");
                $consulta->execute();
                $numero_paginas = 9;
                $inicio = ($numero_pagina - 1) * $numero_paginas;
                $total_paginas = round($consulta->rowCount() / $numero_paginas);
                $consultas = $this->db->con->prepare("SELECT * FROM mostrar_libro LIMIT :inicio, :final");
                $consultas->bindParam(":inicio", $inicio, PDO::PARAM_INT);
                $consultas->bindParam(":final", $numero_paginas, PDO::PARAM_INT);
                $consultas->execute();
                while($fila = $consultas->fetch())
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

        function search($data)
        {
            $created = array();
            try
            {
                $this->db->open_connection();
                 $resultado = $this->db->con->prepare("SELECT * FROM mostrar_libro WHERE nombre like CONCAT('%', :palabra,'%')");
                $PALABRA=$data['texto'];
                $resultado->bindParam(":palabra",$PALABRA, PDO::PARAM_STR);
                $resultado->execute();
                //$consulta = $this->db->con->prepare("CALL search(:texto)");
                //$consulta->execute(['texto' => $data['texto']]);
                while($fila = $resultado->fetch()){
                    array_push($created, ['id_libro' => $fila['id_libro'], 'nombre' => $fila['nombre'], 'color' => $fila['color'], 'estante' => $fila['estante'], 'numero_paginas' => $fila['numero_paginas'], 'descripcion' => $fila['descripcion'], 'estado' => $fila['estado'], 'precio' => $fila['precio'], 'autor' => $fila['autor'], 'editorial' => $fila['editorial'], 'imagen' => $fila['imagen']]);
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


        
    }

?>