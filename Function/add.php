<?php
header("Content-Type:text/html; charset=UTF-8");
include("../Database/connect.php");
@$addid=$_POST['addid'];
@$addname=$_POST['addname'];
@$addgender=$_POST['addgender'];
@$addaddress=$_POST['addaddress'];
@$addphone=$_POST['addphone'];
@$addemail=$_POST['addemail'];
$insquery="insert into student2(id,name,gender,address,phone,email) values('{$addid}','{$addname}','{$addgender}','{$addaddress}','{$addphone}','{$addemail}') ";
$insert=$connect -> query($insquery);
if($insert)
{
    echo "<script>alert('插入成功!');parent.location.href='../View/manage.php';</script>";
}
else
{
    echo "<script>alert('插入失败，请检查输入内容');</script>";
}
?>