<?php include "connect_server.php";
session_start();
$username = $_SESSION['username_edit'];
$username_new = $_POST['username'];
$password_new = $_POST['password'];
$name_new = $_POST['name'];
$email_new = $_POST['email'];
$phone_number_new = $_POST['phone_number'];
$id = $_SESSION['id_edit'];
if ($username == $username_new) {
    if ($_POST['password'] != "") {
        $edited = $conn->query("UPDATE info SET password='$password_new', name='$name_new', email='$email_new', phone_number='$phone_number_new' WHERE username='$username'");
    } else $edited = $conn->query("UPDATE info SET name='$name_new', email='$email_new', phone_number='$phone_number_new' WHERE username='$username'");
    }
else {
    if ($_POST['password'] == "") $password_new = $_SESSION['password_edit'];
    $edited = $conn->query("INSERT INTO info (`username`, `password`, `name`, `email`, `phone_number`, `id`) VALUES ('$username_new', '$password_new', '$name_new', '$email_new', '$phone_number_new', '0')");
    $conn->query("DELETE FROM info WHERE username='$username'");
}
echo '<script>alert("Thay đổi thông tin thành công!")</script>';
header("Location: info.php");
?>