<!--Xử lý dữ liệu khi giáo viên upload quiz-->
<?php include "connect_server.php";
if (isset($_POST['hint']) && isset($_POST['up']) && isset($_FILES['file_quiz'])) {
    if ($_FILES['file_quiz']['error'] > 0) {
        echo "Upload lỗi rồi!";
    } else {
        $hint = $_POST['hint'];
        $link_upload = $_FILES['file_quiz']['tmp_name'];
        $link_save = 'resources/document/quiz/' . $_FILES['file_quiz']['name'];
        move_uploaded_file($link_upload, $link_save);
        $sql_insert = "INSERT INTO `quiz`(`linkfiletxt`, `hint`) VALUES ('$link_save','$hint')";
        $conn->query($sql_insert);
        header("Location: quiz.php");
    }
}
?>