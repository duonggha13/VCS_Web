<?php include "connect_server.php";
include "get_info_user_login.php";
$get_list_exercise = "SELECT DISTINCT exercise FROM document";
$result = $conn->query($get_list_exercise);
while ($list_exercise = $result->fetch_assoc()) {
    $exercise_info = $list_exercise['exercise'];
    $exercise = explode(";", $exercise_info);
    $topic = $exercise[0];
    $link_file = $exercise[1];
?>
    <div class="topic-solution">
        <div class="topic-name"><?php echo $topic ?>
        </div>
        <div class="list-solution">
            <?php 
            $_SESSION['exercise_info'] = $exercise_info;
            include "get_list_solution.php" ?>
        </div>
    <?php } ?>