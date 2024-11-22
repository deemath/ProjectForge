<?php
// db_connection.php

include '../config.php';
include CONSTANTS;

class Database {
    private $host;
    private $user;
    private $password;
    private $database;
    public $connection;

    // Constructor to initialize database connection parameters
    public function __construct($host, $user, $password, $database) {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
        $this->connect();
    }

    // // Method to establish a database connection
    private function connect() {
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->database);
        
        // Check connection
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    // Method to close the database connection
    public function close() {
        if ($this->connection) {
            $this->connection->close();
        }
    }
}


///stablishing db connection

try {
    $db = new Database($dbhost, $dbuser, $dbpwd, $dbname);
    $conn = $db->connection;
    // echo "Connected successfully";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}


// echo "Connected successfully";

?>