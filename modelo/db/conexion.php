<?php 
    /**
    * Conexion a base de datos
    */
    class conexion
    {
        const HOST = "localhost";
        const BD = "psicologa";
        const USER = "root";
        const PSW = "";

        function getConexion(){

            $conexion = mysqli_connect(self::HOST, self::USER, self::PSW, self::BD);            
            
            if (!$conexion) {
                echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
                echo "Err No de depuración: " . mysqli_connect_errno() . PHP_EOL;
                echo "Error de depuración: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }

            /*echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
            echo "Información del host: " . mysqli_get_host_info($connection) . PHP_EOL;*/

            return $conexion;
        }    

        /**
        * Consultas DML 
        * (manipulacion de datos)
        */
        function consulta($sql, $tabla){
            $conexion = $this->getConexion();
            $respuesta = "";
            if ($stmt = mysqli_prepare($conexion, "SELECT id_paciente FROM paciente where nombre=? OR email=? AND contra=?")) {

                 mysqli_stmt_bind_param($stmt, "sss", $sql[0], $sql[0], $sql[1]);
                 mysqli_stmt_execute($stmt);
                 mysqli_stmt_bind_result($stmt, $id_paciente);
                                  
                while (mysqli_stmt_fetch($stmt)) {
                    $respuesta = $id_paciente;
                }

                 //var_dump(mysqli_stmt_fetch($stmt));
                mysqli_stmt_close($stmt);

                return $respuesta;
            }

            mysqli_close($conexion);
            
            return false;
        }

        /**        
        * (manipulacion de datos)
        */
        function consultaCampo($consulta = "*", $sql, $tabla, $clausulas){
            $conexion = $this->getConexion();
            $respuesta = "";
            if ($stmt = mysqli_prepare($conexion, "SELECT $consulta FROM $tabla where $clausulas")) {

                 mysqli_stmt_bind_param($stmt, $this->determinaTipoCampo($sql), $sql);
                 mysqli_stmt_execute($stmt);
                 mysqli_stmt_bind_result($stmt, $col);
                                  
                while (mysqli_stmt_fetch($stmt)) {
                    $respuesta = $col;
                }

                mysqli_stmt_close($stmt);
                
                return $respuesta;
            }

            mysqli_close($conexion);
            
            return false;
        }

        function consultaCampos($consulta, $sql, $tabla, $clausulas = ""){
            $valores = "";
            $campos = explode(",", $consulta);
            for ($i=0; $i < count($campos); $i++) { 
                $conexion = $this->getConexion();
                if ($stmt = mysqli_prepare($conexion, "SELECT $campos[$i] FROM $tabla where $clausulas")) {
                    mysqli_stmt_bind_param($stmt, $this->determinaTipoCampo($sql), $sql);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_bind_result($stmt, $col);                                      
                    while (mysqli_stmt_fetch($stmt)) {
                        $valores .= $col;
                    }
                    mysqli_stmt_close($stmt);                                    
                }
                mysqli_close($conexion);
            }
            //$conexion
            return $valores;
        }

        function determinaTipoCampo($campo){
            if (gettype($campo) !== "NULL") {
                switch ($campo) {
                    case 'integer':
                        return 'i';
                        break;
                    case 'double':
                        return 'd';
                        break;
                    case 'object':
                        return 'b';
                        break;
                    case 'string':
                        return 's';
                        break;
                    case 'blob':
                        return 'b';
                        break;
                    default:
                        return 's';
                        break;
                }
            }
            return "";
        }

        function seleccion($sql){
            $conexion = $this->getConexion();
            $consulta = $conexion->prepare("select count(id_paciente) from pacientes where nombre=".$sql);
            
            return $stmt;
        }

        //function 

    }

    /*$con = new conexion();
    $test = $con->getConexion();*/

 ?>