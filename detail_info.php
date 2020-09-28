<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="resources/css/page.css">
    <link rel="stylesheet" href="resources/css/detail_if.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>

<div class="wrapper">
    <!--Tạo phần header của body trang web-->
    <?php include "header.php";
    include "connect_server.php";
    //Lấy username của 1 người dùng, truy vấn đến cơ sở dữ liệu lấy các thông tin khác
    $detail_username = $_SESSION['detail_username'];
    $sql = "SELECT * FROM info WHERE username = '$detail_username'";
    $result = $conn->query($sql);
    if ($rows = $result->fetch_assoc()) {
        $detail_name = $rows['name'];
        $detail_email = $rows['email'];
        $detail_phone_number = $rows['phone_number'];
    }

    ?>
    <div class="container">
        <div class="info">
            <h1 class="header-info-username"><?php echo $detail_name ?></h1>
            <!--Bảng in ra chi tiết các thông tin người dùng-->
            <table class="table-info">
                <tr>
                    <th> Họ tên</th>
                    <th> Email</th>
                    <th> Số điện thoại</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td><?php echo $detail_name ?></td>
                    <td><?php echo $detail_email ?></td>
                    <td><?php echo $detail_phone_number ?></td>
                    <td>
                        <form action="" method="POST"><button name="chat" title="Nhắn tin"><i class="fas fa-comment-dots"></i></button></form>
                    </td>
                    <?php if ($id == 1) { ?>
                        <td>
                            <form action="" method="POST"><button name="edit" title="Sửa thông tin"><i class="fas fa-user-edit"></i></button></form>
                        </td>
                        <td>
                            <form action="" method="POST"><button name="dele" title="Xóa tài khoản"><i class="far fa-trash-alt"></i></button></form>
                        </td>
                    <?php } else { ?>
                    <td></td>
                    <td></td>
                    <?php } ?>
                </tr>
            </table>
            <!--Xử lý các phần nhắn tin và chỉnh sửa, xóa thông tin người dùng nếu là giáo viên-->
            <?php
            if (isset($_POST['chat'])) {
                $_SESSION['to_username'] = $detail_username;
                header("Location: chat.php");
            }
            if (isset($_POST['edit'])) {
                $_SESSION['username_edit'] = $detail_username;
                header("Location: form_edit_info.php");
            }
            if (isset($_POST['dele'])) {
                $conn->query("DELETE FROM info WHERE username='$detail_username'");
                header("Location: info.php");
            }
            ?>
        </div>
    </div>
    <footer>
        <?php include "footer.php";?>
    </footer>
</div>
</body>

</html>