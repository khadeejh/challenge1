<?php
include 'loginConncation.php'; 

// if (!$conn) {
//     die('فشل الاتصال بقاعدة البيانات.');
// }

// // Define the SQL query
$sql = "SELECT admins.admin_id, admins.username, admins.password,admins.created_at
        FROM admins
        JOIN admin_files admin_id =  admins.admin_id";

// $result = $conn->query($sql);

// if ($result === false) {
//     die('خطأ في الاستعلام: ' . $conn->error);
// }

// Continue processing the result if needed
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>الدخول</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container log-in-container">
            <form id="signin-form" action="" method="POST">
                <h1>سجل دخول لحسابك</h1>
                <div class="input-group">
                    <label for="signin-email">البريد الإلكتروني</label>
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" id="signin-email" name="signin-email" placeholder="mohammed@gmail.com:مثال " required />
                    <span class="error-message" id="signin-email-error"></span>
                </div>
                <div class="input-group">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <label for="signin-password">كلمة السر</label>
                    <input type="password" id="signin-password" name="signin-password" placeholder="**************" required />
                    <span class="error-message" id="signin-password-error"></span>
                </div>
                <a href="forgot-password.html">هل نسيت كلمة المرور ؟</a>
                <button type="submit" id="login-button">تسجيل دخول</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h3>مرحباً بكم في جمعية عون التقنية</h3>
                    <button class="ghost" id="signInButton">تسجيل دخول</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h3>مرحباً بكم في جمعية عون التقنية</h3>
                </div>
            </div>
        </div>
    </div>
    <?php
    //     if ($result->num_rows > 0) {
    //             echo $result->num_rows;
    //         while($row = $result->fetch_assoc()) {
    //             echo "<tr>
    //                     <td>" . $row["username"] . "</td>
    //                      <td>" . $row["password_hash"] . "</td>
                       
    //                   </tr>";
    //         }
    //     } else {
    //         echo "لا توجد بيانات";
    //     }
    //    $conn->close();
        ?>
</body>

</html>
