<?php 
    class Crud extends Conexion {
        public function mostrarDatos() {
            try {
                $conexion = parent::Conectar();
                $sql = "SELECT * FROM t_personas";
                $respuesta = mysqli_query($conexion, $sql);
                return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
    }
?>