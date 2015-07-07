<?php
/**
 * Created by PhpStorm.
 * User: xue
 * Date: 15-6-18
 * Time: 上午10:48
 */
include("mysql.php");
?>
<!DOCUTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <link href="../bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../jquery-1.11.3.js"></script>
    <script src="../bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
    <style type="text/css">
        body{
            font-weight: bolder;
        }
        .container_inner{
            width: 600px;
            height: 500px;
            top: 150px;
            left: 300px;
            position: relative;
        }
    </style>
</head>
<body>
<form method="post" action="#">
    <div class="container_inner">

        <div class="form-group">

            <input name="password1" class="form-control" id="password1" type="password" placeholder="请输入新密码">
        </div>
        <div class="form-group">

            <input name="password2" class="form-control" id="password2" type="password" placeholder="请再次输入新密码">
        </div>


        <input type="submit"  name="submit" class="btn btn-warning btn-block">
    </div>
</form>
<?php
if(isset($_POST['submit'])){
    $password1=$_POST['password1'];
    $password2=$_POST['password2'];
    if($password2!=$password1){
        echo "前后输入密码不一致，请重新输入！";
        exit;
    }
    $obj= new mysql();
    $sql="insert into user (password) values ($password1') ";
    $rel = $obj->query($sql);
    if ($rel) {
        $_SESSION['user_name'] = $username;
        header("Location:test.php");
    }
}
?>
</body>
</html>