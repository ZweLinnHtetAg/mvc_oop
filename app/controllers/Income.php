<?php

class Income extends Controller{
    private $db;

    function __construct()
    {
        $this->db = new Database;
    }
    public function index()
    {
        $incomes = $this->db->readAll('incomes');
        $data = [
            'title' => "Income",
            'incomes' => $incomes
        ];
        $this->view('incomes/index',$data);
    }
}


?>