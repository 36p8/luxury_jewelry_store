<?php
require_once '../database/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $new_name = trim($_POST['name'] ?? '');
    $new_price = trim($_POST['price'] ?? 0);

    if ($id && !empty($new_name) && !empty($new_price)) {
        try {

            $sql = "UPDATE products SET name = :name, price = :price WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            
            $stmt->execute([
                ':name'  => $new_name,
                ':price' => $new_price,
                ':id'    => $id
            ]);

            echo "تم تحديث بيانات منتج المجوهرات بنجاح!";
        } catch (PDOException $e) {
            echo "حدث خطأ أثناء عملية التعديل: " . $e->getMessage();
        }
    } else {
        echo "خطأ: البيانات المدخلة لتحديث المنتج غير مكتملة.";
    }
} else {
    echo "طلب غير مسموح به.";
}
?>
