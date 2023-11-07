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
     


}
