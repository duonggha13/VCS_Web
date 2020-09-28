<!--Phần header của body trang web-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="resources/css/page.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
<?php include "get_info_user_login.php";
$_SESSION['id_edit'] = $id; ?>
<header class="page-header">

    <div>
        <a href="home.php"><i class="fas fa-book-open"></i> Classroom</a></div>
    <div class="exercise">
        <a href="exercise.php">Bài tập</a>
    </div>
    <div class="quiz">
        <a href="quiz.php">Giải đố</a>
    </div>
    <div class="dropdown">
            <span class="username_header">
                <?php echo $name ?>
                <i class="fas fa-caret-down"></i>
            </span>
        <div class="dropdown-content">
            <a href="info.php">Danh sách lớp học</a></br>
            <a href="profile.php">Thông tin cá nhân</a></br>
            <a href="chat.php">Tin nhắn</a></br>
            <a href="login.php">Đăng xuất</a>
        </div>
    </div>
</header>
</body>

</html>