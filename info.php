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
        <?php include "header.php" ?>
        <div class="container">
            <div class="info">
                <h1 class="header-info">Danh sách lớp học</h1>
                <Ul class="list-std">
                    <?php include "connect_server.php";
                    $sql = "SELECT * FROM info";
                    $result = $conn->query($sql);
                    ?>
                    <?php
                    while ($rows = $result->fetch_assoc()) {
                    ?>
                        <li><a href=<?php echo 'info.php?detail_info=' . $rows['username'] ?>><?php echo $rows['name']; ?></a></li>
                    <?php } ?>
                </ul>
                <?php if ($id == 1) { ?>
                    <a href=<?php echo 'info.php?add' ?>><button>Thêm học viên</button>
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
                    if (isset($_GET['add'])) {
                        $_SESSION['username_edit'] = '';
                        header("Location: form_edit_info.php");
                    }
                    ?>
            </div>
        </div>
        <footer class="page-footer">

        </footer>
    </div>
</body>

</html>