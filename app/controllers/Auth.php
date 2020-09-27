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
                // change is_login to 1 
                $this->db->setLogin($user['id']);
                set('auth_id',$user['id']);
                redirect("/category/index");
            }
            else {
                redirect("/page/index");
            }
        }
        else redirect('/page/index');
    }

    function logout($id)
    {
        $this->db->unsetLogin($id);

        redirect("/page/login");
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
                $success = $this->db->create("users",$user->toArray());
                
                $token = URLROOT.'/auth/verify/'.$token;
                if($success)
                {
                    $mail = new Mail();
                    $mail->verifyMail($email,$name,$token);
                    setMessage("Please Check your mail inbox !");
                }
            }
            redirect('/page/index');
        }
        else 
        {
            redirect("/page/register");
        }
    }

    function verify($token)
    {
        $user = $this->db->columnFilter('users','token',$token);
        $id =  $user[0]['id'];
        $this->db->verify($id);
        setMessage("Verification Success !");
        redirect('/page/index');
    }
}


?>