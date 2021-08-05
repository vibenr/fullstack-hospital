<?php
require_once('config/connection.php');
session_start();
$_SESSION['user']['loggedin'] = false;

if (isset($_POST['login']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['user']['loggedin'] = true;
        $_SESSION['user']['email'] = $row['email'];
        $_SESSION['user']['username'] = $row['username'];
        
        header("Location: ../PUBLIC/Pages/patient-form.php");
        
    } else {
        echo "LOGIN FAILED";
    }
}
?>
