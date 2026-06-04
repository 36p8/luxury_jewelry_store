<?php
// استدعاء ملف الاتصال بقاعدة البيانات
require_once '../database/db.php';

// التحقق من وجود معرف المنتج (ID) في الرابط
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        // تجهيز استعلام الحذف باستخدام الـ ID
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        
        // تنفيذ عملية الحذف
        $stmt->execute([':id' => $id]);

        echo "تم حذف المنتج بنجاح من قاعدة البيانات!";
    } catch (PDOException $e) {
        // في حال حدوث أي مشكلة أثناء الحذف، نطبع رسالة الخطأ
        echo "حدث خطأ أثناء محاولة حذف المنتج: " . $e->getMessage();
    }
} else {
    // رسالة تنبيه إذا لم يتم إرسال ID صحيح
    echo "خطأ: لم يتم تحديد رقم المنتج (ID) المراد حذفه.";
}
?>
