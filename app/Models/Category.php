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

    public function show($tableName, $id)
    {
        $sql = "SELECT * FROM $tableName WHERE id = :id";
        $data = array(":id" => $id);
        return $this->db->select($sql, $data);
    }

    public function store($tableName, $data)
    {
        return $this->db->insert($tableName, $data);
    }

    public function edit($tableName, $id){
        $sql = "SELECT * FROM $tableName WHERE id = :id";
        $data = array(":id" => $id);
        return $this->db->select($sql, $data);
    }
    public function update($tableName, $id, $data)
    {
        return $this->db->update($tableName, $id, $data);
    }

    public function delete($tableName, $id)
    {
        return $this->db->delete($tableName, $id);
    }
}
