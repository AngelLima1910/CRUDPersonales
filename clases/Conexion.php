<?php 
    class Conexion {
        public function Conectar() {
            return mysqli_connect(
                'localhost',
                'yamilet',
                '1234',
                'personales',
                '3306'
            );
        }
    }

 
?>