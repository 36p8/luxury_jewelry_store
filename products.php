<?php
// products.php
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>مجموعة المجوهرات</title>
    <link rel="stylesheet" href="css/products.css">
</head>
<body>

<header class="main-header">
    <h1 class="logo">نوثة ساطعة</h1>
    <nav class="main-nav">
        <a href="home.php">الرئيسية</a>
        <a href="products.php" class="active">المنتجات</a>
        <a href="#">من نحن</a>
        <a href="#">تواصل معنا</a>
    </nav>
</header>

<section class="products-header">
    <h2>مجموعة المجوهرات</h2>
    <p>استعرضي تشكيلتنا الراقية من مجوهرات ديفاز دريم، واختاري القطعة التي تعبّر عنك.</p>
</section>

<section class="filter-bar">
    <button class="filter-btn active" data-category="all">جميع المنتجات</button>
    <button class="filter-btn" data-category="rings">الخواتم</button>
    <button class="filter-btn" data-category="necklaces">العقود</button>
    <button class="filter-btn" data-category="bracelets">الأساور</button>
    <button class="filter-btn" data-category="earrings">الأقراط</button>
</section>

<section class="products-container">

    <!-- خاتم -->
    <article class="product-card" data-category="rings">
        <img src="images/ring1.jpg" alt="خاتم ديفاز دريم">
        <h3>خاتم ديفاز دريم</h3>
        <p>خاتم فاخر من الذهب الوردي عيار 18 قيراطاً، مرصّع بعرق اللؤلؤ والألماس.</p>
        <span class="price">19,300 ر.س</span>
        <a href="details/ring.php" class="details-btn">عرض التفاصيل</a>
    </article>

    <!-- عقد -->
    <article class="product-card" data-category="necklaces">
        <img src="images/necklace1.jpg" alt="عقد ديفاز دريم">
        <h3>عقد ديفاز دريم</h3>
        <p>عقد أنيق من الذهب الوردي، مستوحى من الفسيفساء الإيطالية الكلاسيكية.</p>
        <span class="price">16,000 ر.س</span>
        <a href="details/necklace.php" class="details-btn">عرض التفاصيل</a>
    </article>

    <!-- سوار -->
    <article class="product-card" data-category="bracelets">
        <img src="images/bracelet1.jpg" alt="سوار ديفاز دريم">
        <h3>سوار ديفاز دريم</h3>
        <p>سوار فاخر مرصّع بعرق اللؤلؤ والألماس، بتصميم مروحي أنيق.</p>
        <span class="price">35,400 ر.س</span>
        <a href="details/bracelet.php" class="details-btn">عرض التفاصيل</a>
    </article>

    <!-- قرط -->
    <article class="product-card" data-category="earrings">
        <img src="images/earring1.jpg" alt="قرط ديفاز دريم">
        <h3>قرط ديفاز دريم</h3>
        <p>قرط مروحي من الذهب الوردي، مرصّع بالألماس لإطلالة لامعة.</p>
        <span class="price">4,930 ر.س</span>
        <a href="details/earrings.php" class="details-btn">عرض التفاصيل</a>
    </article>

</section>

<section class="mix-match-panel">
    <h2>Mix & Match</h2>
    <p>اختاري القطع التي ترغبين بتنسيقها معاً:</p>
    <ul id="mix-list"></ul>
</section>

<footer class="main-footer">
    <p>© 2025 نوثة ساطعة – مشروع تجريبي لمادة تطوير الويب.</p>
</footer>

<script src="js/product.js"></script>
<script src="js/interaction.js"></script>
</body>
</html>

