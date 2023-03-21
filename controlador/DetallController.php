<?php
require "modelo/DetallModel.php";
class DetallController{
    public function listado(){
        $carrusel = new Detall();
        $datos = $carrusel->buscar("1");
        require "vista/admin/detall/detall.php";
    }
}

