<!DOCTYPE html>
<html lang="zh-CN" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">

    <link href="../bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
   <style type="text/css">
        body{
            font-weight: bold;
        }
   </style>
</head>
<body>

<nav>

<div class="container" >
<div class="form-group ">

    <div class="form-group col-lg-12">
        <div class="form-group">
            <label for="username">姓名</label>
            <input type="text" id="username"  class="form-control" placeholder="请输入姓名"/>
        </div>
        <div class="form-group">
            <label for="comment" >留言</label>
            <textarea id="comment" class="form-control" rows="3"></textarea>
        </div>
            <button class="btn btn-primary">提交</button>

            <ul id="msg" class="list-unstyled">
            <?php
            include("mysql.php");
            $sql = "select * from user_comment order by comment_id desc limit 5";
            $obj =new mysql();
            $res = $obj->getAll($sql);

            foreach($res as $rs):


            ?>
            <li>
                <div class="img-circle table-bordered text-center" >
                    <p ><?php echo $rs['username']; ?></p>
                    <p><?php echo $rs['comment']; ?></p>
                    <p><?php echo $rs['add_date']; ?></p>
                </div>

            </li>
            <?php
                endforeach;
            ?>
        </ul>

    </div>
    <ul class="pager">
        <li><a href="#">Previous</a></li>
        <li><a href="#">Next</a></li>
    </ul>
</div>

</nav>
<script src="../jquery-1.11.3.js"></script>

<script src="../bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>

</body>
<script>

    $(function(){

        $(".btn").click(function(){
            $.post('ajax.php',{content:$("#comment").val(),username:$("#username").val()},function(data){
                $("#comment").val('');
                $("#username").val('');
                $li ="<li>"+data.username+"<br/>内容："+data.comment+"<li>";
                $("#msg").prepend($li);
            },'json');
        });
    });
</script>
</html>