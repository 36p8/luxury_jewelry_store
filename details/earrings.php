<?php include '../includes/header.php'; ?>

<link rel="stylesheet" href="../css/products.css">

<body>

<?php include '../includes/navbar.php'; ?>


<div class="details-container">

    <img id="mainImage" src="../images/earrings.jpg" alt="Earrings">


    <h1>Classic Earrings</h1>


    <p>
        Modern luxury earrings with stylish details and elegant finishing
        for special occasions and everyday fashion.
    </p>


    <h3>$210</h3>



    <div class="color-buttons">

        <button onclick="changeImage('../images/earrings.jpg')">
            Gold
        </button>

        <button onclick="changeImage('../images/earrings2.jpg')">
            Silver
        </button>

    </div>

</div>


<?php include '../includes/footer.php'; ?>

<script src="../js/interaction.js"></script>

</body>
</html>