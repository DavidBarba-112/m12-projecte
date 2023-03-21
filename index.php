<?php 
require "config.php";
$page = "index";
if(isset($_GET['page']))
    $page = $_GET['page'];
switch($page){
    case 'login':
        require "controlador/LoginController.php";
        LoginController::index();
        break;

    case 'loginauth':
        require "controlador/LoginController.php";
        LoginController::login();
        break;


    case 'logout':
        require "controlador/LoginController.php";
        LoginController::logout();
        break;

    case 'admin': 
        require "vista/admin/welcome.php";
        break;

    case 'treballadors':
        require "controlador/TreballadorsController.php";
        if(isset($_GET['opcion'])):
            $metodo      = $_GET['opcion'];
            if(method_exists('TreballadorsController',$metodo)):
                TreballadorsController::{$metodo}();
            endif;
        else:
            TreballadorsController::listado();
        endif;
        break;

    case 'clients':
        require "controlador/ClientsController.php";
        if(isset($_GET['opcion'])):
            $metodo      = $_GET['opcion'];
            if(method_exists('ClientsController',$metodo)):
                ClientsController::{$metodo}();
            endif;
        else:
            ClientsController::listado();
        endif;
        break;

    case 'rols':
        require "controlador/RolsController.php";
        if(isset($_GET['opcion'])):
            $metodo      = $_GET['opcion'];
            if(method_exists('RolsController',$metodo)):
                RolsController::{$metodo}();
            endif;
        else:
            RolsController::listado();
        endif;
        break;

    case 'treball':
        require "controlador/TreballController.php";
        if(isset($_GET['opcion'])):
            $metodo      = $_GET['opcion'];
            if(method_exists('TreballController',$metodo)):
                TreballController::{$metodo}();
            endif;
        else:
            TreballController::listado();
        endif;
        break;

    case 'presupost':
        require "controlador/PresupostController.php";
        if(isset($_GET['opcion'])):
            $metodo      = $_GET['opcion'];
            if(method_exists('PresupostController',$metodo)):
                PresupostController::{$metodo}();
            endif;
        else:
            PresupostController::listado();
        endif;
        break;

    case 'producte':
        require "controlador/ProductesController.php";
        if(isset($_GET['opcion'])):
            $metodo      = $_GET['opcion'];
            if(method_exists('ProductesController',$metodo)):
                ProductesController::{$metodo}();
            endif;
        else:
            ProductesController::listado();
        endif;
        break;
    
    case 'detall':
        require "controlador/DetallController.php";
        if(isset($_GET['opcion'])):
            $metodo      = $_GET['opcion'];
            if(method_exists('DetallController',$metodo)):
                DetallController::{$metodo}();
            endif;
        else:
            DetallController::listado();
        endif;
        break;
       
    default : echo "<a href='".urlsite."?page=login'>LOGIN</a>";break;
}