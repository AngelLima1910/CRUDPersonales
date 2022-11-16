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
        public function insertarDatos($data){
            $c = new Conexion();
            $conexion = $c->Conectar();
            echo $sql = "INSERT INTO t_personas (nombre, apellidoPaterno,apellidoMaterno,fechaNac,sexo) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]')";
            return mysqli_query($conexion, $sql);
        }
        public function calcularEdad($fechaNac){
            $convierteaEdad = new DateTime($fechaNac);
            $fechaActual = new DateTime();
            $fechaEdad = $fechaActual->diff($convierteaEdad);
            $edad = $fechaEdad->y;
            return $edad;
        }
        public function eliminar($id){
            $c = new Conexion();
            $conexion = $c->Conectar();
            $sql = "DELETE FROM t_personas WHERE id ='$id'";
            return mysqli_query($conexion, $sql);  
        }
        public function actualizarDatos($data) {
            $c = new Conexion();
            $conexion = $c->Conectar();
            echo $sql = "UPDATE t_personas set nombre = '$data[0]', apellidoPaterno = '$data[1]', apellidoMaterno = '$data[2]', fechaNac = '$data[3]', sexo = '$data[4]' WHERE id = '$data[5]'";
            return $result = mysqli_query($conexion, $sql);
        }
    }
?>