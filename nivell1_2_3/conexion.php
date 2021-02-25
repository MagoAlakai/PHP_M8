<?php
    class Conexion{
        private $servidor = 'localhost';
        private $usuario = 'root';
        private $password = "";
        private $bd = 'php_m8';
        private $port = '3307';

        public function conectar(){
            $conectar = mysqli_connect( $this->servidor, 
                                        $this->usuario,
                                        $this->password, 
                                        $this->bd,
                                        $this->port);
            return $conectar;
        }
    }

?>