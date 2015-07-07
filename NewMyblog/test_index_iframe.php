<!DOCUTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <link href="../bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../jquery-1.11.3.js"></script>
    <script src="../bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
    <style type="text/css">
    body{
    margin: 20px;
        }
    </style>
    </head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: xue
 * Date: 15-6-22
 * Time: 下午9:38
 */
include("mysql.php");
$sql="select user_name from user ";
$obj=new mysql();
$res=$obj->getAll($sql);
$i=0;
foreach($res as $rs):
$i++;

    ?>


    <div>
        <a href="#"> <?php echo $rs['user_name']; ?></a>

    </div>



<?php
endforeach;
?>

</body>
</html>