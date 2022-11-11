<?php

//Frontal control

session_start();

if ((!isset($_SESSION['username'])) & ($_REQUEST['action'] != 'indexCreateLogin')){   
        require_once 'controller/user_controller.php';
        $controller = new UserController();
        $controller -> indexLogin();
    }

if (!isset($_REQUEST['controller']) & isset($_SESSION['username'])){
        require_once 'controller/company_controller.php';
        $controller = new CompanyController();
        $controller -> indexCompany();
    }
    else {
        $controller=$_REQUEST['controller'];
        $action=$_REQUEST['action'];
        require_once 'controller/'.$controller.'_controller.php';
        $controller = ucwords($controller).'Controller';
        $controller = new $controller;
        call_user_func(array($controller, $action));    
    }


