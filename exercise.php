<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="resources/css/page.css">
    <link rel="stylesheet" href="resources/css/exercise.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
<div class="wrapper">
    <?php include "header.php" ?>
    <div class="container">
        <div class="list-exercise">
            <h1>Bài tập</h1>
            <?php include "get_list_exercise.php";
            ?>
        </div>
        <div class="show-solution">
            <h1>Bài giải</h1>
            <?php include "show_solution.php";
            ?>
        </div>
    </div>
    <footer>
        <?php include "footer.php";?>
    </footer>
</div>
</body>

</html>