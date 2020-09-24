<?php include "connect_server.php";
include "get_info_user_login.php";
$exercise_info = $_SESSION['exercise_info'];

$get_list_solution = "SELECT solution FROM document WHERE exercise = '$exercise_info'";
$rs = $conn->query($get_list_solution);
while ($list_solution = $rs->fetch_assoc()) {
    $solution_info = $list_solution['solution'];
    if ($solution_info != "") {
        $solution = explode(";", $solution_info);
        $username_solution = $solution[0];
        $link_file_solution = $solution[1];
        if ($id == 1) {
?>
            <div class="show-solution">
                <?php echo $username_solution ?>: <a href='<?php echo $link_file_solution ?>' download>Tải về</a>
            </div>
            <?php }
        else {
            if ($username_solution == $username) {
            ?>
                <div class="show-solution">
                    Đã hoàn thành: <a href='<?php echo $link_file_solution ?>' download>Tải về</a>
                </div>
            <?php } ?>
        <?php } ?>
    <?php } ?>
<?php } ?>