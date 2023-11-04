<?php
class RModel
{
    protected $db = array();

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=mvc";
        $user = "root";
        $pass = "";
        $this->db = new Database($dsn, $user, $pass);
    }
}
