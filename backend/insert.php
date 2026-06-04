<?php
// استدعاء ملف الاتصال بقاعدة البيانات
require_once '../database/db.php';

// التأكد من أن البيانات تم إرسالها عبر نموذج (POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // جلب البيانات من النموذج مع تنظيفها من الفراغات الزائدة
    $name = trim($_POST['name'] ?? '');
    $price = trim($_POST['price'] ?? 0);
    $image = trim($_POST['image'] ?? 'default.jpg');
    $description = trim($_POST['description'] ?? '');

    // التحقق من وجود الحقول الإلزامية (الاسم والسعر)
    if (!empty($name) && !empty($price)) {
        try {
            // إعداد استعلام إضافة بيانات جديدة للجدول
            $sql = "INSERT INTO products (name, price, image, description) VALUES (:name, :price, :image, :description)";
            $stmt = $pdo->prepare($sql);
            
            // تنفيذ الاستعلام مع ربط المتغيرات بالقيم المدخلة
            $stmt->execute([
                ':name'        => $name,
                ':price'       => $price,
                ':image'       => $image,
                ':description' => $description
            ]);

            echo "تم إضافة منتج المجوهرات بنجاح!";
        } catch (PDOException $e) {
            // عرض رسالة خطأ في حال فشلت عملية الإضافة
            echo "حدث خطأ أثناء عملية الإضافة: " . $e->getMessage();
        }
    } else {
        // رسالة تنبيه إذا كانت البيانات ناقصة
        echo "تنبيه: يرجى ملء الحقول الإلزامية (الاسم والسعر).";
    }
} else {
    // رسالة خطأ إذا حاول أحد الوصول لهذا الملف بغير طريقة POST
    echo "طلب غير مسموح به. يجب استخدام طريقة POST.";
}
?>