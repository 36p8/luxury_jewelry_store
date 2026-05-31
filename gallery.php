<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>معرض المقتنيات الفاخرة</title>
    <link rel="stylesheet" href="css/style.css"> 

    <style>
        .back-container {
            max-width: 1200px;
            margin: 30px auto 0 auto;
            padding: 0 20px;
            text-align: right; /* يبدأ من اليمين ليناسب القراءة العربية */
        }

        .gallery-style-btn {
            display: inline-block;
            color: var(--dark-brown, #4A342A);
            background-color: var(--cream, #F5F1EA); /* نفس لون الخلفية الكريمي */
            text-decoration: none;
            padding: 10px 28px;
            font-size: 0.9rem;
            font-weight: 600;
            border-radius: 6px; /* زوايا ناعمة مثل أزرار الفلترة وروابط الكروت */
            border: 1px solid var(--beige, #D7C9B8); /* إطار بلون البيج */
            transition: all 0.3s ease;
            cursor: pointer;
        }

        /* تأثير التمرير (Hover) المطابق للموقع */
        .gallery-style-btn:hover {
            background-color: var(--brown, #7D5A44); /* البني الفاخر عند التمرير */
            border-color: var(--brown, #7D5A44);
            color: #ffffff; /* كتابة باللون الأبيض */
        }
    </style>
</head>
<body>

    <div class="back-container">
        <a href="index.php" class="gallery-style-btn">
            ← العودة للقائمة الرئيسية
        </a>
    </div>

    <header class="gallery-header">
        <h1>معرض المقتنيات الحصرية</h1>
        <p>اكتشفي بريق الأناقة والفخامة في مجموعتنا المختارة بعناية</p>
    </header>

    <div class="gallery-filter">
        <button class="filter-btn active">الكل</button>
        <button class="filter-btn">خواتم</button>
        <button class="filter-btn">أساور</button>
        <button class="filter-btn">قلائد</button>
    </div>

    <section class="gallery-grid">
        
        <div class="gallery-card">
            <div class="card-img-wrapper">
                <img src="images/ring1.jpg" alt="خاتم ألماس">
                <div class="card-overlay">
                    <h3>خاتم الألماس الملكي</h3>
                    <p>تصميم ساحر مرصع بأنقى فصوص الألماس</p>
                    <a href="products.php" class="gallery-link">عرض التفاصيل</a>
                </div>
            </div>
        </div>

        <div class="gallery-card">
            <div class="card-img-wrapper">
                <img src="images/bracelet1.jpg" alt="سوار ذهبي">
                <div class="card-overlay">
                    <h3>سوار الذهب الخالص</h3>
                    <p>صياغة فريدة من الذهب عيار 21</p>
                    <a href="products.php" class="gallery-link">عرض التفاصيل</a>
                </div>
            </div>
        </div>

        <div class="gallery-card">
            <div class="card-img-wrapper">
                <img src="images/necklace1.jpg" alt="قلادة فاخرة">
                <div class="card-overlay">
                    <h3>قلادة الزمرد النادر</h3>
                    <p>لمسة ملكية تضفي فخامة على حضورك</p>
                    <a href="products.php" class="gallery-link">عرض التفاصيل</a>
                </div>
            </div>
        </div>

    </section>

    <?php include 'includes/footer.php'; ?>

</body>
</html>                         