<?php
session_start();
 
require_once '../database/db.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register_submit'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $_SESSION['error'] = "برجاء ملء جميع الحقول الإلزامية.";
        header("Location: ../register.php");
        exit();
    }

 
    if ($password !== $confirm_password) {
        $_SESSION['error'] = "كلمتا المرور غير متطابقتين.";
        header("Location: ../register.php");
        exit();
    }

    try {
        // 3. Error Handling & Security: التأكد من عدم تكرار الإيميل باستخدام Prepared Statement وحساب زميلتك $pdo
        $checkEmail = $pdo->prepare("SELECT email FROM users WHERE email = :email");
        $checkEmail->execute([':email' => $email]);
        
        if ($checkEmail->rowCount() > 0) {
            $_SESSION['error'] = "هذا البريد الإلكتروني مسجل بالفعل.";
            header("Location: ../register.php");
            exit();
        }

         
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

       
        $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $pdo->prepare($sql);
        
        $result = $stmt->execute([
            ':username' => $username,
            ':email' => $email,
            ':password' => $hashed_password
        ]);

        if ($result) {
            $_SESSION['success'] = "تم إنشاء الحساب بنجاح! يمكنك تسجيل الدخول الآن.";
            header("Location: ../login.php");
            exit();
        } else {
            $_SESSION['error'] = "حدث خطأ أثناء عملية التسجيل، يرجى المحاولة مرة أخرى.";
            header("Location: ../register.php");
            exit();
        }

    } catch (PDOException $e) {
        $_SESSION['error'] = "حدث خطأ في قاعدة البيانات: " . $e->getMessage();
        header("Location: ../register.php");
        exit();
    }
} else {
    $_SESSION['error'] = "طلب غير مسموح به.";
    header("Location: ../register.php");
    exit();
}