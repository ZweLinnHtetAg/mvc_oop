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

    public function create()
    {
        $data = [
            "title" => "New Category"
        ];

        $this->view('categories/new',$data);
    }

    public function store()
    {
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $type_id = $_POST['type_id'];

        echo $name;
        
        }

        else 
        {
            header('location:'.URLROOT.'/category/index');
        }

    }

}

?>