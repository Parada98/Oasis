<?php

    class User
    {
        
        private $id_cliente;
        private $nombre;
        private $apellido;
        private $rfc;
        private $credito;

        
        function __construct($id_cliente = null, $nombre = null, $apellido = null, $rfc = null, $credito = null)
        {        
            $this->id_cliente = $id_cliente;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->rfc = $rfc;
            $this->credito = $credito;
        }

        // public function setIdCredito($id_cliente){$this->id_cliente = $id_cliente;}
        // public function getIdCredito(){return isset($this->id_cliente) ? $this->id_cliente : null;}

        // public function setNombre($nombre){$this->nombre = $nombre;}
        // public function getNombre(){return isset($this->nombre) ? $this->nombre : null;}

        // public function setApellido($apellido){$this->apellido = $apellido;}
        // public function getApellido(){return isset($this->apellido) ? $this->apellido : null;}
        
        // public function setRfc($rfc){$this->rfc = $rfc;}
        // public function getRfc(){return isset($this->rfc) ? $this->rfc : null;}

        // public function setCredito($credito){$this->credito = $credito;}
        // public function getCredito(){return isset($this->credito) ? $this->credito : null;}

        public function toString(){
            return ['id_cliente' => $this->id_cliente, 'nombre' => $this->nombre, 'apellido' => $this->apellido, 'rfc' => $this->rfc, 'credito' => $this->credito];
        }
        
    }

?>