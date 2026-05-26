<?php
require_once '../database/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $price = trim($_POST['price'] ?? 0);
    $image = trim($_POST['image'] ?? 'default.jpg');
    $description = trim($_POST['description'] ?? '');

    if (!empty($name) && !empty($price)) {
        try {
            $sql = "INSERT INTO products (name, price, image, description) VALUES (:name, :price, :image, :description)";
            $stmt = $pdo->prepare($sql);
            
            $stmt->execute([
                ':name'        => $name,
                ':price'       => $price,
                ':image'       => $image,
                ':description' => $description
            ]);

            echo "تم إضافة منتج المجوهرات بنجاح!";
        } catch (PDOException $e) {
            echo "حدث خطأ أثناء عملية الإضافة: " . $e->getMessage();
        }
    } else {
        echo "تنبيه: يرجى ملء الحقول الإلزامية (الاسم والسعر).";
    }
} else {
    echo "طلب غير مسموح به. يجب استخدام طريقة POST.";
}
?>
