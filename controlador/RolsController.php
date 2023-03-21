<?php
require "modelo/RolsModel.php";
class RolsController{
    public function listado(){
        $carrusel = new Rols();
        $datos = $carrusel->buscar("1");
        require "vista/admin/rols/rols.php";
    }
}

