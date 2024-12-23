
<?php

require_once '../config/database.php';
class User
{
    private $conn;
    private $table = 'usersdb';


public function __construct()
{
    $database = new Database();
    $this->conn = $database->getConnection();
}
public function all()
{
    $query = "SELECT * FROM " . $this->table;
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
public function register($username,$email, $password)
{   
    session_start();
    $query = "INSERT INTO " . $this->table . " (username, email, password) VALUES (:username, :email, :password)";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
   
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    return $stmt->execute();
    
}
public function login($email, $password)
{   
    $query = "SELECT * FROM " . $this->table . " WHERE email = :email LIMIT 1";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($password == $row['password']) {
            session_start();
            
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            header('Location: /posts/post');
            exit;
        } else {
            exit("Parol  notogri");
        }
    }
    else{
        exit("Email notogri");
    }
}



}