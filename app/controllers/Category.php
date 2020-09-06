<?php


class Category extends Controller{

    private $db;
    function __construct()
    {
        $this->db = new Database;
    }

    public function index(){

        $categories = $this->db->readAll('categories');        
        $data = [
            'title' => 'Category',
            'categories' => $categories
        ];


        $this->view('categories/index',$data);
    }

}

?>