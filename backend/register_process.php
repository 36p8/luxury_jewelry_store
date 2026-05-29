<?php
session_start();
require_once '../database/db.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $_SESSION['error'] = "Passwords do not match!";
        header("Location: ../register.php");
        exit();
    }

    try {
       
        $checkEmail = $db->prepare("SELECT id FROM users WHERE email = ? OR username = ?");
        $checkEmail->execute([$email, $username]);
        
        if ($checkEmail->rowCount() > 0) {
            $_SESSION['error'] = "Username or Email already exists!";
            header("Location: ../register.php");
            exit();
        }

        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        if ($stmt->execute([$username, $email, $hashed_password])) {
            $_SESSION['success'] = "Registration successful! Please login.";
            header("Location: ../login.php");
            exit();
        }

    } catch (PDOException $e) {
        $_SESSION['error'] = "Something went wrong: " . $e->getMessage();
        header("Location: ../register.php");
        exit();
    }
}