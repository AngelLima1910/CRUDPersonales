<?php 
    class Conexion {
        public function Conectar() {
            return mysqli_connect(
                'localhost',
                'leslie',
                '12345678',
                'personales',
                '3306'
            );
        }
    }

 
?>