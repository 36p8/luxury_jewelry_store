<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>

<link rel="stylesheet" href="../css/products.css">

<section class="details-page">

    <div class="details-container">

        <div class="gallery">

            <img id="mainImage"
                 src="../images/earrings1.jpg"
                 class="main-image"
                 alt="قرط ديفاز دريم">

            <div class="small-images">

                <img src="../images/earrings1.jpg" onclick="changeImage(this)">
                <img src="../images/earrings2.jpg" onclick="changeImage(this)">
                <img src="../images/earrings3.jpg" onclick="changeImage(this)">

            </div>

        </div>

        <div class="details-content">

            <h1>قرط ديفاز دريم</h1>

            <h2>4,930 SAR شامل الضرائب</h2>

            <p>
                قرط "ديفاز دريم" مفرد بشكل زر مروحي التصميم من الذهب
                عيار 18 قيراطًا، مرصع بعرق اللؤلؤ والألماس المرصوف.
            </p>

            <div class="buttons">

                <button>إضافة إلى حقيبة التسوق</button>

                <button>إضافة إلى المفضلة</button>

            </div>

            <h3>الألوان المتاحة</h3>

            <div class="colors">
                <span class="white"></span>
                <span class="gold"></span>
                <span class="rose"></span>
            </div>

            <h3>الوصف</h3>

            <p>
                يعيد قرط «ديفاز دريم» ذو شكل الزر المصوغ من الذهب
                الوردي عيار 18 قيراطاً تأويل شعار المجموعة المروحي
                الأيقوني بحلة متلألئة وأنيقة.
            </p>

            <p>
                يطرح تعبيراً راقياً عن الأنوثة المفعمة بالمرح وإمكانية
                تنسيقه وجمعه مع الأقراط الأخرى بحرية تامة.
            </p>

            <p>
                تتشكل البصمة الجمالية المميزة للمجموعة عبر تصميم أنيق
                مرصع بطريقة فنية بأجزاء من عرق اللؤلؤ يكسوها بريق
                الألماس المرصوف.
            </p>

            <p>
                كمزيج من البهاء والجمال الخالد والتنوع، يمكن لهذا القرط
                أن يُنسَّق ويُجمَع وفق رغباتكم ليقدّم أسلوباً فريداً
                في الأناقة.
            </p>

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