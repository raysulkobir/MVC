<?php
class loginController extends RController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        Session::init();
        if(Session::get("login") == true){
            header("Location: " . BASE_URL . "/admin/index");
        }
        $this->load->view("inc/header");
        $this->load->view("admin/login");
        $this->load->view("inc/footer");
    }

    public function loginAuth(){
        $tableName = "user";
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $password = isset($_POST['password']) ? md5($_POST['password']) : null;

        $loginModel = $this->load->model('Login');
        $count = $loginModel->userControl($tableName, $name, $password);

        if ($count > 0) {
            $result = $loginModel->getUserData($tableName, $name, $password);
            Session::init();
            Session::set("login", true);
            Session::set("id", $result[0]['id']);
            Session::set("name", $result[0]['name']);
            header("Location: " . BASE_URL. "/admin/index");
        } else {
            header("Location: " . BASE_URL . "/login/index");
        }
    }

    public function logout(){
        Session::init();
        Session::destroy();
        header("Location: " . BASE_URL . "/login/index");
    }
     
}
