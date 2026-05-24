<?php
// details/earrings.php
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>قرط ديفاز دريم</title>
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
        <img id="main-image" src="../images/earring1.jpg" alt="قرط ديفاز دريم">
    </div>

    <div class="product-info">
        <h1>قرط ديفاز دريم</h1>

        <p class="details-description">
            قرط فاخر من الذهب الوردي عيار 18 قيراطاً، بتصميم مروحي مرصّع بالألماس،
            يضيف لمسة لامعة لكل إطلالة.
        </p>

        <h2>4,930 ر.س</h2>

        <div class="color-buttons">
            <button onclick="changeImage('../images/earring1.jpg')">الواجهة</button>
            <button onclick="changeImage('../images/earring2.jpg')">الجانب</button>
            <button onclick="changeImage('../images/earring3.jpg')">الإطلالة</button>
            <button onclick="changeImage('../images/earring4.jpg')">الكاملة</button>
        </div>

        <button class="collection-btn" onclick="addToMix('قرط ديفاز دريم')">
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

