<?php
/**
 * Created by PhpStorm.
 * User: xue
 * Date: 15-6-19
 * Time: 下午11:44
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
            padding: 50px;
        }
        .theme{
            top: 20px;
            width:320px;
            height: 730px;
            position: relative;
            float: left;
            border: 1px solid #dca7a7;
        }
        .content{
            top: 20px;
            width:800px ;
            height: 730px;
            position: relative;
            float: right;
            border: 1px solid darkslateblue;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="theme">
        <ul>
            <li></li>
        </ul>
    </div>
    <div class="content">
        <div class="form-group ">

            <div class="form-group col-lg-12">
                <div class="form-group">
                    <input type="text" id="theme"  class="form-control" placeholder="标题"/>
                </div>
                <div class="form-group">
                    <textarea id="content" class="form-control" rows="3" placeholder="内容"></textarea>
                </div>
                <button class="btn btn-primary">提交</button>
                <ul id="msg" class="list-unstyled">
                    <?php
                    include("mysql.php");
                    $sql = "select * from content order by content_id desc limit 0,5";
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


    </div>
</div>
</body>
</html>