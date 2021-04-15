<?php


    class Editorial_model extends Model
    {        
         static $datos = 'd';
         function __construct()
         {
             parent::__construct();
        }
            
            static function create()
            {
                show();   
            }
        public function show()
        {
        }
        
        public function insert($data)
        {
            $created = null;
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("CALL insertar_editorial(:nombre, :direccion, :descripcion) ");
                $consulta->execute(['nombre' => $data['nombre'], 'direccion' => $data['direccion'], 'descripcion' => $data['descripcion']]);
                $created = true;
            }
            catch(PDOException $e)
            {
                print $e->getMessage();
                $created = false;
            }
            finally
            {
                $this->db->close_connection();
            }
            return $created;
        }
    }

?>