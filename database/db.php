<?php
/* صندوق إعدادات الاتصال بقاعدة البيانات */
$host = "localhost";
$dbname = "jewelry_store";
$username = "root";
$password = "";   

try {
    /* صندوق إنشاء كائن الاتصال */
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    
    /* صندوق ضبط خصائص معالجة الأخطاء */
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    /* صندوق ضبط وضع جلب البيانات الافتراضي */
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    /* صندوق التعامل مع فشل الاتصال */
    die("فشل الاتصال بقاعدة البيانات: " . $e->getMessage());
}
?>