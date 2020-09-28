<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="resources/css/page.css">
    <link rel="stylesheet" href="resources/css/edit_prf.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
<div class="wrapper">
    <?php include "header.php";
    include "connect_server.php";
    //    Lấy username cuura người được sửa thông tin
    $username_edit = $_SESSION['username_edit'];
    $prf_edit = $conn->query("SELECT * FROM info WHERE username='$username_edit'");
    //    Lấy các thông tin khác của người sửa thông tin
    if ($row = $prf_edit->fetch_assoc()) {
        $_SESSION['password_edit'] = $row['password'];
        $name_edit = $row['name'];
        $email_edit = $row['email'];
        $phone_number_edit = $row['phone_number'];
        $id_edit = $row['id'];
    } else {
        $name_edit = '';
        $email_edit = '';
        $phone_number_edit = '';
        $id_edit = 0;
    }
    ?>
    <!--    Form để chỉnh sửa các thông tin người dùng, gửi các dữ liệu đến file edit_profile để xử lý-->
    <div class="container">
        <div class="form-edit-profile">
            <form action="edit_profile.php" method="POST">
                <div class="input-group">
                    <span class="label-input">Tên đăng nhập</span></br>
                    <input type="text" name="username" value=<?php echo $username_edit;
                    if ($id == 0) echo " readonly" ?>>
                </div>
                <div class="input-group">
                    <span class="label-input">Mật khẩu</span></br>
                    <input type="password" name="password" placeholder="Mật khẩu mới">
                </div>
                <div class="input-group">
                    <span class="label-input">Họ tên</span></br>
                    <input type="text" name="name"
                           value='<?php echo $name_edit ?>' <?php if ($id == 0) echo " readonly" ?>></br>
                </div>
                <div class="input-group">
                    <span class="label-input">Email</span></br>
                    <input type="text" name="email" value=<?php echo $email_edit ?>>
                </div>
                <div class="input-group">
                    <span class="label-input">Số điện thoại</span></br>
                    <input type="text" name="phone_number" value=<?php echo $phone_number_edit ?>>
                </div>
                <button type="submit" name="submit-edit">Ghi nhận</button>
            </form>
        </div>
    </div>
    <footer>
        <?php include "footer.php";?>
    </footer>
</div>
</body>

</html>