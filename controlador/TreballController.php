<?php
require "modelo/TreballModel.php";
class TreballController{
    public function listado(){
        $carrusel = new Treball();
        $datos = $carrusel->buscar("1");
        require "vista/admin/treball/treballs.php";
    }
}

