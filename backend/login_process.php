<?php
session_start(); // بدء الجلسة
require_once '../database/db.php'; // الاتصال بقاعدة البيانات

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_submit'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // التحقق من الحقول
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "يرجى إدخال البريد الإلكتروني وكلمة المرور.";
        header("Location: ../login.php");
        exit();
    }

    try {
        // البحث عن المستخدم
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch();  
        
        // التحقق من كلمة المرور
        if ($user && password_verify($password, $user['password'])) {
            // حفظ بيانات الجلسة
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];

            header("Location: ../home.php");
            exit();
        } else {
            $_SESSION['error'] = "البريد الإلكتروني أو كلمة المرور غير صحيحة.";
            header("Location: ../login.php");
            exit();
        }

    } catch (PDOException $e) {
        $_SESSION['error'] = "خطأ في الاتصال: " . $e->getMessage();
        header("Location: ../login.php");
        exit();
    }
} else {
    $_SESSION['error'] = "طلب غير مسموح به.";
    header("Location: ../login.php");
    exit();
}