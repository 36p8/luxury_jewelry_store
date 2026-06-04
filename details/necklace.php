<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Necklace Details</title>
    <link rel="stylesheet" href="../css/products.css">
    <style>
       
        .action-btns { display: flex; gap: 10px; margin-top: 20px; }
        .cart-btn { background-color: #7D5A44; color: white; padding: 12px 25px; border: none; cursor: pointer; border-radius: 5px; font-weight: bold; }
        .fav-btn { background-color: #c5a880; color: white; padding: 12px 25px; border: none; cursor: pointer; border-radius: 5px; font-weight: bold; }
    </style>
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
            <p>عقد قلادة " ديفاز دريم " من الذهب الوردي عيار 18 قيراطًا مرصع بالألماس وعرق اللؤلؤ.</p>

            <div class="action-btns">
                
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="product_id" value="358365">
                    <input type="hidden" name="product_name" value="عقد ديفاز دريم">
                    <input type="hidden" name="product_price" value="16000">
                    <button type="submit" name="add_to_cart" class="cart-btn">إضافة إلى حقيبة التسوق</button>
                </form>

                <form action="../favorites.php" method="POST">
                    <input type="hidden" name="product_id" value="358365">
                    <input type="hidden" name="product_name" value="عقد ديفاز دريم">
                    <input type="hidden" name="product_price" value="16000">
                    <button type="submit" name="add_to_fav" class="fav-btn">إضافة إلى المفضلة</button>
                </form>

            </div>

            <h3>الوصف</h3>
            <p>يضفي عقد ديفاز دريم روحاً رومانية لا لبس فيها على أكثر الديفات سحراً وجمالاً.</p>

            <h3>التفاصيل</h3>
            <ul>
                <li>المرجع : 358365</li>
                <li>المادة : ذهب وردي</li>
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