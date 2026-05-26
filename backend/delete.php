<?php
require_once '../database/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        
        $stmt->execute([':id' => $id]);

        echo "تم حذف المنتج بنجاح من قاعدة البيانات!";
    } catch (PDOException $e) {
        echo "حدث خطأ أثناء محاولة حذف المنتج: " . $e->getMessage();
    }
} else {
    echo "خطأ: لم يتم تحديد رقم المنتج (ID) المراد حذفه.";
}
?>
