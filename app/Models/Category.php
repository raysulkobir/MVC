<?php
class Category extends RModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $sql = "SELECT * FROM classes";
        $query = $this->db->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
}
