<?php 
include 'includes/header.php'; 
include 'includes/navbar.php'; 
session_start();  
?>

<link rel="stylesheet" href="css/login.css">

<div class="auth-container">
    <div class="auth-card">
        <h2>Welcome Back</h2>
        <p class="auth-subtitle">Sign in to your luxury account</p>

        <?php if(isset($_SESSION['error'])): ?>
            <div class="error-msg"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
        <?php endif; ?>
        
        <?php if(isset($_SESSION['success'])): ?>
            <div class="success-msg"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></div>
        <?php endif; ?>

        <form action="backend/login_process.php" method="POST">
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" required placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required placeholder="Enter your password">
            </div>

            <button type="submit" class="auth-btn">Login</button>
        </form>
        <p class="auth-footer">Don't have an account? <a href="register.php">Register now</a></p>
    </div>
</div>

<?php 
include 'includes/footer.php'; 
?>