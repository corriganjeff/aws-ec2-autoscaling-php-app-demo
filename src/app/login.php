<?php
session_start();

if (isset($_POST['login'])) {
    $uname = "iamjeffc@authz.limited";
    $passwd = "OctankDemo";
    if ($_POST['username'] == $uname && $_POST['password'] == $passwd) {
        $_SESSION['user'] = $_POST['username'];
        header("location:welcome.php");
    } else {
        header("location:index.php");
    }
} else {
    header("location:index.php");
}
?>
