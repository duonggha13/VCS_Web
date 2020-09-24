<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="resources/css/main.css">
    <link rel="stylesheet" href="resources/css/info.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>

    <div class="wrapper">
        <?php include "header.php";
        include "connect_server.php";
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
                <table class="table-info">
                    <tr>
                        <th> Họ tên </th>
                        <th> Email </th>
                        <th> Số điện thoại </th>
                    </tr>
                    <tr>
                        <td><?php echo  $detail_name ?></td>
                        <td><?php echo $detail_email ?></td>
                        <td><?php echo $detail_phone_number ?></td>
                        <td>
                            <form action="" method="POST"><input type="submit" name="chat" value="Nhắn tin"></form>
                        </td>
                        <?php if ($id == 1) { ?>
                            <td>
                                <form action="" method="POST"><input type="submit" name="edit" value="Sửa thông tin"></form>
                            </td>
                            <td>
                                <form action="" method="POST"><input type="submit" name="dele" value="Xóa"></form>
                            </td>
                        <?php } ?>
                    </tr>
                </table>
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
        <footer class="page-footer">

        </footer>
    </div>
</body>

</html>