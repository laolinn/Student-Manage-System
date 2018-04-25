<?php
session_start();
header("Content-Type:text/html; charset=UTF-8");
include("../Database/connect.php");
if(!isset($_SESSION['login']))
{
    echo "<script>alert('非法登陆');parent.location.href='../index.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="shortcut icon"  type="images/x-icon" href="../images/small_logo.ico">
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/logo.css">
    <style>
        .navbar-nav li:hover{
            background:#D3D3D3;
        }
    </style>
    <script>
        function checkadd(){
            if(add.addname.value=="")
            {
                alert('请输入名称');
                return false;
            }
            else
            {
                if(add.addnumber.value=="")
                {
                    alert('请输入学号');
                    return false;
                }
                else
                {
                    if(add.addaddress.value=="")
                    {
                        alert('请输入地址');
                        return false;
                    }
                    else
                    {
                        if(add.addgrade.value=="")
                        {
                            alert('请输入成绩');
                            return false;
                        }
                        else
                        {
                            return true;
                        }
                    }
                }
            }
        }
    </script>
</head>
<body>
<nav class="nav navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Exception</a>
        </div>
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="manage.php">查询成绩</a></li>
                <li><a data-toggle="modal" data-target="#addinfo" href="" onclick="return false;">添加学生信息</a></li>
                <li><a href="../Function/exit.php?action=logout">退出系统</a></li>
            </ul>
        </div>
    </div>
</nav>
<header class="main-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="../images/logo.png" style="width:200px">
            </div>
        </div>
    </div>
</header>
<div class="modal fade" id="addinfo" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">X</button>
                <h4 class="modal-title">添加学生信息</h4>
            </div>
            <div class="modal-body">
                <form name="add" id="add" method="post" action="../Function/add.php" class="form-horizontal" onsubmit="return checkadd()">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="addid">
                            学号
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="addid" name="addid">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="addname">
                            姓名
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="addname" name="addname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="addgender">
                            性别
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="addgender" name="addgender">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="addaddress">
                            地址
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="addaddress" name="addaddress">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="addphone">
                            电话
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="addphone" name="addphone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="addemail">
                            邮箱
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="addemail" name="addemail">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">插入成绩</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
