<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Earrings Details</title>

    <link rel="stylesheet" href="../css/products.css">

</head>

<body>

<section class="details-page">

    <div class="details-container">

        <div class="gallery">

            <img id="mainImage" src="../images/earrings1.jpg" class="main-image">

            <div class="small-images">

                <img src="../images/earrings1.jpg" onclick="changeImage(this)">
                <img src="../images/earrings2.jpg" onclick="changeImage(this)">
                <img src="../images/earrings3.jpg" onclick="changeImage(this)">

            </div>

        </div>

        <div class="details-content">

            <h1>" ديفاز دريم " قرط</h1>

            <h2>4,930 SAR شامل الضرائب</h2>

            <p>
                قرط مفرد من الذهب الوردي عيار 18 قيراطًا مرصع بالألماس وعرق اللؤلؤ.
            </p>

            <div class="buttons">

                <button>إضافة إلى حقيبة التسوق</button>
                <button>إضافة إلى المفضلة</button>

            </div>

            <h3>الوصف</h3>

            <p>
                يعيد قرط «ديفاز دريم» تأويل شعار المجموعة المروحي الأيقوني بحلة متلألئة.
            </p>

            <h3>الألوان</h3>

            <div class="colors">

                <span class="white"></span>
                <span class="gold"></span>
                <span class="rose"></span>

            </div>

            <h3>التفاصيل</h3>

            <ul>

                <li>المرجع : 361992</li>
                <li>المادة : ذهب وردي</li>
                <li>ألماس : 0.01</li>
                <li>الحجر الكريم : ألماس، الصدف</li>
                <li>اللون : أبيض</li>
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

</body>
</html>