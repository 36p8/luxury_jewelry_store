<?php
// details/ring.php
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>خاتم ديفاز دريم</title>
    <link rel="stylesheet" href="../css/products.css">
</head>
<body>

<header class="main-header">
    <h1 class="logo">نوثة ساطعة</h1>
    <nav class="main-nav">
        <a href="../home.php">الرئيسية</a>
        <a href="../products.php" class="active">المنتجات</a>
    </nav>
</header>

<section class="details-page">

    <div class="product-image">
        <img id="main-image" src="../images/ring1.jpg" alt="خاتم ديفاز دريم">
    </div>

    <div class="product-info">
        <h1>خاتم ديفاز دريم</h1>

        <p class="details-description">
            خاتم فاخر من الذهب الوردي عيار 18 قيراطاً، مرصّع بعرق اللؤلؤ والألماس،
            بتصميم مروحي مستوحى من الفسيفساء الإيطالية الراقية.
        </p>

        <h2>19,300 ر.س</h2>

        <div class="color-buttons">
            <button onclick="changeImage('../images/ring1.jpg')">الواجهة</button>
            <button onclick="changeImage('../images/ring2.jpg')">الجانب</button>
            <button onclick="changeImage('../images/ring3.jpg')">الإطلالة</button>
            <button onclick="changeImage('../images/ring4.jpg')">الكاملة</button>
        </div>

        <button class="collection-btn" onclick="addToMix('خاتم ديفاز دريم')">
            أضف إلى مجموعة التنسيق
        </button>
    </div>

</section>

<footer class="main-footer">
    <p>© 2025 نوثة ساطعة – مشروع تجريبي لمادة تطوير الويب.</p>
</footer>

<script src="../js/product.js"></script>
<script src="../js/interaction.js"></script>
</body>
</html>

