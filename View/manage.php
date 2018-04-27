﻿<?php
include("../Database/connect.php");
include("nav.php");
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap-table.css">
    <script src="../js/bootstrap-table.js"></script>
    <style>
        #table{
            overflow-y: scroll;
            height: 300px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12" >
                    <h1>Exception</h1>
                    <h1>学生管理系统</h1>
                &nbsp;
                <form name="search" id="search" method="post" action="">
                    <div class="form-group">
                        <label for="searchonetext">查询：</label>
                        <input type="text" name="searchtext" id="searchtext" placeholder="请输入姓名">
                        <input type="submit" name="searchsubmit" id="searchsubmit" value="查询/刷新">
                    </div>
                    <div id="table" class="col-lg-12">
                        <table class="table scrolltable table-responsive" data-toggle="table">
                            <thead>
                            <tr>
                                <th>学号</th>
                                <th>姓名</th>
                                <th>性别</th>
                                <th>地址</th>
                                <th>电话</th>
                                <th>邮箱</th>
                                <th>管理</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            @$searchtext=trim($_POST['searchtext']);
                            if($searchtext==null)
                            {
                                $query="select * from student2";
                                $result=$connect -> query($query);
                                while ($row=$result ->fetch_array(MYSQLI_ASSOC))
                                {
                                    echo "<tr>";
                                        echo"<td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["gender"]."</td><td>".$row["address"]."</td><td>".$row["phone"]."</td><td>".$row["email"]."</td>   ";
                                        echo"<td><a onclick=\"return confirm('是否删除？')\" href='../Function/delete.php?delete=".$row["id"]."'>删除</a> &nbsp; <a href='change.php?change=".$row["id"]." '>修改</a> </td>";
                                    echo "</tr>";
                                }
                            }
                            else{
                                $query="select * from student2 where name like '%$searchtext%' ";
                                $result=$connect ->query($query);
                                while ($row=$result -> fetch_array(MYSQLI_ASSOC))
                                {
                                    echo "<tr>";
                                    echo "<td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["gender"]."</td><td>".$row["address"]."</td><td>".$row["phone"]."</td><td>".$row["email"]."</td>   ";
                                    echo"<td><a onclick=\"return confirm('是否删除？')\" href='../Function/delete.php?delete=".$row["id"]."'>删除</a> &nbsp; <a href='change.php?change=".$row["id"]." '>修改</a> </td>";
                                    echo "</tr>";
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="changeinfo" class="modal fade" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">X</button>
                                    <h4 class="modal-title">修改学生信息</h4>
                                </div>
                                <div class="modal-body">
                                        <?php
                                        @$finname=$_POST["newname"];
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
