<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<nav class="navbar" style="background-color: var(--navbar-bg); border-bottom: 1px solid var(--border-color); padding: 20px 40px; display: flex; justify-content: space-between; align-items: center; position: sticky; top: 0; z-index: 1000;">
    
    <div class="logo" style="font-size: 24px; font-weight: 700; letter-spacing: 6px; text-transform: uppercase;">
        <a href="home.php" style="color: var(--text-color); text-decoration: none;">BVLGARI</a>
    </div>

    <ul class="nav-links" style="display: flex; list-style: none; gap: 30px; font-size: 14px; letter-spacing: 1px; font-family: 'Cairo', sans-serif; align-items: center; margin: 0; padding: 0;">
        <li><a href="home.php" style="color: var(--text-color); text-decoration: none; font-weight: 600;">الرئيسية</a></li>
        <li><a href="about.php" style="color: var(--text-color); text-decoration: none;">من نحن</a></li>
        <li><a href="products.php" style="color: var(--text-color); text-decoration: none;">المنتجات</a></li>
        <li><a href="gallery.php" style="color: var(--text-color); text-decoration: none;">المعرض</a></li>
        <li><a href="contact.php" style="color: var(--text-color); text-decoration: none;">تواصل معنا</a></li>
        <li><a href="login.php" style="color: var(--text-color); text-decoration: none;">تسجيل الدخول</a></li>
    </ul>

    <div class="nav-actions" style="display: flex; align-items: center; gap: 20px;">
        
        <a href="cart.php" class="cart-link" style="color: var(--text-color); text-decoration: none; font-size: 18px; position: relative; display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px;">
            <i class="fas fa-shopping-cart"></i> 
            <span class="cart-count" style="background-color: #bfa38a; color: #1a110b; font-size: 10px; font-weight: bold; border-radius: 50%; width: 18px; height: 18px; display: flex; align-items: center; justify-content: center; position: absolute; top: 0; right: 0; font-family: Arial, sans-serif;">
                <?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>
            </span>
        </a>

        <button id="theme-toggle" style="background: none; border: none; color: var(--text-color); font-size: 18px; cursor: pointer; padding: 0; display: flex; align-items: center;">🌓</button>
    </div>
</nav>      