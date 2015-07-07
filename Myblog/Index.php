<?php
/**
 * Created by PhpStorm.
 * User: xue
 * Date: 15-6-10
 * Time: 下午4:02
 */
session_start();
?>
<!DOCUTYPE html>
<html xmlns="http://www.w3.org/1999/html">

<head>
    <meta content="text/html;charset=utf-8" http-equiv="content-type"/>
<link rel="stylesheet" type="text/css" href="NewCss.css" />

<title>WELCOME MY BOLG</title>


</head>

<body>
<h2>乔雨微博  HELLO WORLD</h2>
 <div class="relative" id="container">
   <div id="header"></div>
     <div id="content"></div>
     <div id="login_outer">
         <div id="login_inner">
           <div id="login_denglu">普通登陆</div>

               <form action="#" method="post">
                   <div id="login_num">

               账号<input type="text" name="user">

                   </div>
                   <div id="login_pw">
             密码<input type="password" name="password">
           </div>
           <div id="login_button">
               <input type="submit" name="submit" value="登陆" />
               </form>
               <div id="login_register">
               没有账号？请<a href="Register1.php" id="" target="_blank">注册</a>

               </div>
           </div>
         </div>
     </div>

<?php
include("mysql.php");
 if(!isset($_POST['submit'])){
     exit('非法访问！');
 } else {
     $user = $_POST['user'];
     $password = $_POST['password'];
     $sql = "select * from user  where user_name='$user'";
     $obj_db = new mysql();
     $res = $obj_db->sel($sql);


     if ($user == $res['user_name'] && $password == $res['password']) {
         $_SESSION['user'] = $user;


         header('Location:Home1.php');
     } else {
         exit ('用户名或密码不正确！请重新输入。');
     }
 }
?>
 </div>
<?php
include('footer.html');
?>
</body>
</html>

