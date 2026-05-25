<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Necklace Details</title>

    <link rel="stylesheet" href="../css/products.css">

</head>

<body>

<section class="details-page">

    <div class="details-container">

        <div class="gallery">

            <img id="mainImage" src="../images/necklace1.jpg" class="main-image">

            <div class="small-images">

                <img src="../images/necklace1.jpg" onclick="changeImage(this)">
                <img src="../images/necklace2.jpg" onclick="changeImage(this)">
                <img src="../images/necklace3.jpg" onclick="changeImage(this)">
                <img src="../images/necklace4.jpg" onclick="changeImage(this)">

            </div>

        </div>

        <div class="details-content">

            <h1>" ديفاز دريم " عقد</h1>

            <h2>16,000 SAR شامل الضرائب</h2>

            <p>
                عقد قلادة " ديفاز دريم " من الذهب الوردي عيار 18 قيراطًا مرصع بالألماس وعرق اللؤلؤ.
            </p>

            <div class="buttons">

                <button>إضافة إلى حقيبة التسوق</button>
                <button>إضافة إلى المفضلة</button>

            </div>

            <h3>الوصف</h3>

            <p>
                يضفي عقد ديفاز دريم روحاً رومانية لا لبس فيها على أكثر الديفات سحراً وجمالاً.
            </p>

            <h3>الألوان</h3>

            <div class="colors">

                <span class="white"></span>
                <span class="gold"></span>
                <span class="rose"></span>

            </div>

            <h3>التفاصيل</h3>

            <ul>

                <li>المرجع : 358365</li>
                <li>المادة : ذهب وردي</li>
                <li>ألماس : 0.13</li>
                <li>الحجر الكريم : ألماس، الصدف</li>
                <li>اللون : أبيض</li>
                <li>الطول : 41-43 cm</li>

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