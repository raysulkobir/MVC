<?php
class categoryController extends RController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array();
        $tableName = "categories";
        $categoryModel = $this->load->model('Category');
        $data['categories'] = $categoryModel->index($tableName);
        $this->load->view("category/index", $data);
    }
    public function create()
    {
        $data = array();
        $tableName = "categories";
        $categoryModel = $this->load->model('Category');
        $data['categories'] = $categoryModel->index($tableName);
        $this->load->view("category/create", $data);
    }
    public function store()
    {
        $data = [
            "name" => $_POST['name']
        ];

        $tableName = "categories";
        $categoryModel = $this->load->model('Category');
        $result = $categoryModel->insertCategory($tableName, $data);
        if ($result == 1) {
            $data['msg'] = "Data was successfully inserted.";
        } else {
            $data['msg'] = "Failed to insert data: ";
        }
        $this->load->view("category/create", $data);
    }
    public function edit()
    {
    }
    public function update()
    {
    }
    public function delete()
    {
    }
}
