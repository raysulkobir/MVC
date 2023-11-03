<?php

class Database extends PDO
{
    public function __construct()
    {
        try {
            $dsn = "mysql:host=localhost;dbname=g_school";
            $user = "root";
            $pass = "";

            parent::__construct($dsn, $user, $pass);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
}
