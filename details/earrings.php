<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>

<link rel="stylesheet" href="../css/products.css">
<style>
    /* إضافة تنسيق للأزرار لتظهر بشكل جذاب */
    .buttons-container { display: flex; gap: 10px; margin: 20px 0; }
    .btn-style { padding: 12px 25px; border: none; cursor: pointer; border-radius: 5px; font-weight: bold; }
    .cart-btn { background-color: #7D5A44; color: white; }
    .fav-btn { background-color: #c5a880; color: white; }
</style>

<section class="details-page">
    <div class="details-container">
        <div class="gallery">
            <img id="mainImage" src="../images/earrings1.jpg" class="main-image" alt="قرط ديفاز دريم">
            <div class="small-images">
                <img src="../images/earrings1.jpg" onclick="changeImage(this)">
                <img src="../images/earrings2.jpg" onclick="changeImage(this)">
                <img src="../images/earrings3.jpg" onclick="changeImage(this)">
            </div>
        </div>

        <div class="details-content">
            <h1>قرط ديفاز دريم</h1>
            <h2>4,930 SAR شامل الضرائب</h2>
            <p>قرط "ديفاز دريم" مفرد بشكل زر مروحي التصميم من الذهب عيار 18 قيراطًا، مرصع بعرق اللؤلؤ والألماس المرصوف.</p>

            <div class="buttons-container">
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="product_id" value="361992">
                    <input type="hidden" name="product_name" value="قرط ديفاز دريم">
                    <input type="hidden" name="product_price" value="4930">
                    <button type="submit" name="add_to_cart" class="btn-style cart-btn">إضافة إلى حقيبة التسوق</button>
                </form>

                <form action="../favorites.php" method="POST">
                    <input type="hidden" name="product_id" value="361992">
                    <input type="hidden" name="product_name" value="قرط ديفاز دريم">
                    <input type="hidden" name="product_price" value="4930">
                    <button type="submit" name="add_to_fav" class="btn-style fav-btn">إضافة إلى المفضلة</button>
                </form>
            </div>

            <h3>الألوان المتاحة</h3>
            <div class="colors">
                <span class="white"></span>
                <span class="gold"></span>
                <span class="rose"></span>
            </div>

            <h3>الوصف</h3>
            <p>يعيد قرط «ديفاز دريم» ذو شكل الزر المصوغ من الذهب الوردي عيار 18 قيراطاً تأويل شعار المجموعة المروحي الأيقوني بحلة متلألئة وأنيقة.</p>
            <p>يطرح تعبيراً راقياً عن الأنوثة المفعمة بالمرح وإمكانية تنسيقه وجمعه مع الأقراط الأخرى بحرية تامة.</p>
            <p>تتشكل البصمة الجمالية المميزة للمجموعة عبر تصميم أنيق مرصع بطريقة فنية بأجزاء من عرق اللؤلؤ يكسوها بريق الألماس المرصوف.</p>
            <p>كمزيج من البهاء والجمال الخالد والتنوع، يمكن لهذا القرط أن يُنسَّق ويُجمَع وفق رغباتكم ليقدّم أسلوباً فريداً في الأناقة.</p>

            <h3>التفاصيل</h3>
            <ul>
                <li>المرجع : 361992</li>
                <li>المادة : ذهب وردي</li>
                <li>ألماس (قيراط) : 0.01</li>
                <li>صنع في : إيطاليا</li>
            </ul>
        </div>
    </div>
</section>

<script>
    function changeImage(img){
        document.getElementById("mainImage").src = img.src;
    }
</script>

<?php include '../includes/footer.php'; ?>