<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login</title>

<link rel="stylesheet" href="css/login.css">

</head>

<body>

<div class="login-container">

<h2>Login</h2>

<form action="backend/login_process.php" method="POST">

<input type="email" name="email" placeholder="Enter Email" required>

<input type="password" name="password" placeholder="Enter Password" required>

<button type="submit">Login</button>

</form>

<p>
Don't have an account?
<a href="register.php">Register</a>
</p>

</div>

</body>
</html>
