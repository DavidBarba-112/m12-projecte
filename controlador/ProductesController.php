<?php
require "modelo/ProductesModel.php";
class ProductesController{
    public function listado(){
        $carrusel = new Producte();
        $datos = $carrusel->buscar("1");
        require "vista/admin/producte/productes.php";
    }
}

