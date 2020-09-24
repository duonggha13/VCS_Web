<?php include "connect_server.php";
if (isset($_POST['topic']) && isset($_POST['up']) && isset($_FILES['file_exercise'])) {
    if ($_FILES['file_exercise']['error'] > 0) echo "Upload lỗi rồi!";
    else {
        $link_upload = $_FILES['file_exercise']['tmp_name'];
        $link_save = 'resources/document/exercise/' . $_FILES['file_exercise']['name'];
        move_uploaded_file($link_upload, $link_save);
        $exercise_info = $_POST['topic'] . ';' . $link_save;
        $sql_insert = "INSERT INTO `document`(`exercise`, `solution`) VALUES ('$exercise_info','')";
        $conn->query($sql_insert);
        echo "upload thành công <br/>";
        echo $_POST['topic'] . "<br/>";
        echo "Dường dẫn: $link_save <br>";
        echo 'Loại file: ' . $_FILES['file_exercise']['type'] . '<br>';
        echo 'Dung lượng: ' . ((int)$_FILES['file_exercise']['size'] / 1024) . 'KB';
        header("Location: exercise.php");
    }
}
?>