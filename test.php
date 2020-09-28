<?php
$myfilename = "/resources/document/quiz/Sang thu.txt";
if(file_exists($myfilename)){
    echo file_get_contents($myfilename);
}
?>
