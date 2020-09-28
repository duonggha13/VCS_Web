<!--Kiểm tra người đăng nhập là giáo viên hay sinh viên, lấy ra và lưu thông tin của người dùng đó-->
<?php include "connect_server.php";

session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

$username = $_POST['username'];
$password = $_POST['password'];

$result = $conn->query("SELECT * FROM info WHERE username = '$username' and password = '$password'");
$rows = $result->fetch_assoc();

$_SESSION['name'] = $rows['name'];
$_SESSION['email'] = $rows['email'];
$_SESSION['phone_number'] = $rows['phone_number'];
$_SESSION['id'] = $rows['id'];

$id_checked = $rows['id'];

$count = mysqli_num_rows($result);

if ($count == 1) {
    header('Location: home.php');
    exit();
} else {
    echo "<SCRIPT> //not showing me this
        alert('Sai tên đăng nhập hoặc mật khẩu, vui lòng thử lại')
        window.location.replace('login.php');
    </SCRIPT>";
}
