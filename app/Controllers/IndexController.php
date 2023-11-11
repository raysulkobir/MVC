<?php
class IndexController extends RController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function home()
    {
        $data = array();
        $tableName = "post";
        $categoryModel = $this->load->model('Post');
        $data['posts'] = $categoryModel->index($tableName);

        $this->load->view("inc/header");
        $this->load->view("home", $data);
        $this->load->view("inc/footer");
    }
     
    public function postDetails($id){
        $data = array();
        $tableName = "post";
        $categories = "categories";
        $categoryModel = $this->load->model('Post');
        $data['post'] = $categoryModel->show($tableName, $categories, $id);

        $this->load->view("inc/header");
        $this->load->view("postDetails", $data);
        $this->load->view("inc/footer");
    }

    public function postByCategory($id){
        $data = array();
        $tableName = "post";
        $categories = "categories";
        $categoryModel = $this->load->model('Post');
        $data['posts'] = $categoryModel->postByCategory($tableName, $categories, $id);
        $this->load->view("inc/header");
        $this->load->view("postByCategory", $data);
        $this->load->view("inc/footer");
    }

    public function search(){
        @$keyword = $_REQUEST['keyword'];
 
        $data = array();
        $tableName = "post";
        $categoryModel = $this->load->model('Post');
        $data['posts'] = $categoryModel->getPostSearch($tableName, $keyword);

        $this->load->view("inc/header");
        $this->load->view("home", $data);
        $this->load->view("inc/footer");
    }


}
