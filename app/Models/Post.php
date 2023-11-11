<?php
class Post extends RModel
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

    public function show($tableName, $id)
    {
        $sql = "SELECT * FROM $tableName WHERE id = :id";
        $data = array(":id" => $id);
        return $this->db->select($sql, $data);
    }

    
}
