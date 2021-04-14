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
                print 'f';
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