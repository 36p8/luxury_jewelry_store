<?php include '../includes/header.php'; ?>

<link rel="stylesheet" href="../css/products.css">

<body>

<?php include '../includes/navbar.php'; ?>


<div class="details-container">

    <img id="mainImage" src="../images/necklace.jpg" alt="Necklace">


    <h1>Golden Necklace</h1>


    <p>
        Elegant gold necklace with luxurious details and premium finish
        inspired by international jewelry brands.
    </p>


    <h3>$320</h3>



    <div class="color-buttons">

        <button onclick="changeImage('../images/necklace.jpg')">
            Classic Gold
        </button>

        <button onclick="changeImage('../images/necklace2.jpg')">
            White Gold
        </button>

    </div>

</div>


<?php include '../includes/footer.php'; ?>

<script src="../js/interaction.js"></script>

</body>
</html>