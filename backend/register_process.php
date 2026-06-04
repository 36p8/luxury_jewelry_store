<?php
session_start(); // بدء الجلسة
require_once '../database/db.php'; // الاتصال بقاعدة البيانات

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register_submit'])) {
    // جلب وتنظيف البيانات
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // التحقق من ملء الحقول
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $_SESSION['error'] = "برجاء ملء جميع الحقول الإلزامية.";
        header("Location: ../register.php");
        exit();
    }

    // التحقق من تطابق كلمات المرور
    if ($password !== $confirm_password) {
        $_SESSION['error'] = "كلمتا المرور غير متطابقتين.";
        header("Location: ../register.php");
        exit();
    }

    try {
        // التأكد من عدم تكرار الإيميل
        $checkEmail = $pdo->prepare("SELECT email FROM users WHERE email = :email");
        $checkEmail->execute([':email' => $email]);
        
        if ($checkEmail->rowCount() > 0) {
            $_SESSION['error'] = "هذا البريد الإلكتروني مسجل بالفعل.";
            header("Location: ../register.php");
            exit();
        }

        // تشفير كلمة المرور
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // إضافة المستخدم لقاعدة البيانات
        $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $pdo->prepare($sql);
        
        $result = $stmt->execute([
            ':username' => $username,
            ':email'    => $email,
            ':password' => $hashed_password
        ]);

        if ($result) {
            $_SESSION['success'] = "تم إنشاء الحساب بنجاح! يمكنك تسجيل الدخول الآن.";
            header("Location: ../login.php");
            exit();
        } else {
            $_SESSION['error'] = "حدث خطأ أثناء عملية التسجيل.";
            header("Location: ../register.php");
            exit();
        }

    } catch (PDOException $e) {
        $_SESSION['error'] = "خطأ في قاعدة البيانات: " . $e->getMessage();
        header("Location: ../register.php");
        exit();
    }
} else {
    $_SESSION['error'] = "طلب غير مسموح به.";
    header("Location: ../register.php");
    exit();
}