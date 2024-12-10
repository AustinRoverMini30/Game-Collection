<?php

class DataBaseProcessor
{
    private $dbname;
    private $username;
    private $password;
    private $conn;

    public function __construct($dbname, $username, $password)
    {
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;

        $this->connect_to_database();
    }

    function connect_to_database()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost; dbname=$this->dbname;charset=utf8", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit;
        }
    }

    public function getPdo()
    {
        return $this->conn;
    }

    public function sendRequest($request)
    {
        $conn = $this->conn->sendRequest($request);
    }
}