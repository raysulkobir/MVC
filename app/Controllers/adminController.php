<?php
class adminController extends RController
{
    public function __construct()
    {
        parent::__construct();
        Session::checkSession();
    }

    public function index()
    {
        $this->load->view("inc/header");
        $this->load->view("admin/index");
        $this->load->view("inc/footer");
    }

    
     
}
