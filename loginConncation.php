<?php 

// $hostname = "localhost:8888";
// $username = "root";
// $password = "root";
// $database = "financial";
$port = 8889;


// Create connection
$conn = mysqli_connect('localhost', 'root', 'root', 'financial');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// التحقق من وجود البيانات 
if (isset($_POST['signin-email']) && isset($_POST['signin-password'])) {
    $userName = $_POST['signin-email'];
    $password = $_POST['signin-password'];
 // تجزئة كلمة المرور
 $passwordHash = password_hash($password, PASSWORD_DEFAULT);

 // إدراج البيانات في قاعدة البيانات
 $sql = "INSERT INTO admins (username, password_hash) VALUES ('$userName', '$passwordHash')";

 if ($conn->query($sql) === TRUE) {
    //  echo "تم التسجيل بنجاح";
 } else {
     echo "خطأ: " . $sql . "<br>" . $conn->error;
 }
} else {
//  echo "البيانات غير مكتملة";
}
// إغلاق الاتصال
// $conn->close();
?>