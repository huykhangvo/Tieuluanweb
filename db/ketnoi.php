<?php
$username = "root"; // Khai báo username
$password = "mysql";      // Khai báo password
$server   = "localhost";   // Khai báo server
$dbname   = "ss";      // Khai báo database

// Kết nối database tintuc
$con = mysqli_connect($server, $username, $password, $dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if (!$con) {
    die("Không kết nối :" . mysqli_connect_error());
    exit();
}
    //echo "Kết nối thành công sẽ tiếp tục dòng code bên dưới đây."


//ghi chú
    //tbl_category

?>



