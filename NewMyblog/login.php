<?php
/**
 * Created by PhpStorm.
 * User: xue
 * Date: 15-6-18
 * Time: 下午3:30
 */
?>
<!DOCUTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="../bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../jquery-1.11.3.js" type="text/javascript"></script>
    <script src="../running-coder-jquery-form-validation-6bc4e6d/jquery.validation.min.js" type="text/javascript"></script>
    <script src="../bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
    <style rel="stylesheet">
        body {
            background-image: url("img/bgkiss.jpeg");
        }

        .container_inner{
            width: 480px;
            height: 500px;
            top: 150px;
            left: 600px;
            position: relative;
        }

    </style>
</head>
<body>

<form method="post" action="#">
    <div class="login">
    <div class="container_inner">
        <div class="form-group">
            <label for="username">姓名</label>
            <input name="username" class="form-control" id="username" placeholder="请输入姓名">
        </div>
        <div class="form-group">
            <label for="password1">密码</label>
            <input name="password1" class="form-control" id="password1" type="password" placeholder="请输入密码">
        </div>
        <input type="submit"  name="submit" class="btn btn-success btn-block"><br/><br/>

        <a href="test_register.php"><button type="button"  name="button" class="btn btn-primary btn-group-lg btn-block">注册</button></a>
    </div>
</form>
<?php
  include("mysql.php");
if(isset($_POST['submit'])) {
    $username = $_POST["username"];
    $password = $_POST["password1"];
    $sql = "select * from user where user_name='$username'";
    $obj = new mysql();
    $res = $obj->sel($sql);
    if ($username != $res['user_name']) {
        echo "该用户名不存在！";
    } elseif ($password != $_POST["password1"]) {
        echo "密码输入不正确";
    } else {
        header('Location:test.php');
    }
}
?>

</body>
</html>