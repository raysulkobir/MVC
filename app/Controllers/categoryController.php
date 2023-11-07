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
        $result = $categoryModel->store($tableName, $data);
        if ($result == 1) {
            $data['msg'] = "Data was successfully inserted.";
        } else {
            $data['msg'] = "Failed to insert data: ";
        }
        $this->load->view("category/create", $data);
    }
    public function edit()
    {
        $data = array();
        $tableName = "categories";
        $id = "2";
        $categoryModel = $this->load->model('Category');
        $data['category'] = $categoryModel->edit($tableName, $id);
        $this->load->view("category/edit", $data);
    }
    public function update()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $data = [
            "name" => $name,
        ];
        $id = "id =$id";
        $tableName = "categories";

        $categoryModel = $this->load->model('Category');
        $result = $categoryModel->update($tableName, $id, $data);
        if ($result == 1) {
            $data['msg'] = "Category Update successfully.";
        } else {
            $data['msg'] = "Failed to insert data: ";
        }
        $this->load->view("category/edit", $data);
    }
    public function delete()
    {
        $tableName = "categories";
        $id = "id=1";
        $categoryModel = $this->load->model('Category');
        $result = $categoryModel->delete($tableName, $id);
        if ($result == 1) {
            $data['msg'] = "Delete successfully.";
        } else {
            $data['msg'] = "Failed to insert data: ";
        }
        $this->load->view("category/index", $data);
    }
}
