<?php 
    class Conexion {
        public function Conectar() {
            try {
                return mysqli_connect(
                    'localhost',
                    'angel',
                    'Urbandfiv3',
                    'personales'
                );
            } catch(\Throwable $th) {
                return $th->getMessage();
            }
        }
    }
?>