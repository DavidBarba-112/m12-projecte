<?php 
class Conexion{
    public $conexion;
    public function conectar(){
        try{
            $dsn = "mysql:host=localhost;dbname=".DB_NAME;
            $opciones = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            $this->conexion = new PDO($dsn,DB_USER,DB_PASS);
            //echo "exito";
            return $this->conexion;

        }catch(PDOException $e){
            echo $e->getMessage();

        }
    }
    public function desconectar(){
        $this->conexion =null;
    }
}