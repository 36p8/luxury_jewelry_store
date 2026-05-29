<?php
session_start();
// استدعاء ملف الاتصال الخاص بالبنت الثالثة
require_once '../database/db.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_submit'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // 1. Error Handling: الحقول فارغة
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "يرجى إدخال البريد الإلكتروني وكلمة المرور.";
        header("Location: ../login.php");
        exit();
    }

    try {
        // 2. جلب بيانات المستخدم بالأمان باستخدام الـ Prepared Statement ومتغير $pdo لشغل زميلتك
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(); // بما أنها وضعت FETCH_ASSOC تلقائياً في ملف الـ db.php فهو مجهز تماماً

        // 3. Error Handling: التحقق من وجود الحساب وتطابق كلمة المرور المشفرة
        if ($user && password_verify($password, $user['password'])) {
            
            // 4. Sessions: حفظ جلسة المستخدم بالكامل وبشكل مستمر
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];

            // توجيه المستخدم إلى الصفحة الرئيسية بعد تسجيل الدخول الناجح
            header("Location: ../home.php");
            exit();
            
        } else {
            // خطأ في كلمة المرور أو الحساب غير موجود
            $_SESSION['error'] = "البريد الإلكتروني أو كلمة المرور غير صحيحة.";
            header("Location: ../login.php");
            exit();
        }

    } catch (PDOException $e) {
        $_SESSION['error'] = "حدث خطأ في قاعدة البيانات: " . $e->getMessage();
        header("Location: ../login.php");
        exit();
    }
} else {
    $_SESSION['error'] = "طلب غير مسموح به.";
    header("Location: ../login.php");
    exit();
}