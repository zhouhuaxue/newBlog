<?php
/**
 * Created by PhpStorm.
 * User: xue
 * Date: 15-6-11
 * Time: 下午9:26
 */

error_reporting(E_ALL);
session_start();
?>
<!DOCUTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta content="text/html;charset=utf-8" http-equiv="content-type"/>
    <link rel="stylesheet" type="text/css" href="cssforRegister1.css" />
    <title>乔雨微博注册</title>
</head>
<body>
<h2>注册乔雨HELLO WORLD</h2>
<div class="relative" id="container">

        <div id="header">
            <div id="header_font">我要注册</div>
        </div>
        <div id="regist_outer">
            <div id="regist_inner">
                <form method="post" action="#">
                    <label for="zhanghao">账号：</label><input id="zhanghao" name="zhanghao" placeholder="请输入账号"><br/><br/>
                    <label for="mima">密码：</label><input type="password" id="mima" name="mima1" placeholder="请输入密码"><br/><br/>
                    <label for="mima">密码：</label><input type="password" id="mima" name="mima2" placeholder="请再次输入密码"><br/><br/>
                    <label for="youxiang">邮箱：</label><input id="youxiang" name="youxiang" placeholder="请输入您的邮箱"><br/><br/>
                    <input type="submit" name="submit" value="马上注册">
                    </form>
                <?php
                if(isset($_POST['submit'])) {
                    $zhanghao = $_POST['zhanghao'];
                    $mima1 = $_POST['mima1'];
                    $mima2 = $_POST['mima2'];
                    if ($mima2 != $mima1) {
                        echo "密码前后输入不一致，请重新输入！";
                        exit;
                    }
                    $youxiang = $_POST['youxiang'];
                    $sql = "insert into user (user_name,password,email) VALUES ('$zhanghao','$mima1','$youxiang')";
                    include('mysql.php');
                    $obj_db = new mysql();
                    $rel = $obj_db->query($sql);
                    if ($rel) {
                        $_SESSION['user'] = $zhanghao;
                        header("Location:Home1.php");
                    }
                }
                ?>
            </div>
        </div>
        <div id="introduction">
            <div id="instroduction_inner">
            乔雨简介
            </div>

        </div>
<?php
    include('footer.html');
?>
</div>
</body>
</html>

