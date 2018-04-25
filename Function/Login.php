<?php
session_start();
include("../Database/connect.php");
header("Content-Type:text/html; charset=UTF-8");
@$username=htmlspecialchars($_POST['username']);
@$password=md5($_POST['password']);

$search="select * from admin where username='$username' and password='$password'";
$sql=$connect -> query($search);

if($check=$sql->fetch_array())
{
$_SESSION['login']=$username;
echo "<script>alert('$username,欢迎进入管理系统');parent.location.href='../View/manage.php';</script>";
exit;
}
else
{
    exit("<script>alert('账号或密码错误！');history.back();</script>");
}


?>