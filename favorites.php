<?php
session_start();
include 'includes/header.php';
include 'includes/navbar.php';

 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_fav'])) {
    $product_id = $_POST['product_id'];
    
    if (!isset($_SESSION['favorites'])) {
        $_SESSION['favorites'] = array();
    }
    
     
    if (!isset($_SESSION['favorites'][$product_id])) {
        $_SESSION['favorites'][$product_id] = array(
            'name' => $_POST['product_name'],
            'price' => $_POST['product_price']
        );
    }
}

 
if (isset($_GET['action']) && $_GET['action'] == 'remove') {
    $id = $_GET['id'];
    unset($_SESSION['favorites'][$id]);
    header("Location: favorites.php");
    exit();
}
?>

<div style="padding: 50px; text-align: center;">
    <h1 style="color: #7D5A44;">قائمة المفضلة</h1>
    
    <?php if (!empty($_SESSION['favorites'])): ?>
        <table style="width: 80%; margin: auto; border-collapse: collapse;">
            <tr style="border-bottom: 2px solid #7D5A44;">
                <th style="padding: 10px;">المنتج</th>
                <th style="padding: 10px;">السعر</th>
                <th style="padding: 10px;">إجراء</th>
            </tr>
            <?php foreach ($_SESSION['favorites'] as $id => $item): ?>
                <tr>
                    <td style="padding: 10px;"><?php echo $item['name']; ?></td>
                    <td style="padding: 10px;"><?php echo $item['price']; ?> SAR</td>
                    <td style="padding: 10px;">
                        <a href="favorites.php?action=remove&id=<?php echo $id; ?>" style="color: red;">حذف</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>لا توجد منتجات في قائمة المفضلة حالياً.</p>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>