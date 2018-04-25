<?php
session_start();
header("Content-Type:text/html; charset=UTF-8");
if(@$_GET['action']=="logout")
{
    unset($_SESSION['login']);
    echo "<script>alert('成功退出系统！');parent.location.href='../index.php'</script>";
    exit;
}
?>