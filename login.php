<?php 
session_start();
// إذا كان المستخدم مسجل دخول مسبقاً، يتم تحويله للرئيسية فوراً
if(isset($_SESSION['user_id'])) {
    header("Location: home.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Luxury Jewelry</title>
    <link rel="stylesheet" href="css/style.css"> <link rel="stylesheet" href="css/login.css"> </head>
<body>

    <?php include 'includes/navbar.php'; ?>

    <div class="auth-container" style="margin: 80px auto;">
        <h2>Login</h2>

        <?php if(isset($_SESSION['error'])): ?>
            <div class="alert alert-danger"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
        <?php endif; ?>
        
        <?php if(isset($_SESSION['success'])): ?>
            <div class="alert alert-success"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></div>
        <?php endif; ?>

        <form action="backend/login_process.php" method="POST">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="login_submit" class="auth-btn">Login</button>
        </form>

        <div class="auth-links">
            <p>Don't have an account? <a href="register.php">Register Now</a></p>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

</body>
</html>