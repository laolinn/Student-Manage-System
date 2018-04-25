<?php
header("Content-Type:text/html; charset=UTF-8");
include ('../Database/connect.php');
include ('nav.php');
@$input=$_GET["change"];
?>
<!DOCTYPE>
<html>
<head>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <h1 style="text-align: center">修改学生信息</h1>
            &nbsp;
            <form class="form form-horizontal col-md-offset-2" name="change" id="change" method="post" action="">
                <?php
                $change="select * from student2 where id ='$input'";
                $changequery=$connect -> query($change);
                $changeinfo=$changequery -> fetch_array(MYSQLI_ASSOC);
                echo "<div class='form-group'>  <label for='newid' class='col-md-2 control-label'>学号</label>  <div class='col-md-6'>  <input type='text' name='newid' id='newid' class='form-control' value=".$changeinfo["id"]."></div>     </div>";
                echo "<div class='form-group'>  <label for='newname' class='col-md-2 control-label'>姓名</label>  <div class='col-md-6'><input type='text' name='newname' class='form-control' id='newname' value=".$changeinfo["name"]."></div>   </div>";
                echo "<div class='form-group'>  <label for='newgender' class='col-md-2 control-label'>性别</label> <div class='col-md-6'><input type='text' name='newgender' class='form-control' id='newgender' value=".$changeinfo["gender"]."></div>  </div>";
                echo "<div class='form-group'>  <label for='newaddress' class='col-md-2 control-label'>地址</label> <div class='col-md-6'><input type='text' name='newaddress' class='form-control' id='newaddress' value=".$changeinfo["address"]."></div>   </div>";
                echo "<div class='form-group'>  <label for='newphone' class='col-md-2 control-label'>电话</label> <div class='col-md-6'><input type='text' name='newphone' class='form-control' id='newphone' value=".$changeinfo["phone"]."></div>   </div>";
                echo "<div class='form-group'>  <label for='newemail' class='col-md-2 control-label'>邮箱</label> <div class='col-md-6'><input type='text' name='newemail' class='form-control' id='newemail' value=".$changeinfo["email"]."></div>   </div>";
                echo "<div class='form-group'> <div class='col-md-offset-2 col-md-6'><button type='submit' name='changesub' id='changesub' class='btn btn-primary'>提交</button></div> </div>";
                ?>
            </form>
            <?php
            if($_POST)
            {
                @$finid=$_POST["newid"];
                @$finname=$_POST["newname"];
                @$fingender=$_POST["newgender"];
                @$finaddress=$_POST["newaddress"];
                @$finphone=$_POST{"newphone"};
                @$finemail=$_POST{"newemail"};
                $final="update student2 set id='{$finid}',name='{$finname}',gender='{$fingender}',address='{$finaddress}',phone='{$finphone}',email='{$finemail}' where id='{$input}'  ";
                $finalchange=$connect ->query($final);
                if($finalchange)
                {
                    echo "<script>alert('成功！');parent.location.href='manage.php';</script>";
                }
                else
                {
                    echo $connect ->error;
                }
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>