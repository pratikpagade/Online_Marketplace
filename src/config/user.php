<?php 
class User {
    private $conn;

    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;
    public $email;
    public $home_address;
    public $home_phone;
    public $cell_phone;
    public $role;

    public function __construct($db){
        $this->conn = $db;
    }

    public function read(){
        $query = "SELECT * from project.login";
        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }

    public function search($q){
        $query = "select * from project.login where CONCAT(first_name , last_name,email) like '%".$q."%';";
        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }

    public function readOne($username,$password){
        $query = "SELECT * from project.login where name=:username and password=:password";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":username",$username);
        $stmt->bindParam(":password",$password);

        $stmt->execute();

        return $stmt->rowcount();
    }

    public function insert($username,$password,$role,$first_name,$last_name,$email,$home_address,$home_phone,$cell_phone){
        try{
        $insert = "insert into php.USERS (username,password,role,first_name,last_name,email,home_address,home_phone,cell_phone) values (:username,:password,:role,:first_name,:last_name,:email,:home_address,:home_phone,:cell_phone)";
        $stmt = $this->conn->prepare($insert);
        $stmt->bindParam(":username",$username);
        $stmt->bindParam(":password",$password);

        $stmt->bindParam(":role",$role);
        $stmt->bindParam(":first_name",$first_name);
        $stmt->bindParam(":last_name",$last_name);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":home_address",$home_address);
        $stmt->bindParam(":home_phone",$home_phone);
        $stmt->bindParam(":cell_phone",$cell_phone);

        $stmt->execute();
        
        }catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }


    }

    public function insert1($username,$password,$role,$first_name,$last_name,$email,$home_address,$home_phone,$cell_phone){
        try{
        $insert = "insert into php.Users (username,password,role) values ('a','f','g')";
        $stmt = $this->conn->prepare($insert);

        $stmt->execute();
        echo 'Successfully added to database';
        }catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }


    }
}

?>