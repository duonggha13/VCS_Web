<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="resources/css/page.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
<div class="wrapper">
    <header class="page-header">
        <div>
            <a href="login.php"><i class="fas fa-book-open"></i> Classroom</a>
        </div>
        <div class="exercise">
            <a href="exercise.php">Bài tập</a>
        </div>
        <!--        Form đăng nhập vào wensite-->
        <div class="login-form">
            <form action="check_login.php" method="POST">
                <input id="input-sername" type="text" name="username" placeholder="Tên đăng nhập">
                <input id="input-password" type="password" name="password" placeholder="Mật khẩu">
                <button type="submit">Đăng nhập</button>
            </form>
        </div>
    </header>
    <div class="container">
        <img class="img-home" src="resources/login.jpg" style="width: 100%; height: 100%;object-fit: cover;">
    </div>
    <footer>
        <?php include "footer.php";?>
    </footer>
</div>
</body>

</html>