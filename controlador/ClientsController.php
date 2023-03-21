<?php
require "modelo/ClientsModel.php";
class ClientsController{
    public function listado(){
        $carrusel = new Client();
        $datos = $carrusel->buscar("1");
        require "vista/admin/clients/clients.php";
    }
}

