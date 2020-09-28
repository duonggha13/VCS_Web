<?php
if (isset($_POST['check_answer_quiz'])) {
    $link_file = $_POST['check_answer_quiz'];
    $name_file = explode("/", $link_file)[3];
    $key = explode(".",$name_file)[0];
    if (strtolower($_POST['input_answer_quiz']) == strtolower($key)) {
        echo "Bạn trả lời đúng rồi!"."</br>";
        echo "</br>";
        $read = file($link_file);
        foreach ($read as $line) {
            echo $line ."</br>";
        }
    } else echo "Sai rồi, bạn trả lời lại nhé";
    echo "</br>";
    echo "<a href='quiz.php'>Quay lại</a>";
}
?>