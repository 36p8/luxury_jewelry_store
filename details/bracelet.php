<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bracelet Details</title>

    <link rel="stylesheet" href="../css/products.css">

</head>

<body>

<section class="details-page">

    <div class="details-container">

        <div class="gallery">

            <img id="mainImage" src="../images/bracelet1.jpg" class="main-image">

            <div class="small-images">

                <img src="../images/bracelet1.jpg" onclick="changeImage(this)">
                <img src="../images/bracelet2.jpg" onclick="changeImage(this)">

            </div>

        </div>

        <div class="details-content">

            <h1>" ديفاز دريم " سوار</h1>

            <h2>35,400 SAR شامل الضرائب</h2>

            <p>
                سوار فاخر من الذهب الوردي مرصع بالألماس والصدف.
            </p>

            <div class="buttons">

                <button>إضافة إلى حقيبة التسوق</button>
                <button>إضافة إلى المفضلة</button>

            </div>

            <h3>الوصف</h3>

            <p>
                يجسد سوار «ديفاز دريم» الأناقة الإيطالية المطلقة.
            </p>

            <h3>الألوان</h3>

            <div class="colors">

                <span class="white"></span>
                <span class="gold"></span>
                <span class="rose"></span>

            </div>

            <h3>التفاصيل</h3>

            <ul>

                <li>المرجع : 356742</li>
                <li>المادة : ذهب وردي</li>
                <li>ألماس : 0.16</li>
                <li>الحجر الكريم : ألماس، الصدف</li>
                <li>القياس : 17cm</li>
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