<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exception</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/logo.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<style>
    body{
        background-image: url("images/welcome.jpg");
        padding: 0px;
        margin: 0px;
    }
    @keyframes fade-in {
        0% {opacity: 0;}/*初始状态 透明度为0*/
        30% {opacity: 0;}/*过渡状态 透明度为0*/
        100% {opacity: 1;}/*结束状态 透明度为1*/
    }
    @-webkit-keyframes fade-in {/*针对webkit内核*/
        0% {opacity: 0;}
        30% {opacity: 0;}
        100% {opacity: 1;}
    }
    #wrapper {
        animation: fade-in;/*动画名称*/
        animation-duration: 2s;/*动画持续时间*/
        -webkit-animation:fade-in 2s;/*针对webkit内核*/
    }
</style>
<body>
<div class="container" id="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="background: transparent">
                        <img src="images/logo.png" style="width: 300px;" class="center-block">
                </div>
            </div>
        </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="text-align: center;">Exception</h1>
                <h2 style="text-align: center;">学生管理系统</h2>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top:20px;">
        <div class="row">
            <div class="col-lg-offset-4 col-lg-4">
                <button type="button" class="center-block btn btn-lg btn-primary" style="opacity: 0.85;" data-toggle="modal" data-target="#loginmodal">点击进入网页版</button>
                &nbsp;
                <button type="button" class="center-block btn btn-lg btn-primary" style="opacity: 0.85;"><a href="file/student.rar" download="Exception桌面客户端">点击下载客户端</a></button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="loginmodal" tabindex="-1" name="loginmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">登陆</h1>
                </div>
                <div class="modal-body">
                    <form name="loginform" id="loginform" method="post" class="form-horizontal" action="" target="formsubmit">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="username">用户名</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="username" name="username" placeholder="请输入账号" autofocus="autofocus">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="password">密码</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" placeholder="请输入密码">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary center-block btn-lg">登陆</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <iframe name="formsubmit" style="display: none;"></iframe>

</div>
</body>
</html>

<?php
session_start();
include("Database/connect.php");
@$username=htmlspecialchars($_POST['username']);
@$password=md5($_POST['password']);
if($_POST)
{
    $search="select * from admin where username='$username' and password='$password'";
    $sql=$connect -> query($search);

    if(trim($username)==null || trim($password)==null)
    {
        echo "<script>alert('请输入账号密码！');</script>";
        exit;
    }

    if($check=$sql->fetch_array())
    {
        $_SESSION['login']=$username;
        echo "<script>alert('$username,欢迎进入管理系统');parent.location.href='View/manage.php';</script>";
        exit;
    }
    else
    {
        exit("<script>alert('账号或密码错误！');</script>");
    }
}
?>