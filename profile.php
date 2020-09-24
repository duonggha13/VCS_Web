<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="resources/css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
    <div class="wrapper">
        <?php include "header.php" ?>
        <div class="container">
            <span class="profile-name">
                <h1><?php echo $name ?></h1>
            </span>
            <div class="profile">
                <?php
                $email = ($_SESSION['email'] == null) ? " " : $_SESSION['email'];
                $phone_number = ($_SESSION['phone_number'] == null) ? " " : $_SESSION['phone_number'];
                echo "<span class='list-info'>Tên đăng nhập: $username</span><br/>";
                echo "<span class='list-info'>Họ tên: $name<br/>";
                echo "<span class='list-info'>Email: $email<br/>";
                echo "<span class='list-info'>Số điện thoại: $phone_number<br/>";

                $_SESSION['username_edit'] = $_SESSION['username'];
                ?>
                <a href="form_edit_info.php">Sửa thông tin</a>
            </div>

        </div>
        <footer class="page-footer">

        </footer>
    </div>
</body>

</html>