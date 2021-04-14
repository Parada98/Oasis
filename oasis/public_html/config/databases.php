<?php

    class Connection{
        
        private $host;
        private $dataname;
        private $user;
        private $password;
        public  $con;
        
        function __construct(){
            $this->host = constant('HOST');
            $this->dataname = constant('DB');
            $this->user = constant('USER');
            $this->password = constant('PASSWORD');
            // print "<p>construct</p>";
            
        }
        
        public function open_connection() {
            try
            {
                
                $this->con = new PDO("mysql:host=$this->host;dbname=$this->dataname;", $this->user, $this->password);
                $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $e)
            {
                print $e->getMessage();
            }
        }

        public function close_connection(){
            $this->con = null;
        }
    }

?>
