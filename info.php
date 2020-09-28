<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="resources/css/page.css">
    <link rel="stylesheet" href="resources/css/list_std.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
<div class="wrapper">
    <?php include "header.php" ?>
    <div class="container">
        <div class="info">
            <h1 class="header-info">Danh sách lớp học</h1>
            <div class="box-list-std">
                <div></div>
                <div style="width: 30%" class="list-std">
                    <ul>
                        <?php include "connect_server.php";
                        $sql = "SELECT * FROM info";
                        $result = $conn->query($sql);
                        ?>
                        <?php
                        //  Truy vấn dữ liệu tất cả người dùng, in ra danh sách lớp học
                        while ($rows = $result->fetch_assoc()) {
                            ?>
                            <li>
                                <a class="std" href=<?php echo 'info.php?detail_info=' . $rows['username'] ?>><?php echo $rows['name']; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div></div>
            </div>
            <!--    Nếu là giáo viên thêm nút "thêm học viên"-->
            <?php if ($id == 1) { ?>
            <a href=<?php echo 'info.php?add' ?>>
                <button class="add-std">Thêm học viên</button>
                <?php } ?>
                <?php
                if (isset($_GET['detail_info'])) {
                    if ($_GET['detail_info'] == $_SESSION['username']) {
                        header("Location: profile.php");
                    } else {
                        $_SESSION['detail_username'] = $_GET['detail_info'];
                        header("Location: detail_info.php");
                    }
                }
                //  Nếu ấn nút thêm học viên, trang sẽ điều hướng đến trang form sửa thông tin nhưng với username rỗng
                if (isset($_GET['add'])) {
                    $_SESSION['username_edit'] = '';
                    header("Location: form_edit_info.php");
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