<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="resources/css/chat.css">
    <link rel="stylesheet" href="resources/css/page.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
<div class="wrapper">
    <!--    include file header.php để tạo phần header của body trang web-->
    <?php include "header.php";
    //    Lấy username của người nhận và người gửi
    $from_username = $_SESSION['username'];
    $to_username = ($_SESSION['to_username'] == "") ? $_SESSION['username'] : $_SESSION['to_username'];
    ?>
    <div class="container">
        <h1 class="header-message" style="text-align: center">To: <?php echo $to_username ?></h1>
        <div class="user_and_chatting" style="display: flex">
            <div class="list_user_chat" style="width: 20%">
                <?php include "connect_server.php";
                // Lấy danh sách người dùng cho là danh sách nhắn tin
                $sql_get_list_user_chat = "SELECT `username`
                                    FROM `info`";
                $list_user_chat = $conn->query($sql_get_list_user_chat);
                while ($user_chat = $list_user_chat->fetch_assoc()) { ?>
                    <div class="user_chat">
                        <a class="user_chat" href=<?php echo 'chat.php?user_chat=' . $user_chat['username'] ?>><?php echo $user_chat['username']; ?></a>
                    </div>
                <?php } ?>
            </div>
            <?php
            //  Lấy dữ liệu username người nhận là username của người chat khi được nhấn vào
            if (isset($_GET['user_chat'])) {
                $_SESSION['to_username'] = $_GET['user_chat'];
                header("Location: chat.php");
            }
            ?>
            <div style="width: 50%">
                <div class="box_chatting" style="width: 100%; height: 50%">

                    <!--Xử lý việc gửi tin nhắn-->
                    <?php include "connect_server.php";
                    if (isset($_POST['send_message']) && ($_POST['message'] != "")) {
                        $message = $_POST['message'];
                        $time = date('Y-m-d H:i:s');
                        $sql_save_message = "INSERT INTO `messages`(`from_username`, `to_username`, `message`, `date_time_msg`) VALUES ('$from_username','$to_username','$message','$time')";
                        $conn->query($sql_save_message);
                        unset($_POST);
                    }
                    ?>
                    <!--Lấy dữ liệu các tin nhắn đã nhắn giữa 2 người-->

                    <div class="chat-data" style="overflow-y: scroll; height: 400px">
                        <?php
                        $get_message_send_receive = "SELECT `id`,`from_username`, `message`, `date_time_msg`
                                        FROM `messages`
                                        WHERE (`from_username`='$from_username' and `to_username`='$to_username') or (`from_username`='$to_username' and `to_username`='$from_username')";
                        $list_message_send_receive = $conn->query($get_message_send_receive); ?>

                        <div class="form-message">
                            <?php
                            while ($message_send_receive = $list_message_send_receive->fetch_assoc()) {
                                $id_message = $message_send_receive['id'];
                                $username_send = $message_send_receive['from_username'];
                                $message = $message_send_receive['message'];
                                $time = $message_send_receive['date_time_msg'];
                                ?>
                                <!--Thêm nút sửa xóa với các tin nhắn bên gửi-->

                                <form action="" method="post">
                                    <span style="background-color: aquamarine"> <?php echo $username_send ?></span></br>
                                    <span class="message"> <?php echo $message ?></span>
                                    <?php if ($username_send == $from_username) { ?>
                                        <button id="edit_message" value="<?php echo $id_message ?>">
                                            <i class="far fa-edit"></i>
                                        </button>
                                        <button name="delete_message" value="<?php echo $id_message ?>"><i
                                                    class="far fa-trash-alt"></i>
                                        </button>
                                    <?php } ?>
                                </form>
                                <?php
                                if (isset($_POST['edit_message'])) {
                                    //
                                }
                                if (isset($_POST['delete_message'])) {
                                    $id_delete = $_POST['delete_message'];
                                    $conn->query("DELETE FROM messages WHERE id='$id_delete'");
                                    header("Location: chat.php");
                                }
                                ?>
                            <?php } ?>
                        </div>
                    </div>

                <div class="form-chat" style="width: 100%">
                    <form method="post">
                        <input type="text" name="message" size="10" style="width: 90%">
                        <button name="send_message"><i class="far fa-paper-plane"></i></button>
                    </form>
                </div>
                </div>
            </div>
            <div style="width: 20%"></div>
        </div>
    </div>
    <footer>
        <?php include "footer.php";?>
    </footer>
</div>
</body>

</html>