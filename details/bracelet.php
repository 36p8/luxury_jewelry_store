<?php include '../includes/header.php'; ?>

<link rel="stylesheet" href="../css/products.css">

<body>

<?php include '../includes/navbar.php'; ?>


<div class="details-container">

    <img id="mainImage" src="../images/bracelet.jpg" alt="Bracelet">


    <h1>Luxury Bracelet</h1>


    <p>
        Handcrafted bracelet designed with elegant luxury aesthetics
        suitable for modern fashion lovers.
    </p>


    <h3>$180</h3>



    <div class="color-buttons">

        <button onclick="changeImage('../images/bracelet.jpg')">
            Brown Gold
        </button>

        <button onclick="changeImage('../images/bracelet2.jpg')">
            Rose Gold
        </button>

    </div>

</div>


<?php include '../includes/footer.php'; ?>

<script src="../js/interaction.js"></script>

</body>
</html>