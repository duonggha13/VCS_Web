<!--Lấy các thông tin của người đăng nhập-->
<?php
if (!isset($_SESSION)) {
    session_start();
}
$username = $_SESSION['username'];
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$phone_number = $_SESSION['phone_number'];
$id = $_SESSION['id'];
?>