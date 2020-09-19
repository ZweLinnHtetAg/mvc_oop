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
        $types = $this->db->readAll('types');
        $data = [
            "title" => "New Category",
            "types" => $types
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

        $category = $this->model("CategoryModel");
        $category->setName($name);
        $category->setDescription($description);
        $category->setTypeId($type_id);

        $created = $this->db->create('categories',$category->toArray());

        header('location:'.URLROOT.'/category/index');
        
        }

        else 
        {
            header('location:'.URLROOT.'/category/index');
        }

    }

    public function delete($id)
    {
        $this->db->delete('categories',$id);

        header('location:'.URLROOT.'/category/index');
    }

    public function edit($id)
    {
        $category = $this->db->getById("categories",$id);
        $types = $this->db->readAll('types');
        $data =[
            "title" => "Edit Category",
            "types" => $types,
            "category" => $category
        ];
       $this->view('categories/edit',$data);
    }

    public function update($id)
    {
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $type_id = $_POST['type_id'];

            $category = $this->model("CategoryModel");
            $category->setId($id);
            $category->setName($name);
            $category->setDescription($description);
            $category->setTypeId($type_id);

            $this->db->update("categories",$id,$category->toArray());
            header('location:'.URLROOT.'/category/index');

        }

        else 
        {
            header('location:'.URLROOT.'/category/index');
        }
    }

}

?>