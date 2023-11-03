<?php
    class Index extends RController{
        public function __construct()
        {
           parent::__construct();
        }
        public function home(){
            $this->load->view("home");
        }
        public function category(){
            $data = array();

            $categoryModel = $this->load->model('Category');
            $data['categories'] =$categoryModel->index();
            $this->load->view("category", $data);
        }
    }