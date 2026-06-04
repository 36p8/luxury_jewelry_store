<?php
require_once '../database/db.php'; // الاتصال بقاعدة البيانات

try {
    // جلب المنتجات من الأحدث للأقدم
    $sql = "SELECT * FROM products ORDER BY id DESC";
    $stmt = $pdo->query($sql);
    $products = $stmt->fetchAll();

    // التحقق من وجود منتجات
    if (count($products) > 0) {
        echo "<h2>لوحة التحكم: قائمة المنتجات المتاحة</h2>";
        echo "<table border='1' cellpadding='10' style='border-collapse: collapse; text-align: center;'>";
        echo "<tr style='background-color: #f2f2f2;'><th>المعرّف ID</th><th>اسم المنتج</th><th>السعر</th><th>الوصف</th></tr>";
        
        // عرض المنتجات في الجدول
        foreach ($products as $product) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($product['id']) . "</td>";
            echo "<td>" . htmlspecialchars($product['name']) . "</td>";
            echo "<td>" . htmlspecialchars($product['price']) . " ريال</td>";
            echo "<td>" . htmlspecialchars($product['description']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "لا توجد أي منتجات مضافة في قاعدة البيانات حالياً.";
    }

} catch (PDOException $e) {
    echo "حدث خطأ أثناء جلب البيانات: " . $e->getMessage();
}
?>
