<?php

require_once 'model/user.php';

class UserController
{
    private $model;
    private $username;
    public function __construct()
    {
        $this->model = new User();
    }
    public function login()
    {
        session_start();
        $user = new User();
        $user->username=$_REQUEST['username'];
        $user->password=$_REQUEST['password'];
        $response = $user->search();
        if ($response > 0) {
            $_SESSION['username'] = $user->username;
            header("Location: index.php");
        }else{
            header("Location: index.php");
        }
    }
    public function logout()
    {
        session_destroy();
        header('Location: index.php');
    }

    public function indexLogin()
    {
        require_once 'view/login.php';
    }
    public function indexCreateLogin()
    {
        require_once 'view/create_user.php';
    }
    public function createUser()
    {
        $user = new User();
        $user->username=$_REQUEST['username'];
        $user->password=$_REQUEST['password'];
        $user->email=$_REQUEST['email'];
        $user->name=$_REQUEST['name'];
        $user->lastname=$_REQUEST['lastname'];
        $user->adress=$_REQUEST['adress'];
        $user->create();
        header('Location: index.php');
    }
}

?>