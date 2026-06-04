<?php
require_once '../database/db.php'; // الاتصال بقاعدة البيانات

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // جلب البيانات من النموذج
    $id = $_POST['id'] ?? null;
    $new_name = trim($_POST['name'] ?? '');
    $new_price = trim($_POST['price'] ?? 0);

    // التحقق من صحة البيانات
    if ($id && !empty($new_name) && !empty($new_price)) {
        try {
            // تحديث بيانات المنتج
            $sql = "UPDATE products SET name = :name, price = :price WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            
            $stmt->execute([
                ':name'  => $new_name,
                ':price' => $new_price,
                ':id'    => $id
            ]);

            echo "تم تحديث بيانات منتج المجوهرات بنجاح!";
        } catch (PDOException $e) {
            echo "خطأ في التعديل: " . $e->getMessage(); // عرض رسالة الخطأ
        }
    } else {
        echo "خطأ: البيانات المدخلة لتحديث المنتج غير مكتملة.";
    }
} else {
    echo "طلب غير مسموح به.";
}
?>