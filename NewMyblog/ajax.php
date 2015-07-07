<?php
/**
 * Created by PhpStorm.
 * User: xue
 * Date: 15-6-18
 * Time: 上午8:40
 */


include("mysql.php");
$comment = $_POST['comment'];
$username = $_POST['username'];

//内容插入数据库
$obj =new mysql();
$sql = "insert into user_comment (comment_id,username,comment) VALUES (null,'$username','$comment')";
$intId = $obj->query($sql);
if($intId !=0){

    $arrRet = array(
        'status'=> 0,
        'username'=>$username,
        'comment' =>$comment,
        'msg'       =>'sucess',
    );
} else {
    $arrRet = array(
        'status'=> 1,
        'username'=>$username,
        'comment' =>$comment,
        'msg'       =>'error',
    );

}
echo json_encode($arrRet);
?>