
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<link rel="stylesheet" href="css/products.css">

<script>
function filterProducts(category){

    let cards = document.querySelectorAll('.product-card');

    cards.forEach(card => {

        if(category === 'all'){
            card.style.display = 'block';
        }

        else if(card.classList.contains(category)){
            card.style.display = 'block';
        }

        else{
            card.style.display = 'none';
        }

    });

}
</script>

<section class="products-page">

    <h1 class="main-title">
        مجموعة ديفاز دريم الفاخرة
    </h1>

    <div class="filter-buttons">

        <button onclick="filterProducts('all')">الكل</button>

        <button onclick="filterProducts('ring')">الخواتم</button>

        <button onclick="filterProducts('necklace')">العقود</button>

        <button onclick="filterProducts('bracelet')">الأساور</button>

        <button onclick="filterProducts('earrings')">الأقراط</button>

    </div>

    <div class="products-container">

        <!-- Necklace -->

        <div class="product-card necklace">

            <img src="images/necklace1.jpg" alt="Necklace">

            <div class="product-info">

                <h2>عقد ديفاز دريم</h2>

                <p class="price">SAR 16,000</p>

                <p>
                    عقد فاخر من الذهب الوردي مرصع بالألماس وعرق اللؤلؤ.
                </p>

                <a href="details/necklace.php" class="details-btn">
                    Details
                </a>

            </div>

        </div>

        <!-- Bracelet -->

        <div class="product-card bracelet">

            <img src="images/bracelet1.jpg" alt="Bracelet">

            <div class="product-info">

                <h2>سوار ديفاز دريم</h2>

                <p class="price">SAR 35,400</p>

                <p>
                    سوار فاخر يعكس الأناقة الإيطالية الخالدة.
                </p>

                <a href="details/bracelet.php" class="details-btn">
                    Details
                </a>

            </div>

        </div>

        <!-- Ring -->

        <div class="product-card ring">

            <img src="images/ring1.jpg" alt="Ring">

            <div class="product-info">

                <h2>خاتم ديفاز دريم</h2>

                <p class="price">SAR 12,500</p>

                <p>
                    خاتم أنيق من الذهب الوردي مرصع بالألماس.
                </p>

                <a href="details/ring.php" class="details-btn">
                    Details
                </a>

            </div>

        </div>

        <!-- Earrings -->

        <div class="product-card earrings">

            <img src="images/earrings1.jpg" alt="Earrings">

            <div class="product-info">

                <h2>قرط ديفاز دريم</h2>

                <p class="price">SAR 4,930</p>

                <p>
                    قرط فاخر من الذهب الوردي وعرق اللؤلؤ.
                </p>

                <a href="details/earrings.php" class="details-btn">
                    Details
                </a>

            </div>

        </div>

    </div>

</section>

<?php include 'includes/footer.php'; ?>

