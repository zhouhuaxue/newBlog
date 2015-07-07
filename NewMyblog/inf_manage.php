<?php
/**
 * Created by PhpStorm.
 * User: xue
 * Date: 15-6-18
 * Time: 上午10:48
 */

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
            height: 400px;
            top: 150px;
            left: 300px;
            position: relative;
        }
    </style>
</head>
<body>

  <form action="#" method="post">
      <div class="container_inner">
          <div class="form-group">

              <input name="password" class="form-control" id="password" type="password" placeholder="请输入密码">
          </div>
        <input type="submit"  name="submit" class="btn btn-success ">
      </div>
</form>
  <?php


  if(isset($_POST['submit'])){
      $password=$_POST['password'];
      $_SESSION['password']=$password1;
      $_SESSION['user_name']=$u;
      $sql="select * from user where user_name='$u'";
      $obj = new mysql();
      $res = $obj->sel($sql);

      if($password1!=$password){
          echo "密码错误,请重新登陆！";
          header('Location:login.php');
      }else{
          header('Location:alter.php');
      }


  }
  ?>
</body>
</html>