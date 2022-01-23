<?php

class config
{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "e-commerce";
    private $connection;
    public function __construct()
    {
        $this->connection = new mysqli($this->hostname, $this->username, $this->password, $this->database);
        // Check Conection is Done 
        /*  if ($this->connection->connect_error) {
            die('Connection Failed' . $this->connection->connection_error);
        } else {
            echo "Connection IS Successfully";
        } */
    }
    public function runDML(string $query): bool
    {
        $result = $this->connection->query($query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function runDQL(string $query)
    {
        $result = $this->connection->query($query);
        if($result->num_rows > 0){
            return $result;
        }else {
            return [];
        }
    }
}

/* $test = new config; */