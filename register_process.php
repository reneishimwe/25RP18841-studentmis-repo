<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    try {
        $sql = "INSERT INTO tbl_users (user_name, user_email, user_password) 
                VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name, $email, $password]);
        
        echo "Registration successful! <a href='index.php'>Back to Dashboard</a>";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>