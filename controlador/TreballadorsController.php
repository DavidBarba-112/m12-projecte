<?php
require "modelo/TreballadorsModel.php";
class TreballadorsController{
    public function listado(){
        $carrusel = new Treballador();
        $datos = $carrusel->buscar("1");
        require "vista/admin/treballadors/treballadors.php";
    }

    public static function form_insertar(){
        require "vista/admin/treballadors/nuevo.php";

    }

    public static function insertar(){
        $_slug              =   $_REQUEST['txtslug'];
        $_descripcion       =   $_REQUEST['txtdecripcion'];
        $_urlfoto           =   $_FILES['urlfoto']['name'];
        $_orden             =   $_REQUEST['txtorden'];
        $_create             =   date("Y-m-d");
        $_update            =   date("Y-m-d");


        $dir_subida = 'public/img/treballadors/';
        $fichero_subido = $dir_subida . basename($_FILES['urlsfoto']['name']);

        move_upload_file($_FILES['urlfoto']['tmp_name'], $fichero_subido);

        $treballador      =   new Treballador();
        $data             =   "'".$_slug."','".$_descripcion."','".$_urlfoto."';'".$_orden."','".$_create.";".$_update;
        $accion           =   $treballador->insertar($data);

        if($accion)
            header('location:'.urlsite."?page=treballadors");
        else 
            header('location:'.urlsite."?page=treballadors&opcion=form_insertar&msg=No se pudo insertar");


    }
}

