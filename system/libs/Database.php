<?php
class Database extends PDO
{
    public function __construct($dsn, $user, $pass)
    {
        try {
            parent::__construct($dsn, $user, $pass);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }


    public function select($sql, $data = array(), $fetchSystem = PDO::FETCH_ASSOC)
    {
        $stmt = $this->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindParam($key, $value, PDO::PARAM_STR);
        }
        $stmt->execute();
        $result = $stmt->fetchAll($fetchSystem);
        return $result;
    }

    public function insert($tableName, $data = array()){
        $keys = implode(",", array_keys($data));
        $values = ":".implode(", :", array_keys($data));

        $sql = "INSERT INTO $tableName ($keys) VALUES ($values)";
        $stmt = $this->prepare($sql);

        foreach ($data as $key => $value) {
            $stmt->bindParam(":".$key, $value, PDO::PARAM_STR);
        }
        return $stmt->execute();
    }
}
