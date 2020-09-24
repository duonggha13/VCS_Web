<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="resources/css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
    <div class="wrapper">
        <header class="page-header">
            <div>
                <i class="fas fa-book-open"></i>
                <a href="login.php">Classroom</a>
            </div>
            <div class="exercise">
                <a href="exercise.php">Bài tập</a>
            </div>
            <div class="login-form">
                <form action="check_login.php" method="POST">
                    <input id="input-sername" type="text" name="username" placeholder="Tên đăng nhập">
                    <input id="input-password" type="password" name="password" placeholder="Mật khẩu">
                    <button type="submit">Đăng nhập</button>
                </form>
            </div>
        </header>
        <div class="container">

        </div>
        <footer class="footer">

        </footer>
    </div>
</body>

</html>