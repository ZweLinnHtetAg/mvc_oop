<?php


class Auth extends Controller {
    private $db;

    function __construct()
    {
        $this->db = new Database;
    }


    function login()
    {
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $email = $_POST['email'];
            $password = base64_encode($_POST['password']);

            $user = $this->db->loginCheck($email,$password);

            if($user)
            {
                header("location:".URLROOT."/category/index");
            }

            else {
                header("location:".URLROOT."/page/index");
            }

        }

        else header("location:".URLROOT.'/page/index');
    }

    function register()
    {
        if($_SERVER['REQUEST_METHOD']=='POST')
        {

            $validation = new UserValidator($_POST);
            $data = $validation->validateForm();

            if($data)
            {
                $this->view('pages/register',$data);
            }

            else{
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = base64_encode($_POST['password']);
                $token = bin2hex(random_bytes(50));
                $user = $this->model('UserModel');
                $user->setName($name);
                $user->setEmail($email);
                $user->setPassword($password);
                $user->setToken($token);
                $user->setProfileImage("profile.jpg");
                $user->setIsConfirmed(0);
                $user->setIsActive(0);
                $user->setIsLogin(0);
                $user->setDate(date("Y-m-d"));
                $this->db->create("users",$user->toArray());
            }

            

            header("location:".URLROOT.'/page/index');

        }
        else 
        {
            header("location:".URLROOT.'/page/register');
        }
    }
}


?>