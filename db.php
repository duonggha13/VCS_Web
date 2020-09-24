<?php
$servername = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbName = 'info';

$userName = $_POST["userName"];
$password = $_POST["password"];

$conn = new mysqli($servername, $dbuser, $dbpass, $dbName);

$result_checked = $conn -> query("SELECT * FROM student WHERE userName = '$userName' and password = '$password'");
$count = mysqli_num_rows($result_checked);
if ($count == 0) {
    echo "Login fail";
}
else echo "Login successfully";

?>