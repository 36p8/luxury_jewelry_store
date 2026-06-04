<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bracelet Details</title>
    <link rel="stylesheet" href="../css/products.css">
    <style>
         
        .buttons-container { display: flex; gap: 10px; margin: 20px 0; }
        .btn-style { padding: 12px 25px; border: none; cursor: pointer; border-radius: 5px; font-weight: bold; }
        .cart-btn { background-color: #7D5A44; color: white; }
        .fav-btn { background-color: #c5a880; color: white; }
    </style>
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
            <p>سوار فاخر من الذهب الوردي مرصع بالألماس والصدف.</p>

            <div class="buttons-container">
                
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="product_id" value="356742">
                    <input type="hidden" name="product_name" value="سوار ديفاز دريم">
                    <input type="hidden" name="product_price" value="35400">
                    <button type="submit" name="add_to_cart" class="btn-style cart-btn">إضافة إلى حقيبة التسوق</button>
                </form>

                <form action="../favorites.php" method="POST">
                    <input type="hidden" name="product_id" value="356742">
                    <input type="hidden" name="product_name" value="سوار ديفاز دريم">
                    <input type="hidden" name="product_price" value="35400">
                    <button type="submit" name="add_to_fav" class="btn-style fav-btn">إضافة إلى المفضلة</button>
                </form>

            </div>

            <h3>الوصف</h3>
            <p>يجسد سوار «ديفاز دريم» الأناقة الإيطالية المطلقة.</p>

            <h3>التفاصيل</h3>
            <ul>
                <li>المرجع : 356742</li>
                <li>المادة : ذهب وردي</li>
                <li>ألماس : 0.16</li>
                <li>القياس : 17cm</li>
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