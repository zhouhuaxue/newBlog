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
           left: 1px;
           height: 750px;
           width:820px;
           float: left;
           position: relative;
           border: 1px ;

       }
       #left_content1{
           top:10px;
           left: 5px;
           height: 200px;
           width: 380px;
           float: left;
           position: relative;
           border: 1px solid ;
           background-color:gold;
           margin: 10px 10px 10px 10px;
       }
    #left_content2{
        top:10px;
        left: 5px;
        height: 200px;
        width: 380px;
        float: right;
        position: relative;
        border: 1px solid;
        background-color: yellowgreen;
        margin: 10px 10px 10px 10px;
    }
    #left_content3{
        top:10px;
        left: 5px;
        height: 200px;
        width: 380px;
        float: left;
        position: relative;
        border: 1px solid;
        background-color: blueviolet;
        margin: 10px 10px 10px 10px;
    }
    #left_content4{
        top:10px;
        left: 5px;
        height: 200px;
        width: 380px;
        float: right;
        position: relative;
        border: 1px solid ;
        background-color: aquamarine;
        margin: 10px 10px 10px 10px;
    }
    #left_content5{
        top:10px;
        left: 5px;
        height: 200px;
        width: 380px;
        float: left;
        position: relative;
        border: 1px solid;
        background-color: lightsalmon;
        margin: 10px 10px 10px 10px;
    }
    #left_content6{
        top:10px;
        left: 5px;
        height: 200px;
        width: 380px;
        float: right;
        position: relative;
        border: 1px solid ;
        background-color: hotpink;
        margin: 10px 10px 10px 10px;
    }
    </style>
</head>
<body>
<div class="container">


            <div class="left">
        <div id="left_content1">

        </div>
        <div id="left_content2">

        </div>
                <div id="left_content3">

                </div>
                <div id="left_content4">

                </div>
                <div id="left_content5">

                </div>
                <div id="left_content6">

                </div>
        </div>
        <iframe height="750px"  frameborder="0px" src="test_index_iframe.php"></iframe>

</div>
</body>
</html>