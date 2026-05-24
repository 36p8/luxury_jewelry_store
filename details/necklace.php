<?php
// details/necklace.php
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>عقد ديفاز دريم</title>
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
        <img id="main-image" src="../images/necklace1.jpg" alt="عقد ديفاز دريم">
    </div>

    <div class="product-info">
        <h1>عقد ديفاز دريم</h1>

        <p class="details-description">
            عقد فاخر من الذهب الوردي عيار 18 قيراطاً، مرصّع بالألماس وعرق اللؤلؤ،
            بتصميم أنثوي ناعم ينساب حول العنق بإطلالة راقية.
        </p>

        <h2>16,000 ر.س</h2>

        <div class="color-buttons">
            <button onclick="changeImage('../images/necklace1.jpg')">الواجهة</button>
            <button onclick="changeImage('../images/necklace2.jpg')">الجانب</button>
            <button onclick="changeImage('../images/necklace3.jpg')">الإطلالة</button>
            <button onclick="changeImage('../images/necklace4.jpg')">الكاملة</button>
        </div>

        <button class="collection-btn" onclick="addToMix('عقد ديفاز دريم')">
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

