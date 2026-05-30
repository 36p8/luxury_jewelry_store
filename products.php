<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Products</title>

    <link rel="stylesheet" href="css/products.css">

    <script>

        function filterProducts(category){

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

<!-- NAVBAR -->

<header>

    <nav class="navbar">

        <div class="logo">

            Divas Dream

        </div>

        <ul class="nav-links">

            <li><a href="index.php">الرئيسية</a></li>
            <li><a href="products.php">المنتجات</a></li>
            <li><a href="#">العروض</a></li>
            <li><a href="#">تواصل معنا</a></li>

        </ul>

    </nav>

</header>


<!-- PRODUCTS -->

<section class="products-page">

    <h1 class="main-title">

        مجموعة ديفاز دريم الفاخرة

    </h1>


    <!-- FILTER -->

    <div class="filter-buttons">

        <button onclick="filterProducts('all')">الكل</button>

        <button onclick="filterProducts('ring')">
            الخواتم
        </button>

        <button onclick="filterProducts('necklace')">
            العقود
        </button>

        <button onclick="filterProducts('bracelet')">
            الأساور
        </button>

        <button onclick="filterProducts('earrings')">
            الأقراط
        </button>

    </div>


    <!-- GRID LAYOUT -->

    <div class="products-container">

        <!-- RING -->

        <div class="product-card ring">

            <img src="images/ring1.jpg" alt="">

            <h2>
                خاتم ديفاز دريم
            </h2>

            <p class="price">
                12,500 SAR
            </p>

            <p>
                خاتم فاخر من الذهب الوردي مرصع بالألماس.
            </p>

            <a href="details/ring.php" class="details-btn">
                التفاصيل
            </a>

        </div>


        <!-- NECKLACE -->

        <div class="product-card necklace">

            <img src="images/necklace1.jpg" alt="">

            <h2>
                عقد ديفاز دريم
            </h2>

            <p class="price">
                16,000 SAR
            </p>

            <p>
                عقد فاخر مستوحى من الأناقة الإيطالية.
            </p>

            <a href="details/necklace.php" class="details-btn">
                التفاصيل
            </a>

        </div>


        <!-- BRACELET -->

        <div class="product-card bracelet">

            <img src="images/bracelet1.jpg" alt="">

            <h2>
                سوار ديفاز دريم
            </h2>

            <p class="price">
                35,400 SAR
            </p>

            <p>
                سوار فاخر يعكس الجمال الروماني.
            </p>

            <a href="details/bracelet.php" class="details-btn">
                التفاصيل
            </a>

        </div>


        <!-- EARRINGS -->

        <div class="product-card earrings">

            <img src="images/earrings1.jpg" alt="">

            <h2>
                قرط ديفاز دريم
            </h2>

            <p class="price">
                4,930 SAR
            </p>

            <p>
                قرط أنيق من الذهب الوردي والألماس.
            </p>

            <a href="details/earrings.php" class="details-btn">
                التفاصيل
            </a>

        </div>

    </div>

</section>


<!-- FOOTER -->

<footer class="footer">

    <p>
        جميع الحقوق محفوظة © Divas Dream 2026
    </p>

</footer>

<?php include 'includes/footer.php'; ?> 

</body>
</html>