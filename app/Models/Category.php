<?php
class Category extends RModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($tableName)
    {
        $sql = "SELECT * FROM $tableName";
        return $this->db->select($sql);
    }

    public function categoryBYId($tableName, $id)
    {
        $sql = "SELECT * FROM $tableName WHERE id = :id";
        $data = array(":id" => $id);
        return $this->db->select($sql, $data);
    }

    public function insertCategory($tableName, $data){
        return $this->db->insert($tableName, $data);
    }
}
