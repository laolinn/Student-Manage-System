<?php
include('../Database/connect.php');
$delete=$_GET["delete"];
$delquery="delete from student2 where id = '{$delete}'";
$deleteresult=$connect -> query($delquery);
if($deleteresult)
{
    header("location:../View/manage.php");
}
else
{
    echo "删除失败！";
}
?>


