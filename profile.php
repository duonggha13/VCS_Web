<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="resources/css/page.css">
    <link rel="stylesheet" href="resources/css/profile.css"
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
<div class="wrapper">
    <?php include "header.php" ?>
    <div class="container">
        <!--   Lấy thông tin chi tiết của cá nhân, ở đây có link a để liên kết với trang sửa thông tin cá nhân-->
        <div class="profile">
            <div class="profile-name">
                <h1><i class="far fa-user"></i>     <?php echo $name ?></h1>
            </div>
            <?php
            $email = ($_SESSION['email'] == null) ? " " : $_SESSION['email'];
            $phone_number = ($_SESSION['phone_number'] == null) ? " " : $_SESSION['phone_number'];
            ?>
            <div class="profile-box"
            <span class='list-info'>Tên đăng nhập: <?php echo $username ?></span><br/>
            <span class='list-info'>Họ tên: <?php echo $name ?></span><br/>
            <span class='list-info'>Email: <?php echo $email ?></span><br/>
            <span class='list-info'>Số điện thoại: <?php echo $phone_number ?></span><br/>
        </div>
        <?php
        $_SESSION['username_edit'] = $_SESSION['username'];
        ?>

        <a class="edit-prf" href="form_edit_info.php">Chỉnh sửa thông tin</a>
    </div>

</div>
<footer>
    <?php include "footer.php";?>
</footer>
</div>
</body>

</html>