<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ring Details</title>
    <link rel="stylesheet" href="../css/products.css">
    <style>
        
        .buttons-container { display: flex; gap: 10px; margin: 20px 0; }
        .btn-style { padding: 12px 25px; border: none; cursor: pointer; border-radius: 5px; font-weight: bold; }
        .cart-btn { background-color: #7D5A44; color: white; }
        .fav-btn { background-color: #c5a880; color: white; }
    </style>
</head>
<body>

<section class="details-page">
    <div class="details-container">
        <div class="gallery">
            <img id="mainImage" src="../images/ring1.jpg" class="main-image">
            <div class="small-images">
                <img src="../images/ring1.jpg" onclick="changeImage(this)">
                <img src="../images/ring2.jpg" onclick="changeImage(this)">
                <img src="../images/ring3.jpg" onclick="changeImage(this)">
                <img src="../images/ring4.jpg" onclick="changeImage(this)">
            </div>
        </div>

        <div class="details-content">
            <h1>" ديفاز دريم " خاتم</h1>
            <h2>12,500 SAR شامل الضرائب</h2>
            <p>خاتم " ديفاز دريم" متعاكس وصغير من الذهب الوردي عيار 18 قيراطًا.</p>

            <div class="buttons-container">
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="product_id" value="353806">
                    <input type="hidden" name="product_name" value="خاتم ديفاز دريم">
                    <input type="hidden" name="product_price" value="12500">
                    <button type="submit" name="add_to_cart" class="btn-style cart-btn">إضافة إلى حقيبة التسوق</button>
                </form>

                <form action="../favorites.php" method="POST">
                    <input type="hidden" name="product_id" value="353806">
                    <input type="hidden" name="product_name" value="خاتم ديفاز دريم">
                    <input type="hidden" name="product_price" value="12500">
                    <button type="submit" name="add_to_fav" class="btn-style fav-btn">إضافة إلى المفضلة</button>
                </form>
            </div>

            <h3>الوصف</h3>
            <p>يضفي خاتم " ديفاز دريم " روحًا رومانية راقية مستوحاة من الأناقة الإيطالية.</p>

            <h3>الألوان</h3>
            <div class="colors">
                <span class="white"></span>
                <span class="gold"></span>
                <span class="rose"></span>
            </div>

            <h3>التفاصيل</h3>
            <ul>
                <li>المرجع : 353806</li>
                <li>المادة : ذهب وردي</li>
                <li>ألماس : 0.08</li>
                <li>الحجر الكريم : ألماس، الصدف</li>
                <li>صنع في : إيطاليا</li>
            </ul>
        </div>
    </div>
</section>

<script>
    function changeImage(element){
        document.getElementById("mainImage").src = element.src;
    }
</script>

<?php include '../includes/footer.php'; ?>

</body>
</html>