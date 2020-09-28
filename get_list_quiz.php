<?php include "connect_server.php";
include "get_info_user_login.php";

$sql = "SELECT * FROM quiz";
$result = $conn->query($sql);
?>
<!--Nếu là giáo viên, cho thêm phần upload thêm bài tập-->
<?php if ($id == 1) { ?>
    <?php if ($id == 1) { ?>
        <div class="upload-quiz">
            <h1>Thêm một câu đố</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="file_quiz" value=""></br>
                <input type="text" name="hint" placeholder="Gợi ý">
                <input type="submit" name="up" value="Tải lên">
            </form>
            <?php include "upload_quiz.php"; ?>
        </div>
    <?php } ?>
<?php } ?>
<h1 style="text-align: center">Danh sách câu đố</h1>
<table class="table-quiz">
    <tr>
        <th> Câu đố</th>
        <th> Gợi ý</th>
        <th>Giải đố</th>
    </tr>
    <?php
    while ($list_quiz = $result->fetch_assoc()) {
        $id_quiz = $list_quiz['id'];
        $link_file = $list_quiz['linkfiletxt'];
        $name_file = explode("/", $link_file)[3];
        $key = explode(".",$name_file)[0];

        $hint = $list_quiz['hint'];
        ?>
        <!--        Hiện các câu đố -->
        <div class="show-quiz">
            <tr>
                <td><?php echo $id_quiz ?></td>
                <td><?php echo $hint ?></td>
                <td>
                    <form action="check_answer_quiz.php" method="post">
                        <input name="input_answer_quiz" placeholder="Nhập đáp án bạn đoán">
                        <button name="check_answer_quiz" value="<?php echo $link_file?>">Kiểm tra</button>
                    </form>
                </td>
            </tr>
        </div>
    <?php } ?>
