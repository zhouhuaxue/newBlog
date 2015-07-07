<?php
/**
 * Created by PhpStorm.
 * User: xue
 * Date: 15-6-18
 * Time: 下午5:53
 */
?>
<!DOCUTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="../jquery-1.11.3.js"></script>
    <script src="../running-coder-jquery-form-validation-6bc4e6d/jquery.validation.min.js"></script>
</head>
<body>
<input type="button" id="send" value="Ajax获取" />
    <div class="comment">已有评论：</div>
    <div id="resText"></div>
<script>
    //$(function(){
      //  $("#send").click(function(){
         //   $("#resText").load("test.html .para");
        //})
    //})
    $("#resText").load("test.php",{name:"rain",age:"22"},function(){

    })
</script>
<script>
load()
</script>
</body>
</html>