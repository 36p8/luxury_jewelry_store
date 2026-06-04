<?php
 

 
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = (float)$_POST['product_price'];  
    
    
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    
    
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['quantity'] += 1;
    } else {
        
        $_SESSION['cart'][$product_id] = array(
            'name' => $product_name,
            'price' => $product_price,
            'quantity' => 1
        );
    }
    
    
    header("Location: cart.php");
    exit();
}

 
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id_to_remove = $_GET['id'];
    if (isset($_SESSION['cart'][$id_to_remove])) {
        unset($_SESSION['cart'][$id_to_remove]);
    }
    header("Location: cart.php");
    exit();
}

 
if (isset($_GET['action']) && $_GET['action'] == 'clear') {
    unset($_SESSION['cart']);
    header("Location: cart.php");
    exit();
}
?>

<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سلة التسوق - Luxury Jewelry</title>
    
    <style>
        .cart-page {
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .cart-title {
            text-align: center;
            color: #7D5A44;
            margin-bottom: 30px;
        }
        .cart-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }
        .cart-table th, .cart-table td {
            padding: 15px;
            border: 1px solid #e0e0e0;
            text-align: center;
        }
        .cart-table th {
            background-color: #7D5A44;
            color: white;
            font-weight: bold;
        }
        .cart-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .total-row {
            font-weight: bold;
            font-size: 1.1rem;
            background-color: #f4ede8 !important;
        }
        .delete-link {
            color: #dc3545;
            text-decoration: none;
            font-weight: bold;
        }
        .delete-link:hover {
            text-decoration: underline;
        }
        .cart-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .btn-continue {
            background-color: #f4f4f4;
            color: #333;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .btn-clear {
            background-color: #dc3545;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .empty-message {
            text-align: center;
            padding: 40px;
            font-size: 1.2rem;
            color: #666;
        }
        .empty-message a {
            color: #7D5A44;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

<section class="cart-page">
    <h1 class="cart-title">سلة المشتريات</h1>
    <?php 
     
    if (!empty($_SESSION['cart'])): 
    ?>
        <table class="cart-table">
            <thead>
                <tr>
                    <th>اسم المنتج</th>
                    <th>السعر</th>
                    <th>الكمية</th>
                    <th>الإجمالي</th>
                    <th>إجراء</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $total_all_products = 0;  
                
                 
                foreach ($_SESSION['cart'] as $id => $item): 
                    $total_item_price = $item['price'] * $item['quantity'];
                    $total_all_products += $total_item_price;
                ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item['name']); ?></td>
                        <td><?php echo number_format($item['price']); ?> SAR</td>
                        <td><?php echo $item['quantity']; ?></td>
                        <td><?php echo number_format($total_item_price); ?> SAR</td>
                        <td>
                            <a href="cart.php?action=delete&id=<?php echo $id; ?>" class="delete-link">حذف</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                
                <tr class="total-row">
                    <td colspan="3" style="text-align: left; padding-left: 20px;">المجموع الإجمالي:</td>
                    <td colspan="2" style="color: #7D5A44; text-align: right; padding-right: 40px;">
                        <?php echo number_format($total_all_products); ?> SAR
                    </td>
                </tr>
            </tbody>
        </table>
        
        <div class="cart-buttons">
            <a href="products.php" class="btn-continue">← مواصلة التسوق</a>
            <a href="cart.php?action=clear" class="btn-clear" onclick="return confirm('هل أنت متأكد من رغبتك في تفريغ السلة؟')">تفريغ السلة بالكامل</a>
        </div>
        
    <?php else: ?>
        <div class="empty-message">
            <p>سلة التسوق الخاصة بك فارغة حالياً.</p>
            <a href="products.php">اضغط هنا لاستعراض المجوهرات الفاخرة وإضافتها</a>
        </div>
    <?php endif; ?>
</section>

<?php include 'includes/footer.php'; ?>

</body>
</html>                                            