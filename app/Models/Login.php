<?php
class Login extends RModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function userControl($tableName, $name, $password)
    {
        $sql = "SELECT * FROM $tableName WHERE name = :name AND password = :password";
        $data = array(":name" => $name, ":password" => $password);

        return $this->db->affectedRows($sql, $data);
    }

    public function getUserData($tableName, $name){
        $sql = "SELECT * FROM $tableName WHERE name = :name";
        $data = array(":name" => $name);
        return $this->db->select($sql, $data);
    }
}
