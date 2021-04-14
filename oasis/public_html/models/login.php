<?php


    class Login_model extends Model
    {
        
        
        function __construct()
        {
            parent::__construct();
        }
        
        public function auth($data)
        {
            $created = null;
            try
            {
                $this->db->open_connection();
                $consulta = $this->db->con->prepare("SELECT * FROM Usuario WHERE usuario = :usuario");            
			    $consulta->execute(['usuario' => $data['usuario']]);
			    if ($consulta->rowCount() == 0)
                    $created = false;
                else
                {
                    while ($fila = $consulta->fetch())
                    { 
                        if (password_verify($data['contrasena'], $fila['contrasena']))
                        {
                            session_start();
                            $_SESSION['usuario'] = $_POST['usuario'];					
                            $_SESSION['id_usuario'] = $fila['id_usuario'];					
                            $created = true;
                        }
                    }
                }
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
        
    }

?>