<?php
session_start();
require "modelo/login.php";
class LoginController{
    public function index(){
        if(isset($_SESSION['login']))
            header('location:'.urlsite);
        require "vista/front/formlogin.php";

    }
    public function login(){
        $_modelo = new Login();
        $_email = trim($_POST['txtemail']);
        $_passw = md5(trim($_POST['txtpassword']));

        $_resultado = $_modelo->login($_email,$_passw);
        if($_resultado){
            $_SESSION['login'] = $_email;
            header('location:'.urlsite."?page=admin");
        }else{
            header('location:'.urlsite."?msg=No coincides las credenciales");

        }


    }

    public function logout(){
        if(!isset($_SESSION['login']))
            header('location:'.urlsite);
        unset($_SESSION['login']);
        session_destroy();
        header('location:'.urlsite);

    }
}
