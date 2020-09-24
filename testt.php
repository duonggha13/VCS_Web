<form action="" method="post">
     Username: <input type="text" name="user"><br>
     Password: <input type="password" name="password"><br>
     <button type="submit" name="submit" value="hehihihehe">Gửi</button>
</form>

Username vừa nhập: <?php if(isset($_POST["submit"])) {
    echo $_POST["user"];
    echo $_POST["password"];
    echo $_POST["submit"];
    } ?>