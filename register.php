<?php 
include 'includes/header.php'; 
include 'includes/navbar.php'; 
session_start(); 
?>

<link rel="stylesheet" href="css/login.css">

<div class="auth-container">
    <div class="auth-card">
        <h2>Create Account</h2>
        <p class="auth-subtitle">Join our luxury jewelry store</p>

        <?php if(isset($_SESSION['error'])): ?>
            <div class="error-msg"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
        <?php endif; ?>

        <form action="backend/register_process.php" method="POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required placeholder="Enter your username">
            </div>
            
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" required placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required placeholder="Create a password">
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" required placeholder="Confirm your password">
            </div>

            <button type="submit" class="auth-btn">Register</button>
        </form>
        <p class="auth-footer">Already have an account? <a href="login.php">Login here</a></p>
    </div>
</div>

<?php 
include 'includes/footer.php'; 
?>