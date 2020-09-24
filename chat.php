<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="resources/css/main.css">
    <!--<link rel="stylesheet" href="resources/css/chat.css">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
    <div class="wrapper">
        <?php include "header.php" ?>
        <div class="container">
            <div class="form-chat">
                <form method="post"><br>
                    To: <?php echo $_SESSION['to_username'] ?><br>
                    Message: <input type="text" name="message" size="10"><br>
                    <input type="submit" value="Send"><br>
                </form>
            </div>
            <div class="chat-data">
                <?php
                ?>
            </div>
        </div>
        <footer class="page-footer">

        </footer>
    </div>
</body>

</html>