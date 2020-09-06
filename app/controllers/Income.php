<?php

class Income extends Controller{
    private $db;

    function __construct()
    {
        $db = new Database;
    }
    public function index()
    {
        $data = [
            'title' => "This is income page"
        ];
        $this->view('incomes/index',$data);
    }
}


?>