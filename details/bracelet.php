<?php
// details/bracelet.php
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>سوار ديفاز دريم</title>
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
        <img id="main-image" src="../images/bracelet1.jpg" alt="سوار ديفاز دريم">
    </div>

    <div class="product-info">
        <h1>سوار ديفاز دريم</h1>

        <p class="details-description">
            سوار فاخر من الذهب الوردي عيار 18 قيراطاً، مرصّع بعرق اللؤلؤ والألماس،
            بتصميم مروحي يلتف حول المعصم بإحساس أنثوي ناعم.
        </p>

        <h2>35,400 ر.س</h2>

        <div class="color-buttons">
            <button onclick="changeImage('../images/bracelet1.jpg')">الواجهة</button>
            <button onclick="changeImage('../images/bracelet2.jpg')">الجانب</button>
            <button onclick="changeImage('../images/bracelet3.jpg')">الإطلالة</button>
            <button onclick="changeImage('../images/bracelet4.jpg')">الكاملة</button>
        </div>

        <button class="collection-btn" onclick="addToMix('سوار ديفاز دريم')">
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

