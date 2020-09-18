<?php

class Expense extends Controller{
    private $db;

    function __construct()
    {
        $this->db = new Database;
    }

    public function index()
    {
        $expenses = $this->db->readAll('expenses');
        $data = [
            "title" => "Expense",
            "expenses"=> $expenses
        ];
        $this->view('expenses/index',$data);
    }

    public function create()
    {
        $categories = $this->db->readAll('categories');
        $data = [
            'title' => 'New Expense',
            'categories' => $categories
        ];
        $this->view('expenses/create',$data);
    }

    public function store()
    {
        if($_SERVER['REQUEST_METHOD']== "POST")
        {
            $amount = $_POST['amount'];
            $qty = $_POST['qty'];
            $category_id = $_POST['category_id'];
            $user_id = 1;
            $date = $_POST['date'];

            $expense = $this->model('ExpenseModel');

            $expense->setAmount($amount);
            $expense->setQty($qty);
            $expense->setCategory($category_id);
            $expense->setUser($user_id);
            $expense->setDate($date);

            $this->db->create('expenses',$expense->toArray());

            header("location:".URLROOT.'/expense/index');
        }
        else{
            header("location:".URLROOT.'/expense/index');
        }
    }

    public function delete($id)
    {
        $this->db->delete('expenses',$id);
        header("location:".URLROOT.'/expense/index');
    }
}



?>