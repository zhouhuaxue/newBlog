<?php
/**
 * Created by PhpStorm.
 * User: xue
 * Date: 15-6-22
 * Time: 下午2:44
 */

?>
<!DOCUTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="../bootstrap-3.3.4-dist/css/bootstrap.min.css" />
    <script src="../jquery-1.11.3.js"></script>
    <script src="../bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
    <style type="text/css">
        body{
            font-weight: bold;
        }


        .left{
            top: 20px;
            left: 1px;;
            width:820px;
            height:750px;
            float: left;
            position: relative;
            border: 1px ;

        }
        .left_content{

            height: 200px;
            width: 250px;
            float: left;
            position: relative;
            border: 1px solid ;
            background-color:gold;
            margin: 10px 10px 10px 10px;
        }
        #color1{
            background-color: palevioletred;
        }

        #color2{
            background-color: green;
        }
        #color3{
            background-color: darkorange;
        }
        #color4{
            background-color: #a94442;
        }
        #color5{
            background-color: mediumslateblue;
        }
        #color6{
            background-color: deepskyblue;
        }
        #color7{
            background-color: lawngreen;
        }
        #color8{
            background-color: cornflowerblue;
        }
        #color9{
            background-color: fuchsia;
        }
    </style>
</head>
<body>
<div class="container">


    <div class="left">
        <div class="left_content" id="color1">

        </div>
        <div class="left_content" id="color2">

        </div>
        <div class="left_content" id="color3">

        </div>
        <div class="left_content" id="color4">

        </div>
        <div class="left_content" id="color5">

        </div>
        <div class="left_content" id="color6">

        </div>
        <div class="left_content" id="color7">

        </div>
        <div class="left_content" id="color8">

        </div>
        <div class="left_content" id="color9">

        </div>
    </div>
    <iframe height="750px"  frameborder="0px" src="test_index_iframe.php"></iframe>

</div>
</body>
</html>