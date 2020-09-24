<?php
class Page extends Controller
{
 private $db;
 public function __construct()
 {
  $this->db = new Database;
 }

 public function index()
 {
  
   $this->view('pages/login');
   
}

public function register()
{
   $this->view('pages/register');
}

 public function create($id)
 {
  echo $id;
 }

 public function about()
 {
  $data = [
   'title' => 'About',
  ];

  $this->view('pages/about', $data);

 }
 
}
