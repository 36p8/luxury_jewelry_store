<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Jewelry - Products</title>

    <link rel="stylesheet" href="css/products.css">

    <script>
        function filterProducts(category) {

            let cards = document.querySelectorAll(".product-card");

            cards.forEach(card => {

                if(category === "all"){
                    card.style.display = "block";
                }

                else if(card.classList.contains(category)){
                    card.style.display = "block";
                }

                else{
                    card.style.display = "none";
                }

            });

        }
    </script>

</head>

<body>

<section class="products-page">

    <h1 class="main-title">مجموعة ديفاز دريم الفاخرة</h1>

    <div class="filter-buttons">

        <button onclick="filterProducts('all')">الكل</button>
        <button onclick="filterProducts('ring')">الخواتم</button>
        <button onclick="filterProducts('necklace')">العقود</button>
        <button onclick="filterProducts('bracelet')">الأساور</button>
        <button onclick="filterProducts('earrings')">الأقراط</button>

    </div>

    <div class="products-container">

        <!-- Ring -->

        <div class="product-card ring">

            <img src="images/ring1.jpg" alt="Ring">

            <h2>خاتم ديفاز دريم</h2>

            <p class="price">12,500 SAR</p>

            <p>
                خاتم فاخر من الذهب الوردي مرصع بالألماس والصدف.
            </p>

            <a href="details/ring.php" class="details-btn">
                Details
            </a>

        </div>


        <!-- Necklace -->

        <div class="product-card necklace">

            <img src="images/necklace1.jpg" alt="Necklace">

            <h2>عقد ديفاز دريم</h2>

            <p class="price">16,000 SAR</p>

            <p>
                عقد أنيق مستوحى من الجمال الإيطالي الراقي.
            </p>

            <a href="details/necklace.php" class="details-btn">
                Details
            </a>

        </div>


        <!-- Bracelet -->

        <div class="product-card bracelet">

            <img src="images/bracelet1.jpg" alt="Bracelet">

            <h2>سوار ديفاز دريم</h2>

            <p class="price">35,400 SAR</p>

            <p>
                سوار فاخر يعكس الأناقة الإيطالية الخالدة.
            </p>

            <a href="details/bracelet.php" class="details-btn">
                Details
            </a>

        </div>


        <!-- Earrings -->

        <div class="product-card earrings">

            <img src="images/earrings1.jpg" alt="Earrings">

            <h2>قرط ديفاز دريم</h2>

            <p class="price">4,930 SAR</p>

            <p>
                قرط أنيق من الذهب الوردي والألماس.
            </p>

            <a href="details/earrings.php" class="details-btn">
                Details
            </a>

        </div>

    </div>

</section>

<?php include 'includes/footer.php'; ?>

</body>
</html>