<?php
require_once "config/db_connection.php";
class Book {
    private $conn;  
    private $table_name = "book";

    public function __construct() {
        $this->conn = new BDConnection();
        $this->conn = $this->conn->getConnection(); 
    }

    public function getAllBooks() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }    
    public function countBooks() {
        $query = "SELECT COUNT(*) as total FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['total'];
        
    }
    
}