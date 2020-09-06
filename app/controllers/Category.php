<?php


class Category extends Controller{

    private $db;
    function __construct()
    {
        $db = new Database;
    }

    public function index(){
        $data = [
            'title' => 'This is category page'
        ];
        $this->view('categories/index',$data);
    }

}

?>