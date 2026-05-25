<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ring Details</title>

    <link rel="stylesheet" href="../css/products.css">

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

            <p>
                خاتم " ديفاز دريم" متعاكس وصغير من الذهب الوردي عيار 18 قيراطًا، مرصع بأجزاء من عرق اللؤلؤ وألماس مرصوف.
            </p>

            <div class="buttons">

                <button>إضافة إلى حقيبة التسوق</button>
                <button>إضافة إلى المفضلة</button>

            </div>

            <h3>الوصف</h3>

            <p>
                يضفي خاتم " ديفاز دريم " المستوحى من الأناقة الأنثوية والجذابة الساحرة للمدينة الخالدة، روحًا رومانية لا لبس فيها على أكثر النجمات سحرًا وجمالًا.
            </p>

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