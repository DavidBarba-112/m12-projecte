<?php
require "modelo/PresupostModel.php";
class PresupostController{
    public function listado(){
        $carrusel = new Presupost();
        $datos = $carrusel->buscar("1");
        require "vista/admin/presupost/presupost.php";
    }
}

