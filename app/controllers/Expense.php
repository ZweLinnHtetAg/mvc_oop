<?php

class Expense extends Controller{
    private $db;

    function __construct()
    {
        $db = new Database;
    }

    public function index()
    {
        $data = [
            "title" => "This is expense page"
        ];
        $this->view('expenses/index',$data);
    }
}



?>