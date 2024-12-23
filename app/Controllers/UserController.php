<?php

require_once '../app/Models/User.php';
require_once '../core/Controller.php';


class UserController extends Controller
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = new User();

    }
    public function index()
    {
        $this->view('users/index');
    }
    
    public function register()
    {
        $this->view('users/register');
    }


    public function handleRegister()
    {   
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $this->userModel->register($username,$email, $password);
        header('Location: /posts/post');
    }
    public function login()
    {
        $this->view('users/login');
    }
    public function handleLogin()
    {   
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        $this->userModel->login($email, $password);
        header('Location: /posts/post');
    }



}