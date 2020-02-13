<?php
class Database{
 
    private $host = "linkedin.cx2nnmpqznns.us-east-1.rds.amazonaws.com:3306";
    private $db_name = "project";
    private $username = "linkedin_user";
    private $password = "linkedin_pass";
    public $conn;
 
    public function getConnection(){
 
        if($this->conn == null){
		try{
		    $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
		    $this->conn->exec("set names utf8");
		}catch(PDOException $exception){
		    echo "Connection error: " . $exception->getMessage();
		}
 	}
        return $this->conn;
    }
}
?>
