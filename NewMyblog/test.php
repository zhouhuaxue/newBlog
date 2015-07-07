<?php
/**
 * Created by PhpStorm.
 * User: xue
 * Date: 15-6-18
 * Time: 上午10:30
 */
include("mysql.php");
?>
<!DOCUTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="../bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../jquery-1.11.3.js"></script>
    <script src="../bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
    <style rel="stylesheet">
        body {
            padding: 50px;
            background-image: url("img/home2.jpg");
            background-attachment: fixed;
        }
        #contain{
            width: auto;
            height: 800px;
            position: relative;
            background-color: #ffffff;
            /* for IE */
            filter:alpha(opacity=60);
            /*CSS3 standard */
            opacity:0.8;
            color: ;
        /*.myiframe{
            width: auto;
            height: 650px;

        }*/
        }
    </style>
</head>
<body onload="load()">

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <!--<span class="sr-only">Toggle navigation</span>-->
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand" href="#">首页</a>-->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!--<li class="active" id="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
                <li id="active" class="active" ><a class="navbar-brand">朋友圈</a></li>
                <li id="test_my"><a class="navbar-nav">FAVOURITE</a></li>
                <li id="pinglun"><a class="nav navbar-nav">七嘴八舌</a></li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="搜索">
                </div>
                <button type="submit" class="btn btn-default">确定</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">其他<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li id="manage"><a>信息管理</a></li>
                        <li onclick="exit()"><a>退出登陆</a></li>
                        <li class="divider"></li>
                        <li id="zhucenew"><a>注册新账户</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div id="contain">

</div>
<script>

    $(function(){

        $("#pinglun").off('click').click(function(){
            $("#contain").load("New1.php");
        });


        $("#active").click(function(){
            $("#contain").load("test_index1.php");
        });


        $("#zhucenew").click(function(){
            $("#contain").load("test_register_new.php");
        });

        $("#manage").click(function(){
            $("#contain").load("inf_manage.php");
        });
        $("#test_my").click(function(){
            $("#contain").load("test_my.php");
        });
    });
    function exit()
    {
        var r=confirm("确定要离开吗?")
        if (r==true)
        {

            document.location="login.php";
        }
        else
        {

            document.location="test.php";
        }
    }
    function load(){
        $("#contain").load("test_index1.php");

    }
</script>
</body>
</html>