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
   redirect("page/login");
 }

public function register()
{
   $this->view('pages/register');
}

 public function login()
 {
   $this->view('pages/login'); 
 }

 public function dashboard()
 {
   $income = $this->db->incomeTransition();
   $expense = $this->db->expenseTransition();

   $data = [
    'income' => $income,
    'expense' => $expense
   ];
   $this->view('pages/dashboard',$data);
 }

 
}
