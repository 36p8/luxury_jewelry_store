<?php 
session_start();
if(isset($_SESSION['user_id'])) {
    header("Location: home.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول - BVLGARI</title>
    <link rel="stylesheet" href="css/style.css"> <link rel="stylesheet" href="css/login.css"> </head>
<body>

    <?php include 'includes/navbar.php'; ?>

    <div class="auth-wrapper">
        <div class="auth-container">
            <h2>تسجيل الدخول</h2>

            <?php if(isset($_SESSION['error'])): ?>
                <div class="alert alert-danger"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
            <?php endif; ?>
            
            <?php if(isset($_SESSION['success'])): ?>
                <div class="alert alert-success"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></div>
            <?php endif; ?>

            <form id="loginForm" action="backend/login_process.php" method="POST">
                <div class="form-group">
                    <label for="email">البريد الإلكتروني</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">كلمة المرور</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" name="login_submit" class="auth-btn">تسجيل الدخول</button>
            </form>

            <div class="auth-links">
                <p>ليس لديك حساب؟ <a href="register.php">أنشئ حسابك الآن</a></p>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    
    <script src="js/validation.js"></script>

</body>
</html>