<?php
class IndexController extends RController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function home()
    {
        $this->load->view("home");
    }
    public function category()
    {
        $data = array();
        $tableName = "categories";
        $categoryModel = $this->load->model('Category');
        $data['categories'] = $categoryModel->index($tableName);
        $this->load->view("category", $data);
    }
    public function categoryBYId()
    {
        $data = array();
        $tableName = "categories";
        $category_id = 1;
        $categoryModel = $this->load->model('Category');
        $data['category'] = $categoryModel->categoryBYId($tableName, $category_id);
        $this->load->view("categoryId", $data);
    }
    public function createCategory()
    {
        $this->load->view("create", "category");
    }

    public function insertCategory(){
        $data = [
            "name" => $_POST['name']
        ];

        $tableName = "categories";
        $categoryModel = $this->load->model('Category');
        $data['category'] = $categoryModel->insertCategory($tableName, $data);
    }
}
