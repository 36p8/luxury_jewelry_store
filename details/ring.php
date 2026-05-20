<?php include '../includes/header.php'; ?>

<link rel="stylesheet" href="../css/products.css">

<body>

<?php include '../includes/navbar.php'; ?>


<div class="details-container">

    <img id="mainImage" src="../images/ring.jpg" alt="Ring">


    <h1>Diamond Ring</h1>


    <p>
        This elegant diamond ring combines luxury and simplicity
        with a modern handcrafted design perfect for special occasions.
    </p>


    <h3>$250</h3>



    <div class="color-buttons">

        <button onclick="changeImage('../images/ring.jpg')">
            Silver
        </button>

        <button onclick="changeImage('../images/ring2.jpg')">
            Gold
        </button>

        <button onclick="changeImage('../images/ring3.jpg')">
            Rose Gold
        </button>

    </div>

</div>


<?php include '../includes/footer.php'; ?>

<script src="../js/interaction.js"></script>

</body>
</html>