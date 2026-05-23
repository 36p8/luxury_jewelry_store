<?php include '../includes/header.php'; ?>
<link rel="stylesheet" href="../css/products.css">
<?php include '../includes/navbar.php'; ?>

<section class="details-page">

    <div class="product-image">
        <img id="main-image" src="../images/earring1.jpg" alt="قرط ديفاز دريم">
    </div>

    <div class="product-info">

        <h1>قرط «ديفاز دريم»</h1>

        <p class="details-description">
            قرط فاخر من الذهب الوردي عيار 18 قيراطاً، مرصّع بعرق اللؤلؤ والألماس،
            بتصميم مروحي أنيق.
        </p>

        <h2>4,930 ر.س</h2>
        <p class="tax-note">السعر شامل الضرائب.</p>

        <div class="color-buttons">
            <button onclick="changeImage('../images/earring1.jpg')">الواجهة</button>
            <button onclick="changeImage('../images/earring2.jpg')">الجانب</button>
            <button onclick="changeImage('../images/earring3.jpg')">الإطلالة الفاخرة</button>
            <button onclick="changeImage('../images/earring4.jpg')">الإطلالة الكاملة</button>
        </div>

        <div class="action-buttons">
            <button class="collection-btn">أضف إلى السلة</button>
            <button class="appointment-btn">احجز موعد</button>
            <button class="mix-btn" onclick="addToMix('قرط ديفاز دريم')">أضيفي للتنسيق</button>
        </div>

    </div>

</section>

<section class="product-extra-details">

    <h2>تفاصيل المنتج</h2>

    <p>
        يعيد قرط «ديفاز دريم» تأويل الشعار المروحي الأيقوني للمجموعة بطريقة متلألئة
        وأنيقة، ويجمع بين الذهب الوردي وعرق اللؤلؤ والألماس.
    </p>

    <div class="details-grid">

        <div class="detail-box"><h3>المرجع</h3><p>361992</p></div>
        <div class="detail-box"><h3>المادة</h3><p>ذهب وردي 18 قيراط</p></div>
        <div class="detail-box"><h3>الألماس</h3><p>0.01 قيراط</p></div>
        <div class="detail-box"><h3>قابل للتعديل</h3><p>غير قابل للتعديل</p></div>
        <div class="detail-box"><h3>صنع في</h3><p>إيطاليا</p></div>

    </div>

</section>

<?php include '../includes/footer.php'; ?>
<script src="../js/product.js"></script>
<script src="../js/interaction.js"></script>
